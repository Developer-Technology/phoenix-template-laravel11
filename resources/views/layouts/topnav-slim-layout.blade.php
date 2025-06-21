@extends('layouts.layout')
@section('navigationType', 'data-navigation-type=combo')
@section('navbarShape', 'data-navbar-horizontal-shape=slim')

@section('before-content')
  @include('navbars.navbar-vertical')
  @include('navbars.navbar-top-slim')
  @parent
@endsection

@section('after-content')
  @parent
  @include('common.search-box-modal')
@endsection