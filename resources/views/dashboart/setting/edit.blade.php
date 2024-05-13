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
                    <a class="btn btn-danger" href="{{route('setting.index')}}">{{__('words.exit')}}</a>
                </li>
            </ul>
        </div>
	</div>
    <form action="{{route('setting.update', $setting->id)}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="card-body">
                <div class="form-group">
                    <label>Facebook</label>
                    <input value="{{ old('facebook' , $setting->social_media['facebook']) }}" type="text" name="facebook" id="social_media" class="form-control form-control-solid" placeholder="Facebook"/>
                </div>
                @error('facebook')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label>Twitter</label>
                    <input value="{{ old('twitter' , $setting->social_media['twitter']) }}" type="text" name="twitter" id="social_media" class="form-control form-control-solid" placeholder="Twitter"/>
                </div>
                @error('twitter')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label>Google plus</label>
                    <input value="{{ old('google' , $setting->social_media['google']) }}" type="text" name="google" id="social_media" class="form-control form-control-solid" placeholder="Google plus"/>
                </div>
                @error('google')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label>Linkedin</label>
                    <input value="{{ old('linkedin' , $setting->social_media['linkedin']) }}" type="text" name="linkedin" id="social_media" class="form-control form-control-solid" placeholder="Linkedin"/>
                </div>
                @error('linkedin')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label>Instagram </label>
                    <input value="{{ old('instagram' , $setting->social_media['instagram']) }}" type="text" name="instagram" id="social_media" class="form-control form-control-solid" placeholder="Instagram"/>
                </div>
                @error('instagram')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label>Map </label>
                    <input value="{{ old('map' , $setting->map) }}" type="text" name="map"  class="form-control form-control-solid" placeholder="Map"/>
                </div>
                @error('map')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                    <div class="form-group">
                        <label>Footer</label>
                        <input value="{{ old('footer' , $setting->footer) }}" type="text" name="footer"  class="form-control form-control-solid" placeholder="Footer"/>
                    </div>
                    @error('footer')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                <div class="form-group">
                    <img width="150px" src="/storage/images/{{ old('logo', $setting->logo1) }}" alt="">
                    <input type="file" name="logo1" class="form-control form-control-solid" />
                </div>
                <div class="form-group">
                    <img width="150px" src="/storage/images/{{ old('logo', $setting->logo2) }}" alt="">
                    <input type="file" name="logo2" class="form-control form-control-solid" />
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary mr-2">{{__('words.submit')}}</button>
            </div>
        </div>
    </form>
</div>
@endsection
