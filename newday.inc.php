<?php if (!isset($_SESSION['valid_color_user']))


{
    include("login.inc.php");

} else


{
    $userid = $_SESSION['valid_color_user'];
    

?>


<script>
console.log("logged in");
</script>
    
<!--<div class="color-widget" onclick="colorPick(event)">
 
</div>
-->
<div id="newcont">
<div class="container-fluid">
<div class="heads">How was your day?</div>
<div class="row">
 
    <div class="col-md-4 col-md-offset-4">
 <div id="colorpicker">
	<div class="sliders sliderr" id="newred" value="" style="height:15px; background-color:rgba(255, 0, 0, 1);"></div>
	<div class="sliders sliderg" id="newgreen" value="" style="height:15px; background-color:rgba(0, 255, 0, 1);"></div>
	<div class="sliders sliderb" id="newblue" value="" style="height:15px; background-color:rgba(0, 0, 255, 1);"></div>
</div>
    </div>
</div>
    
    <form id="headerform" action="color-blog.php" method="post">
   
<div class="row">  
        <div class="col-md-5 col-md-offset-1">
    <textarea id="descarea" rows="5" cols="50" name="shortdesc" placeholder="Short Description"></textarea><br>
        </div>
    
     <div class="col-md-5">
<div class="slider-step" id="INSval" style="height:6px; background-color:rgba(255, 255, 0, 1);"></div>
        </div>
    <div class="row">
        
            <div class="col-md-5"><div class="skillcont"><div class="title">Insecure: <div class="num" id="numINS"></div></div>     </div>
        
        <select class="form-control" name="skillINS">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
           
    </div>
    </div>
        <!--<div class="col-md-2">
    <div style="padding: 0 0 10px 0;">Color of Text</div>
    <input class="radials title" type="radio" name="colortext" value="black">Black<br>
    <input class="radials title" type="radio" name="colortext" value="white">White<br>
    </div>-->

    
<div class="row"> 
    <div class="col-md-3 col-md-offset-1">
        
<div class="title">Suicidal Ideation: <div class="num" id="numSI"></div></div><div class="slider-step"  id="SIval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
     </div>
    <div class="col-md-2">
           <div class="title">Skill Used:</div>
    <select class="form-control" name="skillSI">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
    <div class="col-md-3">
<div class="title">Self Harm: <div class="num" id="numSH"></div></div><div class="slider-step" id="SHval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
   </div>
     <div class="col-md-2">
            <div class="title">Skill Used:</div>
    <select class="form-control" name="skillSH">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
    </div>
    
    <div class="row">
    <div class="col-md-3 col-md-offset-1">
<div class="title">Self Destruction: <div class="num" id="numSD"></div></div><div class="slider-step" id="SDval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
    </div>
     <div class="col-md-2">
            <div class="title">Skill Used:</div>
    <select class="form-control" name="skillSD">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
 
        <div class="col-md-3">
<div class="title">Isolation: <div class="num" id="numISO"></div></div><div class="slider-step" id="ISOval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
    </div>
        
     <div class="col-md-2">
            <div class="title">Skill Used:</div>
    <select class="form-control" name="skillISO">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        </div>
    
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
<div class="title">Anxiety/Fear: <div class="num" id="numANX"></div></div><div class="slider-step" id="ANXval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
    </div>
        <div class="col-md-2">
               <div class="title">Skill Used:</div>
    <select class="form-control" name="skillANX">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        
        <div class="col-md-3">
<div class="title">Sadness: <div class="num" id="numSAD"></div></div><div class="slider-step" id="SADval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
    </div>
        <div class="col-md-2">
               <div class="title">Skill Used:</div>
    <select class="form-control" name="skillSAD">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        </div>
    
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
<div class="title">Anger: <div class="num" id="numANG"></div></div><div class="slider-step" id="ANGval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
    </div>
        <div class="col-md-2">
               <div class="title">Skill Used:</div>
    <select class="form-control" name="skillANG">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        
        <div class="col-md-3">
<div class="title">Guilt/Shame: <div class="num" id="numGSH"></div></div><div class="slider-step" id="GSHval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
            </div>
        <div class="col-md-2">
               <div class="title">Skill Used:</div>
    <select class="form-control" name="skillGSH">
       <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        </div>
    
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
<div class="title">Hopeless/Helpless: <div class="num" id="numHH"></div></div><div class="slider-step" id="HHval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
            </div>
        <div class="col-md-2">
               <div class="title">Skill Used:</div>
    <select  class="form-control" name="skillHH">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        
        
        
        </div>
    
    <div class="row">
        <div class="col-md-3 col-md-offset-1 ">
<div class="title">Lonely: <div class="num" id="numLON"></div></div><div class="slider-step" id="LONval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
        </div>
        <div class="col-md-2 ">
               <div class="title">Skill Used:</div>
    <select class="form-control" name="skillLON">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        
        <div class="col-md-3">
<div class="title">Joy: <div class="num" id="numJOY"></div></div><div class="slider-step" id="JOYval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
            </div>
        <div class="col-md-2">
               <div class="title">Skill Used:</div>
    <select class="form-control" name="skillJOY">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        </div>
    
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
<div class="title">Self Critical: <div class="num" id="numSC"></div></div><div class="slider-step" id="SCval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
            </div>
        <div class="col-md-2">
               <div class="title">Skill Used:</div>
    <select class="form-control" name="skillSC">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        
        <div class="col-md-3">
<div class="title">Not Worthy: <div class="num" id="numNW"></div></div><div class="slider-step" id="NWval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
        </div>
        <div class="col-md-2">
               <div class="title">Skill Used:</div>
    <select class="form-control" name="skillNW">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        </div>
    
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
<div class="title">Negative Beliefs: <div class="num" id="numNB"></div></div><div class="slider-step" id="NBval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
        </div>
        <div class="col-md-2 ">
            <div class="title">Skill Used:</div>
    <select class="form-control" name="skillNB">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        
        <div class="col-md-3">
<div class="title">Ruminating: <div class="num" id="numRUM"></div></div><div class="slider-step" id="RUMval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
            </div>
        <div class="col-md-2">
            <div class="title">Skill Used:</div>
    <select class="form-control" name="skillRUM">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        </div>
    
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
<div class="title">Powerless: <div class="num" id="numPOW"></div></div><div class="slider-step" id="POWval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
            </div>
        <div class="col-md-2">
            <div class="title">Skill Used:</div>
    <select class="form-control" name="skillPOW">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        
        <div class="col-md-3">
<div class="title">Racing Thoughts: <div class="num" id="numRT"></div></div><div class="slider-step" id="RTval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
            </div>
        <div class="col-md-2">
            <div class="title">Skill Used:</div>
    <select class="form-control" name="skillRT">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        </div>
    
    <div class="row">
        <div class="col-md-3 col-md-offset-1">
<div class="title">Obsessions: <div class="num" id="numOB"></div></div><div class="slider-step" id="OBval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
      </div>
        <div class="col-md-2">
            <div class="title">Skill Used:</div>
    <select class="form-control" name="skillOB">
        <option value="">Select...</option>
        <option value="Opposite Action">Opposite Action</option>
        <option value="Check the Facts">Check the Facts</option>
        <option value="Problem Solving">Problem Solving</option>
        <option value="Accumulate Positives">Accumulate Positives</option>
        <option value="Build Mastery">Build Mastery</option>
        <option value="Cope Ahead">Cope Ahead</option>
        <option value="Balanced Eating">Balanced Eating</option>
        <option value="Avoid Drugs">Avoid Drugs</option>
        <option value="Sleep">Sleep</option>
        <option value="Exercise">Exercise</option>
        <option value="Observe and Describe">Observe and Describe</option>
        <option value="Mindful of Emotion">Mindful of Emotion</option>
        <option value="Surf Waves">Surf Waves</option>
        <option value="Distract">Distract</option>
        <option value="Improve the Moment">Improve the Moment</option>
        <option value="Self-Soothe">Self-Soothe</option>
        <option value="Activities">Activities</option>
        <option value="Contributing">Contributing</option>
        <option value="Comparisons">Comparisons</option>
        <option value="Opposite Emotions">Opposite Emotions</option>
        <option value="Pushing Away">Pushing Away</option>
        <option value="Change Thoughts">Change Thoughts</option>
        <option value="Sensations">Sensations</option>
        <option value="Pros and Cons">Pros and Cons</option>
        <option value="Imagery">Imagery</option>
        <option value="Meaning">Meaning</option>
        <option value="Prayer">Prayer</option>
        <option value="Relaxation">Relaxation</option>
        <option value="One thing at a time">One thing at a time</option>
        <option value="Vacation">Vacation</option>
        <option value="Encouragements">Encouragements</option>
        <option value="Radical Acceptance">Radical Acceptance</option>
        <option value="Turn the Mind">Turn the Mind</option>
        <option value="Willingness">Willingness</option>
        <option value="Observe the Breath">Observe the Breath</option>
        <option value="Half-Smiling">Half-Smiling</option>
        <option value="Awareness">Awareness</option>
        <option value="DEAR MAN">DEAR MAN</option>
        <option value="GIVE">GIVE</option>
        <option value="FAST">FAST</option>
        </select>
    </div>
        </div>

<input id ="coloredvalue" type="hidden" size="7" name="colorhex" value="">
     <input type="hidden" id="trackSI" name="trackSI" value="">
    <input type="hidden" id="trackSH" name="trackSH" value="">
    <input type="hidden" id="trackSD" name="trackSD" value="">
    <input type="hidden" id="trackISO" name="trackISO" value="">
    <input type="hidden" id="trackANX" name="trackANX" value="">
    <input type="hidden" id="trackSAD" name="trackSAD" value="">
    <input type="hidden" id="trackANG" name="trackANG" value="">
    <input type="hidden" id="trackGSH" name="trackGSH" value="">
    <input type="hidden" id="trackHH" name="trackHH" value="">
    <input type="hidden" id="trackINS" name="trackINS" value="">
    <input type="hidden" id="trackLON" name="trackLON" value="">
    <input type="hidden" id="trackJOY" name="trackJOY" value="">
    <input type="hidden" id="trackSC" name="trackSC" value="">
    <input type="hidden" id="trackNW" name="trackNW" value="">
    <input type="hidden" id="trackNB" name="trackNB" value="">
    <input type="hidden" id="trackRUM" name="trackRUM" value="">
    <input type="hidden" id="trackPOW" name="trackPOW" value="">
    <input type="hidden" id="trackRT" name="trackRT" value="">
    <input type="hidden" id="trackOB" name="trackOB" value="">
<div class="row">
    <div class="col-md-10"></div>
    <div class="col-md-1">
<input class="subutton" type="submit" value="Submit">
    </div>
      <div class="col-md-1"></div>
    </div>
<input type="hidden" name="username" value="$userid">
<input type="hidden" name="content" value="addday">
   


</form>
</div>

<?php } ?>
<script>
 
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
    
    
	// Fill the color box.
	$("#newcont").css({
		backgroundColor: "#" + hex
	});
    
    document.getElementById('coloredvalue').value = hex;
   var firstcolor = ColorLuminance(hex, -.1);
    var secondcolor = ColorLuminance(hex, -.3);
    
     $("#descarea").css({
		backgroundColor: firstcolor
	   });
    $(".skillcont").css({
		backgroundColor: firstcolor
	   });
    $(".noUi-background").css({
		backgroundColor: firstcolor
	   });
     $(".noUi-handle").css({
		backgroundColor: secondcolor
	   });
}
    function ColorLuminance(hex, lum) {

	// validate hex string
	hex = String(hex).replace(/[^0-9a-f]/gi, '');
	if (hex.length < 6) {
		hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
	}
     
	lum = lum || 0;

	// convert to decimal and change luminosity
	var rgb = "#", c, i;
	for (i = 0; i < 3; i++) {
		c = parseInt(hex.substr(i*2,2), 16);
		c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
		rgb += ("00"+c).substr(c.length);
	}
console.log(rgb);

        return rgb;
}
    
    
    
    function setValue(event){
        
        $("#SIval").Link('lower').to($('#trackSI'));
         $("#SIval").Link('lower').to($('#numSI'));

         $("#SHval").Link('lower').to($('#trackSH'));
        $("#SHval").Link('lower').to($('#numSH'));
        
         $("#SDval").Link('lower').to($('#trackSD'));
        $("#SDval").Link('lower').to($('#numSD'));
        
         $("#ISOval").Link('lower').to($('#trackISO'));
        $("#ISOval").Link('lower').to($('#numISO'));
        
        $("#ANXval").Link('lower').to($('#trackANX'));
        $("#ANXval").Link('lower').to($('#numANX'));
        
         $("#SADval").Link('lower').to($('#trackSAD'));
        $("#SADval").Link('lower').to($('#numSAD'));
        
         $("#ANGval").Link('lower').to($('#trackANG'));
        $("#ANGval").Link('lower').to($('#numANG'));
        
         $("#GSHval").Link('lower').to($('#trackGSH'));
        $("#GSHval").Link('lower').to($('#numGSH'));
        
        $("#HHval").Link('lower').to($('#trackHH'));
        $("#HHval").Link('lower').to($('#numHH'));
        
         $("#INSval").Link('lower').to($('#trackINS'));
        $("#INSval").Link('lower').to($('#numINS'));
        
         $("#LONval").Link('lower').to($('#trackLON'));
        $("#LONval").Link('lower').to($('#numLON'));
        
         $("#JOYval").Link('lower').to($('#trackJOY'));
        $("#JOYval").Link('lower').to($('#numJOY'));
        
        $("#SCval").Link('lower').to($('#trackSC'));
        $("#SCval").Link('lower').to($('#numSC'));
        
         $("#NWval").Link('lower').to($('#trackNW'));
         $("#NWval").Link('lower').to($('#numNW'));
        
         $("#NBval").Link('lower').to($('#trackNB'));
        $("#NBval").Link('lower').to($('#numNB'));
        
         $("#RUMval").Link('lower').to($('#trackRUM'));
        $("#RUMval").Link('lower').to($('#numRUM'));
        
        $("#POWval").Link('lower').to($('#trackPOW'));
        $("#POWval").Link('lower').to($('#numPOW'));
        
        $("#RTval").Link('lower').to($('#trackRT'));
        $("#RTval").Link('lower').to($('#numRT'));
        
         $("#OBval").Link('lower').to($('#trackOB'));
        $("#OBval").Link('lower').to($('#numOB'));
        
    }
            
            
    $.getJSON('nouislider.jquery.json', function(data) {
                
    console.log("working");
     
});
    
    
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
        
        $('.slider-step').noUiSlider({
	start: [ 0 ],
    connect: "lower",
	step: 1,
	range: {
		'min': [  0 ],
		'max': [ 10 ]
	}
});
        $('.slider-step').on('slide', setValue);
</script>
    
    </div>