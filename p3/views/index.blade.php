@extends('templates/master')


@section('content')
    <h2>Instructions</h2>
    <ul>
        <li>Pick a move from either Rock, Paper or Scissor.</li>
        <li>A tie is declared if both you and the computer draw the same move.</li>
        <li>Otherwise: Rock beats Scissors, Scissor beats Paper, Paper beats Rock.</li>
    </ul>
@endsection
