<!DOCTYPE html>
<html>
  <head>
    <title>Axentix Layout - Under navbar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@0.5.3/dist/css/axentix.min.css">
    <style>
        .salon{
            padding-top: 15px;
        }
        .salon-title, 
        .temperature, 
        .brigtness, 
        .pressure, 
        .humidity{
            text-align: center;
            font-family: 'Courier New', Courier, monospace;
            font-size: 30px;
        }
        p{
          font-family: 'Courier New', Courier, monospace;
          font-size: 35px;
          text-align: center;
        }
    </style>
  </head>

  <body class="layout with-sidenav fixed-sidenav under-navbar">
    <header>
      <div class="navbar-fixed">
        <nav class="navbar primary">
          <a href="#" target="_blank" class="navbar-brand">IOT-PROJECT</a>
          <div class="navbar-menu ml-auto">
            <a class="navbar-link" href="{{ url('salon') }}">Living room</a>
            <a class="navbar-link" href="{{ url('chambre') }}">Bedroom #1</a>
          </div>
        </nav>
      </div>
    </header>

    <div id="example-sidenav" class="sidenav large fixed white">
      <div class="sidenav-header">
        <button data-target="example-sidenav" class="sidenav-trigger"><i class="fas fa-times"></i></button>
        <img class="logo dropshadow-1" src="your_img_path" alt="Logo" />
      </div>
      <a href="{{ url('salon') }}" class="sidenav-link">Living room</a>
      <a href="{{ url('chambre') }}" class="sidenav-link">Bedroom #1</a>
    </div>

    <main>
      <div class="container salon">

        <div class="card hoverable-1 rounded-3">
            <div class="card-header salon-title"><b>Bedroom #1</b></div>

            <div class="card-content">
                <div class="grix xs2 md2">
             
                    <div class="card hoverable-1 rounded-3">
                      <div class="card-header temperature">Temperature</div>
                      <div class="card-content">
                      <p>
                        {{$data->temperature}}°C
                      </p>
                      </div>
                    </div>
      
      
      
                    <div class="card hoverable-1 rounded-3">
                      <div class="card-header brigtness">Brightness</div>
                      <div class="card-content">
                      <p>
                        {{$data->brightness}}lux
                      </p>
                      </div>
                    </div>
      
      
                  <div class="card hoverable-1 rounded-3">
                      <div class="card-header pressure">Pressure</div>
                      <div class="card-content">
                      <p>
                        {{$data->pressure}}HPa
                      </p>
                      </div>
                  </div>
      
      
                  <div class="card hoverable-1 rounded-3">
                      <div class="card-header humidity">Humidity</div>
                      <div class="card-content">
                      <p>
                        {{$data->humidity}}%
                      </p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
      </div>







      <button data-target="example-sidenav"
        class="btn press amaranth dark-1 sidenav-trigger hide-md-up">
          Open sidenav
      </button>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/axentix@0.5.3/dist/js/axentix.min.js"></script>
    <script>
        var sidenav = new Sidenav('#example-sidenav');
    </script>
  </body>
</html>