angular.module('pageCtrl', [])

	.controller('pageController', function($scope, $http, PageServicer) {
		// object to hold all the data for the new comment form
		$scope.pageData = {};
		
		$scope.currentPage = 12;

		// loading variable to show the spinning loading icon
		$scope.loading = true;
		
		// get all the pages first and bind it to the $scope.pages object
		PageServicer.get()
			.success(function(data) {
				$scope.pages = data;
				$scope.loading = false;
			});


		// function to handle submitting the form
		$scope.submitPage = function() {
			$scope.loading = true;

			// save the comment. pass in comment data from the form
			PageServicer.save($scope.pageData)
				.success(function(data) {

					// if successful, we'll need to refresh the comment list
					PageServicer.get()
						.success(function(getData) {
							$scope.pages = getData;
							$scope.loading = false;
						});

				})
				.error(function(data) {
					console.log(data);
				});
		};

		// function to handle deleting a comment
		$scope.deletePage = function(id) {
			$scope.loading = true; 

			PageServicer.destroy(id)
				.success(function(data) {

					// if successful, we'll need to refresh the comment list
					PageServicer.get()
						.success(function(getData) {
							$scope.pages = getData;
							$scope.loading = false;
						});

				});
		};

	});