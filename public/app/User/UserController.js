nvoApp.controller('UserCtrl', ['$scope', 'UserFactory',
	function($scope, UserFactory) {
		$scope.users = {};

	  function 	init () {
				UserFactory.getUsers().then(function(res, stat) {
					if(res.data.status == 'OK'){
				    $scope.users = res.data.data;
					}else{
						toastr.error('An error occurred while retrieving your user list');
					}
				});
	  }

	  init();
	}]);

nvoApp.factory('UserFactory', ['$http', function ($http) {
	return {
		getUsers: function () {
			return $http.get('/user/api/getAll');
		}
	}
}]);