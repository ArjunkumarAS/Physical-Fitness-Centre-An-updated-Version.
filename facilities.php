<html>
<head>
<title>Our Facilities</title>
<meta charset="utf-8">
 <link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script>
    //For Demo only
var links = document.getElementsByClassName('link')
for(var i = 0; i <= links.length; i++)
   addClass(i)


function addClass(id){
   setTimeout(function(){
      if(id > 0) links[id-1].classList.remove('hover')
      links[id].classList.add('hover')
   }, id*750) 
}
</script>
<style>
    
    html, body{
   padding:0px;
   margin:0px;
   
   background-color: #63738a;
   height:100%;
}
/* body{
   background:rgba(0, 0, 0, 0.5); 
} */

.container{
   max-width:15%;
   background:oldlace;
   max-height:fit-content;
   
   padding:10px 0px 20px 0px;
   border:1px solid #111;
   border-radius:4px;
   box-shadow:0px 4px 5px rgba(0, 0, 0, 0.75);
}
.link{
   font-size:16px;
   font-weight:300;
   text-align:center;
   position:relative;
   height:40px;
   line-height:40px;
   margin-top:10px;
   overflow:hidden;
   width:90%;
   margin-left:5%;
   cursor:pointer;
}
.link:after{
   content: '';
   position:absolute;
   width:80%;
   border-bottom:1px solid rgba(255, 255, 255, 0.5);
   bottom:50%;
   left:-100%;
   transition-delay: all 0.5s;
   transition: all 0.5s;
}
.link:hover:after,
.link.hover:after{
   left:100%;
}
.link .text{
   text-shadow:0px -40px 0px rgba(255, 255, 255, 1);
   transition:all 0.75s;
   transform:translateY(100%) translateZ(0);
   transition-delay:all 0.25s;
}
.link:hover .text,
.link.hover .text{
   text-shadow:0px -40px 0px rgba(255, 255, 255, 0);
   transform:translateY(0%) translateZ(0) scale(1.1);
   font-weight:600;
}
a {text-decoration: none; color:brown; }
#dis {
    position:absolute;
    top:5;
    left:15%;
}
.image
{
padding:5px;
border: 5px solid grey;

}
</style>
</head>
<body>
  
<div class="container">
    <div class="link text">
        <a style="font-weight: bold;" href="#availequ">AVAILABLE EQUIPMENTS</a></div>
    <div class="link text">
        <a style="font-weight: bold;"  href="#ube">Upper Body Equipments</a>
    </div>
    <div class="link text"><a href="#dumbbell">Dumbbells</a></div>
    <div class="link text">   <a href="#dipstation">Dip Station</a></div>
    <div class="link text">   <a href="#battleropes">Battle Ropes</a></div>
    <div class="link text">   <a href="#inclinedbench">Inclined Bench Press</a></div>
    <div class="link text">   <a href="#pecdeckmachine">Pec Deck Machine</a></div>
    <div class="link text">   <a href="#latpull">Lat Pull Down Machine</a></div>
    <div class="link text">   <a href="#prebench">Preacher Bench</a></div>
    <div class="link text">   <a href="#tricepbars">Tricep bars</a></div>
    
    <div class="link text"><a style="font-weight: bold;" href="#lbe">Lower Body Equipments</a></div>
    <div class="link text"><a href="#pylobox">Plyo Boxes</a></div>
    <div class="link text"><a href="#calfmachine">Calf Machine</a></div>
    <div class="link text"><a href="#stairstep">Stair Stepper</a></div>
    <div class="link text"><a href="#ankle">Ankle Weights</a></div>
    <div class="link text"><a href="#reversehyp">Reverse Hyper</a></div>
    <div class="link text"><a href="#legcurl">Leg Curl Machine</a></div>
    <div class="link text"><a href="#hacksquat">Hack Squat Machine</a></div>
    <div class="link text"><a href="#are">Air Resistence Exercise Bike</a></div> 

    <div class="link text"><a style="font-weight: bold;" href="#fbe">Full Body Equipments</a></div>
    <div class="link text"><a href="#spinbike">Spin Bike</a></div>
    <div class="link text"><a href="#minitram">Mini-Trampoline</a></div>
    <div class="link text"> <a href="#sustrain">Suspension Trainer</a></div>
    <div class="link text"><a href="#vibration">Vibration Plate</a></div>
    <div class="link text"><a href="#treadmill">Treadmill</a></div>
    <div class="link text"><a href="#abcoast">Ab Coaster</a></div>
    <div class="link text"><a href="#invtab">Inversion Table</a></div>
    <div class="link text"><a href="#smith">Smith Machine</a></div>

    <div class="link text"><a style="font-weight: bold;" href="#availtrainer">AVAILABLE TRAINERS</a></div>
    <div class="link text"><a href="#sharathy">Sharathy.A</a></div>
    <div class="link text"><a href="#saravanan">Saravanan.R</a></div>
    <div class="link text"><a href="#ramesh">Ramesh.K</a></div>
    <div class="link text"><a href="#rakesh">Rakesh.H</a></div>
    <div class="link text"><a href="#aravindh">Aravindh.G</a></div>
    <div class="link text"><a href="#sasikumar">Sasi Kumar.J</a></div>
    
    
 </div>
