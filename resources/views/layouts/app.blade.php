<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Rimac</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="Catálogo digital de Rimac." />
    <meta name="keywords" content="fullpage,jquery,demo,screen,fixed, header,footer, absolute, positioned,css" />
    <meta name="Resource-type" content="Document" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts') }}/lato/lato.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('fullpagejs') }}/dist/fullpage.css" />

    <!-- menu -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/menu.css" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- end menu -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <style>
        .vida {
            color: #e6281f !important;
        }

        .salud {
            color: #42C1AD !important;
        }

        .vehicular {
            color: #FFC700 !important;
        }

        /*#selectseguro .row {
            margin-top: 10vw; 
        }*/

        #portada {
            transition: all 1s ease !important;
        }

        .lato {
            font-family: 'Lato' !important;
            font-style: normal !important;
        }

        .btn-welcome {
            transition: all .5s ease !important;
        }

        .btn-welcome:hover {
            transform: scale(1.1);
            color: white;
        }

        #logorimacmobile {
            margin-bottom: 15vh !important;
            width: 70vw;
        }

        /****************************/
        /* Columnas seguros Desktop  */
        /****************************/
        @media (min-width: 1900px) {}

        @media (min-width: 1000px) {
            .csd {
                transition: all .5s ease !important;
            }

            .csd:hover {
                transform: scale(1.1);
            }

            #seguros-desktop {
                margin-top: 13%;
            }

            .btn-masinfo-selectplan {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 1.2vw;
                color: white;
                width: 14vw;
                transition: transform .5s;
                margin-top: 1.5vw;
            }

            .btn-masinfo-selectplan:hover {
                color: white;
                font-weight: 400 !important;
            }

            .btn-cotizar-selectplan {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 1.2vw;
                color: white;
                width: 14vw;
                transition: transform .5s;
                margin-top: .8vw;
            }

            .btn-cotizar-selectplan:hover {
                color: white;
                font-weight: 400 !important;
            }

            .segurostittle {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
                font-size: 2.2vw;
                color: #898B8D;
            }

            .segurosname {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 600 !important;
                font-size: 2.2vw;
                color: #898B8D;
            }

            .segurocontent {
                /*margin-left: 10vw;
                margin-right: 10vw;*/
                border-radius: 20px;
                -webkit-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                -moz-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);

            }

            .marco-segurocontent {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                border: 1px solid;
                margin: 8px;
                border-radius: 20px;
            }

            .cuadratura-segurocontent {
                margin-top: 11vw !important;
                margin-bottom: 3vh;
                display: block;
            }

            .cuadratura-segurocontent p {
                line-height: 1.2vw;
            }

            .segurocontent p {
                /*line-height: 7vw !important;*/
            }

            .seguro-vida-icon {
                width: 3.5vw;
                /*margin-bottom: 2vw;*/
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                top: 10%;
                text-align: center;
            }

            .seguro-salud-icon {
                width: 8vw;
                margin-bottom: 5vw;
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                top: 10%;
                text-align: center;
            }

            .seguro-vehicular-icon {
                width: 11vw;
                margin-bottom: 5vw;
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                top: 10%;
                text-align: center;
            }
        }

        /****************************/
        /* Columna seguros Mobile   */
        /****************************/
        @media (min-width: 250px) and (max-width: 399px) {

            #footertext{
        position:fixed;
        height: 50px;
        display:block;
        width: 100%;
        /*background: #333;*/
        z-index:9;
        font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
        color: #898b8d;
        padding: 20px 0 0 0;
        font-size:1vh;
        max-width: 300px;
        line-height: 1.5vh;
        text-align:right!important;
        max-width: 70% !important;
    }
    #footertext{
        right:10px !important;
        margin-bottom: -10px!important;
    }
  }/*end 450px*/

        @media (max-width: 850px) {

            #footertext{
        position:fixed;
        height: 50px;
        display:block;
        width: 100%;
        /*background: #333;*/
        z-index:9;
        font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
        color: #898b8d;
        padding: 20px 0 0 0;
        font-size:1vh;
        max-width: 300px;
        line-height: 1.5vh;
        text-align:right!important;
        max-width: 70% !important;
    }
    #footertext{
        bottom:8px ;
        right:10px ;
    }

            .btn-masinfo-selectplan {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 5.5vw;
                color: white;
                width: 50vw;
                transition: transform .5s;
            }

            .btn-masinfo-selectplan:hover {
                color: white;
                font-weight: 400 !important;
            }

            .btn-cotizar-selectplan {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 5.5vw;
                color: white;
                width: 50vw;
                transition: transform .5s;
                margin-top: 5vw;
            }

            .btn-cotizar-selectplan:hover {
                color: white;
                font-weight: 400 !important;
            }

            .segurostittle {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 400 !important;
                font-size: 7vw;
                color: #898B8D;
            }

            .segurosname {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 600 !important;
                font-size: 7vw;
                color: #898B8D;
            }

            .segurocontent {
                margin-left: 10vw;
                margin-right: 10vw;
                border-radius: 20px;
                -webkit-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                -moz-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);

            }

            .marco-segurocontent {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                border: 1px solid;
                margin: 10px;
                border-radius: 20px;
            }

            .cuadratura-segurocontent {
                margin-top: 25vh !important;
                margin-bottom: 3vh;
                display: block;

            }

            .segurocontent p {
                line-height: 7vw !important;
            }

            .seguro-vida-icon {
                width: 12vw;
                margin-bottom: 5vw;
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                top: 15%;
                text-align: center;
            }

            .seguro-salud-icon {
                width: 30vw;
                margin-bottom: 5vw;
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                top: 15%;
                text-align: center;
            }

            .seguro-vehicular-icon {
                width: 40vw;
                margin-bottom: 5vw;
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                top: 15%;
                text-align: center;
            }

        }

        /* Fondo Franja Roja y content portada Desktop
	* --------------------------------------- */
        @media (min-width: 1000px) {

            #logomenudesktop {
                width: 10vw;
            }

            .slide,
            .fp-controlArrow,
            #logomobile,
            #footer,
            #fondoappmobile,
            #comencemosmobile,
            #logomenumobile,
            #legales {
                display: none !important;
            }

            #header {
                position: fixed;
                height: 50px;
                display: block;
                width: 100%;
                background: transparent !important;
                z-index: 9;
                text-align: center;
                color: #f2f2f2;
                padding: 20px 0 0 0;
            }

            #header {
                transition: all 24s ease !important;
                top: 0px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                border-bottom: 0vw solid !important;

            }

            #icon-menu {
                width: 2vw;
                position: absolute;
                left: 0;
                margin-left: 5%;
                margin-top: -1vh;
            }


            #selectseguro .col {
                margin-top: 3vw;
                position: absolute;
            }

            #selectseguro h2 {
                font-family: 'Lato' !important;
                font-weight: 600 !important;
                font-style: normal !important;
                font-size: 2.5vw;
                color: white;
                display: inline-block !important;
            }

            #selectseguro br {
                display: none;
            }

            #logorimacdesktop {
                width: 17vw;
                margin-bottom: 5vw;
                position: absolute;
                margin-left: auto;
                margin-right: auto;
                left: 75%;
                right: 0;
                top: 90%;
                text-align: center;
            }

            #fondoappdesktop {
                position: fixed;
                margin-top: -15.6vw;
            }

            .cuadratura-portada {
                margin-top: -25vh !important;
            }

            .welcome {
                font-family: 'Lato' !important;
                font-weight: 700 !important;
                font-style: normal !important;
                font-size: 5vw;
                color: white;
                margin-bottom: 5vh;
            }

            .btn-welcome {
                background-color: #42c1ad;
                font-family: 'Lato' !important;
                font-weight: 550 !important;
                font-style: normal !important;
                font-size: 1.5vw;
                color: white;
                width: 40vh;
                letter-spacing: 0.8px;
                transition: transform .5s;
            }
        }

        /* Fondo Franja Roja y content portada Mobile
* --------------------------------------- */
        @media (max-width: 850px) {

            #icon-menu {
                width: 7vw;
                position: absolute;
                left: 0;
                margin-left: 5%;
                margin-top: -1vh;
            }

            #fondoappdesktop,
            #seguros-desktop,
            #seguros-desktop-vehicular,
            #logorimacdesktop,
            #comencemosdesktop,
            #logomenudesktop,
            .aviso-vida,
            .aviso-vehicular {
                display: none;
            }

            #logomenumobile {
                width: 35vw;
                margin-top: -2vh;
            }

            #logomobile {
                width: 25vw;
                margin-top: -2vh;
            }

            #fondoappmobile {
                height: 85%;
                z-index: -99999;
                position: fixed;
                transition: all 1s ease !important;
            }

            #selectseguro .col {
                margin-top: 15vw;
                margin-bottom: -28vw;
            }

            #selectseguro h2 {
                font-family: 'Lato' !important;
                font-weight: 500 !important;
                font-style: normal !important;
                font-size: 8vw;
                color: white;
            }

            .welcome {
                font-family: 'Lato' !important;
                font-weight: 700 !important;
                font-style: normal !important;
                font-size: 10vw;
                color: white;
                margin-bottom: 5vh;
            }

            .btn-welcome {
                background-color: #42c1ad;
                font-family: 'Lato' !important;
                font-weight: 550 !important;
                font-style: normal !important;
                font-size: 5.5vw;
                color: white;
                width: 40vh;
                letter-spacing: 0.8px;
                transition: transform .5s;
            }
        }

        #footer,
        #header {
            position: fixed;
            height: 50px;
            display: block;
            width: 100%;
            background: transparent !important;
            z-index: 9;
            text-align: center;
            color: #f2f2f2;
            padding: 20px 0 0 0;
        }

        #header {
            transition: all 24s ease !important;
            top: 0px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border-bottom: .3vw solid;

        }

        #footer {
            bottom: 0px;
            color: #e6281f;
            margin-bottom: 3vw;
        }

        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #EDEDED;
            background-size: 25px !important;
        }

        /* Breadcumb Desktop
* --------------------------------------- */

        @media (min-width: 1900px) {
            .breadcumbs {
                margin-top: 15vh;
                position: absolute;
                z-index: 1;
            }

            .arrow-breadcumbs {
                width: 1.9vw !important;
                margin-left: 13vw;
                margin-right: 1.9vw !important;
            }

            .tittle-breadcumbs {

                font-family: 'Lato' !important;
                font-weight: 500 !important;
                font-style: normal !important;
                font-size: 1.9vw !important;
                color: white;
            }
        }

        /** end 1900px **/

        @media (min-width: 250px) and (max-width: 399px) {

            .breadcumbs {
                margin-top: 12vh !important;
                position: absolute;
                z-index: 1;
            }

            .arrow-breadcumbs {
                width: 7vw;
                margin-left: 10vw;
                margin-right: 5.5vw;
            }

            .tittle-breadcumbs {

                font-family: 'Lato' !important;
                font-weight: 700 !important;
                font-style: normal !important;
                font-size: 7vw;
                color: white;
            }
        }

        @media (min-width: 1000px) {
            .breadcumbs {
                margin-top: 15vh;
                position: absolute;
                z-index: 1;
            }

            .arrow-breadcumbs {
                width: 2.5vw;
                margin-left: 13vw;
                margin-right: 2.5vw;
            }

            .tittle-breadcumbs {

                font-family: 'Lato' !important;
                font-weight: 500 !important;
                font-style: normal !important;
                font-size: 2.5vw;
                color: white;
            }
        }

        /* Breadcumb Mobile
* --------------------------------------- */
        @media (max-width: 850px) {




            .breadcumbs {
                margin-top: 15vh;
                position: absolute;
                z-index: 1;
            }

            .arrow-breadcumbs {
                width: 7vw;
                margin-left: 10vw;
                margin-right: 5.5vw;
            }

            .tittle-breadcumbs {

                font-family: 'Lato' !important;
                font-weight: 700 !important;
                font-style: normal !important;
                font-size: 7vw;
                color: white;
            }
        }


        /****************************/
        /* Columnas Sub seguros Desktop 1900  */
        /****************************/

        @media (min-width: 1700px) {

            #cuadratura-vehicular{
                margin-top: 3.7vw;
             }




            .aviso-vida {
                margin-left: 21vw !important;
                margin-top: 1.5vw;
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
            }

            #cuadratura-vida {
                margin-top: 6.8vh !important;
            }#cuadratura-vida2 {
                margin-top: 5vh;
            }


            .hrpdesdeup {
                margin-top: 5vh !important;
            }

            .hrpdesdedown {
                margin-bottom: .5vh !important;
            }

            .subseguropdesde {
                font-family: 'Lato' !important;
                font-weight: 400 !important;
                font-size: .8vw !important;
                color: #898b8d;
                text-align: center !important;
            }

            .subsegurodesc {
                font-family: 'Lato' !important;
                font-weight: 100 !important;
                font-size: 1.7vh !important;
                color: #898b8d;
                text-align: center !important;
                margin-left: .2vw !important;
                margin-right: .2vw !important;
                margin-bottom: 1vh;
            }

            .cuadratura-subsegurocontent .subsegurodesc {
                line-height: 1.9vh !important;
            }

            /** 1900px **/
            .btn-cotizar-subseguro {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 1vw !important;
                color: white;
                width: 10vw !important;
                transition: transform .5s;
                margin-top: .8vw;
            }

            /** 1900px **/
            .btn-cotizar-subseguro:hover {
                color: white !important;
                font-weight: 300 !important;
            }

            /** 1900px **/
            .btn-masinfo-subseguro {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: .9vw !important;
                color: white;
                width: 10vw !important;
                transition: transform .5s;
                margin-top: 1vw !important;
            }

            /** 1900px **/
            .btn-masinfo-subseguro:hover {
                color: white !important;
                font-weight: 300 !important;
            }

            /** 1900px **/
            .subsegurostittle {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
                font-size: 1.4vw !important;
                color: #898B8D;
            }

            /** 1900px **/
            .subsegurosname {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 600 !important;
                font-size: 1.6vw !important;
                color: #898B8D;
            }

        }

        /** end 1900px **/
        @media (min-width: 1200px) and (max-width: 1299px){

            .aviso-vehicular {
                margin-left: 6.2vw !important;
                margin-top: 1.5vw;
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
                font-size: .9vw;
                color: #898b8d;
            }

            .descvehicularlarga {
                font-size:1.3vw !important;
                line-height: 1.4vw !important;
            }

            .descvehicular {
                font-size:1vw !important;
                line-height: 1.2vw !important;
             }
            

            #cuadratura-vehicular{
                margin-top: 5vw;
             }
             .cuadratura-vehicular2{
                margin-top: 6.1vw !important;
             }

             #cuadratura-vida {
                margin-top: 2.4vw !important;
             }#cuadratura-vida2 {
                margin-top: 4.6vh;
            }

             .descvida {
                font-size: 1.1vw !important;
                line-height: 1.2vw !important;
             }

            }

        @media (min-width: 1500px) and (max-width: 1600px) {


            .descvehicularlarga {
                font-size:.8vw !important;
                line-height: 1.1vw !important;
            }

            #cuadratura-vehicular{
                margin-top: 4vw;
             }
             .cuadratura-vehicular2{
                margin-top: 3.6vw !important;
             }
             .descvehicular {
                font-size:.9vw !important;
                line-height: 1.1vw !important;
             }
             }/*end 1500**/

        @media (min-width: 1300px) and (max-width: 1400px){

            .descvehicularlarga {
                font-size:.8vw;
            }

            .descvida {
                font-size:1vw !important;
            }

            #cuadratura-vida {
                margin-top: 5vh;
            }

            .descvehicular {
                font-size:.9vw !important;
                line-height: 1.1vw !important;
             }

            #cuadratura-vehicular{
                margin-top: 4vw;
             }

            .cuadratura-vehicular2{
                margin-top: 5vw !important;
             }

             .aviso-vehicular {
                margin-left: 8.2vw !important;
                margin-top: 1.5vw;
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
                font-sizE: .9vw;
                color: #898b8d;
            }

             }/**end 1300**/




        /****************************/
        /* Columnas Sub seguros Desktop 1000  */
        /****************************/
        @media (min-width: 1000px) {

            .aviso-vehicular {
                margin-left: 14vw;
                margin-top: 1.5vw;
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
                font-sizE: .9vw;
                color: #898b8d;
            }

            .aviso-vida {
                margin-left: 14vw;
                margin-top: 1.5vw;
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
                color: #898b8d;
            }

            #cuadratura-vida {
                margin-top: 1.8vh;
            }

            #seguros-desktop-vehicular {
                margin-top: 11.3%;
            }



            /*.subsegurocontent:hover  .subsegurodesc-vida {
                font-size: 1.2vw !important;
                line-height: 2.7vh !important;
                margin-bottom: 0vh !important;
                transition: all .1s ease !important;
            }*/


            .hrpdesdeup-vehicular {
                margin-top: 5.5vh;
            }

            .hrpdesdeup-vehicular-km {
                margin-top: 11vh;
            }

            .hrpdesdeup {
                margin-top: 2.5vh;
            }

            .hrpdesdedown {
                margin-bottom: .5vh;
            }

            .subseguropdesde {
                font-family: 'Lato' !important;
                font-weight: 400 !important;
                font-size: 1vw;
                color: #898b8d;
                text-align: center !important;
                line-height: .1vh !important;

            }

            .subsegurodesc {
                font-family: 'Lato' !important;
                font-weight: 100 !important;
                font-size: 2.5vh;
                color: #898b8d;
                text-align: center !important;
                margin-left: 1vw;
                margin-right: 1vw;
                margin-bottom: 1vh;
            }

            .cuadratura-subsegurocontent .subsegurodesc {
                line-height: 3vh;
            }

            .csd {
                transition: all .5s ease !important;
            }

            .csd:hover {
                transform: scale(1.1);
            }

            #seguros-desktop {
                margin-top: 13%;
            }

            .btn-masinfo-subseguro {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 1.2vw;
                color: white;
                width: 13vw;
                transition: transform .5s;
                margin-top: 1.5vw;
            }

            .btn-masinfo-subseguro:hover {
                color: white !important;
                font-weight: 400 !important;
            }

            .btn-cotizar-subseguro {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 1.2vw;
                color: white;
                width: 13vw;
                transition: transform .5s;
                margin-top: .8vw;
            }

            .btn-cotizar-subseguro:hover {
                color: white !important;
                font-weight: 400 !important;
            }

            .subsegurostittle {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
                font-size: 1.8vw;
                color: #898B8D;
            }

            .subsegurosname {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 600 !important;
                font-size: 1.8vw;
                color: #898B8D;
            }

            .subsegurocontent {
                /*margin-left: 10vw;
                margin-right: 10vw;*/
                border-radius: 20px;
                -webkit-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                -moz-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);

            }

            .marco-segurocontent {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                border: 1px solid;
                margin: 8px;
                border-radius: 20px;
            }

            .cuadratura-subsegurocontent {
                margin-top: 2vw !important;
                margin-bottom: 3vh;
                display: block;
            }

            .cuadratura-subsegurocontent p {
                line-height: .8vw;
            }

            .segurocontent p {
                /*line-height: 7vw !important;*/
            }
        }


        /**********************************/
        /* Columnas Sub Seguros Mobile   */
        /********************************/
        @media (min-width: 250px) and (max-width: 399px) {

            .subsegurodesc2 {/** vida **/
                font-family: 'Lato' !important;
                font-weight: 100 !important;
                
                color: #898b8d;
                text-align: center !important;
                margin-left: 10vw;
                margin-right: 10vw;
                margin-bottom: 5vh;

                font-size: 4.5vw !important; 
                line-height:.9vh !important;
            }

            .subsegurodesc3 {/** vida **/
                font-family: 'Lato' !important;
                font-weight: 100 !important;
                
                color: #898b8d;
                text-align: center !important;
                margin-left: 10vw;
                margin-right: 10vw;
                margin-bottom: 5vh;

                font-size: 4.5vw !important; 
                line-height:10.5vh ;
            }

            #cuadratura-vida {
                margin-top: 0vh !important;
            }

            .cuadratura-subsegurocontent {
                /*margin-top: -1.3vh !important;*/
                margin-bottom: 3vh;
                display: block;

            }

            #legales{
        position:fixed;
        /*height: 50px;*/
        display:block;
        /*width: 100%;*/
        /*background: #333;*/
        z-index:9;
        text-align:center;
        color: #f2f2f2;
        font-size:1.1vh !important;
        bottom:5px;
        left: 10px;
        
    }
    }/*end 450px*/
        @media (max-width: 850px) {

            #cuadratura-vida {
                margin-top: 5vh;
            }

            #legales{
		position:fixed;
		/*height: 50px;*/
		display:block;
		/*width: 100%;*/
		/*background: #333;*/
		z-index:9;
		text-align:center;
        color: #f2f2f2;
        font-size:1.5vh;
        bottom:5px;
        left: 10px;
		
	}

            .hrpdesdeup {
                margin-bottom: .1vh !important;
            }

            .hrpdesdedown {
                margin-top: -1.7vh !important;
            }

            .subseguropdesde {
                font-family: 'Lato' !important;
                font-weight: 400 !important;
                font-size: 4.5vw;
                color: #898b8d;
                text-align: center !important;
                line-height: .1vh !important;

            }

            .subsegurodesc {
                font-family: 'Lato' !important;
                font-weight: 100 !important;
                font-size: 5vw;
                color: #898b8d;
                text-align: center !important;
                margin-left: 10vw;
                margin-right: 10vw;
                margin-bottom: 5vh;
            }

            .subsegurodesc2 {
                font-family: 'Lato' !important;
                font-weight: 100 !important;
                
                color: #898b8d;
                text-align: center !important;
                margin-left: 10vw;
                margin-right: 10vw;
                margin-bottom: 5vh;

                font-size: 5vw ; 
                line-height:3.3vh ;
            }

            .btn-masinfo-subseguro {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 5.5vw;
                color: white;
                width: 50vw;
                transition: transform .5s;
            }

            .btn-masinfo-subseguro:hover {
                color: white !important;
                font-weight: 400 !important;
            }

            .btn-cotizar-subseguro {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 5.5vw;
                color: white;
                width: 50vw;
                transition: transform .5s;
                margin-top: 5vw;
            }

            .btn-cotizar-subseguro:hover {
                color: white !important;
                font-weight: 400 !important;
            }

            .subsegurostittle {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 400 !important;
                font-size: 8vw;
                color: #898B8D;
            }

            .subsegurosname {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 600 !important;
                font-size: 9vw;
                color: #898B8D;
            }

            .subsegurocontent {
                margin-left: 10vw;
                margin-right: 10vw;
                border-radius: 20px;
                -webkit-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                -moz-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                margin-top: 15vh;

            }

            .marco-subsegurocontent {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                border: 1px solid;
                margin: 10px;
                border-radius: 20px;
            }

            .cuadratura-subsegurocontent {
                margin-top: 1vh;
                margin-bottom: 3vh;
                display: block;

            }

            .subsegurocontent p {
                line-height: 7vw !important;
            }


        }


        /****************************/
        /* Columnas Seguro Desglose Desktop  */
        /****************************/
        @media (min-width: 1900px) {

            .btn-masinfo-segurodesglose {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: .9vw !important;
                color: white;
                width: 10vw !important;
                transition: transform .5s;
                margin-top: 1.5vw;
            }

            .btn-masinfo-segurodesglose:hover {
                color: white !important;
                font-weight: 300 !important;
            }

            .btn-cotizar-segurodesglose {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: .9vw !important;
                color: white;
                width: 10vw !important;
                transition: transform .5s;
                margin-top: .8vw;
            }

            .btn-cotizar-segurodesglose:hover {
                color: white !important;
                font-weight: 300 !important;
            }

            .segurodesglosetittle {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
                font-size: 2.2vw;
                color: #898B8D;
            }

            .segurodesglosename {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 600 !important;
                font-size: 1.7vw !important;
                color: #898B8D;
                position: absolute;
                line-height: 2vw;
                margin-left: auto;
                margin-right: auto;
                top: 28%;
                left: 0;
                right: 0;

                text-align: center;
            }

        }

        /** end 1900px **/

        @media (min-width: 1000px) {

            .csd {
                transition: all .5s ease !important;
            }

            .csd:hover {
                transform: scale(1.1);
            }

            #seguros-desktop {
                margin-top: 13%;
            }

            .btn-masinfo-segurodesglose {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 1.2vw;
                color: white;
                width: 13vw;
                transition: transform .5s;
                margin-top: 1.5vw;
            }

            .btn-masinfo-segurodesglose:hover {
                color: white !important;
                font-weight: 400 !important;
            }

            .btn-cotizar-segurodesglose {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 1.2vw;
                color: white;
                width: 13vw;
                transition: transform .5s;
                margin-top: .8vw;
            }

            .btn-cotizar-segurodesglose:hover {
                color: white !important;
                font-weight: 400 !important;
            }

            .segurodesglosetittle {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
                font-size: 2.2vw;
                color: #898B8D;
            }

            .segurodesglosename {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 600 !important;
                font-size: 2.2vw;
                color: #898B8D;
                position: absolute;
                line-height: 2vw;
                margin-left: auto;
                margin-right: auto;
                top: 28%;
                left: 0;
                right: 0;

                text-align: center;
            }

            .segurodesglosecontent {
                border-radius: 20px;
                -webkit-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                -moz-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);

            }

            .marco-desglosesegurocontent {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                border: 1px solid;
                margin: 8px;
                border-radius: 20px;
            }

            .cuadratura-segurodesglosecontent {
                margin-top: 10vw !important;
                margin-bottom: 3vh;
                display: block;
            }

        }

        /**********************************/
        /* Columnas Seguro Desglose Mobile   */
        /********************************/
        @media (max-width: 850px) {

            .segurodesglosedesc {
                font-family: 'Lato' !important;
                font-weight: 100 !important;
                font-size: 5vw;
                color: #898b8d;
                text-align: center !important;
                margin-left: 10vw;
                margin-right: 10vw;
                margin-bottom: 5vh;
            }

            .btn-masinfo-segurodesglose {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 5.5vw;
                color: white;
                width: 50vw;
                transition: transform .5s;
                margin-top: 10vh;
            }

            .btn-masinfo-segurodesglose:hover {
                color: white !important;
                font-weight: 400 !important;
            }

            .btn-cotizar-segurodesglose {
                font-family: 'Lato' !important;
                font-weight: 200 !important;
                font-style: normal !important;
                font-size: 5.5vw;
                color: white;
                width: 50vw;
                transition: transform .5s;
                margin-top: 5vw;
            }

            .btn-cotizar-segurodesglose:hover {
                color: white !important;
                font-weight: 400 !important;
            }

            .segurodesglosetittle {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 400 !important;
                font-size: 8vw;
                color: #898B8D;
            }

            .segurodesglosename {
                font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 600 !important;
                font-size: 9vw;
                color: #898B8D;
                line-height: 5vh;
                /*position: absolute;*/
                margin-left: auto;
                margin-right: auto;
                left: 0;
                right: 0;
                top: 15%;
                text-align: center;
            }

            .segurodesglosecontent {
                margin-left: 10vw;
                margin-right: 10vw;
                border-radius: 20px;
                -webkit-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                -moz-box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                box-shadow: 0px 0px 5px 1px rgba(0, 0, 0, 0.26);
                margin-top: 15vh;

            }

            .marco-segurodesglosecontent {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                border: 1px solid;
                margin: 10px;
                border-radius: 20px;
            }

            .cuadratura-segurodesglosecontent {
                margin-top: 15vh !important;
                margin-bottom: 3vh;
                display: block;

            }


        }

         #footertext{
        position:fixed;
        height: 50px;
        display:block;
        width: 100%;
        /*background: #333;*/
        font-family: 'Lato' !important;
                font-style: normal !important;
                font-weight: 200 !important;
        z-index:9;
        text-align:center;
        color: #898b8d;
        padding: 20px 0 0 0;
    }
    #footertext{
        bottom:0px;
    }

    </style>
