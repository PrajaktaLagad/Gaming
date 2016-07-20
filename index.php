<!doctype html>
<html>
<meta charset="utf-8"/>
	<title>
		GAMER ZONE
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	
	<link rel="stylesheet" type="text/css" href="bluberry.css">

	
	<style type="text/css">
	*{
		margin: 0;
		border: 0;
		padding: 0;
	}
	#reqDropdowns{
		display: none;
		margin-top: 20px;
	}
	body{
		background: #f0f0f0;
		font: 14px/20px Arial, San-Serif;
		color: #555;
		margin: 0;
	}
		#canURunIt{
			margin: 0;
		width:100%;
		background-color: black;
		color:red;
	}
	h1{
		text-align: center;
		font-size: 180%;
		line-height: 120%;
		padding: 5% 0;
	}

	h2{
		text-decoration: underline;
		line-height: 280%;
		padding-left: 2%;
	}
	h3{
		line-height: 20px;
		padding: 5% 0;
	}
	p{
		padding: 1%;
	}
	img{
		border-radius: 25px;
		text-align: center;
		max-width: 100%;
		height: auto;
		width: auto;
	}
	a{
		color: #fff;
		text-decoration: none;
		font-weight:  bold;

	}
	a:hover{
		color: #fff;
		text-decoration: underline;
	}
	header{
		background: #000000;
		width: 100%;
		height: 86px;
		position: fixed;
		top: 0;
		left: 0;
		z-index: 100; 
		opacity: 0.8;
	}
	#logo{
		margin: 20px;
		float: left;
		width: 200px;
		height: 60px;
		background: url(http://playiq.com/static/img/play_iq_logo_horz_sm.png  ) no-repeat center;
	}
	nav{
		float: right;
		padding: 35px 20px 20px 0px;

	}

	#menu-icon{
		display: hidden;
		width: 40px;
		height: 40px;
		background: url(http://www.w3newbie.com/wp-content/uploads/icon.png) center;
	}
	a:hover#menu-icon{
		border-radius: 4px 4px 0 0;
	}

	ul{
		list-style: none;
	}

	nav ul li{
		display: inline-block;
		float: left;
		padding: 10px;
	}

	.current{
		color: #fff;
		text-decoration: underline;
	}

	#doc{
		margin: 40px 0;
	}
	#content{
		margin: 0 auto;
		max-width: 1140px;
		margin-top: 110px;
	}
	.bluberry{
		max-width:  960px;
		margin-top: 110px;
	}
	section{
		width: 29%;
		float: left;
		margin: 2% 2%;
		text-align: center;
	}
.clear{
	clear: both;
}
article{
	float: left;
	margin: 0 auto;
	width: 50%;
	height: auto;
	padding: 4%;
}
aside{
	float: right;
	margin: 0 auto;
	width: 35%;
	height: auto;
	padding: 3%;
}
.gamer li{
	padding-left: 3%;
}
footer{
	background: #333333;
	width: 100%;
	overflow: hidden;
	opacity: 0.90;
}
footer p,footer h3{
	color:#FFF;
}

footer p a{
	color: #FFF;
	text-decoration: none;
}
ul.social li{
	display: inline;
}
ul.social li{
	height: 50px;
}
footer.second{
	border-top: 1px solid #4D4E50;
	background-color: #333333;
	max-height: 50px;
	text-align: center;
	opacity: 0.95;
}
ul.slides{
	text-align: center;
}
/*-------------Media-----------*/

	@media screen and (max-width: 740px){
	header{
		position: absolute;
	}
	#menu-icon{
		display: inline-block;
	}
	nav ul,nav:active ul{
			text-align: center; 
			display: none;
			position: absolute;
			padding: 10px 50px;
			background: red;
			border: 1px solid #FFF;
			right: 20px;
			top: 60px;
			width: 50px;
			border-radius: 2px 2px 2px 2px;
	}
	nav li{
		text-align: center;
		width: 100%;
		padding: 10px 0;
		margin: 0;

	}
	nav:hover ul{
		display: block;

	}
	section{
		float: left;
		width: 100%;
		margin: 0;
		padding: 0;
	}
	article{
		float: left;
		width: 100%;
		margin: 0;
		padding: 0;

	}
	aside{
		float: left;
		width: 100%;
		margin: 0;
		padding: 0;
	}
	#reqDropdowns{

	float: right;
		width: 100%;
		margin: 20;
		padding: 20;
		

	}
	label{
		float: left;
		width: 100%;
		margin: 0;
		padding: 0;
		

}
	

	</style>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.3.js"></script>
	<script src="jquery.blueberry.js"></script>
	<script src="game.js"></script>
	<script>
	$(window).load(function() {
		$('.blueberry').blueberry();
		$('#select-game').on('change', showReqDropdowns);
		$('#get-result').on('click', getResults);
	});
	</script>

</head>

