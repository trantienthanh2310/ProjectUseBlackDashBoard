@extends('category::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>
        Create {!! config('category.name') !!}
    </p>
@endsection
