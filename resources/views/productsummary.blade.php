@extends('layouts.main')

@section('product-summary-section')
@include('layouts.leftlist')
 <!-- content2 start  -->
 <div class="content2">				
    <h4 class="pm">Product Manager</h4>
    <p class="thisline">This section display the list of Products. </p>
    <p class="clickline"><a href="#">Click here</a> to create <a href="#">New Product</a></p>
    
    <form method="post" action="{{url('/search-product')}}">
        @csrf
        <!-- search-table start  here -->
        <table class="searchtable">
            <tr>
                <td colspan="2">Search</td>
            </tr>
            <tr>
                <td>Search by Product Name</td>
                <td><input type="text" name="sname" />
                <button type="submit" id="sr-btn">Search</button>
                </td>
            </tr>
            
        </table>
        <!-- search-table end here  -->
    </form>
    
    <p class="pageline">Page 1 of 2, showing 10 records out of 13 total, starting on record 1, ending on 10</p> 
    
    <!-- id-table start here -->
    <table class="id-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Category Name</th>
                <th>Product Name</th>
                <th>Product Descripton</th>
                <th>Product Price</th>
                <th>Product Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>   
                    <td>{{$product->categoryname}}</td>
                    <td>{{$product->pname}}</td>
                    <td>{{$product->pdescription}}</td>
                    <td>{{$product->pprice}}</td>
                    <td>
                        @if ($product->pimage)
                            <img src="{{asset($product->pimage)}}" width="50" height="40">
                        @endif
                    </td>
                    <td><a href="{{'product-edit-display/'.$product->id}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                    <td><a href="{{'product-delete-data/'.$product->id}}"><i class="fa-solid fa-trash-arrow-up" style="color: #ff0000;"></i></a></td>
                </tr>
            @endforeach
            <tr>
                <td colspan="8" >
                    {{$products->links('pagi')}}
                </td>
            </tr>   
        </tbody>
    </table>
    <!-- idtable end here -->
</div>
<!-- content2 end  -->   
@endsection