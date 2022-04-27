@if(isset($subseguro))

@switch($subseguro)
@case("redpreferencial")
<?php 
$subsegurobc = "Red Preferencial";
$link_beneficios = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial-beneficios:boton";
$link_coberturas = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial-coberturas:boton";
$link_deducibles = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial-deduycoa:boton";
$link_redes      = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial-redes:boton"; 
?>
<!-- end red preferencial -->
@break
@case("fullsalud")
<?php 
$subsegurobc = "Full Salud";
$link_beneficios = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-full-salud-beneficios:boton";
$link_coberturas = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-full-salud-coberturas:boton";
$link_deducibles = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-full-salud-deduycoa:boton";
$link_redes      = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-full-salud-redes:boton";  
?>
<!-- end full salud -->
@break
@case("redmedica")
<?php 
$subsegurobc = "Red Médica";
$link_beneficios = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-medica-beneficios:boton";
$link_coberturas = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-medica-coberturas:boton";
$link_deducibles = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-medica-deduycoa:boton";
$link_redes      = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-medica-redes:boton"; 
?>
@break
@case("redpreferente")
<?php 
$subsegurobc = "Red Preferente";
$link_beneficios = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-beneficios:boton";
$link_coberturas = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-coberturas:boton";
$link_deducibles = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-deduycoa:boton";
$link_redes      = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-redes:boton"; 
?>
@break
@default
@endswitch
@endif

@extends('layouts.app', [
'class' => '',
'elementActive' => 'dashboard',
'breadcumb' => 'visible',
'breadcumb1' => 'Seguros De Salud',
'breadcumbsub' => 'visible',
'breadcumb2' => $subsegurobc,
/*****************************
* Con la variable rsubseguro
* relleno el route del
* breadcumb en layouts.app,
* de esta manera al retornar
* con la flecha, fullpage
* se situa en el seguro
* antes seleccionado.
****************************/
'rsubseguro' => 'subsalud'
])

