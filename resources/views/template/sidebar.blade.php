<div class="sidebar" data-color="purple" data-background-color="white">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            WABOT
        </a>
    </div>
    <div class="sidebar-wrapper">

        <div class="alert alert-success " style="margin: 15px; padding-bottom: 5px">

                <i class="fa fa-play float-left" style="color: white;padding-left: 15px"></i>
                <p style="padding-left: 40px">Em execução</p>
        </div>

        <ul class="nav">
            <li class="nav-item {{ Request::is("/") ? "active" : "" }}  ">
                <a class="nav-link" href="{{route("dashboard")}}">
                    <i class="material-icons">home</i>
                    <p>Início</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is("sent") ? "active" : "" }} ">
                <a class="nav-link" href="{{route("sent")}}">
                    <i class="material-icons">message</i>
                    <p>Envios</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is("reply") ? "active" : "" }} ">
                <a class="nav-link" href="{{route("reply")}}">
                    <i class="material-icons">reply</i>
                    <p>Respostas</p>
                </a>
            </li>
            <li class="nav-item" style="display:none;">
                <a class="nav-link" href="./notifications.html">
                    <i class="material-icons">notifications</i>
                    <p>Notificações</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./typography.html">
                    <i class="material-icons">widgets</i>
                    <p>Integrações</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./user.html">
                    <i class="material-icons">settings</i>
                    <p>Configurações</p>
                </a>
            </li>

        </ul>
    </div>
</div>
