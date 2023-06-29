@extends('layouts.main-public')

@section('index')
@livewire('publik.tabelapp', ['search' => $search ?? ''])
@endsection