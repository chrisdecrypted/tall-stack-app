@extends('layouts.app')

@section('content')
    @livewire('header')
    @livewire('list-items-pending')
    @livewire('list-items-done')
    @livewire('add-list-item')
    @livewire('footer')

@endsection
