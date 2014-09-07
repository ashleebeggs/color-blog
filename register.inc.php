<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
<div class="heads">Hello, Hi, Hey there<div class="subheads">Register to create your own profile</div></div>

</div>
  </div>

<form action="color-blog.php" enctype="multipart/form-data" method="post" role="form">
<input type="hidden" name="MAX_FILE_SIZE" value="1024000">
<input type="file" name="picture">  
    
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
  <div class="form-group ">
    <div class="subheads2">Real Name</div>
    <input type="text" name="fullname" class="form-control" id="exampleInputname1" placeholder="Jane Smith">
  </div>
        </div>
        </div>
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
  <div class="form-group">
     <div class="subheads2">Username</div>
    <input type="text" name="userid" class="form-control" id="exampleInputuser1" placeholder="Username">
  </div>
</div>
        </div>
    <div class="row">
    <div class="col-md-3 col-md-offset-3">
        
    <div class="form-group"> 
     <div class="subheads2">Password</div>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">  
  </div>
        </div>
     
        <div class="col-md-3">
<div class="form-group">
     <div class="subheads2">Confirm</div>
    <input type="password" name="password2" class="form-control" id="exampleInputPassword2" placeholder="Confirm Password">
  </div>
</div>
        </div>
 
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
<div class="form-group">
     <div class="subheads2">Email address</div>
    <input type="text" size="50" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
        </div>
        </div>
    <button type="button" class="btn btn-default">
        <span class="glyphicon glyphicon-star"></span> Forgot Password?
    </button>
<input type="submit" value="Submit">


<input type="hidden" class="btn btn-default" name="content" value="adduser">


<hr size="1" noshade="noshade">


</form>
    </div>
