<div id="joinhead">A visual way to track your day</div>

<div id="row">
    <div id="joingroup">
        <div class="col-md-4">
            <div id="jsliders">
                <div class="jset">
                    <div id="jsetm">
                <div id="jred"></div>
                <div id="jgreen"></div> 
                <div id="jblue"></div>
        </div>
                    </div>
            </div>
            <div class="jtext" id="jt1">A colorful way <br /> to analyze your mood</div>
        </div>
    
        
    
        <div class="col-md-4">
            <div id="joinbars">
                <div class="jset">
                    <div id="jsetm">
                <div class="jbars" id="b1"></div>
                <div class="jbars" id="b2"></div>
                <div class="jbars" id="b3"></div>
                <div class="jbars" id="b4"></div>
                <div class="jbars" id="b5"></div>
                        </div>
        </div>
                </div>
             <div class="jtext" id="jt2">Track and compare <br /> daily emotions</div>
            </div>
            
           
            <div class="col-md-4">
            <div id="joindots">
                <div class="jset">
                    <div id="jsetm">
                        <div class="dhit">
                <div class="jdot" id="d1"><div class="jskill" id="js1">Awareness</div></div>
                        </div>
                        <div class="dhit">
                <div class="jdot" id="d2"><div class="jskill" id="js2">Wise Mind</div></div>
                            </div>
                        <div class="dhit">
                <div class="jdot" id="d3"><div class="jskill" id="js3">"DEAR MAN"</div></div>
                    </div>
                        </div>
                </div>
            </div>
                <div class="jtext" id="jt3">See what's working, <br /> or what's not</div>
            </div>
        
    
        </div>
    <div class="row">
    <div class="col-md-9"></div>
      <div class="col-md-1">
<input class="subutton" style="margin:80px 0 0 0;"type="submit" value="JOIN">
    </div>
    <div class="col-md-2"></div>
  </div>
    </div>

<script>
var tl = new TimelineMax({repeat:11, repeatDelay:.8});
var t2 = new TimelineMax({repeat:11, repeatDelay:.8});
var t3 = new TimelineMax({repeat:11, repeatDelay:.8});
var t4 = new TimelineMax({repeat:11, repeatDelay:.8});
var t5 = new TimelineMax({repeat:11, repeatDelay:.8});

tl.to(b1, 1, {width:"100%"}).yoyo(true);
t2.to(b2, 1.5, {width:"90%"}).yoyo(true);
t3.to(b3, .8, {width:"100%"}).yoyo(true);
t4.to(b4, 1.5, {width:"70%"}).yoyo(true);
t5.to(b5, 2, {width:"100%"}).yoyo(true);
  
    var jdot = document.getElementsByClassName('jdot');
    var jskill = document.getElementsByClassName('jskill');
    
$('.dhit').on('click', function () {
  $(this).find(jdot).animate({
   margin:"5px 0 5px 5%", 
  },200 );
     
     $(this).find(jskill).animate({
    opacity:1,
  },200 );
      
}).on('mouseout', function () {
  $(this).find(jdot).animate({
    margin:"5px 0 5px 45%",
  },200 );
     
     $(this).find(jskill).animate({
    opacity:0,
  },200 );
     
})    
</script>