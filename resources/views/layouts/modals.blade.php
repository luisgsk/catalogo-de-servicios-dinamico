<style>
    .vida {
        color: #e6281f !important;
    }

    .salud {
        color: #42C1AD !important;
    }

    .vida-bg {
        background-color: #e6281f !important;
    }

    .salud-bg {
        background-color: #42C1AD !important;
    }

    .vehicular {
        color: #FFC700 !important;
    }

    .vehicular-bg {
        background-color: #FFC700 !important;
    }

    .td-vida {
        border-bottom: .5px solid #e6281f !important;
        font-size: 2.1vh;
    }

    .td-salud {
        border-bottom: .5px solid #42C1AD !important;
    }

    .td-vehicular {
        border-bottom: .5px solid #FFC700 !important;
    }

    .td-vehicular-km {
        border-bottom: .5px solid #FFC700 !important;
    }

    @media (min-width: 1000px) {

        table,
        tbody,
        th {
            font-family: 'Lato' !important;
            font-weight: 400 !important;
            font-style: normal !important;
            font-size: 1.2vw;
            color: #898b8d !important;
            vertical-align: middle !important;
        }

        .modal-desglosename {
            font-family: 'Lato' !important;
            font-style: normal !important;
            font-weight: 600 !important;
            font-size: 2vw;
            color: #898B8D;
            line-height: 2.5vh;
            /*position: absolute;*/
            text-align: center !important;
            margin-left: auto !important;
            margin-right: auto !important;
            margin-bottom: 1.6vw;
        }

        .name-km {
            /** titulo pago por kilometros **/
            line-height: 2vw !important;
        }

        .btn-cotizar {
            font-family: 'Lato' !important;
            font-weight: 400 !important;
            font-style: normal !important;
            font-size: 1.2vw;
            color: white !important;
            transition: transform .5s;
            margin-top: .8vw;
            width: 55%;
            text-align: center !important;
            margin-bottom: 2vw;
        }

        td {
            text-align: center;
        }

        .td-vida {
            text-align: left !important;
        }

        .td-vehicular-km {
            text-align: center !important;
            font-size: 1vw;
        }

        .descpagopork {
            font-size: .7vw;
            font-family: 'Lato' !important;
            color: #898b8d;
        }

        .detallepagopork {

            font-size: .9vw;
            font-family: 'Lato' !important;
            color: #898b8d;
            

        }


        .table-icon {
            width: 1.5vw;
        }

        .table-icon-vida {
            width: 1vw;
        }
    }

    /** end desktop **/

    @media (max-width: 850px) {

        .modal-desc {
            margin-left: 3vh;
            margin-right: 3vh;
            font-family: 'Lato' !important;
            font-style: normal !important;
            text-align: center;
            font-size: 4.7vw;
            color: #898b8d;

        }

        table,
        tbody,
        th {
            font-family: 'Lato' !important;
            font-style: normal !important;
            font-weight: 500 !important;
            font-size: 4.5vw;
            color: #898b8d !important;

        }

        .modal-desglosename {
            font-family: 'Lato' !important;
            font-style: normal !important;
            font-weight: 600 !important;
            font-size: 6vw;
            color: #898B8D;
            line-height: 5vh;
            /*position: absolute;*/
            text-align: center !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }

        .name-km {
            /** titulo pago por kilometros **/
            line-height: 5.8vw !important;
        }

        .btn-cotizar {
            font-family: 'Lato' !important;
            font-weight: 400 !important;
            font-style: normal !important;
            font-size: 4vw;
            color: white !important;
            transition: transform .5s;
            margin-top: .8vw;
            width: 80%;
            text-align: center !important;
            margin-bottom: 2vw;
        }

        td {
            text-align: right;
        }

        .td-vida {
            text-align: left !important;
        }

        .td-vehicular-km {
            text-align: left !important;
            font-size: 3.6vw;
        }

        .descpagopork {
            font-size: 2.9vw;
            font-family: 'Lato' !important;
            color: #898b8d;
        }

        .detallepagopork {
            font-size: 3.9vw;
            font-family: 'Lato' !important;
            color: #898b8d;
            
        }

        .table-icon {
            width: 4.7vw;
        }

        .table-icon-vida {
            width: 3.9vw;
        }
    }

    /** end mobile **/

    .modal-body {
        overflow-y: auto;
    }

</style>

<!-- Salud | Red Preferencial | Beneficios -->
<div class="modal fade" id="salud-redpreferencial-beneficios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Red Preferencial | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Beneficios</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="td-salud"></th>
                            <td class="td-salud"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Ambulancia</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">+300 Clínicas</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Cobertura de Asistencia en viajes internacionales</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Chequeo Médico Preventivo</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial-beneficios-mas:boton                    ">
                        <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','beneficios-info','subdesglose-salud')" type="button" class="btn btn-cotizar salud-bg text-center">Cotizar</button>
                        <a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>
