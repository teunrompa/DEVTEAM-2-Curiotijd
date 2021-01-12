@php
    use App\Models\Achievement;
    use App\Models\AchievementList;
    use App\Models\task;

    function idToName($achievementID){
        
        return;
    }

@endphp

@extends('layout.main')

<head>
    <link rel="stylesheet" href="css\dashboard-style.css">
</head>

@section('content')

<div class="container">
    <h1>dashboard</h1>
    <h2>Welkom bij Curiotijd, $name</h2>
    <hr>

    {{-- first row --}}
    <div class="row">

 {{-- left collumn --}}
    <div class="col-6 ml-4">
        <h2>Nieuwe accounts:</h2>
        <hr>
        <ol>
            @foreach ($accounts as $account)
                <li>name: {{$account->username}}
                    <br>
                klas: {{$account->className}}</li>
                <div class="button-align">
                    <button class="btn btn-primary mr-3">Goedkeuren</button><button class="btn btn-primary mr-3"> afkeuren</button>
                </div>
                
                <hr>
            @endforeach
        </ol>
    </div>

{{-- right column --}}
    <div class="col-5">
        <h2>Challenges</h2>
        <hr>
        <p>Hieronder ziet u een overzicht van waar alle studenten mee bezig zijn, en hoe ver ze zijn!</p>
        {{-- foreacht loop die alle leerlingen laat zien en als je erop klikt ga je naar de detail page --}}
        @foreach ($accounts as $account)
            <ul class="list-unstyled" >
                <li><a href={{route('overzicht.overzicht', $account->id)}}>
                    {{$account->username}}
                    {{$account->id}}
                </a></li>
            </ul>
        @endforeach
    </div>
</div>
{{-- end of first row --}}