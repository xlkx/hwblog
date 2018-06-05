@extends('base')

@section('header')
  @parent
  <h2>section header - not default</h2>
@endsection

@yield('yieldTest', 'yield - not default')
