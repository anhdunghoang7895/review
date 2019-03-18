@extends('frontend.layout.admin.master')
@section('contentadmin')
<table border="1" >
	<thead>
		<tr>
			<th>Ảnh</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($slide as $sli)
		<tr>
			@if($sli->image)
			<th >

				<img src="{{asset('storage/'.$sli->image) }}"  style="width:700px;">
			</th>
			<th>
				<a href="#">Delete</a>
			</th>
			@else
			{{'Chưa có ảnh'}}
			@endif
		</tr>
		@endforeach

	</tbody>
</table>
{{ $slide->links() }}
@endsection