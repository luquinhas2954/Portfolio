
<!DOCTYPE html>
<html>
<head>
	<title>Portfolio</title>
</head>
<link rel="stylesheet" type="text/css" href="teste.css">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
	 function scrollTo(num) {
	 	if(num==0){
	 		var x = ".top";
	 	}
	 	if(num==1){
	 		var x = "#medium";
	 	}
	 	if(num==2){
	 		var x = "#medium1";
	 	}
            $('html, body').animate({ scrollTop: $(x).offset().top }, 'slow');
            return false;
        }

</script>

<script type="text/javascript">
window.onload = function() {
  document.getElementById("home").style.color = "yellow";
};
</script>

<script type="text/javascript">

function Scroll(){
var top = document.getElementById('top-bar');
var ypos = window.pageYOffset;

if(ypos > 100) {
	top.style.opacity = "0.8";
	top.style.height = "80px";
	
	var div1 = document.getElementById("top-bar");
	var x = div1.getElementsByTagName("a");
	var num = x.length;

	var y = div1.getElementsByTagName("li");


	for(var i=0; i<num; i++){
		x[i].style.fontSize = "30px";
		y[i].style.marginTop = "-7px";
	}

}
else{
	top.style.opacity = "1";
	top.style.height = "100px";

	var div1 = document.getElementById("top-bar");
	var x = div1.getElementsByTagName("a");
	var y = div1.getElementsByTagName("li");
	var num = x.length;

	for(var i=0; i<num; i++){
		x[i].style.fontSize = "35px";
		y[i].style.marginTop = "0px";
	}
	}
	if(ypos>=0 && ypos<=700){
		x[3].style.color = "yellow";
		x[2].style.color = "white";
		x[1].style.color = "white";
	}if(ypos>=750 && ypos<=1410){
		x[3].style.color = "white";
		x[2].style.color = "yellow";
		x[1].style.color = "white";
	}
	if(ypos>=1410){
		x[3].style.color = "white";
		x[2].style.color = "white";
		x[1].style.color = "yellow";
	}
}

	window.addEventListener("scroll",Scroll);

</script>

<script type="text/javascript">
	if(x>1){
		alert("Ola");
	}
</script>


<body>


<div class="top">
	<header id="top-bar" role= "navigation">
	<ul>

		<li><a href="#" onclick="scrollTo(0);">Contato</a></li>	
		<li><a href="#" onclick="scrollTo(2)" >Porfolio</a></li>
		<li><a href="#" onclick="scrollTo(1);" >Sobre</a></li>
		<li><a href="#" onclick="scrollTo(0);" id="home">Home</a></li>

	</ul>
	</header>
	<div id="top-img">
		<img src="img/Eu.png">
	</div>
	<div id="desc">
		<h1>Lucas Alves</h1>
		<p>Programador, Web Design, Rockeiro e Lindo</p>
	</div>
</div>

<div id="medium" name="medium">
	<div id="n1">
		<h1>Sobre</h1>
		<hr align="center" width="200" size="4" color=#000000>
		<p>Olá, muito Prazer! Meu nome é Lucas, tenho 18 anos, sou estudante de Análise e Desenvolvimento de Sistemas, apaixonado por tecnologias, e se tudo der certo, o seu próximo desenvolvedor ;)</p>
	</div>
	<div id="social">
	  <a href="http://www.linkedin.com.br" target="_blank"><i id="linkedin" class="icon-linkedin-sign"></i></a>
	  <a href="http://www.gmail.com.br" target="_blank"><i id="mail" class="icon-envelope"></i> </a>
	  <a href="http://www.facebook.com.br" target="_blank"><i id="facebook" class="icon-facebook"></i></a>
	  <a href="http://www.github.com" target="_blank"><i id="github" class="icon-github"></i></a>
	 </div>
</div>

<div id="medium1" name = "medium1">
	<div id="n2">
		<h1>Ola</h1>
	</div>
</div>

</body>
</html>