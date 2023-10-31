<!--extending layouts.main here-->
@extends('layouts.main')

<!--add-product-section starts here-->
@section('add-product-section')

<!--layouts/leftlist starts here-->
@include('layouts/leftlist')
<!--layouts/leftlist ends here-->
   
    <!-- content2 start -->
    <div class="content2">
        <h4>Page Product</h4>	
        <!-- add-conatiner start here -->
        <div class="add-container">
            <div class="add-line">Add Product</div>
            <!-- form starts here -->
            <form method="post" enctype="multipart/form-data" action="{{isset($findrow) ? url('product-edit-data/' . $findrow[0]->id) :route('add.product.data')}}">
                @csrf
                <input type="hidden" name="editid"  />
                
                <!-- parent table start here -->
                <table class="parent-table">
                    @if((request()->routeIs('add.product')))
                    <tr>
                        <td class="rightalign">Select Category*</td>
                        <td>
                            <select name="catid">
                            <option >&lt; select category &gt;</option>
                                @foreach ($data as $item)
                                <option value="{{$item->id}}" >{{$item->categoryname}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    @endif
                    
                    <tr>
                        <td class="rightalign">Product Name*</td>
                        <td><input class="length" name="pname" type="text"  value="{{isset($findrow[0]->pname) ? $findrow[0]->pname : ''}}" required/></td>
                    </tr>
                    <tr>
                        <td class="rightalign">Product Description*</td>
                        <td><input class="length" name="pdesc" type="text" value="{{isset($findrow[0]->pdescription) ? $findrow[0]->pdescription : ''}}" required/></td>
                    </tr>
                    <tr>
                        <td class="rightalign">Product Price*</td>
                        <td><input class="length" name="pprice" type="text" value="{{isset($findrow[0]->pprice) ? $findrow[0]->pprice : ''}}" required/></td>
                    </tr>
                    <tr>
                        <td class="rightalign">Product Stock*</td>
                        <td><input class="length" name="pstock" type="text" value="{{isset($findrow[0]->pstock) ? $findrow[0]->pstock : ''}}" required/></td>
                    </tr>
                    @if((request()->routeIs('add.product')))
                    <tr>
                        <td class="rightalign">Product Image*</td>
                        <td><input class="length" name="pimage" type="file" value="{{isset($findrow[0]->pimage) ? $findrow[0]->pimage : ''}}" required/></td>
                    </tr>
                @endif
                </table>
                <!-- parent table end here -->
                        
                <input  class="sv-btn" type="submit" name="save" value="Save"/>  <input class="cl-btn" type="button" name="cancel" value="Cancel"/>				
            
            <form>
            <!-- form ends here -->
        </div>
        <!-- add-container end here -->
    </div>
    <!-- content2 end  -->
@endsection
<!--add-product-section starts here-->