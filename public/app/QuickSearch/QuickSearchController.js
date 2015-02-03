nvoApp.controller('QuickSearchCtrl', ['$scope','$http','SearchFactory','keyboardManager',
	function ($scope, $http, SearchFactory,keyboardManager) {

		$('#spinner').hide();

		$scope.voters = {};

		$scope.query = function (searchArray) {
			$('#spinner').show();
 			SearchFactory.getResults(searchArray)
 				.success(function(data){

					$('#spinner').hide();
 					$scope.voters = data;

 				})
	 			.error(function(data){
	 				$('#spinner').hide();
	 			}); 				;
		};

		keyboardManager.bind('ctrl+o', function() {
				$('#county').focus();
		});
		keyboardManager.bind('ctrl+f', function() {
				$('#fname').focus();
		});
		keyboardManager.bind('ctrl+l', function() {
				$('#lname').focus();
		});
		keyboardManager.bind('ctrl+m', function() {
				$('#mname').focus();
		});
		keyboardManager.bind('ctrl+a', function() {
				$('#street').focus();
		});
		keyboardManager.bind('ctrl+c', function() {
				$('#city').focus();
		});
		keyboardManager.bind('ctrl+z', function() {
				$('#zip').focus();
		});
		keyboardManager.bind('ctrl+v', function() {
				$('#voter').focus();
		});
		keyboardManager.bind('ctrl+b', function() {
				$('#birthday').focus();
		});
		keyboardManager.bind('ctrl+x', function() {
				// $(':input[type=text]').val('');
				$scope.search.first = '';
				$scope.search.last = '';
				$scope.search.middle = '';
				$scope.search.street = '';
				$scope.search.city = '';
				$scope.search.zip = '';
				$scope.search.voter_id = '';
				$scope.search.birthday = '';
				$('#fname').focus();
				$scope.voters = {};
		});
	}//end of Dependancy Injection
]);


nvoApp.factory('SearchFactory', ['$http',
	function ($http) {
		return	{
			getResults: function(array){
				return $http.post('/quicksearch/api', {
					params: array
				});
			}
		}
	}//end of Dependancy Injection
]);

nvoApp.filter('name_cap', function () {
    return function(input, all) {
      return (!!input) ? input.replace(/([^\W_]+[^\s-]*) */g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();}) : '';
    }
  });

// csycApp.controller('ForwardThinkingCtrl',[ '$scope', '$http', 'TreatmentFactory',
// 	function($scope, $http, TreatmentFactory) {

// 	 	$scope.residents = {};

// 	 	// function getResidents() {
// 	 	// 	$http.get('/treatment/forwardThinking/api')
// 	 	// 		.success(function(data){
// 	 	// 			// console.log(data);
// 	 	// 			$scope.residents = data;
// 	 	// 		})
// 	 	// 		.error(function(data){
// 	 	// 			toastr.error('An error occurred while attempting to retrieve the list of residents');
// 	 	// 		});
// 	 	// };

// 	 	$scope.getResidents = function(){
// 	 		console.log('getResidents');
// 	 		$scope.getResidentFromDB().then(function(response, status){
// 	 			$scope.residents = response.data;
// 	 		});
// 	 	};

// 	 	$scope.getResidentFromDB = function(){
// 	 			return $http.get('/treatment/forwardThinking/api');
// 	 	};


// 	 	$scope.assignTreatment = function(treatment, resident_id, t_value){
// 	 		// console.log(treatment+resident_id+t_value);
// 	 		$http.post('/treatment/forwardThinking/update', {
// 				resident_id: resident_id,
// 				treatment: treatment,
// 				t_value: t_value
// 			})
// 	 			.success(function(data){
// 	 				$scope.residents = data;
// 	 				toastr.success('Change Complete.')
// 	 			})
// 	 			.error(function(data){
// 	 				toastr.error('An error occurred while attempting to add the journal.');
// 	 			});

// 	 		// getResidents();
// 	 	};

// 	 	function init() {
// 	 		$scope.getResidents();
// 	 	}

// 	 	init();
// 	}
// ]);

// csycApp.factory('SearchFactory',['$http', function ($http) {
// 	return {
// 		getForwardThinking : function () {
// 			return $http.get('/treatment/forwardThinking/api');
// 		},

// 		update: function (treatment, resident_id, t_value){

// 			return $http.post('/treatment/forwardThinking/update', {
// 				resident_id: resident_id,
// 				treatment: treatment,
// 				t_value: t_value
// 			});
// 		}

// 	}//end return
// }]);

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