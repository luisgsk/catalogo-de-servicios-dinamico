@if(isset($subseguro))
@switch($subseguro)
@case("redpreferencial")
<?php 
$subsegurobc = "Red Preferencial";
$idseguro = 1;
$link_cotizar_redes = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferencial-redes-mas:boton";
?>
<!-- end red preferencial -->
@break
@case("fullsalud")
<?php 
$subsegurobc = "Full Salud";
$idseguro = 2;
$link_cotizar_redes = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-full-salud-redes-mas:boton";
?>
<!-- end full salud -->
@break
@case("redmedica")
<?php 
$subsegurobc = "Red Médica";
$idseguro = 3;
$link_cotizar_redes = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-medica-redes-mas:boton";
?>
@break
@case("redpreferente");
<?php 
$subsegurobc = "Red Preferente";
$idseguro = 4;
$link_cotizar_redes = "https://corredores.rimac.com/login?mcid=catalogo-omni-bkr:referral:11_2020_salud_traffic:bkr-mas-prov:ramo-salud-red-preferente-redes-mas:boton";
?>
@break
@default
@endswitch
@endif

@extends('layouts.app', [
'class' => '',
'elementActive' => 'dashboard',
'breadcumb' => 'visible',
'breadcumb1' => $subsegurobc,
'breadcumbsub' => 'visible',
'breadcumb2' => 'Redes',
'subseguro' => $subseguro,
/*****************************
* Con la variable rsubseguro
* relleno el route del
* breadcumb en layouts.app,
* de esta manera al retornar
* con la flecha, fullpage
* se situa en el seguro
* antes seleccionado.
****************************/
'rsubseguro' => 'subsubsalud'
])


@section('content')

<div class="modal fade" id="modal-red" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Búsqueda por <span class="name3"></span></h1>
                <input id="searchmodal" type="text" class="form-control mb-2" placeholder="Buscar">
                <table class="table  table-striped table-sm tablemodal">
                    <thead style="width:100% !important;">
                        <tr>
                            <th><b><span class="name1"></span></b></th>
                            <th></b><span class="name2"></span></b></th>
                        </tr>
                    </thead>
                    <tbody class="tablemodalbody">
                    </tbody>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col mb-3 mt-3">
                    
                    <a target="_blank" href="{{$link_cotizar_redes}}">
                    <button onclick="setTrazabilidad( 'cotizar','salud','{{$subseguro}}','redes','subdesglose-salud')" type="button" class="btn btn-cotizar-segurodesglose" style="background-color:#42C1AD;">Cotizar</button>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div> <!-- end modal -->



<div class="container busquedax">
    <div class="row ">

        <div class="col-md-2 mobile mb-2 busquedamobile">
            <label class="mr-sm-2" for="inlineFormCustomSelect"></label>
            <select id="search" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option value="" selected>Selecciona</option>
                <option value="region">Región</option>
                <option value="clinica">Clínica</option>
                <option value="red">Red</option>
            </select>
        </div><!-- end col 2 -->


        <div class="col-md-8 busqueda" style="background-color:#EDEDED;border-radius:10px;">

            <div class="col-sm-3 my-2">
                <input id="searchindex" type="text" class="form-control" placeholder="Buscar..">
            </div>

            <div class="tableFixHead">
                <table class="table table-sm table-striped table-fixed table-hover tableindex">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="bodytabla">
                        <tr>
                            <td align="center" colspan="6" class="table-info">Seleccione una opción</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- end col 1 -->

        <div class="col-md-2 desktop busqueda">
            <label class="mr-sm-2" for="inlineFormCustomSelect"></label>
            <select id="search" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option value="" selected>Selecciona</option>
                <option value="region">Región</option>
                <option value="clinica">Clínica</option>
                <option value="red">Red</option>
            </select>
        </div><!-- end col 2 -->

    </div>
</div>