<div id="dis">
   <a href="index.html" style="float:right;
			   text-decoration: none;
			   font-weight:bold;
			   color: #63738a;
			   padding: 5px 5px 5px 5px;
			   background-color:white;">BACK</a>
   <center><font size="50" style="color:white"> FORTUNE PHYSICAL FITNESS CENTER</font><br>
    <h1 style="color:white" id="availequ">AVAILABLE EQUIPMENTS</h1></center>
    
    <h1 style="color:white" id="ube">UPPER BODY EQUIPMENTS</h1>
    
    <p id="dumbbell"><font size="5"><b>1.DUMBBELLS</b></font><br>
    <center><img class="image"src="IMAGES/dumbbell.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b><b>
    An essential piece of equipment in weight training with a bar and weights attached at each end. 
    You can change the weight plates in certain dumbbells for greater versatility.
    The tech of dumbbells has grown and now we even have adjustable varieties that do away with having to need a rack full of dumbbells.
    </b></b></font></p>
    
    <p id="dipstation"><font size="5"><b>2.DIP STATION</b></font><br>
    <center><img class="image"src="IMAGES/dips.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>
    An incredibly effective piece of equipment on which you can you can perform a variety of exercises.
     It has 2 arms and a large base which increases stability and prevents it from toppling over.
    A dip bar or station is one of the best options for increased upper body muscularity.<br>
    </b></font></p>
    
    <p id="battleropes"><font size="5"><b>3.BATTLE ROPES</b></font><br>
    <center><img class="image"src="IMAGES/brope.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>
    Battle ropes give you full body strength training, enhances your fatigue 
    resistance and helps your twitch muscles. It has become a mainstream feature 
    in gym these days and adds an element of cardio to resistance workouts.
    You can add battle ropes to plenty of regular exercises like burpee slams, 
    single arm plank waves, double wave/ jump squat combos and the like.<br>
    </b></font></p>
    
    <p id="inclinedbench"><font size="5"><b>4.INCLINED BENCH PRESS</b></font><br>
    <center><img class="image"src="IMAGES/Incline-Bench-Press.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>
    The inclined bench press is a variation of the bench press, 
    using which you can perform strength training exercises at an elevated height. 
    The shoulders and upper chest area can be targeted.
    Incline bench presses develop your upper chest musculature while also being a 
    bit more joint-friendly than the other variations.<br>
    </b></font></p>
    
    <p id="pecdeckmachine"><font size="5"><b>5.PEC DECK MACHINE</b></font><br>
    <center><img class="image"src="IMAGES/pdm.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>The best machine to isolate your pectoral muscles and give 
    them a good workout. You can perform many exercises such as chest flys, butterfly, etc. 
    using a pec deck machine.This machines is particularly beneficial to build chest and shoulder 
    muscles, and also enhance arms strength and stability. The upper body muscles are squeezed 
    together, causing the pectoralis major to expand and contract. 
    This is what builds the muscle and also toughens the tissue fibers. 
    When the exercise on this machine is done with appropriate weights, 
    it does prove to be quite effective.<br>
    </b></font></p>
    
    <p id="latpull"><font size="5"><b>6.LAT PULLDOWN MACHINE</b></font><br>
    <center><img class="image"src="IMAGES/lpd.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>
    The lat pulldown machine is a strength training device with a padded seat, 
    thigh support and a long bar hanging from an upper rod. You can work your lats using this 
    machine.If you are not able to handle pull-ups, this could be a good alternative.
     You can vary your grips on the pull-down rod to work with different parts of your upper body.
    </b></font></p>
    
    <p id="prebench"><font size="5"><b>7.PREACHER BENCH</b></font><br>
    <center><img class="image"src="IMAGES/pb.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>
    The ideal machine to build your biceps. You can increase 
    muscle mass by lifting the barbell up and down. The machine has an elbow 
    budding, a bar rest, and a seat.Using a preacher bench is a great way to target 
    your biceps without putting pressure on your wrists. Another way to use this device 
    is with a reverse grip to target the forearms.
    </b></font></p>
    
    <p id="tricepbars"><font size="5"><b>8.TRICEP BARS</b></font><br>
    <center><img class="image"src="IMAGES/tb.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>
    If you are looking to work your triceps, then this is the 
    specialized bar you need. When you use a barbell, there are limits on how 
    much you can do and the grip is restricted as well. This bar will let you 
    get a comfortable grip as well as perform tricep focused movement with ease.
    A tricep bar not just gives your triceps a good workout but you can also use it 
    for hammer curls or front raises which target the bicep and deltoids respectively.
    </b></font></p>
    
    
    
    <h1 style="color:white" id="lbe">LOWER BODY EQUIPMENTS</h1>
    
    <p id="pylobox"><font size="5"><b>1.PLYO BOXES</b></font><br>
    <center><img class="image"src="IMAGES/pylo.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>Its a solid box/construct on which you can perform a variety 
    of movements that can recruit several muscle groups at one time. You can do box 
    jumps, burpees, pistol squats, jackknifes, elevated crunches, decline side planks, 
    and many more types of exercise.A plyo box when used properly can increase your 
    vertical jump height in a few sessions.
    </b></font></p>
    
    <p id="calfmachine"><font size="5"><b>2.CALF MACHINE</b></font><br>
    <center><img class="image"src="IMAGES/calfm.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>
    The calf machine can isolate the soleus muscles of the calves and give it a good workout. 
    Your calves get a more muscular appearance when you work the soleus muscles.
    This machine is basically used to do seated calf raises. Weights can be varied and 
    the frequency depends on the person. A lot of athletes and people who require extensive 
    legwork prefer to use calf machines to strengthen their lower legs and also increase speed and agility.
    </b></font></p>
    
    <p id="stairstep"><font size="5"><b>3.STAIR STEPPER</b></font><br>
    <center><img class="image"src="IMAGES/stair.png" height="300" width="300"></center>
    <br><br><font size="4"><b>
    This is an inexpensive machine which can simulate climbing stairs which 
    is considered a really good cardio workout.While the stair stepper may be 
    an older machine compared to the newfangled pieces of equipment available, 
    it can still give you that lower body burn.
    </b></font></p>
    
    <p id="ankle"><font size="5"><b>4.ANKLE WEIGHTS</b></font><br>
    <center><img class="image"src="IMAGES/ankle.png" height="300" width="300"></center>
    <br><br><font size="4"><b>
    A well-cushioned weight-bracelet for your ankle which is used to add 
    resistance to your exercises.This is a very useful and portable method 
    to add more to your resistance to your morning walks or jogging routine. 
    </b></font></p>
    
    <p id="reversehyp"><font size="5"><b>5.REVERSE HYPER</b></font><br>
    <center><img class="image"src="IMAGES/revhyp.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>
    The reverse hyperextension combines strengthening and rehab into one effective 
    machine. The spine is gently stretched and the lumbar area is strengthened.
    This is definitely one of the best therapeutic machines for the back. 
    One of the major reason for putting your back out is during heavy lifting or squatting.
    </b></font></p>
    
    <p id="legcurl"><font size="5"><b>6.LEG CURL MACHINE</b></font><br>
    <center><img class="image"src="IMAGES/legcurl.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>
    The ideal machine for toning your quadriceps is the leg extension machine. 
    You will have to sit on the machine with your legs under the pads and lift 
    weights using your quadriceps.A lot of people have gone past leg extensions 
    to compound exercises, but they still find them useful in certain situations.
    </b></font></p>
    
    <p id="hacksquat"><font size="5"><b>7.HACK SQUAT MACHINE</b></font><br>
    <center><img class="image"src="IMAGES/hacksquat.png" height="300" width="300"></center>
    <br><br><font size="4"><b>
    Another fitness device that can give your legs a good workout. 
    It is essentially a combination of leg press and squat machines. 
    It works your quadriceps in a much more efficient way.
    This along with a leg press machine can help develop your lower body 
    especially the thighs and calf sections. Find our review of hack squat and leg press machines.
    </b></font></p>
    
    <p id="are"><font size="5"><b>8.AIR RESISTENCE EXERCISE BIKE</b></font><br>
    <center><img class="image"src="IMAGES/are.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>
    An exercise bike with a twist, the air resistance bike uses exponential 
    resistive force generated by air to give you a thorough cardio workout.
    One of the most grueling pieces of kit in the gym, an Assault AirBike can 
    really turn the screws when it comes to pushing your limits.
    </b></font></p>
    
    
    
    <h1 style="color:white" id="fbe">FULL BODY EQUIPMENTS</h1>
    
    <p id="spinbike"><font size="5"><b>1.SPINE BIKE</b></font><br>
    <center><img class="image"src="IMAGES/spin.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>
    A spin bike delivers an effective indoor workout. These bikes come with 
    a heavyweight flywheel and cycling shoe compatibility. They also come with 
    varying resistance levels to adjust the intensity level of the workout.
    Spin bikes are growing in popularity as they are an excellent way to burn calories 
    by sweating it out. It is important not to overdo it and choose the right bike 
    for your needs from the numerous options available.
    </font></p>
    
    <p id="minitram"><font size="5"><b>2.MINI TRAMPOLINE</b></font><br>
    <center><img class="image"src="IMAGES/minitram.png" height="300" width="300"></center>
    <br><br><font size="4"><b>
    A fun little piece of equipment which you can use to strengthen your body, 
    hone your balance and increase aerial body control.There is nothing more fun
     than bouncing around on your own trampoline while improving your balance and 
    your fitness levels. Doing this early in the morning can jumpstart your 
    metabolism and you'll feel refreshed.
    </b></font></p>
    
    <p id="sustrain"><font size="5"><b>3.SUSPENSION TRAINER</b></font><br>
    <center><img class="image"src="IMAGES/sustrain.jpg" height="300" width="300"></center>
    <br><br><font size="4"><b>
    It consists of several nylon bands and plastic buckles and is used to leverage
     your body against gravity to create resistance. Using a suspension trainer, 
    you can perform hundreds of different exercise movements which work on various parts of the body.
    This was an idea by a US navy seal to come up with TRX range of suspension trainers. 
    All you needed with this training equipment was anchor and gravity, both of which are accessible anytime.
    </b></font></p>
    
    <p id="vibration"><font size="5"><b>4.VIBRATION PLATE</b></font><br>
    <center><img class="image"src="IMAGES/vibplate.jpg" height="300" width="300"></center>
    <br><br><br><br><font size="4"><b>
    The machine looks like a weighing machine with handles but it has a base 
    that vibrates at varying frequencies so people get a low-impact workout without 
    the physical exertion normally associated with regular exercises.
    Vibration plates work on the principle of muscle resonance, the frequency at which 
    your muscles begin to vibrate, activating it and boosting your ability to exercise.
    </b></font></p>
    
    <p id="treadmill"><font size="5"><b>5.TREADMILL</b></font><br>
    <center><img class="image"src="IMAGES/treadmill.jpg" height="300" width="300"></center>
    <br><br><br><br><font size="4"><b>
    When you think of cardio workouts, treadmills are the first to come to mind. 
    They are used to help you achieve a walking or running motion while staying 
    in one place. Using a treadmill regularly can help you lose weight and build strength.
    Purchasing a treadmill can be quite and investment as these tend to be expensive.
    </b></font></p>
    
    
    <p id="abcoast"><font size="5"><b>6.AB COASTER</b></font><br>
    <center><img class="image"src="IMAGES/Ab-coaster.jpg" height="300" width="300"></center>
    <br><br><br><br><font size="4"><b>
    The Ab coaster machine works your abs from the bottom up, by targeting 
    those hard to reach ab muscles. It can maximize your core workout by working your abdominal muscles.
    Definitely enhances regular floor ab exercises and is more effective on working on 
    the whole ab muscle, from bottom to top. It works especially on the abdominal 
    muscles and creates core strength in weaker portions of the abs.
    </b></font></p>
    
    <p id="invtab"><font size="5"><b>7.INVERSION TABLE</b></font><br>
    <center><img class="image"src="IMAGES/invtab.png" height="300" width="300"></center>
    <br><br><br><br><font size="4"><b>
    Inversion tables are specialized pieces of equipment that are mostly
    used for therapeutic purposes. It relies on the effect of gravity to 
    pull and decompress joints of your body that are below the anchor. 
    This effect stretches out your body and you can adjust being at a 
    small angle or fully vertical.
    </b></font></p>
    
    <p id="smith"><font size="5"><b>8.SMITH MACHINE</b></font><br>
    <center><img class="image"src="IMAGES/smith.jpg" height="300" width="300"></center>
    <br><br><br><br><font size="4"><b>
    A weight training machine which will assist you in lifting weights
     and in performing squats. The machine has a barbell which is fixed
    within steel rails allowing vertical movements.
    This is a great piece of equipment for intermediate and advanced lifters. 
    But it is important to understand its limitations and use it accordingly.
    </b></b></font></p>
    
    
    
    <center><h1 style="color:white" id="availtrainer">AVAILABLE TRAINERS</h1><br>
    
    <h2 id="sharathy">Sharathy.A B.Sc(Physical Fitness)</h2>
    <center><img class="image"src="IMAGES/user.jpg" alt="trainer" width="250" height="250"> <br><br>
    <p><br><br><font size="4"><b>Experience:</b> 4 years as Trainer<br>
    <b>Accomplishment:</b> 2 times Mr.Madurai Award Winner<br>
    <b>Contact No:</b>9456789123
    <br><b>Mail Id:</b>sharathy34@gmail.com
    </font></p></center><br>
    
    <h2 id="saravanan">Saravanan.R  M.Sc(Food and Nutrition)</h2>
    <center><img class="image"src="IMAGES/user.jpg" alt="trainer" width="250" height="250"> <br><br>
    <p><br><br><font size="4"><b>Experience:</b> 3 years as Dietician(IDA Certified)<br>
    <b>Contact No:</b>9856791034
    <br><b>Mail Id:</b>saravanan74@gmail.com
    </font></p></center><br>
    
    <h2 id="ramesh">Ramesh.K  M.Sc(Food Technology)</h2>
    <center><img class="image"src="IMAGES/user.jpg" alt="trainer" width="250" height="250"> <br><br>
    <p><br><br><font size="4"><b>Retired IFD officer</b><br><b>Dietician</b>
    <b>Contact No:</b>9876123562
    <br><b>Mail Id:</b>ramesh56@gmail.com
    </font></p></center> <br>
    
    <h2 id="rakesh">Rakesh.H  M.Sc(Physical Fitness)</h2>
    <center><img class="image" src="IMAGES/user.jpg" alt="trainer" width="250" height="250"> <br><br>
    <p><br><br><font size="4"><b>Trainer and Physiotherapist</b><br>
    <b>Contact No:</b>9875678231
    <br><b>Mail Id:</b>rakeshh201@gmail.com
    </font></p></center> <br>
    
    <h2 id="aravindh">Aravindh.G  B.Sc(Physiotherapy and Psychology)</h2>
    <center><img class="image" src="IMAGES/user.jpg" alt="trainer" width="250" height="250"><br><br>
    <p><br><br><font size="4"><b>Trainer and Motivationalist</b><br>
    <b>Contact No:</b>9678932414
    <br><b>Mail Id:</b>aravindhera12@gmail.com
    </font></p></center> <br>
    
    <h2 id="sasikumar">Sasi Kumar.J  MD(Physician)</h2>
    <center><img class="image" src="IMAGES/user.jpg" alt="trainer" width="250" height="250"> <br><br>
    <p><br><br><font size="4"><b>Emergency Doctor</b><br>
    <b>Contact No:</b>9876442145
    <br><b>Mail Id:</b>sasikumarj4527@gmail.com
    </font></p></center></center><br>

  
    
    
    <div style="text-align: right;font-weight: bolder;color:white">Copyright © 2020 Reserved by Fortune Physical Fitness Centre</div>
</div>
</body>
</html>