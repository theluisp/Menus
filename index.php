<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://pedidodirecto.net/style-pedido.css" rel="stylesheet" type="text/css">

    <meta property="og:title" content="Mammamia  ">
    <meta property="og:image" content="https://pedidodirecto.net/assets/thumbnails/1_180x180.jpg">
    <meta property="og:description" content="PEDIDOS ONLINE ">
    <meta property="og:url" content="https://pedidodirecto.net/mammamia" />


    <link rel="stylesheet" href="includes/magnific-popup.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="includes/jquery.magnific-popup.js"></script>

    <script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>
    <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
    <script type='text/javascript' src='unitegallery/themes/carousel/ug-theme-carousel.js'></script>


    <script>
        function siguiente() {
            var boton = document.getElementById("siguiente");
            boton.disabled = true;
        }

        function sisigue(v) {
            var boton = document.getElementById("siguiente");
            boton.disabled = false;
            // }

        }

        function valida(f) {
            //alert("si");
            var arr = document.getElementsByClassName("abc");
            var tot = 0;
            var ok = true;
            var msg = "";
            for (var i = 0; i < arr.length; i++) {
                if (parseInt(arr[i].value))
                    tot += parseInt(arr[i].value);
            }

            //alert(tot);

            if (tot == 0) {
                msg += "No se ha selecciónado ningún item del menú\n";
                ok = false;
            }
            if (ok == false) {
                alert(msg);
                return ok;
            }

        }

    </script>

</head>

