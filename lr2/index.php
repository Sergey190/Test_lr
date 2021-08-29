<?php
session_start();
 include("include/connect.php");
?>


<!DOCTYPE html>
<html>
<head>

	<title>Лабораторная работа 2</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="assets/css/main.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src='js/jquery.svg3dtagcloud.min.js'></script>

    <link href='https://fonts.googleapis.com/css?family=Oswald&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


</head>


    <script>

    	$( document ).ready( function() {

            var entries = [ 
                
                { label: 'Dev Blog', url: 'http://niklasknaack.blogspot.de/', target: '_top' },
                { label: 'Flashforum', url: 'http://www.flashforum.de/', target: '_top' },
                { label: 'jQueryScript.net', url: 'http://www.jqueryscript.net/', target: '_top' },
                { label: 'Javascript-Forum', url: 'http://forum.jswelt.de/', target: '_top' },
                { label: 'JSFiddle', url: 'https://jsfiddle.net/user/NiklasKnaack/fiddles/', target: '_top' },
                { label: 'CodePen', url: 'http://codepen.io/', target: '_top' },
                { label: 'three.js', url: 'http://threejs.org/', target: '_top' },
                { label: 'WebGLStudio.js', url: 'http://webglstudio.org/', target: '_top' },
                { label: 'JS Compress', url: 'http://jscompress.com/', target: '_top' },
                { label: 'TinyPNG', url: 'https://tinypng.com/', target: '_top' },
                { label: 'Can I Use', url: 'http://caniuse.com/', target: '_top' },
                { label: 'URL shortener', url: 'https://goo.gl/', target: '_top' },
                { label: 'HTML Encoder', url: 'http://www.opinionatedgeek.com/DotNet/Tools/HTMLEncode/Encode.aspx', target: '_top' },
                { label: 'Twitter', url: 'https://twitter.com/niklaswebdev', target: '_top' },
                { label: 'deviantART', url: 'http://nkunited.deviantart.com/', target: '_top' },
                { label: 'Gulp', url: 'http://gulpjs.com/', target: '_top' },
                { label: 'Browsersync', url: 'https://www.browsersync.io/', target: '_top' },
                { label: 'GitHub', url: 'https://github.com/', target: '_top' },
                { label: 'Shadertoy', url: 'https://www.shadertoy.com/', target: '_top' },
                { label: 'Starling', url: 'http://gamua.com/starling/', target: '_top' },
                { label: 'jsPerf', url: 'http://jsperf.com/', target: '_top' },
                { label: 'Foundation', url: 'http://foundation.zurb.com/', target: '_top' },
                { label: 'CreateJS', url: 'http://createjs.com/', target: '_top' },
                { label: 'Velocity.js', url: 'http://julian.com/research/velocity/', target: '_top' },
                { label: 'TweenLite', url: 'https://greensock.com/docs/#/HTML5/GSAP/TweenLite/', target: '_top' },
                { label: 'jQuery', url: 'https://jquery.com/', target: '_top' },
                { label: 'jQuery Rain', url: 'http://www.jqueryrain.com/', target: '_top' },
                { label: 'jQuery Plugins', url: 'http://jquery-plugins.net/', target: '_top' },

            ];

            var settings = {

                entries: entries,
                width: 480,
                height: 480,
                radius: '65%',
                radiusMin: 75,
                bgDraw: true,
                bgColor: '#111',
                opacityOver: 1.00,
                opacityOut: 0.05,
                opacitySpeed: 6,
                fov: 800,
                speed: 2,
                fontFamily: 'Oswald, Arial, sans-serif',
                fontSize: '15',
                fontColor: '#fff',
                fontWeight: 'normal',//bold
                fontStyle: 'normal',//italic 
                fontStretch: 'normal',//wider, narrower, ultra-condensed, extra-condensed, condensed, semi-condensed, semi-expanded, expanded, extra-expanded, ultra-expanded
                fontToUpperCase: true,
                tooltipFontFamily: 'Oswald, Arial, sans-serif',
                tooltipFontSize: '11',
                tooltipFontColor: '#fff',
                tooltipFontWeight: 'normal',//bold
                tooltipFontStyle: 'normal',//italic 
                tooltipFontStretch: 'normal',//wider, narrower, ultra-condensed, extra-condensed, condensed, semi-condensed, semi-expanded, expanded, extra-expanded, ultra-expanded
                tooltipFontToUpperCase: false,
                tooltipTextAnchor: 'left',
                tooltipDiffX: 0,
                tooltipDiffY: 10

            };

            //var svg3DTagCloud = new SVG3DTagCloud( document.getElementById( 'holder'  ), settings );
            $( '#holder' ).svg3DTagCloud( settings );

		} );
        
    </script>

<body>
<div id='holder'></div>

<?php

include("include/block-header.php");

?>

<?php

include("include/block-content.php");

?>



   <!--jQuery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <!--prettyTag JS-->
<script src="js/jquery.prettytag.js"></script>

   <!--prettyTag CSS-->
<link rel="stylesheet" href="css/prettytag.css" />

<script>
$(document).ready(function(){

$(".cloud-tags").prettyTag();

$(".tags").prettyTag({
  randomColor: true,
  tagicon: false,

  });

}); //jQuery
</script>
</head>
<body>



<
<main>
<article>



   <ul class="cloud-tags">
      <li><a href="#2"> Web Design </a> </li>
      <li> <a href="#2"> CSS Tutorial </a> </li>
      <li> <a href="#2"> jQueryScript.net</a> </li>
      <li> <a href="#2"> Codehim.com </a> </li>
      <li> <a href="#2"> jQuery </a></li>
      <li> <a href="#2"> Cloud Tags</a></li>
      <li> <a href="#2"> Easy Learning </a></li>
      <li> <a href="#2"> CSS3</a></li>
      <li> <a href="#2"> Tagging  </a></li>
      <li> <a href="#2"> jQuery Plugin </a></li>
      <li> <a href="#2"> HTML5 </a></li>
      <li> <a href="#2"> CSS3 </a></li>
   </ul>







<!--Demo ONLY FILES-->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="docs/demo-only.css" />
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"> </script> 


<?php

include("include/block-footer.php");

?>







</body>
</html>