<!-- =============================================================================================================== -->
<!-- =============================================================================================================== -->

<!-- Salud | Red Preferencial | Coberturas -->
<div class="modal fade" id="salud-redpreferencial-coberturas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Red Preferencial | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Coberturas</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="td-salud"></th>
                            <td class="td-salud"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Atención Hospitalaria</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Maternidad</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Cobertura Oncológica</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Transplante de Órgano</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial-coberturas-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','coberturas-info','subdesglose-salud')" type="button" class="btn btn-cotizar salud-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>
<!-- =============================================================================================================== -->
<!-- =============================================================================================================== -->

<!-- Salud | Red Preferencial | Deducibles y Coaseguros -->
<div class="modal fade" id="salud-redpreferencial-deduciblescoaseguros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Red Preferencial | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Deducibles y Coaseguros</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="td-salud">Crédito por Clínica Afiliada</th>
                            <td class="td-salud">Deducible (S/.)</td>
                            <td class="td-salud">Coaseguro (%)</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 1</th>
                            <td class="td-salud">S/ 40</td>
                            <td class="td-salud">Al 90%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 2</th>
                            <td class="td-salud">S/ 45</td>
                            <td class="td-salud">Al 90%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 3</th>
                            <td class="td-salud">S/ 50</td>
                            <td class="td-salud">Al 85%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 4</th>
                            <td class="td-salud">S/ 70</td>
                            <td class="td-salud">Al 80%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 5</th>
                            <td class="td-salud">S/ 80</td>
                            <td class="td-salud">Al 75%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 6</th>
                            <td class="td-salud">S/ 90</td>
                            <td class="td-salud">Al 65%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 7</th>
                            <td class="td-salud">S/ 100</td>
                            <td class="td-salud">Al 65%</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial-deduycoa-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','deduciblescoaseguros-info','subdesglose-salud')" type="button" class="btn btn-cotizar salud-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>
<!-- =============================================================================================================== -->
<!-- =============================================================================================================== -->

<!-- Salud | Full Salud | Beneficios -->
<div class="modal fade" id="salud-fullsalud-beneficios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Full Salud | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Beneficios</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="td-salud"></th>
                            <td class="td-salud"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Ambulancia</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">+300 Clínicas</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Cobertura de Asistencia en viajes internacionales</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Chequeo Médico Preventivo</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-full-salud-beneficios-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','beneficios-info','subdesglose-salud')" type="button" class="btn btn-cotizar salud-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Salud | Full Salud | Coberturas -->
<div class="modal fade" id="salud-fullsalud-coberturas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Full Salud | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Coberturas</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="td-salud"></th>
                            <td class="td-salud"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Atención Hospitalaria</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Maternidad</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Cobertura Oncológica</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Transplante de Órgano</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-full-salud-coberturas-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','coberturas-info','subdesglose-salud')" type="button" class="btn btn-cotizar salud-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Salud | Full Salud | Deducibles y Coaseguros -->
<div class="modal fade" id="salud-fullsalud-deduciblescoaseguros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Full Salud | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Deducibles y Coaseguros</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="td-salud">Crédito por Clínica Afiliada</th>
                            <td class="td-salud">Deducible (S/.)</td>
                            <td class="td-salud">Coaseguro (%)</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 1</th>
                            <td class="td-salud">S/ 40</td>
                            <td class="td-salud">Al 90%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 2</th>
                            <td class="td-salud">S/ 45</td>
                            <td class="td-salud">Al 90%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 3</th>
                            <td class="td-salud">S/ 50</td>
                            <td class="td-salud">Al 85%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 4</th>
                            <td class="td-salud">S/ 70</td>
                            <td class="td-salud">Al 75%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 5</th>
                            <td class="td-salud">S/ 80</td>
                            <td class="td-salud">Al 70%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 6</th>
                            <td class="td-salud">S/ 95</td>
                            <td class="td-salud">Al 65%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 7</th>
                            <td class="td-salud">S/ 100</td>
                            <td class="td-salud">Al 60%</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-full-salud-deduycoa-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','deduciblescoaseguros-info','subdesglose-salud')" type="button" class="btn btn-cotizar salud-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>
<!-- =============================================================================================================== -->
<!-- =============================================================================================================== -->

<!-- Salud | Red Medica | Beneficios -->
<div class="modal fade" id="salud-redmedica-beneficios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Red Medica | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Beneficios</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="td-salud"></th>
                            <td class="td-salud"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Ambulancia</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">+300 Clínicas</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Cobertura de Asistencia en viajes internacionales</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Chequeo Médico Preventivo</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-medica-beneficios-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','beneficios-info','subdesglose-salud')" type="button" class="btn btn-cotizar salud-bg text-center">Cotizar</button>
                        
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Salud | Red Medica | Coberturas -->
<div class="modal fade" id="salud-redmedica-coberturas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Red Medica | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Coberturas</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="td-salud"></th>
                            <td class="td-salud"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Atención Hospitalaria</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Maternidad</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Cobertura Oncológica</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Transplante de Órgano</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-medica-coberturas-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','coberturas-info','subdesglose-salud')" type="button" class="btn btn-cotizar salud-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Salud | Red Medica | Deducibles y Coaseguros -->
