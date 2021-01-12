<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: consolas;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
            background: #050801;
        }
        a{
            position: relative;
            display: inline-block;
            padding: 25px 30px;
            margin: 40px 0;
            color: #03e9f4;
            font-size: 24px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: 0.5s;
            letter-spacing: 4px;
            -webkit-box-reflect: below 1px linear-gradient(transparent,#0005);

        }
        a:nth-child(1){
            filter: hue-rotate(290deg);
        }
        a:nth-child(3){
            filter: hue-rotate(110deg);
        }
        
        a:hover{
            background: #03e9f4;
            color: #050801;
            box-shadow: 0 0 5px #03e9f4,
            0 0 25px #03e9f4,
            0 0 50px #03e9f4,
            0 0 200px #03e9f4;

        }
        a span{
            position: absolute;
            display: block;
        }
        a span:nth-child(1){
            top: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg,transparent,#03e9f4);
            animation: animate1 1s linear infinite;
        }
        @keyframes animate1{
            0%{
                left: -100%;
            }
            50%, 100%{
                left: 100%;
            }
        }
        a span:nth-child(2){
            top: -100%;
            right: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(180deg,transparent,#03e9f4);
            animation: animate2 1s linear infinite;
            animation-delay:0.25;
        }
        @keyframes animate2{
            0%{
                top: -100%;
            }
            50%, 100%{
                top: 100%;
            }
        }
        a span:nth-child(3){
            bottom: 0;
            right: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(270deg,transparent,#03e9f4);
            animation: animate3 1s linear infinite;
        }
        @keyframes animate3{
            0%{
                right: -100%;
            }
            50%, 100%{
                right: 100%;
            }
        }
        a span:nth-child(4){
            bottom: -100%;
            left: 0;
            width: 2px;
            height: 100%;
            background: linear-gradient(360deg,transparent,#03e9f4);
            animation: animate4 1s linear infinite;
            animation-delay: 0.75s;
        }
        @keyframes animate4{
            0%{
                bottom: -100%;
            }
            50%, 100%{
                bottom: 100%;
            }
        }

    
    </style>
    <title>Document</title>
</head>
<body>
    <a href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        boton neon
    </a>
    <a href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        boton neon
    </a>
    <a href="#">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        boton neon
    </a>
</body>
</html>