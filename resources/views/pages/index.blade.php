@extends('layouts.app', [
'class' => '',
'elementActive' => 'dashboard',
'breadcumb' => 'none',
'breadcumb1' => '',
'breadcumbsub' => 'none',
'breadcumb2' => '',
'rsubseguro' => '',
'subseguro' => ''
])

@section('content')


<style>
    /* Style for our header texts
	* --------------------------------------- */
    h1 {
        font-size: 5em;
        font-family: arial, helvetica;
        color: #fff;
        margin: 0;
        padding: 0;
    }

    .intro p {
        color: #fff;
    }

    /* Centered texts in each section
	* --------------------------------------- */
    .section {
        text-align: center;
    }

    #footertext{
        display: none !important;
    }

</style>



<div id="fullpage">
    <div class="section" id="portada" data-anchor="portada">
        <div class="cuadratura-portada">
            <img src="{{ asset('images') }}/logo/LogoRimacChicoBlanco.svg" id="logorimacmobile" class="d-lg-none">
            <?php //print_r($cliente[0]) ?>
            <h2 class="welcome">¡Bienvenido!</h2>
            <a id="comencemosmobile"><button onclick="setTrazabilidad( 'click-comencemos','n-a','n-a','n-a','inicio' );noRepeatComencemos()" type="button" class="btn btn-welcome">Comencemos</button></a>
            <a id="comencemosdesktop"><button onclick="setTrazabilidad('click-comencemos','n-a','n-a','n-a','inicio' );noRepeatComencemos()" type="button" class="btn btn-welcome">Comencemos</button></a>
            <div class="lato" id="footer">Todos los Derechos Reservados 2020 ®</div>
        </div><!-- end cuadratura-portada onlydesktop-->
    </div><!-- end section portada -->

    <!-- ========================== Sección elige seguro ========================== -->
    <div class="section" id="selectplan" data-anchor="selectplan">

        <div class="row" id="selectseguro">
            <div class="col ">
                <h2 class="mt-5">Elige un seguro <br>para comenzar</h2>
            </div>
        </div>
        <!-- ========================== Columnas de seguros solo para desktop ========================== -->
        <div id="seguros-desktop">
            <div class="container">
                <div class="row">
                    <!-- ====================================================
                            SEGURO VIDA DESKTOP
                        ==================================================== -->
                    <div class="col-sm csd">
                        <div class="text-center p-2 segurocontent" style="background-color:#EDEDED;">
                            <div class="marco-segurocontent" style="border-color: #e6281f;">
                                <!-- ========================== Icono ========================== -->
                                <img class="seguro-vida-icon" src="{{ asset('images') }}/icons/seguros/IconoSeguroVida.svg">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-segurocontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurostittle">Seguros</span></p>
                                    <p><span class="segurosname vida">VIDA</span></p>
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{ route('seguro.index',['seguro' => 'vida']) }}">
                                                <button  onclick="setTrazabilidad( 'mas-info','vida','n-a','n-a','inicio' )" type="button" class="btn btn-masinfo-selectplan" style="background-color:#e6281f;">Más información</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a target="_blank" href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida:boton">
                                            <button onclick="setTrazabilidad( 'cotizar','vida','n-a','n-a','inicio' )"  type="button" class="btn btn-cotizar-selectplan" style="background-color:#e6281f;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 1 -->

                    <!-- ====================================================
                            SEGURO SALUD DESKTOP
                        ==================================================== -->
                    <div class="col-sm csd">
                        <div class="text-center p-2 segurocontent" style="background-color:#EDEDED">
                            <div class="marco-segurocontent" style="border-color: #42C1AD;">
                                <div class="cuadratura-segurocontent">
                                    <!-- ========================== Icono ========================== -->
                                    <img class="seguro-salud-icon" src="{{ asset('images') }}/icons/seguros/IconoSeguroSalud.svg">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurostittle">Seguros</span></p>
                                    <p><span class="segurosname salud">SALUD</span></p>
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{ route('seguro.index',['seguro' => 'salud']) }}">
                                                <button onclick="setTrazabilidad( 'mas-info','salud','n-a','n-a','inicio' )"  type="button" class="btn btn-masinfo-selectplan" style="background-color:#42C1AD;">Más información</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a target="_blank" href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud:boton">
                                            <button onclick="setTrazabilidad( 'cotizar','salud','n-a','n-a','inicio' )"  type="button" class="btn btn-cotizar-selectplan" style="background-color:#42C1AD;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 2 -->

                    <!-- ====================================================
                        SEGURO VEHICULAR DESKTOP
                        ==================================================== -->
                    <div class="col-sm csd">
                        <div class="text-center p-2 segurocontent" style="background-color:#EDEDED">
                            <div class="marco-segurocontent" style="border-color: #FFC700;">
                                <div class="cuadratura-segurocontent">
                                    <!-- ========================== Icono ========================== -->
                                    <img class="seguro-vehicular-icon" src="{{ asset('images') }}/icons/seguros/IconoSeguroAuto.svg">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurostittle">Seguros</span></p>
                                    <p><span class="segurosname vehicular">VEHICULAR</span></p>
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{ route('seguro.index',['seguro' => 'vehicular']) }}">
                                            <button onclick="setTrazabilidad( 'mas-info','vehicular','n-a','n-a','inicio' )"  type="button" class="btn btn-masinfo-selectplan" style="background-color:#FFC700;">Más información</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular:boton">
                                            <button onclick="setTrazabilidad( 'cotizar','vehicular','n-a','n-a','inicio' )"  type="button" class="btn btn-cotizar-selectplan" style="background-color:#FFC700;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 3 -->
                </div><!-- end row -->
            </div><!-- end container -->

        </div>
        <!-- ========================================================================================== -->
        <!-- ========================================================================================== -->

        <!-- ========================== Columnas de seguros solo para Mobile ========================== -->

        <!-- ====================================================
                SEGURO VIDA MOBILE
             ==================================================== -->
        <div class="slide" id="vida">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 segurocontent" style="background-color:#EDEDED;">
                        <div class="marco-segurocontent" style="border-color: #e6281f;">
                            <!-- ========================== Icono ========================== -->
                            <img class="seguro-vida-icon" src="{{ asset('images') }}/icons/seguros/IconoSeguroVida.svg">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-segurocontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurostittle">Seguros</span>
                                    <br><span class="segurosname vida">VIDA</span></p>
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{ route('seguro.index',['seguro' => 'vida']) }}">
                                        <button onclick="setTrazabilidad( 'mas-info','vida','n-a','n-a','inicio' )"  type="button" class="btn btn-masinfo-selectplan" style="background-color:#e6281f;">Más información</button>
                                        </a>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida:boton">
                                        <button onclick="setTrazabilidad( 'cotizar','vida','n-a','n-a','inicio' )"  type="button" class="btn btn-cotizar-selectplan" style="background-color:#e6281f;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end segurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide vida -->
        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->

        <!-- ====================================================
                SEGURO SALUD MOBILE
             ==================================================== -->
        <div class="slide" id="salud">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 text-center text-md-left p-2 segurocontent" style="background-color:#EDEDED">
                        <div class="marco-segurocontent" style="border-color: #42C1AD;">
                            <div class="cuadratura-segurocontent">
                                <!-- ========================== Icono ========================== -->
                                <img class="seguro-salud-icon" src="{{ asset('images') }}/icons/seguros/IconoSeguroSalud.svg">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurostittle">Seguros</span>
                                    <br><span class="segurosname salud">SALUD</span></p>
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{ route('seguro.index',['seguro' => 'salud']) }}">
                                        <button onclick="setTrazabilidad( 'mas-info','salud','n-a','n-a','inicio' )"  type="button" class="btn btn-masinfo-selectplan" style="background-color:#42C1AD;">Más información</button>
                                        </a>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a target="_blank" href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud:boton">
                                            <button onclick="setTrazabilidad( 'cotizar','salud','n-a','n-a','inicio' )"  type="button" class="btn btn-cotizar-selectplan" style="background-color:#42C1AD;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end segurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide vida -->
        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->

        <!-- ====================================================
                SEGURO VEHICULAR MOBILE
             ==================================================== -->
        <div class="slide" id="vehicular">
            <div class="container">
                <div class="row ">
                    <div class="col-md-12 text-center text-md-left p-2 segurocontent" style="background-color:#EDEDED">
                        <div class="marco-segurocontent" style="border-color: #FFC700;">
                            <div class="cuadratura-segurocontent">
                                <!-- ========================== Icono ========================== -->
                                <img class="seguro-vehicular-icon" src="{{ asset('images') }}/icons/seguros/IconoSeguroAuto.svg">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurostittle">Seguros</span>
                                    <br><span class="segurosname vehicular">VEHICULAR</span></p>
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{ route('seguro.index',['seguro' => 'vehicular']) }}">
                                        <button onclick="setTrazabilidad( 'mas-info','vehicular','n-a','n-a','inicio' )"  type="button" class="btn btn-masinfo-selectplan" style="background-color:#FFC700;">Más información</button>
                                        </a>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular:boton">
                                        <button onclick="setTrazabilidad( 'cotizar','vehicular','n-a','n-a','inicio' )"  type="button" class="btn btn-cotizar-selectplan" style="background-color:#FFC700;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end segurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide vida -->
        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->






    </div><!-- end #fullpage -->




    @endsection
