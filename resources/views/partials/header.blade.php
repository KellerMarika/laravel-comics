<header class="bg-light">
    <nav class="container d-flex py_m pe-5">

        <img class="nav-logo img-fluid"  src="{{ Vite::asset('resources/img/dc-logo.png') }}">

        <ul class="list-group-flush flex-fill d-flex justify-content-end text-uppercase m-0">

            @foreach ($navLinks as $key => $navLink)
                <li class="list-group-item">
                    <a target="_blank" class="d-flex flex-column align-items-center h-100 px-3 pt-4 "
                    href="{{$navLink['href']}}">

                        <div class="flex-fill fs-6"> {{$navLink['name']}}</div>
                        <div class="link-underline"></div>
                    </a>
                </li>
            @endforeach

        </ul>
    </nav>
</header>


