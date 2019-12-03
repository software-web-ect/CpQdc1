@extends('layouts.app')

@section('content')
<div class="container">
	<div id="content">
		<div class="col-md-12">
		<h1>Carrer</h1>
		</div>
		<div class="col-md-12">
			<div class="col-md-7">
					{{ csrf_field() }}
                    <div class="form-group">
                        <label for="cat" class="col-md-3 control-label">Category</label>
                        <div class="col-md-9">
                            <select class="form-control" name="cat">
                                @foreach($cat as $c)
                                    <option value="{{$c->id}}" {{(old('cat')==$c->id ? 'selected = selected' : ' ')}}>{{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="responsibilities"  placeholder="responsibilities" class="col-md-3 control-label">Responsibilities</label>
                        <div class="col-md-9">
                            <text class="form-control col-md-9" name="responsibilities" placeholder="responsibilities">{{old('responsibilities')}}</text>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="requerments" placeholder="requerments" class="col-md-3 control-label">Requerments</label>
                        <div class="col-md-9">
                            <text class="form-control col-md-9" name='requerments' placeholder="requerments">{{old('requerments')}}</text>
                        </div>
                    </div>
                    <div class="form-group">
					  <label for="desc" class="col-md-3 control-label">Description</label>
					  <div class="col-md-9">
					  	<textarea class="form-control col-md-9" name="desc"  placeholder="description">{{old('desc')}}</textarea>
					  </div>
					</div>
				  <div class="form-group">
				  	<div class="col-md-4 col-md-offset-5">
				  		<button class="btn btn-success" type="submit">save</button> &nbsp;
				  		<a class="btn btn-warning" href="{{route('product.index')}}">cancel</a>
				  	</div>
				  </div>
				</form>

            </div>
			<div class="col-md-5">
				@if (count($errors) > 0)
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection

