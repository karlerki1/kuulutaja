@extends('layouts.master')

@section('content')
  <h1>Oled lisanud kuulutuse objektile:'{{$title}}'</h1>
  <h3>Kategooriasse: {{$category}}</h3>
  <h3>hinnaga:'{{$price}}'</h3>
  <h3>ja tutvustusega:'{{$introText}}'</h3>

<a href="{{route('home')}}" class="btn btn-success">Tagasi esilehele</a>
@endsection
