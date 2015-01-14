
csycApp.controller('SearchAllCtrl',['$scope', '$http', 'Resident',
	function ($scope, $http, Resident) {

		$scope.searchAll = {};
		$scope.newData = {};

		$scope.getNewData = function(){
			Resident.get($scope.searchAll)
				.success(function (data) {
					$scope.newData = data;
				})
				.error(function(data){
					console.log('error:' + data);
				});
		}
}]);

csycApp.factory('Resident', ['$http', function ($http){
	return {
		get : function(query) {
			console.log(query)
			return $http({
				method: 'POST',
				url: '/searchAll',
				headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
				data: $.param(query)
			});
		}
	}
}]);

csycApp.directive('typeahead',['Resident', function(Resident){
	return{
		restrict: 'E',
		scope: {
			inputData: '='
		},
		replace:true,
		controller: function($scope){


		},
		templateUrl: '/app/SearchAll/typeahead.html',
		link: function(scope, element, attrs){

		scope.getNewData = function(searchAll){
			Resident.get(scope.searchAll)
				.success(function (data) {
					console.log(data);
					newData = data;
				})
				.error(function(data){
					console.log('error:' + data);
				});
		}

    //FirstName Search Engine
    var firstNameTypeahead = new Bloodhound({
      datumTokenizer: function (d) {
          return Bloodhound.tokenizers.whitespace(d.value);
      },
      queryTokenizer: Bloodhound.tokenizers.whitespace,
      prefetch: {
          url: '/searchAll/api/all',
          filter: function ( parsedResponse ) {
            // do whatever processing you need here
            return parsedResponse;
          }
      },
      remote: {
          url: '/searchAll/api/%QUERY',
          filter: function ( parsedResponse ) {
            // do whatever processing you need here
            return parsedResponse;
          }
      }
    });
    firstNameTypeahead.initialize();

    //instantiate the typeahead UI for First Name Lookup
    $('#bloodhound .typeahead').typeahead(null, {
      minLength: 3,
      displayKey: 'value',
      source: firstNameTypeahead.ttAdapter(),
		  templates: {
		     empty: [
		      '<div class="empty-message">',
		      'no results found',
		      '</div>'
		    ].join('\n'),
		    suggestion: function(data){
		      return '<div class="clearfix"><img src="/img/no-image.jpg" class="img-responsive pull-left" style="max-height:40px;" height="20" alt=""><p style="padding-left:10px;">' + data.resident_id + ' ' + data.last_name + ', ' + data.first_name + '</p></div>';
		    }
		  },
		  engine: Hogan

    }).on('typeahead:selected', function (object, data) {
      console.log(data.resident_id);
      window.location.href = "/resident/"+data.resident_id;
    });

		}
	}

}]);