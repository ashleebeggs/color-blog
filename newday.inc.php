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

<div style="font-size:30px; font-family:'Raleway', 'sans-serif'; text-align:center; margin: 80px 0 0 0">Today's a new day</div><br>

<div id="section group">
    <div class="col span_1_of_3"></div>
    <div class="col span_1_of_3">
<div id="csliders">
    <div id="red"></div>
    <div id="green"></div> 
    <div id="blue"></div>
</div>
        <div class="col span_1_of_3"></div>

</div>

<form id="headerform" action="color-blog.php" method="post">
    <div class="section group">
        <div class="col span_1_of_12"></div>
        <div class="col span_8_of_12">
    <textarea style="width:100%" rows="5" cols="50" name="shortdesc" placeholder="Short Description"></textarea><br>
            </div>
        <div class="col span_3_of_12">
    <div style="padding: 0 0 10px 0;">Color of Text</div>
    <input class="radials title" type="radio" name="colortext" value="black">Black<br>
    <input class="radials title" type="radio" name="colortext" value="white">White<br>
    </div>
    </div>
    
<div class="section group"> 
    <div class="col span_1_of_4">
<div class="title">Suicidal Ideation:<div class="num"></div></div><input id="slider-input" class="slider-input" name="trackSI" type="range" min="0" value="0" max="10">
     </div>
    <div class="col span_1_of_4">
    <select name="skillSI">
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
    <div class="col span_1_of_4">
<div class="title">Self Harm:</div><input id="slider-input" class="slider-input" name="trackSH" type="range" min="0" value="0" max="10">
   </div>
     <div class="col span_1_of_4">
    <select name="skillSH">
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
    
    <div class="section group">
    <div class="col span_1_of_4">
<div class="title">Self Destruction:</div><input id="slider-input" class="slider-input" name="trackSD" type="range" min="0" value="0" max="10">
    </div>
     <div class="col span_1_of_4">
    <select name="skillSD">
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
 
        <div class="col span_1_of_4">
<div class="title">Isolation:</div><input id="slider-input" class="slider-input" name="trackISO" type="range" min="0" value="0" max="10">
    </div>
        
     <div class="col span_1_of_4">
    <select name="skillISO">
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
    
    <div class="section group">
        <div class="col span_1_of_4">
<div class="title">Anxiety/Fear:</div><input id="slider-input" class="slider-input" name="trackANX" type="range" min="0" value="0" max="10">
    </div>
        <div class="col span_1_of_4">
    <select name="skillANX">
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
        
        <div class="col span_1_of_4">
<div class="title">Sadness:</div><input id="slider-input" class="slider-input" name="trackSAD" type="range" min="0" value="0" max="10">
    </div>
        <div class="col span_1_of_4">
    <select name="skillSAD">
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
    
    <div class="section group">
        <div class="col span_1_of_4">
<div class="title">Anger:</div><input id="slider-input" class="slider-input" name="trackANG" type="range" min="0" value="0" max="10">
    </div>
        <div class="col span_1_of_4">
    <select name="skillANG">
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
        
        <div class="col span_1_of_4">
<div class="title">Guilt/Shame:</div><input id="slider-input" class="slider-input" name="trackGSH" type="range" min="0" value="0" max="10">
            </div>
        <div class="col span_1_of_4">
    <select name="skillGSH">
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
    
    <div class="section group">
        <div class="col span_1_of_4">
<div class="title">Hopeless/Helpless:</div><input id="slider-input" class="slider-input" name="trackHH" type="range" min="0" value="0" max="10">
            </div>
        <div class="col span_1_of_4">
    <select name="skillHH">
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
        
        <div class="col span_1_of_4">
<div class="title">Insecure:</div><input id="slider-input" class="slider-input" name="trackINS" type="range" min="0" value="0" max="10"> </div>
        <div class="col span_1_of_4">
    <select name="skillINS">
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
    
    <div class="section group">
        <div class="col span_1_of_4">
<div class="title">Lonely:</div><input id="slider-input" class="slider-input" name="trackLON" type="range" min="0" value="0" max="10">
        </div>
        <div class="col span_1_of_4">
    <select name="skillLON">
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
        
        <div class="col span_1_of_4">
<div class="title">Joy:</div><input id="slider-input" class="slider-input" name="trackJOY" type="range" min="0" value="0" max="10">
            </div>
        <div class="col span_1_of_4">
    <select name="skillJOY">
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
    
    <div class="section group">
        <div class="col span_1_of_4">
<div class="title">Self Critical:</div><input id="slider-input" class="slider-input" name="trackSC" type="range" min="0" value="0" max="10">
            </div>
        <div class="col span_1_of_4">
    <select name="skillSC">
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
        
        <div class="col span_1_of_4">
<div class="title">Not Worthy:</div><input id="slider-input" class="slider-input" name="trackNW" type="range" min="0" value="0" max="10">
        </div>
        <div class="col span_1_of_4">
    <select name="skillNW">
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
    
    <div class="section group">
        <div class="col span_1_of_4">
<div class="title">Negative Beliefs:</div><input id="slider-input" class="slider-input" name="trackNB" type="range" min="0" value="0" max="10">
        </div>
        <div class="col span_1_of_4">
            <div class="title">Skill Used:</div>
    <select name="skillNB">
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
        
        <div class="col span_1_of_4">
<div class="title">Ruminating:</div><input id="slider-input" class="slider-input" name="trackRUM" type="range" min="0" value="0" max="10">
            </div>
        <div class="col span_1_of_4">
            <div class="title">Skill Used:</div>
    <select name="skillRUM">
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
    
    <div class="section group">
        <div class="col span_1_of_4">
<div class="title">Powerless:</div><input id="slider-input" class="slider-input" name="trackPOW" type="range" min="0" value="0" max="10">
            </div>
        <div class="col span_1_of_4">
            <div class="title">Skill Used:</div>
    <select name="skillPOW">
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
        
        <div class="col span_1_of_4">
<div class="title">Racing Thoughts:</div><input id="slider-input" class="slider-input" name="trackRT" type="range" min="0" value="0" max="10">
            </div>
        <div class="col span_1_of_4">
            <div class="title">Skill Used:</div>
    <select name="skillRT">
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
    
    <div class="section group">
        <div class="col span_1_of_4">
<div class="title">Obsessions:</div><input id="slider-input" class="slider-input" name="trackOB" type="range" min="0" value="0" max="10">
      </div>
        <div class="col span_1_of_4">
            <div class="title">Skill Used:</div>
    <select name="skillOB">
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
<div class="section group">
    <div class="col span_10_of_12"></div>
    <div class="col span_1_of_12">
<input class="subutton" type="submit" value="Submit">
    </div>
      <div class="col span_1_of_12"></div>
    </div>
<input type="hidden" name="username" value="$userid">
<input type="hidden" name="content" value="addday">


</form>

<?php } ?>