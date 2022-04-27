@if(isset($subseguro))

@switch($subseguro)
@case("premierplatinum")
<?php 
$subsegurobc = "Premier Platinum";
$link_coberturas = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-platinum-coberturas:boton";
$link_deducibles = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-platinum-deducibles:boton";
$link_beneficios = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-platinum-beneficios:boton";
//$link_redes      = "https://corredores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial-redes:boton"; 
?><!-- end Premier Platinum -->
@break
@case("premieroro")
<?php 
$subsegurobc = "Premier Oro";
$link_coberturas = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-oro-coberturas:boton";
$link_deducibles = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-oro-deducibles:boton";
$link_beneficios = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-oro-beneficios:boton";
//$link_redes      = "https://corfullores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-full-salud-fulles:boton";  
?><!-- end Premier Oro -->
@break
@case("premierplata")
<?php 
$subsegurobc = "Premier Plata";
$link_coberturas = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-plata-coberturas:boton";
$link_deducibles = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-plata-deducibles:boton";
$link_beneficios = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-plata-beneficios:boton";
//$link_redes      = "https://corredores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-medica-redes:boton"; 
?>
@break
@case("pagoporkilometros")
<?php 
$subsegurobc = "Pago por Kilómetros";
$link_coberturas = "https://corredores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-coberturas:boton";
$link_deducibles = "https://corredores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-deduycoa:boton";
$link_beneficios = "https://corredores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-beneficios:boton";
//$link_redes      = "https://corredores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-redes:boton"; 
?>
@break
@default
@endswitch
@endif

@extends('layouts.app', [
'class' => '',
'elementActive' => 'dashboard',
'breadcumb' => 'visible',
'breadcumb1' => 'Seguros Vehicular',
'breadcumbsub' => 'visible',
'breadcumb2' => $subsegurobc,
//'subseguro' => '',
/*****************************
 * Con la variable rsubseguro
 * relleno el route del
 * breadcumb en layouts.app,
 * de esta manera al retornar
 * con la flecha, fullpage
 * se situa en el seguro
 * antes seleccionado.
 ****************************/
'rsubseguro' => 'subvehicular'
])

@section('content')
<div id="fullpage">
    <div class="section" id="vehicularindex" data-anchor="vehicularindex">


        <!-- ========================== Columnas de seguros solo para desktop ========================== -->
        <div id="seguros-desktop">
            <div class="container">
                <div class="row">
                    <!-- ====================================================
                            Coberturas Desktop
                        ==================================================== -->
                    <div class="col-md-4 col-md-offset-2 csd">
                        <div class="text-center p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                            <div class="marco-desglosesegurocontent" style="border-color: #FFC700;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-segurodesglosecontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurodesglosename vehicular">Coberturas</span></p>
                                    <hr style="background-color:#FFC700;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="showDesglose('vehicular','{{$subseguro}}','coberturas');setTrazabilidad( 'mas-info','vehicular','{{$subseguro}}','coberturas','desglose-vehicular')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#FFC700;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{$link_beneficios}}">
                                            <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','coberturas','desglose-vehicular')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#FFC700;">Cotizar</button>
                                        </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end desglosesegurocontent -->
                    </div><!-- end col 1 -->

                    <!-- ====================================================
                            Deducibles Desktop
                        ==================================================== -->
                    <div class="col-md-4 col-md-offset-2 csd">
                        <div class="text-center p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                            <div class="marco-desglosesegurocontent" style="border-color: #FFC700;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-segurodesglosecontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurodesglosename vehicular">Deducibles</span></p>
                                    <hr style="background-color:#FFC700;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="showDesglose('vehicular','{{$subseguro}}','deducibles');setTrazabilidad( 'mas-info','vehicular','{{$subseguro}}','deducibles','desglose-vehicular')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#FFC700;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{$link_coberturas}}">
                                            <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','deducibles','desglose-vehicular')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#FFC700;">Cotizar</button>
                                            <a/>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end desglosesegurocontent -->
                    </div><!-- end col 2 -->

                    <!-- ====================================================
                            Beneficios Desktop
                        ==================================================== -->
                    <div class="col-md-4 col-md-offset-2 csd">
                        <div class="text-center p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                            <div class="marco-desglosesegurocontent" style="border-color: #FFC700;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-segurodesglosecontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurodesglosename vehicular">Beneficios</span></p>
                                    <hr style="background-color:#FFC700;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="showDesglose('vehicular','{{$subseguro}}','beneficios');setTrazabilidad( 'mas-info','vehicular','{{$subseguro}}','beneficios','desglose-vehicular')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#FFC700;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{$link_deducibles}}">
                                            <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','beneficios','desglose-vehicular')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#FFC700;">Cotizar</button>
                                            <a/>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end desglosesegurocontent -->
                    </div><!-- end col 3 -->

                </div><!-- end row -->
            </div><!-- end container -->

        </div>

        <!-- ========================================================================================== -->
        <!-- ========================================================================================== -->



        <!-- ========================== Columnas de segurodesglose solo para Mobile ========================== -->
        <!-- ====================================================
                Coberturas Mobile
             ==================================================== -->
        <div class="slide" id="coberturas">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                        <div class="marco-segurodesglosecontent" style="border-color: #FFC700;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-segurodesglosecontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurodesglosename vehicular">Coberturas</span></p>
                                <hr style="background-color:#FFC700;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="showDesglose('vehicular','{{$subseguro}}','coberturas');setTrazabilidad( 'mas-info','vehicular','{{$subseguro}}','coberturas','desglose-vehicular')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#FFC700;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{$link_beneficios}}">
                                        <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','coberturas','desglose-vehicular')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#FFC700;">Cotizar</button>
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
                Deducibles Mobile
             ==================================================== -->
        <div class="slide" id="deducibles">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                        <div class="marco-segurodesglosecontent" style="border-color: #FFC700;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-segurodesglosecontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurodesglosename vehicular">Deducibles</span></p>
                                <hr style="background-color:#FFC700;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="showDesglose('vehicular','{{$subseguro}}','deducibles');setTrazabilidad( 'mas-info','vehicular','{{$subseguro}}','deducibles','desglose-vehicular')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#FFC700;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{$link_coberturas}}">
                                        <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','deducibles','desglose-vehicular')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#FFC700;">Cotizar</button>
                                        <a/>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end segurodesglosecontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide full salud -->

        <!-- ====================================================
                Beneficios Mobile
             ==================================================== -->
        <div class="slide" id="beneficios">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                        <div class="marco-segurodesglosecontent" style="border-color: #FFC700;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-segurodesglosecontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurodesglosename vehicular name-doble">Beneficios</span></p>
                                <hr style="background-color:#FFC700;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="showDesglose('vehicular','{{$subseguro}}','beneficios');setTrazabilidad( 'mas-info','vehicular','{{$subseguro}}','beneficios','desglose-vehicular')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#FFC700;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{$link_deducibles}}">
                                        <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','beneficios','desglose-vehicular')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#FFC700;">Cotizar</button>
                                    </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end segurodesglosecontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide red médica -->

        




        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->


        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->



    </div><!-- end section -->
</div><!-- end fullpage -->

<style>
    @media (max-width: 850px) {
        .breadcumb0 {
            display: none ;
        }

        .breadarrow {
            display: none ;
        }
    }

</style>


@endsection