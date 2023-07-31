@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5">To Do List</h1>

        @livewire('to-do-notes.index')

    </div>
@endsection
