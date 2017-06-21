
var app = angular.module('website', [
    'ngRoute'
]);


app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider

        .when("/",
        	{
        		templateUrl: "templates/home.html",
        	 	controller: "HomeCtrl"
        	})
        .when("/sobre-nos",
        	{
        		templateUrl: "templates/sobre-nos.html",
        		controller: "SobreCtrl"
        	})
        .when("/midia-performance",
        	{
        		templateUrl: "templates/midia-performance.html",
				controller: "midiaPerformanceCtrl"
			})
        .when("/web-analytics",
        	{
        		templateUrl: "templates/web-analytics.html",
				controller: "webAnalyticsCtrl"
			})
        .when("/desenvolvimento-web",
        	{
        		templateUrl: "templates/desenvolvimento-web.html",
				controller: "desenvolvimentoWebCtrl"
			})
        .when("/planos",
         	{
         		templateUrl: "templates/planos.html",
         		controller: "PlanosCtrl"
         	})
        .when("/contato",
            {
                templateUrl: "templates/contato.html",
                controller: "ContatoCtrl"
            })
        .when('/404',
        	{
        		templateUrl: "templates/404.html"
        	})
        .otherwise("/404");
}]);

/*
 * Controllers
 */
app.controller('HomeCtrl', function ($scope, $location) {

});

app.controller('SobreCtrl', function ($scope, $location) {

});

app.controller('midiaPerformanceCtrl', function ($scope, $location) {

});

app.controller('webAnalyticsCtrl', function ($scope, $location) {

});

app.controller('desenvolvimentoWebCtrl', function ($scope, $location) {

});

app.controller('ServicosCtrl', function ($scope, $location) {

});

app.controller('PlanosCtrl', function ($scope, $location) {

});

app.controller('mobilidadeCtrl', function ($scope, $location) {
	
});

app.controller('ContatoCtrl', function ($scope, $location, $http) {
	//criando o objeto em branco, porém após o submit todos os dados estaram nessa variável
	$scope.formData = {};
	//variavel para ebir ou não a mensagem que o email foi enviado
	$scope.emailEnviado = false;
	//variável para exibir mensagem de erro ao enviar o email
	$scope.emailNaoEnviado = false;
	
	//função que será usada para preparar os dados no formato que poderemos usar no servidor para envio do email
	var param = function(data) {
        var returnString = '';
        for (d in data){
            if (data.hasOwnProperty(d))
               returnString += d + '=' + data[d] + '&';
        }
        // Remove o último & que não é necessário
        return returnString.slice( 0, returnString.length - 1 );
	};
	
	$scope.enviarEmail = function() {
		$http({
			method : 'POST',
			url : 'email.php',
			data : param($scope.formData),
			headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
		})
		//função de callback quando a promise for sucesso
		.success(function(data) {
			//verifica o retorno do servidor se o email foi enviado
			if (data.enviado) {
			   $scope.emailEnviado = true; //ocultamos o formulário e exibimos mensagem de sucesso
			} else {
			  	$scope.emailNaoEnviado = true;
			}
		})
		//função de callback quando a promise for erro (geralmente problema de conexão ou página não existente)
		.error(function(error){
			$scope.emailNaoEnviado = true;
		});
	};
});