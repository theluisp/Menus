<?php
  //Punto inserción

$n= $_POST['n'];
$w= $_POST['w'];
$a= $_POST['a'];
$d= $_POST['d'];
$d2= $_POST['d2'];
$d3= $_POST['d3'];
$t= $_POST['t'];
$pcon= $_POST['pcon'];
$p=$_POST['p'];
$p1=$_POST['p1'];

echo $url;

?>




<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>pedidof directo:La Verdu Online </title>




    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://pedidodirecto.net/style-pedido.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="includes/magnific-popup.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://pedidodirecto.net/includes/jquery.magnific-popup.js"></script>
    <style>
        .white-popup {
            position: relative;
            background: #FFF;
            padding: 20px;
            width: auto;
            max-width: 500px;
            margin: 20px auto;
        }

    </style>

</head>

<body>
    <div class="cont">


        <!-- encabezado -->
        <div class="logo"><img src="https://pedidodirecto.net/assets/Cabecera MP2-01.jpg" alt="La Verdu Online" /></div>
        <div class="nombre">La Verdu Online</div>
        <!-- fin encabezado -->


        <div class="form pedidos-v">
            <h3>Detalles del pedido:</h3>
            <ul>

                <!-- promos -->
                <br /><strong>VARIOS</strong><br>
                <ul>
                    <li><?php echo $p; echo "</li><li>"; echo $p1;?></li>
                </ul>
            </ul>
            <!-- variantes -->

            <p> <strong>Aclaraciones sobre el pedido:</strong><br />- <?php echo $a;?></p>



            <!-- fin variantes -->
            <br />
            <p class="total">Total: $<strong><?php echo $t;?></strong></p>

            <p class="total">paga con $<?php echo $pcon;?></p>

            <p class="dir">
                <!-- 29-04-->
                <strong>Nombre:</strong>
                <br /><?php echo $n;?><br>
                <strong>Número de WhatsApp:</strong>
                <br /><?php echo $w;?><br><!-- 29-04-->
                <strong>Dirección:<?php echo $d;?></strong>

                <br /> <?php echo $d2;?>/ <?php echo $d3;?>
            </p>

            <?php
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];  
$href=urlencode($host.$url);
           

            
            
      echo "<a href='https://api.whatsapp.com/send?phone=5491131839106&text=$href'
      
      target='$href' class='boton'> <strong>Enviar pedido</strong> </a>"; ?>
        </div>

        <!-- <div class="header"><img src="https://pedidodirecto.net/images/logo.png" /></div> -->
    </div>

</body>

</html>
