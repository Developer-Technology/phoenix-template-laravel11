@extends('layouts.layout')
@section('navigationType', 'data-navigation-type=dual')

@section('before-content')
  @include('navbars.navbar-dual')
  @parent
@endsection