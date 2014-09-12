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
    <div class="subheads3">Pick a hue to reflect your mood</div>
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
   <div class="subheads3">Enter in the specifics</div>
      
<div class="row">  
        <div class="col-md-5 col-md-offset-1">
            <textarea id="descarea" rows="5" cols="50" name="shortdesc" placeholder="Short Description"></textarea><br>
        </div>
    
<div class="col-md-5">
         <div class="slider-step changecol" id="INSval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
         <div class="skillcont"><div class="title slidertitle">Insecure: <div class="num" id="numINS"></div></div>
        <select class="form-control newform" name="skillINS">
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
</div><!--row-->
    
<div class="row"> 
    <div class="col-md-5 col-md-offset-1">       
        <div class="slider-step changecol"  id="SIval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
        <div class="skillcont"><div class="title slidertitle">Suicidal Ideation: <div class="num" id="numSI"></div></div>
            <select class="form-control newform" name="skillSI">
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
    <div class="col-md-5">
        <div class="slider-step changecol" id="SHval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
       <div class="skillcont"> <div class="title slidertitle">Self Harm: <div class="num" id="numSH"></div></div>
    <select class="form-control newform" name="skillSH">
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
    
<div class="row">
<div class="col-md-5 col-md-offset-1">
        <div class="slider-step changecol" id="SDval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
         <div class="skillcont"><div class="title slidertitle">Self Destruction: <div class="num" id="numSD"></div></div>
    <select class="form-control newform" name="skillSD">
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
 
    <div class="col-md-5">
            <div class="slider-step changecol" id="ISOval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
         <div class="skillcont"><div class="title slidertitle">Isolation: <div class="num" id="numISO"></div></div>
    <select class="form-control newform" name="skillISO">
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
    
    <div class="row">
<div class="col-md-5 col-md-offset-1">
            <div class="slider-step changecol" id="ANXval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Anxiety/Fear: <div class="num" id="numANX"></div></div>
    <select class="form-control newform" name="skillANX">
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
        
<div class="col-md-5">
            <div class="slider-step changecol" id="SADval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Sadness: <div class="num" id="numSAD"></div></div>
        <select class="form-control newform" name="skillSAD">
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
    
<div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div class="slider-step changecol" id="ANGval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Anger: <div class="num" id="numANG"></div></div>
            <select class="form-control newform" name="skillANG">
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
        
        <div class="col-md-5">
            <div class="slider-step changecol" id="GSHval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Guilt/Shame: <div class="num" id="numGSH"></div></div>
    <select class="form-control newform" name="skillGSH">
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
    
<div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div class="slider-step changecol" id="HHval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Hopeless/Helpless: <div class="num" id="numHH"></div></div>
    <select  class="form-control newform" name="skillHH">
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
    
        <div class="col-md-5">
            <div class="slider-step changecol" id="LONval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Lonely: <div class="num" id="numLON"></div></div>
        <select class="form-control newform" name="skillLON">
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
        
        <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div class="slider-step changecol" id="JOYval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Joy: <div class="num" id="numJOY"></div></div>
    <select class="form-control newform" name="skillJOY">
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
            
        <div class="col-md-5">
            <div class="slider-step changecol" id="SCval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Self Critical: <div class="num" id="numSC"></div></div>
    <select class="form-control newform" name="skillSC">
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
        
        <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div class="slider-step changecol" id="NWval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Not Worthy: <div class="num" id="numNW"></div></div>
    <select class="form-control newform" name="skillNW">
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
    
        <div class="col-md-5">
            <div class="slider-step changecol" id="NBval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Negative Beliefs: <div class="num" id="numNB"></div></div>
    <select class="form-control newform" name="skillNB">
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
        
<div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div class="slider-step changecol" id="RUMval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
             <div class="skillcont"><div class="title slidertitle">Ruminating: <div class="num" id="numRUM"></div></div>
    <select class="form-control newform" name="skillRUM">
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
    
        <div class="col-md-5">
            <div class="slider-step changecol" id="POWval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Powerless: <div class="num" id="numPOW"></div></div>
    <select class="form-control newform" name="skillPOW">
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
        
        <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div class="slider-step changecol" id="RTval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Racing Thoughts: <div class="num" id="numRT"></div></div>
    <select class="form-control newform" name="skillRT">
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
    
        <div class="col-md-5">
            <div class="slider-step changecol" id="OBval" style="height:6px; background-color:rgba(255, 255, 255, 1);"></div>
            <div class="skillcont"><div class="title slidertitle">Obsessions: <div class="num" id="numOB"></div></div>
    <select class="form-control newform" name="skillOB">
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

<input id ="coloredvalue" type="hidden" size="7" name="colorhex" value="05baba">
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
    <div class="col-md-2 col-md-offset-5">
        <input class="subutton" type="submit" value="Submit">
    </div>
    </div>
<input type="hidden" name="username" value="$userid">
<input type="hidden" name="content" value="addday">
    <input id = "coltext" type="hidden" name="colortext" value="white">
    
     


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
    
    var hsll = rgbToHsl(rr, gg, bb);

    
	// Fill the color box.
	$("#newcont").css({
		backgroundColor: "#" + hex
	});
   
    document.getElementById('coloredvalue').value = hex;
   var firstcolor = ColorLuminance(hex, -.1);
    var secondcolor = ColorLuminance(hex, -.3);
    var thirdcolor = ColorLuminance(hex, -.5);
    
     $("#descarea").css({
		backgroundColor: firstcolor
	   });
    $(".skillcont").css({
		backgroundColor: firstcolor
	   });
    $(".changecol .noUi-background").css({
		backgroundColor: firstcolor
	   });
    $(".newform").css({
		backgroundColor: firstcolor
	   });
    $(".slidertitle").css({
		color: thirdcolor
	   });
     $(".noUi-handle").css({
		backgroundColor: secondcolor
	   });
    $(".subheads3").css({
		color: secondcolor
	   });
    
    if (hsll > 0.60){
      document.getElementById('coltext').value = "black";
    }
    else {
    document.getElementById('coltext').value = "white";
    }
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
        return rgb;
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

    function checkskill(event){
    if (event.target.value == ""){
     $(event.target).css({
		color: ""
	   });  
    }
    else{
        console.log(event.target.value);
       $(event.target).css({
		color: "#fff"
	   });
    }
    }        
$('.newform').on('change', checkskill);
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