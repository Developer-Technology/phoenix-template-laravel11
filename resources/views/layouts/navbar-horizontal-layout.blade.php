
@extends('layouts.layout')
@section('navigationType', 'data-navigation-type=horizontal')

@section('before-content')
  @include('navbars.navbar-horizontal', ['id' => 'navbarTop'])
  @parent
@endsection