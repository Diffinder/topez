
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!-- push menu -->
  <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Blueprint: Slide and Push Menus" />
    <meta name="keywords" content="sliding menu, pushing menu, navigation, responsive, menu, css, jquery" />
    <meta name="author" content="Codrops" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom1.js"></script>
  <!-- push menu -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="icon" type="image/png" href="icons/FB.png" />
<link href="css/tipsy_title.css" rel="stylesheet" type="text/css">
<link href="css/facybox.css" rel="stylesheet" type="text/css">
<link href="css/wtfdiary.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" media="all" href="css/chat.css" />
<link type="text/css" rel="stylesheet" media="all" href="css/screen.css" />
 <link href="css/jquery.booklet.latest.css" type="text/css" rel="stylesheet" />
  <link href="css/sticker.css" type="text/css" rel="stylesheet" />
<!--[if lte IE 7]>
<link type="text/css" rel="stylesheet" media="all" href="css/screen_ie.css" />
<![endif]-->
<link type="text/css" rel="stylesheet" media="all" href="css/nano_scroll.css" />
<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }

        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/book.css" />
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.nicescroll.js"></script>
        <!--<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
	<script src="http://code.jquery.com/jquery-migrate-1.0.0.js"></script>
<link href='http://fonts.googleapis.com/css?family=Reenie+Beanie' rel='stylesheet' type='text/css'>
		<style>
		body{
	background: url(img/bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
		overflow-y:scroll;
overflow-x:hidden;
		}
		.navbar {

   padding: 0;
   border: 1px solid rgba(0,0,0,0.5);
  
   background: rgba(0,0,0,0.61);
   box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.3);
   -o-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.3);
   -webkit-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.3);
   -moz-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.3);
		}
		
		.board{
		
		}
		
.navbar-inverse .navbar-nav>li>a{
color:#FFF;
}
.navbar-inverse .navbar-nav>.active>a{
background-color:rgba(54, 54, 54, 0.39);
}
.logo-t{
position:absolute;
top:0px;

}

.nav{
margin-left:100px;

}
.board{
background-image:url('img/board.png');
height:525px;
background-repeat:no-repeat;
}
.inner{
margin-top:10px;
}
.rack{
margin-top:30px;
right:0px;
margin-left: 100px;
}
.rack .shelf{
background-image:url('img/rack.png');
background-repeat:no-repeat;
width:490px;
height:140px;
}
.rack1{
  position: absolute;
  margin-left: 700px;
margin-top:-480px;

}
.rack1 .shelf{
background-image:url('img/rack.png');
background-repeat:no-repeat;
width:490px;
height:140px;
}
.hanger{
  background-image: url('img/hanger.png');
  width: 100px;
  height: 100px;
  background-size: 100% 100%;
  font-size:10px; 
  margin-left: 20px;
  margin-top: -55px;
  text-decoration: none!important;
}
.hangername{
 position:absolute;
  margin-left: 27px;
  margin-top: 57px;
 
  text-shadow: -1px -1px 1px #fff, 1px 1px 1px #000;
   color: #0A0A0A;
   opacity: 1;
  font: 20px 'Museo700';

    
}
.cke_editable .cke_editable_themed .cke_contents_ltr{
background: url("http://b2b.cbsimg.net/blogs/03052013figure-c.gif") !important;
}
.glyphicon{
margin-right: 6px;
}

hr{
margin-top: 5px;
margin-bottom: 5px;
}
/* Let's get this party started */
::-webkit-scrollbar {
    width: 6px;
}
 
/* Track */
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
    -webkit-border-radius: 10px;
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: rgba(255,255,255,0.8); 
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
}
::-webkit-scrollbar-thumb:window-inactive {
	background: rgba(255,255,255,0.4); 
}
		</style>
</head>
<body>
   <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->