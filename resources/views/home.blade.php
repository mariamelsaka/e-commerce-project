@extends ('common.master')


@section('title')
    Home
@endsection


@section('content')

    @include('common.navbar')

    <!-- start main -->
    <main>

        <section>
            <div id="carouselExampleCaptions" class="carousel carousel-dark
                    slide"
                 data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <img src="{{asset("assets/image/Goebecke.jpg")}}" height="450px"
                             class="d-block w-100" alt="">
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset("assets/image/stuff2.jpg")}}" width="200px"
                             height="450px" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item">
                        <img src="{{asset("assets/image/stuff3.jpg")}}" width="200px"
                             height="450px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("assets/image/stuff4.jpg")}}" width="200px"
                             height="450px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{asset("assets/image/stuff5.jpg")}}" width="200px"
                             height="450px" class="d-block w-100" alt="...">
                    </div>

                </div>

                <button class="carousel-control-prev" type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"
                              aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"
                              aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

            </div>
        </section>



        <section>

            <div class="" style="background-color: rgba(216, 193, 117,
                    0.315); height: 500px; margin-top: 5px; margin-bottom: 5px;">
                <div class="container">
                    <div class="row">

                        <div class="col-12 col-md-6" style="padding-top:
                                150px; color: rgb(36, 181, 206);">
                            <h1 class="text-uppercase">

                                <strong>we love to help you celeberate!</strong>
                            </h1>

                            <p>Talk to a Catering Specialist today to plan
                                the perfect cake for your special occasion.</p>
                            <button class="btn uppercase btn-secondary"
                                    style="color: black;">
                                <strong>order now</strong>
                            </button>
                        </div>

                        <div class="col-12 col-md-6" style="padding-top:
                                90px; padding-left: 100px;">
                            <img src="{{asset("assets/image/cakee.jpg")}}" alt="">

                        </div>

                    </div>

                </div>
            </div>
        </section>



        <section>


            <div style="margin-top: 1px; margin-bottom: 10px;
                        background-image: url('../../public/assets/image/background.jpg '); height:
                        500px;">


                <div class="container">

                    <div class="row">
                        <div class="col-12 col-md-6">


                            <img src="{{asset("assets/image/cupcakec.jpg")}}" height="320px" style="margin-top:100px;" alt="">

                        </div>

                        <div class="col-12 col-md-6" style="color: rgb(36, 181, 206);">
                            <h1 class="uppercase" style="margin-top:180px;">
                                <strong>  nail gives back</strong>
                            </h1>

                            <p>
                                our nail Gives Back is a program implemented
                                to support our duty towards our
                                community. Of Nail Cupcake’s core values
                                is our belief in the importance of
                                taking an active interest in Egypt’s
                                development. By extending financial and
                                physical support, we hope to provide
                                opportunity and hope to those most in
                                need.
                            </p>

                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section>


            <div class="container mt-5 mb-3">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="row">
                            <div class="col-12">
                                <div class="card shadow" style="width: 1000px;margin-left: 70px;">
                                    <div class="card-body">
                                        <h5 class="card-title font-weight-bold text-center">
                                            Categories
                                        </h5>
                                        <hr>

                                        <ul class="list-unstyled">
                                            @foreach($cats as $cat)
                                                <li class="text-truncate text-dark mb-1">
                                                    <a href="/categories/{{$cat->id}}"
                                                       style="outline: none; text-decoration: none; color: black;">
                                                        <span class="fa fa-caret-right"></span>
                                                        <span>{{$cat->name}}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                            <li class="text-truncate text-dark mb-1">
                                                <a href="/categories"
                                                   style="outline: none; text-decoration: none; color: red;">
                                                    <span class="fa fa-caret-right"></span>
                                                    <span>See More</span>
                                                </a>
                                            </li>
                                        </ul>



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
    </main>
    <!-- end main -->


    @include('common.footer')
@endsection
