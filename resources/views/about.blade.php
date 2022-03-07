@extends ('common.master')


@section('title')
    About Us
@endsection


@section('content')

    @include('common.navbar')

    <!-- start main -->
    <main>

        <section>
            <div class=" p-4 " style="background-image: url('{{asset("assets/image/stuff5.jpg")}} '); height: 500px;">

                <div class="container" style="text-align: center;">
                    <h3 style="margin-top: 230px;">
                        <strong class="text-uppercase " >
                            about us.
                        </strong>

                    </h3>
                    <hr width="10%" style="margin-left: 500px; ">
                </div>


            </div>

        </section>


        <section>
            <div class="p-3">
                <div class="container">


                    <div style="padding-bottom: 50px;">
                        <img src="{{asset("assets/image/Sc.png")}}" style="padding-left: 400px;" alt="">
                        <p style="padding-left: 350px; color: rgb(36, 181, 206);">
                            We are in business to offer the highest global standards through NAIL  .
                            <br> We want our customers to LOVE us, and our team to be proud of us.
                        </p>
                    </div>




                    <div class="row">
                        <div class="col-12 col-md-6">
                            <img src="{{asset("assets/image/values.png")}}" alt="" style="padding-bottom: 15px;">
                            <p style="color: rgb(36, 181, 206);">


                                We take ownership in what we do therefore we do our best to ensure that our customers
                                receive the best quality with superior customer service. We guarantee a high level of
                                responsiveness to the market needs to help ensure customer satisfaction. We do everything
                                with PASSION and LOVE to uphold excellency, integrity and pride.
                            </p>
                        </div>
                        <div class="col-12 col-md-6">
                            <img src="{{asset("assets/image/mission.png")}}" alt="">
                            <p style="color: rgb(36, 181, 206);">
                                NAIL Cupcakes’ philosophy is simple: we aim to please. By freshly baking our
                                gourmet cupcakes daily using only the best ingredients, we guarantee a delicious
                                and uplifting experience for each customer. By being socially responsible,
                                we do our best to help develop our communities in a partnership with respected
                                charities and non-profit organizations. We believe these activities go hand in hand to
                                give Egypt the best of life’s little pleasures.

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </main>
    <!-- end main -->

    <div style="padding-top: 2px;">

    </div>

    @include('common.footer')
@endsection
