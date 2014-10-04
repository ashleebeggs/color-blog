<div id="regcont">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
<div class="heads">A little bit about you</div>

</div>
  </div>

<form action="color-blog.php" enctype="multipart/form-data" method="post" role="form">
    
<input type="hidden" name="MAX_FILE_SIZE" value="1024000">
    

    
    <div class="row">
    <div class="col-md-4 col-md-offset-2 form-group">
     <div  class="loginsub">Username</div>
    <input type="text" style="width:100%;" name="userid" class="form-control" >
        </div>
<input class="col-md-4" type="file" name="picture">  
    </div>

    
    <div class="row">
    <div class="col-md-4 col-md-offset-2 form-group">
     <div  class="loginsub">Password</div>
    <input type="password" style="width:100%;" name="password" class="form-control">  
        </div>
     
        <div class="col-md-4 form-group">
     <div  class="loginsub">Confirm password</div>
    <input type="password" style="width:100%;" name="password2" class="form-control">
        </div>
        </div>
    
    <div class="row">
    <div class="col-md-4 col-md-offset-2 form-group">
    <div  class="loginsub">Real Name</div>
    <input type="text" style="width:100%;" name="fullname" class="form-control">
        </div>
  
 
  
    <div class="col-md-4 form-group">
     <div  class="loginsub">Email address</div>
    <input type="text" style="width:100%;" size="50" name="email" class="form-control">
        </div>
        </div>
    
     <div class="row navbar-fixed-bottom hidden-sm hidden-md hidden-lg" id="navbottom">
          <div class="col-xs-12">                
             <button type="submit" class="subutton" value="Submit">Submit</button>
           </div>             
    </div>
    
    <div class="row">
      <div class=" col-sm-2 col-sm-offset-5 col-md-2 col-md-offset-5 hidden-xs">                
             <button type="submit" class="subutton" value="Submit">Submit</button>
           </div>  
        </div>



<input type="hidden" class="btn btn-default" name="content" value="adduser">





</form>
    </div>
    </div>
