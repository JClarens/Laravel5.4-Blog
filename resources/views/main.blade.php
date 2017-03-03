<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  <head>  
  <body>
      @include('partials._nav')
    <div class="container"> 
      @yield('content')
      @include('partials._messages')
      @include('partials._footer')
    </div><!--end of container-->      
  </body>
@include('partials._javascript')
</html>











<!--<div class="row">
            <div class="col-md-12"> 
                <div class="jumbotron">
                    <h1>Welcome to My Blog!</h1>
                    <p class"lead">Thankyou for visiting. This is my test blog built with Laravel. Please read my Latest Post!</p>
                    <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
                </div>
          </div>
       </div><!end of row
       <div class="row">
          <div class="col-md-8">
            <div class="post">
              <h3>Post Title</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum         
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post">
              <h3>Post Title2</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum         
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div class="post">
              <h3>Post Title3</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum         
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            
          </div><!end of row class
          
          <div class="col-md-3 col-md-offset-1" ><!sidebar
          <h2>sidebar</h2>          
          </div>
      </div>     -->