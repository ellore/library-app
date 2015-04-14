<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('font-awesome-4.3.0/css/font-awesome.css')}}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{asset('user-assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('user-assets/css/style-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('user-assets/css/pace-theme-barber-shop.css')}}" rel="stylesheet" />
    <script src="{{asset('user-assets/js/pace.min.js')}}"></script>
    @yield('link')

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<section id="container" >
    <!-- **********************************************************************************************************************************************************
    TOP BAR CONTENT & NOTIFICATIONS
    *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg" style="background-color: #68dff0;">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="{{route('home')}}" class="logo"><b>Online Library</b></a>
        <!--logo end-->

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{route('user_login')}}">Logout</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="#"><img src="{{asset('user-assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>
                <h5 class="centered">IITG CSE Library</h5>

                <li class="mt">
                    <a class="@yield('user-home')" href="{{route('user_home')}}">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        <span>&nbsp&nbsp&nbspHome</span>
                    </a>
                </li>

                <li  class="sub-menu">
                    <a class="@yield('user-accounts')" href="{{route('user_accounts')}}" >
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <span>&nbsp&nbsp&nbspAccounts</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a class="@yield('user-wish_list')" href="{{route('user_wish_list')}}" >
                        <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                        <span>&nbsp&nbsp&nbspWishList</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a class="@yield('user-queued_books')" href="{{route('user_queued_books')}}" >
                        <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                        <span>&nbsp&nbsp&nbspQueued Books</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a class="@yield('user-lost_form')" href="javascript:;" >
                        <i class="fa fa-tasks"></i>
                        <span>Forms</span>
                    </a>
                    <ul class="sub">
                        <li class="@yield('user-lost_book')"><a href="{{route('user_lost_book')}}">Lost Book</a></li>
                        <li class="@yield('user-donate_book')"><a href="{{route('user_donate_book')}}">Donate Book</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a class="@yield('user-contacts')" href="{{route('user_contacts')}}" >
                        <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
                        <span>&nbsp&nbsp&nbspContacts</span>
                    </a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            @yield('main_content')
        </section><!--/wrapper-->
    </section><!-- /MAIN CONTENT -->


    <!--main content end-->
    <!--footer start-->
    <footer class=" site-footer navbar navbar-inverse navbar-fixed-bottom " id="sticky-footer">
        <div class="text-center">
            2015 - IITG CSE LIBRARY
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('user-assets/js/jquery.js')}}"></script>
<script src="{{asset('user-assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('user-assets/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
<script src="{{asset('user-assets/js/jquery.ui.touch-punch.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('user-assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('user-assets/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('user-assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>


<!--common script for all pages-->
<script src="{{asset('user-assets/js/common-scripts.js')}}"></script>

<!--script for this page-->
@yield('scripts')

<script>
    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

</script>



</body>
</html>
