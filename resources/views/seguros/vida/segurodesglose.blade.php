<!-- Desglose Seguros Vida -->
@if(isset($subseguro))

@switch($subseguro)
@case("vidaflexible")
<?php 
$subsegurobc = "Vida Flexible";
$link_cliente = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-flexible-cliente:boton";
$link_ventajas= "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-flexible-ventaja:boton";
$link_cobertura = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-flexible-cobertura:boton";
?>
<!-- end red preferencial -->
@break
@case("segurouniversitario")
<?php 
$subsegurobc = "Seguro Universitario";
$link_cliente = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-seguro-universitario-cliente:boton";
$link_ventajas= "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-seguro-universitario-ventaja:boton";
$link_cobertura = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-seguro-universitario-cobertura:boton";
?>
<!-- end full salud -->
@break
@case("vidatemporaltotal")
<?php 
$subsegurobc = "Vida Temporal Total";
$link_cliente = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-temporal-total-cliente:boton";
$link_ventajas= "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-temporal-total-ventaja:boton";
$link_cobertura = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-temporal-total-cobertura:boton";
?>
@break
@default
@endswitch
@endif

@extends('layouts.app', [
'class' => '',
'elementActive' => 'dashboard',
'breadcumb' => 'visible',
'breadcumb1' => 'Seguros De Vida',
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
'rsubseguro' => 'subvida'
])

@section('content')
<div id="fullpage">
    <div class="section" id="saludindex" data-anchor="saludindex">


        <!-- ========================== Columnas de seguros solo para desktop ========================== -->
        <div id="seguros-desktop">
            <div class="container">
                <div class="row">
                    <!-- ====================================================
                            Cliente Desktop
                        ==================================================== -->
                    <div class="col-md-4 col-md-offset-2 csd">
                        <div class="text-center p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                            <div class="marco-desglosesegurocontent" style="border-color: #e6281f;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-segurodesglosecontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurodesglosename vida">Cliente</span></p>
                                    <hr style="background-color:#e6281f;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="showDesglose('vida','{{$subseguro}}','cliente');setTrazabilidad( 'mas-info','vida','{{$subseguro}}','cliente','desglose-vida')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#e6281f;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{$link_cliente}}">
                                                <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','cliente','desglose-vida')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#e6281f;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end desglosesegurocontent -->
                    </div><!-- end col 1 -->

                    <!-- ====================================================
                            Ventajas Desktop
                        ==================================================== -->
                    <div class="col-md-4 col-md-offset-2 csd">
                        <div class="text-center p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                            <div class="marco-desglosesegurocontent" style="border-color: #e6281f;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-segurodesglosecontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurodesglosename vida">Ventajas</span></p>
                                    <hr style="background-color:#e6281f;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="showDesglose('vida','{{$subseguro}}','ventajas');setTrazabilidad( 'mas-info','vida','{{$subseguro}}','ventajas','desglose-vida')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#e6281f;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{$link_ventajas}}">
                                                <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','ventajas','desglose-vida')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#e6281f;">Cotizar</button>
                                                <a />
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end desglosesegurocontent -->
                    </div><!-- end col 2 -->

                    <!-- ====================================================
                           Cobertura Desktop
                        ==================================================== -->
                    <div class="col-md-4 col-md-offset-2 csd">
                        <div class="text-center p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                            <div class="marco-desglosesegurocontent" style="border-color: #e6281f;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-segurodesglosecontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="segurodesglosename vida"><?php if($subseguro == "vidatemporaltotal"){echo "Coberturas y otros";}else{echo "Cobertura";} ?></span></p>
                                    <hr style="background-color:#e6281f;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="showDesglose('vida','{{$subseguro}}','cobertura');setTrazabilidad( 'mas-info','vida','{{$subseguro}}','cobertura','desglose-vida')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#e6281f;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="{{$link_cobertura}}">
                                                <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','cobertura','desglose-vida')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#e6281f;">Cotizar</button>
                                                <a />
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
                Cliente Mobile
             ==================================================== -->
        <div class="slide" id="beneficios">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                        <div class="marco-segurodesglosecontent" style="border-color: #e6281f;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-segurodesglosecontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurodesglosename vida">Cliente</span></p>
                                <hr style="background-color:#e6281f;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="showDesglose('vida','{{$subseguro}}','cliente');setTrazabilidad( 'mas-info','vida','{{$subseguro}}','cliente','desglose-vida')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#e6281f;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{$link_cliente}}">
                                            <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','cliente','desglose-vida')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#e6281f;">Cotizar</button>
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
                Ventajas Mobile
             ==================================================== -->
        <div class="slide" id="ventajas">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                        <div class="marco-segurodesglosecontent" style="border-color: #e6281f;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-segurodesglosecontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurodesglosename vida">Ventajas</span></p>
                                <hr style="background-color:#e6281f;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="showDesglose('vida','{{$subseguro}}','ventajas');setTrazabilidad( 'mas-info','vida','{{$subseguro}}','ventajas','desglose-vida')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#e6281f;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{$link_ventajas}}">
                                            <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','ventajas','desglose-vida')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#e6281f;">Cotizar</button>
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
                Cobertura Mobile
             ==================================================== -->
        <div class="slide" id="cobertura">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 segurodesglosecontent" style="background-color:#EDEDED;">
                        <div class="marco-segurodesglosecontent" style="border-color: #e6281f;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-segurodesglosecontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="segurodesglosename vida"><?php if($subseguro == "vidatemporaltotal"){echo "Coberturas y otros";}else{echo "Cobertura";} ?></span></p>
                                <hr style="background-color:#e6281f;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="showDesglose('vida','{{$subseguro}}','cobertura');setTrazabilidad( 'mas-info','vida','{{$subseguro}}','cobertura','desglose-vida')" type="button" class="btn btn-masinfo-segurodesglose" style="background-color:#e6281f;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="{{$link_cobertura}}">
                                            <button onclick="setTrazabilidad( 'mas-info','vida','{{$subseguro}}','cobertura','desglose-vida')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#e6281f;">Cotizar</button>
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
            display: none;
        }

        .breadarrow {
            display: none;
        }
    }

</style>


@endsection
