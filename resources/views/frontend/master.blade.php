
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Courier Management System</title>
<link href="{{url('frontend/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!--<link href="css/style.css" rel='stylesheet' type='text/css' />-->
<link href="{{url('frontend/css/style.css')}}" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{url('frontend/js/jquery.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.easydropdown.js')}}"></script>
<!--start slider -->
<link rel="stylesheet" href="{{url('frontend/css/fwslider.css')}}" media="all">
<script src="{{url('frontend/js/jquery-ui.min.js')}}"></script>
<script src="{{url('frontend/js/fwslider.js')}}"></script>
<!--end slider -->
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
	  @include('frontend.fixed.header')

	  @yield('content')

	 @include('frontend.fixed.footer')

    <script type="text/javascript" src="{{url('frontend/js/jquery.flexisel.js')}}"></script>

</body>	
</html>