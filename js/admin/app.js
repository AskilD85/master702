var app = angular.module('productsTable', ["ngRoute"]);
app.config(function($routeProvider, $locationProvider){
    $routeProvider
        .when("/:id", {
            templateUrl : "/views/product.tpl.php"
        })
     $locationProvider.html5Mode(true);
})

app.controller('productsController', function($scope,$http){
    
    $scope.getInfoByProductId = function(id) {
        $http({
            method: "GET",
            url: "cabinet/products/getProduct",
            params:{id: id},
        }).then(function(result){
            $scope.productId = result.data.id;
            $scope.productName = result.data.name;
            $scope.productPrice = result.data.price;
            
        })
        
    }
    
    $scope.saveProduct = function(){
        //реализовать
    }
    $scope.deleteProduct = function(){
         //реализовать
    }
});