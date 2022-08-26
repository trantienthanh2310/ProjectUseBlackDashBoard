@extends('category::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        dmcs {!! config('category.name') !!}
    </p>
@endsection
