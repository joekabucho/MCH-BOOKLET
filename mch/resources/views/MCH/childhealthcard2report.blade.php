
@extends('MCH.mchmaster')

@section('content')
    <div class="wrapper">
        <div class="sidebar" data-color="black" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <img style="height: 50px " src="assets/landing/assets/img/Mother-PNG-Image.png" alt="Welcome">
                HOSPITALI

            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{{ url('child_home') }}">
                            <i class="material-icons"></i>
                            <p>home</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ url('create_child_report') }}">
                            <i class="material-icons"></i>
                            <p>register child</p>
                        </a>
                    </li>

                    <li class="active">
                        @if (Auth::user()->user_type==2)
                            <a href="{{ url('weight') }}">
                                <i class="material-icons"></i>
                                <p>weight chart</p>
                            </a>
                        @endif
                    </li>
                    <li class="active">
                        @if (Auth::user()->user_type==2)
                            <a href="{{ url('childmonitoring') }}">
                                <i class="material-icons"></i>
                                <p>height chart</p>
                            </a>
                        @endif
                    </li>
                    <li class="active">
                        @if (Auth::user()->user_type==2)
                            <a href="{{ url('childmonitemp') }}">
                                <i class="material-icons"></i>
                                <p>temperature chart</p>
                            </a>
                        @endif
                    </li>
                    <li class="active">
                        <a href="{{ url('childhealthcardreport') }}">
                            <i class="material-icons"></i>
                            <p>child health card</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ url('childhealthcard1report') }}">
                            <i class="material-icons"></i>
                            <p>child immunization card </p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ url('childhealthcard2report') }}">
                            <i class="material-icons"></i>
                            <p>vitamin A</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ url('childhealthcard3report') }}">
                            <i class="material-icons"></i>
                            <p>developmental milestones</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ url('childhealthcard4report') }}">
                            <i class="material-icons"></i>
                            <p>identification of exposed children</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ url('childhealthcard5report') }}">
                            <i class="material-icons"></i>
                            <p>Health worker consultants</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ url('childhealthcard6report') }}">
                            <i class="material-icons"></i>
                            <p>PMTCT</p>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Table List </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="black">

                                </div>
                                <div class="card-content table-responsive">

                                    <div class="col-m-3 offset-md-2">
                                        <H3 class="mt-20 ">
                                            PUBLIC HEALTH
                                        </H3>
                                    </div>


                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>at 6 months</th>
                                                <th>at 6 months</th>
                                                <th>at 12 months(1 Year)</th>
                                                <th>at 12 months(1 Year)</th>
                                                <th>at 18 months(1 1/2 Years)</th>
                                                <th>at 18 months(1 1/2 Years)</th>
                                                <th>at 24 months(2 Years)</th>
                                                <th>at 24 months(2 Years)</th>
                                                <th>at 30 months(2 1/2 Years</th>
                                                <th>at 30 months(2 1/2 Years</th>
                                                <th>at 36 months(3 Years)</th>
                                                <th>at 36 months(3 Years)</th>
                                                <th>at 42 months(3 1/2 Years)</th>
                                                <th>at 42 months(3 1/2 Years)</th>
                                                <th>at 48 months(4 Years)</th>
                                                <th>at 48 months(4 Years)</th>
                                                <th>at 54 months(4 1/2 Years)</th>
                                                <th>at 54 months(4 1/2 Years)</th>
                                                <th>at 60 months(5 Years)</th>
                                                <th>at 60 months(5 Years)</th>
                                                <th>VACCINE</th>
                                                <th>DATE GIVEN</th>
                                                <th>delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach( $childhealthcard2_results as  $childhealthcard2_results)
                                                <tr>
                                                    <td>{{  $childhealthcard2_results->check6}}</td>
                                                    <td>{{  $childhealthcard2_results->date6}}</td>
                                                    <td>{{  $childhealthcard2_results->check12}}</td>
                                                    <td>{{  $childhealthcard2_results->date12}}</td>
                                                    <td>{{  $childhealthcard2_results->check18}}</td>
                                                    <td>{{  $childhealthcard2_results->date18}}</td>
                                                    <td>{{  $childhealthcard2_results->check24}}</td>
                                                    <td>{{  $childhealthcard2_results->date24}}</td>
                                                    <td>{{  $childhealthcard2_results->check30 }}</td>
                                                    <td>{{  $childhealthcard2_results->date30}}</td>
                                                    <td>{{  $childhealthcard2_results->check36}}</td>
                                                    <td>{{  $childhealthcard2_results->date36}}</td>
                                                    <td>{{  $childhealthcard2_results->check42}}</td>
                                                    <td>{{  $childhealthcard2_results->date42 }}</td>
                                                    <td>{{  $childhealthcard2_results->check48}}</td>
                                                    <td>{{  $childhealthcard2_results->date48}}</td>
                                                    <td>{{  $childhealthcard2_results->check54 }}</td>
                                                    <td>{{  $childhealthcard2_results->date54 }}</td>
                                                    <td>{{  $childhealthcard2_results->check60 }}</td>
                                                    <td>{{  $childhealthcard2_results->date60}}</td>
                                                    <td>{{  $childhealthcard2_results-> vaccine}}</td>
                                                    <td>{{  $childhealthcard2_results-> date_given}}</td>
                                                    <td><form role="form" action="/childhealthcard2_delete/{{$childhealthcard2_results->id}}" enctype="multipart/form-data" method="post" >@csrf

                                                            <div>
                                                                <button type="submit" class="btn btn-info btn-lg"  data-toggle="modal" data-target="#myModal">Delete</button>
                                                            </div>
                                                        </form></td>
                                                </tr>

                                                    @endforeach




                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        @if (Auth::user()->user_type==2)
                            <div class="form-group">
                                <a href="{{ url('childhealthcard2') }}" type="submit" class="btn btn-primary">add record</a>

                            </div>
                        </div>
                    @endif

                        </div>
                    </div>

                    </div>
                </div>
            </div>

        </div>


        <footer class="footer">
            <div class="container-fluid">

                <p class="copyright pull-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    created by joe kabuchO
                </p>
            </div>
        </footer>
    </div>
    </div>
@endsection