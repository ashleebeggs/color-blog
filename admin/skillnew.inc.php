
<div id="regcont">
<div class="container-fluid"> 
<div class="row">
<div class="col-md-12">
<div class="heads">Add a skill</div>

</div>
  </div>

<form action="skill-section.php" enctype="multipart/form-data" method="post" role="form">
      
    <div class="row">
    <div class="col-md-4 col-md-offset-2 form-group">
     <div  class="loginsub">Skill name</div>
    <input type="text" style="width:100%;" name="skillname" class="form-control" >
        </div>
   
    <div class="col-md-4 form-group">
     <div  class="loginsub">Skill category</div>
    <select class="form-control slidertitle" name="skillcat">
        <option value="">Select...</option>
        <option value="Interpersonal effectivness">Interpersonal effectivness</option>
        <option value="Distress tolerance">Distress tolerance</option>
        <option value="Emotion regulation">Emotion regulation</option>
        <option value="Mindfullness">Mindfullness</option>
        </select>
        </div>
        </div>
    
    <div class="row">
    <div class="col-md-4 form-group">
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox1" value="Extremely" name="skilltags">Extremely
        </label>
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox1" value="Somewhat" name="skilltags">Somewhat
        </label>
        </div>
    </div>
    
    <div class="row">
    <div class="col-md-8 col-md-offset-2 form-group">
    <div  class="shortdesc slidertitle">Description</div><br />
    <textarea id="skillarea" rows="100" cols="500" name="skilldesc" placeholder="Skill Description"></textarea>
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
<input type="hidden" name="content" value="addskill">



</form>
    </div>
    </div>
