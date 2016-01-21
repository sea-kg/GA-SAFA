<?php
include_once("config.php");
?>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>ga-safa</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="sea-kg" />
		<meta name="copyright" lang="ru" content="sea-kg" />
		<meta name="description" content="ga-safa" />
		<meta name="keywords" content="genetic, algorithm, signals, approximate" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />

		<script type="text/javascript" src="signal001/original_signal.js"></script>
		<script type="text/javascript" src="signal001/approx_signal.js"></script>
		
		<script type="text/javascript">
			function onbodyload(){
				var el = document.getElementById('graphic');
				var height = 600;
				var width = original_signal.length;
				el.setAttribute('width', width);
				el.setAttribute('height', height);
				var ctx = el.getContext("2d");
				ctx.font = "14px Arial";
				ctx.fillStyle = "#000";
				ctx.strokeStyle = "#000";

				ctx.fillRect  (0, 0, el.width, el.height);
				ctx.strokeRect(0, 0, el.width, el.height);
				ctx.fillStyle = "#000";

				ctx.strokeStyle = "#CCC";
				ctx.beginPath();
				ctx.moveTo(0,height/2);
				ctx.lineTo(width,height/2);
				ctx.stroke();
				ctx.closePath();

				var diff = height/32768;
				function scaleY(y){
					return y*diff + height/2;
				};

				ctx.strokeStyle = "#3333ff";
				ctx.beginPath();
				ctx.moveTo(0,scaleY(original_signal[0]));
				for(var i = 1; i < original_signal.length; i++){
					ctx.lineTo(i,scaleY(original_signal[i]));
				}
				ctx.stroke();
				
				ctx.strokeStyle = "#ff3333";
				ctx.beginPath();
				ctx.moveTo(0,scaleY(approx_signal(0)));
				for(var i = 1; i < original_signal.length; i++){
					var t = i/16;
					ctx.lineTo(i,scaleY(approx_signal(t)));
				}
				ctx.stroke();
				
				ctx.fillStyle = "#FFF";
				// ctx.font="20px Georgia";
				ctx.fillText("Diff value: " + getDiffValue(),10,25);
				ctx.fillText("Date: " + getDt(),10,50);
			};
		</script>
		
	</head>
	<body onload="onbodyload();">
		
		<div class="menu-fixed">
			<div class="menu">
				<div class="menu-left">
					<a href="http://ga-safa.sea-kg.com">ga-safa</a>
				</div>
				<div class="menu-right">
					<a class="menu-item-right" href="index.php">index</a>
					<a class="menu-item-right" href="graphics.php">graphics</a>
				</div>
			</div>
		</div>
		<div class="application-logo"></div>
		<div class="copyright-fixed">
			<div class="copyright">
				Copyright © 2016 Evgenii Sopov (sea-kg). MIT Licence.
			</div>
		</div>
		<div class="content-absolute">
			<div class="content">
				<h1>Graphics</h1>
				<h2>Description</h2>

				<?php
					
				?>

				<canvas id="graphic" width="2048" height="700"></canvas>
				
Service for search a the approximating function signals based on genetic algorithm.

				<h2>License</h2>
				The MIT License (MIT)
				<pre>
Copyright (c) 2016 Evgenii Sopov

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
</pre>
				<h2>Sources</h2>
				You can donwload source code from here: <a href="https://github.com/sea-kg/inventory-files" target="_blank">GitHub.com</a><br/><br/>

				<h2>Contacs</h2>
				Need more information?... Or have you proposal?<br>
				Please write e-mail to me: mrseakg(at)gmail.com
				<br><br>
				Developers:
				<ul>
					<li>Evgenii Sopov</li>
				</ul>
			</div>
		</div>
		
		
		
	</body>
</html>
