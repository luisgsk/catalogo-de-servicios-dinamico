
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Salud | Red Preferencial | Beneficios -->
<div class="modal fade" id="prueba" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color:#EDEDED !important;">

            <div class="modal-body">
                <h1 class="modal-desglosename salud">Beneficios</h1>
                <table class="table table-sm">
                    <thead>
                        <tr>
                          <th scope="col"><b>Clínica</b></th>
                          <th scope="col"></b>Red</b></th>
                        </tr>
                      </thead>
                    <tbody>
                    </tbody>
                </table>

            </div>
            <div class="row text-center">
                <div class="col">
                    <!-- boton 1 -->
                </div>
            </div>
            <div class="modal-footer">
                <a style="opacity:.5;" class="" data-dismiss="modal"><img class="table-icon" src="{{ asset('images') }}/icons/simbolo-x.svg"></a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        fetch_customer_data();
        function fetch_customer_data(query = '') {
            $.ajax({
                url: "{{ route('live_search.action') }}"
                , method: 'GET'
                , data: {
                    query: query
                }
                , dataType: 'json'
                , success: function(data) {
                    $('tbody').html(data.table_data);
                    //$('#total_records').text(data.total_data);
                    $('#prueba').modal('show');
                }
            })
        }

        $(document).on('keyup', '#search', function() {
            var query = $(this).val();
            fetch_customer_data(query);
        });

    });

</script>

<style>
    .modal-body{
  height: 30vw;
  width: 100%;
  overflow-y: auto;
}

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


        .table-icon {
            width: 1.5vw;
        }
    }

    /** end desktop **/

    @media (max-width: 850px) {



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
