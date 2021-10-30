<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://pedidodirecto.net/style-pedido.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="includes/magnific-popup.css">
    <title>Encargo fácil</title>
</head>

<body>
    <div class="cont">
        <!--lOGO Y TITULO-->
        <div class="logo"><img src="img/tienda.png" alt="mammamia" /></div>
        <div class="nombre">Encargo Fácil </div>
        <form action="pedido.php" method="post" name="form1" onsubmit="return valida(this)">

            <!--cierre div horarios-->
            <!-- menu -->
            <!-- promos -->
            <div class="block">
                <!-- items -->
                <ul>
                    <h3> PROMOCIONES </h3>
                    <li>
                        Calentado Mis+ Coca Cola
                        <ul>
                            <li>unidad - $19.120 <input name="cmcc" type="number" min="0" size="5" class="abc" /> </li>
                            <input name="cmcc2" value="Calentado Mis + Coca Cola" type="hidden" class="abc" />
                        </ul>
                    </li>
                    <li>
                        Alitas x 20
                        <ul>
                            <li>unidad - $25.900 <input name="menu|244|230.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Dos hamburguesas La Nuestra con tocineta, dos porciones de papas a la francesa y dos cervezas Heineken
                        <ul>
                            <li>unidad - $31.900 <input name="menu|245|720.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3> Combo Familiar
                    </h3>

                    <li>
                        Cubetazo 4 andinas + 10 muslitos + 10 coditos porción de papa casco + bastones de zanahoria y apio + chinchullines – 1 porcion de chicharrones apanados
                        <ul>
                            <li>unidad - $54.900 <input name="cubetazo" type="number" min="0" size="5" class="abc" /></li>
                            <input name="cubetazo2" type="hidden" value="Cubetazo 4 andinas + 10 muslitos + 10 coditos porción de papa casco + bastones de zanahoria y apio + chinchullines – 1 porcion de chicharrones apanados" class="abc" />

                        </ul>
                    </li>

                    <li>
                        Frijolada + Coca Cola
                        <ul>
                            <li>unidad - $18.900<input name=" frijolada" type="number" min="0" size="5" class="abc" /> </li>
                            <input name=" frijolada2" type="hidden" value="Frijolada + Coca Cola" class="abc" />
                        </ul>
                    </li>



                    <li>
                        Cortes gruesos
                        T-Bone
                        Con papa en casco y guacamole
                        <ul>
                            <li>unidad - $27.230 <input name="Choripan" type="number" min="0" size="5" class="abc" /> </li>
                            <input name="Choripan2" type="hidden" value="Choripan con fritas " class="abc" />
                        </ul>
                    </li>
                    <li>
                        Solomito
                        Medallones de lomo, tocineta en trozos, queso cheddar y papa en casco
                        <ul>
                            <li>unidad - $27.230 <input name="menu|250|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Bife Paletero
                        Con papa rizada y ensalada de temporada
                        <ul>
                            <li>unidad - $27.230<input name="menu|251|950.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Bife De Vacio
                        Con papas saladas y guacamole
                        <ul>
                            <li>unidad - $31.430 <input name="menu|252|1800.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>CARNES FINAS </h3>
                    <li>
                        Punta De Anca
                        Con arepa, chorizo, papas criollas y ensalada temporada
                        <ul>
                            <li>unidad - $23.730 <input name="menu|1152|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Churrasco
                        Con arepa, papa salada y ensalada de temporada
                        <ul>
                            <li>unidad - $22.330<input name="menu|1153|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Carne Gratinada
                        Con papa salada, arepa y ensalada de temporada
                        <ul>
                            <li>unidad - $17.430 <input name="menu|1156|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Baby Beef
                        Con papa salada, arepa y ensalada de temporada
                        <ul>
                            <li>unidad - $24.430<input name="menu|1154|45.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3> PIZZAS COMPLETAS </h3>
                    <CENTER> <img src="img/pizza%201.jpeg" style="max-width:37.5%" ; alt="" align="center" />
                        <img src="img/pizza%203.jpeg" style="max-width:40%" ; alt="" align="center" />
                    </CENTER>
                    <li>
                        Delgada Especial de Carnes
                        <ul>
                            <li>unidad - $37.900<input name="menu|1163|260.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Delgada Ciruela Tocineta
                        <ul>
                            <li>unidad - $35.900 <input name="menu|1164|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Delgada Maiz Tocineta
                        <ul>
                            <li>unidad - $35.900
                                <input name="menu|1165|320.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        Delgada Parrillera
                        <ul>
                            <li>unidad - $37.900
                                <input name="menu|1166|300.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        Delgada Tocineta BBQ
                        <ul>
                            <li>unidad - $35.900
                                <input name="menu|1167|340.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        Delgada Pollo y champiñones BB
                        <ul>
                            <li>unidad - $35.900<input name="menu|1168|260.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Delgada Pepperoni Americano
                        <ul>
                            <li>unidad - $30.900
                                <input name="menu|1169|290.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        Romana Peperoni Americano
                        <ul>
                            <li>unidad - $34.900 <input name="menu|1170|600.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Romana Tropical
                        <ul>
                            <li>unidad - $39.900 <input name="menu|1171|360.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Romana Jamon y Champiñones
                        <ul>
                            <li>unidad - $34.900
                                <input name="menu|1172|340.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        Romana Colombiana
                        <ul>
                            <li>unidad - $42.900
                                <input name="menu|1173|360.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        Romana Napolitana
                        <ul>
                            <li>unidad - $34.900
                                <input name="menu|1174|320.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <h3> LASAGNA </h3>
                    <li>
                        Bolognesa o Blanca
                        <ul>
                            <li>unidad - $19.900 <input name="menu|1177|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Pollo y Champiñones Bolognesa
                        <ul>
                            <li>unidad - $21.900
                                <input name="menu|1178|250.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        Pollo Jamón y Champiñon
                        <ul>
                            <li>unidad - $23.900
                                <input name="menu|1179|250.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        Pollo y Champiñones Bechamel
                        <ul>
                            <li>unidad - $21.900
                                <input name="menu|1180|250.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <h3> PASTAS </h3>
                    <li>
                        Spaguetti Bolognesa Pollo
                        <ul>
                            <li>unidad - $19.900
                                <input name="menu|1184|250.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        Spaguetti Napolitana Carne
                        <ul>
                            <li>unidad - $19.900
                                <input name="menu|1185|250.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        Spaguetti Carbonara
                        <ul>
                            <li>unidad - $19.900 <input name="menu|1186|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3> BEBIDAS </h3>
                    <li>
                        Botella 7UP (2.5l)
                        <ul>
                            <li>unidad - $6.900
                                <input name="menu|1191|200.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        Botella Pepsi (2.5l)
                        <ul>
                            <li>unidad - $6.900 <input name="menu|1192|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Botella Manzana (2.5l)
                        <ul>
                            <li>unidad - $6.900<input name="menu|1193|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Botella Colombiana (2.5l)
                        <ul>
                            <li>unidad - $6.900 <input name="menu|1194|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3> POLLO </h3>
                    <li>
                        Pechuga San Fermín
                        Con jamón, queso y papas a la francesa
                        <ul>
                            <li>unidad - $21.520<input name="menu|1198|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Pechuga Ranchera
                        Gratinada con chorizo y tocineta con papa criolla y ensalada de temporada
                        <ul>
                            <li>unidad - $20.230<input name="menu|1199|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Pechuga Parrilla
                        Pechuga a la parrilla con papas fritas, ensalada
                        <ul>
                            <li>unidad - $15.330 <input name="menu|1200|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Pechuga Con Champiñones
                        Con arroz de la finca y papa en casco
                        <ul>
                            <li>unidad - $19,530 <input name="menu|1201|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3> CERDO </h3>
                    <li>
                        Lomo Napolitano
                        <ul>
                            <li>unidad - $18.130 <input name="menu|1205|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Costillas BBQ
                        Con arepa, papas criollas y guacamole
                        <ul>
                            <li>unidad - $20.930<input name="menu|1206|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Chuleta Valluna
                        con arroz de la finca y papas a la francesa
                        <ul>
                            <li>unidad - $18.130 <input name="menu|1207|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>PESCADO</H3>
                    <li>
                        Trucha A La Parrilla
                        con patacón con hogao, patacón con guacamole, arroz de la finca
                        <ul>
                            <li>unidad - $19.530 <input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Róbalo Apanado
                        Acompañado con papas a la francesa y fruta tropical
                        <ul>
                            <li>unidad - $18.130 <input name="menu|1209|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Mojarra Frita
                        con patacón con hogao, patacón con guacamole y arroz blanco
                        <ul>
                            <li>unidad - $18.830<input name="menu|1210|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Guarnición de papas fritas
                        <ul>
                            <li>unidad - $70.00 <input name="menu|1212|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Guarnición de puré de papas
                        <ul>
                            <li>unidad - $70.00 <input name="menu|1213|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Guarnición de puré de calabaza
                        <em>
                        </em>
                        <ul>
                            <li>unidad - $70.00 <input name="menu|1214|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>HAMBURGUESAS</H3>
                    <li>
                        Hamburguesa Super Mis Carnes
                        <EM> 1/4 de libra de carne, 1/4 de libra de pollo, queso mozzarella, tocineta, pepinillos con papa francesa y bebida 16oz.</EM>
                        <ul>
                            <li>unidad- $17.430 <input name="menu|1215|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hamburguesa Ranchera
                        <EM> 1/4 de libra de carne, queso mozzarella y chorizo con papas a la francesa y bebida 16oz.</EM>
                        <ul>
                            <li>unidad- $19.900 <input name="menu|1215|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hamburguesa Queso Parrilla
                        <EM> Tomate súper fresco de la casa, 50gr de queso a la parrilla, 150gr de carne de res, lechuga del huerto, papas a la francesa y bebida 16 onz.</EM>
                        <ul>
                            <li>unidad- $19.900 <input name="menu|1215|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hamburguesa Pollo Parrilla
                        <EM> 125 gr de pollo- queso cheddar- tomate – lechuga; con papas y gaseosa 16 onz
                            .</EM>
                        <ul>
                            <li>unidad- $19.900 <input name="menu|1215|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hamburguesa La Nuestra
                        <EM>1/4 de libra de carne, queso cheddar y tocineta con papas a la francesa y bebida 16oz.
                        </EM>
                        <ul>
                            <li>unidad- $19.900 <input name="menu|1215|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hamburguesa Hawaiana
                        <EM>Rodaja de piña a la parrilla, lechuga y queso mozarella con papas a la francesa y bebida 16oz.</EM>
                        <ul>
                            <li>unidad- $19.900 <input name="menu|1215|70.00|1/2 porción" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>PATACONES</H3>
                    <li>
                        Patacón Paisa
                        <EM> Patacón con fríjol, arroz, guacamole y hogao</EM>
                        <ul>
                            <li>unidad - $20.230 <input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Patacón Con Carne
                        <EM> Con carne desmechada, guacamole y hogao</EM>
                        <ul>
                            <li>unidad - $18.130<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Patacón Alitas
                        <EM> 5 coditos, 5 mustilos, patacón y salsas</EM>
                        <ul>
                            <li>unidad - $19.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3 style="color:red;">COMIDA RÁPIDA</H3>
                    <CENTER> <img src="img/comida%20rapida%201.jpeg" style="max-width:37.5%" ; alt="" align="center" />
                        <img src="img/comida%20rapida%205.jpeg" style="max-width:33.5%" ; alt="" align="center" />
                    </CENTER>
                    <h3>HAMBURGUESA</h3>
                    <li>
                        Hamburguesa Crosby Pionera
                        <EM> Pan tradicional o finas hierbas, pollo, queso, papa cabello de ángel, lechuga, tomate, cebolla y salsas: cocheros, mayomostaza y tomate.</EM>
                        <ul>
                            <li>unidad - $9.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hamburguesa Justiciera
                        <EM> Pan tradicional o finas hierbas, carne 100gr, queso, papa cabello de ángel, lechuga, tomate, cebolla, tocineta, jamón y salsas: cocheros, matomostaza y tomate</EM>
                        <ul>
                            <li>unidad - $14.500<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Crosby Valiente
                        <EM> Pan tradicional o finas hierbas, pollo, queso, papa cabello de ángel, lechuga, tomate, cebolla, tocineta o jamón y salsas: cocheros, mayomostaza y tomate</EM>
                        <ul>
                            <li>unidad - $12.300<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Crosby Justiciera
                        <EM>Pan tradicional o finas hierbas, pollo, queso, papa cabello de ángel, lechuga, tomate, cebolla, tocineta, jamón y salsas: cocheros, mayomostaza y tomate.</EM>
                        <ul>
                            <li>unidad - $14.500<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hamburguesa Valiente
                        <EM> Pan tradicional o finas hierbas, carne 100gr, queso, papa cabello de ángel, lechuga, tomate, cebolla, tocineta o jamón y salsas: cocheros, matomostaza y tomate.</EM>
                        <ul>
                            <li>unidad - $12.300<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hamburguesa Pionera
                        <EM> Pan tradicional o finas hierbas, carne 100gr, queso, papa cabello de ángel, lechuga, tomate, cebolla, salsas: cocheros, mayomostaza y tomate</EM>
                        <ul>
                            <li>unidad - $9.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hamburguesa Justiciera 180Gr
                        <EM> Pan tradicional o finas hierbas, carne 180gr, queso, papa cabello de ángel, lechuga, tomate, cebolla, tocineta, jamón y salsas:cocheros, mayomostaza y tomate</EM>
                        <ul>
                            <li>unidad - $17.500<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hamburguesa 180Gr
                        <EM>Pan tradicional o finas hierbas, carne 100gr, queso, papa cabello de ángel, lechuga, tomate, cebolla, salsas: cocheros, mayomostaza y tomate.</EM>
                        <ul>
                            <li>unidad - $12.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hamburguesa Valiente 180Gr
                        <EM> Pan tradicional o finas hierbas, carne 180gr, queso, papa cabello de ángel, lechuga, tomate, cebolla, tocineta o jamón y salsas: cocheros, mayomostaza y tomate</EM>
                        <ul>
                            <li>unidad - $15.200<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hamburguesa Justiciera 180Gr
                        <EM> Pan tradicional o finas hierbas, carne 180gr, queso, papa cabello de ángel, lechuga, tomate, cebolla, tocineta, jamón y salsas:cocheros, mayomostaza y tomate</EM>
                        <ul>
                            <li>unidad - $17.500<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>PERROS CALIENTES</h3>
                    <CENTER> <img src="img/perro%20caliente%202.jpeg" style="max-width:37.5%" ; alt="" align="center" /><br>
                    </CENTER>
                    <br>
                    <li>
                        Perro Valiente
                        <EM> Salchicha norteña, queso, papa cabello de ángel, cebolla, tocineta o jamón y salsas: cocheros, mayomostaza y tomate</EM>
                        <ul>
                            <li>unidad - $12.300<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Perro Justiciero
                        <EM> Salchicha norteña, queso, papa cabello de ángel, cebolla, tocineta, jamón y salsas: cocheros, mayomostaza y tomate.</EM>
                        <ul>
                            <li>unidad - $14.500<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Perro Pionero
                        <EM> Salchicha norteña, queso, papa cabello de ángel, cebolla y salsas: cocheros, mayomostaza y tomate.</EM>
                        <ul>
                            <li>unidad - $9.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>OTROS</H3>
                    <li>
                        Pincho Nativo
                        <EM> Pincho de pollo apanado y 2 palitos de yuca</EM>
                        <ul>
                            <li>unidad - $4.800<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Papitas Fritas
                        <EM> Porción de papas fritas y salsa queso cheddar o BBQ.</EM>
                        <ul>
                            <li>unidad - $5.600<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>ADICIONES</H3>
                    <li>
                        Adición de Tocineta
                        <ul>
                            <li>unidad - $2.700<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Adición de Queso Doble Crema
                        <ul>
                            <li>unidad - $1.500<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3 STYLE="COLOR:RED;">RESTAURANTE</H3>
                    <center><img src="img/restaurante%201.jpeg" style="max-width:100%" ; alt="" align="center" /><img src="img/restaurante%205.jpg" style="max-width:37.5%" ; alt="" align="center" />
                    </center>
                    <H3>ENTRADAS</H3>
                    <li>
                        TUMACO <EM>Buñuelos de plátano maduro rellenos de carne de jaiba guisada en leche de coco y curry rojo suave</EM>
                        <ul>
                            <li>unidad - $15.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        CHICHARRÓN DE CALAMAR
                        <EM>Calamar pota con crocante de harina de maíz, bañado con chutney de tomate chonto, menta y jengibre</EM>
                        <ul>
                            <li>unidad - $15.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        PALMIRA ROLLS
                        <EM> Plátano maduro envuelto en esterilla de sushi relleno de queso costeño, cilantro, aguacate y chicharrón</EM>
                        <ul>
                            <li>unidad - $17.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        PICA PICA
                        <EM>Pinchitos de queso costeño salteado, ají encurtido y tomate fresco</EM>
                        <ul>
                            <li>unidad - $12.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        SALPICÓN DE CALABAZAS
                        <EM> Daditos de ahuyama, calabaza, guatila y yacón, con limón, poleo y ají Wai-ya, con caldito frío de encurtido de chuguas</EM>
                        <ul>
                            <li>unidad - $12.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        MADRE TIERRA
                        <EM>Mezcla de hongos con pesto de ortiga o de capuchina, con quesocampesino en cubitos y servidos sobre ensalada verde</EM>
                        <ul>
                            <li>unidad - $17.700<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        OREJA DE PERRO” Y CONEJO
                        <EM> tres arepitas delgaditas de yuca con conejo desmechado guisado en leche de coco y ají dulce
                        </EM>
                        <ul>
                            <li>unidad - $18.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        PASTELITOS DE ARRACACHA
                        <EM> De masa de arracacha, rellenos de carne desmechada guisada, con ají de lulo</EM>
                        <ul>
                            <li>unidad - $14.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>ENSALADAS Y SOPAS</H3>
                    <li>
                        ENSALADA CAMPESINA
                        <EM>caliente. De vegetales asados, queso campesino salteado champiñones y salsa picante de tucupí servidos sobre puré de papa criolla.</EM>
                        <ul>
                            <li>unidad - $23.300<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        SOPA CÍTRICA
                        <EM>Una evocación a los pueblos del cocuy. Caldo claro, picante y ácido, aromatizado con limoncillo, con bolitas crocantes de arroz y cardamomo, cuadritos dorados de cuajada, espinacas, champiñones y camarones tigre</EM>
                        <ul>
                            <li>unidad - $14.900<input name="menu|1208|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        ENSALADA DE QUINUA
                        <EM>Ensalada de quinua con chontaduro (en temporada) o palmito encurtidos de la casa, aguacate y papitas</EM>
                        <ul>
                            <li>unidad - $22.300 <input name="menu|1353|130.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        SOPA VOLCÁNICA
                        <EM> Una crema de ahuyama enriquecida con la suavidad de la leche de coco, esta es una sopa que asombra el paladar con una combinación de sabores exóticos (limonaria, pimienta negra, albahaca, camarones salteados)</EM>
                        <ul>
                            <li>unidad - $12.900<input name="menu|1353|130.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        QUILLASINGA: ENSALADA DE TRUCHA AHUMADA
                        <EM>De La Cocha, Nariño. Con guatila y guayaba frescas, lapingachos de papa y mayonesa de limón salado</EM>
                        <ul>
                            <li>unidad - $23.300<input name="menu|1353|130.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        SOPA DEL DÍA
                        <EM> De vegetales en cosecha</EM>
                        <ul>
                            <li>unidad - $14.900 <input name="menu|1353|130.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3> PLATOS FUERTES </h3>
                    <li>
                        LA PESCA DEL DÍA
                        <EM> Pesca fresca sostenible del Pacífico. La preparación depende de lo que recibimos semanalmente. Acompañada con arroz de coco y verdes frescos</EM>
                        <ul>
                            <li>unidad - $42.900 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        POLLO ENCHICHADO
                        <EM> Muslos de pollo estofados con chicha y panela servidos con pesto de cilantro y queso Paipa DO, sobre puré de papa nativa. Un sorprendente y gustoso encuentro con los sabores del altiplano</EM>
                        <ul>
                            <li>unidad - $28.900 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        VAMOS A LA PLAYA
                        <EM> Pez globo en salsa de lulo. Los simpáticos pescaditos salteados, se terminan de hacer en rodajas de lulo y anillos caramelizados de cebolla de intenso sabor agridulce</EM>
                        <ul>
                            <li>unidad - $28.900 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        SELVA ADENTRO
                        <EM> Morrillo de res braseado que se termina de hacer en una salsa de tucupi amazónico (extracto de la yuca brava de sabor intenso y picante). Con yuca frita, casabe, hormigas y verdes frescos</EM>
                        <ul>
                            <li>unidad - $32.500 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        COSTILLITAS EN CERVEZA NEGRA
                        <EM> Costillas de cerdo braseadas con salsa de cerveza negra y borojó, servidas con papas nativas y ensalada verde</EM>
                        <ul>
                            <li>unidad - $35.500 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        LOMITO AL CURRY VERDE
                        <EM> Trozos de lomo de res salteados, con salsa de curry verde de especias cítricas, leche de coco y albahaca, servido con arroz de limón y verdes frescos.</EM>
                        <ul>
                            <li>unidad - $32.800 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        ESTOFADO DE CONEJO CON AJÍ DULCE
                        <EM> Conejo estofado con ajíes dulces y coco, servido con tamalito de boronia (platano maduro y berenjena)</EM>
                        <ul>
                            <li>unidad - $32.800 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>POSTRES</H3>
                    <li>
                        MERENGÓN DE COPOAZÚ <EM>merengue, crema batida, salsa de copoasú, uchuvas, salsa de chocolate</EM>
                        <ul>
                            <li>unidad - $11.900<input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        CREMOSO TRIPLE <EM>De chocolate, arazá y arequipe, trocitos de casabe</EM>
                        <ul>
                            <li>unidad - $10.900 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        QUESO CON BOCADILLO
                        <EM> guayaba fresca, jalea de guayaba, veleño, quesos colombianos</EM>
                        <ul>
                            <li>unidad -$13.900<input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        HELADO ARTESANAL
                        <EM> Dos bolas de los sabores del día con galletitas de la casa. Nuestros helados son de -Selva Nevada- de frutos nativos y cultivos que promueven la reforestación y el cuidado del bosque.</EM>
                        <ul>
                            <li>unidad - $9.900 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3 STYLE="COLOR: RED;">SUSHI</H3>
                    <CENTER> <img src="img/sushi%201.jpeg" style="max-width:37.5%" ; alt="" align="center" />
                        <img src="img/sushi%203.jpeg" style="max-width:37.5%" ; alt="" align="center" /><br>
                    </CENTER>
                    <H3>ENTRADAS</H3>
                    <li>
                        Banano Tempura
                        <EM>Trocitos de banano apanados con coco rallado y salsa de chocolate.</EM>
                        <ul>
                            <li>unidad - $9.810<input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Pollo Agridulce
                        <EM> Deliciosos trocitos de pollo apanados acompañados con salsa agridulce</EM>
                        <ul>
                            <li>unidad - $17.010<input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Egg Rolls
                        <EM> Cuatro (4) deliciosos rollitos chinos rellenos de vegetales, carne o pollo acompañados de salsa agridulce</EM>
                        <ul>
                            <li>unidad - $10.710<input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Gyozas
                        <EM> Cinco (5) empanaditas japonesas de carne de cerdo aromatizadas con finas hierbas acompañadas de salsa soya</EM>
                        <ul>
                            <li>unidad - $10.710<input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Langostinos Apanados
                        <EM> Seis (6) langostinos apanados acompañados con deliciosa salsa dinamita</EM>
                        <ul>
                            <li>unidad - $17.910<input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Huevos de Codorniz
                        <ul>
                            <li>unidad - $10.710<input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Calamares Apanados
                        <EM> Diez (10) Frescos anillos de calamar acompañados de deliciosa salsa dinamita</EM>
                        <ul>
                            <li>unidad - $17.010 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Dim Sum
                        <EM> Cinco (5) pastelitos tailandeses rellenos de pollo y especias acompañados de salsa soya</EM>
                        <ul>
                            <li>unidad - $10.710 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Cerdo Agridulce
                        <EM>Deliciosos trocitos de cerdo apanados acompañados con salsa agridulce</EM>
                        <ul>
                            <li>unidad - $17.010 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Camarones Apanados
                        <EM> 16 deliciosos camarones apanados acompañados con salsa dinamita.</EM>
                        <ul>
                            <li>unidad - $15.210 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>SUSHI</H3>
                    <li>
                        Bomba Roll
                        <EM> Rollo crocante con langostino tempura, aguacate, mezcla de camarón, palmito y mayonesa picante.</EM>
                        <ul>
                            <li>unidad - $25.110 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Salmón Dinamita
                        <EM> Salmón tempura, queso philadelphia, aguacate y canicama ligeramente picante</EM>
                        <ul>
                            <li>unidad - $23.310 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Anguila Tempura Roll
                        <EM> Anguila tempura, queso philadelphia y aguacate</EM>
                        <ul>
                            <li>unidad - $22.410 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Especial Express Roll
                        <EM> Langostino tempura, jengibre, aguacate y queso philadelphia.</EM>
                        <ul>
                            <li>unidad - $26.010 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Sushi Roll Tempura
                        <EM> Rollo crocante con mezcla picante de carne de cangrejo, caviar, masago, mayonesa japonesa, aguacate, queso philadelpia y plátano maduro</EM>
                        <ul>
                            <li>unidad - $24.210 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Rainbow Roll
                        <EM> Langostino crocante, banano tempura, queso philadelphia cubierto en mango y kiwi.</EM>
                        <ul>
                            <li>unidad - $22.410 <input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Banana Roll
                        <EM> Anguila, caviar masago, queso philadelphia, cubierto de banano y miel.</EM>
                        <ul>
                            <li>unidad - $21.510<input name="menu|1354|150.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3> SUSHI ESPECIAL</h3>
                    <li>
                        Salmón
                        <EM> Salmón, aguacate, cebollín, palmito de cangrejo, mayonesa picante</EM>
                        <ul>
                            <li>unidad - $22.410<input name="menu|1374|30.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Langostino
                        <EM> Langostino, palmito de cangrejo, masago, aguacate, mayonesa dinamita y cebollín</EM>
                        <ul>
                            <li>unidad - $22.410 <input name="menu|1374|30.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Atún
                        <em>Atún, aguacate, cebollin, mayonesa picante y jengibre.
                        </em>
                        <ul>
                            <li>unidad - $22.410 <input name="menu|1374|30.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>COMBO</h3>
                    <li>
                        Combo sushi 1
                        <em>Tempura Roll (4 Und), California (4 Und), Salmón Roll (4 Und ), Anago Roll (4 Und )</em>
                        <ul>
                            <li>unidad - $39.060 <input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Combo sushi 2
                        <em>Salmón Ebi Roll (4 Und ), Camarón Dinamita (4 Und ), Shrimp Roll (4 Und ), Ojo de Tigre (4 Und ).</em>
                        <ul>
                            <li>unidad - $37.440 <input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Combo sushi 3
                        <em>Criollo (4 Und), Banana Roll (4 Und ), Vegetariano (4 Und), Especial Express Roll (4 Und</em>
                        <ul>
                            <li>unidad - $34.380 <input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>ARROCES</h3>
                    <li>
                        Mandarin
                        <em>Arroz preparado al wok, al estilo mandarín con vegetales frescos, ajonjolí, salsa de champiñones, aceite de ajonjolí, tortilla de huevo y un toque de sake. (Para 1 o 2 personas) </em>
                        <ul>
                            <li>unidad - $20.610 <input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Arroz Thai
                        <em>Para 3 personas (Por la compra de cualquier arroz para 3 personas recibe gratis una gaseosa 400 ml). </em>
                        <ul>
                            <li>unidad - $23.310 <input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Khao Pad Gung
                        <em>Arroz tailandés, salteado al wok con carne de cangrejo, leche de coco, vegetales, mirrin </em>
                        <ul>
                            <li>unidad - $20.610<input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Yakimehi
                        <em>Delicioso y tradicional arroz japonés salteado al wok con vegetales finalmente picados y un toque de sake.
                        </em>
                        <ul>
                            <li>unidad - $20.610 <input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3 STYLE="COLOR:RED;">HELADO</H3>
                    <CENTER> <img src="img/heladeria%201.jpeg" style="max-width:37.5%" ; alt="" align="center" />
                        <img src="img/heladeria%204.jpeg" style="max-width:22.5%" ; alt="" align="center" />
                    </CENTER>
                    <H3>ESPECIALES</H3>
                    <li>
                        Sundae 1 sabor
                        <ul>
                            <li>unidad - $ 6.200<input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Sundae 2 sabores
                        <ul>
                            <li>unidad - $8.200 <input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Copa Gelarti
                        <ul>
                            <li>unidad - $7.200<input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Charlie Brownie
                        <ul>
                            <li>unidad - $9.900 <input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>MALTEADAS</H3>
                    <li>
                        Sabores Tradicionales
                        <ul>
                            <li>unidad - $9.500<input name="menu|1375|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Cherrymania
                        <ul>
                            <li>unidad - $10.900 <input name="menu|1376|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Crema de Limón
                        <ul>
                            <li>unidad - $10.900 <input name="menu|1376|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Macadamia
                        <ul>
                            <li>unidad - $10.900 <input name="menu|1376|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Milky Way
                        <ul>
                            <li>unidad - $10.900 <input name="menu|1376|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Oreo
                        <ul>
                            <li>unidad - $10.900 <input name="menu|1376|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Snickers Almond
                        <ul>
                            <li>unidad - $10.900 <input name="menu|1376|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Vainilla Chips
                        <ul>
                            <li>unidad - $10.900 <input name="menu|1376|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>VASITOS</h3>
                    <li>
                        8-Pack Vasitos
                        <ul>
                            <li>unidad - $20.000
                                <input name="menu|1376|50.00|unidad" type="number" min="0" size="5" class="abc" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        4-Pack Vasitos
                        <ul>
                            <li>unidad - $10.000 <input name="menu|1376|50.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3> LITROS GOURMET </h3>
                    <li>
                        Arequipe Gourmet
                        <ul>
                            <li>unidad - $23.900 <input name="menu|1216|220.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Brownie Gourmet

                        <ul>
                            <li>unidad - $ 26.900 <input name="menu|1349|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Chocolate Belga Gourmet

                        <ul>
                            <li>unidad - $ 26.900 <input name="menu|1349|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Crema de Limón Gourmet

                        <ul>
                            <li>unidad - $ 26.900 <input name="menu|1349|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Frutos del Bosque Gourmet
                        <ul>
                            <li>unidad - $ 26.900 <input name="menu|1349|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Macadamia gourmet
                        <ul>
                            <li>unidad - $26.900 <input name="menu|1350|200.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Mandarina Nieve
                        <ul>
                            <li>unidad - $ 23.900 <input name="menu|1234|360.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Tres Leches Gourmet
                        <ul>
                            <li>unidad - $ 23.900<input name="menu|1351|30.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Vainilla Francesa Gourmet
                        <ul>
                            <li>unidad -$23.900 <input name="menu|1352|30.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>LITROS LIGHT</h3>

                    <li>
                        Frutos del Bosque Light .

                        <ul>
                            <li>unidad - $26.900 <input name="menu|1244|350.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Vainilla Light
                        <ul>
                            <li>unidad - $26.900 <input name="menu|1249|100.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>

                    <h3> POSTRES CON HELADO </h3>
                    <li>
                        Rollo Frutos del Bosque <EM>Rollo de helado con bizcochuelo , relleno de helado y salsa de de frutos del bosque </EM>
                        <ul>
                            <li>unidad - $32.900 <input name="menu|1217|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Rollo Vainilla <EM>Rollo de bizcochuelo, relleno de helado de vainilla con salsa de mora.</EM>
                        <ul>
                            <li>unidad - $32.900 <input name="menu|1218|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Torta de helado
                        <EM>Delicioso postre de helado Oreo, con trocitos y base crujiente de galleta Oreo , con todo el aroma y sabor a chocolate. </EM>
                        <ul>
                            <li>unidad - $34.900 <input name="menu|1219|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3 STYLE="COLOR:RED;">PASTAS</H3>
                    <CENTER> <img src="img/pasta%202.jpeg" style="max-width:37.5%" ; alt="" align="center" />
                        <img src="img/pastas%201.jpeg" style="max-width:50%" ; alt="" align="center" />
                    </CENTER>
                    <H3>LASAGNAS</H3>
                    <li>
                        Lasagna carne
                        <ul>
                            <li>unidad - $17.500 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Lasagna pollo
                        <ul>
                            <li>unidad - $17.500 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Lasagna mixta
                        <ul>
                            <li>unidad - $17.500 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Lasagna la huerta
                        <ul>
                            <li>unidad - $17.500 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Lasagna de pollo
                        <ul>
                            <li>unidad - $17.500 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Lasagna de ricotta y espinaca
                        <ul>
                            <li>unidad - $15.900 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>PASTA CORTA</h3>
                    <li>
                        Tornillo al huevo
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Tornillo integral
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Penne
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Macarron grande
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Macarrón mini
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Hoja de lasagna
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Safari surtido
                        <ul>
                            <li>unidad - $6.350 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Arrocitos surtidos
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>PASTA LARGA</h3>
                    <li>
                        Spaghetti al huevo delgado
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Spaghetti al huevo grueso
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Linguini
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>

                    <li>
                        Tagliatelle de espinaca
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Tagliatelle tomate
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Tagliatelle paprika
                        <ul>
                            <li>unidad - $14.300 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Tagliatelle tinta de calamar
                        <ul>
                            <li>unidad - $25.400 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Tallarín de espinaca
                        <ul>
                            <li>unidad - $12.700 <input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>PASTA RELLENA</h3>
                    <li>
                        Ravioli de carne
                        <ul>
                            <li>unidad - $8.900,00<input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Ravioli de pollo
                        <ul>
                            <li>unidad - $8.900,00<input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Ravioli de queso
                        <ul>
                            <li>unidad - $22.300<input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Triángulo de queso
                        <ul>
                            <li>unidad - $22.300<input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Ravioli de alcachofa
                        <ul>
                            <li>unidad - $27.000<input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Ravioli de ahuyama
                        <ul>
                            <li>unidad - $22.300<input name="menu|1220|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Ravioli tinta de calamar
                        <ul>
                            <li>unidad - $44.500<input name="menu|1221|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Ñoquis de espinaca
                        <ul>
                            <li>unidad - $19.000<input name="menu|1221|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>PIZZA</h3>
                    <li>
                        Discos de pizza con tomate
                        <ul>
                            <li>unidad - $10.700<input name="menu|1221|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Discos de pizza blanca
                        <ul>
                            <li>unidad - $10.700<input name="menu|1221|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>QUESOS</h3>
                    <li>
                        Queso parmesano rallado
                        <ul>
                            <li>unidad - $5.500<input name="menu|1221|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Prosciutto italiano
                        <ul>
                            <li>unidad - $21.000<input name="menu|1221|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>

                    <h3>SALSA </h3>
                    <li>
                        Salsa carne <ul>
                            <li>unidad - $18.000 <input name="menu|1222|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Salsa pollo <ul>
                            <li>unidad - $18.000 <input name="menu|1222|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Salsa alfredo <ul>
                            <li>unidad - $18.000 <input name="menu|1222|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Salsa tres quesos <ul>
                            <li>unidad - $24.500 <input name="menu|1222|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Mantequilla de ajo <ul>
                            <li>unidad - $6.400 <input name="menu|1222|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Salsa funghi <ul>
                            <li>unidad - $20.700 <input name="menu|1222|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3 STYLE="COLOR:RED;">ALMACEN</h3>
                    <CENTER> <img src="img/alamcen%201.jpeg" style="max-width:37.5%" ; alt="" align="center" />
                        <img src="img/almacen%203.webp" style="max-width:50%" ; alt="" align="center" />
                    </CENTER>
                    <H3>ASEO</H3>
                    <li>
                        Limpiador Líquido Ajax <ul>
                            <li>unidad - $7.250 <input name="menu|1222|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Limpiador Líquido Fabuloso
                        <ul>
                            <li>unidad - $11.290<input name="menu|1223|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Detergente Rindex
                        <ul>
                            <li>unidad - $4.390 <input name="menu|1224|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>DESPENSA</H3>
                    <li>
                        Garbanzo Maritza premium x 500g
                        <ul>
                            <li>unidad - $2.290 <input name="menu|1225|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Sal Refisal Bolsa x 1000 g
                        <ul>
                            <li>unidad - $1.550<input name="menu|1225|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Harina De Trigo Tradicional Haz De Oros x 1000g
                        <ul>
                            <li>unidad - $3.890<input name="menu|1225|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Chocolate Resellable Corona x 500g
                        <ul>
                            <li>unidad - $5.990 <input name="menu|1225|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Leche Deslactosada Alquería x 1100ml x 6und
                        <ul>
                            <li>unidad - $19.990<input name="menu|1225|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Leche Deslactosada Alpina Bolsa x 6und x 1100ml

                        <ul>
                            <li>unidad - $21.990 <input name="menu|1225|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Queso Parmesano Bolsa x 250g Alpina

                        <ul>
                            <li>unidad - $20.390 <input name="menu|1225|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Queso alpina Finesse tajado x 30 unidades x 450g
                        <ul>
                            <li>unidad - $19.590 <input name="menu|1225|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>


                    <H3 STYLE="COLOR:RED">BEBIDAS</H3>
                    <CENTER> <img src="img/bebidas%201.jpeg" style="max-width:37.5%" ; alt="" align="center" />
                        <img src="img/bebidas%203.jpeg" style="max-width:38%" ; alt="" align="center" />
                    </CENTER>
                    <h3> CERVEZA </h3>
                    <li>
                        CERVEZA CORONA EXTRA SIX PACK BOTELLA 355ML
                        <ul>
                            <li>unidad - $23.000 <input name="menu|1226|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        CERVEZA BUDWEISER SIX PACK BOTELLA 315ML
                        <ul>
                            <li>unidad - $13.700 <input name="menu|1227|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        CERVEZA STELLA ARTOIS SIX PACK BOTELLA 330ML
                        <ul>
                            <li>unidad - $ 23.100 <input name="menu|1228|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>AGUARDIENTES</H3>

                    <li>
                        AGUARDIENTE ANTIOQUEÑO SIN AZUCAR BOTELLA 750ML

                        <ul>
                            <li>unidad - $43.900 <input name="menu|1229|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        AGUARDIENTE ANTIOQUEÑO MEDIA 375ML

                        <ul>
                            <li>unidad - $ 23.100 <input name="menu|1229|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>LICORES</H3>
                    <li>
                        LICOR DE CAFÉ COLOMA GRAN RESERVA BOTELLA 750ML


                        <ul>
                            <li>unidad - $ 79.100<input name="menu|1229|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>VERDULERIAS</h3>
                    <center>
                        <img src="img/verduleria.jpeg" style="max-width:37.5%" ; alt="" align="center" /><br></center>

                    <H3>FRUTAS</H3>

                    <li>
                        Patilla porción x 500 g
                        <ul>
                            <li>unidad - $2.280 <input name="menu|1230|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Papaya melona x 1 kg
                        <ul>
                            <li>unidad - $2.446<input name="menu|1231|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Toronja nacional x 1000 g
                        <ul>
                            <li>unidad - $2.816 <input name="menu|1232|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <H3>VERDURAS</H3>
                    <li>
                        Papa parda pastusa x 500 g
                        <ul>
                            <li>unidad - $2.662 <input name="menu|1233|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Cebolla cabezona
                        <ul>
                            <li>unidad - $2.882 <input name="menu|1233|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Calabacín amarillo x 500 g <ul>
                            <li>unidad - $2.948<input name="menu|1233|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>

                    <H3>VARIOS</H3>
                    <li>
                        Huevos rojo tipo A Maxima x 30 und <ul>
                            <li>unidad - $9.990 <input name="menu|1233|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>

                    <li>
                        Harina PAN Blanca x 1000 g
                        <ul>
                            <li>unidad - $3.290 <input name="menu|1233|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>

                    <li>
                        Aceite Diana vitaminas x 3000 ml <ul>
                            <li>unidad - $18.990<input name="menu|1233|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>


                    <h3 STYLE="COLOR:RED;"> CARNICERIA </h3>

                    <CENTER> <img src="img/carniceria%201.jpg" style="max-width:37.5%" ; alt="" align="center" />
                        <img src="img/carniceria%204.jpeg" style="max-width:33.5%" ; alt="" align="center" />
                    </CENTER>
                    <H3>VACA</H3>

                    <li>
                        BIFE ANGOSTO 1 KILO
                        <ul>
                            <li>unidad - $29.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        BIFE ANGOSTO 1/2 KILO
                        <ul>
                            <li>unidad - $14.500 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Bife ancho 1 KILO
                        <ul>
                            <li>unidad - $24.500 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Bife ancho 1/2 KILO
                        <ul>
                            <li>unidad - $12.500 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Osobuco 1 KILO
                        <ul>
                            <li>unidad - $16.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Osobuco 1/2 KILO
                        <ul>
                            <li>unidad - $8.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>


                    <li>
                        Peceto 1 KILO
                        <ul>
                            <li>unidad - $34.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Peceto 1/2 KILO
                        <ul>
                            <li>unidad - $17.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Cuadril 1 KILO
                        <ul>
                            <li>unidad - $33.500 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Cuadril 1/2 KILO
                        <ul>
                            <li>unidad - $17.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>

                    <li>
                        Paleta 1 KILO
                        <ul>
                            <li>unidad - $28.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Paleta 1/2 KILO
                        <ul>
                            <li>unidad - $14.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Asado 1 KILO
                        <ul>
                            <li>unidad - $29.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Asado 1/2 KILO
                        <ul>
                            <li>unidad - $15.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Roast beef
                        1 KILO
                        <ul>
                            <li>unidad - $27.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Roast beef
                        1/2 KILO
                        <ul>
                            <li>unidad - $14.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Tapa de asado 1 KILO
                        <ul>
                            <li>unidad - $29.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Tapa de asado 1/2 KILO
                        <ul>
                            <li>unidad - $15.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Tapa de nalga 1 KILO
                        <ul>
                            <li>unidad - $32.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Tapa de nalga 1/2 KILO
                        <ul>
                            <li>unidad - $16.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Vacio 1 KILO
                        <ul>
                            <li>unidad - $29.500<input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Vacio 1/2 KILO
                        <ul>
                            <li>unidad - $15.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Matambre 1 KILO
                        <ul>
                            <li>unidad - $28.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>


                    <li>
                        Cuadrada 1 kg<ul>
                            <li>unidad - $30.000 <input name="menu|1233|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Cuadrada 1/2 kg <ul>
                            <li>unidad - $15.000<input name="menu|1233|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Lomo 1 KILO
                        <ul>
                            <li>unidad - $35.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Lomo 1/2 KILO
                        <ul>
                            <li>unidad - $18.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Carne picada comun 1 KILO
                        <ul>
                            <li>unidad - $21.000 <input name="menu|1243|180.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Carne picada comun 1/2 KILO <ul>
                            <li>unidad - $11.000 <input name="menu|1235|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Carne picada especial 1 KILO
                        <ul>
                            <li>unidad - $27.000 <input name="menu|1236|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Carne picada especial 1/2 KILO
                        <ul>
                            <li>unidad - $14.000 <input name="menu|1237|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Con puré de papa
                        <ul>
                            <li>unidad - $250.00 <input name="menu|1238|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Con puré de papa
                        <ul>
                            <li>unidad - $250.00 <input name="menu|1238|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3> CERDO </h3>
                    <li>
                        Paleta 1 kg
                        <ul>
                            <li>unidad - $36.000<input name="menu|1239|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Paleta 1/2 kg
                        <ul>
                            <li>unidad - $18.000 <input name="menu|1240|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Carre 1 kg
                        <ul>
                            <li>unidad - $38.000 <input name="menu|1241|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Carre 1/2 kg
                        <ul>
                            <li>unidad - $19.000 <input name="menu|1242|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Churrasquito 1 kg
                        <ul>
                            <li>unidad - $36.000 <input name="menu|1242|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Churrasquito 1/2 kg
                        <ul>
                            <li>unidad - $18.000 <input name="menu|1242|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Bondiola 1 kg
                        <ul>
                            <li>unidad - $39.000 <input name="menu|1242|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Bondiola 1/2 kg
                        <ul>
                            <li>unidad - $20.000 <input name="menu|1242|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Matambrito 1 kg
                        <ul>
                            <li>unidad - $38.000 <input name="menu|1242|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Matambrito 1/2 kg
                        <ul>
                            <li>unidad - $19.000 <input name="menu|1242|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Jamón 1 kg
                        <ul>
                            <li>unidad - $39.000 <input name="menu|1242|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Jamón 1/2 kg
                        <ul>
                            <li>unidad - $20.000 <input name="menu|1242|300.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>


                    <h3> POLLO </h3>
                    <li>
                        Pechuga de pollo 1 KG
                        <ul>
                            <li>unidad - $11.000 <input name="menu|1245|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Pechuga de pollo 1/2 KG
                        <ul>
                            <li>unidad - $6.000 <input name="menu|1246|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Pata y muslo 1kg
                        <ul>
                            <li>unidad - $12.000 <input name="menu|1247|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Pollo entero
                        <ul>
                            <li>unidad - $33.000<input name="menu|1248|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        Alitas 1kg
                        <ul>
                            <li>unidad - $6.000<input name="menu|1248|250.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3 style="color:red;">DIETETICA</h3>
                    <CENTER> <img src="img/dietetica%201.jpeg" style="max-width:37.5%" ; alt="" align="center" />
                        <img src="img/dietica%204.jpeg" style="max-width:33.5%" ; alt="" align="center" />
                    </CENTER>
                    <h3> ALIMENTOS SALUDABLES </h3>
                    <li>
                        BIOCHÍA CON TÉ VERDE Y SPIRULINA X 400 GRS - BIOPRONAT
                        <ul>
                            <li>unidad - $23.600 <input name="menu|1250|80.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        MIEL X 250 ML - LA PRIMAVERA
                        <ul>
                            <li>unidad - $9.750 <input name="menu|1251|80.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        ROLLOS DE ARROZ CRUJIENTE DULCE 8 ROLLOS X 80 GRS
                        <ul>
                            <li>unidad - $5.950 <input name="menu|1252|80.00|unidad" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <h3>Alimentos para diabeticos</h3>
                    <li>
                        UNOA COMPLEX X 50 CAP
                        <ul>
                            <li>unidad - $36.750 <input name="menu[]" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        CONTROL KEPP - RAIZ DE KONJAC Y SPIRULINA X 90 CAP
                        <ul>
                            <li>unidad - $36.700 <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                    <li>
                        AVENA EN HOJUELAS SIN GLUTEN X 1000 GRS – WHY NOT
                        <ul>
                            <li>unidad - $18.900 <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                        </ul>
                    </li>
                </ul>
                <h3>PROTEINA</h3>
                <li>
                    BEBIDA DE ALMENDRA EN POLVO ALMENDRI TARRO X 500 GRS - FRANÉS
                    <ul>
                        <li>unidad - $38.700
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <li>
                    BEBIDA DE ALMENDRA EN POLVO ALMENDRI TARRO X 1000 GRS - FRANÉS

                    <ul>
                        <li>unidad - $62.900
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <li>
                    BI-PRO X 2 LB - UPN

                    <ul>
                        <li>unidad - $93.800
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <H3>VITAMINAS</H3>
                <li>
                    VITAMINA D3 2000 IU X 100 SOFT - NUTRIVITA


                    <ul>
                        <li>unidad - $31.800
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <li>
                    OMEGA 3 700 MG CON EPA & DHA X 60 CAP - SOLGAR

                    <ul>
                        <li>unidad - $107.900

                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <H3>QUEMADORES DE GRASA</H3>
                <li>
                    LECITHIN 1360 MG X 100 SOFT – SOLGAR

                    <ul>
                        <li>unidad - $65.200
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <li>
                    VINAGRE DE SIDRA DE MANZANA ORGÁNICA BRAGG X 473 ML - QUIDARME

                    <ul>
                        <li>unidad - $31.500
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <li>
                    SPIRULINA X 750 MG X 100 TAB - SOLGAR

                    <ul>
                        <li>unidad - $73.900
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <H3 STYLE="COLOR: RED">TIENDAS</H3>
                <CENTER> <img src="img/tiendas.jpg" style="max-width:37.5%" ; alt="" align="center" />

                </CENTER>
                <H3>DULCES</H3>
                <li>
                    Arequipe Alpina

                    <ul>
                        <li>unidad - $5.190
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <li>
                    La lecherita

                    <ul>
                        <li>unidad - $1.990
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <li>
                    Galleta Gol
                    <ul>
                        <li>unidad - $.800
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>

                <H3>ABARROTES</H3>

                <li>
                    Arroz Diana
                    <ul>
                        <li>unidad - $6.300
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <li>
                    Café Sello Rojo
                    <ul>
                        <li>unidad - $8.990
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <li>
                    Panela fonce
                    <ul>
                        <li>unidad - $2.690
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <H3>BEBIDAS</H3>
                <li>
                    Jugo del valle fresh mandarina 1.5l
                    <ul>
                        <li>unidad - $2.090
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <li>
                    Gaseosa postobon manzana x 400 ml
                    <ul>
                        <li>unidad - $1.650

                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <li>
                    Gaseosa Coca Cola x 600 ml
                    <ul>
                        <li>unidad - $2.990
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>
                <H3>CIGARRILLOS</H3>
                <li>
                    Cigarrillo Marlboro ice xpress summer cajetilla x 20 und
                    <ul>
                        <li>unidad - $7.800
                            <input name="menu" type="number" min="0" size="5" class="abc" /> </li>
                    </ul>
                </li>


                <!-- fin items -->
                <!--
                  <ul>
                  
                      </ul> 
                  -->
                <!-- fin menu -->
                <div class="form-datos">
                    <!-- 29-04-->
                    <!-- 29-04-->
                    <p>&nbsp;</p>
                    <input name="enviar" type="submit" onclick="Capturar()" value="siguiente" id="siguiente" />
                    <input type="hidden" name="MM_insert" value="form1" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>
