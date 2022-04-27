@extends('layouts.app', [
'class' => '',
'elementActive' => 'dashboard',
'breadcumb' => 'visible',
'breadcumb1' => 'Seguros De Salud',
'breadcumbsub' => 'none',
'breadcumb2' => '',
'rsubseguro' => 'salud',
'subseguro' => ''
])


@section('content')
<div id="fullpage">
    <div class="section" id="saludindex" data-anchor="saludindex">


        <!-- ========================== Columnas de seguros solo para desktop ========================== -->
        <div id="seguros-desktop">
            <div class="container">
                <div class="row center-row">
                    <!-- ====================================================
                            Red Preferencial Desktop
                        ==================================================== -->
                    <div class="col-md-3 col-md-offset-2 csd">
                        <div class="text-center p-2 subsegurocontent" style="background-color:#EDEDED;">
                            <div class="marco-segurocontent" style="border-color: #42C1AD;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-subsegurocontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="subsegurostittle">Red</span></p>
                                    <p><span class="subsegurosname salud">Preferencial</span></p>
                                    <hr style="background-color:#42C1AD;width:80%;">
                                    <p class="subsegurodesc">
                                        Seguro de salud que brinda cobertura
                                        hasta por $ 4,000,000 anuales
                                        en atenciones de clínicas privadas
                                        del Perú y del extranjero.
                                    </p>
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="seguroDesglose('salud','redpreferencial');setTrazabilidad( 'mas-info','salud','redpreferencial','n-a','seguros-salud' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#42C1AD;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a target="_blank" href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial:boton">
                                                <button onclick="setTrazabilidad( 'cotizar','salud','redpreferencial','n-a','seguros-salud')" type="button" class="btn btn-cotizar-subseguro" style="background-color:#42C1AD;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 1 -->

                    <!-- ====================================================
                            Full Salud Desktop
                        ==================================================== -->
                    <div class="col-md-3 col-md-offset-2 csd">
                        <div class="text-center p-2 subsegurocontent" style="background-color:#EDEDED;">
                            <div class="marco-segurocontent" style="border-color: #42C1AD;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-subsegurocontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="subsegurostittle">Full</span></p>
                                    <p><span class="subsegurosname salud">Salud</span></p>
                                    <hr style="background-color:#42C1AD;width:80%;">
                                    <p class="subsegurodesc">
                                        Es un seguro de salud que brinda cobertura
                                        hasta por S/ 9,600,000 anuales en atenciones
                                        en clínicas privadas de Lima y Provincias.
                                    </p>
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="seguroDesglose('salud','fullsalud');setTrazabilidad( 'mas-info','salud','fullsalud','n-a','seguros-salud')" type="button" class="btn btn-masinfo-subseguro" style="background-color:#42C1AD;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a target="_blank" href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-full-salud:boton">
                                                <button onclick="setTrazabilidad( 'cotizar','salud','fullsalud','n-a','seguros-salud')" type="button" class="btn btn-cotizar-subseguro" style="background-color:#42C1AD;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 2 -->

                    <!-- ====================================================
                            Red médica Desktop
                        ==================================================== -->
                    <div class="col-md-3 col-md-offset-2 csd">
                        <div class="text-center p-2 subsegurocontent" style="background-color:#EDEDED;">
                            <div class="marco-segurocontent" style="border-color: #42C1AD;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-subsegurocontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="subsegurostittle">Red</span></p>
                                    <p><span class="subsegurosname salud">Médica</span></p>
                                    <hr style="background-color:#42C1AD;width:80%;">
                                    <p class="subsegurodesc">
                                        Seguro de salud que brinda cobertura
                                        hasta por S/ 5,000,000 anuales en
                                        atenciones de clínicas privadas de
                                        Lima y Provincias.
                                    </p>
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="seguroDesglose('salud','redmedica');setTrazabilidad( 'mas-info','salud','redmedica','n-a','seguros-salud')" type="button" class="btn btn-masinfo-subseguro" style="background-color:#42C1AD;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a target="_blank" href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-medica:boton">
                                                <button onclick="setTrazabilidad( 'cotizar','salud','redmedica','n-a','seguros-salud');" type="button" class="btn btn-cotizar-subseguro" style="background-color:#42C1AD;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 3 -->

                    <!-- ====================================================
                            Red Preferente Desktop
                        ==================================================== -->
                    <div class="col-md-3 col-md-offset-2 csd">
                        <div class="text-center p-2 subsegurocontent" style="background-color:#EDEDED;">
                            <div class="marco-segurocontent" style="border-color: #42C1AD;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-subsegurocontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="subsegurostittle">Red</span></p>
                                    <p><span class="subsegurosname salud">Preferente</span></p>
                                    <hr style="background-color:#42C1AD;width:80%;">
                                    <p class="subsegurodesc">
                                        Seguro de salud que brinda cobertura
                                        hasta por S/ 3,200,000 anuales en
                                        atenciones de clínicas privadas de
                                        Lima y Provincias.
                                    </p>
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="seguroDesglose('salud','redpreferente');setTrazabilidad( 'mas-info','salud','redpreferente','n-a','seguros-salud')" type="button" class="btn btn-masinfo-subseguro" style="background-color:#42C1AD;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a target="_blank" href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente:boton">
                                                <button onclick="setTrazabilidad( 'cotizar','salud','redpreferente','n-a','seguros-salud')" type="button" class="btn btn-cotizar-subseguro" style="background-color:#42C1AD;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 4 -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end seguros-desktop -->

        <!-- ========================================================================================== -->
        <!-- ========================================================================================== -->



        <!-- ========================== Columnas de subseguros solo para Mobile ========================== -->
        <!-- ====================================================
                Red Preferencial Mobile
             ==================================================== -->
        <div class="slide" id="redpreferencial">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 subsegurocontent" style="background-color:#EDEDED;">
                        <div class="marco-subsegurocontent" style="border-color: #42C1AD;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-subsegurocontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="subsegurostittle">Red</span>
                                    <br><span class="subsegurosname salud">Preferencial</span></p>
                                <hr style="background-color:#42C1AD;width:80%;">
                                <p class="subsegurodesc">
                                    Seguro de salud que brinda cobertura
                                    hasta por $ 4,000,000 anuales
                                    en atenciones de clínicas privadas
                                    del Perú y del extranjero.
                                </p>
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="seguroDesglose('salud','redpreferencial');setTrazabilidad( 'mas-info','salud','redpreferencial','n-a','seguros-salud')" type="button" class="btn btn-masinfo-subseguro" style="background-color:#42C1AD;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a target="_blank" href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial:boton">
                                            <button onclick="setTrazabilidad( 'cotizar','salud','redpreferencial','n-a','seguros-salud')" type="button" class="btn btn-cotizar-subseguro" style="background-color:#42C1AD;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end subsegurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide red preferencial -->

        <!-- ====================================================
                Full Salud Mobile
             ==================================================== -->
        <div class="slide" id="fullsalud">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 subsegurocontent" style="background-color:#EDEDED;">
                        <div class="marco-subsegurocontent" style="border-color: #42C1AD;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-subsegurocontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="subsegurostittle">Full</span>
                                    <br><span class="subsegurosname salud">Salud</span></p>
                                <hr style="background-color:#42C1AD;width:80%;">
                                <p class="subsegurodesc">
                                    Es un seguro de salud que brinda cobertura
                                    hasta por S/ 9,600,000 anuales en atenciones
                                    en clínicas privadas de Lima y Provincias.
                                </p>
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="seguroDesglose('salud','fullsalud');setTrazabilidad( 'mas-info','salud','fullsalud','n-a','seguros-salud')" type="button" class="btn btn-masinfo-subseguro" style="background-color:#42C1AD;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a target="_blank" href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-full-salud:boton">
                                            <button onclick="setTrazabilidad( 'cotizar','salud','fullsalud','n-a','seguros-salud')" type="button" class="btn btn-cotizar-subseguro" style="background-color:#42C1AD;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end subsegurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide full salud -->

        <!-- ====================================================
                Red Médica Mobile
             ==================================================== -->
        <div class="slide" id="redmedica">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 subsegurocontent" style="background-color:#EDEDED;">
                        <div class="marco-subsegurocontent" style="border-color: #42C1AD;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-subsegurocontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="subsegurostittle">Red</span>
                                    <br><span class="subsegurosname salud">Médica</span></p>
                                <hr style="background-color:#42C1AD;width:80%;">
                                <p class="subsegurodesc">
                                    Seguro de salud que brinda cobertura
                                    hasta por S/ 5,000,000 anuales en
                                    atenciones de clínicas privadas de
                                    Lima y Provincias.
                                </p>
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="seguroDesglose('salud','redmedica');setTrazabilidad( 'mas-info','salud','redmedica','n-a','seguros-salud')" type="button" class="btn btn-masinfo-subseguro" style="background-color:#42C1AD;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a target="_blank" href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-medica:boton">
                                            <button onclick="setTrazabilidad( 'cotizar','salud','redmedica','n-a','seguros-salud')" type="button" class="btn btn-cotizar-subseguro" style="background-color:#42C1AD;">Cotizar</button>
                                            <a />
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end subsegurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide red médica -->

        <!-- ====================================================
                Red Preferente Mobile
             ==================================================== -->
        <div class="slide" id="redpreferente">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 subsegurocontent" style="background-color:#EDEDED;">
                        <div class="marco-subsegurocontent" style="border-color: #42C1AD;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-subsegurocontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="subsegurostittle">Red</span>
                                    <br><span class="subsegurosname salud">Preferente</span></p>
                                <hr style="background-color:#42C1AD;width:80%;">
                                <p class="subsegurodesc">
                                    Seguro de salud que brinda cobertura
                                    hasta por S/ 3,200,000 anuales en
                                    atenciones de clínicas privadas de
                                    Lima y Provincias.
                                </p>
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="seguroDesglose('salud','redpreferente');setTrazabilidad( 'mas-info','salud','redpreferente','n-a','seguros-salud')" onclick="seguroDesglose('salud','redpreferente')" type="button" class="btn btn-masinfo-subseguro" style="background-color:#42C1AD;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a target="_blank" href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente:boton">
                                            <button onclick="setTrazabilidad( 'cotizar','salud','redpreferente','n-a','seguros-salud')" type="button" class="btn btn-cotizar-subseguro" style="background-color:#42C1AD;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end subsegurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide red preferente -->




        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->


        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->



    </div><!-- end section -->
</div><!-- end fullpage -->

@endsection