<script>
    function quitarAcentos(cadena) {
        const acentos = {
            'á': 'a'
            , 'é': 'e'
            , 'í': 'i'
            , 'ó': 'o'
            , 'ú': 'u'
            , 'Á': 'A'
            , 'É': 'E'
            , 'Í': 'I'
            , 'Ó': 'O'
            , 'Ú': 'U'
        };
        return cadena.split('').map(letra => acentos[letra] || letra).join('').toString();
    }

    $("#searchmodal").on("keyup", function() {
        var value = quitarAcentos($(this).val().toLowerCase());
        //console.log(value);

        $(".tablemodal tr").each(function(index) {
            if (index !== 0) {

                $row = $(this);

                var id = quitarAcentos($row.find("td:first").text().toLowerCase());
                //console.log (id);

                if (id.indexOf(value) !== 0) {
                    $row.hide();

                } else {
                    $row.show();


                }

                // $('tr:has(td:contains("'+value+'"))').show();




            }
        });
    });

    $("#searchindex").on("keyup", function() {
        var value = quitarAcentos($(this).val().toLowerCase());
        //console.log(value);

        $(".tableindex tr").each(function(index) {
            if (index !== 0) {

                $row = $(this);

                var id = quitarAcentos($row.find("td:first").text().toLowerCase());
                //console.log (id);

                if (id.indexOf(value) !== 0) {
                    $row.hide();
                } else {
                    $row.show();
                }
            }
        });
    });

    function showmodal(query,valor) {
        $.ajax({
            url: "{{ route('live_search.action') }}"
            , method: 'GET'
            , data: {
                query: query,
                valor: valor,
                seguroid: " {{$idseguro}} "
            }
            , dataType: 'json'
            , success: function(data) {
                $('.tablemodalbody').html(data.table_data);
                //$('.bodytabla').html(data.table_data);
                //$('#total_records').text(data.total_data);
                //console.log("{{$idseguro}}")
                $('#modal-red').modal('show');
                switch (query) {
                    case "regionmodal":
                        $('.name1').html('Clínica');
                        $('.name2').html('Red');
                        $('.name3').html('Región');
                        break;
                        case "clinicamodal":
                        $('.name1').html('Región');
                        $('.name2').html('Red');
                        $('.name3').html('Clínica');
                        break;
                        case "redmodal":
                        $('.name1').html('Región');
                        $('.name2').html('Clínica');
                        $('.name3').html('Red');
                        break;
                }
            }
        })
    } //end showmodal

    function fetch_customer_data(query = '', modo) {
        $.ajax({
            url: "{{ route('live_search.action') }}"
            , method: 'GET'
            , data: {
                query: query
            }
            , dataType: 'json'
            , success: function(data) {
                //$('tbody').html(data.table_data);
                $('.bodytabla').html(data.table_data);
                $('#searchindex').show();
                //$('#total_records').text(data.total_data);
                //$('#prueba').modal('show');
            }
        })
    }

    $(document).on('change', '#search', function() {
        var query = $(this).val();
        fetch_customer_data(query);
    });

    $('#searchindex').hide();
    fetch_customer_data('xx');

</script>



<style>
    @media (max-width: 850px) {

        .modal-body {
            max-height: 60vh;
            width: 100%;
            overflow-y: auto;
        }

        .tableFixHead {
            overflow-y: auto;
            max-height: 300px;
        }

        .tableFixHead thead th {
            position: sticky;
            top: 0;
        }

        /* Just common table stuff. Really. */
        table {
            border-collapse: collapse;
            width: 100%;
            transition: all .5s ease !important;
        }

        .tableindex th,
        td {
            padding: 8px 16px;
            text-align:Center !important
        }

        th {
            background: #eee;
        }

.busquedax {
   /* margin-top: 20vh;*/
    padding: 30px;

}

.busquedamobile {
    margin-top: 35vw;
}

.desktop{
    display:none;
}
.breadcumb0 {
    display: none;
}

.breadarrow {
    display: none;
}
}


    @media (min-width: 1000px) {
        .mobile{
            display:none;
        }
        .modal-body {
            height: 30vw;
            width: 100%;
            overflow-y: auto;
        }

        .tableFixHead {
            overflow-y: auto;
            max-height: 300px;
        }

        .tableFixHead thead th {
            position: sticky;
            top: 0;
        }

        /* Just common table stuff. Really. */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px 16px;
        }

        th {
            background: #eee;
        }

        .busqueda {
            margin-top: 15vw;
        }




    }

    .table-fixed {
        width: 100%;
        background-color: #f3f3f3;

        tbody {
            height: 200px;
            overflow-y: auto;
            width: 100%;
        }

        thead,
        tbody,
        tr,
        td,
        th {
            display: block;
        }

        tbody {
            td {
                float: left;
            }
        }

        thead {
            tr {
                th {
                    float: left;
                    background-color: #f39c12;
                    border-color: #e67e22;
                }
            }
        }
    }

    

</style>
@endsection
