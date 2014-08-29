    
     var size = $(window).width();
    var elems = document.getElementsByClassName('day');
    var days = document.getElementsByClassName('dow');
    var descriptions = document.getElementsByClassName('desc');



    
function myday() {
     
    if (window.location.href = 'http://localhost/color/color-blog.php?'){
        
        
        
        for (var i=0;i<elems.length;i+=1){
            TweenLite.to(elems, .5, {width:"100%",
                        height: "500px",
                       display: "block",
                        fontSize:"30px",
                       marginRight: "0"
                         });
        }
        
         
    
      for (var i=0;i<days.length;i+=1){
          days[i].style.fontSize = '36px';
          days[i].style.fontWeight = '600';
          days[i].style.padding = '20px 0 0 0';
          
          
        }
    for (var i=0;i<descriptions.length;i+=1){
        descriptions[i].style.display = 'block';
        descriptions[i].style.fontSize = '28px';
        descriptions[i].style.width = "90%";
        descriptions[i].style.display = "block";
        descriptions[i].style.padding = '100px 0 0 5%';
        descriptions[i].style.textAlign = 'center';
   
        }
       
    }
    else{
    window.location.href = 'http://ashleebeggs.com/test2/color-blog.php';
    }
 }
    
 

    
    

    
function myweek() {
 
    if (elems.length > 1){
        for (var i=0;i<elems.length;i+=1){
            TweenLite.to(elems, 1, {width:"14.28%",
                        height: "500px",
                       display: "inline-table",
                       fontsize: "24px",
                       marginRight: "-4px"});
            }
    
      for (var i=0;i<days.length;i+=1){
          days[i].style.fontSize = '14px';
          days[i].style.fontWeight = '600';
          days[i].style.padding = '0 15px 0 15px';
          
        }
    for (var i=0;i<descriptions.length;i+=1){
        descriptions[i].style.display = 'block';
        descriptions[i].style.fontSize = '11px';
        descriptions[i].style.width = "80%";
        descriptions[i].style.padding = '50px 15px 0 15px';
        descriptions[i].style.textAlign = 'left';
   
        }
    }
    else{
    console.log("wekk");
    }
}

    
    
    
    function mymonth() {
    
    if (elems.length > 1){
        for (var i=0;i<elems.length;i+=1){
            TweenLite.to(elems, 1, {width:"14.28%",
                        height: "150px",
                       display: "inline-table",
                       fontsize: "24px",
                       marginRight: "-4px"});
            }
    
      for (var i=0;i<days.length;i+=1){    
          days[i].style.fontSize = '14px';
          days[i].style.fontWeight = '600';
          days[i].style.padding = '0 15px 0 15px';
          
            }
 
    for (var i=0;i<descriptions.length;i+=1){
            descriptions[i].style.display = 'none';

   
            }
    }
        else{
    
    console.log("working");
        }
        
        
    
    }
    
    


$('.track').click( function() {
        var toggleWidth = $(".bars").width() == size ? "0" : size;
    $('.dow').toggle();
    $('.desc').toggle();
    $('.bars').toggle('slow');
        $('.bars').animate({width: toggleWidth });
    });