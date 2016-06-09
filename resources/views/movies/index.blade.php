@extends('layouts.main')

@section('content')
<div class="container">
    <div class="page-header">
        <h1>My movies</h1>
    </div>
    <ul class="list-group">
    @foreach($all_movies as $v)
        <li class="list-group-item">
            <h2 class="list-group-item-heading">{{ $v->title }}</h2>
            <p class="list-group-item-text">
                <strong>Released on:</strong>{{ date('F d, Y', strtotime($v->released_on)) }}
                <br><strong>Rating:</strong>{{ $v->rating }}
                <br><strong>Review:</strong>{{ $v->review }}
            </p>
        </li>
    @endforeach
    </ul>
</div>
@endsection