<body>
    <?php
    if(isset($cliente[0]["id"])) {
    echo "<script>";
    echo 'console.log("session_id: '.$session[0]->session_id.'");';
    //echo 'console.log("cliente_id: '.$cliente[0]["id"].'");';
    //echo 'console.log("nombre_cliente: '.$cliente[0]["nombre"].'");';
    //echo 'console.log("ap_paterno: '.$cliente[0]["ap_paterno"].'");';
    //echo 'console.log("ap_materno: '.$cliente[0]["ap_materno"].'");';
    //echo 'console.log("correo: '.$cliente[0]["correo"].'");';
    echo "</script>";
    }
    ?>
    @include('layouts.menu')
    <div class="loader"></div><!-- white onload page -->
    <div id="header"><a href="#" id="sidebarCollapse" onclick="setTrazabilidad( 'click-menu','n-a','n-a','n-a','n-a' )"><img id="icon-menu" src="{{ asset('images') }}/icons/IconoMenu.svg"></a><img src="{{ asset('images') }}/logo/LogoRimacChicoBlanco.svg" id="logomobile"></div>
    <img src="{{ asset('images') }}/bg/FondoMobile2.svg" id="fondoappmobile">
    <img src="{{ asset('images') }}/bg/FondoDesktop.svg" id="fondoappdesktop">
    <img src="{{ asset('images') }}/logo/LogoRimacRed.svg" id="logorimacdesktop">
    <div id="footertext">Este documento no es un folleto informativo y contiene información parcial. Infórmate de los términos, condiciones y restricciones con tu ejecutivo o en <a target="_blank" href="https://rimac.com.pe"><b>rimac.com.pe</b></a></div>
    <!-- contenido -->

    <!-- breadcumb -->
    <div class="container breadcumbs" style="display:{{$breadcumb}}">
        <div class="row">
            <?php

        if(strpos($rsubseguro,"sub") !== false){
            $name =  'desglose-'.str_replace('sub','',$rsubseguro);
        }else{
            $name = 'seguros-'.str_replace('sub','',$rsubseguro);
        }

            ?>
            <a onclick="setTrazabilidad( 'btn-atras','{{str_replace('sub','',$rsubseguro)}}','n-a','n-a','{{$name }}')" href="{{ route('home',['cliente_id' => $cliente[0]["id"],'rsubseguro' => $rsubseguro ]) }}">
                <img class="arrow-breadcumbs" src="{{ asset('images') }}/icons/IconoRetroceder.svg">
            </a>
            <h1 class="tittle-breadcumbs"><span class="breadcumb0"> {{$breadcumb1}}</span> <span class="subbreadcumb" style="display:{{$breadcumbsub}}"> <span class="breadarrow">></span> {{$breadcumb2}}</span> </h1>
        </div>
    </div>

    @yield('content')
    @include('layouts.modals')
