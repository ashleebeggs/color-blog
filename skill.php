
<div id="skillcont">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
<div class="heads">Add a skill</div>

</div>
  </div>

<form action="skill.php" enctype="multipart/form-data" method="post" role="form">
    
<input type="hidden" name="MAX_FILE_SIZE" value="1024000">
    

    
    <div class="row">
    <div class="col-md-4 col-md-offset-2 form-group">
     <div  class="loginsub">Skill name</div>
    <input type="text" style="width:100%;" name="skillid" class="form-control" >
        </div>
<input class="col-md-4" type="file" name="picture">  
    </div>

    
    <div class="row">
    <div class="col-md-4 col-md-offset-2 form-group">
     <div  class="loginsub">Skill category</div>
    <select class="form-control newform" name="skillcategory">
        <option value="">Select...</option>
        <option value="Interpersonal effectivness">Interpersonal effectivness</option>
        <option value="Distress tolerance">Distress tolerance</option>
        <option value="Emotion regulation">Emotion regulation</option>
        <option value="Mindfullness">Mindfullness</option>
        </select>
        </div>
        </div>
    
    <div class="row">
    <div class="col-md-4 col-md-offset-2 form-group">
    <div  class="skilldesc">Description</div>
    <textarea id="descarea" rows="5" cols="50" name="skilldesc" placeholder="Skill Description"></textarea>
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




</form>
    </div>
    </div>
