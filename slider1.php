<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box:
        }
        body{
            display: flex;
            min-height: 100vh;
            background: #f5f6ce;
        }
        .slider{
            width: 700px;
            height: 360px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            overflow: hidden;

        }
        .slider ul{
            width: 400%;
            height: 300px;
            display: flex;
            list-style: none;
            order: 1;

        }
        input[type="radio"]{
            display: none;
        }
        input[type="radio"] + label{
            display: block;
            width: 25%;
            height: 60%;
            cursor: pointer;
            order: 2;
        }
        #sbutton1 + label{
            background: url(img/font2.jpg);
            background-size: 100% 100%;
        }
        #sbutton2 + label{
            background: url(img/fon3.jpg);
            background-size: 100% 100%;
        }
        #sbutton3 + label{
            background: url(img/fon4.jpg);
            background-size: 100% 100%;
        }
        #sbutton4 + label{
            background: url(img/fon5.jpg);
            background-size: 100% 100%;
        }
    </style>
</head>
<body>
<?php
//.slider>input[type="radio"]#sbutton$*4
/*<div class="slider">
        <input type="radio" id="sbutton1">
        <input type="radio" id="sbutton2">
        <input type="radio" id="sbutton3">
        <input type="radio" id="sbutton4">
    </div>
    .slider>input[type="radio"]#sbutton$*4+ul>li*4>img
    
    <div class="slider">
    <input type="radio" id="sbutton1">
    <input type="radio" id="sbutton2">
    <input type="radio" id="sbutton3">
    <input type="radio" id="sbutton4">
    <ul>
        <li><img src="" alt=""></li>
        <li><img src="" alt=""></li>
        <li><img src="" alt=""></li>
        <li><img src="" alt=""></li>
    </ul>
    */

?>
<div class="slider">
    <input type="radio" id="sbutton1" name="sradio">
    <label for="sbutton1"></label>
    <input type="radio" id="sbutton2" name="sradio">
    <label for="sbutton2"></label>
    <input type="radio" id="sbutton3" name="sradio">
    <label for="sbutton3"></label>
    <input type="radio" id="sbutton4" name="sradio">
    <label for="sbutton4"></label>
    <ul>
        <li><img src="img/font2.jpg" alt=""></li>
        <li><img src="img/fon3.jpg" alt=""></li>
        <li><img src="img/fon4.jpg" alt=""></li>
        <li><img src="img/fon5.jpg" alt=""></li>
    </ul>
</div>
    
</body>
</html>