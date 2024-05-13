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
                    <a class="btn btn-danger" href="{{route('standaloneItem.index')}}">{{__('words.exit')}}</a>
                </li>
            </ul>
        </div>
	</div>
	<form action="{{route('standaloneItem.update', $standaloneItem->id)}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
		<div class="card-body">
                <div class="form-group">
                    <label>{{__('words.title')}}_uz</label>
                    <input value="{{ old('title' , $standaloneItem->title['title_uz']) }}" type="text" name="title_uz" id="title" class="form-control form-control-solid" placeholder="{{__('words.title')}}_uz"/>
                </div>
                    @error('title_uz')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                 <div class="form-group">
                    <label>{{__('words.title')}}_en</label>
                    <input value="{{ old('title' , $standaloneItem->title['title_en']) }}" type="text" name="title_en" id="title" class="form-control form-control-solid" placeholder="{{__('words.title')}}_en"/>
                </div>
                    @error('title_en')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            <div class="form-group">
                <label>{{__('words.title')}}_ru</label>
                <input value="{{ old('title' , $standaloneItem->title['title_ru']) }}" type="text" name="title_ru" id="title" class="form-control form-control-solid" placeholder="{{__('words.title')}}_ru"/>
            </div>
            @error('title_ru')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.text')}}_uz</label>
                <input value="{{ old('text' , $standaloneItem->text['text_uz']) }}" type="text" name="text_uz" id="text" class="form-control form-control-solid" placeholder="{{__('words.text')}}_uz"/>
            </div>
            @error('text_uz')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.text')}}_en</label>
                <input value="{{ old('text' , $standaloneItem->text['text_en']) }}" type="text" name="text_en" id="text" class="form-control form-control-solid" placeholder="{{__('words.text')}}_en"/>
            </div>
            @error('text_en')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.text')}}_ru</label>
                <input value="{{ old('text' , $standaloneItem->text['text_ru']) }}" type="text" name="text_ru" id="text" class="form-control form-control-solid" placeholder="{{__('words.text')}}_ru"/>
            </div>
            @error('text_ru')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <img width="200px" src="/storage/images/{{ old('image', $standaloneItem->image) }}" alt="">
                <input type="file" name="image" class="form-control form-control-solid" />
            </div>
            @error('image')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label  for="exampleTextarea">{{__('words.description')}}</label>
                <textarea  name="description" class="form-control form-control-solid" placeholder="{{__('words.description')}}" rows="3">{{ old('description', $standaloneItem->description) }}</textarea>
            </div>
            <div>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            </div>
        </div>
		<div class="card-footer">
			<button type="submit" name="submit" class="btn btn-primary mr-2">{{__('words.submit')}}</button>
		</div>
	</form>
 </div>
@endsection
