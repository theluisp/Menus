<?php 


//Método con rand()
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
} 


$varr=generateRandomString();
$pedidofacil=$varr.".php";
echo $pedidofacil;
$pagina_inicio = file_get_contents('http://localhost/Menus%20free/enviar.php');
$pedido=$pedidofacil;
$archivo = fopen("$pedido", "w") or die("error creando fichero!");


$pagina2 = copy('enviar.php', $pedido);
    
fwrite($archivo, $txt);
fclose($archivo);
      
$cubetazo = $_POST['cubetazo'];
$cubetazo2= $_POST['cubetazo2'];
$frijolada= $_POST['frijolada'];
$frijolada2 = $_POST['frijolada2'];
$Choripan = $_POST['Choripan'];
$Choripan2 = $_POST['Choripan2'];

$cmcc= $_GET['cmcc'];
$cmcc2= $_GET['cmcc2'];

echo $menu;





?>

<html xmlns="https://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>pedido directo:mammamia </title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://pedidodirecto.net/style-pedido.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://pedidodirecto.net/includes/magnific-popup.css">
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

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            /* display: none; <- Crashes Chrome on hover */
            -webkit-appearance: none;
            margin: 0;
            /* <-- Apparently some margin are still there even though it's hidden */
        }

        input[type=number] {
            -moz-appearance: textfield;
            /* Firefox */
        }

    </style>
</head>

<body>
    <div class="cont">


        <!-- encabezado -->
        <div class="logo"><img src="https://pedidodirecto.net/assets/1.jpg" alt="mammamia" /></div>
        <div class="nombre">mammamia</div>
        <!-- fin encabezado -->

        <input name="id" type="hidden" value="18323" />
        <div class="form pedidos-v">
            <h3>DETALLES DEL PEDIDO</h3>

            <!-- solo takeaway -->

            <!-- <h3>Se retira el pedido por </h3>-->


            <!-- fin solo takeaway -->


            <ul>
                <!-- delivery -->

                <!-- fin delivery -->


                <!-- promos -->

                <!-- items -->





                <li>
                    <br /><strong> </strong>
                    <?php 
                        if(empty($cmcc)){
                            echo " ";
                        }
                        else{
                        echo "<small><b>".$cmcc."</b> ".$cmcc2."</small>"; ?>
                    <small>= </small>
                    <?php 
                            $total1=$cmcc * 19.120 ; echo "<small>"."$".$total1."</small><br>";
                        
                        }
                    ?>


                    <?php 
                        if(empty($frijolada)){
                       echo " ";
                            $p="";
                          
                        }
                        else {
                           echo "<small><b>".$frijolada."</b> ".$frijolada2."</small>"; 
                       ?> <small>= </small><?php
                       $total2=$frijolada * 18.900 ; echo "<small>"."$".$total2."</small><br>";
                       $p=$frijolada." ".$frijolada2. " $".$total2.","; 
                        }

                        ?>


                </li>










            </ul>
            <!-- variantes -->
            <!-- fin variantes -->




            <br />
            <form action="<?php echo $pedido; ?>" method="POST">
                <p class="total"><strong>total: $<?php  $total=$total1+$total2+$total3; echo $total;?></strong> </p>
                <input name="c" type="hidden" value="1" />
                <input name="t" type="hidden" value="<?php echo $total ?>" />


                <!-- 29-04 -->
                <input name="pcon" id="pagacon" type="number" placeholder="Paga con:" value="" />

                <!-- 29-04 -->
                <!-- 29-04 -->
                <input name="n" id="nombre" type="textfield" placeholder="Nombre" value="" required />
                <input name="w" id="wasap" type="textfield" placeholder="Número de WhatsApp" value="" required />
                <!-- 29-04 -->


                <textarea name="a" id="aclaracion" cols="" rows="3" placeholder="Aclaraciones del pedido"></textarea>

                <input type="hidden" value="<?php  echo $p
        ?>" name="p">
                <input type="hidden" value="<?php  echo $p1
        ?>" name="p1">

                <!-- <label><strong>Take away (retiro personalmente por ):</strong></label> 
     <input type="checkbox" name="takeaway" id="takeaway" value="Y" onchange="takeawai();" />-->




                <textarea name="d" id="direccion" cols="" rows="3" placeholder="Dirección de entrega" required></textarea>

                <textarea name="d2" id="direccion2" cols="" rows="3" placeholder="Entre calles" required></textarea>

                <textarea name="d3" id="direccion3" cols="" rows="3" placeholder="Aclaraciones de la dirección(ejemplo: segundo timbre...)"></textarea>

                <input name="" type="submit" value="Siguiente" />
            </form>

            <!--
 <p class="dir"><strong>Dirección:</strong><br />  - e/  
  ()
  <br />
 -->


            <!-- Paga con: <strong>$</strong>-->


            <!--
<a href="https://api.whatsapp.com/send?phone=5491161609961&text=" target="_blank" class="boton"> <strong>
            </div>
            <input type="hidden" name="MM_update" value="form1" />
            <input type="hidden" name="h_e" id="h_e" value="" />
        </form>
        <!--  <div class="header"><img src="https://pedidodirecto.net/images/logo.png" /></div> -->
        </div>
</body>


</html>
