<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sliter automatico</title>
<style>
.slider {
    width: 95%;
    margin: auto;
    overflow: hidden;

    animation: cambio 
}
.slider ul{
    display: flex;
    padding: 0;
    width: 400%;

    animation: cambio 20s infinite;
}
.slider li{
    width: 100%;
    list-style: none;
}
.sileder img{
    width: 100%;
}

@keyframes cambio{
    0% {margin-left: 0;}
    20% {margin-left: 0;}

    25% {margin-left: -100;}
    45% {margin-left: -100;}
}
</style>

</head>
<body>
    <div class="slider">
    <ul>
        <li><img src="../img/1.jpg" alt=""></li>
        <li><img src="../img/2.jpg" alt=""></li>
        <li><img src="../img/3.jpg" alt=""></li>
        <li><img src="../img/4.jpg" alt=""></li>
        <li><img src="../img/5.jpg" alt=""></li>
    </ul>

    
    </div>
</body>
</html>