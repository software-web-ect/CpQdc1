@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        </div>
        <div class="container" id="content">
            <div class="col-md-12">
                <h1>Carrer</h1>
            </div>
        </div>
        @if (session('success'))
            <p class="alert alert-success">
                {{ session('success') }}
            </p>
        @endif

        <div class="float-right">
            <p class="text-center"><a href="{{route('Carrer.create')}}" class="btn btn-md btn-success">Create</a></p>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>Image</th>
                    <th>File</th>
                    <th>Action</th>
                </tr>
                @foreach($data as $row)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{ $row->first_name }}</td>
                        <td>{{ $row->last_name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                        <td>{{ $row->address }}</td>
                        <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
                        <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
                        <td>
                        <td>
                            <a href="{{route('carrer.edit',$row->id)}}" class="btn btn-info btn-xs">edit</a>
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-xs">delete</button>
                            </form>
                        </td>
                        @endforeach
                    </tr>
            </table>
        </div>
    </div>
    {!! $data->links() !!}
@endsection
