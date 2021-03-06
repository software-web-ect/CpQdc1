@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        </div>
        <div class="container" id="content">
            <div class="col-md-12">
                <h1>Client</h1>
            </div>
        </div>
        @if (session('success'))
            <p class="alert alert-success">
                {{ session('success') }}
            </p>
        @endif

        <div class="float-right">
            <p class="text-center"><a href="{{route('clien.create')}}" class="btn btn-md btn-success">Create</a></p>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered" id="contact-table">
                <thead>
                <tr>
                    <th>No</th>
                    <th>name</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $row)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{ $row->name }}</td>
                        <td><img src="{{ URL::to('/') }}/images/{{ $row->photo }}" class="img-thumbnail" width="75" /></td>
                        <td>
                            <a href="{{route('clien.edit',$row->id)}}" class="btn btn-info btn-xs">edit</a>
                            <form action="{{ action('ClienController@destroy',['id'=>$row->id]) }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                           <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                        </td>
                        @endforeach
                    </tr>
            </table>
        </div>
    </div>
    {!! $data->links() !!}
@endsection
