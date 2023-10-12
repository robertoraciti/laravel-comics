@extends('layouts.app')

@section('page-title')
    Homepage
@endsection

@section('main-content')
<section>
    @include('partials._jumbotron')
    @include('partials._comics')
</section>
    
@endsection