@extends('dashboart.app')
@section('config')
<div class="card card-custom p-20">
	<div class="card-header">
		<h3 class="card-title">
            <span class="card-label font-weight-bolder text-dark">{{__('words.edit')}}</span>
		</h3>
        <div class="card-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                <li class="nav-item">
                    <a class="btn btn-danger" href="{{route('review.index')}}">{{__('words.exit')}}</a>
                </li>
            </ul>
        </div>
	</div>
	<form action="{{route('review.update', $review->id)}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
		<div class="card-body">
                <div class="form-group">
                    <label>{{__('words.title')}}_uz</label>
                    <input value="{{ old('title' , $review->title['title_uz']) }}" type="text" name="title_uz" id="title" class="form-control form-control-solid" placeholder="{{__('words.title')}}_uz"/>
                </div>
                    @error('title_uz')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                 <div class="form-group">
                    <label>{{__('words.title')}}_en</label>
                    <input value="{{ old('title' , $review->title['title_en']) }}" type="text" name="title_en" id="title" class="form-control form-control-solid" placeholder="{{__('words.title')}}_en"/>
                </div>
                    @error('title_en')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            <div class="form-group">
                <label>{{__('words.title')}}_ru</label>
                <input value="{{ old('title' , $review->title['title_ru']) }}" type="text" name="title_ru" id="title" class="form-control form-control-solid" placeholder="{{__('words.title')}}_ru"/>
            </div>
            @error('title_ru')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <img width="200px" src="/storage/images/{{ old('image', $review->image) }}" alt="">
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
 </div>
@endsection
