<!DOCTYPE html>
<html>
  <head>
    <title>Axentix Layout - Under navbar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@0.5.3/dist/css/axentix.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/axentix@0.5.3/dist/css/axentix.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/neu-axentix@1.0.0/dist/css/neu-axentix.min.css">
    <style>
        .salon{
            padding-top: 30px;
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
    </style>
  </head>

  <body class="layout with-sidenav fixed-sidenav under-navbar">
    <header>
      <div class="navbar-fixed">
        <nav class="navbar primary">
          <a href="#" target="_blank" class="navbar-brand">IOT-PROJECT</a>
          <div class="navbar-menu ml-auto">
            <a class="navbar-link" href="#">Living room</a>
            <a class="navbar-link" href="#">Bedroom #1</a>
          </div>
        </nav>
      </div>
    </header>

    <div id="example-sidenav" class="sidenav large fixed white">
      <div class="sidenav-header">
        <button data-target="example-sidenav" class="sidenav-trigger"><i class="fas fa-times"></i></button>
        <img src="https://lh3.googleusercontent.com/proxy/FpFDMu_sHLFwhL7v1xJy-xG2V5oLAVhvpvhvwtMo9QcI6AYyDalIt496uzKi88P18POjIGG25WfF8Rrsezt0J7ndaULkBMG4DG6VVksdTwu3bE04vJL6nHNWdr4fFF2TL4NvqFowVgYj1DmLZdlESQ" class="logo dropshadow-1" alt="soleil">
      </div>
      <a href="{{ url('salon') }}" class="sidenav-link">Living room</a>
      <a href="{{ url('chambre') }}" class="sidenav-link">Bedroom #1</a>
    </div>

    <main>
      <div class="container">

        <h1>Welcome on the Metea App</h1>

      </div>







      <button data-target="example-sidenav"
        class="btn press amaranth dark-1 sidenav-trigger hide-md-up">
          Open sidenav
      </button>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/axentix@0.5.3/dist/js/axentix.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axentix@0.5.3/dist/js/axentix.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/neu-axentix@1.0.0/dist/js/neu-axentix.min.js"></script>
    <script>
        var sidenav = new Sidenav('#example-sidenav');
    </script>
  </body>
</html>