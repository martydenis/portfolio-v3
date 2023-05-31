<?php require_once 'includes.php'; ?>
<?php require_once 'form.php'; ?>
<?php

error_reporting(0);


$birthDate = "09/17/1993";
//explode the date to get month, day and year
$birthDate = explode("/", $birthDate);
//get age from date or birthdate
$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
	? ((date("Y") - $birthDate[2]) - 1)
	: (date("Y") - $birthDate[2]));

?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Martin Denis | Front-end developer & Webdesigner</title>
		<meta charset="UTF-8">
		<meta name="description" content="Discover my work, projects and sandbox I worked on as a Webdesigner & Front-end developer">
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=5, minimal-ui"/>
		
		<link rel="icon" type="image/svg" href="<?php echo $favicon_path; ?>favicon.svg" />
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Text&family=Manrope:wght@200..800&display=swap" rel="stylesheet" media="screen">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js" defer></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script> -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script> -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll-probe.js"></script> -->
		<script src="js/jquery.min.js" defer></script>
		<script src="js/tools<?php echo ($is_prod ? '.min.js' : '.js?' .time()) ; ?>" defer></script>
		<script src="js/main<?php echo ($is_prod ? '.min.js' : '.js?' .time()) ; ?>" defer></script>
	</head>

	<body id="body">
		<div id="content-wrapper">
			<header id="hello" class="section">
				<div class="section__fullheight">
					<div class="container-small">
						<div class="hello-anim section__content">
							<h1 id="hello-anim-h1"><span class="hello-hi">Hi, </span>I am <span class="cursive">Martin</span></h1>
							<p class="hello-anim-p">I'm a <?php echo $age; ?> years old frontend developer and web designer, <br class="hidden-sm">living in Belgium</p>
							<p class="hello-anim-p">I graduated from the <a href="http://www.infographie-sup.be/" rel="noopener" target="_blank">ESIAJ</a> in 2015 <br class="hidden-sm">and have been working at <a href="https://www.e-net-b.be/" rel="noopener" target="_blank">E-net Business</a> ever since.</p>
						</div>
					</div>
				</div>
			</header>
			<!-- FIN Hello -->

			<h2 id="projects__title" class="show-mobile container-small">Latest <span class="cursive">projects</span></h2>

			<div id="mask">
				<div id="mask__overlay"></div>
				<!-- <img id="mask__img" src="img/work-mask.svg" alt="mask" width="346" height="90"> -->
				<canvas id="mask__canvas" class="fullsize-canvas" width="300" height="200"></canvas>
			</div>

			<section id="projects" class="section__white">
				<article	id="project__sandbox" class="project section">
					<div class="pin-wrapper">
						<div class="container-big section__fullheight">							
							<div class="section__content">
								<h3><a href="sandbox/">Sandbox</a></h3>
								<p>My personal JavaScript experiments & challenges</p>
								<p class="btn-container"><a href="sandbox/" class="btn">Play around</a></p>
							</div>
							<canvas id="project__sandbox__canvas" class="fullsize-canvas" width="300" height="200"></canvas>
						</div>
					</div>
				</article>

				<?php /*
				<article id="project__datakillers" class="project section">
					<div class="pin-wrapper">
						<div class="container-big section__fullheight">
							<div class="section__image">
								<picture>
									<source srcset="img/datakillers.webp" type="image/webp">
									<source srcset="img/datakillers.png" type="image/png"> 
									<img src="img/datakillers.png" alt="DataKillers" class="project__laptop" width="840" height="490" >
								</picture>
							</div>
							<div class="section__content">
								<h3>DataKillers</h3>
								<p>Data visualisation on serial killers in the world.</p>
								<p class="btn-container"><a href="/projects/datakillers/" class="btn" target="_blank">See the project</a></p>
							</div>
						</div>
						<svg id="project__datakillers_svg" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 500" xml:space="preserve">
							<line class="data-line" x1="5" y1="482" x2="5" y2="500"/>
							<line class="data-line" x1="15" y1="479" x2="15" y2="500"/>
							<line class="data-line" x1="25" y1="479" x2="25" y2="500"/>
							<line class="data-line" x1="35" y1="467" x2="35" y2="500"/>
							<line class="data-line" x1="45" y1="472" x2="45" y2="500"/>
							<line class="data-line" x1="55" y1="463" x2="55" y2="500"/>
							<line class="data-line" x1="65" y1="455" x2="65" y2="500"/>
							<line class="data-line" x1="75" y1="463" x2="75" y2="500"/>
							<line class="data-line" x1="85" y1="472" x2="85" y2="500"/>
							<line class="data-line" x1="95" y1="468" x2="95" y2="500"/>
							<line class="data-line" x1="105" y1="463" x2="105" y2="500"/>
							<line class="data-line" x1="115" y1="457" x2="115" y2="500"/>
							<line class="data-line" x1="125" y1="492" x2="125" y2="500"/>
							<line class="data-line" x1="135" y1="484" x2="135" y2="500"/>
							<line class="data-line" x1="145" y1="440" x2="145" y2="500"/>
							<line class="data-line" x1="155" y1="458" x2="155" y2="500"/>
							<line class="data-line" x1="165" y1="452" x2="165" y2="500"/>
							<line class="data-line" x1="175" y1="438" x2="175" y2="500"/>
							<line class="data-line" x1="185" y1="431" x2="185" y2="500"/>
							<line class="data-line" x1="195" y1="434" x2="195" y2="500"/>
							<line class="data-line" x1="205" y1="453" x2="205" y2="500"/>
							<line class="data-line" x1="215" y1="463" x2="215" y2="500"/>
							<line class="data-line" x1="225" y1="453" x2="225" y2="500"/>
							<line class="data-line" x1="235" y1="453" x2="235" y2="500"/>
							<line class="data-line" x1="245" y1="432" x2="245" y2="500"/>
							<line class="data-line" x1="255" y1="416" x2="255" y2="500"/>
							<line class="data-line" x1="265" y1="391" x2="265" y2="500"/>
							<line class="data-line" x1="275" y1="345" x2="275" y2="500"/>
							<line class="data-line" x1="285" y1="357" x2="285" y2="500"/>
							<line class="data-line" x1="295" y1="361" x2="295" y2="500"/>
							<line class="data-line" x1="305" y1="353" x2="305" y2="500"/>
							<line class="data-line" x1="315" y1="340" x2="315" y2="500"/>
							<line class="data-line" x1="325" y1="340" x2="325" y2="500"/>
							<line class="data-line" x1="335" y1="340" x2="335" y2="500"/>
							<line class="data-line" x1="345" y1="288" x2="345" y2="500"/>
							<line class="data-line" x1="355" y1="305" x2="355" y2="500"/>
							<line class="data-line" x1="365" y1="272" x2="365" y2="500"/>
							<line class="data-line" x1="375" y1="304" x2="375" y2="500"/>
							<line class="data-line" x1="385" y1="315" x2="385" y2="500"/>
							<line class="data-line" x1="395" y1="292" x2="395" y2="500"/>
							<line class="data-line" x1="405" y1="308" x2="405" y2="500"/>
							<line class="data-line" x1="415" y1="279" x2="415" y2="500"/>
							<line class="data-line" x1="425" y1="296" x2="425" y2="500"/>
							<line class="data-line" x1="435" y1="241" x2="435" y2="500"/>
							<line class="data-line" x1="445" y1="257" x2="445" y2="500"/>
							<line class="data-line" x1="455" y1="267" x2="455" y2="500"/>
							<line class="data-line" x1="465" y1="274" x2="465" y2="500"/>
							<line class="data-line" x1="475" y1="344" x2="475" y2="500"/>
							<line class="data-line" x1="485" y1="288" x2="485" y2="500"/>
							<line class="data-line" x1="495" y1="283" x2="495" y2="500"/>
							<line class="data-line" x1="505" y1="275" x2="505" y2="500"/>
							<line class="data-line" x1="515" y1="267" x2="515" y2="500"/>
							<line class="data-line" x1="525" y1="267" x2="525" y2="500"/>
							<line class="data-line" x1="535" y1="240" x2="535" y2="500"/>
							<line class="data-line" x1="545" y1="244" x2="545" y2="500"/>
							<line class="data-line" x1="555" y1="232" x2="555" y2="500"/>
							<line class="data-line" x1="565" y1="198" x2="565" y2="500"/>
							<line class="data-line" x1="575" y1="100" x2="575" y2="500"/>
							<line class="data-line" x1="585" y1="183" x2="585" y2="500"/>
							<line class="data-line" x1="595" y1="210" x2="595" y2="500"/>
							<line class="data-line" x1="605" y1="155" x2="605" y2="500"/>
							<line class="data-line" x1="615" y1="123" x2="615" y2="500"/>
							<line class="data-line" x1="625" y1="128" x2="625" y2="500"/>
							<line class="data-line" x1="635" y1="56" x2="635" y2="500"/>
							<line class="data-line" x1="645" y1="69" x2="645" y2="500"/>
							<line class="data-line" x1="655" y1="82" x2="655" y2="500"/>
							<line class="data-line" x1="665" y1="78" x2="665" y2="500"/>
							<line class="data-line" x1="675" y1="57" x2="675" y2="500"/>
							<line class="data-line" x1="685" y1="58" x2="685" y2="500"/>
							<line class="data-line" x1="695" y1="35" x2="695" y2="500"/>
							<line class="data-line" x1="705" y1="71" x2="705" y2="500"/>
							<line class="data-line" x1="715" y1="4" x2="715" y2="500"/>
							<line class="data-line" x1="725" y1="33" x2="725" y2="500"/>
							<line class="data-line" x1="735" y1="47" x2="735" y2="500"/>
							<line class="data-line" x1="745" y1="94" x2="745" y2="500"/>
							<line class="data-line" x1="755" y1="84" x2="755" y2="500"/>
							<line class="data-line" x1="765" y1="218" x2="765" y2="500"/>
							<line class="data-line" x1="775" y1="155" x2="775" y2="500"/>
							<line class="data-line" x1="785" y1="173" x2="785" y2="500"/>
							<line class="data-line" x1="795" y1="325" x2="795" y2="500"/>
							<line class="data-line" x1="805" y1="363" x2="805" y2="500"/>
							<line class="data-line" x1="815" y1="333" x2="815" y2="500"/>
							<line class="data-line" x1="825" y1="305" x2="825" y2="500"/>
							<line class="data-line" x1="835" y1="342" x2="835" y2="500"/>
							<line class="data-line" x1="845" y1="292" x2="845" y2="500"/>
							<line class="data-line" x1="855" y1="267" x2="855" y2="500"/>
							<line class="data-line" x1="865" y1="279" x2="865" y2="500"/>
							<line class="data-line" x1="875" y1="319" x2="875" y2="500"/>
							<line class="data-line" x1="885" y1="332" x2="885" y2="500"/>
							<line class="data-line" x1="895" y1="343" x2="895" y2="500"/>
							<line class="data-line" x1="905" y1="355" x2="905" y2="500"/>
							<line class="data-line" x1="915" y1="362" x2="915" y2="500"/>
							<line class="data-line" x1="925" y1="362" x2="925" y2="500"/>
							<line class="data-line" x1="935" y1="350" x2="935" y2="500"/>
							<line class="data-line" x1="945" y1="355" x2="945" y2="500"/>
							<line class="data-line" x1="955" y1="389" x2="955" y2="500"/>
							<line class="data-line" x1="965" y1="378" x2="965" y2="500"/>
							<line class="data-line" x1="975" y1="399" x2="975" y2="500"/>
							<line class="data-line" x1="985" y1="413" x2="985" y2="500"/>
							<line class="data-line" x1="995" y1="402" x2="995" y2="500"/>
						</svg>
					</div>
				</article>
				*/ ?>

				<article id="project__easy-alarm" class="project section">
					<div class="pin-wrapper">
						<div class="container-big section__fullheight">
							<div class="section__image">
								<picture>
									<source srcset="img/easy-alarm.webp" type="image/webp">
									<source srcset="img/easy-alarm.png" type="image/png"> 
									<img src="img/easy-alarm.png" alt="Art In Mov" class="project__laptop" width="840" height="490" >
								</picture>
							</div>
							<div class="section__content">
								<h3>Easy-Alarm</h3>
								<p>E-shop selling domestic safety systems.</p>
								<p class="btn-container"><a href="https://www.easy-alarm.be/" rel="noopener" class="btn" target="_blank">See the e-shop</a></p>
							</div>
						</div>
						<canvas id="project__easy-alarm__canvas" class="fullsize-canvas" width="300" height="200"></canvas>
					</div>
				</article>

				<article id="project__artinmov" class="project section">
					<div class="pin-wrapper">
						<div class="container-big section__fullheight">
							<div class="section__image">
								<picture>
									<source srcset="img/artinmov.webp" type="image/webp">
									<source srcset="img/artinmov.png" type="image/png"> 
									<img src="img/artinmov.png" alt="Art In Mov" class="project__laptop" width="840" height="490" >
								</picture>
							</div>
							<div class="section__content">
								<h3><a href="https://www.art-in-mov.com/fr/" target="_blank">Art in Mov</a></h2>
								<p>E-shop selling contemporary african art.</p>
								<p class="btn-container"><a href="https://www.art-in-mov.com/fr/" rel="noopener" class="btn" target="_blank">See the e-shop</a></p>
							</div>
						</div>
						<canvas id="project__artinmov__canvas" class="fullsize-canvas" width="300" height="200"></canvas>
						<!-- <img src="img/artinmov_frames.svg" id="project__artinmov__frame" alt="Art In Mov background" width="16" height="150"> -->
					</div>
				</article>

				<article id="project__hexkingdom" class="project section">
					<div class="pin-wrapper">
						<div class="container-big section__fullheight">
							<div class="section__image">
								<picture>
									<source srcset="img/hexkingdom.webp" type="image/webp">
									<source srcset="img/hexkingdom.png" type="image/png"> 
									<img src="img/hexkingdom.png" alt="HexKingdom" class="project__laptop" width="840" height="490" >
								</picture>
							</div>
							<div class="section__content">
								<h3>HexKingdom</h3>
								<p>Round by round game imagined for multiplayer. Created as part of my end-of-study project.</p>
								
								<p class="btn-container">
									<a href="/projects/hexkingdom/" class="btn" target="_blank">See the project</a>
									<a href="/projects/pathfinding/" class="btn-link" target="_blank">Experimentation</a>
								</p>
							</div>

							<picture>
								<source srcset="img/hexkingdom_tile_1.webp" type="image/webp">
								<source srcset="img/hexkingdom_tile_1.png" type="image/png"> 
								<img src="img/hexkingdom_tile_1.png" alt="HexKingdom" id="hexkingdom_tile_1" class="hexkingdom_tile" width="180" height="256" >
							</picture>

							<picture>
								<source srcset="img/hexkingdom_tile_2.webp" type="image/webp">
								<source srcset="img/hexkingdom_tile_2.png" type="image/png"> 
								<img src="img/hexkingdom_tile_2.png" alt="HexKingdom" id="hexkingdom_tile_2" class="hexkingdom_tile" width="224" height="336" >
							</picture>

							<picture>
								<source srcset="img/hexkingdom_tile_3.webp" type="image/webp">
								<source srcset="img/hexkingdom_tile_3.png" type="image/png"> 
								<img src="img/hexkingdom_tile_3.png" alt="HexKingdom" id="hexkingdom_tile_3" class="hexkingdom_tile" width="328" height="385" >
							</picture>

							<picture>
								<source srcset="img/hexkingdom_tile_4.webp" type="image/webp">
								<source srcset="img/hexkingdom_tile_4.png" type="image/png"> 
								<img src="img/hexkingdom_tile_4.png" alt="HexKingdom" id="hexkingdom_tile_4" class="hexkingdom_tile" width="256" height="303" >
							</picture>
						</div>
					</div>
				</article>
			</section>
			<!-- FIN PROJECTS -->

			<section id="contact" class="section">
				<div class="container-small">
					<form action="#contact__form" method="post" id="contact__form">
						<h2>Let's <span class="cursive">get in touch</span></h2>
						<?php
							if(!$messageSent){
						?>
							
							<?php
								if($_POST && $errors['time']){
									echo '<p class="error-text">'.$errors['time'].'</p>';
								}
							?>
							

							<label for="name">Your name</label>
							<input type="hidden" name="timestamp" value="<?php echo time() ?>">
							<input type="text" id="name" required value="<?php echo ($name!='') ? $name: '' ?>"<?php if($_POST && $errors['name']) echo ' class="error"' ?> name="name">
							<?php
								if($_POST && $errors['name']){
									echo '<p class="error-text">'.$errors['name'].'</p>';
								}
							?>

							<label for="email">Your email</label>
							<input type="email" id="email" required value="<?php echo ($email!='') ? $email: '' ?>"<?php if($_POST && $errors['email']) echo ' class="error"' ?> name="email">
							<?php
								if($_POST && $errors['email']){
									echo '<p class="error-text">'.$errors['email'].'</p>';
								}
							?>

							<label for="subject" class="subject">What is it about ?</label>
							<input type="text" id="subject" value='' name="subject" class="subject">

							<label for="message">What would you like to tell me ?</label>
							<textarea id="message"<?php if($_POST && $errors['message']) echo ' class="error"' ?>name="message" required ><?php echo ($_POST['message']!='') ? $_POST['message']: '' ?></textarea>
							<?php
								if($_POST && $errors['message']){
									echo '<p class="error-text">'.$errors['message'].'</p>';
								}
							?>

							<button type="submit" class="btn">Send your message</button>
						<?php
							}
							else {
								echo '<p class="success-text">Thanks for your message, I\'ll soon reply to you.</p>';
							}
						?>
					</form>
				</div>
			</section>
			<!-- FIN CONTACT -->

			<footer id="footer">
				<div class="container-small">
					<p>Created with ❤️ by Martin Denis in Belgium</p>
				</div>
			</footer>
		</div>
	</body>

</html>