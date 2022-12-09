@extends('templates/master')


@section('content')
    <h2>Instructions</h2>

    <ul>
        <li>Pick a move from either Rock, Paper or Scissor.</li>
        <li>A tie is declared if both you and the computer draw the same move.</li>
        <li>Otherwise: Rock beats Scissors, Scissor beats Paper, Paper beats Rock.</li>
    </ul>

    <form method='POST' action='/process'>

        <input type='radio' name='choice' id='rock' value='rock'><label for='rock'>Rock</label>
        <input type='radio' name='choice' id='paper' value='paper'><label for='paper'>Paper</label>
        <input type='radio' name='choice' id='scissor' value='scissor'><label for='scissor'>Scissor</label>

        <button type='submit'>Play</button>

    </form>

    @if ($choice)
        <div class='results'>
            You chose {{ $choice }}, and the computer chose {{ $computerDraw }}.
            In this round, {{ $won }}
        </div>
    @endif
@endsection
