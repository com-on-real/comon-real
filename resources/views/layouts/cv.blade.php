<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/cv/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>@yield('title')</title>
	</head>
<body>
<div id="app">
    @yield('startModal')
    <div class="icon-bar">
        <a class="active" href="#" @click="push('Middle')"><i class="fa fa-home"></i></a>

        <a href="#timeline" onclick="javascript: pushIt('Left')"><i class="fa fa-arrow-left"></i></a>
        <a href="#" @click="push('Right')"><i class="fa fa-arrow-right"></i></a>
        <a href="#" @click="reversCard"><i class="fa fa-retweet"></i></a>

        <a href="#startModal"><i class="fa fa-id-card"></i></a>
        
        
    </div>

<div class="card">
    <div class="cardInner">

    
	@yield('cvPage')
	@yield('motivationPage')
	@yield('timelinePage')


        
        </div> <!--flipcard-->        
    </div><!--flipcard-->
</div>

</body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  </body>
  <script src="{{ URL::asset('js/cv/app.js') }}"></script>
</html>