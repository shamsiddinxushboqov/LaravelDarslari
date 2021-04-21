
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="../js/plugins/gritter/jquery.gritter.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dataTables.min.css')}}">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="">
  <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                                      <li class="nav-header">
                                          <div class="dropdown profile-element">
                                              <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                                              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                  <span class="block m-t-xs font-bold">Xushboqov Shamsiddin</span>
                                                  <span class="text-muted text-xs block">Director <b class="caret"></b></span>
                                              </a>
                                              <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                                  <li><a class="dropdown-item" href="#">Profile</a></li>
                                                  <li><a class="dropdown-item" href="#">Contacts</a></li>
                                                  <li><a class="dropdown-item" href="#">Mailbox</a></li>
                                                  <li class="dropdown-divider"></li>
                                                  <!-- <li><a class="dropdown-item" href="login.html">Logout</a></li> -->
                                                  <li>
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form).submit();">{{ __('Chiqish') }}</a>
                                                  </li>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    
                                                  </li> 
                                              </ul>
                                          </div>
                                          <div class="logo-element">
                                              IN+
                                          </div>
                                      </li>
                                      <li class="active">
                                          <a href="/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                                          <ul class="nav nav-second-level">
                                              <li class="active"><a href="/dashboard">
                                                Xodimlar
                                              </a></li>
                                              <li><a href="/role-register">Foydalanuvchi profili</a></li>
                                          </ul>
                                      </li>
                                      <li>
                                          <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Tovarlarga oid</span><span class="fa arrow"></span></a>
                                          <ul class="nav nav-second-level collapse">
                                              <li><a href="/products">Mahsulot</a></li>
                                              <li><a href="/sales">Sotuvlar</a></li>
                                          </ul>
                                      </li>
                                      <li>
                                          <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Biz haqimizda</span><span class="fa arrow"></span></a>
                                          <ul class="nav nav-second-level collapse">
                                              <li><a href="./abouts">Biz haqimizda</a></li>
                                              <li><a href="#">Data Tables</a></li>
                                          </ul>
                                      </li>
                                      <li>
                                          <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">E-commerce</span><span class="fa arrow"></span></a>
                                          <ul class="nav nav-second-level collapse">
                                              <li><a href="#">Products grid</a></li>
                                              <li><a href="#">Products list</a></li>
                                          </ul>
                                      </li>
                                      <li>
                                          <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">Gallery</span><span class="fa arrow"></span></a>
                                          <ul class="nav nav-second-level collapse">
                                              <li><a href="basic_gallery.html">Lightbox Gallery</a></li>
                                          </ul>
                                      </li>
                                      <li class="special_link">
                                        <a href="#"><i class="fa fa-database"></i> 
                                          <span class="nav-label">Package</span></a>
                                      </li>
                </ul>

            </div>
        </nav>

    <div id="page-wrapper" class="gray-bg dashbard-1">
      <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Qidirish..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li style="padding: 20px">
                    <span class="m-r-sm text-muted welcome-message"> {{ Auth::user()->name }} Admin bo'limiga xush kelibsiz!.</span>
                </li>
                <li class="dropdown">        
                </li>
              <!--   <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Chiqish
                    </a>
                </li> -->
                  <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Chiqish') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                  </li>
                <li>
                    <a class="right-sidebar-toggle">
                        <i class="fa fa-tasks"></i>
                    </a>
                </li>
            </ul>

        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1 col-md-12">
            @yield('content')
        </div>
    </div>
    </div>
</div>


     <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="{{asset('assets/js/dataTables.min.js')}}"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('{{ Auth::user()->name }} ', 'Admin bo`limiga Xush kelibsiz!');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [300,50,100],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

            var doughnutData = {
                labels: ["App","Software","Laptop" ],
                datasets: [{
                    data: [70,27,85],
                    backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
                }]
            } ;


            var doughnutOptions = {
                responsive: false,
                legend: {
                    display: false
                }
            };


            var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
            new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

        });
    </script>


  @yield('scripts')
</body>

</html>

