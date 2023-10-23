@extends('layouts.main')

@section('add-category-section')
@include('layouts/leftlist')
    
<!-- content2 start  -->
<div class="content2">
    <h4>Page Category</h4>	
    <!-- add-conatiner start here -->
    <div class="add-container">
        <div class="add-line">Add Category</div>
        
        <form method="post" action="{{isset($findrow) ? url('category-edit-data/'. $findrow[0]->id) :  route('add.category.data')}}">
            @csrf
            <input type="hidden" name="editid"  required/>
            
            <!-- parent table start here -->
            <table class="parent-table">
                <tr>
                    <td class="rightalign">Category Name*</td>
                    <td><input class="length"  name="catname" type="text" value="{{isset($findrow[0]->categoryname) ? $findrow[0]->categoryname : ''}}" required/></td>
                </tr>
            </table>
            <!-- parent table end here -->
                    
             <input  class="sv-btn" type="submit" name="save" value="Save"/>  <input class="cl-btn" type="button" name="cancel" value="Cancel"/>				
        
        <form>
    </div>
    <!-- add-container end here -->
    
</div>
    <!-- content2 end  -->
@endsection