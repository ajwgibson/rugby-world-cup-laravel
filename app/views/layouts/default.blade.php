
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Alan's RWC2015 Prediction Competition">

    <title>RWC2015 Competition</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this site -->
    <link href="{{ asset('css/world-cup.css') }}" rel="stylesheet">

    <!-- Page specific CSS -->
    @yield('extra_css')

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-49382711-3', 'grumpygibson.com');
      ga('send', 'pageview');
    </script>

  </head>

  <body>

    <div id="wrap">

      <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            {{ link_to_route('home', 'Rugby World Cup 2015 Competition', $parameters = array(), $attributes = array('class' => 'navbar-brand')) }}
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li>{{ link_to_route('home', 'Home') }}</li>
              <li>{{ link_to_route('instructions', 'Instructions') }}</li>
              <li>{{ link_to_route('results', 'Results') }}</li>
              <li>{{ link_to_route('entry.index', 'Competition Entry') }}</li>
              @if (Auth::check())
              <li>{{ link_to_route('admin.index', 'Admin') }}</li>
              <li>{{ link_to_route('logout', 'Logout') }}</li>
              @endif
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>

      <div class="container">

          <div class="row" id="header">
            <div class="col-sm-12">
              <a href="http://www.rugbyworldcup.com/" target="_blank"><img src="{{ asset('rwc-logo.png') }}"  class="img-responsive" alt="Header image"></a>
            </div>
          </div>

          @if (Session::has('message'))
            <div class="panel panel-danger">
                <div class="panel-heading">Error</div>
                <div class="panel-body">
                    <p>{{ Session::get('message') }}</p>
                </div>
            </div>
          @endif

          @if (Session::has('info'))
            <div class="panel panel-info">
                <div class="panel-heading">Information</div>
                <div class="panel-body">
                    <p>{{ Session::get('info') }}</p>
                </div>
            </div>
          @endif

          @if ($errors->any())
            <div class="panel panel-danger">
                <div class="panel-heading">Validation Errors</div>
                <div class="panel-body">
                    <ul>
                        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                    </ul>
                </div>
            </div>
          @endif
                
          @yield('content')

      </div>

      <div id="footer">
        <div class="container">
          <p class="text-muted">
            If you get stuck or have any queries, email me at 
            <a href="mailto:ajw.gibson@gmail.com?Subject=RWC2015%20Competition" target="_top">ajw.gibson@gmail.com</a>
          </p>
        </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Page specific JS -->
    @yield('extra_js')

  </body>

</html>
