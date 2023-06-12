<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Target Material Design Bootstrap Admin Template</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/materialize/css/materialize.min.css') }}" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ asset('/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ asset('/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{ asset('/js/Lightweight-Chart/cssCharts.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <?php
    // تعريف معلومات الاتصال بقاعدة البيانات
    $servername = 'localhost';
    $dbname = 'laravel';
    $username = 'root';
    $password = '';

    // إنشاء الاتصال بقاعدة البيانات
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // تعريف استعلام SQL لاسترجاع البيانات من جدول محدد
    // $sql = "SELECT * FROM table_name";
    $sql = 'SELECT username, numberid, updated_at, password FROM users';
    $sql2 = 'SELECT CustumerName FROM dataCustumer';
    // تنفيذ الاستعلام وجلب البيانات
    $result = $conn->query($sql);
    $userCount = DB::table('users')->count();
    $result2 = $conn->query($sql2);
    $CustumerCount = DB::table('dataCustumer')->count();
    ?>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse"
                    data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="{{ route('dashboard.indexDashborde') }}">
                    <strong>لوحة التحكم</strong></a>

                <div id="sideNav" href="">
                    <i class="material-icons dp48">toc</i>
                </div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i
                            class="fa fa-envelope fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a>
                </li>

                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2">
                        <i class="fa fa-bell fa-fw"></i>
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1">
                        <i class="fa fa-user fa-fw"></i>
                        <b> {{ session('username') }}
                        </b>
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#"><i class="fa fa-user fa-fw"></i>حساب المستخدم </a>
            </li>
            <li><a href="{{ route('login.post') }}"><i class="fa fa-sign-out fa-fw"></i> تسجيل الخروج</a>
            </li>
        </ul>
        <ul id="dropdown2" class="dropdown-content w250">
            <li>
                <div>
                    <i class="fa fa-comment fa-fw"></i> New Comment
                    <span class="pull-right text-muted small">4 min</span>
                </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <div>
                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                    <span class="pull-right text-muted small">12 min</span>
                </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <div>
                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                    <span class="pull-right text-muted small">4 min</span>
                </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <div>
                    <i class="fa fa-tasks fa-fw"></i> New Task
                    <span class="pull-right text-muted small">4 min</span>
                </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <div>
                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                    <span class="pull-right text-muted small">4 min</span>
                </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a class="text-center" href="#">
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
        <ul id="dropdown4" class="dropdown-content dropdown-tasks w250 taskList">
            <li>
                <div>
                    <strong>John Doe</strong>
                    <span class="pull-right text-muted">
                        <em>Today</em>
                    </span>
                </div>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <div>
                    <strong>John Smith</strong>
                    <span class="pull-right text-muted">
                        <em>Yesterday</em>
                    </span>
                </div>
                <p>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</p>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <strong>John Smith</strong>
                        <span class="pull-right text-muted">
                            <em>Yesterday</em>
                        </span>
                    </div>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the...</p>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a class="text-center" href="#">
                    <strong>Read All Messages</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu waves-effect waves-dark"
                            href="{{ route('dashboard.indexDashborde') }}"><i class="fa fa-dashboard"></i>
                            الرئيسية</a>
                    </li>

                    <li>
                        <a href="{{ route('dashboard.users') }}" class="waves-effect waves-dark">
                            <span class="material-symbols-outlined"
                                style="margin-right: 6%;
                            font-size: 25px;">
                                shield_person
                            </span>المستخدمين</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.customers') }}" class="waves-effect waves-dark">
                            <span class="material-symbols-outlined"
                                style="margin-right: 6%;
                            font-size: 25px;">
                                group
                            </span>بيانات العملاء </a>


                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    نظرةعامة
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('dashboard.indexDashborde') }}">الرئيسة</a></li>
                    <li><a href="#">نظرة عامة</a></li>
                </ol>

            </div>
            <div id="page-inner" style="min-height: auto;">

                <div class="dashboard-cards">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3">

                            <div class="card horizontal cardIcon waves-effect waves-dark">
                                <div class="card-image red">
                                    <span class="material-symbols-outlined"
                                        style="margin-top: 45%;
                                    font-size: 55px;
                                    opacity: .4;">
                                        group
                                    </span>
                                </div>
                                <div class="card-stacked red">
                                    <div class="card-content">
                                        <h3><?php
                                        echo $userCount;
                                        ?></h3>
                                    </div>
                                    <div class="card-action">
                                        <strong>المستخدمين</strong>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">

                            <div class="card horizontal cardIcon waves-effect waves-dark">
                                <div class="card-image orange">

                                    <span class="material-symbols-outlined"
                                        style="margin-top: 45%;
                                    font-size: 55px;
                                    opacity: .4;">
                                        shield_person
                                    </span>
                                </div>
                                <div class="card-stacked orange">
                                    <div class="card-content">
                                        <h3> 1 </h3>
                                    </div>
                                    <div class="card-action">
                                        <strong>المدراء</strong>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-3">

                            <div class="card horizontal cardIcon waves-effect waves-dark">
                                <div class="card-image green">
                                    <i class="material-icons dp48">supervisor_account</i>
                                </div>
                                <div class="card-stacked green">
                                    <div class="card-content">
                                        <h3><?php
                                        echo $CustumerCount;
                                        ?></h3>
                                    </div>
                                    <div class="card-action">
                                        <strong>الزبائن</strong>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!--/.row-->
                <div class="col-xs-12 col-sm-12 col-md-5">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="card">
                                <div class="card-image donutpad">
                                    <div id="morris-donut-chart"></div>
                                </div>
                                <div class="card-action">
                                    <b>استخدامات المستخدمين</b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-image">
                            <div id="morris-bar-chart"></div>
                        </div>
                        <div class="card-action">
                            <b> Bar Chart Example</b>
                        </div>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-image">
                            <div id="morris-area-chart"></div>
                        </div>
                        <div class="card-action">
                            <b>Area Chart</b>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>



            <footer>
                <p>All right reserved. Developed by: <a href="https://github.com/RamiQud">Rami Qudaih</a></p>
            </footer>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{ asset('/js/jquery-1.10.2.js') }}"></script>

    <!-- Bootstrap Js -->
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('/js/materialize.min.js') }}"></script>

    <!-- Metis Menu Js -->
    <script src="{{ asset('/js/jquery.metisMenu.js') }}"></script>
    <!-- Morris Chart Js -->
    <script src="{{ asset('/js/morris/raphael-2.1.0.min.js') }}"></script>
    <script src="{{ asset('/js/morris/morris.js') }}"></script>


    <script src="{{ asset('/js/easypiechart.js') }}"></script>
    <script src="{{ asset('/js/easypiechart-data.js') }}"></script>

    <script src="{{ asset('/js/Lightweight-Chart/jquery.chart.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('/js/custom-scripts.js') }}"></script>


</body>

</html>
