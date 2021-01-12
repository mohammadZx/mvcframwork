@extends('admin.layout.app')

@section('title', ' product category')

@section('content')


<h1>product category</h1>

<form action="{{public_path() . 'admin/product/categories'}}" method="post">
    <input type="text" name="name" placeholder="cat name" id="">
    <input type="hidden" name="token" value="{{csrf()->_token()}}">
    <input type="submit">
</form>

<form action="{{public_path() . 'admin/product/categoriest'}}" method="post">
    <input type="text" name="name" placeholder="cat search" id="">
    <input type="submit">
</form>

@foreach($cats as $cat)
<div class="categories" style="display: flex;justify-content: space-around;">
<div class="name">{{$cat->name}}</div>
<div class="slug">{{$cat->slug}}</div>
<div class="date">{{$cat->created_at->toFormattedDateString()}}</div>
<div class="edit"><a href="">edit</a></div>
<div class="edit"><a href="">delete</a></div>
</div>
@endforeach
<br>
<br>
<br>
{!! $cats->links('pagination::bootstrap-4') !!}
@endsection