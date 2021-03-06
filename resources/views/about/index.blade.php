@extends('layouts.app')

@section('content')
<div class="container" id="content">
		<div class="col-md-12">
		<h1>About section</h1>
		<p class="text-center"></p>
		@if (session('success'))
		    <p class="alert alert-success">
		        {{ session('success') }}
		    </p>
		@endif
	</div>
	@if($about->isEmpty())
	@endif

    <div class="col-md-12">
        <table class="table table-bordered" id="product-table">
            <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Action</th>
            </thead>
            <tbody>
            @foreach($about as $item)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$item->section_one}}</td>
                <td>{!! html_entity_decode($item->section_two)!!}</td>
                <td>
                    <a href="{{route('about.edit',$item->id)}}" class="pull-right btn btn-xs btn-info">edit</a>
                   </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
