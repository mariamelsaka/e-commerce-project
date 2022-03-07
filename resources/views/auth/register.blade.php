@extends ('common.master')  {{--de en yreth men page de--}}


@section('title')
    Register
@endsection


@section('content')
    <main>

        <section style=" background-image: url('{{asset("assets/image/background.png")}}') ;height:1300px;">

            <div class="" style="padding: 180px; padding-left: 300px;">
                <div class="container">
                    <div class="card border  text-center" style="width: 700px; height: 950px; "  >
                        <!-- rgba(106, 19, 124, 0.123) -->
                        <div class="card-body" style="background-color: rgba(106, 19, 124, 0.123);" >
                            @include("common.errors")


                            <form action=""  method="post" novalidate>
                                     @csrf
                                <div style="margin-bottom:20px;margin-top: 50px;">
                                    <i class="fas fa-align-justify"></i>
                                    <strong> first name </strong>
                                    <input  style="padding-right: 20px;" value="{{old('firstname')}}" type="text" required name="firstname" placeholder="enter your first name"  >



                                </div>


                                <div style="margin-bottom:20px;margin-top: 50px;">
                                    <i class="fas fa-align-justify"></i>
                                    <strong> last name </strong>
                                    <input style="padding-right: 20px;" value="{{old('lastname')}}" type="text" required name="lastname" placeholder="enter your first name" >
                                </div>

                                <div style="margin-bottom:20px;margin-top: 50px;">
                                    <i class="fas fa-user"></i>
                                    <strong> user name </strong>
                                    <input style="padding-right: 20px;"value="{{old('username')}}" type="text" required name="username" placeholder="enter your user name" >
                                </div>

                                <div style="margin-bottom:20px;margin-top: 50px;">
                                    <i class="fas fa-user"></i>
                                    <strong> Email </strong>
                                    <input style="padding-right: 20px;  padding-left: 15px;" type="email"style="padding-left: 25px;" value="{{old('email')}}" required  name="email"placeholder="enter your email" >
                                </div>


                                <div  style="margin-bottom:20px;margin-top: 50px; margin-right: 20px;" >
                                    <i class="fas fa-lock"></i>
                                    <strong > Password </strong>
                                    <input value="{{old('password')}}" type="password" style="padding-right: 20px;"  required name="password"placeholder="enter your password" >
                                </div>



                                <div style="margin-bottom:20px;margin-top: 50px; margin-right: 50px;">
                                    <i class="fas fa-phone-alt"></i>
                                    <strong> phone number </strong>
                                    <input value="{{old('phone_number')}}" type="text"  style="padding-right: 20px;" placeholder="enter your phone number" required name="phone_number" >

                                </div>


                                <div style="margin-bottom:20px;margin-top: 50px; margin-right: 50px;">
                                  <strong>Address</strong>

                                        <input value="{{old('address')}}" style="padding-right: 50px; width: 250px"  type="text"value="{{old('address')}}" name="address">

                                </div>


                                <div  style="margin-bottom:20px;margin-top: 50px; margin-right: 50px;">
                                   <strong>Bio</strong>

                                    <textarea value="{{old('bio')}}" style="padding-right: 20px;"  name="bio" id="bio" cols="30" rows="3"  >
                                        {{old('bio')}}
                                    </textarea>

                                </div>


                                <div style="margin-bottom:20px;margin-top: 50px;margin-right: 20px;padding-left: 40px;">
                                    <strong>Gender </strong>

                                    <select  name="gender" style="width: 200px;">
                                        @foreach($genders as $gender )
                                            @if($gender->id==old("gender"))
                                                <option value="{{$gender->id}}"  selected>
                                                    {{$gender->name}}
                                                </option>
                                            @else
                                                <option value="{{$gender->id}}">
                                                    {{$gender->name}}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>


                                <div style="margin:50px; margin-left: 100px;text-align: center">

                                    <span>having an account!! </span>
                                    <button class="btn" style="background-color:gray;"> <a href="/login" style="text-decoration: none;color: black;">login</a></button>
                                    <button class="btn" style="background-color:gray;"  >Submit</button>

                                </div>


                            </form>




                        </div>


                    </div>
                </div>
            </div>


        </section>



    </main>
@endsection