<body>
    <div class="cont">
        <!--lOGO Y TITULO-->
        <div class="logo"><img src="https://pedidodirecto.net/assets/D" alt="mammamia" /></div>
        <div class="nombre">mammamia </div>


        <form action="pedido.php" method="POST" name="form1" onsubmit="return valida(this)">

            <!--HORARIOS-->
            <div class="horarios">
                <h2><a href="#mapa" class="open-popup-link" style="color:#c2221b;">Mostrar área de entrega</a></h2>
                <script>
                    $('.open-popup-link').magnificPopup({
                        items: {
                            src: '<iframe src="https://www.google.com/maps/d/embed?mid=1UT8skqSKzur-HCthCfsLBCY8OL-FFA8M" width="100%" height="480"></iframe>',
                            type: 'inline'
                        }
                    });

                </script>
            </div>
            <!--cierre div horarios-->
            <!-- menu -->
            <!-- promos -->
            <div class="block">
                <!-- items -->
                <ul>
                    <h3> PROMOCIONES </h3>
                    <li>2 Milanesas napolitanas con fritas
                        <ul>
                            <li>unidad - $580.00 <input name="menu|243|580.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>



                    <li>Sándwich de milanesa con lechuga, tomate y fritas


                        <ul>
                            <li>unidad - $230.00 <input name="menu|244|230.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>1 PAN HUM
                        <ul>
                            <li>unidad - $620.00 <input name="menu|245|720.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>









                    <li>1 Muzzarella + 6 Empanadas (2 de carne, 2 de pollo y 2 de jamón y queso)







                        <ul>
                            <li>unidad - $490.00 <input name="menu|246|490.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> PARRILLA - SOLO LOS FINDES </h3>





                    <li>Sándwich de bife de chorizo con fritas







                        <ul>
                            <li>unidad - $240.00 <input name="sandwich_de_chorizo" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Sándwich de bondiola con fritas







                        <ul>
                            <li>unidad - $220.00 <input name="menu|248|220.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Choripan con fritas







                        <ul>
                            <li>unidad - $110.00 <input name="menu|249|110.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Sándwich de vacio







                        <ul>
                            <li>unidad - $200.00 <input name="menu|250|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Parrillada para 2

                        <em>Con guarnición de fritas o mixta</em>







                        <ul>
                            <li>unidad - $950.00 <input name="menu|251|950.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Parrillada para 4

                        <em>Con guarnición de fritas o mixta</em>







                        <ul>
                            <li>unidad - $1800.00 <input name="menu|252|1800.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> EMPANADAS AL HORNO </h3>





                    <li>Empanada de cebolla y queso







                        <ul>
                            <li>unidad - $45.00 <input name="menu|1152|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Empanada de humita







                        <ul>
                            <li>unidad - $45.00 <input name="menu|1153|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Empanada de carne







                        <ul>
                            <li>unidad - $45.00 <input name="menu|1156|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Empanada de carne picante







                        <ul>
                            <li>unidad - $45.00 <input name="menu|1154|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Empanada de pollo







                        <ul>
                            <li>unidad - $45.00 <input name="menu|1155|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Empanada de jamón y queso







                        <ul>
                            <li>unidad - $45.00 <input name="menu|1157|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Empanada de verdura







                        <ul>
                            <li>unidad - $45.00 <input name="menu|1158|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Empanada de calabaza y queso







                        <ul>
                            <li>unidad - $45.00 <input name="menu|1159|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Empanada de roquefort







                        <ul>
                            <li>unidad - $45.00 <input name="menu|1160|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Empanada caprese







                        <ul>
                            <li>unidad - $45.00 <input name="menu|1161|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Empanada alemana

                        <em>Muzzarella, salchicha y mostaza.

                        </em>







                        <ul>
                            <li>unidad - $45.00 <input name="menu|1162|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> PIZZAS </h3>





                    <li>Pizza mozzarella







                        <ul>
                            <li>unidad - $260.00 <input name="menu|1163|260.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pizza con mozzarella y jamón







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1164|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pizza con jamón y morrones







                        <ul>
                            <li>unidad - $320.00 <input name="menu|1165|320.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pizza napolitana







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1166|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pizza napolitana con jamón







                        <ul>
                            <li>unidad - $340.00 <input name="menu|1167|340.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pizza fugazza







                        <ul>
                            <li>unidad - $260.00 <input name="menu|1168|260.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pizza fugazza con mozzarella







                        <ul>
                            <li>unidad - $290.00 <input name="menu|1169|290.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pizza fugazzeta rellena







                        <ul>
                            <li>unidad - $600.00 <input name="menu|1170|600.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pizza cuatro quesos







                        <ul>
                            <li>unidad - $360.00 <input name="menu|1171|360.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pizza americana

                        <em>Muzzarella, jamón, cebolla y 4 huevos fritos.

                        </em>







                        <ul>
                            <li>unidad - $340.00 <input name="menu|1172|340.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pizza americana con jamón

                        <em>Muzzarella, jamón, cebolla y 4 huevos fritos.

                        </em>







                        <ul>
                            <li>unidad - $360.00 <input name="menu|1173|360.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pizza con pesto







                        <ul>
                            <li>unidad - $320.00 <input name="menu|1174|320.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pizza romana

                        <em>Muzzarella, jamón y huevo rallado.

                        </em>







                        <ul>
                            <li>unidad - $330.00 <input name="menu|1175|330.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Fainá (porción)







                        <ul>
                            <li>unidad - $35.00 <input name="menu|1176|35.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> RAVIOLES DE POLLO </h3>





                    <li>Con salsa blanca







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1177|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa filetto







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1178|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa mixta







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1179|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa rosa







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1180|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa bolognesa







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1181|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con estofado de carne







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1182|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con estofado de pollo







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1183|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> RAVIOLES DE RICOTA Y JAMÓN </h3>





                    <li>Con salsa blanca







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1184|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa filetto







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1185|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa mixta







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1186|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa rosa







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1187|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa bolognesa







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1188|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con estofado de carne







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1189|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con estofado de pollo







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1190|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> TALLARINES </h3>





                    <li>Con salsa blanca







                        <ul>
                            <li>unidad - $200.00 <input name="menu|1191|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa filetto







                        <ul>
                            <li>unidad - $200.00 <input name="menu|1192|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa mixta







                        <ul>
                            <li>unidad - $200.00 <input name="menu|1193|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa rosa







                        <ul>
                            <li>unidad - $200.00 <input name="menu|1194|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa bolognesa







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1195|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con estofado de carne







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1196|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con estofado de pollo







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1197|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> CAPELETTIS DE JAMÓN Y QUESO </h3>





                    <li>Con salsa blanca







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1198|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa filetto







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1199|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa mixta







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1200|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa rosa







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1201|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con salsa bolognesa







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1202|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con estofado de carne







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1203|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con estofado de pollo







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1204|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> ACOMPAÑAMIENTOS </h3>





                    <li>Tortilla de papas







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1205|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Tortilla de verduras







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1206|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Revuelto gramajo







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1207|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Omelette







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Omelette capresse







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1209|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Ensalada Caesar







                        <ul>
                            <li>unidad - $200.00 <input name="menu|1210|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Guarnición de papas fritas







                        <ul>
                            <li>1/2 porción - $70.00 <input name="menu|1212|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                            <li>porción - $130.00 <input name="menu|1212|130.00|porción" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Guarnición de puré de papas







                        <ul>
                            <li>1/2 porción - $70.00 <input name="menu|1213|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                            <li>1/2 porción - $120.00 <input name="menu|1213|120.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Guarnición de puré de calabaza

                        <em>
                        </em>







                        <ul>
                            <li>1/2 porción - $70.00 <input name="menu|1214|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                            <li>porción - $120.00 <input name="menu|1214|120.00|porción" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Guarnición de arroz







                        <ul>
                            <li>1/2 porción - $70.00 <input name="menu|1215|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                            <li>porción - $120.00 <input name="menu|1215|120.00|porción" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> ENSALADA A ELECCIÓN </h3>

                    <p style="color:#c2221b; font-style:italic;">(Elegí sabores en la próxima pantalla) </p>




                    <li>3 Gustos







                        <ul>
                            <li>unidad - $130.00 <input name="menu|1353|130.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> ENSALADA MULTICOLOR </h3>





                    <li>Multicolor

                        <em>Lechuga, tomate, cebolla, repollo y zanahoria</em>







                        <ul>
                            <li>unidad - $150.00 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> ADICIONALES ENSALADAS </h3>





                    <li>Huevo duro







                        <ul>
                            <li>unidad - $30.00 <input name="menu|1374|30.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Pollo







                        <ul>
                            <li>unidad - $50.00 <input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Jamón







                        <ul>
                            <li>unidad - $50.00 <input name="menu|1376|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> MINUTAS </h3>





                    <li>Súper sándwich de milanesa completo

                        <em>Lechuga, tomate, jamón y queso.

                        </em>







                        <ul>
                            <li>unidad - $220.00 <input name="menu|1216|220.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Sandwich de milanesa simple







                        <ul>
                            <li>unidad - $180.00 <input name="menu|1349|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Sandwich de milanesa con lechuga y tomate







                        <ul>
                            <li>unidad - $200.00 <input name="menu|1350|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Milanesa al roquefort







                        <ul>
                            <li>unidad - $360.00 <input name="menu|1234|360.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Huevo duro







                        <ul>
                            <li>unidad - $30.00 <input name="menu|1351|30.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Huevo frito







                        <ul>
                            <li>unidad - $30.00 <input name="menu|1352|30.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Suprema Mamma Mia con papas fritas

                        <em>Salsa fileto, muzzarella, rodajas de tomate, oregano, 2 huevos fritos y papas fritas.

                        </em>







                        <ul>
                            <li>unidad - $350.00 <input name="menu|1244|350.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Super porcion de tarta de verduras







                        <ul>
                            <li>unidad - $100.00 <input name="menu|1249|100.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> MILANESA DE TERNERA </h3>





                    <li>Sola







                        <ul>
                            <li>unidad - $180.00 <input name="menu|1217|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con ensalada mixta







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1218|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con papas fritas







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1219|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de calabaza







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de papa







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1221|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> MILANESA NAPOLITANA </h3>





                    <li>con ensalada mixta







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1222|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>con papas fritas







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1223|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de calabaza







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1224|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de papa







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1225|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> MILANESA A LA SUIZA </h3>





                    <li>Con ensalada mixta







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1226|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con papas fritas







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1227|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de calabaza







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1228|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de papa







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1229|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> MILANESA A LA FUGAZZA </h3>





                    <li>Con ensalada mixta







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1230|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con papas fritas







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1231|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de calabaza







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1232|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de papa







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1233|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> SUPREMA DE POLLO </h3>





                    <li>Sola







                        <ul>
                            <li>unidad - $180.00 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con ensalada mixta







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1235|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con papas fritas







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1236|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de calabaza







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1237|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de papa







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1238|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> SUPREMA DE POLLO NAPOLITANA </h3>





                    <li>Con ensalada mixta







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1239|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con papas fritas







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1240|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de calabaza







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1241|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de papa







                        <ul>
                            <li>unidad - $300.00 <input name="menu|1242|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> 1/4 DE POLLO </h3>





                    <li>Con ensalada mixta







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1245|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con papas fritas







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1246|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de calabaza







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1247|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Con puré de papa







                        <ul>
                            <li>unidad - $250.00 <input name="menu|1248|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>










                    <h3> BEBIDAS </h3>





                    <li>Coca Cola 600 ml.







                        <ul>
                            <li>unidad - $80.00 <input name="menu|1250|80.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Sprite 600 ml.







                        <ul>
                            <li>unidad - $80.00 <input name="menu|1251|80.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Fanta 600 ml.







                        <ul>
                            <li>unidad - $80.00 <input name="menu|1252|80.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Coca Cola 1.5 Lts.







                        <ul>
                            <li>unidad - $140.00 <input name="menu|1253|140.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Sprite 1.5 lts.







                        <ul>
                            <li>unidad - $140.00 <input name="menu|1254|140.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>









                    <li>Fanta 1.5 lts.







                        <ul>
                            <li>unidad - $140.00 <input name="menu|1255|140.00|unidad" type="number" min="0" size="5" class="abc" /> </li>

                        </ul>
                    </li>

                </ul>


                <!-- fin items -->

                <!--
  <ul>
  
      </ul> 
