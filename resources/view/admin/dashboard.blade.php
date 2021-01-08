@extends('admin.layout.app')

@section('title', ' dahsboard')

@section('content')

{{csrf()->_token()}}
<br>
{{session()->get('token')}}
<h1>admin dashboard</h1>
@endsection