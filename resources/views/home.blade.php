<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME')}}</title>

  @vite('resources/js/app.js')
</head>
<body class="container">
  <h1>Treni in partenza oggi</h1>

<div class="card-deck">
    @foreach($trains as $train)
        <div class="card my-3">
            <div class="card-body">
                <h5 class="card-title">{{ $train->train_code }}</h5>
                <p class="card-text">{{ $train->departure_station }} - {{ $train->arrival_station }}</p>
                <p class="card-text">Partenza: {{ $train->departure_time }}</p>
                <p class="card-text">Arrivo: {{ $train->arrival_time }}</p>
                <p class="card-text">Numero carrozze: {{ $train->num_carriages }}</p>
            </div>
        </div>
    @endforeach
</div>
</body>
</html>