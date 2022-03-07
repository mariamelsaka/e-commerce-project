@extends ('common.master')  {{--de en yreth men page de--}}


@section('title')
    Log In
@endsection


@section('content')




    <main>

        <section style=" background-image: url('{{asset("assets/image/background.png")}}'); height:1200px;">

            <div class="" style="padding: 250px; padding-left: 300px;">
                <div class="container">
                    <div class="card border shadow  text-center" style="width: 700px; height: 500px; "  >

                        <div class="card-body" style="background-color: rgba(106, 19, 124, 0.123);" >

                                   @include("common.errors") {{--  to get error msg--}}
                            @include("common.success")


                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="" action="#"  method="POST" >
                                @csrf



                                <div   style="margin-bottom:20px;margin-top: 120px;">
                                    <i class="fas fa-user"></i>

                                 <strong>  User Name </strong>

                                        <input type="text"   required  name="username" >


                                </div>


                                <div >
                                    <i class="fas fa-lock"></i>
                                    <strong > Password </strong>
                                    <input type="password"  required name="password" >
                                </div>

                                <div style="margin:50px; text-align: center">


                                    <span>doesn't have account!! </span>
                                    <button class="btn" style="background-color:gray;"> <a href="/register" style="text-decoration: none;color: black;">register</a></button>

                                    <button class="btn" type="submit" style="background-color:gray;"  >Log In</button>



                                </div>


                                <div class="flex items-center justify-end mt-4">
                                    <a class="btn" href="{{ url('auth/facebook') }}"
                                       style="background: #3B5499; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                                        Login with Facebook
                                    </a>
                                </div>


                            </form>




                        </div>


                    </div>
                </div>
            </div>


        </section>



    </main>











@endsection


