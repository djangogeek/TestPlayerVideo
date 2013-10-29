<!DOCTYPE html>

<html>

<head>
    <style type="text/css">
        #div1, #div2 {width:400px;height:70px;padding:10px;border:1px solid #aaaaaa;}
    </style>
    <title>Test video full HTML5</title>
    <meta name="viewport" content ="width=device-width, user scalable=no"/>
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320"> 
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!---<meta name="apple-mobile-web-app-status-bar-style" content="black"> */--->
    <meta name="apple-mobile-web-app-title" content="Test player video">
    <!--<link rel="apple-touch-icon" href="http://www.opsomai.com/images/stories/opsis/miniopso.jpg" />-->
        
    
        <script> type="text/javascript" src="js/prototype.js"</script>
    
        <link href="http://vjs.zencdn.net/4.2/video-js.css" rel="stylesheet">
            <script src="http://vjs.zencdn.net/4.2/video.js"></script>
            <style type="text/css">
              .vjs-default-skin { color: #d94343 }
              .vjs-play-progress, .vjs-volume-level { background-color: #3e3ca6 }
              .vjs-control-bar, .vjs-big-play-button { background: rgba(68,76,87,0.7) }
              .vjs-slider { background: rgba(68,76,87,0.2333333333333333) }
            </style>
  <!-------------SCRIPT DRAG AND DROP------------>          
    <script>
    function allowDrop(ev)
    {
    ev.preventDefault();
    }

    function drag(ev)
    {
    ev.dataTransfer.setData("Text",ev.target.id);
    }

    function drop(ev)
    {
    ev.preventDefault();
    var data=ev.dataTransfer.getData("Text");
    ev.target.appendChild(document.getElementById(data));
    }
    </script>
</head>

<body>

<!-------------DRAG AND DROP HTML 5------------>

<h1> Test drag and drop HTML5 </h1>
<div id="columns">
  <div draggable="true"><header>A</header></div>
  <div draggable="true"><header>B</header></div>
  <div draggable="true"><header>C</header></div>
</div>
<p>Drag the Opsomai%aposlogo image into the rectangle:</p>

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<br>
<img id="drag1" src="http://www.opsomai.com/templates/opsomai/images/uploads/home/logo.png" draggable="true" ondragstart="drag(event)" width="100" height="69">
</div>
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<!-------------New formulaire HTML 5------------>
<br>
<h1>New formulaire HTML 5</h1>
<form>
  <label for="range-slider">Slider</label>
  <input type="range" name="range-slider" id="range-slider" min="0" max="20" step="1" value="0">

  <label for="numeric-spinner">Numeric spinner</label>
  <input type="number" name="numeric-spinner" id="numeric-spinner" value="2">

  <label for="date-picker">Date picker</label>
  <input type="date" name="date-picker" id="date-picker" value="2010-10-06">

  <label for="color-picker">Color picker</label>
  <input type="color" name="color-picker" id="color-picker" value="ff0000">

  <label for="text-field">Text field with placeholder</label>
  <input type="text" name="text-field" id="text-field" placeholder="Insert your text here">

  <label for="url-field">Url field</label>
  <input type="url" id="url-field" name="url-field" placeholder="http://net.tutsplus.com/" required>

  <label for="email-field">Email field</label>
  <input type="email" id="email-field" name="email-field" placeholder="contact@ghinda.net" required>

  <button type="submit" role="button" aria-disabled="false">
  <span>Submit form</span>
  </button>
</form>
<!-------------TEST Chargement fichier video et encodage ffmpeg------------>
<h1>TEST Chargement fichier video et encodage ffmpeg</h1>
<br>

<form method="post" action="[upload.php]" enctype="multipart/form-data">     
          <input type="hidden" name="MAX_FILE_SIZE" value="2097152">     
          <input type="file" name="nom_du_fichier">    
          <input type="submit" value="Envoyer">    
</form>
<?php
$output= shell_exec('pwd; ls');
echo "<pre><strong>$output</strong></pre>";
?>
<p><?php
echo 'test php';
?></p>
<!-------------TTEST Player HTML5--Player full html 5 sans JS---------->
<h1>TEST Player HTML5</h1>
<h2>Player full html 5 sans JS</h2>
   <video  id="video2" width="420" preload="auto" controls loop poster="http://www.opsomai.com/images/stories/opsis/miniopso.jpg" >
      <source src="medias/videos/burge" type="video/mp4">
      <track src="subtitles_en.vtt" kind="subtitles" srclang="en"
      label="English">
      <track src="subtitles_no.vtt" kind="subtitles" srclang="no"
      label="Norwegian">
      Your browser does not support the video tag.
    </video> 
    <!-------------TTEST Player HTML5--Player avec JS---------->
  <h2>Player full html 5 AVEC JS</h2>  
<div style="text-align:left"> 
      <video  id="video1" width="420"  preload="auto" loop poster="http://www.opsomai.com/images/stories/opsis/miniopso.jpg">
      <source src="medias/videos/heart.mp4" type="video/mp4">
      <source src="medias/videos/Le Journal de lespace CNES.ogg" type="video/ogg">
      <track src="subtitles_en.vtt" kind="subtitles" srclang="en"
      label="English">
      <track src="subtitles_no.vtt" kind="subtitles" srclang="no"
      label="Norwegian">
      Your browser does not support the video tag.
    </video> 
   <br>
   <button onclick="makeSmall()">Small</button>
   <button onclick="makeNormal()">Normal</button>
   <button onclick="makeBig()">Big</button>
   <button onclick="playPause()">Play/Stop</button> 
   <button onclick="makeLoop()">Loop</button>
   <br> 
</div>
   <!-------------TTEST Player HTML5--Player avec "Viddo.JS"---------->
<h2>Player video .js</h2>
<video id="my_video_1" class="video-js vjs-default-skin" controls
 preload="auto" width="640" height="264" poster="my_video_poster.png"
 data-setup="{}">
 <source src="medias/videos/CNES.mp4" type='video/mp4'>
 <source src="my_video.webm" type='video/webm'>
</video>


<script> 
var myVideo=document.getElementById("video1"); 

function playPause()
{ 
if (myVideo.paused) 
  myVideo.play(); 
else 
  myVideo.pause(); 
} 

function makeBig()
{ 
myVideo.width=860; 
} 
function makeLoop()
{ 
if (myVideo.stoped) 
  myVideo.play(); 
else 
  myVideo.play();  
} 
function makeSmall()
{ 
myVideo.width=320; 
} 

function makeNormal()
{ 
myVideo.width=420; 
} 
</script> 

<div class="steps">
  <h1>Flat Checklist</h1>
    <input id='label-1' type='checkbox' checked/>
    <label for='label-1'>
      <h2>Meet Larry at 6pm <span>Lorem ipsum dolor</span></h2>   
    </label>

    <input id='label-2' type='checkbox' checked/>
    <label for='label-2'>
      <h2>Team Session <span>Lorem ipsum dolor</span></h2>   
    </label>
	
    <input id='label-3' type='checkbox'/>
    <label for='label-3'>
      <h2>Watch Movie <span>Lorem ipsum dolor</span></h2>   
    </label>
	
    <input id='label-4' type='checkbox'/>
   <label for='label-4'>
      <h2>Date with babe <span>Lorem ipsum dolor</span></h2>   
    </label>
	
    <input id='label-5' type='checkbox'/>
   <label for='label-5'>
      <h2>Jogging at Ayala<span>Lorem ipsum dolor</span></h2>   
    </label>
</div>
</body>
</html>