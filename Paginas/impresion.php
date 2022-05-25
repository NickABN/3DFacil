<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Facil</title>
    <link rel="stylesheet" href="/Paginas/Estilos/estiloImpresion.css">
</head>
<body>

<!--Conexion a la BD-->
<?php 
    $server=    "localhost";
    $username=  "root";
    $password=  "";
    $DB=        "3dfacil";

    //Crear coneccion
    $conn= mysqli_connect($server, $username, $password,$DB);
    $sql= "use 3dfacil";
    if(! $conn->query($sql)) E_ERROR
?>

<header>
        <div class="logo">
            <a href="/Paginas/inicio.html"> <img src="/Paginas/imag/atronauta.png" alt="logo"> </a>      
        </div>

        <nav class="menu">
            <a href="/Paginas/inicio.html" class="nav-link"> <h3>Inicio</h3></a>
            <a href="/Paginas/impresion.php" class="nav-link"> <h3>Impresion</h3> </a>
            <a href="/Paginas/prototipado.html" class="nav-link"><h3>Prototipado</h3></a>
            <a href="/Paginas/materiales.html" class="nav-link"><h3>Materiales</h3></a>
            <a href="/Paginas/contacto.html" class="nav-link imag-usuario"><h3>Contacto</h3></a>
        </nav>
    
    </header>

    <div class="pagContenedor impresion3DUsos">

        <section>
            <h1>Para que sirve la impresión 3D</h1>
            <h3>- Fabricación de prototipos</h3>
            <h3>- Piezas ligeras</h3>
            <h3>- Ornamentos</h3>
            <h3>- Productos de funcionalidad mejorada</h3>
            <h3>- Implantes médicos personalizados</h3>
            <h3>- Herramientas, calibradores y accesorios</h3>
            <h3>- Moldes para usar en resina y joyeria</h3>
        </section>

        <section class="imag3D">
            <img src="/Paginas/imag/3D_Icon.png" alt="">
        </section> 
    </div>


    <!--Galeria con PHP-->
    <div class="pagContenedor galeria">

<?php 
    $sql= "SELECT imagen,material,marca,color from catalogo";
    $result= $conn->query($sql);
        if($result->num_rows>0){
             while($row= $result-> fetch_assoc()){
?>
  
        <section class="galeriaContenido">
            <img loading="lazy" src="<?= $row['imagen'] ?>" alt="imagen">
            <p>
                Material: <?= $row['material'] ?> <br>
                Marca: <?= $row['marca'] ?>    <br>
                Color: <?= $row['color'] ?>    <br> 
            </p>
        </section>
<?php
        }
    }
    //Cerrar conexion: 
    mysqli_close($conn);
?>    
    </div>

    <div class="pagContenedor conocenos">
        <section>
            <a href="/Paginas/prototipado.html">
                <h1>¿Tienes un diseño o una idea?</h1>
                <h2>En PROTOTIPADO hay información que te va a interesar.</h2>
            </a>
        </section>
    
        <section>
            <a href="/Paginas/contacto.html">
                <h1>¿Te gustó lo que viste?</h1>
                <h2>Ve al apartado CONTACTO para realizar tu cotización.</h2>
            </a>
        </section>           
    </div>

    <footer>  
        <div class="footerContenedor footerCorreo">
                <img src="/Paginas/imag/Correo_Icon.png" alt="Correo">
                <a href="/Paginas/contacto.html" class="nav-link">ventas3dfacil@gmail.com</a>      
        </div>
        
        <div class="footerAstronauta">
            <a href="/Paginas/inicio.html"> <img src="/Paginas/imag/atronauta.png"> </a>
            
        </div>

        <div class="footerSocial">
            <h2>Siguenos</h2>
            <a href="https://www.instagram.com/3D_byNick/"><img src="/Paginas/imag/SocialIcon/facebook.png" alt=""></a>
            <a href="https://www.instagram.com/3D_byNick/"><img src="/Paginas/imag/SocialIcon/insta.png" alt=""></a>
            <a href="https://www.instagram.com/3D_byNick/"><img src="/Paginas/imag/SocialIcon/twitter.png" alt=""></a>
            <a href="https://www.instagram.com/3D_byNick/"><img src="/Paginas/imag/SocialIcon/yutu.png" alt=""></a>
        </div>
    </footer>
</body>
</html>