<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html> <!-- this page is used as a template for the background for the -->
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="styles/stylesheet.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 60%;
            margin: auto;
        }
        </style>
    </head>
    <body>
        <!--this is for the nav bar-->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Web Applications Final Project</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Instruments
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="tenorNotes.php">Tenor Steel Pan</a></li>
                            <li><a href="6bassPan.php">Six Bass Steel Pan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Songs
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="tenorNotes.php">Three Blind Mice</a></li>
                            <li><a href="6bassPan.php">We Ready</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="content"></div>
    </body>
</html>
    
