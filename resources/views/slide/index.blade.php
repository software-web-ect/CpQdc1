@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
	</div>
	<div class="container" id="content">
		<div class="col-md-12">
		<h1>Slides section</h1>
		</div>
	</div>
		@if (session('success'))
		    <p class="alert alert-success">
		        {{ session('success') }}
		    </p>
		@endif

		<div class="float-right">
			<p class="text-center"><a href="{{route('slide.create')}}" class="btn btn-md btn-success">add new slide</a></p>
		</div>
	<div class="col-md-12">
        <table class="table table-bordered" id="slide-table">
            <thead>
            <tr>
				<th>No</th>
				<th>Name</th>
				<th>Description</th>
				<th>Link</th>
				<th>Action</th>
			</thead>
			<tbody>
			@foreach($slide as $row)
				<tr>
					<td>{{++$i}}</td>
					<td>{{$row->title}}</td>
					<td>{{ str_limit($row->description, 60)}}</td>
					<td>{{$row->link}}</td>
					<td>
                    <a href="{{route('slide.show',$row->id)}}" class="btn btn-success btn-xs">show</a>
                    <a href="{{route('slide.edit',$row->id)}}" class="btn btn-info btn-xs">edit</a>
					<form class="inline" method="POST" action="{{route('slide.destroy',$row->id)}}">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button type="submit" class="btn btn-danger btn-xs">delete</button>
					</form>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		{{ $slide->links() }}

	</div>
</div>

@endsection