</body>

<!--<script type="text/javascript" src="../dist/fullpage.js"></script>
<script type="text/javascript" src="examples.js"></script>-->
<script src="{{ asset('fullpagejs') }}/dist/fullpage.js"></script>
<!--<script src="{{ asset('fullpagejs') }}/examples.js"></script>-->

<script type="text/javascript">

    /***********************************************************
        Estas variables y función es para no repetir la trazabilidad
        del click-comencemos y swipe-comencemos.
    ************************************************************/
    window.onleavecount = 0;

    //Con esta se evita trazar de nuevo cuando se retorna por la flecha
    window.checkreturn = "<?php if(isset($_GET['rsubseguro'])){echo $_GET['rsubseguro'];}else{echo 0;} ?> ";
    function noRepeatComencemos() {
        window.onleavecount = window.onleavecount + 1;
    }

    /***********************************************************
        Función para trazabilidad
    ************************************************************/

    function setTrazabilidad(accion, seguro, subseguro, desglose, seccion) {
        var ruta = "https://r.ibrlatam.com/setlog/" + accion + "/" + seguro + "/" + subseguro + "/" + desglose + "/" + seccion
        console.log("ruta: " + ruta);
        $.ajax({
            url: ruta
            , dataType: "json"
            , type: "get"
            , beforeSend: function(xhr) {
                //xhr.setRequestHeader('api_key', '$2y$10$c.1XGUOfVL2HUAGCkGzT5u1cmyDRdZ7SpaWRme0nk9d9xtg8y85mu');
            }
            , success: function(response) {
                //console.log(response);

            } //end success
        });

    } // end setTrazabilidad()

    /***********************************************************
        FullPage Js
    ************************************************************/
    var myFullpage = new fullpage('#fullpage', {
        //anchors: ['firstPage', 'secondPage', '3rdPage'],
        //sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
        menu: '#main-nav'
        , css3: true
        , normalScrollElements: '.modal-dialog, .modal-content',

        /***********************************************************
          Al cargar la página
        ************************************************************/
        afterLoad: function(origin, destination, direction) {
            var params = {
                origin: origin
                , destination: destination
                , direction: direction
            };

            var actualPage = params['destination']['anchor'];

            if (actualPage == "portada") {
                $("#logomobile").hide();
                $("#header").css("border-bottom", "0");
            } else {
                $("#logomobile").show();
                $("#fondoappmobile").css("height", "50%");
                $("#fondoappmobile").css("margin-left", "1vw");
            }

            var actualSlide = params['destination']['index'];
            //console.log(actualSlide);
            //addToLog('afterLoad', params);
            // console.log("--- afterLoad ---");
            // console.log(params);
            //console.log('===============');

            //deleteLog = true;
        },
        /***********************************************************
          Al bajar o Subir
        ************************************************************/

        onLeave: function(origin, destination, direction) {
            var params = {
                origin: origin
                , destination: destination
                , direction: direction
            };

            var actualPage = params['destination']['anchor'];
            var actualSlide = params['destination']['index'];
            var originPage = params['origin']['anchor'];
            //console.log(actualSlide);
            //console.log(actualPage);
            //console.log(params['origin']['index']);

            /***********************************************************
            Trazo el Swipe desde la portada solo una vez, consultando
            por que el origen sea la portada, el destino sea 
            select plan y la variable global esté en 0;
            ************************************************************/
            if (originPage == "portada" && actualSlide == 1 && actualPage == "selectplan" && window.onleavecount == 0 && window.checkreturn == 0) {
                window.onleavecount = window.onleavecount + 1
                setTrazabilidad('swipe-comencemos', 'n-a', 'n-a', 'n-a', 'inicio');
                //console.log(" hiiiii "+window.checkreturn);
                //console.log(window.onleavecount);
            }

            if (actualPage == "portada") {
                //$("#fondoappmobile").css("transition", "all 1s ease");
                $("#fondoappmobile").css("height", "85%");
                $("#fondoappmobile").css("margin-left", "0");
                $("#footer").css("display", "block");
                $("#logomobile").css("display", 'none');
                $("#header").css("border-bottom", "0");
            } else {
                //$("#fondoappmobile").css("transition", "all 1s ease");
                $("#fondoappmobile").css("height", "50%");
                $("#fondoappmobile").css("margin-left", "1vw");
                $("#footer").css("display", "none");
                $("#logomobile").css("transition", "all 1s ease");
                $("#logomobile").show()
                $("#header").css("border-bottom", ".3vw solid");
            }

            //console.log("--- onLeave ---");
            //console.log("SB "+actualSlide);
            //console.log(params);
            //console.log('===============');
        },
        /***********************************************************
          Al cambiar Slide
        ************************************************************/
        onSlideLeave: function(section, origin, destination, direction) {
            var params = {
                section: section
                , origin: origin
                , destination: destination
                , direction: direction
            };
            var actualSection = params['section']['anchor'];
            var actualSlide = params['destination']['index'];

            //console.log("--- onSlideLeave ---");
            //console.log("CS "+actualSlide);
            //console.log('===============');

            if (actualSection == 'selectplan') {
                switch (actualSlide) {
                    case 0:
                        console.log("seguro vida");
                        //setTrazabilidad( 'swipe-hacia-vida','n-a','n-a','n-a','inicio' );
                        break;
                    case 1:
                        console.log("seguro salud");
                        //setTrazabilidad( 'swipe-hacia-salud','n-a','n-a','n-a','inicio' );
                        break;
                    case 2:
                        console.log("seguro vehicular");
                        //setTrazabilidad( 'swipe-hacia-vehicular','n-a','n-a','n-a','inicio' );
                        break;
                }
            }

            if (actualSlide == 0) {
                $('.fp-controlArrow.fp-prev').css('left', '-20vw');
                //$('.fp-controlArrow.fp-prev').hide();
            } else {
                $('.fp-controlArrow.fp-prev').css('left', '-3.5vw');
                //$('.fp-controlArrow.fp-prev').show();
            }
        }

    });