<div class="modal fade" id="salud-redmedica-deduciblescoaseguros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Red Medica | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Deducibles y Coaseguros</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="td-salud">Crédito por Clínica Afiliada</th>
                            <td class="td-salud">Deducible (S/.)</td>
                            <td class="td-salud">Coaseguro (%)</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 1</th>
                            <td class="td-salud">S/ 45</td>
                            <td class="td-salud">Al 90%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 2</th>
                            <td class="td-salud">S/ 50</td>
                            <td class="td-salud">Al 85%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 3</th>
                            <td class="td-salud">S/ 55</td>
                            <td class="td-salud">Al 80%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 4</th>
                            <td class="td-salud">S/ 75</td>
                            <td class="td-salud">Al 75%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 5</th>
                            <td class="td-salud">S/ 90</td>
                            <td class="td-salud">Al 70%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 6</th>
                            <td class="td-salud">S/ 100</td>
                            <td class="td-salud">Al 65%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 7</th>
                            <td class="td-salud">S/ 110</td>
                            <td class="td-salud">Al 60%</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-medica-deduycoa-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','deduciblescoaseguros-info','subdesglose-salud')" type="button" class="btn btn-cotizar salud-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>
<!-- =============================================================================================================== -->
<!-- =============================================================================================================== -->

<!-- Salud | Red Preferente | Beneficios -->
<div class="modal fade" id="salud-redpreferente-beneficios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Red Preferente | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Beneficios</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="td-salud"></th>
                            <td class="td-salud"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Ambulancia</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">+300 Clínicas</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Cobertura de Asistencia en viajes internacionales</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCandado.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Chequeo Médico Preventivo</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-beneficios-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','beneficios-info','subdesglose-salud')" type="button" class="btn btn-cotizar salud-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Salud | Red Preferente | Coberturas -->
<div class="modal fade" id="salud-redpreferente-coberturas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Red Preferente | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Coberturas</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="td-salud"></th>
                            <td class="td-salud"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Atención Hospitalaria</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Maternidad</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Cobertura Oncológica</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCheck.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-salud">Transplante de Órgano</th>
                            <td class="td-salud"><img class="table-icon" src="{{ asset('images') }}/icons/IconoCandado.svg"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-coberturas-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','coberturas-info','subdesglose-salud')" type="button" class="btn btn-cotizar salud-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Salud | Red Preferente | Deducibles y Coaseguros -->
<div class="modal fade" id="salud-redpreferente-deduciblescoaseguros" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Red Preferente | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Deducibles y Coaseguros</h1>
                <table class="table">
                    <tbody>
                        <tr>
                            <th class="td-salud">Crédito por Clínica Afiliada</th>
                            <td class="td-salud">Deducible (S/.)</td>
                            <td class="td-salud">Coaseguro (%)</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 1</th>
                            <td class="td-salud">S/ 45</td>
                            <td class="td-salud">Al 80%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 2</th>
                            <td class="td-salud">S/ 50</td>
                            <td class="td-salud">Al 80%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 3</th>
                            <td class="td-salud">S/ 60</td>
                            <td class="td-salud">Al 75%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 4</th>
                            <td class="td-salud">S/ 80</td>
                            <td class="td-salud">Al 65%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 5</th>
                            <td class="td-salud">S/ 95</td>
                            <td class="td-salud">Al 60%</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 6</th>
                            <td class="td-salud">-</td>
                            <td class="td-salud">-</td>
                        </tr>
                        <tr>
                            <th class="td-salud">Red 7</th>
                            <td class="td-salud">-</td>
                            <td class="td-salud">-</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-deduycoa-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','deduciblescoaseguros-info','subdesglose-salud')" type="button" class="btn btn-cotizar salud-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>


<!-- =============================================================================================================== 
        Seguros de Vida
     =============================================================================================================== -->

     <!-- Vida | Legales | Legales -->
