<!--extending layouts.main here-->
@extends('layouts.main')

<!--add-page-section starts here-->
@section('add-page-section')

<!--layouts/leftlist starts here-->
@include('layouts/leftlist')
<!--layouts/leftlist ends here-->
   
    <!-- content2 start  -->
    <div class="content2">
        <h4>Page Manager</h4>	
        <!-- add-conatiner start here -->
        <div class="add-container">
            <div class="add-line">Add Page</div>
            
            <form action="{{isset($findrow) ? url( 'edit-data/'.$findrow[0]->id) : route('add.page.data') }}" method="post">
                @csrf
                {{-- <input type="hidden" name="editid"  value="{{$findrow[0]->id)}}"/> --}}
                <!-- parent table start here -->
                <table class="parent-table">
                    <tr>
                        <td class="rightalign">Name*</td>
                        <td><input class="length" value="{{isset($findrow[0]->name) ? $findrow[0]->name : ''}}" name="name" type="text" required/></td>
                    </tr>
                    <tr>
                        <td class="rightalign">Content</td>
                        <td>
                            <textarea class="box"name="content" required>
                                {{isset($findrow[0]->content) ? $findrow[0]->content : ''}}
                            </textarea>
                        </td>
                    </tr>     
                    <tr>
                        <td class="rightalign">Status</td>
                        <td>
                            <input checked type="checkbox" name="status"  {{isset($findrow[0]->content) ?'checked' : ''}}/>
                        </td>
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
<!--add-page-section ends here-->