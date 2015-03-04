<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TalentPool Admin">
    <meta name="author" content="TalentPool Admin">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>TalentPool - Admin - User List</title>

    <!--Core CSS -->
    {{ HTML::style('admin/bs3/css/bootstrap.min.css') }}
    {{ HTML::style('admin/css/bootstrap-reset.css') }}
    {{ HTML::style('admin/font-awesome/css/font-awesome.css') }}

    <!--dynamic table-->
    {{ HTML::style('admin/js/advanced-datatable/css/demo_page.css') }}
    {{ HTML::style('admin/js/advanced-datatable/css/demo_table.css') }}
    {{ HTML::style('admin/js/data-tables/DT_bootstrap.css') }}

    <!-- Custom styles for this template -->
    {{ HTML::style('admin/css/style.css') }}
    {{ HTML::style('admin/css/style-responsive.css') }}

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section id="container">
@include('admin.admin-header')
@include('admin.admin-sidebar')
<!--main content start-->
<section id="main-content">
<section class="wrapper">
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Dynamic Table
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-cog"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                     </span>
                </header>
                <div class="panel-body">
                <div class="adv-table">
                <table  class="display table table-bordered table-striped" id="dynamic-table">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $employeerList as $employeers )
                <tr class="gradeA">
                    <td>{{$employeers->first_name}}</td>
                    <td>{{$employeers->last_name}}</td>
                    <td>{{$employeers->email}}</td>
                    <td>{{$employeers->created_at}}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Registration Date</th>
                </tr>
                </tfoot>
                </table>
                </div>
                </div>
            </section>
        </div>
    </div>
</section>
</section>
<!--main content end-->
@include('admin.admin-right-sidebar')
</section>
<!-- Placed js at the end of the document so the pages load faster -->

<!--Core js-->
{{ HTML::script('admin/js/jquery.js') }}
{{ HTML::script('admin/bs3/js/bootstrap.min.js') }}
{{ HTML::script('admin/js/jquery.dcjqaccordion.2.7.js') }}
{{ HTML::script('admin/js/jquery.scrollTo.min.js') }}
{{ HTML::script('admin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js') }}
{{ HTML::script('admin/js/jquery.nicescroll.js') }}
<!--Easy Pie Chart-->
{{ HTML::script('admin/js/easypiechart/jquery.easypiechart.js') }}
<!--Sparkline Chart-->
{{ HTML::script('admin/js/sparkline/jquery.sparkline.js') }}
<!--jQuery Flot Chart-->
{{ HTML::script('admin/js/flot-chart/jquery.flot.js') }}
{{ HTML::script('admin/js/flot-chart/jquery.flot.tooltip.min.js') }}
{{ HTML::script('admin/js/flot-chart/jquery.flot.resize.js') }}
{{ HTML::script('admin/js/flot-chart/jquery.flot.pie.resize.js') }}

<!--dynamic table-->
{{ HTML::script('admin/js/advanced-datatable/js/jquery.dataTables.js') }}
{{ HTML::script('admin/js/data-tables/DT_bootstrap.js') }}
<!--common script init for all pages-->
{{ HTML::script('admin/js/scripts.js') }}

<!--dynamic table initialization -->
{{ HTML::script('admin/js/dynamic_table_init.js') }}
</body>
</html>