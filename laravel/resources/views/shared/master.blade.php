<!DOCTYPE html>
<html>
    <head>
        <title>GUIDE.ME</title>

        <!-- Included CSS Files (Compressed) -->
        {!! HTML::style('css/foundation.css') !!}
        {!! HTML::style('css/main.css') !!}
        {!! HTML::style('css/app.css') !!}


        {!! Minify::javascript('/js/modernizr.foundation.js') !!}

        {!! HTML::style('fonts/ligature.css') !!}
      
      <!-- Google fonts -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
    
    </head>

    <body ng-app="myApp">

<!-- ######################## Main Menu ######################## -->
    <nav>
      <div class="row">
        <div class="small-12 medium-4 large-6 columns namelogo">
          <h1><a href="/">GUIDE.ME</a> </h1>
        </div>
        <div class="small-12 medium-8 large-6 columns">
          <div class="nav-bar">
            <ul class="button-group">
            <li><a href="#" class="button">About</a></li>
            <li><a href="/login" class="button">Login</a></li>
            </ul>
          </div>
        </div>
      </div> 
    </nav>
      
@yield('content')

<!-- ######################## Footer ######################## -->  
      
<footer>

      <div class="row">
      
          <div class="twelve columns footer">
              <a href="http://twitter.com/dieterarno" class="lsf-icon" style="font-size:16px; margin-right:15px" title="twitter">Twitter</a> 
              <a href="http://csstemplateheaven.com/csstemplateheaven" class="lsf-icon" style="font-size:16px; margin-right:15px" title="facebook">Facebook</a>
              <a href="http://csstemplateheaven.com/csstemplateheaven" class="lsf-icon" style="font-size:16px; margin-right:15px" title="pinterest">Pinterest</a>
              <a href="http://twitter.com/dieterarno" class="lsf-icon" style="font-size:16px" title="instagram">Instagram</a>
          </div>
          
      </div>

</footer>         

<!-- ######################## Scripts ######################## --> 

    <!-- Included JS Files (Compressed) -->
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places&types=geocode&region=GB"></script>
      

      {!! Minify::javascript('/js/foundation.min.js') !!}
      {!! Minify::javascript('/js/app.js') !!}


      {!! Minify::javascript('/js/all.js') !!}


</body>
</html>