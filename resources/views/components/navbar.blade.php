<div id="navbarWrapper" class="container sticky-wrapper">
    <nav class="navbar my-color py-3 navbar-expand-lg ">
        <div class="container p-0">
            <a class="navbar-brand" href="{{route('welcome')}}"><img src="images/logo-white.png" alt="" height="30px" width="auto"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end  pe-3" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dr. Wexler</h5>
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul id="myNav" class="navbar-nav justify-content-end flex-grow-1 py-0">
                        <li class="nav-item">
                            <a id="linkHome" class="nav-link" href="{{route('welcome')}}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropbtn" href="{{route('servizi')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Servizi
                            </a>
                            <ul class="dropdown-content">
                                <li><a class="dropdown-item text-reset" href="">Ecografie</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="">Visite optometriche</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a id="" class="dropdown-item text-reset" href="">Oct</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="">Chirurgia estetica</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a id="" class="nav-link" href="">Exhibition</a>
                        </li>
                        <li class="nav-item">
                            <a id="" class="nav-link" href="{{Route('contatti')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>