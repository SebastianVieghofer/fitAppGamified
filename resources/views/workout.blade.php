@extends('layouts.app')

@section('content')
<div class="container">
    <div>Mein Fitnesslevel: {{$fitnesslevelString}}</div>
    <div id="clock" class="stickyTime"><span id="time">16:00</span> Minuten übrig!</div>
    <div id="congrats" style="display: none">Yeah du hast es geschafft!</div>
    <button type="button" onclick="startTimer();" style="margin-bottom:20px;" id="WoStartButton">Starte dein Workout</button>

    <div>
        <button type="button" class="explainWorkout" data-toggle="collapse" data-target="#explainWorkout">Wie funktioniert das Workout?</button>
        <div id="explainWorkout" class="collapse">
            Das Workout dauert insgesamt 16 Minuten. Jede Übung dauert genau 4 Minuten und jede Übung hat 2 Sätze. 
            Ein Satz dauert 2 Minuten. Mache in diesen 2 Minuten die Übung 12 Mal. Wenn von den 2 Minuten noch Zeit 
            übrig ist, dann mach in der restlichen Zeit Pause. In manchen Beinübungen musst du die Übung 1 mal mit dem
            linken Fuß und einmal mit dem rechten Fuß absolvieren. Hier machst du die Übung 12 mal pro Bein. 
            Beispiel: Wenn die Uhr von 16 runter zählt und die erste Übung Liegestütz sind, dann machst du von Minute
            16 bis Minute 14 12 Liegestütz. Ab Minute 14 bis Minute 12 machst du nocheinmal 12 Liegestütz. Von Minute 12 bis 10
            machst du dann die nächste Übung. Dieser Übungsmodus bleibt immer der gleiche, du dir diesen Erklärungstext also nur 
            1 mal durchlesen und kannst ihn von nun an ignorieren. 
        </div>
    </div>

    <div style="margin-bottom:50px; margin-top:50px">
        <div class="ExerciseHeading margingWorkoutInbetween">
            1: {{$randomPush->name}}
        </div>
        <div class="margingWorkoutInbetween">
            <img src="{{$randomPush->src}}" class="imageWidth"> 
        </div>
        <div class="margingWorkoutInbetween widthWorkoutDescription">
            {{$randomPush->description}}
        </div>
    </div>

    <div style="margin-bottom:50px">
        <div class="ExerciseHeading margingWorkoutInbetween">
            2: {{$randomLeg->name}}
        </div>
        <div class="margingWorkoutInbetween">
            <img src="{{$randomLeg->src}}" class="imageWidth"> 
        </div>
        <div class="margingWorkoutInbetween widthWorkoutDescription">
            {{$randomLeg->description}}
        </div>
    </div>

    <div style="margin-bottom:50px">
        <div class="ExerciseHeading margingWorkoutInbetween">
            3: {{$randomPull->name}}
        </div>
        <div class="margingWorkoutInbetween">
            <img src="{{$randomPull->src}}" class="imageWidth"> 
        </div>
        <div class="margingWorkoutInbetween widthWorkoutDescription">
            {{$randomPull->description}}
        </div>
    </div>

    <div style="margin-bottom:50px">
        <div class="ExerciseHeading margingWorkoutInbetween">
            4: {{$randomBackCore->name}}
        </div>
        <div class="margingWorkoutInbetween">
            <img src="{{$randomBackCore->src}}" class="imageWidth">
        </div> 
        <div class="margingWorkoutInbetween widthWorkoutDescription">
            {{$randomBackCore->description}}
        </div>
    </div>
</div>
@endsection

<script>
    function startTimer(duration, display) {
        document.getElementById("WoStartButton").style.display="none";
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = 0;
                document.getElementById("congrats").style.display="block";
                document.getElementById("clock").style.display="none";
                //UpdateController::function();
            }
        }, 1000);
        var fiveMinutes = 60 * 16,
        display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
    }
</script>