<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="icomoon/fonts/style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            text-decoration: none;
            font-family: "moserrat";
        }
        body{
            background: #333;
        }
        .middle{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .card{
            cursor: pointer;
            width: 340px;
            height: 480px;

            
        }
        .front, .back{
            width: 100%;
            height: 100%;
            overflow:hidden;
            backface-visibility: hidden;
            position: absolute;
            transition: transform .6s linear;
        }
        .front img{
            height: 100%;
        }
        .front{
            
            transform: perspective(600px) rotateY(0deg);
        }
        .back{
            background: #f1f1f1;
            transform: perspective(600px) rotateY(180deg);
        }
        .back-content{
            color: #2c3e50;
            text-align: center;
            width: center;
        }
        .sm{
            margin: 20px 0;
        }
        .sm a{
            display: inline-flex;
            width: 40px;
            height: 40px; 
            justify-content: center;
            align-items: center;
            color: #2c3e50;
            font-size: 18px;
            transition: 0.4s;
            border-radius: 50%;
        }
        .sm a:hover{
            background: #2c3e50;
            color: white;
        }
        .card:hover > .front{
            transform: perspective(600px) rotateY(-180deg);
        }
        .card:hover > .back{
            transform: perspective(600px) rotateY(0deg);
        }

    
    </style>
    <title>Document</title>
</head>
<body>
    <div class="card middle">
        <div class="front">
            <img src="img/1.jpg" alt="">
        </div>
   
        <div class="back">
            <div class="back-content middle">
            <h2>Interaction Sistems</h2>
            <span>Canal</span>
            <div class="sm">
                <a href=""><i class="icon-facebook2"></i></a>
                <a href=""><i class="icon-youtube"></i></a>
                <a href=""><i class="icon-twitter"></i></a>
                <a href=""><i class="icon-instagram"></i></a>
            </div>

            </div>
        </div>
    </div>
    
</body>
</html>