<div class="modal fade" id="vida-legales-unico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vida">Legales</h1>

                <hr style="background-color:#e6281f;width:90%;">
                <p class="modal-desc"><b>*</b> La rentabilidad proyectada depende del plazo de contratación, la suma asegurada y el rendimiento del fondo.</p>
                <hr>
                <p class="modal-desc"><b>**</b> Asegurado por $40, 000 durante 25 años</p>
                
                <hr style="background-color:#e6281f;width:90%;">

            </div>
            <div class="row text-center">
                <div class="col">
                    <!--<a href="https://corredores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-beneficios-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','cliente-info','subdesglose-vida')" type="button" class="btn btn-cotizar vida-bg text-center">Cotizar</button>
                    </a>-->
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vida | Vida Flexible | Cliente -->
<div class="modal fade" id="vida-vidaflexible-cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vida">Cliente</h1>

                <hr style="background-color:#e6281f;width:90%;">
                <p class="modal-desc">Personas que buscan oportunidades interesantes de
                    rentabilidad, dispuestos a exponerse al riesgo
                    del mercado, valoran la flexibilidad de la
                    propuesta de valor del producto con o sin familia.
                </p>
                <hr style="background-color:#e6281f;width:90%;">

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-flexible-cliente-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','cliente-info','subdesglose-vida')" type="button" class="btn btn-cotizar vida-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vida | Vida Flexible | Ventajas -->
<div class="modal fade" id="vida-vidaflexible-ventajas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">

                <table class="table" style="text-align:center;">
                    <h1 class="modal-desglosename vida">Ventajas / Beneficios</h1>
                    <tbody>
                        <tr>
                            <th class="td-vida"></th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Ahorra con tasas de hasta 9% eligiendo el portafolio de inversión que más te convenga.</th>
                        </tr>
                        <tr>
                            <th class="td-vida">Puede emitirse en soles y dólares.</th>
                        </tr>
                        <tr>
                            <th class="td-vida">Es endosable a créditos Hipotecarios.</th>
                        </tr>
                        <tr>
                            <th class="td-vida"> Puedes hacer retiros parciales o préstamos de tus valores de rescate disponibles. </th>
                        </tr>
                    </tbody>
                </table>

                <table class="table" style="text-align:center; font-size: .8vw;">
                    <h1 class="modal-desglosename vida" style="margin-top:1.8vw;">Ventaja Comparativa</h1>
                    <tbody>
                        <tr>
                            <th class="td-vida"></th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Excelente estructura de costos que permite <b>mejores valores de rescate</b>, sumado a un producto
                                flexible y que se adapta a los distintos momentos de la vida de nuestros clientes.</th>
                        </tr>
                        <tr>
                            <th class="td-vida"><b>Asistencia Multiproducto durante toda la vida útil de la póliza.</th>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-flexible-ventaja-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','ventajas-info','subdesglose-vida')" type="button" class="btn btn-cotizar vida-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>



<!-- Vida | Vida Flexible | Coberturas -->
<div class="modal fade" id="vida-vidaflexible-cobertura" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Red Preferente | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <h1 class="modal-desglosename vida">Coberturas</h1>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="td-vida"><b>Coberturas</b></th>
                            <th class="td-vida"><b>Titular</b></th>
                            <th class="td-vida"><b>Conyuge</b></th>
                            <th class="td-vida"><b>Hijos</b></th>
                            <th class="td-vida"><b>Padres</b></th>

                        </tr>
                        <!-- principal -->
                        <tr>
                            <th class="td-vida" style="background-color: rgb(230,40,31,.1)"><b style="color: #e6281f;">Principal</b></th>
                            <td class="td-vida" style="background-color: rgb(230,40,31,.1)"></td>
                            <td class="td-vida" style="background-color: rgb(230,40,31,.1)"></td>
                            <td class="td-vida" style="background-color: rgb(230,40,31,.1)"></td>
                            <td class="td-vida" style="background-color: rgb(230,40,31,.1)"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Fallecimiento</th>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                        </tr>
                        <!-- opcionales -->
                        <tr>
                            <th class="td-vida" style="background-color: rgb(42,166,68,.1)"><b style="color: #2aa644;">Opcionales</b></th>
                            <td class="td-vida" style="background-color: rgb(42,166,68,.1)"></td>
                            <td class="td-vida" style="background-color: rgb(42,166,68,.1)"></td>
                            <td class="td-vida" style="background-color: rgb(42,166,68,.1)"></td>
                            <td class="td-vida" style="background-color: rgb(42,166,68,.1)"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">indemnización adicional por fallecimiento accidental</th>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Sepelio (puedes incluir a tus suegros)</th>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Asistencia por invalidez</th>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Invalidez total y permamente</th>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Exoneración de pagos de primas</th>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Indemnización por enfermedad grave</th>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Renta hospitalaria por accidente</th>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Indemnización por cirugía</th>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCheckRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                            <td class="td-vida"><img class="table-icon-vida" src="{{ asset('images') }}/icons/IconoCandadoRed.svg"></td>
                        </tr>

                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-flexible-cobertura-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','coberturas-info','subdesglose-vida')" type="button" class="btn btn-cotizar vida-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vida | Seguro Universitario | Cliente -->
