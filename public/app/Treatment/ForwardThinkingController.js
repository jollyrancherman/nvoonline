csycApp.controller('ForwardThinkingCtrl',[ '$scope', '$http', 'TreatmentFactory',
	function($scope, $http, TreatmentFactory) {

	 	$scope.residents = {};

	 	// function getResidents() {
	 	// 	$http.get('/treatment/forwardThinking/api')
	 	// 		.success(function(data){
	 	// 			// console.log(data);
	 	// 			$scope.residents = data;
	 	// 		})
	 	// 		.error(function(data){
	 	// 			toastr.error('An error occurred while attempting to retrieve the list of residents');
	 	// 		});
	 	// };

	 	$scope.getResidents = function(){
	 		console.log('getResidents');
	 		$scope.getResidentFromDB().then(function(response, status){
	 			$scope.residents = response.data;
	 		});
	 	};

	 	$scope.getResidentFromDB = function(){
	 			return $http.get('/treatment/forwardThinking/api');
	 	};


	 	$scope.assignTreatment = function(treatment, resident_id, t_value){
	 		// console.log(treatment+resident_id+t_value);
	 		$http.post('/treatment/forwardThinking/update', {
				resident_id: resident_id,
				treatment: treatment,
				t_value: t_value
			})
	 			.success(function(data){
	 				$scope.residents = data;
	 				toastr.success('Change Complete.')
	 			})
	 			.error(function(data){
	 				toastr.error('An error occurred while attempting to add the journal.');
	 			});

	 		// getResidents();
	 	};

	 	function init() {
	 		$scope.getResidents();
	 	}

	 	init();
	}
]);

csycApp.factory('TreatmentFactory',['$http', function ($http) {
	return {
		getForwardThinking : function () {
			return $http.get('/treatment/forwardThinking/api');
		},

		update: function (treatment, resident_id, t_value){

			return $http.post('/treatment/forwardThinking/update', {
				resident_id: resident_id,
				treatment: treatment,
				t_value: t_value
			});
		}

	}//end return
}]);

// csycApp.filter('FT_button_text', function () {
//   return function (input) {
//     if (input == true) {
//       return 'assigned';
//     } else {
//       return 'assign';
//     }
//   };
// });
// csycApp.filter('FT_button_class', function () {
//   return function (input) {
//     if (input == true) {
//       return 'green';
//     } else {
//       return '';
//     }
//   };
// });