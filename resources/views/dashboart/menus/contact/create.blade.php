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
                    <a class="btn btn-danger" href="{{route('contact.index')}}">{{__('words.exit')}}</a>
                </li>
            </ul>
        </div>
	</div>
	<!--begin::Form-->
	<form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
		<div class="card-body">
			<div class="form-group">
				<label>{{__('words.title')}}_uz</label>
				<input type="text" name="title_uz" id="title" class="form-control form-control-solid" placeholder="{{__('words.title')}}_uz"/>
			</div>
            @error('title_uz')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.title')}}_en</label>
                <input type="text" name="title_en" id="title" class="form-control form-control-solid" placeholder="{{__('words.title')}}_en"/>
            </div>
            @error('title_en')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.title')}}_ru</label>
                <input type="text" name="title_ru" id="title" class="form-control form-control-solid" placeholder="{{__('words.title')}}_ru"/>
            </div>
            @error('title_ru')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.text')}}_uz</label>
                <input type="text" name="text_uz" id="text" class="form-control form-control-solid" placeholder="{{__('words.text')}}_uz"/>
            </div>
            @error('text_uz')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.text')}}_en</label>
                <input type="text" name="text_en" id="text" class="form-control form-control-solid" placeholder="{{__('words.text')}}_en"/>
            </div>
            @error('text_en')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.text')}}_ru</label>
                <input type="text" name="text_ru" id="text" class="form-control form-control-solid" placeholder="{{__('words.text')}}_ru"/>
            </div>
            @error('text_ru')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="exampleTextarea">{{__('words.description')}}</label>
                <textarea name="description" class="form-control form-control-solid" placeholder="{{__('words.description')}}" rows="3"></textarea>
            </div>
            @error('description')
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
