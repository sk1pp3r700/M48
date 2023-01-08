@extends('layouts.basic')

@section('title', 'Agents Index')

@section('content')
<p>AGENTS IN THE AGENCY</p>
<ul>
   @foreach ($agents as $agent)
    <li>{{$agent ->name}}</li>

   @endforeach
</ul>


@endsection
