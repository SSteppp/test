<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Андрей Андреев</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<span><img src="images/лого.png"></span></a>
				</div>
				<div id="menu">
					<ul>
						<li><a href="/">Главная</a></li>
						<li><a href="/galery">Галерея</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			
			<div id="page">	
				<div id="content">
					
						<?php include 'application/views/'.$content_view; ?>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/">Андрюшке посвещается </a> 2017</a>
		</div>
	</body>
</html>