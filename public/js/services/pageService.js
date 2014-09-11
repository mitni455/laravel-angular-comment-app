angular.module('pageService', [])

	.factory('PageServicer', function($http) {

		return {
			get : function() {
				return $http.get('/api/pages');
			},
			show : function(id) {
				return $http.get('/api/pages/' + id);
			},
			save : function(pageData) {
				return $http({
					method: 'POST',
					url: '/api/pages',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(pageData)
				});
			},
			destroy : function(id) {
				return $http.delete('/api/pages/' + id);
			}
		}

	});