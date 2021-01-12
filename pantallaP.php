<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylePantalla.css">
    <style>
        body{
            background: darkseagreen;

        }
        .wrapper{
            width: 600px;
            height: 400px;
            overflow: hidden;
            box-shadow: 0 0 30px #000;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        div{
            position: absolute;
        }
        .line1,
        .line2,
        .line3,
        .line4,
        .line5{
            width: 20%;
            height: 100%;
            background: rgba(0,62,203,0.9);
            bottom: -100%;
            transition: 0.2s;
        }
        .line1{
            left: 0;
            transition-delay: 0;
        }
        .line2{
            left: 0;
            transition-delay: 0;
        }
        .line3{
            left: 0;
            transition-delay: 0;
        }
        .line4{
            left: 0;
            transition-delay: 0;
        }
        .line5{
            left: 0;
            transition-delay: 0;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        <div class="line4"></div>
        <div class="line5"></div>
        <div class="img-text">
            <div>
                <h1>Diseño Web</h1>
                <p>
                Lorem ipsum dolor sit amet consectetur adipisicing 
                elit. Non vel, dolorem dolorum ad similique odit 
                voluptas unde exercitationem magnam facilis 
                voluptatum, minus nulla quo beatae incidunt consectetur debitis cum eum?
                </p>
            </div>
        </div>
    </div>
    
</body>
</html>