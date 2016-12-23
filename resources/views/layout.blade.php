<!DOCTYPE html>
<html lang="es">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <head>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Eloquent</title>
        

        
    </head>
    <body>
        <nav class="navbar navbar-inverse">
  
      <div class="container">
          <a href="{{route('home')}}"  class="navbar-brand">Eloquent</a> 
          <ul class="nav navbar-nav">
              <li>
                  <a href="{{route('home')}}">Home</a>
              </li>
             @include('partials.queryMenu')
          </ul>
        </div>
      </nav>
        
        
        <div class="container">
            @yield('content')
            
        </div>
        
        
        
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
