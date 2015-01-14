csycApp.controller('JournalCtrl',[ '$scope', '$http', 'JournalFactory',
	function($scope, $http, JournalFactory) {

		//set vars
	 	$scope.data = {};
	 	$scope.totalPer = '';

			$scope.JournalWGMH          = JournalFactory.JournalWGMH();
			$scope.JournalBehavior      = JournalFactory.JournalBehavior();
			$scope.JournalChange        = JournalFactory.JournalChange();
			$scope.JournalReentry       = JournalFactory.JournalReentry();
			$scope.JournalFamily        = JournalFactory.JournalFamily();
			$scope.JournalVictim        = JournalFactory.JournalVictim();
			$scope.JournalFeelings      = JournalFactory.JournalFeelings();
			$scope.JournalRelationships = JournalFactory.JournalRelationships();


	 	//watch for $scope.data to change and update values
	 	$scope.$watch('data',function(){
				$scope.JournalWGMHPer          = getTotal($scope.data.rx_what_got_me_here)/getSize($scope.JournalWGMH);
				$scope.JournalBehaviorPer      = getTotal($scope.data.rx_responsible)/getSize($scope.JournalBehavior);
				$scope.JournalChangePer        = getTotal($scope.data.rx_change)/getSize($scope.JournalChange);
				$scope.JournalReentryPer       = getTotal($scope.data.rx_reentry)/getSize($scope.JournalReentry);
				$scope.JournalFamilyPer        = getTotal($scope.data.rx_family)/getSize($scope.JournalFamily);
				$scope.JournalVictimPer        = getTotal($scope.data.rx_victim)/getSize($scope.JournalVictim);
				$scope.JournalFeelingsPer      = getTotal($scope.data.rx_feelings)/getSize($scope.JournalFeelings);
				$scope.JournalRelationshipsPer = getTotal($scope.data.rx_relationships)/getSize($scope.JournalRelationships);

				var j1 = ($scope.data.rx_what_got_me_here) ? getSize($scope.JournalWGMH):'0';
				var j2 = ($scope.data.rx_change) ? getSize($scope.JournalChange):'0';
				var j3 = ($scope.data.rx_reentry) ? getSize($scope.JournalReentry):'0';
				var j4 = ($scope.data.rx_family) ? getSize($scope.JournalFamily):'0';
				var j5 = ($scope.data.rx_feelings) ? getSize($scope.JournalFeelings):'0';
				var j6 = ($scope.data.rx_victim) ? getSize($scope.JournalVictim):'0';
				var j7 = ($scope.data.rx_relationships) ? getSize($scope.JournalRelationships):'0';
				var j8 = ($scope.data.rx_responsible) ? getSize($scope.JournalBehavior):'0';

		 	$scope.TotalAssignments =   +j1 + +j2 + +j3 + +j4 + +j5 + +j6 + +j7 + +j8;
		 	// $scope.TotalAssignments = getSize($scope.JournalWGMH) +
				// 												getSize($scope.JournalChange) +
				// 												getSize($scope.JournalReentry) +
				// 												getSize($scope.JournalFamily) +
				// 												getSize($scope.JournalVictim) +
				// 												getSize($scope.JournalFeelings) +
				// 												getSize($scope.JournalRelationships) +
		 	// 													getSize($scope.JournalBehavior);



		 	$scope.TotalCompleted = getTotal($scope.data.rx_what_got_me_here) +
		 													getTotal($scope.data.rx_change) +
		 													getTotal($scope.data.rx_reentry) +
		 													getTotal($scope.data.rx_family) +
		 													getTotal($scope.data.rx_feelings) +
		 													getTotal($scope.data.rx_victim) +
		 													getTotal($scope.data.rx_relationships) +
														 	getTotal($scope.data.rx_responsible);


			$scope.totalPer = $scope.TotalCompleted/$scope.TotalAssignments;

			console.log($scope.TotalCompleted);
			console.log($scope.TotalCompleted);
	 	});



	 	function getJournals() {
			JournalFactory.getJournals($scope.resident_id)
				.success(function(data){
					$scope.data = data;
				})
 			.error(function(data){
 				toastr.error('An error occurred while attempting to retrieve the list of residents');
 			});
	 	};

	 	function getSize(obj) {
	    var size = 0, key;
	    for (key in obj) {
	       if (obj.hasOwnProperty(key)) size++;
	    }
	    return size;
		};

		$scope.updateJournal = function (resident_id, journal, journal_id, value) {
			JournalFactory.updateJournal(resident_id, journal, journal_id, value)
				.success(function(data){
					$scope.data = data;
					toastr.success('Assignment Saved!');
				})
				.error(function(data){
					toastr.error('An error occurred while attempting to retrieve the list of residents');
				});
		};

	 	getJournals();

	 	function getTotal(journal){
	 		cnt = 0;
	 		angular.forEach(journal, function(value){
	 			if(value === true){ cnt++; }
	 		});
	 		return cnt;
	 	};

	}
]);

