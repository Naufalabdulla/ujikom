@extends('layouts.alpha')

@section('title', 'Siswa | Form')
@section('content')
    <form action="{{ route( 'siswa.store' ) }}" method="post">
        @csrf
      <input type="text" name="name" value="{{old('name')}}">
      
      <button type="submit">submit</button>
    </form>
@endsection