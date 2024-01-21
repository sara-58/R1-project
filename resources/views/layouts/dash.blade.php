<!DOCTYPE html>
<html lang="en">

@include('includesdash.listhead')

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-car"></i></i> <span>Rent Car Admin</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    @include('includesdash.userinfo')
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    @include('includesdash.sidebar')
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    @include('includesdash.footerbutton')
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            @include('includesdash.topnav')
            <!-- /top navigation -->
            <!-- page content -->
            @yield('content')
            <!-- /page content -->
            <!-- footer content -->
            @include('includesdash.dashfooter')
            <!-- /footer content -->
        </div>
    </div>
    @include('includesdash.listscript')
</body>

</html>