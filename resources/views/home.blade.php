<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MauriTravel</title>

    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <h1> Goditi le tue Vacanze:</h1>

        <div class="container-travel">

            @foreach ($travels as $travel)

            <div class="single-travel">

                <h3>{{ $travel ->regione }}</h3>

                <h5>{{ $travel ->città }} -{{ $travel ->provincia }}</h5>

                <h6>{{ $travel ->location }}</h6>

                <p>{{ $travel ->descrizione }}</p>

                <h2>{{ $travel ->prezzo }} € - {{ $travel ->durata_giorni }} giorni</h2>

            </div>
                
            @endforeach
            


        </div>
    </div>
</body>
</html>