<div class="modal fade" id="vida-segurouniversitario-cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vida">Cliente</h1>

                <hr style="background-color:#e6281f;width:90%;">
                <p class="modal-desc">Personas que quieren cumplir un objetivo pero aún
                    no deciden dónde ahorrar o cuál es la mejor opción.
                    Muy analíticos y planificados. Buscan valores garantizados, no les
                    gusta el riesgo.
                </p>
                <hr style="background-color:#e6281f;width:90%;">

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-seguro-universitario-cliente-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','cliente-info','subdesglose-vida')" type="button" class="btn btn-cotizar vida-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vida | Seguro Universitario | Ventajas -->
<div class="modal fade" id="vida-segurouniversitario-ventajas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">

                <table class="table" style="text-align:center;">
                    <h1 class="modal-desglosename vida">Ventajas / Beneficios</h1>
                    <tbody>
                        <tr>
                            <th class="td-vida"></th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Rentabilidad con una tasa garantizada para que tengas la seguridad
                                de que alcanzarás tu meta.
                            </th>
                        </tr>
                        <tr>
                            <th class="td-vida">Plazo desde 5 hasta 20 años para adaptarlo a la meta que tengas.</th>
                        </tr>
                        <tr>
                            <th class="td-vida">Tú defines el monto que deseas como meta de ahorro.</th>
                        </tr>
                        <tr>
                            <th class="td-vida"> Conoce desde el primer día el monto exacto de "rescate". </th>
                        </tr>
                    </tbody>
                </table>

                <table class="table" style="text-align:center; font-size: .8vw;">
                    <h1 class="modal-desglosename vida" style="margin-top:1.8vw;">Ventaja comparativa</h1>
                    <tbody>
                        <tr>
                            <th class="td-vida"></th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida"><b>Asistencias Multiproducto durante toda la vida útil de la póliza.</b></th>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-seguro-universitario-ventaja-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','ventajas-info','subdesglose-vida')" type="button" class="btn btn-cotizar vida-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vida | Seguro Universitario | Coberturas -->
<div class="modal fade" id="vida-segurouniversitario-cobertura" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Red Preferente | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <!--<h1 class="modal-desglosename vida">Coberturas</h1>-->
                <table class="table" style="text-align:center;">
                    <h1 class="modal-desglosename vida">Cobertura Principal</h1>
                    <tbody>
                        <tr>
                            <th class="td-vida"></th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Fallecimiento</th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Sobrevivencia</th>
                            <td class="td-vida"></td>
                        </tr>
                    </tbody>
                </table>

                <table class="table" style="text-align:center; font-size: .8vw;">
                    <h1 class="modal-desglosename vida">Coberturas Adicionales</h1>
                    <tbody>
                        <tr>
                            <th class="td-vida"></th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Invalidez Total y Permamente (Cancelatoria y No Cancelatoria)</th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Fallecimiento Accidental</th>
                            <td class="td-vida"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-seguro-universitario-cobertura-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','coberturas-info','subdesglose-vida')" type="button" class="btn btn-cotizar vida-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vida | Vida Temporal Total | Cliente -->
<div class="modal fade" id="vida-vidatemporaltotal-cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vida">Cliente</h1>

                <hr style="background-color:#e6281f;width:90%;">
                <p class="modal-desc">- Para clientes que se preocupan por el bienestar de su familia.</p>
                <p class="modal-desc">- Tiene hijos, padres, familiares o personas que dependen de el.</p>
                <p class="modal-desc">- Buscan un seguro más económico.</p>
                <hr style="background-color:#e6281f;width:90%;">

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-temporal-total-cliente-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','cliente-info','subdesglose-vida')" type="button" class="btn btn-cotizar vida-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vida | Vida Temporal Total | Ventajas -->
<div class="modal fade" id="vida-vidatemporaltotal-ventajas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">

                <table class="table" style="text-align:center;">
                    <h1 class="modal-desglosename vida">Ventajas / Beneficios</h1>
                    <tbody>
                        <tr>
                            <th class="td-vida"></th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Es el tipo de seguro de vida más económico.
                            </th>
                        </tr>
                        <tr>
                            <th class="td-vida">El seguro puede endosar a un crédito, puede reemplazar el desgravamen.</th>
                        </tr>
                        <tr>
                            <th class="td-vida">Asistencia Multiproducto durante toda la vigencia del seguro.</th>
                        </tr>
                    </tbody>
                </table>

                <table class="table" style="text-align:center; font-size: .8vw;">
                    <h1 class="modal-desglosename vida" style="margin-top:1.8vw;">Ventaja Comparativa</h1>
                    <tbody>
                        <tr>
                            <th class="td-vida"></th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida"><b>Tasa de Costo de Cobertura competitiva.</b></th>
                        </tr>
                        <!--<tr>
                            <th class="td-vida"><b>Asistencia Multiproducto durante toda la vida útil de la póliza.</th>
                        </tr>-->
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-temporal-total-ventaja-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','ventajas-info','subdesglose-vida')" type="button" class="btn btn-cotizar vida-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vida | Vida Temporal Total | Coberturas -->
<div class="modal fade" id="vida-vidatemporaltotal-cobertura" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">
            <!--<div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Red Preferente | Beneficios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>-->

            <div class="modal-body">
                <!--<h1 class="modal-desglosename vida">Coberturas</h1>-->
                <table class="table" style="text-align:center;">
                    <h1 class="modal-desglosename vida">Coberturas Adicionales</h1>
                    <tbody>
                        <tr>
                            <th class="td-vida"></th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Invalidez Total y Permanente (Cancelatoria y No Cancelatoria)</th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Fallecimiento Accidental</th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Anticipo por Enfermedades Graves</th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Indemnización por invalidez o incapacidad</th>
                            <td class="td-vida"></td>
                        </tr>
                    </tbody>
                </table>

                <table class="table" style="text-align:center; font-size: .8vw;">
                    <h1 class="modal-desglosename vida" style="margin-top:1.8vw;">Primas niveladas</h1>
                    <tbody>
                        <tr>
                            <th class="td-vida"></th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">La prima no cambia durante la vigencia del seguro</th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">Elección de frecuencia y medio de pago de acuerdo a la necesidad del cliente</th>
                            <td class="td-vida"></td>
                        </tr>
                    </tbody>
                </table>

                <table class="table" style="text-align:center; font-size: .8vw;">
                    <h1 class="modal-desglosename vida" style="margin-top:1.8vw;">Planes / Moneda</h1>
                    <tbody>
                        <tr>
                            <th class="td-vida"></th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">5, 10, 15, 20, 25 y 30 años de vigencia</th>
                            <td class="td-vida"></td>
                        </tr>
                        <tr>
                            <th class="td-vida">US$</th>
                            <td class="td-vida"></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vida-vida-temporal-total-cobertura-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','coberturas-info','subdesglose-vida')" type="button" class="btn btn-cotizar vida-bg text-center">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- =============================================================================================================== 
        Seguros Vehicular
     =============================================================================================================== -->

     <!-- Vehicular | Legales | Legales -->
