@extends('dashboart.app')
@section('config')
<div  class="card card-custom p-20">
	<div class="card-header border-0 pt-5">
		<h3 class="card-title align-items-start flex-column">
			<span class="card-label font-weight-bolder text-dark">{{__('words.edit')}}</span>
		</h3>
		<div class="card-toolbar">
			<ul class="nav nav-pills nav-pills-sm nav-dark-75">
				<li class="nav-item">
					<a class="btn btn-danger" href="{{ route('menu.index') }}">{{__('words.exit')}}</a>
				</li>
			</ul>
		</div>
	</div>
	<!--begin::Form-->
	<form action="{{route('menu.update', $menus->id)}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
        <div class="card-body">
		  <div class="card-body">
			<div class="form-group">
				<label>{{__('words.menu name')}}_uz</label>
				<input value="{{old('name_uz',  $menus->name_uz )}}" type="text" name="name_uz" class="form-control form-control-solid" placeholder="{{__('words.menu name')}}_uz"/>
			</div>
              <div class="form-group">
                  <label>{{__('words.menu name')}}_en</label>
                  <input value="{{old('name_en',  $menus->name_en )}}" type="text" name="name_en" class="form-control form-control-solid" placeholder="{{__('words.menu name')}}_en"/>
              </div>
		  </div>
		  <div class="card-footer">
			<button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
		  </div>
        </div>
	</form>
	<!--end::Form-->

@endsection
