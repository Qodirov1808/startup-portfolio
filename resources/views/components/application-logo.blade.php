
@php
    $settings = \App\Models\Setting::all();
//    $path = $setting->logo1
@endphp
@foreach($settings as $setting)
<img src="/storage/images/{{$setting->logo1}}" >
@endforeach
