<!-- start header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #52c4c48c;" >
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{asset("assets/image/cup.jpg")}}" class="rounded" width="120%" height="50px" alt=""></a>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/menu">Menu</a>
                    </li> <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/shopping-cart">Shopping Cart</a>
                    </li>

                </ul>

                <div style="margin-left: 500px">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0" >
{{--                        <form action="#" method="GET">--}}

{{--                            <li class="form-inline">--}}
{{--                                <input type="text"  name="search">--}}
{{--                                <button class="btn btn-success ml-2">--}}
{{--                                    <i class="fa fa-search"></i>--}}
{{--                                    Search--}}
{{--                                </button>--}}
{{--                            </li>--}}

{{--                        </form>--}}


                        <form method="GET" >
                            <li class="form-inline">
                            <div class="input-group ">
                                <input
                                    type="text"
                                    name="search"
                                    value="{{ request()->get('search') }}"
                                    class="form-control"
                                    placeholder="Search..."
                                    aria-label="Search"
                                    aria-describedby="button-addon2">
                                <button  class="btn btn-success ml-2" type="submit" id="button-addon2">Search</button>
                            </div>
                            </li>
                        </form>

                    </ul>

                </div>


                            @if(\Illuminate\Support\Facades\Auth::check())
                                <span>{{\Illuminate\Support\Facades\Auth::user()->first_name}}</span>
                                <span>{{\Illuminate\Support\Facades\Auth::user()->last_name}}</span>
                            @endif

                        @if(\Illuminate\Support\Facades\Auth::check())

                            <div style="margin-left: 30px">

                                <i class="fa-solid fa-right-to-bracket"></i>

                                <a  href="/logout" style="text-decoration: none">Logout</a>
                            </div>


                        @else
                    <div style="margin-left: 30px">

                    <i class="fa-solid fa-arrow-right-to-bracket"> </i>

                    <a class="nav-link" style="text-decoration: none" href="/login">Login</a>
                         </div>
                        @endif


</header>





<!-- end header -->
