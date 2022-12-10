@extends('templates/master')


@section('title')
    Round Details
@endsection


@section('content')
    <h2>Round Details</h2>

    <ul>
        <li>Round id: {{ $round['id'] }}</li>
        <li>Player's choice: {{ $round['choice'] }}</li>
        <li>Player {{ $round['won'] ? 'won' : 'lost' }}</li>
        <li>Timestamp: {{ $round['timestamp'] }}</li>
    </ul>

    <a href='/history'>Back to round history</a>
@endsection