</body>

		<header>
		<a href="#" id="logo"></a>
		<nav>
			<a href="#" id="menu-icon"></a>
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Reviews</a></li>
				<li><a href="#">PC</a></li>
				<li><a href="#">XBOX</a></li>
				<li><a href="#">PS4</a></li>
				<li><a href="#">NEWS</a></li>
			</ul>
				
		</nav>
			
		</header>
		
		<div id="doc">
			<div id="content">
				<div class="blueberry">
				<ul class="slides">
				<li><img src="http://4.bp.blogspot.com/-VzwK_HKIA5U/VR3HDEfETGI/AAAAAAAAAFg/B9al71d7co8/s1600/Quantum%2BBreak.png "/></li>
				<li><img src="http://4.bp.blogspot.com/-F9UJ-rYPzSI/Uea8QDldoNI/AAAAAAAAvCs/_2YtnGNY_zU/s1600/rendering_hub.jpg  " /></li>
				<li><img src=" http://cdn-iprima.cz/sites/default/files/styles/scale_desktop/public/d2fedc07/1982007-starwars-top2.jpg?itok=lFx01Oxk" /></li>
				<li><img src="https://d.ibtimes.co.uk/en/full/1528955/pokemon-go-screenshots.png?w=736&h=442&l=50&t=40&q=80 " /></li>
				</ul>
				</div>
			</div>
		</div>
		<section>
		<img src="https://yt3.ggpht.com/-u-KNzhguDso/AAAAAAAAAAI/AAAAAAAAAAA/52b6HigG6y0/s100-c-k-no-rj-c0xffffff/photo.jpg" />
		<h1>RPG's</h1>
		<p>A role-playing game (RPG and sometimes roleplaying game is a game in which players assume the roles of characters in a fictional setting.</p>
			
		</section>
		<section>
		<img src="http://img2.rnkr-static.com/user_node_img/55/1095248/C100/grand-theft-auto-iv-u4.jpg" />
		<h1>Linear(Third Person)</h1>
		<p>
			Third-person shooter is a subgenre of 3D shooter games in which the player character is visible on-screen, and the gameplay consists primarily of shooting.
		</p>
			
		</section>
		<section>
		<img src="http://cdn.igeeksblog.com/wp-content/uploads/Modern-Combat-5-iPhone-and-iPad-Game-Icon1.jpg" />
		<h1>First-Person Shooter</h1>
		<p>First-person shooter (FPS) is a video game genre centered on gun and projectile weapon-based combat through a first-person perspective; that is, the player experiences the action through the eyes of the protagonist</p>
		</section>
		<section id="canURunIt">
			<h2>Can You Run It?</h2>
			<div id="req" class="col-md-4">
				<label for="select-game">Select A Game:</label><select id="select-game" name="select-game">
					<option selected value="">--select--</option>
					<option value="1">Deus Ex Mankind Divided</option> 
					<option value="2">Watch Dogs 2</option>
					<option value="3">Hitman</option>
					<option value="4">Days Gone</option>
				</select>
				<div id="reqDropdowns" class="col-md-4">
					<label for="select-processor">Select Your procesor:</label><select class="selectpicker" id="select-processor" class="reqDropdowns" name="select-processor">
					<option selected value="">--select--</option>
						<option value="1">Dual Core</option>
						<option value="2">Quad Core</option>
						<option value="3">Core i3</option>
						<option value="4">Core i5</option>
						<option value="5">Core i7</option>
					</select>
					<label for="select-gfx">Select Your Graphics Card:</label><select id="select-gfx" class="reqDropdowns" name="select-gfx">
					<option selected value="">--select--</option>
						<option value="1">GT 1020</option>
						<option value="2">GTX 970</option>
						<option value="3">GTX 980</option>
						<option value="4">GTX 1070</option>
						<option value="5">GTX 1080</option>
					</select>
					<label for="select-ram">Select Your Ram:</label><select id="select-ram" class="reqDropdowns" name="select-ram">
					<option selected value="">--select--</option>
						<option value="1">4GB DDR3</option>
						<option value="2">8GB DDR3</option>
						<option value="3">4GB DDR4</option>
						<option value="4">8GB DDR4</option>
					</select><br>
					<button type="button" class="btn btn-default">Default</button>
				</div>
				<span id="msg"></span>
			</div>
		</section>
		<div class="clear"></div>
		<article>
			<img src=" http://www.lazygamer.net/images/2013/01/LAN-party.jpg" />
		</article>

		<aside>
			<h2>UPCOMING GAMES 2016</h2>
			<ul class="gamer">
				<li><h3>DEUS-EX MANKIND DIVIDED</h3></li>
				<li><h3>Horizon:ZERO DAWN</h3></li>
				<li><h3>WATCHDOGS 2</h3></li>
				<li><h3>MAFIA III</h3></li>
				<li><h3>DEATH STRANDING</h3></li>
			</ul>
			</aside>
	<div class="clear">
	<section>
	<h1>PS4</h1>
		<img src="https://amanecerdeseadonoticias.files.wordpress.com/2013/11/ps4.jpg?w=392&h=261" />
		
		<p>
			More Powerful PS4 Neo Will Launch This Year - Report
		</p>
			
		</section>
		<section>
		<h1>PC</h1>
		<img src="https://jtvcustoms.files.wordpress.com/2015/11/at8a7028.jpg?w=392&h=261&crop=1" />
		
		<p>
			Custom Gaming PC - high performance Gaming Desktops custom built for eSports and PC gamers. Create the ultimate Gaming PC.
		</p>
			
		</section>
		<section>
		<h1>XBOX ONE</h1>
		<img src="http://www.ausgamers.com/gameres/5841/images/custom/xboxone_06.392x261.jpg" />
		
		<p>
			More Free Xbox One and Xbox 360 Games Now Available
		</p>
			
		</section>
		

	</div>
	<footer>
		<section>
			<h3><b>LUCKY NUGGET</b></h3>
			<p><b>222-2215-855</b><br><br>
			Pune-30.<br>
			INDIA.
			</p>
		</section>
		<section>
			<h3>Connect With Us</h3>
			<ul class="social">
				<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/facebook1.png" /></li>
				<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/googleplus.png" /></li>
				<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/twitter1.png" /></li>
				<li><a href="#"><img src="http://www.w3newbie.com/wp-content/uploads/youtube1.png" /></li>
			</ul>
		</section>
		<section>
			<img src="http://im.ziffdavisinternational.com/t/ign_ap/screenshot/default/dsc00755_zb7u.210.jpg" />
		</section>
		<footer class="second"><p>@Copyright 2016<p></footer>
	</footer>

		
</body>
</html>
