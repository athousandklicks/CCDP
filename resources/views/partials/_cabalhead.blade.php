<head>
<title>CCDP @yield('title')</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>



<link rel="stylesheet" type="text/css" media="all" href="{{URL::asset('/cabal/css/style.css')}}" />

<link rel="stylesheet" type="text/css" media="all" href="{{URL::asset('/cabal/css/bootstrap.css')}}" />

<link rel="stylesheet" type="text/css" media="all" href="{{URL::asset('/cabal/css/font-awesome.css')}}" />

{{Html::script('/js/jquery-2.1.1.min.js')}}

{{Html::script('/js/Chart.min.js')}}

{{Html::script('/js/chartinator.js')}}

{{Html::script('/js/skycons.js')}}

@yield('parsley_stylesheet')


<!--js-->
<script src="/js/jquery-2.1.1.min.js"></script> 

<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="/js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="/lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="/js/chartinator.js" ></script>
    

<!--skycons-icons-->
<script src="/js/skycons.js"></script>
<!--//skycons-icons-->
</head>


