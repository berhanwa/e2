<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller
{



    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $products = $this->app->db()->all('products'); 

        return $this->app->view('products/index', ['products' => $products]);
    }
    

    public function show()
    {
        $sku = $this->app->param('sku');

        if(is_null($sku)){
             $this->app->redirect('/products');
        }

        $productQuery = $this->app->db()->findByColumn('products', 'sku', '=', $sku);


        if(empty($productQuery)){
            return $this->app->view('products/missing');
        } else {
            $product = $productQuery[0];
        }


        $reviewSaved = $this->app->old('reviewSaved');

        $reviews = $this->app->db()->findByColumn('reviews', 'product_id', '=', $product['id']);

        return $this->app->view('products/show', [
            'product' => $product,
            'reviewSaved' => $reviewSaved,
            'review' => $reviews
        ]);
    }

    public function saveReview()
    {

        $this->app->validate([
            'sku' => 'required',
            'product_id' => 'required',
            'name' => 'required', # Note how multiple validation rules are separated by a |
            'review' => 'required|minLength:200' # Note that some rules accept paramaters, which follow a :
        ]);

        $product_id = $this->app->input('product_id');
        $sku = $this->app->input('sku');
        $name = $this->app->input('name');
        $review = $this->app->input('review');


        # Set up all the variables we need to make a connection
        $this->app->db()->insert('reviews', [
            'product_id' => $product_id,
            'name' => $name,
            'review' => $review
        ]);

        return $this->app->redirect('/product?sku=' . $sku, ['reviewSaved' => true]);
    }

    public function new()
    {
        $productSaved = $this->app->old('productSaved');
        $sku = $this->app->old('sku');

        return $this->app->view('product/new' [
            'productSaved' => $productSaved,
            'sku' => $sku
        ]);
    }   
}