<?php

namespace App\Http\Controllers;

use App\Models\Addcategory;
use App\Models\Addpage;
use App\Models\Addproduct;
use App\Models\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\session; 

use function Ramsey\Uuid\v1;

class ViewController extends Controller
{
    public function login_form(){
            return view('home');
    }

    public function page_summary(){
        if(Auth::check()){
            $data = Addpage::paginate(4);
            return view('pagesummary', compact('data'));
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }
    
    public function add_page(){
        if(Auth::check()){
            return view('addpage');
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

    public function category_summary(){
        if(Auth::check()){
            $data = Addcategory::paginate(4);
            return view('categorysummary', compact('data'));
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

    public function add_category(){
        if(Auth::check()){
            return view('addcategory');
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

    public function product_summary(){
        if(Auth::check()){
            $products=Addproduct::with('category')->paginate(2);
            return view('productsummary',compact('products'));
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

    public function add_product(){
        if(Auth::check()){
            $data = Addcategory::all();
            return view('addproduct', compact('data'));
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }
    
    public function password(){
        if(Auth::check()){
            return view('changepassword');
        }
        return redirect("/login-form")->with('error','Opps! You do not have access');
    }

}
