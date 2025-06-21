@extends('layouts.layout')
@section('navigationType', 'data-navigation-type=combo')

@section('before-content')
  @include('navbars.navbar-vertical')
  @include('navbars.navbar-horizontal', [
    'id' => 'navbarCombo', 
    'isCombo' => true, 
    'moveTarget' => 'navbarVerticalNav'
  ])
  @parent
@endsection