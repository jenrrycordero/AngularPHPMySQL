<!DOCTYPE html>
<html>
    <head>
    
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Read Products</title>
        
        <!-- include material design CSS -->
        <link rel="stylesheet" href="libs/materialize/css/materialize.min.css" />
        
        <!-- include material design icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        
        <!-- Custom CSS file -->
        <link rel="stylesheet" href="libs/css/style.css" />
    </head>
    <body>
        
        <!-- page content and controls will be here -->
        <div class="container" ng-app="myApp" ng-controller="productsCtrl">
            <div class="row">
                <div class="col s12">
                    <h4>Products</h4>
                    
                    <!-- used for searching the current list -->
                    <input type="text" ng-model="search" class="form-control" placeholder="Search product...">
                    
                    <!-- table that shows product record list -->
                    <table class="hoverable bordered">
                        <thead>
                            <tr>
                                <th class="text-align-center">ID</th>
                                <th class="width-30-pct">Name</th>
                                <th class="width-30-pct">Description</th>
                                <th class="text-align-center">Price</th>
                                <th class="text-align-center">Action</th>
                            </tr>
                        </thead>
                        <tbody ng-init="getAll()">
                            <tr ng-repeat="d in names | filter:search">
                                <td class="text-align-center">{{ d.id }}</td>
                                <td>{{ d.name }}</td>
                                <td>{{ d.description }}</td>
                                <td class="text-align-center">{{ d.price }}</td>
                                <td>
                                    <a ng-click="readOne(d.id)" class="waves-effect waves-light btn margin-bottom-1em"><i class="material-icons left">edit</i>Edit</a>
                                    <a ng-click="deleteProduct(d.id)" class="waves-effect waves-light btn margin-bottom-1em"><i class="material-icons left">delete</i>Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <!-- floating button for creating product -->
                    <div class="fixed-action-btn" style="bottom:45px; right:24px;">
                        <a class="waves-effect waves-light btn modal-trigger btn-floating btn-large red" href="#modal-product-form" ng-click="showCreateForm()"><i class="large material-icons">add</i></a>
                    </div>
                    
                    <!-- modal for creating new product -->
                    <div id="modal-product-form" class="modal">
                        <div class="modal-content">
                            <h4 id="modal-product-title">Create New Product</h4>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input ng-model="name" type="text" class="validate" id="form-name" placeholder="Type name here..." />
                                    <label for="name">Name</label>
                                </div>
                                <div class="input-field col s12">
                                    <textarea ng-model="description" type="text" class="validate materialize-textarea" placeholder="Type description here..."></textarea>
                                    <label for="description">Description</label>
                                </div>
                                <div class="input-field col s12">
                                    <input ng-model="price" type="text" class="validate" id="form-price" placeholder="Type price here..." />
                                    <label for="price">Price</label>
                                </div>
                                <div class="input-field col s12">
                                    <a id="btn-create-product" class="waves-effect waves-light btn margin-bottom-1em" ng-click="createProduct()"><i class="material-icons left">add</i>Create</a>
                                    
                                    <a id="btn-update-product" class="waves-effect waves-light btn margin-bottom-1em" ng-click="updateProduct()"><i class="material-icons left">edit</i>Save Changes</a>
                                    
                                    <a class="modal-action modal-close waves-effect waves-light btn margin-bottom-1em"><i class="material-icons left">close</i>Close</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end #modal-product-form -->
                    
                </div> <!-- end col s12 -->
            </div> <!-- end row -->
        </div> <!-- end container -->
        
        <!-- include jquery -->
        <script type="text/javascript" src="libs/js/jquery-1.12.3.js"></script>
        
        <!-- material design js -->
        <script src="libs/materialize/js/materialize.min.js"></script>
        
        <!-- include angular js -->
        <script src="libs/js/angular.js"></script>
        
        <!-- include custom angular code js -->
        <script src="libs/js/script.js"></script>
        
    
    </body>
</html>