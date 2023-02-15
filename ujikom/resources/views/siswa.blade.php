@extends('layouts.alpha')

@section('title', 'siswa')
@section('content')
    @foreach ($siswa as $item)
        <li><a href="{{ route('siswa.show', ['siswa' => $item->id]) }}">{{$item->name}}</a></li>
    @endforeach
@endsection