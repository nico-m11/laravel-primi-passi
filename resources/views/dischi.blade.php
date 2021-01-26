<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dischi</title>

    <!-- Boostrap 4.5.3 (CDN) -->
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/dischi.css">
		<!-- Font Awesome 5.15.1 (CDN) -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

  </head>
  <body>
    <header>
      <div class="container-header d-flex">
        <div class="col-xs-6">
          <img id="logo" src="img/CL-music-logo-png.png" alt="">
        </div>
        <div class="col-xs-6 home">
          <button><a href="/">HOME</a></button>
        </div>
      </div>
    </header>

@foreach ($data as $key )
    <div class="col-xs-12 d-flex container">
      <div class="card" style="width: 22rem;">
        <img class="card-img-top" src="{{$key['poster']}}" alt="Card image cap">
        <div class="card-body">
          <h5>{{$key['title']}}</h5>
          <p class="card-text">{{$key['author']}} <br> {{$key['year']}} <br> {{$key['genre']}}</p>
        </div>
      </div>
    </div>
  @endforeach

  </body>
</html>
