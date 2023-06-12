<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Track Material Design Bootstrap Admin Template</title>

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
    $sql = 'SELECT id, CustumerName, numberId, exportDate, mobileNumber   FROM dataCustumer';
    // تنفيذ الاستعلام وجلب البيانات
    $result = $conn->query($sql);
    $userCount = DB::table('dataCustumer')->count();
    
    ?>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="{{ route('dashboard.indexDashborde') }}">
                    <strong>لوحة التحكم</strong></a>

                <div id="sideNav" href=""><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown4"><i
                            class="fa fa-envelope fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown2"><i
                            class="fa fa-bell fa-fw"></i> <i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a class="dropdown-button waves-effect waves-dark" href="#!" data-activates="dropdown1"><i
                            class="fa fa-user fa-fw"></i>
                        <b> {{ session('username') }}</b> <i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
        </nav>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#"><i class="fa fa-user fa-fw"></i>حساب المستخدم </a>
            </li>
            <li><a href="{{ route('login') }}"><i class="fa fa-sign-out fa-fw"></i> تسجيل الخروج</a>
            </li>
        </ul>
        <ul id="dropdown2" class="dropdown-content w250">
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-comment fa-fw"></i> New Comment
                        <span class="pull-right text-muted small">4 min</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                        <span class="pull-right text-muted small">12 min</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                        <span class="pull-right text-muted small">4 min</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-tasks fa-fw"></i> New Task
                        <span class="pull-right text-muted small">4 min</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
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
        <ul id="dropdown3" class="dropdown-content dropdown-tasks w250">
            <li>
                <a href="#">
                    <div>
                        <p>
                            <strong>Task 1</strong>
                            <span class="pull-right text-muted">60% Complete</span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <p>
                            <strong>Task 2</strong>
                            <span class="pull-right text-muted">28% Complete</span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28"
                                aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                <span class="sr-only">28% Complete</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <p>
                            <strong>Task 3</strong>
                            <span class="pull-right text-muted">60% Complete</span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <p>
                            <strong>Task 4</strong>
                            <span class="pull-right text-muted">85% Complete</span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85"
                                aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                <span class="sr-only">85% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
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
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">


                    <li>
                        <a class="disactive-menu waves-effect waves-dark"
                            href="{{ route('dashboard.indexDashborde') }}"><i class="fa fa-dashboard"></i>
                            الرئيسة</a>
                    </li>

                    <li>
                        <a href="{{ route('dashboard.users') }}" class="waves-effect waves-dark"><span
                                class="material-symbols-outlined">
                                shield_person
                            </span> المستخدمين</a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.customers') }}" class="active-menu waves-effect waves-dark"><i
                                class="fa fa-edit"></i> بيانات
                            العملاء </a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div class="header">
                <h1 class="page-header">
                    العملاء
                </h1>
                <ol class="breadcrumb">
                    <li><a href="./index.php">الرئيسة</a></li>
                    <li><a href="./users.html">العملاء</a></li>
                </ol>

            </div>

            <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="card">
                            <div class="card-action">
                                جدول العملاء
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover"
                                        id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th class="center" style="width: 200px;">اسم العميل</th>
                                                <th class="center" style="width: 200px;">الرقم التسلسلي</th>
                                                <th class="center">رقم الهاتف</th>
                                                <th class="center">تاريخ الانشاء</th>
                                                <th class="center" style="width: 200px;">عرض المعلومات</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            if ($result->rowCount() > 0) {
                                                // عرض البيانات في صفوف     الجدول
                                                while ($row = $result->fetch()) {
                                                    echo '<tr><td>' . $row['CustumerName'] . '</td><td>' . $row['numberId'] . '</td><td>' . $row['mobileNumber'] . '</td><td>' . $row['exportDate'] . '</td><td style="justify-content: space-evenly;display: flex;"><a type="button" class="btn btn-primary"> تحرير</a> <a href="{{route(stocks.destroy)}}"  type="button" class="btn btn-danger" data-id="{{ $row->id }}">حذف</a></td>';
                                                }
                                            
                                                echo '</table>';
                                            }
                                            ?>


                                            @foreach ($result as $customer)
                                                <tr>
                                                    <td>{{ $customer['CustumerName'] }}</td>
                                                    <td>{{ $customer['numberId'] }}</td>
                                                    <td>{{ $customer['mobileNumber'] }}</td>
                                                    <td>{{ $customer['exportDate'] }}</td>
                                                    <td>
                                            {{-- {{ dd($customer) }} --}}

                                            <a href="{{ route('delete/'. $customer['numberId'] ) }}" class="btn btn-primary">delete</a>
                                            <form
                                                            action="{{ url('delete/'.$customer->id) }}" method="POST" style="display: inline-block;">
                                                            @csrf
                                                            @method('DELETE')

                                                        </form>
                                            </td>
                                            </tr>
                                            @endforeach





                                            @section('content')
                                                @if ($message = Session::get('success'))
                                                    <div class="alert alert-success">
                                                        {{ $message }}
                                                    </div>
                                                @endif

                                                @if ($result->rowCount() > 0)
                                                    @foreach ($result as $customer)
                                                        <tr>

                                                            <td>{{ $customer['CustumerName'] }}</td>
                                                            <td>{{ $customer['numberId'] }}</td>
                                                            <td>{{ $customer['mobileNumber'] }}</td>
                                                            <td>{{ $customer['exportDate'] }}</td>
                                                            <td>
                                                                <?php
                                                                while ($row = $result->fetch()) {
                                                                    $row = $result->fetch();
                                                                    echo '<tr><td>' . $row['CustumerName'] . '</td><td>' . $row['numberId'] . '</td><td>' . $row['mobileNumber'] . '</td><td>' . $row['exportDate'] . '</td>';
                                                                }
                                                                ?>
                                                                <form
                                                                    action="{{ route('stocks.destroy', $row['numberId']) }}"
                                                                    method="POST">
                                                                    <a class="btn btn-info"
                                                                        href="{{ route('stocks.show', $row['numberId']) }}">Show</a>
                                                                    <a class="btn btn-primary"
                                                                        href="{{ route('stocks.edit', $row['numberId']) }}">Edit</a>
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    {{-- @else --}}
                                                    <div class="alert alert-alert">Start Adding to the Database.</div>
                                                @endif
                                            </tbody>
                                        </table>



                                        </table>
                                    </div>

                                </div>
                            </div>
                            <!--End Advanced Tables -->
                        </div>
                    </div>


                    <footer>
                        <p>All right reserved. Developed by: <a href="https://github.com/RamiQud">Rami Qudaih</a></p>
                    </footer>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
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
            <!-- DATA TABLE SCRIPTS -->
            <script src="{{ asset('/js/dataTables/jquery.dataTables.js') }}"></script>
            <script src="{{ asset('/js/dataTables/dataTables.bootstrap.js') }}"></script>
            <script>
                $(document).ready(function() {
                    $('#dataTables-example').dataTable();
                });
            </script>
            <!-- Custom Js -->
            <script src="{{ asset('/js/custom-scripts.js') }}"></script>
            {{-- <script>
            $(document).on('click', '.delete-customer', function() {
                var customer_id = $(this).data('id');
                var customer_name = $(this).data('customername');
                if (confirm("هل أنت متأكد من حذف " + customer_name + "؟")) {
                    $.ajax({
                        type: "DELETE",
                        url: "{{ route('customers.destroy', '') }}/" + customer_id,
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            $("#customer-" + customer_id).remove();
                            alert(customer_name + " تم حذفه بنجاح!");
                        },
                        error: function(data) {
                            console.log('خطأ:', data);
                        }
                    });
                }
            });
        </script> --}}


    </body>

    </html>
