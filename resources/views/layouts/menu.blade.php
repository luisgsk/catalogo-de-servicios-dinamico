<nav id="sidebar">
    <div id="dismiss">
        <i class="fas fa-arrow-left"></i>
    </div>

    <div class="sidebar-header">
        <a href="{{  route('home',['cliente_id' => $cliente[0]["id"] ]) }}" onclick="setTrazabilidad( 'click-logo','n-a','n-a','n-a','menu' )">
        <h3><img src="{{ asset('images') }}/logo/LogoRimacChicoBlanco.svg" id="logomenumobile">
            <img src="{{ asset('images') }}/logo/LogoRimacChicoBlanco.svg" id="logomenudesktop"></h3>
        </a>
    </div>

    <ul class="list-unstyled components">
        <!--<p>Dummy Heading</p>-->
        <!--<li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#">Home 1</a>
                </li>
                <li>
                    <a href="#">Home 2</a>
                </li>
                <li>
                    <a href="#">Home 3</a>
                </li>
            </ul>
        </li>-->
        <li style="">
            <a href="{{ route('seguro.index',['seguro' => 'vida']) }}" onclick="setTrazabilidad( 'click-vida','n-a','n-a','n-a','menu' )" class="lato" style="color:#898B8D;font-weight: 400 !important;" href="#">Seguros Vida</a>
        </li>
        <li>
            <a href="{{ route('seguro.index',['seguro' => 'salud']) }}" onclick="setTrazabilidad( 'click-salud','n-a','n-a','n-a','menu' )" class="lato" style="color:#898B8D;font-weight: 400 !important;" href="#">Seguros Salud</a>
        </li>
        <li>
            <a href="{{ route('seguro.index',['seguro' => 'vehicular']) }}" onclick="setTrazabilidad( 'click-vehicular','n-a','n-a','n-a','menu' )" class="lato" style="color:#898B8D;font-weight: 400 !important;" href="#">Seguros Vehicular</a>
        </li>
    </ul>

    <!--<ul class="list-unstyled CTAs">
        <li>
            <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
        </li>
        <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
        </li>
    </ul>-->
    <ul class="list-unstyled CTAs">
    <p style="color: #e6281f;font-family: 'Lato' !important;font-weight: 800 !important;">¡Hola <?php echo $cliente[0]["nombre"]; ?>!</p>
    </ul>
</nav>
<div class="overlay"></div><!-- for menu -->