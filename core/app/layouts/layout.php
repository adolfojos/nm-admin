<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Elite Admin - is a responsive admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <link href="plugins/bower_components/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    
    <!-- xeditable css -->
    <link href="plugins/bower_components/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" />
    
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="<?php if(isset($_SESSION["user_id"])):?>  fix-sidebar <?php else:?>login-page<?php endif; ?>" >

    <!-- Preloader -->

    <div id="wrapper">
    <?php if(isset($_SESSION["user_id"])):?>
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- Toggle icon for mobile view -->
                <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <!-- Logo -->
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b><img src="plugins/images/eliteadmin-logo.png" alt="home" /></b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs"><img src="plugins/images/eliteadmin-text.png" alt="home" /></span>
                    </a>
                </div>
                <!-- /Logo -->
                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li>

                    </li>
                </ul>
                <!-- This is the message dropdown -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="icon-envelope"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <!-- .dropdown-messages -->
                        <ul class="dropdown-menu mailbox scale-up">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- .Task dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="icon-note"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks scale-up">
                            <li>
                                <a href="javascript:void(0)">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </li>
                    <!-- /.Task dropdown -->
                    <!-- .user dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="storage/images/<?php if(isset($_SESSION["user_id"]) ){ echo UserData::getById($_SESSION["user_id"])->image;}?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"> <?php if(isset($_SESSION["user_id"]) ){ echo UserData::getById($_SESSION["user_id"])->name; } ?></b> </a>
                        <ul class="dropdown-menu dropdown-user scale-up">
                            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="./?action=processlogout"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.user dropdown-user -->
                    </li>
                    <!-- /.user dropdown -->
                    <!-- .Megamenu -->
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- Search input-group this is only view in mobile -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span>
                        </div>
                        <!-- / Search input-group this is only view in mobile-->
                    </li>
                    <!-- User profile-->
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="storage/images/<?php if(isset($_SESSION["user_id"]) ){ echo UserData::getById($_SESSION["user_id"])->image;}?>" alt="user-img" width="36" class="img-circle"> <span class="hide-menu"> <?php if(isset($_SESSION["user_id"]) ){ echo UserData::getById($_SESSION["user_id"])->name; } ?><span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- User profile-->
                    <li class="nav-small-cap m-t-10">-----Menu Principal</li>
                    <?php if(isset($_SESSION["user_id"])):?>
                    <li> <a href="./index.php?view=index" class="waves-effect"><i class="zmdi zmdi-view-dashboard  zmdi-hc-fw fa-fw"></i> <span class="hide-menu">Dashboard</span></a></li>
                    
                    


                    <?php if(Core::$user->kind==1):?>
                    <li> <a href="./index.php?view=campus" class="waves-effect"><i class="zmdi zmdi zmdi-home zmdi-hc-fw fa-fw"></i> <span class="hide-menu">Plantel</span></a></li>
                    <li>
                        <a href="javascript:void(0)" class="waves-effect"><i class="zmdi zmdi zmdi-male-female zmdi-hc-fw fa-fw"></i> <span class="hide-menu">Personas<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="javascript:void(0)">Estudiantes</a> </li>
                            <li> <a href="javascript:void(0)">Profesores</a> </li>
                             <li> <a href="javascript:void(0)">Representantes</a> </li>
                        </ul>
                    </li>
                    <li> <a href="./index.php?view=users" class="waves-effect"><i class="zmdi zmdi zmdi-accounts-alt zmdi-hc-fw fa-fw"></i> <span class="hide-menu">Usuarios</span></a></li>
                    <?php endif;?>
                    <?php if(Core::$user->kind==2):?>
                    <li>
                        <a href="javascript:void(0)" class="waves-effect"><i class="zmdi zmdi-copy zmdi-hc-fw fa-fw"></i> <span class="hide-menu">Multi Dropdown<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                            <li> <a href="javascript:void(0)">Second Level Item</a> </li>
                            <li>
                                <a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                    <li> <a href="javascript:void(0)">Third Level Item</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <?php endif;?>
                    <?php endif;?>
                </ul>
            </div>
        </div>
        <?php endif;?>
        <!-- Left navbar-sidebar end -->
        <!-- Page Content -->
        <?php if(isset($_SESSION["user_id"])):?>
        <div id="page-wrapper">
            <?php View::load("index");?>
            <footer class="footer text-center"> 
            	<?php echo "Copyright &copy; " . date (" Y ");?> &copy; Elite Admin brought to you by adolfojos 
            </footer>
            
        </div>
        <!-- /#page-wrapper -->
            </div>
    <!-- /#wrapper -->
<?php else:?>
    <section id="wrapper" class="login-register">
        <div class="login-box">
            <div class="white-box">
                <form class="form-horizontal form-material" id="loginform" action="./?action=processlogin" method="post">
                    <h3 class="box-title m-b-20">Sign In</h3>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" name="username" type="text" required="" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" name="password" type="password" required="" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
      <?php endif;?>

    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>


    <script src="plugins/bower_components/moment/moment.js"></script>
    <script type="text/javascript" src="plugins/bower_components/x-editable/dist/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script type="text/javascript">
    $(function() {
       


        $('#name').editable({
            url: './?action=x-updatecampus',
            type: 'text',
            mode: 'inline'
        });

        $('#code').editable({
            type: 'text',
            mode: 'inline'
        });
        $('#zone').editable({
            type: 'text',
            mode: 'inline'
        });


                });
    </script>

    <script src="plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;

                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before(
                                '<tr class="group"><td colspan="5">' + group + '</td></tr>'
                            );

                            last = group;
                        }
                    });
                }
            });

            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>