-->

                <!-- fin menu -->




                <div class="form-datos">
                    <input name="id_establecimiento" id="id_establecimiento" type="hidden" value="17" />

                    <input name="aclaraciones" id="aclaraciones" type="hidden">
                    <input name="fecha" id="fecha" type="hidden" value="2020-05-23" />
                    <input name="hora" id="hora" type="hidden" value="14:49:43" />
                    <input name="id_establecimiento" id="id_establecimiento" type="hidden" value="17" />
                    <input name="wasap" id="wasap" type="hidden" value="1234" />
                    <input name="direccion" id="direccion" value="Dirección" type="hidden">
                    <input name="direccion2" id="direccion2" value="Entre calles" type="hidden">
                    <input name="direccion3" id="direccion3" type="hidden">
                    <input type="hidden" name="pagacon" id="pagacon">




                    <!-- 29-04-->

                    <!-- 29-04-->



                    <p>&nbsp;</p>
                    <input name="" type="submit" value="siguiente" id="siguiente" />
                    <input type="hidden" name="MM_insert" value="form1" />
                </div>
            </div>
        </form>


    </div>
    <img temp="insertedbySB" />
</body>

</html>


<script>
    function takeawai() {
        if (document.getElementById('takeaway').checked == true) {
            //alert('tildado');
            document.getElementById('deliver').innerHTML = 'Take away (retiro personalmente por mammamia)';
            only();
        } else {
            //alert('sin tildar');
            document.getElementById('deliver').innerHTML = '<strong>Delivery con cargo</strong>  $0.00.-';

        }

    }

</script>
<script type="text/javascript">
    jQuery(document).ready(function() {

        jQuery("#gallery").unitegallery({
            theme_enable_navigation: false,
            tile_enable_action: false,
            tile_border_color: "#94B1FF",
            tile_border_width: 0,
            tile_width: 768,
            tile_height: 400
        });

    });

</script>
