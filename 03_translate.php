<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8" />
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="no-cache">
        <meta http-equiv="Expires" content="-1">
        <meta http-equiv="Cache-Control" content="no-cache"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <!--[if lte IE 9]>
        <link href='/PATH/TO/FOLDER/css/animations-ie-fix.css' rel='stylesheet'>
        <![endif]-->
        <title>Transforms</title>
        <!----CSS----->
        <link rel="stylesheet" href="css/03_translate.css" />
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/practise.css" />
        <link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css" />
        <!-----JS------->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="parent">
                    <div class="all one">translate(50px)</div>
                </div>
                <div class="parent">
                    <div class="all oneNegative">translate(-50px)</div>
                </div>
                <div class="parent">
                    <div class="all two">translate(50px,20px)</div>
                </div>
                <div class="parent">
                    <div class="all towNegative1">translate(-50px,20px)</div>
                </div>
                <div class="parent">
                    <div class="all towNegative2">translate(50px,-20px)</div>
                </div>
                <div class="parent">
                    <div class="all x">translateX(50px)</div>
                </div>
                <div class="parent">
                    <div class="all xNegative">translateX(-50px)</div>
                </div>
                <div class="parent">
                    <div class="all y">translateY(50px)</div>
                </div>
                <div class="parent">
                    <div class="all yNegative">translateY(-50px)</div>
                </div>
            </div>
        </div>
        <!---JS---->
        <script src="js/Transform.js"></script>
    </body>
</html>