<div class="modal fade" id="vehicular-legales-unico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vehicular">Legales</h1>

                <hr style="background-color:#FFC700;;width:90%;">
                <p class="modal-desc"><b>*</b> Dependerá del valor del vehículo.</p>
                <hr>
                <p class="modal-desc"><b>**</b> Vehículos menores: bicicleta, moto y scooter</p>
                <hr>
                <p class="modal-desc"><b>***</b> Sujeto a especificaciones del plan</p>
                
                <hr style="background-color:#FFC700;;width:90%;">

            </div>
            <div class="row text-center">
                <div class="col">
                    <!--<a href="https://corredores.rimac.com/?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-beneficios-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vida','{{$subseguro}}','cliente-info','subdesglose-vida')" type="button" class="btn btn-cotizar vida-bg text-center">Cotizar</button>
                    </a>-->
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vehicular | Premier Platinum | Coberturas -->
<div class="modal fade" id="vehicular-premierplatinum-coberturas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vehicular"style="margin-bottom:1.8vw;">Coberturas</h1>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="td-vehicular"></th>
                            <td class="td-vehicular"></td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Daño Propio</th>
                            <td class="td-vehicular">Valor convenido</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Responsabilidad civil</th>
                            <td class="td-vehicular">Hasta US$ 300K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Muerte e invalidez</th>
                            <td class="td-vehicular">Hasta US$ 40K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Responsabilidad civil frente a terceros <b>(bicibleta / moto / scooter)</b></th>
                            <td class="td-vehicular">Hasta US$ 2K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Daños por choque en <b>bicicleta / moto / scooter</b></th>
                            <td class="td-vehicular">Hasta US$ 2K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Ausencia de control</th>
                            <td class="td-vehicular">Hasta US$ 50K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Robo llave electrónica (1 evento)</th>
                            <td class="td-vehicular">Hasta US$ 2.5K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Robo cartera (1 evento)</th>
                            <td class="td-vehicular">Hasta US$ 250</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-platinum-coberturas-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','coberturas-info','subdesglose-vehicular')" type="button" class="btn btn-cotizar vehicular-bg text-center">Cotizar</button>
                        <a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vehicular | Premier Platinum | Deducibles -->
<div class="modal fade" id="vehicular-premierplatinum-deducibles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vehicular" style="margin-bottom:1.8vw;">Deducibles</h1>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="td-vehicular"></th>
                            <td class="td-vehicular"></td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Flexible (-10% de Dcto.)</th>
                            <td class="td-vehicular">Si</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Taller Red Preferente RIMAC</th>
                            <td class="td-vehicular">10% MIN $100</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Taller Concesionarios</th>
                            <td class="td-vehicular">10% min $150</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Responsable Tercero Identificado</th>
                            <td class="td-vehicular">Paga "0" deducible</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-platinum-deducibles-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','deducibles-info','subdesglose-vehicular')" type="button" class="btn btn-cotizar vehicular-bg text-center">Cotizar</button>
                        <a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vehicular | Premier Platinum | Beneficios -->
