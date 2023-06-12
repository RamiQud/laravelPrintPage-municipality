<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Users Data</title>

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


    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="index.php"> <strong>لوحة التحكم</strong></a>

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
                        <b> {{ session('username') }}
                        </b>
                        <i class="material-icons right">arrow_drop_down</i></a></li>
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

                        <a href="{{ route('AdminDashBoard.users') }}"
                            class="active-menu waves-effect waves-dark"><span class="material-symbols-outlined">
                                shield_person
                            </span> المستخدمين</a>
                    </li>
                    <li>
                        <a href="{{ route('registertion') }}" class="waves-effect waves-dark"
                            style="background: rgb(1, 168, 1); color:black;">
                            <i class="fa fa-edit active" style="color:black;"></i> إضافة مستخدم
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard.customers') }}" class="waves-effect waves-dark"><i
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
                    المستخدمين
                </h1>
                <ol class="breadcrumb">
                    <li><a href="./index.php">الرئيسة</a></li>
                    <li><a href="./users.html">المستخدمين</a></li>
                </ol>

            </div>
            <div>
                <div class="card-content">
                    <div class="mt-5">
                        @if ($errors->any())
                            <div class="col-12">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-warning">
                                {{ session('error', ' المستخدم مسجل مسبقا') }}</div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success', 'تم التسجيل') }}</div>
                        @endif
                    </div>
                    <form action="{{ route('registertion.post') }}" id="page-inner" method="POST"
                        class="ms-auto me-auto "style="
                        width: 500px;
                        margin-left: 300px;
                        border: 2px solid;
                        border-radius: 20px;
                        background: white;
                        color: cadetblue;
                        font-size: 14px;
                        min-height: 400px;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-between;
                                                        ">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">اسم المستخدم</label>
                            <input type="name" class="form-control" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">الرقم التعريفي</label>
                            <input type="number" class="form-control" name="numberId" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">: إختر الصلاحيات </label>
                            <div class="chose-st">
                            <button type="button" id="toggleRoles" class="btn btn-primary">اختيار الصلاحيات</button>
                            <select id="role" class="form-control" name="role" multiple
                                style="display: none;">
                                <option value="super_admin">Super Admin</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
                        </div>

                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#toggleRoles').click(function() {
                                    $('#role').toggle();
                                });

                                // عند تغيير الخيارات، عرض الخيارات المحددة في العنصر "selectedRoles"
                                $('#role').change(function() {
                                    var selectedOptions = $(this).val();
                                    var selectedText = '';

                                    if (selectedOptions) {
                                        selectedText = selectedOptions.join(', ');
                                    }

                                    $('#toggleRoles').text(selectedText);

                                    // تغيير لون الزر إلى الأخضر عند اختيار خيار واحد على الأقل
                                    if (selectedOptions.length > 0) {
                                        $('#toggleRoles').removeClass('btn-primary').addClass('btn-success');
                                    } else {
                                        $('#toggleRoles').removeClass('btn-success').addClass('btn-primary');
                                    }
                                    // إخفاء القائمة بعد اختيار خيار
                                    $('#role').slideUp();
                                });
                            });

                            // إضافة الخيارات المحددة إلى حقل النموذج قبل إرساله
                            $('form').submit(function() {
                                var selectedRoles = $('#role').val();
                                if (selectedRoles == null) {
                                    alert('يرجى تحديد الصلاحيات');
                                    return false; // إيقاف إرسال النموذج
                                } else {
                                    // إضافة الخيارات المحددة إلى حقل النموذج
                                    $('input[name="role"]').val(selectedRoles);
                                }
                            });
                        </script>









                        <div class="mb-3">
                            <label class="form-label">كلمة السر</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary">تسجيل المستخدم</button>
                    </form>
                </div>

            </div>

        </div>
        <!-- /. PAGE WRAPPER  -->
        <!-- /. WRAPPER  -->
        <!-- JS Scripts-->


        <!-- jQuery Js -->
        <script src="{{ asset('js/jquery-1.10.2.js') }}"></script>

        <!-- Bootstrap Js -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

        <script src="{{ asset('/js/materialize.min.js') }}"></script>

        <!-- Metis Menu Js -->
        <script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
        <!-- Morris Chart Js -->
        <script src="{{ asset('js/morris/raphael-2.1.0.min.js') }}"></script>
        <script src="{{ asset('js/morris/morris.js') }}"></script>


        <script src="{{ asset('js/easypiechart.js') }}"></script>
        <script src="{{ asset('js/easypiechart-data.js') }}"></script>

        <script src="{{ asset('js/Lightweight-Chart/jquery.chart.js') }}"></script>
        <!-- DATA TABLE SCRIPTS -->
        <script src="{{ asset('js/dataTables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('js/dataTables/dataTables.bootstrap.js') }}"></script>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });
        </script>
        <!-- Custom Js -->
        <script src="{{ asset('js/custom-scripts.js') }}"></script>


</body>

</html>
