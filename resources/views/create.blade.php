@extends('layouts.global')

@section('title') Create Category @endsection 

@section('content')

<form 
    enctype="multipart/form-data" 
    class="bg-white shadow-sm p-3" 
    action="{{route('categories.store')}}" 
    method="POST">

    @csrf

</form>

@endsection









