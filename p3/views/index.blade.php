@extends('templates/master')


@section('content')
    <a href='/history'>Game History</a>

    <h2>Instructions</h2>

    <ul>
        <li>Pick a move from either Rock, Paper or Scissor.</li>
        <li>A tie is declared if both you and the computer draw the same move.</li>
        <li>Otherwise: Rock beats Scissors, Scissor beats Paper, Paper beats Rock.</li>
    </ul>

    <form method='POST' action='/process'>

        <input type='radio' test='rock-radio' name='choice' id='rock' value='rock'>
        <label for='rock'>Rock</label>
        <input type='radio' test='paper-radio' name='choice' id='paper' value='paper'>
        <label for='paper'>Paper</label>
        <input type='radio' test='scissor-radio' name='choice' id='scissor' value='scissor'>
        <label for='scissor'>Scissor</label>

        <button test='submit-button' type='submit'>Play</button>

    </form>


    @if ($app->errorsExist())
        <ul test='validation-output' class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    {{-- @if ($choice)
        <div test='results-div' class='results'>
            You chose {{ $choice }}, and the computer chose <span test='computer-outcome'> {{ $computerDraw }}.
            </span>
            In this round, {{ $won }}
        </div>
    @endif --}}

    @if (isset($won))
        <div test='results-div' class='results'>
            In this round you chose<span test='user-output'>{{ $choice }}</span> , and the computer chose
            <span test='computer-output'>{{ $computerDraw }}</span>.

            @if ($won == 'tie')
                <div test='tie-output' class='tie'>It was a tie. Please try again!</div>
            @elseif($won == 'user')
                <div test='won-output' class='won'>You won!</div>
            @else
                <div test='lost-output' class='lost'>The computer won. Please try again!</div>
            @endif
        </div>
    @endif
@endsection