csycApp.factory('JournalFactory',['$http', function ($http) {
	return {

		getJournals :	function (id) {
			return $http.get('/treatment/forwardThinking/getJournals/'+id);
		},

		updateJournal: function	(resident_id, journal, journal_id, value) {
			return $http.post('/treatment/forwardThinking/updateJournal',{
					resident_id: resident_id,
					journal: journal,
					journal_id: journal_id,
					value: value
			});
		},

		JournalWGMH: function () {
			return {
				"001" : "Its Up To Me",
				"002" : "An Opportuninty For Change",
				"003" : "Stuck In My Box",
				"004" : "Stuck In My Box or Breaking Free",
				"005" : "Looking At My Strengths",
				"006" : "My Personal Journey",
				"007" : "Getting Specific About Issues.",
				"008" : "My Top Three Issues.",
				"009" : "Obstacles to Change",
				"010" : "Positive Attitudes for Successful Change",
				"011" : "Four Key Focus Areas",
				"012" : "What Are My Hot Spots",
				"013" : "How Can I Control My Anger",
				"014" : "Learning To Handle Peer Pressure",
				"015" : "Working Effectively With Authority Figures",
				"016" : "Staying Connected With Loved Ones",
				"017" : "On My Own Asking For Help",
				"018" : "Starting to Work on Your Readiness Statement",
				"019" : "Where Can I Go From Here."
			}
		},

		JournalBehavior: function () {
			return {
				"001" : "Thinking About Positive Behavior Change",
				"002" : "Your Life Conditions",
				"003" : "The Situations",
				"004" : "How You Think: Your Self-Talk",
				"005" : "How You Feel",
				"006" : "Your Behavior",
				"007" : "Consequences: The Big Connection",
				"008" : "Taking a Look at the Payoffs of Negative Behavior",
				"009" : "Irresponsible vs. Responsible Behavior",
				"010" : "Weighing the Payoffs and Costs of Your Behavior",
				"011" : "Recognize Your High-Risk Situations",
				"012" : "Apply Strategies to Manage Your High-Risk Situations",
				"013" : "Take Advantage of Your Positive Situations",
				"014" : "Self-Talk Works as a Filter",
				"015" : "Life Comes With Difficulties",
				"016" : "Im Responsible For My Actions",
				"017" : "Good Comes From My Honest Works",
				"018" : "I Can Take Appropriate Action",
				"019" : "Rules Apply To Me Too.",
				"020" : "I Treat Everyone Fairly",
				"021" : "I Have Options and Choices",
				"022" : "I Can See Positives and Negatives",
				"023" : "Understanding Your Feelings",
				"024" : "Handling Difficult Feelings",
				"025" : "Feelings and Body Signals",
				"026" : "How to Do a Behavior Check",
				"027" : "Behavior Check... Putting It All Together",
				"028" : "Practice, Practice and More Practice",
				"029" : "Checking Your Behavior",
				"030" : "The Benefits of Checking Your Behavior",
				"031" : "Maintaining Your Momentum",
				"032" : "Where Can I Go From Here"
			}
		},

		JournalChange: function () {
			return {
				"001" : "Am I Ready For Change",
				"002" : "My Top Three Issues",
				"003" : "Taking Three Big Steps",
				"004" : "Seek Support",
				"005" : "Get The Facts",
				"006" : "Use Self-Reflection",
				"007" : "Explore Your Feelings",
				"008" : "Lead By Example",
				"009" : "Setting My Change Goals",
				"010" : "Visualize Your Future",
				"011" : "Create A Support Network",
				"012" : "Explore Your Motivations",
				"013" : "Go Public",
				"014" : "Use Rewards",
				"015" : "Use Substitutes",
				"016" : "Manage Your Environment",
				"017" : "Ask For Help",
				"018" : "Maintaining Momentum",
				"019" : "Where Do I Go From Here"
			}
		},

		JournalReentry: function () {
			return {
				"001" : "What is Re-Entry",
				"002" : "Maintaining Positive Change",
				"003" : "Working with my Change Team",
				"004" : "Reviewing My Individual Change Plan",
				"005" : "Issue 1",
				"006" : "Issue 2",
				"007" : "Issue 3",
				"008" : "Are My Expectations Realistic",
				"009" : "Key Focus Area for Re-Entry",
				"010" : "Handling Negative Peer-Social Pressure",
				"011" : "Working With Authority Figures",
				"012" : "Strenghening My Family Ties",
				"013" : "Cross The Bridge",
				"014" : "Where Will I Live",
				"015" : "My Financial Situation",
				"016" : "A Realistic Approach To Planning and Budgeting",
				"017" : "How Will I Spend My Time.",
				"018" : "Planning My Schedule",
				"019" : "Taking Care of My Health",
				"020" : "The Role of Work",
				"021" : "Your Willingness to Learn",
				"022" : "Exploring Your Interests",
				"023" : "Exploring Your Skills",
				"024" : "Finding a Job",
				"025" : "Lead With Your Strengths",
				"026" : "Applying for A Job",
				"027" : "Job Interviews",
				"028" : "Decision Making Skills",
				"029" : "Problem-Solving Skills",
				"030" : "Alcohol and Drug Refusal Skills",
				"031" : "Strenghening Your Support Network"
			}
		},

		JournalFamily: function () {
			return {
				"001" : "What Is Family To Me",
				"002" : "The Members Of My Family",
				"003" : "Positive and Negative Traits Passed Down",
				"004" : "Improving Family Relationships",
				"005" : "Check Yourself First",
				"006" : "Check Yourself First w/ Behavior Check",
				"007" : "Practice Good Communication ",
				"008" : "Share Positive Experiences",
				"009" : "Have Realistic Expectations",
				"010" : "Do No Harm",
				"011" : "Handle Conflicts Effectively",
				"012" : "Review the Ground Rules",
				"013" : "Setting Relationship Goals",
				"014" : "My First Relationship Goal",
				"015" : "My Second Relationship Goal",
				"016" : "Exploring Parental Roles",
				"017" : "My Parenting Goal",
				"018" : "Where Can I Go From Here"
			}
		},

		JournalVictim: function () {
			return {
				"001" : "Taking Responsibility for My Choices",
				"002" : "The Chain of Choices",
				"003" : "My Committing Offense",
				"004" : "My Chain of Choices (2)",
				"005" : "The Revised Story of My Committing Offense",
				"006" : "Developing Empathy",
				"007" : "Myth and Facts About Victims",
				"008" : "The Ripple Effect of Crime",
				"009" : "The Ripple Effect of My Committing Offense",
				"010" : "What Is The Impact On My Victims",
				"011" : "My Victims Impact Statement",
				"012" : "The Impact On My Victims Families",
				"013" : "The Impact On Me",
				"014" : "The Impact On My Family",
				"015" : "The Impact On The Community",
				"016" : "Righting My Wrongs",
				"017" : "Making Amends With Your Victims",
				"018" : "My Restitution",
				"019" : "Making Amends With My Victims Family",
				"020" : "Making Amends With Myself",
				"021" : "Making Amends With My Family",
				"022" : "Making Amends with My Community",
				"023" : "Breaking The Cycle of Harmful Behavior",
				"024" : "Being Accountable For My Behavior",
				"025" : "My Responsibility Plan",
				"026" : "Where Can I Go Fron Here."
			}
		},

		JournalFeelings: function () {
			return {
				"001" : "Feelings and Irresponsible Behavior",
				"002" : "Exploring Your Own Bag Of Feelings",
				"003" : "Five Helpful Facts About Your Feelings",
				"004" : "4 Feelings That Can Lead To Trouble",
				"005" : "Boredom",
				"006" : "Fear",
				"007" : "Resentment",
				"008" : "Anger",
				"009" : "Anger and the Body",
				"010" : "Anger Portrait",
				"011" : "Dangerous Responses to Anger",
				"012" : "Look For The Hidden Should",
				"013" : "Negative Self Talk May Intensify Anger",
				"014" : "My Most Difficult Feelings",
				"015" : "Seven Proven Strategies",
				"016" : "My Self-Management Plan",
				"017" : "Applying My Coping Skills",
				"018" : "Where Can I Go From Here"
			}
		},

		JournalRelationships: function () {
			return {
				"001" : "What are Relationships",
				"002" : "Healthy vs. Unhealthy Relationships",
				"003" : "My Relationship Diagram",
				"004" : "Important Relationships",
				"005" : "Positive Qualities Lead To Healthy Relationships",
				"006" : "Expressing Yourself",
				"007" : "Three Elements Of Communication",
				"008" : "The Benefits of Healthy Relationships",
				"009" : "Rethinking My Relationship Diagram",
				"010" : "Repairing Relationships",
				"011" : "Living Unhealthy Relationships",
				"012" : "Evaluating My Relationships",
				"013" : "Relationship 1",
				"014" : "Relationship 2",
				"015" : "Relationship 3",
				"016" : "Learning To Handle Negative Peer Pressure",
				"017" : "Where Can I Go From Here."
			}
		}

	}//end return
}]);

csycApp.filter('percentage', ['$window', function ($window) {
        return function (input, decimals, suffix) {
            decimals = angular.isNumber(decimals)? decimals :  3;
            suffix = suffix || '%';
            if ($window.isNaN(input)) {
                return '';
            }
            return Math.round(input * 100) + suffix
        };
    }]);