<div class="modal fade" id="vehicular-premierplatinum-beneficios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vehicular" style="margin-bottom:1.8vw;">Beneficios</h1>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="td-vehicular"></th>
                            <td class="td-vehicular"></td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Dcto. REPSOL y baterías ETNA</th>
                            <td class="td-vehicular">Ilimitado</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Asistencia Médica para el Hogar</th>
                            <td class="td-vehicular">Ilimitado</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Auxilio Mecánico y Grúa</th>
                            <td class="td-vehicular">ilimitado</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Chofer de Reemplazo</th>
                            <td class="td-vehicular">7 al año</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">SOAT o SOAT PLUS + Revisión Técnica</th>
                            <td class="td-vehicular">Sí</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Chofer Auto Al Taller</th>
                            <td class="td-vehicular">1 al año</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Valet Parking</th>
                            <td class="td-vehicular">1 al año</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-platinum-beneficios-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','beneficios-info','subdesglose-vehicular')" type="button" class="btn btn-cotizar vehicular-bg text-center">Cotizar</button>
                        <a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>
<!-- end premier platinum -->

<!-- Vehicular | Premier Oro | Coberturas -->
<div class="modal fade" id="vehicular-premieroro-coberturas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vehicular" style="margin-bottom:1.8vw;">Coberturas</h1>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="td-vehicular"></th>
                            <td class="td-vehicular"></td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Daño Propio</th>
                            <td class="td-vehicular">Valor convenido</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Responsabilidad civil</th>
                            <td class="td-vehicular">Hasta US$ 200K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Muerte e invalidez</th>
                            <td class="td-vehicular">Hasta US$ 25K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Responsabilidad civil frente a terceros <b>(bicibleta / moto / scooter)</b></th>
                            <td class="td-vehicular">Hasta US$ 2K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Daños por choque en <b>bicicleta / moto / scooter</b></th>
                            <td class="td-vehicular">Hasta US$ 1K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Ausencia de control</th>
                            <td class="td-vehicular">Hasta US$ 50K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Robo llave electrónica (1 evento)</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Robo cartera (1 evento)</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-oro-coberturas-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','coberturas-info','subdesglose-vehicular')" type="button" class="btn btn-cotizar vehicular-bg text-center">Cotizar</button>
                        <a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vehicular | Premier Oro | Deducibles -->
<div class="modal fade" id="vehicular-premieroro-deducibles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vehicular" style="margin-bottom:1.8vw;">Deducibles</h1>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="td-vehicular"></th>
                            <td class="td-vehicular"></td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Flexible (-10% de Dcto.)</th>
                            <td class="td-vehicular">Si</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Taller Red Preferente RIMAC</th>
                            <td class="td-vehicular">10% MIN $100</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Taller Concesionarios</th>
                            <td class="td-vehicular">20% min $200</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Responsable Tercero Identificado</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-oro-deducibles-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','deducibles-info','subdesglose-vehicular')" type="button" class="btn btn-cotizar vehicular-bg text-center">Cotizar</button>
                        <a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vehicular | Premier Oro | Beneficios -->
<div class="modal fade" id="vehicular-premieroro-beneficios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vehicular" style="margin-bottom:1.8vw;">Beneficios</h1>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="td-vehicular"></th>
                            <td class="td-vehicular"></td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Dcto. REPSOL y baterías ETNA</th>
                            <td class="td-vehicular">Ilimitado</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Asistencia Médica para el Hogar</th>
                            <td class="td-vehicular">Ilimitado</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Auxilio Mecánico y Grúa</th>
                            <td class="td-vehicular">ilimitado</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Chofer de Reemplazo</th>
                            <td class="td-vehicular">5 al año</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">SOAT o SOAT PLUS + Revisión Técnica</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Chofer Auto Al Taller</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Valet Parking</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-oro-beneficios-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','beneficios-info','subdesglose-vehicular')" type="button" class="btn btn-cotizar vehicular-bg text-center">Cotizar</button>
                        <a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>
<!-- end premier oro -->

<!-- Vehicular | Premier Plata | Coberturas -->
<div class="modal fade" id="vehicular-premierplata-coberturas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vehicular" style="margin-bottom:1.8vw;">Coberturas</h1>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="td-vehicular"></th>
                            <td class="td-vehicular"></td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Daño Propio</th>
                            <td class="td-vehicular">Valor convenido</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Responsabilidad civil</th>
                            <td class="td-vehicular">Hasta US$ 100K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Muerte e invalidez</th>
                            <td class="td-vehicular">Hasta US$ 5K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Responsabilidad civil frente a terceros <b>(bicibleta / moto / scooter)</b></th>
                            <td class="td-vehicular">Hasta US$ 2K</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Daños por choque en <b>bicicleta / moto / scooter</b></th>
                            <td class="td-vehicular">Hasta US$ 500</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Ausencia de control</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Robo llave electrónica (1 evento)</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Robo cartera (1 evento)</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-plata-coberturas-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','coberturas-info','subdesglose-vehicular')" type="button" class="btn btn-cotizar vehicular-bg text-center">Cotizar</button>
                        <a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vehicular | Premier Plata | Deducibles -->
