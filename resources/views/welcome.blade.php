@extends('layouts.app')

@section('content')
    @livewire('to-do')
    @livewire('list-items-pending')
    @livewire('list-items-done')
    @livewire('add-list-item')

@endsection
