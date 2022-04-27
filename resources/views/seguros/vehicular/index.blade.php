<!-- Index Seguros Vida -->

@extends('layouts.app', [
'class' => '',
'elementActive' => 'dashboard',
'breadcumb' => 'visible',
'breadcumb1' => 'Seguros Vehicular',
'breadcumbsub' => 'none',
'breadcumb2' => '',
'rsubseguro' => 'vehicular',
'subseguro' => ''
])


@section('content')
<div id="fullpage">
    <div class="section" id="vehicularindex" data-anchor="vehicularindex">


        <!-- ========================== Columnas de seguros solo para desktop ========================== -->
        <div id="seguros-desktop-vehicular">
            <div class="container-fluid" style="max-width: 95vw;">
                <div class="row">
                    <!-- ====================================================
                            Premier Platinum Desktop
                        ==================================================== -->
                    <div class="col-4 col-md-3 col-12 csd">
                        <div class="text-center p-2 subsegurocontent" style="background-color:#EDEDED;">
                            <div class="marco-segurocontent" style="border-color: #FFC700;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-subsegurocontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="subsegurostittle">Premier</span></p>
                                    <p><span class="subsegurosname vehicular">Platinum</span></p>
                                    <hr style="background-color:#FFC700;width:80%;">
                                    <p class="subsegurodesc descvehicularlarga" style="">
                                        Mejoramos los beneficios del Premier Oro + Soat
                                        y Revisión técnica + 10% de deducible en
                                        talleres concesionarios

                                    </p>
                                    <hr class="hrpdesdeup-vehicular" style="background-color:#FFC700;width:80%;">
                                    <p class="subseguropdesde">Desde $800 anuales *</p>
                                    <hr class="hrpdesdedown-vehicular" style="background-color:#FFC700;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="seguroDesglose('vehicular','premierplatinum');setTrazabilidad( 'mas-info','vehicular','premierplatinum','n-a','seguros-vehicular' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#FFC700;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="https://corredores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial:boton
                                            ">
                                                <button onclick="setTrazabilidad( 'cotizar','vehicular','premierplatinum','n-a','seguros-vehicular' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#FFC700;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 1 -->

                    <!-- ====================================================
                            Premier Oro Desktop
                        ==================================================== -->
                    <div class="col-4 col-md-3 col-12 csd">
                        <div class="text-center p-2 subsegurocontent" style="background-color:#EDEDED;">
                            <div class="marco-segurocontent" style="border-color: #FFC700;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-subsegurocontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="subsegurostittle">Premier</span></p>
                                    <p><span class="subsegurosname vehicular">Oro</span></p>
                                    <hr style="background-color:#FFC700;width:80%;">
                                    <p class="subsegurodesc descvehicular" style="">
                                        Mejoramos los beneficios del Premier Plata + auxilio mecánico
                                        y grúa ilimitado + endosable

                                    </p>
                                    <div id="cuadratura-vehicular"></div>
                                    <hr class="hrpdesdeup-vehicular" style="background-color:#FFC700;width:80%;">
                                    <p class="subseguropdesde">Desde $350 anuales *</p>
                                    <hr class="hrpdesdedown-vehicular" style="background-color:#FFC700;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="seguroDesglose('vehicular','premieroro');setTrazabilidad( 'mas-info','vehicular','premieroro','n-a','seguros-vehicular' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#FFC700;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="https://corredores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial:boton
                                                ">
                                                <button onclick="setTrazabilidad( 'cotizar','vehicular','premieroro','n-a','seguros-vehicular' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#FFC700;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 1 -->

                    <!-- ====================================================
                            Premier Plata Desktop
                        ==================================================== -->
                    <div class="col-4 col-md-3 col-12 csd">
                        <div class="text-center p-2 subsegurocontent" style="background-color:#EDEDED;">
                            <div class="marco-segurocontent" style="border-color: #FFC700;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-subsegurocontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="subsegurostittle">Premier</span></p>
                                    <p><span class="subsegurosname vehicular">Plata</span></p>
                                    <hr style="background-color:#FFC700;width:80%;">
                                    <p class="subsegurodesc descvehicular" style="">
                                        Responsabilidad civil hasta $100K <br>
                                        Cubertura a vehículos menores*</p>
                                        <div id="cuadratura-vehicular" class="cuadratura-vehicular2"></div>
                                    <hr class="hrpdesdeup-vehicular" style="background-color:#FFC700;width:80%;">
                                    <p class="subseguropdesde">Desde $300 anuales *</p>
                                    <hr class="hrpdesdedown-vehicular" style="background-color:#FFC700;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="seguroDesglose('vehicular','premierplata');setTrazabilidad( 'mas-info','vehicular','premierplata','n-a','seguros-vehicular' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#FFC700;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="https://corredores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial:boton
                                                    ">
                                                <button onclick="setTrazabilidad( 'cotizar','vehicular','premierplata','n-a','seguros-vehicular' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#FFC700;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 1 -->

                    <!-- ====================================================
                            Pago Por Kilometos Desktop
                        ==================================================== -->
                    <div class="col-md-3 csd">
                        <div class="text-center p-2 subsegurocontent" style="background-color:#EDEDED;">
                            <div class="marco-segurocontent" style="border-color: #FFC700;">
                                <!-- ==========================       ========================== -->
                                <div class="cuadratura-subsegurocontent">
                                    <!-- ========================== Titulo y subtítulo ========================== -->
                                    <p><span class="subsegurostittle">Pago por</span></p>
                                    <p><span class="subsegurosname vehicular">Kilometros</span></p>
                                    <hr style="background-color:#FFC700;width:80%;">
                                    <p class="subsegurodesc descvehicular" style="">
                                        Llevate las mismas coberturas del Premier Plata y Oro con hasta un
                                        45% de descuento**</p>
                                        <div id="cuadratura-vehicular" ></div>
                                    <hr class="hrpdesdeup-vehicular" style="background-color:#FFC700;width:80%;">
                                    <p class="subseguropdesde">Desde $260 anuales *</p>
                                    <hr class="hrpdesdedown-vehicular" style="background-color:#FFC700;width:80%;">
                                    <!-- ========================== Botones ========================== -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <button onclick="showDesglose('vehicular','pagoporkilometros','unico');setTrazabilidad( 'mas-info','vehicular','pagoporkilometros','n-a','seguros-vehicular' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#FFC700;">Más información</button>
                                        </div>
                                    </div><!-- end row button mas info -->
                                    <div class="row">
                                        <div class="col-sm">
                                            <a href="https://corredores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial:boton
                                                    ">
                                                <button onclick="setTrazabilidad( 'cotizar','vehicular','pagoporkilometros','n-a','seguros-vehicular' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#FFC700;">Cotizar</button>
                                            </a>
                                        </div>
                                    </div><!-- end row button cotizar -->
                                </div><!-- end div cuadratura -->
                            </div><!-- end marco -->
                        </div><!-- end segurocontent -->
                    </div><!-- end col 1 -->



                </div><!-- end row -->
            </div><!-- end container -->

            <div class="aviso-vehicular">
                <b>*</b> Dependerá del valor del vehículo<br>
                <b>**</b> Vehículos menores: bicicleta, moto y scooter. Beneficio aplica para Premier Platinum, Premier Oro, Premier Plata y Pago por kilomentros<br>
                <b>***</b> Sujeto a especificaciones del plan
            </div>


        </div><!-- end seguros-desktop -->

        <!-- ========================================================================================== -->
        <!-- ========================================================================================== -->



        <!-- ========================== Columnas de subseguros solo para Mobile ========================== -->

        <button onclick="showDesglose('vehicular','legales','unico');setTrazabilidad( 'click-legales','vehicular','n-a','n-a','seguros-vehicular')" id="legales" type="button" class="btn" style="background-color:#FFC700;">
            <b>Legales</b>
        </button>


        <!-- ====================================================
                Premier Platinum Mobile
             ==================================================== -->
        <div class="slide" id="premierplatinum">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 subsegurocontent" style="background-color:#EDEDED;">
                        <div class="marco-subsegurocontent" style="border-color: #FFC700;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-subsegurocontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="subsegurostittle">Premier</span>
                                    <br><span class="subsegurosname vehicular">Platinum</span></p>
                                <hr style="background-color:#FFC700;width:80%;">
                                <p class="subsegurodesc" style="line-height: 5.5vw !important;">
                                    Mejoramos los beneficios del Premier Oro + Soat
                                    y Revisión técnica + 10% de deducible en
                                    talleres concesionarios
                                </p>
                                <hr class="hrpdesdeup" style="background-color:#FFC700;width:80%;">
                                <p class="subseguropdesde">Desde $800 anuales *</p>
                                <hr class="hrpdesdedown" style="background-color:#FFC700;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="seguroDesglose('vehicular','premierplatinum');setTrazabilidad( 'mas-info','vehicular','premierplatinum','n-a','seguros-vehicular' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#FFC700;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-platinum:boton">
                                            <button onclick="setTrazabilidad( 'cotizar','vehicular','premierplatinum','n-a','seguros-vehicular' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#FFC700;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end subsegurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide Premier Platinum -->

        <!-- ====================================================
                Premier Oro Mobile
             ==================================================== -->
        <div class="slide" id="premieroro">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 subsegurocontent" style="background-color:#EDEDED;">
                        <div class="marco-subsegurocontent" style="border-color: #FFC700;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-subsegurocontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="subsegurostittle">Premier</span>
                                    <br><span class="subsegurosname vehicular">Oro</span></p>
                                <hr style="background-color:#FFC700;width:80%;">
                                <p class="subsegurodesc" style="margin-left: 2.5vw !important;margin-right: 2.5vw !important;font-size: 4.8vw !important; ">
                                    Mejoramos los beneficios del Premier Plata + auxilio mecánico
                                    y grúa ilimitado + endosable

                                </p>
                                <hr class="hrpdesdeup" style="background-color:#FFC700;width:80%;">
                                <p class="subseguropdesde">Desde $350 anuales *</p>
                                <hr class="hrpdesdedown" style="background-color:#FFC700;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="seguroDesglose('vehicular','premieroro');setTrazabilidad( 'mas-info','vehicular','premieroro','n-a','seguros-vehicular' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#FFC700;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-oro:boton">
                                            <button onclick="setTrazabilidad( 'cotizar','vehicular','premieroro','n-a','seguros-vehicular' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#FFC700;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end subsegurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide Premier Oro -->

        <!-- ====================================================
                Premier Plata Mobile
             ==================================================== -->
        <div class="slide" id="premierplata">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 subsegurocontent" style="background-color:#EDEDED;">
                        <div class="marco-subsegurocontent" style="border-color: #FFC700;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-subsegurocontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="subsegurostittle">Premier</span>
                                    <br><span class="subsegurosname vehicular">Plata</span></p>
                                <hr style="background-color:#FFC700;width:80%;">
                                <p class="subsegurodesc" style=" ">
                                    - Responsabilidad civil hasta $100K.<br>
                                    - Cubertura a vehículos menores**</p>
                                <hr class="hrpdesdeup" style="background-color:#FFC700;width:80%;">
                                <p class="subseguropdesde">Desde $300 anuales *</p>
                                <hr class="hrpdesdedown" style="background-color:#FFC700;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="seguroDesglose('vehicular','premierplata');setTrazabilidad( 'mas-info','vehicular','premierplata','n-a','seguros-vehicular' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#FFC700;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-plata:boton">
                                            <button onclick="setTrazabilidad( 'cotizar','vehicular','premierplata','n-a','seguros-vehicular' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#FFC700;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end subsegurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide Premier Plata -->

        <!-- ====================================================
                Pago por Kilometros Mobile
             ==================================================== -->
        <div class="slide" id="pagoporkilometros">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center text-md-left p-2 subsegurocontent" style="background-color:#EDEDED;">
                        <div class="marco-subsegurocontent" style="border-color: #FFC700;">
                            <!-- ==========================       ========================== -->
                            <div class="cuadratura-subsegurocontent">
                                <!-- ========================== Titulo y subtítulo ========================== -->
                                <p><span class="subsegurostittle">Pago por</span>
                                    <br><span class="subsegurosname vehicular">Kilómetros</span></p>
                                <hr style="background-color:#FFC700;width:80%;">
                                <p class="subsegurodesc">
                                    Llevate las mismas coberturas del Premier Plata y Oro con hasta un
                                    45% de descuento***
                                </p>
                                <hr class="hrpdesdeup" style="background-color:#FFC700;width:80%;">
                                <p class="subseguropdesde">Desde $260 anuales *</p>
                                <hr class="hrpdesdedown" style="background-color:#FFC700;width:80%;">
                                <!-- ========================== Botones ========================== -->
                                <div class="row">
                                    <div class="col-sm">
                                        <button onclick="showDesglose('vehicular','pagoporkilometros','unico');setTrazabilidad( 'mas-info','vehicular','pagoporkilometros','n-a','seguros-vehicular' )" type="button" class="btn btn-masinfo-subseguro" style="background-color:#FFC700;">Más información</button>
                                    </div>
                                </div><!-- end row button mas info -->
                                <div class="row">
                                    <div class="col-sm">
                                        <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-pago-por-kilometros:boton">
                                            <button onclick="setTrazabilidad( 'cotizar','vehicular','pagoporkilometros','n-a','seguros-vehicular' )" type="button" class="btn btn-cotizar-subseguro" style="background-color:#FFC700;">Cotizar</button>
                                        </a>
                                    </div>
                                </div><!-- end row button cotizar -->
                            </div><!-- end div cuadratura -->
                        </div><!-- end marco -->
                    </div><!-- end subsegurocontent -->
                </div><!-- end row -->
            </div><!-- end content -->
        </div><!-- end slide Pago por kilometros -->

        <!-- ================================================================================================================================== -->
        <!-- ================================================================================================================================== -->



    </div><!-- end section -->
</div><!-- end fullpage -->


@endsection
