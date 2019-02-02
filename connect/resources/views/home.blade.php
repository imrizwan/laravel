@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem qui sapiente repudiandae. Inventore, hic eaque assumenda earum quo vel doloribus quisquam alias obcaecati libero dolor exercitationem sunt nemo sapiente expedita.</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appending sidebar</p>
@endsection