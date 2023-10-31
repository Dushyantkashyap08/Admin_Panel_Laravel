<!--extending layouts.main here-->
@extends('layouts.main')

<!--changepassword-section starts here-->
@section('change-password-section')

<!--layouts/leftlist starts here-->
@include('layouts/leftlist')
<!--layouts/leftlist ends here-->

    <!--content2 starts here-->
    <div class="content2">
        {{-- error handling of cahnge password time --}}
        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <h4>Change Password</h4>	
        <!-- add-conatiner start here -->
        <div class="add-container">
            <div class="add-line">Change Password</div>
            <!--form starts here-->
            <form method="post" action="{{route('change.password')}}">
                @csrf
                <input type="hidden" name="editid"  />
                
                <!-- parent table start here -->
                <table class="parent-table">
                    
                    <tr>
                        <td class="rightalign">Enter Old Password*</td>
                        <td><input type="text" name="oldpass"  class="length"   /></td>
                    </tr>
                    
                    <tr>
                        <td class="rightalign">Enter New Password*</td>
                        <td><input type="text" name="newpass"  class="length"  /></td>
                    </tr>
                    
                    <tr>
                        <td class="rightalign">Confirm New Password*</td>
                        <td><input type="text" name="cnewpass"  class="length" /></td>
                    </tr>
                
                </table>
                <!-- parent table end here -->
                        
                <input  class="sv-btn" type="submit" name="save" value="Save"/>  <input class="cl-btn" type="button" name="cancel" value="Cancel"/>				
            <form>
            <!--form ends here-->
        </div>
        <!-- add-container end here -->   
    </div>
@endsection
<!--changepassword-section ends here-->