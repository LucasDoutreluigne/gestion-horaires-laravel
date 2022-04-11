@extends('layouts.app')

@section('title')
    Titre défini
@endsection

@section('content')
    @include('components.calendar.left_menu')
    @include('components.calendar.week_printer')
    @include('components.calendar.bottom_menu')
@endsection
