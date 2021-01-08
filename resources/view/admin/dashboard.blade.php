@extends('admin.layout.app')

@section('title', ' dahsboard')

@section('content')

{{csrf()->_token()}}
<br>
{{session()->get('token')}}
<h1>admin dashboard</h1>

<form action="{{public_path() . 'admin/post'}}" method="post" enctype="multipart/form-data">
    <input type="text" name="name" id="">
    <input type="file" name="image" id="">
    <input type="submit">
</form>
@endsection