<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Welcome To My Word</title>

<!-- Bootstrap core CSS -->
<link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="<?php echo base_url('assets/css/scrolling-nav.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/css/box.css'); ?>">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <div class="container">
	<a class="navbar-brand js-scroll-trigger" href="#">ASSQ</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
	  <ul class="navbar-nav ml-auto">
		<?php foreach($admin as $i){ ?>
		<li class="nav-item">
		  <span class="nav-link js-scroll-trigger" href="#">Hi 
			<?php echo $i -> nama ?>
		  </span>
		</li>
		<?php } ?>
		<li class="nav-item">
		  <a class="nav-link js-scroll-trigger" href="<?php echo base_url('login/logout'); ?>">
			<button type="button" class="btn btn-danger btn-sm">Logout</button>
		  </a>
		</li>
		
	  </ul>
	</div>
  </div>
</nav>
<script type="text/javascript">
  //BH?SS?AN
  TypingText = function(element, interval, cursor, finishedCallback) {
	if((typeof document.getElementById == "undefined") || (typeof
  
  element.innerHTML == "undefined")) {
	  this.running = true;
	  return;
	}
	this.element = element;
	this.finishedCallback = (finishedCallback ? finishedCallback : function() {
  
  return; });
	this.interval = (typeof interval == "undefined" ? 100 : interval);
	this.origText = this.element.innerHTML;
	this.unparsedOrigText = this.origText;
	this.cursor = (cursor ? cursor : "");
	this.currentText = "";
	this.currentChar = 0;
	this.element.typingText = this;
	if(this.element.id == "") this.element.id = "typingtext" +
  
  TypingText.currentIndex++;
	TypingText.all.push(this);
	this.running = false;
	this.inTag = false;
	this.tagBuffer = "";
	this.inHTMLEntity = false;
	this.HTMLEntityBuffer = "";
  }
  TypingText.all = new Array();
  TypingText.currentIndex = 0;
  TypingText.runAll = function() {
	for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
  }
  TypingText.prototype.run = function() {
	if(this.running) return;
	if(typeof this.origText == "undefined") {
	  setTimeout("document.getElementById('" + this.element.id +
  
  "').typingText.run()", this.interval);
	  return;
	}
	if(this.currentText == "") this.element.innerHTML = "";
	if(this.currentChar < this.origText.length) {
	  if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
		this.tagBuffer = "<";
		this.inTag = true;
		this.currentChar++;
		this.run();
		return;
	  } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
		this.tagBuffer += ">";
		this.inTag = false;
		this.currentText += this.tagBuffer;
		this.currentChar++;
		this.run();
		return;
	  } else if(this.inTag) {
		this.tagBuffer += this.origText.charAt(this.currentChar);
		this.currentChar++;
		this.run();
		return;
	  } else if(this.origText.charAt(this.currentChar) == "&" && !
  
  this.inHTMLEntity) {
		this.HTMLEntityBuffer = "&";
		this.inHTMLEntity = true;
		this.currentChar++;
		this.run();
		return;
	  } else if(this.origText.charAt(this.currentChar) == ";" &&
  
  this.inHTMLEntity) {
		this.HTMLEntityBuffer += ";";
		this.inHTMLEntity = false;
		this.currentText += this.HTMLEntityBuffer;
		this.currentChar++;
		this.run();
		return;
	  } else if(this.inHTMLEntity) {
		this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
		this.currentChar++;
		this.run();
		return;
	  } else {
		this.currentText += this.origText.charAt(this.currentChar);
	  }
	  this.element.innerHTML = this.currentText;
	  this.element.innerHTML += (this.currentChar < this.origText.length - 1 ?
  
  (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) :
  
  "");
	  this.currentChar++;
	  setTimeout("document.getElementById('" + this.element.id +
  
  "').typingText.run()", this.interval);
	} else {
	  this.currentText = "";
	  this.currentChar = 0;
		  this.running = false;
		  this.finishedCallback();
	}
  }
