<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="{{ asset("/web/css/style.css")}}">
        <link rel="stylesheet" href="{{ asset("/web/css/menu.css")}}">

        <!-- Carrousel de imagenes -->
        <link rel="stylesheet" type="text/css" href="{{ asset("/web/plugins/elastslide/css/elastislide.css")}}" />
        <link rel="stylesheet" type="text/css" href="{{ asset("/web/plugins/elastslide/css/custom.css")}}" />
        <script src="{{ asset("/web/plugins/elastslide/js/modernizr.custom.17475.js")}}"></script>
        <!-- Fin carrousel de imagenes -->
    </head>
    <body>
        <div id="contenedor">
            <div id="header">
                <a href="index.html"><img id="logo" src="{{ asset("/web/images/logo.png")}}"/></a>
                <div id="buscador">
                    <form action="" method="get">
                        <input type="text" placeholder="Buscar..."/>
                    </form>
                </div>
            </div>
            <div id="principal">
                <div id="menu">
                    <ul id="css3menu1" class="topmenu">
                        <li class="topfirst"><a href="index.html" style="width:179px;height:28px;line-height:28px;"><img src="{{ asset("/web/images/home-home-icone-9323-128-as.png")}}" alt=""/>&nbsp</a></li>
                        <li class="topmenu"><a href="carreras.php" style="width:179px;height:28px;line-height:28px;"><span>CARRERAS</span></a></li>
                        <li class="topmenu"><a href="instituciones.php" style="width:178px;height:28px;line-height:28px;">INSTITUCIONES</a></li>
                        <li class="topmenu"><a href="areas_int.php" style="width:178px;height:28px;line-height:28px;">AREAS DE INTERES</a></li>
                        <li class="toplast"><a href="contacto.html" style="width:179px;height:28px;line-height:28px;">CONTACTO</a></li>
                    </ul>
                </div>
                <div id="contenido-index">
                    <img src="{{ asset("/web/images/ima_principal.png")}}"/>
                    <div id="universidades-adheridas">
                        <h1>UNIVERSIDADES ADHERIDAS</h1>
                        <ul id="carousel" class="elastislide-list">
                            <li><a href="#"><img src="{{ asset("/web/images/logos/uca.png")}}" alt="image01" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/abogacia.png")}}" alt="image02" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/utn.png")}}" alt="image03" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/austral.png")}}" alt="image04" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/humanidades.png")}}" alt="image05" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/iea.png")}}" alt="image06" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/ishyr.png")}}" alt="image07" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/iugr.png")}}" alt="image08" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/medicina.png")}}" alt="image09" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/odontologia.png")}}" alt="image10" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/siglo21.png")}}" alt="image11" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/uai.png")}}" alt="image12" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/ucel.png")}}" alt="image13" /></a></li>
                            <li><a href="#"><img src="{{ asset("/web/images/logos/iunir.png")}}" alt="image13" /></a></li>

                        </ul>
                    </div>
                </div>

            </div>
            <div id="footer">
            </div>
        </div>


        <!-- Carrousel de imagenes -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="{{ asset("/web/plugins/elastslide/js/jquerypp.custom.js")}}"></script>
        <script type="text/javascript" src="{{ asset("/web/plugins/elastslide/js/jquery.elastislide.js")}}"></script>
        <script type="text/javascript">
			
            $( '#carousel' ).elastislide();
			
        </script>
        <!-- Fin Carrousel de imagenes -->

    </body>
</html>
