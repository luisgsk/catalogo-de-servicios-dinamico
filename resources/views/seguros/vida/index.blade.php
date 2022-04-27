<!-- Index Seguros Vida -->

@extends('layouts.app', [
'class' => '',
'elementActive' => 'dashboard',
'breadcumb' => 'visible',
'breadcumb1' => 'Seguros De Vida',
'breadcumbsub' => 'none',
'breadcumb2' => '',
'rsubseguro' => 'vida',
'subseguro' => ''
])

<?php
$link_vidaflexible           =  "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-flexible:boton";
$link_segurouniversitario    =  "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-seguro-universitario:boton";
$link_vidatemporaltotal      =  "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-temporal-total:boton";
?>


@section('content')
<div id="fullpage">
    <div class="section" id="vidaindex" data-anchor="vidaindex">


        <!-- ========================== Columnas de seguros solo para desktop ========================== -->
        <div id="seguros-desktop">
            <div class="container">
                <div class="row">
                    <!-- ====================================================
                            Vida Flexible Desktop
                        ==================================================== -->
                    <div class="col-md-4 col-md-offset-2 csd">
                        <div class="text-center p-2 subsegurocontent" style="background-color:#EDEDED;">
                            <div class="marco-segurocontent" style="border-color: #e6281f;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-subsegurocontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="subsegurostittle">Vida</span></p>
                                    <p><span class="subsegurosname vida">Flexible</span></p>
                                    <hr style="background-color:#e6281f;width:80%;">
                                    <p class="subsegurodesc descvida">
                                        Te permite proteger a tu familia y a la vez
                                        rentabilizar tu dinero en fondos de inversión
                                        a tasa fija o variable. *
                                    </p>

                                    <hr class="hrpdesdeup" style="background-color:#e6281f;width:80%;">
                                    <p class="subseguropdesde">Desde S/. 230.45 mensual **</p>
                                    <hr class="hrpdesdedown" style="background-color:#e6281f;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="seguroDesglose('vida','vidaflexible');setTrazabilidad( 'mas-info','vida','vidaflexible','n-a','seguros-vida' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#e6281f;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href=" {{$link_vidaflexible}} ">
                                                <button onclick="setTrazabilidad( 'cotizar','vida','vidaflexible','n-a','seguros-vida' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#e6281f;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 1 -->

                    <!-- ====================================================
                            Seguro Universitario Desktop
                        ==================================================== -->
                    <div class="col-md-4 col-md-offset-2 csd">
                        <div class="text-center p-2 subsegurocontent" style="background-color:#EDEDED;">
                            <div class="marco-segurocontent" style="border-color: #e6281f;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-subsegurocontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="subsegurostittle">Seguro</span></p>
                                    <p><span class="subsegurosname vida">Universitario</span></p>
                                    <hr style="background-color:#e6281f;width:80%;">
                                    <p class="subsegurodesc descvida">
                                        Completa seguridad de que lograrás tu meta
                                        mientras rentabilizas tu ahorro y proteges
                                        a los que más quieres.
                                    </p>
                                    <div id="cuadratura-vida">&nbsp;</div>
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="seguroDesglose('vida','segurouniversitario');setTrazabilidad( 'mas-info','vida','segurouniversitario','n-a','seguros-vida' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#e6281f;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href=" {{$link_segurouniversitario}} ">
                                                <button onclick="setTrazabilidad( 'cotizar','vida','segurouniversitario','n-a','seguros-vida' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#e6281f;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 2 -->

                    <!-- ====================================================
                            Vida Temporal Total Desktop
                        ==================================================== -->
                    <div class="col-md-4 col-md-offset-2 csd">
                        <div class="text-center p-2 subsegurocontent " style="background-color:#EDEDED;">
                            <div class="marco-segurocontent" style="border-color: #e6281f;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-subsegurocontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="subsegurostittle">Vida Temporal</span></p>
                                    <p><span class="subsegurosname vida">Total</span></p>
                                    <hr style="background-color:#e6281f;width:80%;">
                                    <p class="subsegurodesc descvida">
                                        Busca proteger y conservar la estabilidad económica
                                        de tu familia en caso de fallecimiento del asegurado
                                        u otro evento cubierto.
                                    </p>
                                    <div id="cuadratura-vida2">&nbsp;</div>
                                    <!--<hr class="hrpdesdeup" style="background-color:#e6281f;width:80%;">
                                    <p class="subseguropdesde">Desde S/. 230.45 mensual **</p>
                                    <hr class="hrpdesdedown" style="background-color:#e6281f;width:80%;">-->
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="seguroDesglose('vida','vidatemporaltotal');setTrazabilidad( 'mas-info','vida','vidatemporaltotal','n-a','seguros-vida' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#e6281f;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href=" {{$link_vidatemporaltotal}} ">
                                                <button onclick="setTrazabilidad( 'cotizar','vida','vidatemporaltotal','n-a','seguros-vida' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#e6281f;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 3 -->



                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end seguros-desktop -->
        <div class="aviso-vehicular">
            <b>*</b> La rentabilidad proyectada depende del plazo de contratación, la suma asegurada y el rendimiento del fondo.<br>
            <b>**</b> Asegurado por $40, 000 durante 25 años
        </div>

        <!-- ========================================================================================== -->
        <!-- ========================================================================================== -->

        <!-- ========================== Columnas de subseguros solo para Mobile ========================== -->

        <button onclick="showDesglose('vida','legales','unico');setTrazabilidad( 'click-legales','vida','n-a','n-a','seguros-vida')" id="legales" type="button" class="btn " style="background-color:#e6281f;">Legales</button>

        <!-- ====================================================
                Vida Flexible Mobile
             ==================================================== -->
        <div class="slide" id="vidaflexible">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 subsegurocontent" style="background-color:#EDEDED;">
                        <div class="marco-subsegurocontent" style="border-color: #e6281f;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-subsegurocontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="subsegurostittle">Vida</span>
                                    <br><span class="subsegurosname vida">Flexible</span></p>
                                <hr style="background-color:#e6281f;width:80%;">
                                <p class="subsegurodesc subsegurodesc3">
                                    Te permite proteger a tu familia y a la vez
                                    rentabilizar tu dinero en fondos de inversión
                                    a tasa fija o variable.
                                </p>
                                <hr class="hrpdesdeup" style="background-color:#e6281f;width:80%;">
                                <p class="subseguropdesde">Desde S/. 230.45 mensual **</p>
                                <hr class="hrpdesdedown" style="background-color:#e6281f;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="seguroDesglose('vida','vidaflexible');setTrazabilidad( 'mas-info','vida','vidaflexible','n-a','seguros-vida' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#e6281f;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href=" {{$link_vidaflexible}} ">
                                            <button onclick="setTrazabilidad( 'cotizar','vida','vidaflexible','n-a','seguros-vida' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#e6281f;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end subsegurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide vida flexible -->

        <!-- ====================================================
                Seguro Universitario Mobile
             ==================================================== -->
        <div class="slide" id="segurouniversitario">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 subsegurocontent" style="background-color:#EDEDED;">
                        <div class="marco-subsegurocontent" style="border-color: #e6281f;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-subsegurocontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="subsegurostittle">Seguro</span>
                                    <br><span class="subsegurosname vida">Universitario</span></p>
                                <hr style="background-color:#e6281f;width:80%;">
                                <p class="subsegurodesc">
                                    Completa seguridad de que lograrás tu meta
                                    mientras rentabilizas tu ahorro y proteges
                                    a los que más quieres.
                                </p>
                                <div id="cuadratura-vida">&nbsp;</div>
                                <!--<hr class="hrpdesdeup" style="background-color:#e6281f;width:80%;">
                                <p class="subseguropdesde">Desde S/. 230.45 mensual **</p>
                                <hr class="hrpdesdedown" style="background-color:#e6281f;width:80%;">-->
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="seguroDesglose('vida','segurouniversitario');setTrazabilidad( 'mas-info','vida','segurouniversitario','n-a','seguros-vida' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#e6281f;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href=" {{$link_segurouniversitario}} ">
                                            <button onclick="setTrazabilidad( 'cotizar','vida','segurouniversitario','n-a','seguros-vida' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#e6281f;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end subsegurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide seguro universitario -->

        <!-- ====================================================
                Vida Temporal Total Mobile
             ==================================================== -->
        <div class="slide" id="vidatemporaltotal">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 subsegurocontent" style="background-color:#EDEDED;">
                        <div class="marco-subsegurocontent" style="border-color: #e6281f;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-subsegurocontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="subsegurostittle">Vida Temporal</span>
                                    <br><span class="subsegurosname vida">Total</span></p>
                                <hr style="background-color:#e6281f;width:80%;">
                                <p class="subsegurodesc2" style="">
                                    Busca proteger y conservar la estabilidad económica
                                    de tu familia en caso de fallecimiento del asegurado
                                    u otro evento cubierto.
                                </p>
                                <div id="cuadratura-vida">&nbsp;</div>
                                <!--<hr class="hrpdesdeup" style="background-color:#e6281f;width:80%;">
                                <p class="subseguropdesde">Desde S/. 230.45 mensual **</p>
                                <hr class="hrpdesdedown" style="background-color:#e6281f;width:80%;">-->
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="seguroDesglose('vida','vidatemporaltotal');setTrazabilidad( 'mas-info','vida','vidatemporaltotal','n-a','seguros-vida' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#e6281f;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href=" {{$link_vidatemporaltotal}} ">
                                            <button onclick="setTrazabilidad( 'cotizar','vida','vidatemporaltotal','n-a','seguros-vida' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#e6281f;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end subsegurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide vida temporal -->



        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->



    </div><!-- end section -->
</div><!-- end fullpage -->

@endsection
