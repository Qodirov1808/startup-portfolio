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
                    <a class="btn btn-danger" href="{{route('setting.index')}}">{{__('words.exit')}}</a>
                </li>
            </ul>
        </div>
	</div>
	<!--begin::Form-->
    <form action="{{route('setting.store')}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        <div class="card-body">
                <div class="form-group">
                    <label>Facebook</label>
                    <input type="text" name="facebook" id="social_media" class="form-control form-control-solid" required placeholder="Facebook"/>
                </div>
                @error('facebook')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label>Twitter</label>
                    <input type="text" name="twitter" id="social_media" class="form-control form-control-solid" required placeholder="Twitter"/>
                </div>
                @error('twitter')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label>Google plus</label>
                    <input type="text" name="google" id="social_media" class="form-control form-control-solid" required placeholder="Google plus"/>
                </div>
                @error('google')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label>Linkedin</label>
                    <input type="text" name="linkedin" id="social_media" class="form-control form-control-solid" required placeholder="Linkedin"/>
                </div>
                @error('linkedin')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label>Instagram </label>
                    <input type="text" name="instagram" id="social_media" class="form-control form-control-solid" required placeholder="Instagram "/>
                </div>
                @error('map')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            <div class="form-group">
                <label>Map</label>
                <input type="text" name="map"  class="form-control form-control-solid" required placeholder="Map"/>
            </div>
            @error('map')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
                <div class="form-group">
                    <label>Footer</label>
                    <input type="text" name="footer"  class="form-control form-control-solid" required placeholder="Footer"/>
                </div>
                @error('footer')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label>Logo-1</label>
                    <input type="file" name="logo1"  class="form-control form-control-solid" />
                </div>
            <div class="form-group">
                <label>Logo-2</label>
                <input type="file" name="logo2"  class="form-control form-control-solid" />
            </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary mr-2">{{__('words.submit')}}</button>
            </div>
    </form>
	<!--end::Form-->
</div>
@endsection
