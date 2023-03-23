@extends('layouts.web')
 @section('content')
 <div class="login">
    <div class="wrap">
            <div class="col_1_of_login span_1_of_login">
                <h4 class="title">New Customers</h4>
                <h5 class="sub_title">Register Account</h5>
                <div class="button1">
                <a href="register.html"><input type="submit" name="Submit" value="Continue"></a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="col_1_of_login span_1_of_login">
            <div class="login-title">
                <h4 class="title">Registered Customers</h4>
                <div class="comments-area">
                    <form action="/login" method="post">
                        @csrf
                        <p>
                            <label>Name</label>
                            <span>*</span>
                            <input type="text" value="" name="name">
                        </p>
                        <p>
                            <label>Password</label>
                            <span>*</span>
                            <input type="password" value="" name="password">
                        </p>
                        <p id="login-form-remember">
                            <label><a href="#">Forget Your Password ? </a></label>
                        </p>
                        <p>
                            <input type="submit" value="Login">
                        </p>
                    </form>
                </div>
            </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
 @endsection