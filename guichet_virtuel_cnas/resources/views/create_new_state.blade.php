
@extends('layouts.base')
@section('title', 'Welcome page')
{{-- @section('sidebar')
    @parent
   
@stop --}}
@section('content')

@foreach ($states as $item)
 <ul>
    <p>{{ $item->name }}</p>
    @foreach ($item->communes as $commune)
    <li>{{ $commune->name }}</li>
    
    @endforeach
   
</ul>
    
@endforeach

@stop