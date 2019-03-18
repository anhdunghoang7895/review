@extends('frontend.layout.admin.master')
@section('contentadmin')
<form action="{{route('post.Slide')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
	@csrf
	<input type="file" name="image">
	<input type="submit" name="sumbit" value="save">
</form>
@endsection