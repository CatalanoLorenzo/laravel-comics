<header>
    <nav>
        <div class="container">
            <div class="row flex-column">
                <!-- blue nav -->
                <div class="col text-white justify-content-end d-flex blue_nav">
                    <ul>
                        <li class="nav-item py-1">
                            <a class="nav-link" aria-current="page" href="#">DC PoweroTM VISA®</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn  dropdown-toggle py-1 text-white" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ADDITIONAL DC SITE
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">ADDITIONAL DC SITE 1</a></li>
                                    <li><a class="dropdown-item" href="#">ADDITIONAL DC SITE 2</a></li>
                                    <li><a class="dropdown-item" href="#">ADDITIONAL DC SITE 3</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col d-flex">
                    <div class="navbar-brand">
                        <a href="/">
                            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                        </a>
                    </div>
                    <ul class="d-flex align-items-center m-0">
                        @foreach ($voices as $voice)

                            @if($voice === 'Shop')
                            <li class="nav-item text-decoration-none list-unstyled py-5 px-1 text-black p-1">
                                <div class="dropdown">
                                    <button class="btn  dropdown-toggle " type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        SHOP
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">SHOP 1</a></li>
                                        <li><a class="dropdown-item" href="#">SHOP 2</a></li>
                                        <li><a class="dropdown-item" href="#">SHOP 3</a></li>
                                    </ul>
                                </div>
                            </li>
                            @else
                            <li class="nav-item text-decoration-none list-unstyled py-5  px-1 text-black p-1">
                                <a class="nav-link" aria-current="page" href="/{{$voice}}">{{$voice}}</a>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>