@section('content')
<div id="fullpage">
    <div class="section" id="saludindex" data-anchor="saludindex">


        <!-- ========================== Columnas de seguros solo para desktop ========================== -->
        <div id="seguros-desktop">
            <div class="container">
                <div class="row">
                    <!-- ====================================================
                            Beneficios Desktop
                        ==================================================== -->
                    <div class="col-md-3 col-md-offset-2 csd">
                        <div class="text-center p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                            <div class="marco-desglosesegurocontent" style="border-color: #42C1AD;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-segurodesglosecontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurodesglosename salud">Beneficios</span></p>
                                    <hr style="background-color:#42C1AD;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="showDesglose('salud','{{$subseguro}}','beneficios');setTrazabilidad( 'mas-info','salud','{{$subseguro}}','beneficios','desglose-salud')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#42C1AD;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{$link_beneficios}}">
                                                <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','beneficios','desglose-salud')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#42C1AD;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end desglosesegurocontent -->
                    </div><!-- end col 1 -->

                    <!-- ====================================================
                            Coberturas Desktop
                        ==================================================== -->
                    <div class="col-md-3 col-md-offset-2 csd">
                        <div class="text-center p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                            <div class="marco-desglosesegurocontent" style="border-color: #42C1AD;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-segurodesglosecontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurodesglosename salud">Coberturas</span></p>
                                    <hr style="background-color:#42C1AD;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="showDesglose('salud','{{$subseguro}}','coberturas');setTrazabilidad( 'mas-info','salud','{{$subseguro}}','coberturas','desglose-salud')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#42C1AD;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{$link_coberturas}}">
                                                <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','coberturas','desglose-salud')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#42C1AD;">Cotizar</button>
                                                <a />
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end desglosesegurocontent -->
                    </div><!-- end col 2 -->

                    <!-- ====================================================
                            Deducibles y Coaseguros Desktop
                        ==================================================== -->
                    <div class="col-md-3 col-md-offset-2 csd">
                        <div class="text-center p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                            <div class="marco-desglosesegurocontent" style="border-color: #42C1AD;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-segurodesglosecontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurodesglosename salud">Deducibles y Coaseguros</span></p>
                                    <hr style="background-color:#42C1AD;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="showDesglose('salud','{{$subseguro}}','deduciblescoaseguros');setTrazabilidad( 'mas-info','salud','{{$subseguro}}','deduciblescoaseguros','desglose-salud')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#42C1AD;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{$link_deducibles}}">
                                                <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','deduciblescoaseguros','desglose-salud');" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#42C1AD;">Cotizar</button>
                                                <a />
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end desglosesegurocontent -->
                    </div><!-- end col 3 -->

                    <!-- ====================================================
                            Redes Desktop
                        ==================================================== -->
                    <div class="col-md-3 col-md-offset-2 csd">
                        <div class="text-center p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                            <div class="marco-desglosesegurocontent" style="border-color: #42C1AD;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-segurodesglosecontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurodesglosename salud">Redes</span></p>
                                    <hr style="background-color:#42C1AD;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="showDesglose('salud','{{$subseguro}}','redes');setTrazabilidad( 'mas-info','salud','{{$subseguro}}','redes','desglose-salud')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#42C1AD;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{$link_redes}}">
                                                <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','redes','desglose-salud')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#42C1AD;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end desglosesegurocontent -->
                    </div><!-- end col 4 -->

                </div><!-- end row -->
            </div><!-- end container -->

        </div>

        <!-- ========================================================================================== -->
        <!-- ========================================================================================== -->



        <!-- ========================== Columnas de segurodesglose solo para Mobile ========================== -->
        <!-- ====================================================
                Beneficios Mobile
             ==================================================== -->
        <div class="slide" id="beneficios">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                        <div class="marco-segurodesglosecontent" style="border-color: #42C1AD;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-segurodesglosecontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurodesglosename salud">Beneficios</span></p>
                                <hr style="background-color:#42C1AD;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="showDesglose('salud','{{$subseguro}}','beneficios');setTrazabilidad( 'mas-info','salud','{{$subseguro}}','beneficios','desglose-salud')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#42C1AD;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{$link_beneficios}}">
                                            <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','beneficios','desglose-salud')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#42C1AD;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end segurodesglosecontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide red preferencial -->

        <!-- ====================================================
                Coberturas Mobile
             ==================================================== -->
        <div class="slide" id="coberturas">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                        <div class="marco-segurodesglosecontent" style="border-color: #42C1AD;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-segurodesglosecontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurodesglosename salud">Coberturas</span></p>
                                <hr style="background-color:#42C1AD;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="showDesglose('salud','{{$subseguro}}','coberturas');setTrazabilidad( 'mas-info','salud','{{$subseguro}}','coberturas','desglose-salud')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#42C1AD;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{$link_coberturas}}">
                                            <button onclick="setTrazabilidad( 'mas-info','salud','{{$subseguro}}','coberturas','desglose-salud')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#42C1AD;">Cotizar</button>
                                            <a />
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end segurodesglosecontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide full salud -->

        <!-- ====================================================
                Deducibles y Coaseguros Mobile
             ==================================================== -->
        <div class="slide" id="deduciblecoaseguro">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                        <div class="marco-segurodesglosecontent" style="border-color: #42C1AD;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-segurodesglosecontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurodesglosename salud name-doble">Deducibles y Coaseguros</span></p>
                                <hr style="background-color:#42C1AD;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="showDesglose('salud','{{$subseguro}}','deduciblescoaseguros');setTrazabilidad( 'mas-info','salud','{{$subseguro}}','deduciblescoaseguros','desglose-salud')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#42C1AD;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{$link_deducibles}}">
                                            <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','deduciblescoaseguros','desglose-salud')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#42C1AD;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end segurodesglosecontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide red médica -->

        <!-- ====================================================
                Redes Mobile
             ==================================================== -->
        <div class="slide" id="redes">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                        <div class="marco-segurodesglosecontent" style="border-color: #42C1AD;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-segurodesglosecontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurodesglosename salud">Redes</span></p>
                                <hr style="background-color:#42C1AD;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="showDesglose('salud','{{$subseguro}}','redes');setTrazabilidad( 'mas-info','salud','{{$subseguro}}','redes','desglose-salud')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#42C1AD;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{$link_redes}}">
                                            <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','redes','desglose-salud')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#42C1AD;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end segurodesglosecontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide red preferente -->




        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->


        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->



    </div><!-- end section -->
</div><!-- end fullpage -->

<style>
    @media (max-width: 850px) {
        .breadcumb0 {
            display: none;
        }

        .breadarrow {
            display: none;
        }
    }

</style>


@endsection
