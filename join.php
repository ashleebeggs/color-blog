<div id="joincont">
<div class="container-fluid"> 
<div class="row">
    <div class="heads" id="joinhead" class="col-md-12">A visual way to track your day</div>
</div>

<div class="row">
    <div id="joingroup">
        <div class="col-md-3 col-md-offset-.5">
            <div id="jsliders">
                 <div class="jset">
            <div id="jsetm">
            <div id="colorpicker">
                <div class="sliders sliderr" id="red" value="" style="height:10px; background-color:rgba(255, 0, 0, 1);"></div>
                <div class="sliders sliderg" id="green" value="" style="height:10px; background-color:rgba(0, 255, 0, 1);"></div>
                <div class="sliders sliderb" id="blue" value="" style="height:10px; background-color:rgba(0, 0, 255, 1);"></div>
            </div>
            </div>
            </div>
            </div>
            
            <div class="jtext" id="jt1">A colorful way <br /> to analyze your mood</div>
        </div>
    
        
    
        <div class="col-md-3 col-md-offset-1">
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
            
           
            <div class="col-md-3 col-md-offset-1">
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
      <div class="col-md-2 col-md-offset-5">
<a href="color-blog.php?content=register"><button type="button" class="subutton" style="margin:80px 0 0 0;">Join</button></a>

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

 function hexFromRGB(r, g, b) {
        var rgb = b | (g << 8) | (r << 16);
        return (0x1000000 | rgb).toString(16).substring(1);
        console.log(rgb);
}
    
   
function setColor(){    
    var rr =  $('.sliderr').val(),
    gg =  $('.sliderg').val(),
    bb =  $('.sliderb').val(),
    hex = hexFromRGB( rr, gg, bb );  
    
     var hsll = rgbToHsl(rr, gg, bb);
    
   console.log(hex); 
	// Fill the color box.
	$("#joincont").css({
		backgroundColor: "#" + hex
	});
     $(".letter").css({
		fill: "#" + hex
	   });
      
if (hsll > 0.60){
      $("#joinhead").css({
		color: "#000"
	});
     $(".jtext").css({
		color: "#000"
	});
    }
    else {
   $("#joinhead").css({
		color: "#fff"
	});
         $(".jtext").css({
		color: "#fff"
	});
    }
}

function rgbToHsl(r, g, b){
    r /= 255, g /= 255, b /= 255;
    var max = Math.max(r, g, b), min = Math.min(r, g, b);
    var h, s, l = (max + min) / 2;

    if(max == min){
        h = s = 0; // achromatic
    }else{
        var d = max - min;
        s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
        switch(max){
            case r: h = (g - b) / d + (g < b ? 6 : 0); break;
            case g: h = (b - r) / d + 2; break;
            case b: h = (r - g) / d + 4; break;
        }
        h /= 6;
    }
    console.log(l);
    return [l];
      
}

    $('.sliderr').noUiSlider({
	start: 5,
	connect: "lower",
	orientation: "horizontal",
	range: {
		'min': 0,
		'max': 255
	},
	format: wNumb({
		decimals: 0
	})
});
    $('.sliderg').noUiSlider({
	start: 186,
	connect: "lower",
	orientation: "horizontal",
	range: {
		'min': 0,
		'max': 255
	},
	format: wNumb({
		decimals: 0
	})
});
    $('.sliderb').noUiSlider({
	start: 186,
	connect: "lower",
	orientation: "horizontal",
	range: {
		'min': 0,
		'max': 255
	},
	format: wNumb({
		decimals: 0
	})
});

// Bind the color changing function
// to the slide event.
$('.sliders').on('slide', setColor);
    
    
    
</script>
    </div>
    </div>