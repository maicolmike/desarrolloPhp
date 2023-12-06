<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Inicio </title>
<style type="text/css">

.sp-slideshow {
    position: relative;
	margin: 10px auto;
	width: 80%;
	max-width: 1000px;
	min-width: 260px;
	height: 460px;
	border: 10px solid #fff;
	border: 10px solid rgba(255,255,255,0.9);
    box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

.sp-content {
    background: #7d7f72 url(../images/grid.png) repeat scroll 0 0;
	position: relative;
	width: 100%;
	height: 100%;
	overflow: hidden;
}

.sp-parallax-bg {
    background: url(../images/map.png) repeat-x scroll 0 0;
    background-size: cover;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	overflow: hidden;
}

.sp-slideshow input {
    position: absolute;
	bottom: 15px;
	left: 50%;
	width: 9px;
	height: 9px;
	z-index: 1001;
	cursor: pointer;
    opacity: 0;
}

.sp-slideshow input + label {
    position: absolute;
    bottom: 15px;
	left: 50%;
    width: 6px;
	height: 6px;
	display: block;
	z-index: 1000;
	border: 3px solid #fff;
	border: 3px solid rgba(255,255,255,0.9);
    border-radius: 50%;
    transition: background-color linear 0.1s;
}
.sp-slideshow input:checked + label {
	background-color: #fff;
    background-color: rgba(255,255,255,0.9);
}

.sp-selector-1, .button-label-1 {
    margin-left: -36px;
}

.sp-selector-2, .button-label-2 {
    margin-left: -18px;
}

.sp-selector-4, .button-label-4 {
    margin-left: 18px;
}

.sp-selector-5, .button-label-5 {
    margin-left: 36px;
}
.sp-arrow {
    position: absolute;
	top: 50%;
	width: 28px;
	height: 38px;
	margin-top: -19px;
	display: none;
	opacity: 0.8;
	cursor: pointer;
	z-index: 1000;
	background: transparent url(../images/arrows.png) no-repeat;
    transition: opacity linear 0.3s;
}
.sp-arrow:hover{
	opacity: 1;
}
.sp-arrow:active{
	margin-top: -18px;
}

.sp-selector-1:checked ~ .sp-arrow.sp-a2,
.sp-selector-2:checked ~ .sp-arrow.sp-a3,
.sp-selector-3:checked ~ .sp-arrow.sp-a4,
.sp-selector-4:checked ~ .sp-arrow.sp-a5 {
    right: 15px;
	display: block;
	background-position: top right;
}
.sp-selector-2:checked ~ .sp-arrow.sp-a1,
.sp-selector-3:checked ~ .sp-arrow.sp-a2,
.sp-selector-4:checked ~ .sp-arrow.sp-a3,
.sp-selector-5:checked ~ .sp-arrow.sp-a4 {
    left: 15px;
	display: block;
	background-position: top left;
}
.sp-slideshow input:checked ~ .sp-content {
    transition: background-position linear 0.6s, background-color linear 0.8s;
}

.sp-slideshow input:checked ~ .sp-content .sp-parallax-bg {
    transition: background-position linear 0.7s;
}

input.sp-selector-1:checked ~ .sp-content {
    background-position: 0 0;
	background-color: #727b7f;
}

input.sp-selector-2:checked ~ .sp-content {
    background-position: -100px 0;
	background-color: #7f7276;
}

input.sp-selector-3:checked ~ .sp-content {
    background-position: -200px 0;
	background-color: #737f72;
}

input.sp-selector-4:checked ~ .sp-content {
    background-position: -300px 0;
	background-color: #79727f;
}

input.sp-selector-5:checked ~ .sp-content {
    background-position: -400px 0;
	background-color: #7d7f72;
}

input.sp-selector-1:checked ~ .sp-content .sp-parallax-bg {
    background-position: 0 0;
}

input.sp-selector-2:checked ~ .sp-content .sp-parallax-bg {
    background-position: -200px 0;
}

input.sp-selector-3:checked ~ .sp-content .sp-parallax-bg {
    background-position: -400px 0;
}

input.sp-selector-4:checked ~ .sp-content .sp-parallax-bg {
    background-position: -600px 0;
}

input.sp-selector-5:checked ~ .sp-content .sp-parallax-bg {
    background-position: -800px 0;
}
.sp-slider {
    position: relative;
	left: 0;
    width: 500%;
	height: 100%;
	list-style: none;
    margin: 0;
	padding: 0;
    transition: left ease-in 0.8s; 
}
.sp-slider > li {
	color: #fff;
	width: 20%;
	box-sizing: border-box;
	height: 100%;
	padding: 0 60px;
    float: left;
	text-align: center;
	opacity: 0.4;
    transition: opacity ease-in 0.4s 0.8s; 
}
.sp-slider > li img{
	box-sizing: border-box;
	display: block;
	margin: 0 auto;
	padding: 40px 0 50px 0;
	max-height: 100%;
	max-width: 100%;
}

input.sp-selector-1:checked ~ .sp-content .sp-slider {
    left: 0;
}

input.sp-selector-2:checked ~ .sp-content .sp-slider {
    left: -100%;
}

input.sp-selector-3:checked ~ .sp-content .sp-slider {
    left: -200%;
}

input.sp-selector-4:checked ~ .sp-content .sp-slider {
    left: -300%;
}

input.sp-selector-5:checked ~ .sp-content .sp-slider {
    left: -400%;
}

input.sp-selector-1:checked ~ .sp-content .sp-slider > li:first-child,
input.sp-selector-2:checked ~ .sp-content .sp-slider > li:nth-child(2),
input.sp-selector-3:checked ~ .sp-content .sp-slider > li:nth-child(3),
input.sp-selector-4:checked ~ .sp-content .sp-slider > li:nth-child(4),
input.sp-selector-5:checked ~ .sp-content .sp-slider > li:nth-child(5){
	opacity: 1;
}

</style>

</head>
<body background="img/fondo.jpg">
<div class="sp-slideshow">
			
	<input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
	<label for="button-1" class="button-label-1"></label>
	
	<input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
	<label for="button-2" class="button-label-2"></label>
	
	<input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
	<label for="button-3" class="button-label-3"></label>
	
	<input id="button-4" type="radio" name="radio-set" class="sp-selector-4" />
	<label for="button-4" class="button-label-4"></label>
	
	<input id="button-5" type="radio" name="radio-set" class="sp-selector-5" />
	<label for="button-5" class="button-label-5"></label>
	
	<label for="button-1" class="sp-arrow sp-a1"></label>
	<label for="button-2" class="sp-arrow sp-a2"></label>
	<label for="button-3" class="sp-arrow sp-a3"></label>
	<label for="button-4" class="sp-arrow sp-a4"></label>
	<label for="button-5" class="sp-arrow sp-a5"></label>
	
	<div class="sp-content">
		<div class="sp-parallax-bg"></div>
		<ul class="sp-slider clearfix">
			<li><img src="img/e1.jpg" alt="image01" /></li>
			<li><img src="img/e2.jpg" alt="image02" /></li>
			<li><img src="img/e3.jpg" alt="image03" /></li>
			<li><img src="img/e4.jpg" alt="image04" /></li>
			<li><img src="img/e5.jpg" alt="image05" /></li>
		</ul>
	</div><!-- sp-content -->
	
</div><!-- sp-slideshow -->
</body>
</html>
