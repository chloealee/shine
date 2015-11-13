<!DOCTYPE html>
<html>
    <head>
        <title>Shine</title>
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="fonts/BebasNeueBold.otf" type="text/css" charset="utf-8" /> 
        <link rel="stylesheet" href="fonts/BebasNeueRegular.otf" type="text/css" charset="utf-8" /> 
        <link href="{{ asset('css/confirmation.css') }}" rel="stylesheet" type="text/css" >
        
        <style>
	    @font-face {
	        font-family: 'Bebas Neue Bold';
	        src: url('fonts/BebasNeueBold.eot');
	        src: url('fonts/BebasNeueBold.eot?#iefix') format('embedded-opentype'),
	            url('fonts/BebasNeueBold.woff') format('woff'),
	            url('fonts/BebasNeueBold.ttf') format('truetype'),
	            url('fonts/BebasNeueBold.svg#FontName') format('svg');
	        font-weight: normal;
	        font-style: normal;
	    }

	    @font-face {
	        font-family: 'Bebas Neue Regular';
	        src: url('fonts/BebasNeueRegular.eot');
	        src: url('fonts/BebasNeueRegular.eot?#iefix') format('embedded-opentype'),
	            url('fonts/BebasNeueRegular.woff') format('woff'),
	            url('fonts/BebasNeueRegular.ttf') format('truetype'),
	            url('fonts/BebasNeueRegular.svg#FontName') format('svg');
	        font-weight: normal;
	        font-style: normal;
	    }
        </style>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-68971267-1', 'auto');
      ga('send', 'pageview');
    </script>

    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href={{ URL::to('/') }}><img src={{asset('images/shine2_logo.png')}}></a>
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden-xs" id="social-icons"><a href="https://twitter.com/ShineText" target="_blank"><img src={{asset('images/twitter_Icon.png')}}></a></li>
                    <li class="hidden-xs" id="social-icons"><a href="https://instagram.com/ShineText" target="_blank"><img src={{asset('images/instagram_Icon.png')}}></a></li>
                    <li class="hidden-xs" id="social-icons"><a href="https://www.facebook.com/Shine-Text" target="_blank"><img src={{asset('images/facebook_Icon.png')}}></a></li>
                </ul>
            </div><!-- /.container-fluid -->
        </nav>

    	<div class="page">
	    	<h1 id="refer_success">SUCCESS! THANKS FOR SIGNING YOUR FRIEND(S) UP FOR SHINE! #SHINEON</h1>
		</div>
    </body>
</html>