@extends('layouts.web')
 @section('content')
 <div class="register_account">
    <div class="wrap">
    <h4 class="title">Create an Account</h4>
     <form action="register" method="post">
        @csrf
       <div class="col_1_of_2 span_1_of_2">
              <div><input type="text" value="Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name';}"></div>
              <div><input type="text" value="E-Mail" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}"></div>
              <div><input type="text" value="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"></div>
              <div><input type="text" value="comfirm password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password_comfirm';}"></div>

       </div>
       <button class="grey" type="submit">Submit</button>
       <p class="terms">By clicking 'Create Account' you agree to the <a href="#">Terms &amp; Conditions</a>.</p>
       <div class="clear"></div>
  </form>
</div> 
</div>
 @endsection