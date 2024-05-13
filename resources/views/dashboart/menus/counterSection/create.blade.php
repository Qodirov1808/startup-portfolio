@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header">
		<h3 class="card-title">
            <span class="card-label font-weight-bolder text-dark">{{__('words.create item')}}</span>
        </h3>
        <div class="card-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                <li class="nav-item">
                    <a class="btn btn-danger" href="{{route('counterSection.index')}}">{{__('words.exit')}}</a>
                </li>
            </ul>
        </div>
    </div>

	<!--begin::Form-->
	<form action="{{route('counterSection.store')}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
		<div class="card-body">
            <div class="form-group">
                <label>{{__('words.image')}}</label>
                <input type="file" name="image" class="form-control form-control-solid" />
            </div>
            @error('image')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
		</div>
		<div class="card-footer">
			<button type="submit" name="submit" class="btn btn-primary mr-2">{{__('words.submit')}}</button>
		</div>
	</form>
	<!--end::Form-->
</div>
@endsection
