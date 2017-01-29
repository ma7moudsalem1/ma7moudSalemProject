<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{{ getSettings() }}</title>
		<meta name="keywords" content="{{ getSettings('keywords') }}">
		<meta name="description" content="{{ getSettings('dis') }}">
		<link rel="icon" href="{{ checkImage(getMainImages('Website Icon')) }}">
		<meta property="og:title" content="{{ getSettings() }}" />
		<meta property="og:image" content="{{ checkImage(getMainImages('Social Share')) }}" />
		<meta property="og:descriptio" content="{{ getSettings('dis') }}" />
		<meta property="og:type" content="website">
		<meta property="og:og:site_name" content="{{ Request::root() }}">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('public/website/css/animate.min.css') !!}
    {!! Html::style('public/website/css/bootstrap.min.css') !!}
		<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    {!! Html::style('public/website/css/templatemo-style.css') !!}
    {!! Html::style('public/website/css/edit-style.css') !!}
    {!! Html::style('public/alert/sweetalert.css') !!}
    {!! Html::script('public/website/js/jquery.js') !!}
    {!! Html::script('public/website/js/bootstrap.min.js') !!}
    {!! Html::script('public/website/js/jquery.singlePageNav.min.js') !!}
    {!! Html::script('public/website/js/typed.js') !!}
    {!! Html::script('public/website/js/wow.min.js') !!}
    {!! Html::script('public/website/js/custom.js') !!}
    {!! Html::script('public/alert/sweetalert.min.js') !!}

        <style>
            #home {
              background: url('{{ checkImage(getMainImages('Header')) }}') no-repeat;
              background-size: cover;
              padding-top: 50px;
              padding-bottom: 100px;
              min-height: 650px;
              }


					  ::-webkit-scrollbar-thumb { background-color: #333 }
            ::-moz-selection {@;
            background-color:{{ getSettings('selection') }};
            }
            ::selection {@;
            background-color: {{ getSettings('selection') }};
						}


        body::-webkit-scrollbar-thumb {@;
            background-color: {{ getSettings('scroll') }};
        }
        body {@;
            scrollbar-base-color: {{ getSettings('scroll') }} !important;
            scrollbar-highlight-color: {!! getSettings('scroll') !!} !important;
        }
        body::-webkit-scrollbar {  width: 10px; }
        body::-webkit-scrollbar-track { background-color: #ebebeb; -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3); }
        body::-webkit-scrollbar-button { background-color: #ebebeb; }  body::-webkit-scrollbar-corner { background-color: #030120; }
        body {scrollbar-3dlight-color: #ab1c1c;}
        </style>
	</head>
	<body id="top">

		@include('layouts.message')

        <!-- start header -->
        <header>
            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <ul class="social-icon">
                            <li><span>Find me at </span></li>
														@foreach($social as $link)
                            <li><a href="{{'http://'.$link->link_url}}" target="_blank" title="{{ $link->name }}" class="{{ 'fa '.getIcon($link->fa) }}"></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

    	<!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="{{ url('/') }}" class="navbar-brand">{{ getSettings() }}</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">HOME</a></li>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#service">SKILLS</a></li>
						<li><a href="#portfolio">PORTFOLIO</a></li>
						<li><a href="#contact">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- end navigation -->
  @yield('content')

  <!-- start copyright -->
        <footer id="copyright">
            <div class="container wow fadeInRight">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="" data-wow-offset="50" data-wow-delay="0.3s">
                        {{ getSettings() }} &copy; Copyright {{ date('Y') }}. {{ getSettings('copy') }}</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->
				<!-- Go to www.addthis.com/dashboard to customize your tools -->
				<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5889ba4dfee93b81"></script>
	</body>
</html>