<div class="modal fade" id="vehicular-premierplata-deducibles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vehicular" style="margin-bottom:1.8vw;">Deducibles</h1>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="td-vehicular"></th>
                            <td class="td-vehicular"></td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Flexible (-10% de Dcto.)</th>
                            <td class="td-vehicular">Si</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Taller Red Preferente RIMAC</th>
                            <td class="td-vehicular">10% MIN $100</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Taller Concesionarios</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Responsable Tercero Identificado</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-plata-deducibles-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','deducibles-info','subdesglose-vehicular')" type="button" class="btn btn-cotizar vehicular-bg text-center">Cotizar</button>
                        <a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<!-- Vehicular | Premier Plata | Beneficios -->
<div class="modal fade" id="vehicular-premierplata-beneficios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename vehicular" style="margin-bottom:1.8vw;">Beneficios</h1>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th class="td-vehicular"></th>
                            <td class="td-vehicular"></td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Dcto. REPSOL y baterías ETNA</th>
                            <td class="td-vehicular">Ilimitado</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Asistencia Médica para el Hogar</th>
                            <td class="td-vehicular">Ilimitado</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Auxilio Mecánico y Grúa</th>
                            <td class="td-vehicular">(3 de c/u)</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Chofer de Reemplazo</th>
                            <td class="td-vehicular">3 al año</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">SOAT o SOAT PLUS + Revisión Técnica</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Chofer Auto Al Taller</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                        <tr>
                            <th class="td-vehicular">Valet Parking</th>
                            <td class="td-vehicular">-</td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <a href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-premier-plata-beneficios-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vehicular','{{$subseguro}}','beneficios-info','subdesglose-vehicular')" type="button" class="btn btn-cotizar vehicular-bg text-center">Cotizar</button>
                        <a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>
<!-- end premier plata -->

<!-- Vehicular | Pago por kilometros | Unico -->
<div class="modal fade" id="vehicular-pagoporkilometros-unico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">

                <h1 class="modal-desglosename name-km" style="margin-bottom:1.8vw;">Pago por <br><span class="vehicular">Kilometros</span></h1>

                <div class="container">
                    <div class="row">
                        <div class="col-md-7">

                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th class="td-vehicular-km"><b>Promedio Kms. diarios</b></th>
                                        <th class="td-vehicular-km"><b>Plan de kms. anuales</b></th>
                                        <th class="td-vehicular-km"><b>Dcto. vs. un plan regular</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="td-vehicular-km">8</td>
                                        <td class="td-vehicular-km">3,000</td>
                                        <td class="td-vehicular-km">45%</td>
                                    </tr>
                                    <tr>
                                        <td class="td-vehicular-km">10</td>
                                        <td class="td-vehicular-km">4,000</td>
                                        <td class="td-vehicular-km">40%</td>
                                    </tr>
                                    <tr>
                                        <td class="td-vehicular-km">13</td>
                                        <td class="td-vehicular-km">5,000</td>
                                        <td class="td-vehicular-km">35%</td>
                                    </tr>
                                    <tr>
                                        <td class="td-vehicular-km">15</td>
                                        <td class="td-vehicular-km">6,000</td>
                                        <td class="td-vehicular-km">30%</td>
                                    </tr>
                                    <tr>
                                        <td class="td-vehicular-km">20</td>
                                        <td class="td-vehicular-km">8,000</td>
                                        <td class="td-vehicular-km">20%</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="descpagopork">Dispositivo contador de kilómetros sin costo adicional.</p>
                        </div> <!-- end col 1 -->
                        <div class="col-sm">
                            <!--<hr style="background-color:#FFC700;width:90%;">
                            <p class="detallepagopork">Tiene las mimas coberturas, deducibles y beneficios del plan Premier Oro y Plata</p>
                            <hr style="background-color:#FFC700;width:90%;">
                            <p class="detallepagopork">5 Paquetes para elegir con un descuento de hasta 45% frente a un plan Premier Oro y Plata sin límite de kilómetros</p>-->
                            <ul class="detallepagopork">
                                <li>Tiene las mimas coberturas, deducibles y beneficios del plan Premier Oro y Plata</li>
                              </ul>

                              <ul class="detallepagopork">
                                <li>5 Paquetes para elegir con un descuento de hasta 45% frente a un plan Premier Oro y Plata sin límite de kilómetros</li>
                              </ul>
                        </div><!-- end col 2 -->
                    </div><!-- end row -->
                </div> <!-- end container -->

            </div>
            <hr style="background-color:#FFC700;width:90%;">
            <div class="row text-center">
                <div class="col">
                    <a target="_blank" href="https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_vida_traffic:bkr-mas-prov:ramo-vehicular-pago-por-kilometros-mas:boton">
                        <button onclick="setTrazabilidad( 'cotizar','vehicular','pagoporkilometros','pagoporkilometros-info','subdesglose-vehicular')" type="button" class="btn btn-cotizar vehicular-bg text-center">Cotizar</button>
                        <a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>
