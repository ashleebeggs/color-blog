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
<div style="font-size:30px; font-family:'Raleway', 'sans-serif'; text-align:center; padding: 80px 0 0 0">Today's a new day</div><br>

<div class="row">
    
    <div class="col-md-1"></div>
    <div class="col-md-5">
 <div id="colorpicker">
	<div class="sliders sliderr" id="newred" value="" style="height:15px; background-color:rgba(255, 0, 0, 1);"></div>
	<div class="sliders sliderg" id="newgreen" value="" style="height:15px; background-color:rgba(0, 255, 0, 1);"></div>
	<div class="sliders sliderb" id="newblue" value="" style="height:15px; background-color:rgba(0, 0, 255, 1);"></div>

	<div class="result" style="height:100px; width:100px"></div>
</div>
</div>

    <form id="headerform" action="color-blog.php" method="post">
   
        
        <div class="col-md-4">
    <textarea style="width:100%" rows="5" cols="50" name="shortdesc" placeholder="Short Description"></textarea><br>
            </div>
        <div class="col-md-2">
    <div style="padding: 0 0 10px 0;">Color of Text</div>
    <input class="radials title" type="radio" name="colortext" value="black">Black<br>
    <input class="radials title" type="radio" name="colortext" value="white">White<br>
    </div>
    </div>
    
<div class="row"> 
    <div class="col-md-3 col-md-offset-1">
        
<div class="title">Suicidal Ideation: <div class="num" id="numSI"></div></div><div class="slider-step" id="SIval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
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
        
        <div class="col-md-3">
<div class="title">Insecure: <div class="num" id="numINS"></div></div><div class="slider-step" id="INSval" style="height:15px; background-color:rgba(255, 255, 0, 1);"></div>
            </div>
        <div class="col-md-2">
               <div class="title">Skill Used:</div>
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