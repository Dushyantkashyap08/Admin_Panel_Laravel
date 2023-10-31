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
    public function home(){
            return view('home');
    }

    public function page_summary(){
        if(Auth::check()){
            $data = Addpage::paginate(4);
            return view('page-summary', compact('data'));
        }
        return redirect("/home")->with('error','Opps! You do not have access');
    }
    
    public function add_page(){
        if(Auth::check()){
            return view('add-page');
        }
        return redirect("/home")->with('error','Opps! You do not have access');
    }

    public function category_summary(){
        if(Auth::check()){
            $data = Addcategory::paginate(4);
            return view('category-summary', compact('data'));
        }
        return redirect("/home")->with('error','Opps! You do not have access');
    }

    public function add_category(){
        if(Auth::check()){
            return view('add-category');
        }
        return redirect("/home")->with('error','Opps! You do not have access');
    }

    public function product_summary(){
        if(Auth::check()){
            $products=Addproduct::with('category')->paginate(2);
            return view('product-summary',compact('products'));
        }
        return redirect("/home")->with('error','Opps! You do not have access');
    }

    public function add_product(){
        if(Auth::check()){
            $data = Addcategory::all();
            return view('add-product', compact('data'));
        }
        return redirect("/home")->with('error','Opps! You do not have access');
    }
    
    public function password(){
        if(Auth::check()){
            return view('change-password');
        }
        return redirect("/home")->with('error','Opps! You do not have access');
    }

}
