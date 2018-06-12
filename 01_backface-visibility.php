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
        <link rel="stylesheet" href="css/01_backface-visiblity.css" />
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
                <table class="m-2">
                    <tr>
                        <th><code>backface-visibility:visible</code></th>
                        <th><code>backface-visibility:hidden</code></th>
                    </tr>
                    <tr>
                        <td>
                            <div class="cont">
                                <div class="cube showbf">
                                    <div class="face front">1</div>
                                    <div class="face back">2</div>
                                    <div class="face right">3</div>
                                    <div class="face left">4</div>
                                    <div class="face top">5</div>
                                    <div class="face bottom">6</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="cont">
                                <div class="cube hidebf">
                                    <div class="face front">front</div>
                                    <div class="face back">back</div>
                                    <div class="face right">right</div>
                                    <div class="face left">left</div>
                                    <div class="face top">top</div>
                                    <div class="face bottom">bottom</div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!---JS---->
        <script src="js/Transform.js"></script>
    </body>
</html>
