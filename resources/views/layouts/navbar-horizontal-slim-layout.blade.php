@extends('layouts.layout')
@section('navigationType', 'data-navigation-type=horizontal')
@section('navbarShape', 'data-navbar-horizontal-shape=slim')

@section('before-content')
  @include('navbars.navbar-horizontal', ['id' => 'navbarTop', 'class' => 'navbar-slim', 'navbarShape' => 'slim'])
  @parent
@endsection

@section('after-content')
  @parent
  @include('common.search-box-modal')
@endsection