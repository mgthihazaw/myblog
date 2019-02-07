<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('users/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('users/css/blog-home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/a11y-dark.min.css">  <!--hightlight.css-->

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand " href="{{url('/')}}">BLOG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link " href="#"><button class="btn btn-dark btn " type="button"  aria-haspopup="true"
            aria-expanded="false">HOME</button>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"><button class="btn btn-dark btn " type="button"  aria-haspopup="true"
            aria-expanded="false">BLOG</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">
              <button class="btn btn-dark btn " type="button"  aria-haspopup="true"
            aria-expanded="false">SERVICES</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#"><button class="btn btn-dark btn " type="button"  aria-haspopup="true"
            aria-expanded="false">CONTACT</button></a>
            </li>
            <div class="btn-group">
           <button class="btn btn-dark btn dropdown-toggle " type="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            ACCOUNT
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">{{Auth::user()->name}}</a>
            @if(Auth::user()->is_admin==1)
            <a class="dropdown-item title" href="{{url('admin/home')}}">Admin Panel</a>
            @endif
            <a class="dropdown-item" href="{{route('user.logout')}}">Logout</a>

            
            <div class="dropdown-divider"></div>
            
          </div>
        </div>

          </ul>
        </div>
      </div>
      
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row col-md-12">

        <!-- Blog Entries Column -->
        
        
           @yield('content')
       
       

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('/users/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('/users/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


  <script src="https://cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
 <script>$(document).ready(function() {
 


  $('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
  });
});
 $('.ch').click(function(){
   $('.cb').slideToggle(500);
  });
$('.csb').hide();
$('.csh').click(function(){
   $('.csb').slideToggle(700);
  });

</script>

  </body>

</html>
