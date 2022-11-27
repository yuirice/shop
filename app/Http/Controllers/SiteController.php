<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        return view("index");
    }

   public function shop(){
    return view("shop");
   }
   public function about(){
    return view("about");
   }
   public function product_details(){
    return view("product_details");
   }
    public function contact()
    {
        return view("contact");
    }
  public function Cart()
    {
        return view("Cart");
    }
}