@extends('layouts.master')

@section('content')

@if($username==null)
  <h1>Siin on kõik kasutajad:</h1>
@else($username!=null)
  <h1>See on kasutaja '{{$username}}' leht!</h1>
@endif

@endsection