</script>
<script>
    /*var divId = "#seguros-desktop";
    $('#comencemosdesktop').click(function() {
        divId = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $("#seguros-desktop").offset().top - 280
        }, 800);
    });*/

    $(window).on("load", function() {
        jQuery(".loader").fadeOut("slow");

        document.querySelector('#comencemosmobile').addEventListener('click', function(e) {
            e.preventDefault();
            fullpage_api.moveSectionDown();
        });
        document.querySelector('#comencemosdesktop').addEventListener('click', function(e) {
            e.preventDefault();
            fullpage_api.moveSectionDown();
        });

    });

</script>
<!-- ======================================
    Consulto si esta seteada la variable
    rsubseguro (returnSubSeguro), con esto sé
    que se está retornando desde cualquier
    sección subseguro.
     ======================================-->
@if(isset($_GET["rsubseguro"]))

@switch($_GET["rsubseguro"])
@case("vida")
<script>
    fullpage_api.moveTo(2, 0);

</script><!-- slide 2, indice 0 -->
@break
@case("subvida")
<script>
    window.location.href = "/vida";

</script><!-- vida principal -->
@break
@case("salud")
<script>
    fullpage_api.moveTo(2, 1);

</script><!-- slide 2, indice 1 -->
@break
@case("subsalud")
<script>
    window.location.href = "/salud";

