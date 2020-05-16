<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Assignment 2</title>

        <!-- Keep wireframe.css for debugging, add your css to style.css -->
        <link
            id="wireframecss"
            type="text/css"
            rel="stylesheet"
            href="../wireframe.css"
            disabled
        />
        <link
            id="stylecss"
            type="text/css"
            rel="stylesheet"
            href="./style.css"
        />
        <!-- Latest compiled and minified CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous"
        />
        <script src="../a3/script.js" type="text/javascript"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="100">
        <!-- PHP validation code -->
        
        <!-- Header -->
        <header>
            <nav class="navbar navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img
                        src="logo-brand.png"
                        width="45"
                        height="30"
                        class="d-inline-block align-top"
                        alt=""
                    />
                    <span id="brand-name">Cinemax</span>
                </a>
                <span id="datetime" style="color: #ffffff;"></span>
            </nav>
        </header>
        <!-- Nav -->
        <nav
            id="navbar"
            class="navbar sticky-top navbar-expand navbar-dark"
            style="height: 45px;"
        >
            <div class="navbar" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us"
                            >About Us <span class="sr-only">(current)</span></a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prices">Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#now-showing">Now Showing</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main style="background-color: #2f2c34;">
            <!-- About us -->

            <section id="about-us">
                <!-- modal -->
                <div
                    class="modal fade"
                    id="exampleModalCenter"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true"
                >
                    <div
                        class="modal-dialog modal-dialog-centered"
                        role="document"
                    >
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5
                                    class="modal-title"
                                    id="exampleModalLongTitle"
                                >
                                    New Seats Available!
                                </h5>
                                <button
                                    type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close"
                                >
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="card-deck">
                                    <div class="card">
                                        <img
                                            class="card-img-top"
                                            src="./standard.jpg"
                                            alt="Card image cap"
                                        />
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                Standard Seats
                                            </h5>
                                            <p class="card-text">
                                                <i
                                                    >"If it ain't broke, dont't
                                                    fix it!"</i
                                                ><br />The good old standard
                                                seat will provide the cinematic
                                                experience you've always
                                                enjoyed.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img
                                            class="card-img-top"
                                            src="./firstclass.jpg"
                                            alt="Card image cap"
                                        />
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                First Class Seats
                                            </h5>
                                            <p class="card-text">
                                                Redefining cinema luxury, this
                                                seat features fully reclinable
                                                seat, providing the ultimate
                                                first class cinema experience.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-dismiss="modal"
                                >
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    id="carousel-indicator"
                    class="carousel slide min-vh-100"
                    data-ride="carousel"
                >
                    <div
                        class="carousel-caption"
                        style="top: 25px; bottom: auto;"
                    >
                        <h1>About Us</h1>
                    </div>
                    <ol class="carousel-indicators">
                        <li
                            data-target="#carousel-indicator"
                            data-slide-to="0"
                            class="active"
                        ></li>
                        <li
                            data-target="#carousel-indicator"
                            data-slide-to="1"
                        ></li>
                        <li
                            data-target="#carousel-indicator"
                            data-slide-to="2"
                        ></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img
                                class="d-block w-100"
                                src="./cinema.jpg"
                                alt="First slide"
                            />
                            <div class="carousel-caption">
                                <h5>
                                    After extensive renovations, we have finally
                                    reopened!
                                </h5>
                                <p>
                                    Scroll through the next slides to find out
                                    what's new
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img
                                class="d-block w-100"
                                src="./seats.jpg"
                                alt="Second slide"
                            />
                            <div class="carousel-caption">
                                <h5>
                                    New seats available
                                </h5>
                                <button
                                    style="opacity: 0.8;"
                                    type="button"
                                    class="btn btn-primary"
                                    data-toggle="modal"
                                    data-target="#exampleModalCenter"
                                >
                                    Find out more
                                </button>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img
                                class="d-block w-100"
                                src="./dolby.jpg"
                                alt="Third slide"
                            />
                            <div class="carousel-caption">
                                <h5>
                                    The projection and sound systems are
                                    upgraded with 3D Dolby Vision projection and
                                    Dolby Atmos sound.
                                </h5>
                                <a
                                    class="btn btn-primary"
                                    role="button"
                                    href="https://www.dolby.com/us/en/cinema/index.html"
                                    >Find out more</a
                                >
                            </div>
                        </div>
                    </div>
                    <a
                        class="carousel-control-prev"
                        href="#carousel-indicator"
                        role="button"
                        data-slide="prev"
                    >
                        <span
                            class="carousel-control-prev-icon"
                            aria-hidden="true"
                        ></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a
                        class="carousel-control-next"
                        href="#carousel-indicator"
                        role="button"
                        data-slide="next"
                    >
                        <span
                            class="carousel-control-next-icon"
                            aria-hidden="true"
                        ></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>

            <!-- Prices -->
            <section id="prices" class="parallax">
                <div
                    class="container d-flex flex-column justify-content-center min-vh-100"
                >
                    <h1 style="color: #ffffff;">Prices</h1>
                    <table
                        class="table table-secondary table-sm table-hover table-bordered"
                    >
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Seat Type</th>
                                <th scope="col">Seat Code</th>
                                <th scope="col">
                                    All day Monday and Wednesday And 12pm
                                    Weekdays
                                </th>
                                <th scope="col">All other times</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <p>Standard Adult</p>
                                </th>
                                <td>
                                    <p>STA</p>
                                </td>
                                <td>
                                    <p>14.00</p>
                                </td>
                                <td>
                                    <p>19.80</p>
                                </td>
                            </tr>
                            <tr>
                                <th scopr="row">
                                    <p>Standard Concession</p>
                                </th>
                                <td scope="row">
                                    <p>STP</p>
                                </td>
                                <td>
                                    <p>12.50</p>
                                </td>
                                <td>
                                    <p>17.50</p>
                                </td>
                            </tr>
                            <tr>
                                <th scopr="row">
                                    <p>Standard Child</p>
                                </th>
                                <td>
                                    <p>STC</p>
                                </td>
                                <td>
                                    <p>11.00</p>
                                </td>
                                <td>
                                    <p>15.30</p>
                                </td>
                            </tr>
                            <tr>
                                <th scopr="row">
                                    <p>First Class Adult</p>
                                </th>
                                <td>
                                    <p>FCA</p>
                                </td>
                                <td>
                                    <p>24.00</p>
                                </td>
                                <td>
                                    <p>30.00</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <p>First Class Concession</p>
                                </th>
                                <td>
                                    <p>FCP</p>
                                </td>
                                <td>
                                    <p>22.50</p>
                                </td>
                                <td>
                                    <p>27.00</p>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <p>First Class Child</p>
                                </th>
                                <td>
                                    <p>FCC</p>
                                </td>
                                <td>
                                    <p>21.00</p>
                                </td>
                                <td>
                                    <p>24.00</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!-- Now Showing -->
            <section id="now-showing" style="background-color: #242228;">
                <div>
                    <div class="container pt-3 pb-3 min-vh-100">
                        <h1 style="color: #ffffff;">Now Showing</h1>
                        <div class="p-3">
                            <div class="row justify-content-around">
                                <div class="col-md-6 col-sm-10 mb-3">
                                    <div
                                        class="card flex-row text-white"
                                        id="moviePanelACT"
                                        style="background-color: #2f2c34;"
                                    >
                                        <div class="card-header border-0">
                                            <img
                                                class="card-poster"
                                                src="./endgame.jpg"
                                                alt=""
                                            />
                                        </div>
                                        <div
                                            class="card-block p-2 text-wrap d-flex flex-column justify-content-between d-flex flex-column justify-content-between"
                                        >
                                            <h4 class="card-title">
                                                Avengers: End game
                                            </h4>
                                            <p class="card-text">
                                                Wed - Fri: 9pm (T21) <br />Sat -
                                                Sun:6pm (T18)
                                            </p>
                                            <p><i>Rated PG-13</i></p>
                                            <div>
                                                <a
                                                    class="btn btn-primary"
                                                    role="button"
                                                    href="#synopsis"
                                                    onclick="chooseMovie('ACT')"
                                                >
                                                    Description
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-10 mb-3">
                                    <div
                                        class="card flex-row text-white"
                                        id="moviePanelRMC"
                                        style="background-color: #2f2c34;"
                                    >
                                        <div class="card-header border-0">
                                            <img
                                                class="card-poster"
                                                src="./topend.jpg"
                                                alt=""
                                            />
                                        </div>
                                        <div
                                            class="card-block p-2 text-wrap d-flex flex-column justify-content-between"
                                        >
                                            <h4 class="card-title">
                                                Top End Wedding
                                            </h4>
                                            <p class="card-text">
                                                Mon - Tue: 6pm (T18) <br />Sat -
                                                Sun:3pm (T15)
                                            </p>
                                            <p><i>Rated M</i></p>
                                            <div>
                                                <a
                                                    class="btn btn-primary"
                                                    role="button"
                                                    href="#synopsis"
                                                    onclick="chooseMovie('RMC')"
                                                >
                                                    Description
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-around">
                                <div class="col-md-6 col-sm-10 mb-3">
                                    <div
                                        class="card flex-row text-white"
                                        id="moviePanelANM"
                                        style="background-color: #2f2c34;"
                                    >
                                        <div class="card-header border-0">
                                            <img
                                                class="card-poster"
                                                src="./dumbo.png"
                                                alt=""
                                            />
                                        </div>
                                        <div
                                            class="card-block p-2 text-wrap d-flex flex-column justify-content-between"
                                        >
                                            <h4 class="card-title">Dumbo</h4>
                                            <p class="card-text">
                                                Mon - Tue: 12pm (T12) <br />Wed
                                                - Fri: 6pm (T18) <br />Sat -
                                                Sun:6pm (T18)
                                            </p>
                                            <p><i>Rated PG</i></p>
                                            <div>
                                                <a
                                                    class="btn btn-primary"
                                                    role="button"
                                                    href="#synopsis"
                                                    onclick="chooseMovie('ANM')"
                                                >
                                                    Description
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-10 mb-3">
                                    <div
                                        class="card flex-row text-white"
                                        id="moviePanelAHF"
                                        style="background-color: #2f2c34;"
                                    >
                                        <div class="card-header border-0">
                                            <img
                                                class="card-poster"
                                                src="./happy-prince.jpg"
                                                alt=""
                                            />
                                        </div>
                                        <div
                                            class="card-block p-2 text-wrap d-flex flex-column justify-content-between"
                                        >
                                            <h4 class="card-title">
                                                The Happy Prince
                                            </h4>
                                            <p class="card-text">
                                                Wed - Fri: 12pm (T12) <br />Sat
                                                - Sun: 9pm (T21)
                                            </p>
                                            <p><i>Rated R</i></p>
                                            <div>
                                                <a
                                                    class="btn btn-primary"
                                                    role="button"
                                                    href="#synopsis"
                                                    onclick="chooseMovie('AHF')"
                                                >
                                                    Description
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Synopsis -->
                        <div
                            class="card text-white"
                            style="background-color: #2f2c34;"
                            id="synopsis"
                        >
                            <div
                                class="card-header"
                                style="
                                    border-bottom: 5px solid
                                        rgba(0, 0, 0, 0.125);
                                "
                            >
                                <h2>Synopsis</h2>
                            </div>
                            <div class="card-body d-none" id="synopsisACT">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <div class="movie-detail">
                                            <div
                                                class="d-flex flex-row justify-content-between"
                                            >
                                                <h3 id="movie-synopsis-title">
                                                    Avengers: Endgame
                                                </h3>
                                                <h4 id="movie-synopsis-rating">
                                                    PG-13
                                                </h4>
                                            </div>
                                            <p id="movie-synopsis-detail">
                                                The grave course of events set
                                                in motion by Thanos that wiped
                                                out half the universe and
                                                fractured the Avengers ranks
                                                compels the remaining Avengers
                                                to take one final stand in
                                                Marvel Studios' grand conclusion
                                                to twenty-two films, "Avengers:
                                                Endgame."
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <iframe
                                            width="100%"
                                            height="220"
                                            id="movie-synopsis-trailer"
                                            src="https://www.youtube.com/embed/TcMBFSGVi1c"
                                        >
                                        </iframe>
                                    </div>
                                    <div class="col-12">
                                        <b>Make a Booking:</b>
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('ACT','WED','9pm (T21)')"
                                            >Wed: 9pm (T21)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('ACT','THU','9pm (T21)')"
                                            >Thu: 9pm (T21)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('ACT','FRI','9pm (T21)')"
                                            >Fri: 9pm (T21)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('ACT','SAT','6pm (T18)')"
                                            >Sat: 6pm (T18)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('ACT','SUN','6pm (T18)')"
                                            >Sun: 6pm (T18)</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-none" id="synopsisRMC">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <div class="movie-detail">
                                            <div
                                                class="d-flex flex-row justify-content-between"
                                            >
                                                <h3 id="movie-synopsis-title">
                                                    Top End Wedding
                                                </h3>
                                                <h4 id="movie-synopsis-rating">
                                                    M
                                                </h4>
                                            </div>
                                            <p id="movie-synopsis-detail">
                                                Lauren and Ned have 10 days to
                                                find Lauren's mother who has
                                                gone AWOL in the remote far
                                                north of Australia so that they
                                                can reunite her parents and pull
                                                off their dream wedding.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <iframe
                                            width="100%"
                                            height="220"
                                            id="movie-synopsis-trailer"
                                            src="https://www.youtube.com/embed/uoDBvGF9pPU"
                                        >
                                        </iframe>
                                    </div>
                                    <div class="col-12">
                                        <b>Make a Booking:</b>
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('RMC','MON','6pm (T18)')"
                                            >Mon: 6pm (T18)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('RMC','TUE','6pm (T18)')"
                                            >Tue: 6pm (T18)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('RMC','SAT','3pm (T15)')"
                                            >Sat: 3pm (T15)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('RMC','SUN','3pm (T15)')"
                                            >Sun: 3pm (T15)</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-none" id="synopsisANM">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <div class="movie-detail">
                                            <div
                                                class="d-flex flex-row justify-content-between"
                                            >
                                                <h3 id="movie-synopsis-title">
                                                    Dumbo
                                                </h3>
                                                <h4 id="movie-synopsis-rating">
                                                    PG
                                                </h4>
                                            </div>
                                            <p id="movie-synopsis-detail">
                                                A young circus elephant is born
                                                with comically large ears and
                                                given the cruel nickname Dumbo.
                                                One day at a show, he is taunted
                                                by a group of kids, inciting his
                                                mother into a rage that gets her
                                                locked up. After Dumbo's ears
                                                cause an accident that injures
                                                many of the other elephants, he
                                                is made to dress like a clown
                                                and perform dangerous stunts.
                                                Everything changes when Dumbo
                                                discovers that his enormous ears
                                                actually allow him to fly, and
                                                he astounds everyone at the
                                                circus with his new talent.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <iframe
                                            width="100%"
                                            height="220"
                                            id="movie-synopsis-trailer"
                                            src="https://www.youtube.com/embed/7NiYVoqBt-8"
                                        >
                                        </iframe>
                                    </div>
                                    <div class="col-12">
                                        <b>Make a Booking:</b>
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('ANM','MON','12pm (T12)')"
                                            >Mon: 12pm (T12)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('ANM','TUE','12pm (T12)')"
                                            >Tue: 12pm (T12)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('ANM','WED','6pm (T18)')"
                                            >Wed: 6pm (T18)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('ANM','THU','6pm (T18)')"
                                            >Thu: 6pm (T18)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('ANM','FRI','6pm (T18)')"
                                            >Fri: 6pm (T18)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('ANM','SAT','12pm (T12)')"
                                            >Sat: 12pm (T12)</span
                                        >
                                        <span
                                            class="badge badge-primary"
                                            onclick="bookMovie('ANM','SUN','12pm (T12)')"
                                            >Sun: 12pm (T12)</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="card-body d-none" id="synopsisAHF">
                                <div class="row">
                                    <div class="col-md-6 mt-2">
                                        <div class="movie-detail">
                                            <div
                                                class="d-flex flex-row justify-content-between"
                                            >
                                                <h3 id="movie-synopsis-title">
                                                    The Happy Prince
                                                </h3>
                                                <h4 id="movie-synopsis-rating">
                                                    R
                                                </h4>
                                            </div>
                                            <p id="movie-synopsis-detail">
                                                His body ailing, Oscar Wilde
                                                lives out his last days in
                                                exile, observing the
                                                difficulties and failures
                                                surrounding him with ironic
                                                detachment, humour, and the wit
                                                that defined his life.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <iframe
                                            width="100%"
                                            height="220"
                                            id="movie-synopsis-trailer"
                                            src="https://www.youtube.com/embed/tXANCJQkUIE"
                                        >
                                        </iframe>
                                    </div>
                                    <div class="col-12">
                                        <b>Make a Booking:</b>
                                        <span
                                            class="badge badge-primary AHF"
                                            onclick="bookMovie('AHF','WED','12pm (T12)')"
                                            >Wed: 12pm (T12)</span
                                        >
                                        <span
                                            class="badge badge-primary AHF"
                                            onclick="bookMovie('AHF','THU','12pm (T12)')"
                                            >Thu: 12pm (T12)</span
                                        >
                                        <span
                                            class="badge badge-primary AHF"
                                            onclick="bookMovie('AHF','FRI','12pm (T12)')"
                                            >Fri: 12pm (T12)</span
                                        >
                                        <span
                                            class="badge badge-primary AHF"
                                            onclick="bookMovie('AHF','SAT', '9pm (T21)')"
                                            >Sat: 9pm (T21)</span
                                        >
                                        <span
                                            class="badge badge-primary AHF"
                                            onclick="bookMovie('AHF','SUN', '9pm (T21)')"
                                            >Sun: 9pm (T21)</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="booking">
                <div class="container pt-3 pb-3 min-vh-100">
                    <div
                        class="d-flex rounded justify-content-center align-items-center mb-3"
                        style="background-color: #e52729;"
                    >
                        <h1 id="order-title" style="color: #ffffff;">
                            Please choose a movie and a time
                        </h1>
                    </div>
                    <div class="text-white">
                        <?php include 'form.php' ?>
                        <form
                            id="the-form"
                            name="the-form"    
                            method="post" 
                            action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
                        >
                            <input
                                type="hidden"
                                id="movie-id"
                                name="movie[id]"
                                value="<?= isset($_POST['movie']['id']) ? $_POST['movie']['id'] : ''; ?>"
                            />
                            <input
                                type="hidden"
                                id="movie-day"
                                name="movie[day]"
                                value="<?= isset($_POST['movie']['day']) ? $_POST['movie']['day'] : ''; ?>"
                            />
                            <input
                                type="hidden"
                                id="movie-hour"
                                name="movie[hour]"
                                value="<?= isset($_POST['movie']['hour']) ? $_POST['movie']['hour'] : ''; ?>"
                            />
                            <div class="form-row">
                                <div class="col-md-6">
                                    <h3 style="color: #ea4642;">
                                        Standard seatings
                                    </h3>
                                    <div class="form-group">
                                        <label for="seats-STA">Adults</label>
                                        <select
                                            class="form-control"
                                            id="seats-STA"
                                            name="seats[STA]"
                                        >
                                            <option value=""
                                                >- Please select -</option
                                            >
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="seats-STP"
                                            >Concession</label
                                        >
                                        <select
                                            class="form-control"
                                            id="seats-STP"
                                            name="seats[STP]"
                                        >
                                            <option value=""
                                                >- Please select -</option
                                            >
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="seats-STC">Children</label>
                                        <select
                                            class="form-control"
                                            id="seats-STC"
                                            name="seats[STC]"
                                        >
                                            <option value=""
                                                >- Please select -</option
                                            >
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div
                                        style="
                                            margin-bottom: 5px;
                                            height: 1.5px;
                                            background-color: #eaeff5;
                                        "
                                    ></div>
                                    <h3 style="color: #ea4642;">
                                        First Class Seatings
                                    </h3>
                                    <div class="form-group">
                                        <label for="seats-FCA">Adults</label>
                                        <select
                                            class="form-control"
                                            id="seats-FCA"
                                            name="seats[FCA]"
                                        >
                                            <option value=""
                                                >- Please select -</option
                                            >
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="seats-FCP"
                                            >Concession</label
                                        >
                                        <select
                                            type="number"
                                            class="form-control"
                                            id="seats-FCP"
                                            name="seats[FCP]"
                                        >
                                            <option value=""
                                                >- Please select -</option
                                            >
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="seats-FCC">Children</label>
                                        <select
                                            type="number"
                                            class="form-control"
                                            id="seats-FCC"
                                            name="seats[FCC]"
                                        >
                                            <option value=""
                                                >- Please select -</option
                                            >
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <h4 id="order-total">Total $ 0</h4>
                                </div>
                                <div
                                    class="col-md-6 d-flex flex-column justify-content-center"
                                >
                                    <div class="form-group">
                                        <label for="cust-name">Name</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="cust-name"
                                            name="cust[name]"
                                            value="<?= isset($_POST['cust']['name']) ? $_POST['cust']['name'] : ''; ?>"
                                        />
                                        <span class="error">* <?php echo $nameErr;?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cust-email">Email</label>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="cust-email"
                                            name="cust[email]"
                                            value="<?= isset($_POST['cust']['email']) ? $_POST['cust']['email'] : ''; ?>"
                                        />
                                        <span class="error">* <?php echo $emailErr;?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cust-mobile">Mobile</label>
                                        <input
                                            type="tel"
                                            class="form-control"
                                            id="cust-mobile"
                                            name="cust[mobile]"
                                            value="<?= isset($_POST['cust']['mobile']) ? $_POST['cust']['mobile'] : ''; ?>"
                                        />
                                        <span class="error">* <?php echo $mobileErr;?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cust-card"
                                            >Credit Card</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="cust-card"
                                            name="cust[card]"
                                            value="<?= isset($_POST['cust']['card']) ? $_POST['cust']['card'] : ''; ?>"
                                        />
                                        <span class="error">* <?php echo $cardErr;?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="cust-expiry">Expiry</label>
                                        <input
                                            type="month"
                                            class="form-control"
                                            id="cust-expiry"
                                            name="cust[expiry]"
                                            value="<?= isset($_POST['cust']['expiry']) ? $_POST['cust']['expiry'] : ''; ?>"
                                        />
                                        <span class="error">* <?php echo $expiryErr;?></span>
                                    </div>
                                    <span class="error"><?php echo $seatsErr;?></span> 
                                    <button
                                        id="submit-button"
                                        type="submit"
                                        class="btn btn-primary btn-lg"
                                        style="
                                            background-color: #e52729;
                                            border-color: #e52729;
                                        "
                                    >
                                        Order
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>

        <footer class="" style="background-color: #242228;">
            <div class="container p-3" style="color: #ffffff;">
                <div>
                    <div class="d-flex flex-row justify-content-around mb-3">
                        <div>
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <p>cinemaxcustomersupport@email.com</p>
                            <p>(+84) 11332994</p>
                            <p>Broadway St</p>
                        </div>
                        <div>
                            <p>
                                Pham Quang Man
                            </p>
                            <p>s3804811</p>
                            <a
                                href="https://github.com/ManPhamQuang/ManPhamQuang.github.io"
                                >github repo</a
                            >
                        </div>
                    </div>

                    Last modified
                    <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.
                </div>
                <div>
                    Disclaimer: This website is not a real website and is being
                    developed as part of a School of Science Web Programming
                    course at RMIT University in Melbourne, Australia.
                </div>
                <div>
                    <button id="toggleWireframeCSS" onclick="toggleWireframe()">
                        Toggle Wireframe CSS
                    </button>
                </div>
            </div>
        </footer>
         
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
            src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"
        ></script>
        <?php 
            // creating the seats selected object using php instead of js to retain seats selected value if validation fail
            if(!empty($_POST['seats'])){
                php2js($_POST['seats'], "seatsSelected");
            }else{
                echo "<script type='text/javascript'>
                    var seatsSelected = {};
                </script>";
            }
        ?>
        <script>
            // for date
            var dt = new Date();
            document.getElementById("datetime").innerHTML =
                ("0" + dt.getDate()).slice(-2) +
                "/" +
                ("0" + (dt.getMonth() + 1)).slice(-2) +
                "/" +
                dt.getFullYear() +
                " " +
                ("0" + dt.getHours()).slice(-2) +
                ":" +
                ("0" + dt.getMinutes()).slice(-2);

            const movieIDs = ["ACT", "RMC", "ANM", "AHF"];

            const moviesList = [
                {
                    id: "ACT",
                    title: "Avengers: Endgame",
                },
                {
                    id: "AHF",
                    title: "The Happy Prince",
                },
                {
                    id: "ANM",
                    title: "Dumbo",
                },
                {
                    id: "RMC",
                    title: "Top End Wedding",
                },
            ];
            function chooseMovie(id) {
                movieIDs.forEach((movie) => {
                    if (id == movie) {
                        var movieElement = document.getElementById(
                            "synopsis" + movie
                        );
                        movieElement.classList.remove("d-none");
                    } else {
                        var movieElement = document.getElementById(
                            "synopsis" + movie
                        );
                        movieElement.classList.add("d-none");
                    }
                });
            }

            function bookMovie(id, day, hour) {
                let title = "";
                moviesList.forEach((movie) => {
                    if (movie.id == id) {
                        title = movie.title;
                    }
                });
                document.getElementById(
                    "order-title"
                ).innerHTML = `${title} - ${day} - ${hour}`;
                movieidInput = document.getElementById("movie-id");
                movieDayInput = document.getElementById("movie-day");
                movieHourInput = document.getElementById("movie-hour");
                movieidInput.value = id;
                movieDayInput.value = day;
                movieHourInput.value = hour;
                calculateTotal();
            }

            var seats = ["STA", "STP", "STC", "FCA", "FCP", "FCC"];
            // var seatsSelected = {};

            // var total = 0;
            seats.forEach((seatID) => {
                let seatElement = document.getElementById(`seats-${seatID}`);
                seatElement.addEventListener("change", function () {
                    seatsSelected[seatElement.id.replace("seats-", "")] = seatElement.value;
                    calculateTotal();
                });
            });

            function calculateTotal() {
                console.log("run");

                let total = 0;
                const seats = Object.keys(seatsSelected);
                seats.forEach((seat) => {
                    total +=
                        parseFloat(calculateSeatPrice(seat)) *
                        seatsSelected[seat];
                });
                document.getElementById(
                    "order-total"
                ).innerHTML = `Total $ ${total}`;
            }

            function calculateSeatPrice(seat) {
                const date = document.getElementById("movie-day").value;
                const time = document.getElementById("movie-hour").value;
                console.log(seat);
                console.log(date);
                console.log(time);

                switch (seat) {
                    case "STA":
                        if (
                            date == "MON" ||
                            date == "WED" ||
                            (date != "SAT" &&
                                date != "SUN" &&
                                time == "12pm (T12)")
                        ) {
                            return 14;
                        } else {
                            return 19.8;
                        }
                    case "STP":
                        if (
                            date == "MON" ||
                            date == "WED" ||
                            (date != "SAT" &&
                                date != "SUN" &&
                                time == "12pm (T12)")
                        ) {
                            return 12.5;
                        } else {
                            return 17.5;
                        }
                    case "STC":
                        if (
                            date == "MON" ||
                            date == "WED" ||
                            (date != "SAT" &&
                                date != "SUN" &&
                                time == "12pm (T12)")
                        ) {
                            return 11;
                        } else {
                            return 15.3;
                        }
                    case "FCA":
                        if (
                            date == "MON" ||
                            date == "WED" ||
                            (date != "SAT" &&
                                date != "SUN" &&
                                time == "12pm (T12)")
                        ) {
                            return 24;
                        } else {
                            return 30;
                        }
                    case "FCP":
                        if (
                            date == "MON" ||
                            date == "WED" ||
                            (date != "SAT" &&
                                date != "SUN" &&
                                time == "12pm (T12)")
                        ) {
                            return 22.5;
                        } else {
                            return 27;
                        }
                    case "FCC":
                        if (
                            date == "MON" ||
                            date == "WED" ||
                            (date != "SAT" &&
                                date != "SUN" &&
                                time == "12pm (T12)")
                        ) {
                            return 21;
                        } else {
                            return 24;
                        }
                }
            }
        </script>
        <script type="text/javascript">
            // for retaining value of select fields if validation fails
            document.getElementById('seats-STA').value = "<?php echo $_POST['seats']['STA'];?>";
            document.getElementById('seats-STP').value = "<?php echo $_POST['seats']['STP'];?>";
            document.getElementById('seats-STC').value = "<?php echo $_POST['seats']['STC'];?>";
            document.getElementById('seats-FCA').value = "<?php echo $_POST['seats']['FCA'];?>";
            document.getElementById('seats-FCP').value = "<?php echo $_POST['seats']['FCP'];?>";
            document.getElementById('seats-FCC').value = "<?php echo $_POST['seats']['FCC'];?>";
            // for retaining value of movie fields if validation fails
            // console.log() 
        </script>
        <?php 
            if(!empty($_POST['movie']['id'])){
                echo '<script type="text/javascript">chooseMovie(' . "'" . $_POST['movie']['id'] . "'" . ')</script>';
                echo '<script type="text/javascript">bookMovie(' . "'" . $_POST['movie']['id'] . "', '" . $_POST['movie']['day'] . "', '". $_POST['movie']['hour'] . "'" .')</script>'; 
            }
            preShow($_POST);
            echo date('Y-m')
        ?>
        <script src="../wireframe.js"></script>
    </body>
</html>

