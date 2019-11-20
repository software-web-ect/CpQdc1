@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
        </div>
        <div class="container" id="content">
            <div class="col-md-12">
                <h1>contact</h1>
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
                @foreach($dat as $ro)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{ $ro->name }}</td>
                        <td><img src="{{ URL::to('/') }}/images/{{ $ro->photo }}" class="img-thumbnail" width="75" /></td>
                        <td>
                        <td>

                            <a href="{{route('clien.edit',$row->id)}}" class="btn btn-info btn-xs">edit</a>
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