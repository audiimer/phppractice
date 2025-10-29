<?php

class Products
{
    public function index()
    {
        require "src/models/product.php"; // include the model file containing data and logic

        $model = new Product();            // create an instance of the Model class
        $products = $model->getData();   // retrieve the list of products from the model

        require "views/producs_index.php"; // include the view file to display the products
    }
}
