<!--extending layouts.main here-->
@extends('layouts.main')

<!--home-section starts here-->
@section('login-form')
    <!-- table-content start here  -->
    <div class="table-content" >
        @if(session('error'))
        <div class="error-danger">
            {{ session('error') }}
        </div>
        @endif
        <!-- form start here  -->
        <form action="{{ route('login.data') }}" method="post">
            @csrf
            <!-- login table starts here -->
            <table class="logintable">
                <tr>
                    <td></td>
                    <td class="log">Login</td>
                </tr>
                
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"  required autofocus/>
                        {{-- // error handling --}}
                        @error('username')
                        {{$message}}
                        @enderror
                        {{-- @if ($errors->has('username'))
                        <div>{{ $errors->first('username') }}</div>
                        @endif --}}
                    </td>
                </tr>
                
                <tr>
                    <td>Password</td>
                    <td><input type="password"  name="password"  required />
                        @if ($errors->has('password'))
                        <div>{{ $errors->first('password') }}</div>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="save" value="Login"  class="log-btn"/></td>
                </tr>
            </table>
            <!-- login table ends here -->
        </form>
        <!-- form ends here  -->
</div>
<!-- table-content end here  -->
@endsection
<!--home-section ends here-->
