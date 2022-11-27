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
   public function Confirmation()
    {
        return view("Confirmation");
    }
   public function element()
    {
        return view("element");
    }
   public function Login()
    {
        return view("Login");
    }
   public function Product_Checkout()
    {
        return view("Product_Checkout");
    }
  public function blog()
    {
        return view("blog");
    }
  public function blog_details()
    {
        return view("blog_details");
    }
}