</script><!-- salud principal -->
@break
@case("subsubsalud")
<script>
    var sub = "{{$rsubseguro}}";
    window.location.href = "/salud/{{$rsubseguro}}";
</script><!-- salud principal -->
@break
@case("vehicular")
<script>
    fullpage_api.moveTo(2, 2);

</script><!-- slide 2, indice 2 -->
@break
@case("subvehicular")
<script>
    window.location.href = "/vehicular";

</script><!-- vehicular principal -->
@break
@default
@endswitch

@endif
<!-- aqui -->
<?php if (!isset($_GET["rsubseguro"])) {
$session_count = 0;
}else {
    $session_count = 1;
}
?>

<!--@if (!isset($_GET["rsubseguro"]))
{{ $session_count = 0 }}
@else
{{ $session_count = 1 }}
@endif-->
<script>
    function seguroDesglose(seguro, subseguro) {
        window.location = "/" + seguro + "/" + subseguro;
        //window.location.href = " {{ route('seguros.desglose',['seguros' => "+seguro+", 'subseguro' => "+subseguro+"]) }} ";
        //alert(seguro+","+subseguro);
    }

    function showDesglose(seguro, subseguro, desglose) {

        if(desglose != "redes"){
        var idmodal = seguro + "-" + subseguro + "-" + desglose;
        console.log(idmodal)
        $('#' + idmodal).modal('show');
         }else {
            window.location = "redes/" + subseguro
         }
    }

    /*$('.btn-cotizar-selectplan').click(function() {
        //window.location.href = "https://corredores.rimac.com/login";
        window.open('https://corredores.rimac.com/login', '_blank');
    });
    $('.btn-cotizar-subseguro').click(function() {
        window.open('https://corredores.rimac.com/login', '_blank');
    });
    $('.btn-cotizar-segurodesglose').click(function() {
        window.open('https://corredores.rimac.com/login', '_blank');
    });
    $('.btn-cotizar').click(function() {
        window.open('https://corredores.rimac.com/login', '_blank');
    });*/


    /*======================================================
          Laravel token para funciones ajax's
        =====================================================*/
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /*======================================================
            On ready
        =====================================================*/
    $(document).ready(function() {
        console.log("ready!");
    });

</script>

<!-- MENU -->
<!-- jQuery CDN - Slim version (=without AJAX) -->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--->
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>-->
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function() {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });

</script>

</html>
