<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">


    <title>Simula Fácil</title>
</head>

<body>

    <header>
        <div class="container">

            <div class="header-container">
                <div class="header-logo">
                    <a href="#">
                        Voe Fácil
                    </a>
                </div>

                <div class="header-menu">
                    <ul>
                        <a href="#">
                            <li>Home</li>
                        </a>
                        {{-- <a href="#">
                            <li>Veículos</li>
                        </a>
                        <a href="#">
                            <li>Marcas</li>
                        </a>
                        <a href="#">
                            <li>Modelos</li>
                        </a> --}}
                        <a href="#">
                            <li>Contato</li>
                        </a>
                    </ul>

                    <button class="btn-login">Login</button>
                </div>
            </div>

        </div>
    </header>

    <main>

        <section class="mb-5">

            <div class="container">

                <div class="section-title">
                    <h2>
                        Encontre a passagem ideal para sua viagem
                    </h2>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="sidbar-flights">
                            <h3>Passagens aéreas</h3>

                            <form action="/flights" method="get">
                                <div class="row">
                                    <div class="form-group">
                                        <select class="form-control" name="start_airport_id">
                                            <option value="">Selecione um aeroporto</option>
                                            @foreach ($airports as $airport)
                                                <option value="{{ $airport->id }}"
                                                    @if (Request::get('start_airport_id') == $airport->id) selected @endif()>
                                                    {{ $airport->name }}</option>
                                            @endforeach()
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="end_airport_id">
                                            <option value="">Selecione um aeroporto</option>
                                            @foreach ($airports as $airport)
                                                <option value="{{ $airport->id }}"
                                                    @if (Request::get('end_airport_id') == $airport->id) selected @endif()>
                                                    {{ $airport->name }}</option>
                                            @endforeach()
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <button class="btn btn-primary">
                                        Buscar
                                    </button>
                                </div>
                            </form>


                        </div>
                    </div>
                    <div class="col-8">
                        @foreach ($flights_ida as $flight)
                            <div class="card-vehicles">
                                <div class="card-vehicle">
                                    {{-- <div>
                                        <img src="./img/cars/land-rover.jpeg" alt="">
                                    </div> --}}
                                    <div class="card-vehicle-content">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="row-sentido-voo">
                                                    <div class="column">
                                                        @foreach ($flight['flights'] as $key => $value)

                                                        <div class="sentido-voo">
                                                                <div class="text-center">
                                                                    <img class="img-thumbnail" src="{{ $value->company->logo }}" >
                                                                </div>
                                                                <div>
                                                                    <span style="font-size: 13px;"> {{$value->time_in_minutes}} min</span>
                                                                    <div>
                                                                        {{ $value->startAirport->acronym }} -
                                                                        {{ $value->endAirport->acronym }}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @endforeach()

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col">
                                                <div style="display: flex;    flex-direction: column;">
                                                    <div class="conexoes">
                                                        <span>{{ $flight['time_in_minutes'] }} minutos</span> -
                                                        @if (count($flight['flights']) > 1)
                                                            {{ count($flight['flights']) - 1 }} paradas
                                                        @else
                                                            Direto
                                                        @endif()
                                                    </div>

                                                    <var class="card-vehicle-price"><abbr class="card-vehicle-currency"
                                                            title="BRL">R$</abbr>
                                                        {{ number_format($flight['price'], 2, ',', '.  ') }}</var>
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="card-vehicles">
                            <div class="card-vehicle">
                                <div>
                                    <img src="./img/cars/land-rover.jpeg" alt="">
                                </div>
                                <div class="card-vehicle-content">
                                    <div class="row-sentido-voo">
                                        <div>
                                            <div class="sentido-voo">
                                                <span>IDA</span> GTN-GRU
                                            </div>

                                            <div class="row">
                                                <b>qui.. 26 set. 2024</b>
                                            </div>

                                            <div class="conexoes">
                                                <span>11:15</span> - 2 paradas
                                            </div>
                                        </div>
                                        <div>
                                            <div class="sentido-voo">
                                                <span>VOLTA</span> GTN-GRU
                                            </div>

                                            <div class="row">
                                                <b>qui.. 26 set. 2024</b>
                                            </div>

                                            <div class="conexoes">
                                                <span>11:15</span> - 2 paradas
                                            </div>
                                        </div>
                                    </div>

                                    <div>


                                        <var class="card-vehicle-price"><abbr class="card-vehicle-currency" title="BRL">R$</abbr>  465.950,00</var>
                                    </div>

                                </div>

                            </div>

                            <div class="card-vehicle">
                                <div>
                                    <img src="./img/cars/land-rover.jpeg" alt="">
                                </div>
                                <div class="card-vehicle-content">
                                    <div>
                                        <h3 class="card-vehicle-title">RANGE ROVER EVOQUE 2022/2023 2.0 P250 FLEX R-DYNAMIC HSE AWD AUTOMÁTICO</h3>
                                        <var class="card-vehicle-price"><abbr class="card-vehicle-currency" title="BRL">R$</abbr>  465.950,00</var>
                                    </div>

                                    <div class="card-vehicle-informations">
                                        <div class="card-vehicle-information">
                                            <img class="svg-icon" src="./svg/icons/diamond.svg" alt=""> <var>LAND ROVER</var>
                                        </div>

                                        <div class="card-vehicle-information">
                                            <img class="svg-icon" src="./svg/icons/speedometer.svg" alt=""> <var>154.000 Km</var>
                                        </div>

                                        <div class="card-vehicle-information">
                                            <img class="svg-icon" src="./svg/icons/car-gearbox.svg" alt=""> <var>Automático</var>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="card-vehicle">
                                <div>
                                    <img src="./img/cars/land-rover.jpeg" alt="">
                                </div>
                                <div class="card-vehicle-content">
                                    <div>
                                        <h3 class="card-vehicle-title">RANGE ROVER EVOQUE 2022/2023 2.0 P250 FLEX R-DYNAMIC HSE AWD AUTOMÁTICO</h3>
                                        <var class="card-vehicle-price"><abbr class="card-vehicle-currency" title="BRL">R$</abbr>  465.950,00</var>
                                    </div>

                                    <div class="card-vehicle-informations">
                                        <div class="card-vehicle-information">
                                            <img class="svg-icon" src="./svg/icons/diamond.svg" alt=""> <var>LAND ROVER</var>
                                        </div>

                                        <div class="card-vehicle-information">
                                            <img class="svg-icon" src="./svg/icons/speedometer.svg" alt=""> <var>154.000 Km</var>
                                        </div>

                                        <div class="card-vehicle-information">
                                            <img class="svg-icon" src="./svg/icons/car-gearbox.svg" alt=""> <var>Automático</var>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="card-vehicle">
                                <div>
                                    <img src="./img/cars/land-rover.jpeg" alt="">
                                </div>
                                <div class="card-vehicle-content">
                                    <div>
                                        <h3 class="card-vehicle-title">RANGE ROVER EVOQUE 2022/2023 2.0 P250 FLEX R-DYNAMIC HSE AWD AUTOMÁTICO</h3>
                                        <var class="card-vehicle-price"><abbr class="card-vehicle-currency" title="BRL">R$</abbr>  465.950,00</var>
                                    </div>

                                    <div class="card-vehicle-informations">
                                        <div class="card-vehicle-information">
                                            <img class="svg-icon" src="./svg/icons/diamond.svg" alt=""> <var>LAND ROVER</var>
                                        </div>

                                        <div class="card-vehicle-information">
                                            <img class="svg-icon" src="./svg/icons/speedometer.svg" alt=""> <var>154.000 Km</var>
                                        </div>

                                        <div class="card-vehicle-information">
                                            <img class="svg-icon" src="./svg/icons/car-gearbox.svg" alt=""> <var>Automático</var>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div> --}}
                    </div>
                </div>


                <div class="section-action-btns">
                    <button class="section-btn">
                        < </button>

                            <button class="section-btn">
                                >
                            </button>
                </div>
            </div>

        </section>

        {{-- <section class="mb-5">

            <div class="container">
                <a href="#" class="card-separation">
                    <div class="card-separation-img">
                        <img src="./img/happy_family.png" alt="">
                    </div>

                    <div class="card-separation-contant">
                        <h3 class="card-separation-title">
                            Vamos simular um financiamento?
                        </h3>

                        <p>
                            Simples, rápido e sem burocracia.
                        </p>
                    </div>


                    <img src="./img/orange_white_arrow.svg" alt="">

                </a>
            </div>

        </section> --}}



    </main>

    <footer>
        <div class="container">

        </div>
    </footer>

    <script src="./js/jquery.min.js"></script>
</body>

</html>
