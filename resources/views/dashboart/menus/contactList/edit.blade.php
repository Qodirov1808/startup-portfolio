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
                    <a class="btn btn-danger" href="{{route('contactList.index')}}">{{__('words.exit')}}</a>
                </li>
            </ul>
        </div>
	</div>
	<form action="{{route('contactList.update', $contactList->id)}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
		<div class="card-body">
                <div class="form-group">
                    <label>{{__('words.city')}}</label>
                    <input value="{{ old('city' , $contactList->city) }}" type="text" name="city"  class="form-control form-control-solid" placeholder="{{__('words.city')}}"/>
                </div>
                    @error('city')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            <div class="form-group">
                <label>{{__('words.phone')}}</label>
                <input value="{{ old('phone' , $contactList->phone) }}" type="text" name="phone"  class="form-control form-control-solid" placeholder="{{__('words.phone')}}"/>
            </div>
            @error('phone')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.email')}}</label>
                <input value="{{ old('email' , $contactList->email) }}" type="email" name="email"  class="form-control form-control-solid" placeholder="{{__('words.email')}}"/>
            </div>
            @error('email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.location')}}</label>
                <input value="{{ old('location' , $contactList->location) }}" type="text" name="location"  class="form-control form-control-solid" placeholder="{{__('words.location')}}"/>
            </div>
            @error('location')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
		<div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary mr-2">{{__('words.submit')}}</button>
        </div>
        </div>
	</form>
 </div>
@endsection
