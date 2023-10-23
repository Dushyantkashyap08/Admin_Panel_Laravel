<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\session; 
use App\Models\Addpage;
use App\Models\Login;
use App\Models\Addcategory;
use App\Models\Addproduct;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function add_page_data(Request $request){

        $request->validate([
            'name' => 'required',
            'content' => 'required',
        ]);
   

        $add = new Addpage;
        if($request->isMethod('post'))
        {
            $add->name = $request->get('name');
            $add->content = $request->get('content');
            $add->status = $request->has('status')? 1 : 0;
            $add->save();
        }
        return redirect('add-page');
    }

    public function delete_data($id){
        $ob = Addpage::find($id);
        $ob->delete();
        return redirect('page-summary');
    }

    public function edit_display( $id){
        $findrow = Addpage::where('id',$id)->get();
        return view('addpage', compact('findrow'));
    }

    public function edit_data(Request $request ,$id=''){
        $add = Addpage::find($id);
        if($request->isMethod('post'))
        {
            $add->name = $request->get('name');
            $add->content = $request->get('content');
            $add->status = $request->has('status') ? 1 : 0;
            $add->save();
        }
        return redirect('page-summary');
    }

    public function search(Request $request){
        if($request->isMethod('post'))
        {
            $name = $request->get('sname');
            $data = Addpage::where('name', 'LIKE',  '%'. $name .'%')->paginate(2);
        }
        return view('pagesummary', compact('data'));

    }



    // *********** add category function start here ***********************

    public function add_category_data(Request $request){
        $request->validate([
            'catname' => 'required',
        ]);

        $add = new Addcategory;
        if($request->isMethod('post'))
        {
            $add->categoryname = $request->get('catname');
            $add->save();
        }
        return redirect('add-category');
    }

    public function category_delete_data($id){
        $ob = Addcategory::find($id);
        $ob->delete();
        return redirect('category-summary');
    }

    public function category_edit_display($id){
        $findrow = Addcategory::where('id',$id)->get();
        return view('addcategory', compact('findrow'));
    }

    public function category_edit_data(Request $request ,$id=''){
        $add = Addcategory::find($id);
        if($request->isMethod('post'))
        {
            $add->categoryname = $request->get('catname');
            $add->save();
        }
        return redirect('category-summary');
    }

    public function search_category(Request $request){
        if($request->isMethod('post'))
        {
            $name = $request->get('sname');
            $data = Addcategory::where('categoryname', 'LIKE',  '%'. $name .'%')->paginate(2);
        }
        return view('categorysummary', compact('data'));

    }


    // ********* add product crud function start here *********
    public function add_product_data(Request $request){
        $request->validate([
            'pname' => 'required',
            'pdesc' => 'required',
            'pprice' => 'required',
			'pstock' => 'required',
            'pimage' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $add = new Addproduct;
        if ($request->hasFile('pimage')) {
            $image = $request->file('pimage');
            $customName =  time().'.'. $image->getClientOriginalExtension();
            $imagePath = $image->move('product_images', $customName, 'public');
        }

        if($request->isMethod('post'))
        {
            $add->category_id = $request->get('catid');
            $add->pname = $request->get('pname');
            $add->pdescription = $request->get('pdesc');
            $add->pprice = $request->get('pprice');
			$add->pstock = $request->get('pstock');
            $add->pimage = $imagePath;
            $add->save();
        }
        return redirect('add-product');
    }

    public function product_delete_data($id){
        $ob  = Addproduct::find($id);
        $ob->delete();
        return redirect('/product-summary');
    }

    public function product_edit_display($id){
        $findrow  = Addproduct::where('id',$id)->get();
        return view('addproduct', compact('findrow'));
    }

    public function product_edit_data(Request $request, $id=''){
        $add = Addproduct::find($id);
        if($request->isMethod('post'))
        {
            $add->pname = $request->get('pname'); 
            $add->pdescription = $request->get('pdesc'); 
            $add->pprice = $request->get('pprice');
            $add->save(); 
        }
        return redirect('product-summary');
    }

    public function search_product(Request $request){
        if($request->isMethod('post'))
        {
            $name = $request->get('sname');
            $products = Addproduct::where('pname', 'LIKE', '%'. $name . '%')->paginate(2);
        }
        return view('productsummary', compact('products'));
        // echo "hello";
    }




    // *********** change password here **************

    public function change_password(Request $request){
        // $data = new Login;
        if($request->isMethod('post'))
        {
            $oldpw = $request->get('oldpass');
            $newpw = $request->get('newpass');
            $cnewp = $request->get('cnewpass');
            // $data = Login::where('password',$oldpw)->first();
            // $data->password = $newpw;
            // $data->save();
            // echo $data;
            if($newpw == $cnewp){
                $data = Login::where('password',$oldpw)->first();
                if(isset($data))
                {
                    $data->password = $newpw;
                    $data->save();
                    return redirect('/password')->with("success","Password Updated Successfully");
                }
                else
                {
                    return redirect('/password')->with("error","Old Password not match");
                }
                
            }
            else
            {
                return redirect('/password')->with( "error","New password and Confirm new password does not match");
            }    
                
        }
    }

}