</script>
<section class="bg-light">
  <div class="container">
	<div class="row">
	  <!-- <div class="col-lg-12 mx-auto"> -->
		<!-- Code Terminal -->
		<div id="wrapper">
		  <div class="box">
			<h1>Ade Rahman</h1>
			<div id="console">
		  
			  <p id="message">
				<font color="#009900"> Please Wait . . . </font> <br>
				
				<font color="#009900"> Trying connect to Server . . .</font><br>
				<font color="#F00000"><font color="#009900">Ade Rahman</font> Connected ! </font><br>
				<font color="#00FFFF"><font color="#009900">Ade Rahman<font color="#F00000"></font></font> To Alma Shobrina. . .</font><br>
				<font color="#00FFFF"><font color="#009900">Ade Rahman<font color="#F00000"></font></font></font>
				<br></br>
				<!-- TULISAN -->
				<font color="#00FFFF">>>>>> Assalamualaikum Warahmatullahi Wabarakatuh <<<<< </font>
				<font color="#00FFFF">
					<br></br><br>
					Detik demi detik telah berganti menjadi jam<br>
					Jam demi jam pun telah berlalu menjadi hari dan bulan<br>
					Bulan demi bulan pun telah beralih ke tahun berikutnya<br>
					Langkah demi langkah telah dilalui<br>
					Berbagai cerita indah dan menyakitkan telah dinikmati<br>
					Berbagai hal yang membuat tangis dan tawa juga telah dirasakan<br>
					Semuanya pernah terjadi dan terlewati<br><br>

					Hari ini...<br>
					Dimana hari yang mungkin spesial untukmu<br>
					Dan mungkin sebagai hari perenungan juga untukmu<br>
					Karena hari ini...<br>
					Hari dimana mengenang kelahiranmu<br>
					Hari bertambahnya umurmu<br>
					Dan juga hari berkurangnya usiamu di Dunia ini<br><br>

					Pastinya....<br>
					Banyak mimpi dan harapan yang tercipta<br>
					Doa-doa dipanjatkan di hari bahagiamu<br>
					Untuk semua hal yang lebih baik dan lebih indah<br>
					Merubah Sifat...<br>
					Merubah Kepribadian...<br>
					Merubah Pemikiran...<br>
					Merubah Semuanya menjadi lebih baik dan terbaik lagi<br>
					Dan yang terpenting bagaimana kita bisa mengambil hikmah<br>
					dari apa yang telah berlalu<br><br>

					Terus semangat jangan mudah menyerah Karena<br><br>
					kesuksesan tidak didapat sebelum susah payah<br><br>
					Yakinlah setiap kesulitan pasti ada kemudahan<br><br>
					setip kesedihan pasti ada kebahagiaan<br><br>

					Barakallahu fie umrik Sayang<br>
					Turut bahagia atas bertambahnya umurmu<br>
					dan Turut berduka atas berkurangnya usiamu<br>
					Hanya kata kata dan doa yang bisa tertulis dan terucap<br>
					Buat kamu hehehehe...<br>
					Iya, buat kamu yang hari ini berulang tahun :)<br><br>

					Seuntai harapan untukmu<br>
					Semoga dengan bertambahnya umurmu bertambah pula kedewasaan dan pola pikir yang lebih baik<br>
					Bertambah pula kreatifitas, serta baktimu kepada orang orang yang harus kau baktikan<br>
					Semoga tambah cantik, imut, manis, pengertian dll lah pokoknya<br>
					Terutama bertambahnya kesadaranmu akan pentingnya mengerti akan orang lain<br>
					Terus semangat untuk menjadi pribadi yang lebih baik lagi, You are a Strong Women,<br>
					Inget!!! Yang namanya jalan itu gak selamanya mulus dan lurus<br>
					Jika dalam menjalani hidup penuh banyak rintangan maka semoga bisa bahagia setelah melewatinya<br>
					Bersemangatlah dalam menggapai apa apa yang bermanfaat bagimu<br><br>

					===>>>Barakallahu fie umrik Kesayangan abang<br>
					===>>>Maaf ya kalau kata kata nya jelek, maklum aja aku bukan mahasiswa jurusan satra :)<br>
					Jadi maklum kalau kata katanya gak karuan<br>
					===>>>Maaf abang cuman bisa bikin begini aja buat alma maaf kalau ada kata kata yang salah<br>
					Ini kado sementara untuk alma :) untuk real kadonya nanti nyusul ya sayang :)<br>
					===>>>Abang minta tolong sama alma tolong do`akan kebaikan untuk Abang, <br>
					di sela-sela waktu mustajab dan sujudmu agar menjadi pribadi yang lebih baik lagi, <br><br>
					yang bisa membimbing alma menjadi insan yang berbakti dan doakan abang agar dipermudah disegala urusan<br><br>

					
					<font color="#009900">From Ade Rahman</font> <br><br>
					>>>>> Wassalamualaikum Warahmatullahi Wabarakatuh <<<<<
			  
				</font>

				<center><font color="red">  >> Ade Rahman | @_1108 << </font></center><br>
				<script type="text/javascript">
				  new TypingText(document.getElementById("message"), 50, function(i){ var ar
				  
				  = new Array("|", "|", "|", "|"); return " " + ar[i.length % ar.length]; });
				  
				  //Type out examples:
				  TypingText.runAll();
				
				</script>
			  </p>
			  <audio src="<?php echo base_url('assets/mp3/halu.mp3'); ?>" autoplay="autoplay" hidden="hidden" loop></audio>
			</div>
		  </div>
		</div>
	  <!-- </div> -->
	</div>
  </div>
</section>

<!-- Footer -->
<footer class="py-2 bg-dark">
  <div class="container">
	<p class="m-0 text-center text-white">Copyright &copy; Ade Rahman 2019</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Custom JavaScript for this theme -->
<script src="<?php echo base_url('assets/js/scrolling-nav.js'); ?>"></script>

</body>
</html>