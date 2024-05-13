@extends('dashboart.app')
@section('config')
<div class="col-xxl-12 order-2 order-xxl-1">
    <!--begin::Advance Table Widget 2-->
    <div class="card card-custom card-stretch gutter-b">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label font-weight-bolder text-dark">{{__('words.show')}}</span>
            </h3>
            <div class="card-toolbar">
                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                    <li class="nav-item">
                        <a class="btn btn-danger" href="{{ route('setting.index') }}">{{__('words.exit')}}</a>
                    </li>
                </ul>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-3 pb-0">
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table table-borderless table-vertical-center">
                    <thead>
                        <tr>
                             <th class="p-0" style="width: 50px">id</th>
                            <th class="p-0" style="min-width: 200px">Facebook</th>
                            <th class="p-0" style="min-width: 200px">Twitter</th>
                            <th class="p-0" style="min-width: 200px">Google plus</th>
                            <th class="p-0" style="min-width: 200px">Linkedin</th>
                            <th class="p-0" style="min-width: 200px">Instagram</th>
                            <th class="p-0" style="min-width: 200px">Map</th>
                            <th class="p-0" style="min-width: 200px">Footer</th>
                            <th class="p-0" style="min-width: 200px">Logo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >
                                <span>{{ $setting->id }}</span>
                            </td>
                            <td style="width: 200px" >
                                <span>{{ $setting->social_media['facebook'] }}</span>
                            </td>
                            <td style="width: 200px" >
                                <span>{{ $setting->social_media['twitter'] }}</span>
                            </td>
                            <td style="width: 200px" >
                                <span>{{ $setting->social_media['google'] }}</span>
                            </td>
                            <td style="width: 200px" >
                                <span>{{ $setting->social_media['linkedin'] }}</span>
                            </td>
                            <td style="width: 200px" >
                                <span>{{ $setting->social_media['instagram'] }}</span>
                            </td>
                            <td style="width: 200px" >
                                <span>{{ $setting->map}}</span>
                            </td>
                            <td style="width: 200px" >
                                <span>{{ $setting->footer }}</span>
                            </td>
                            <td style="width: 200px">
                                <span><img src="/storage/images/{{$setting->logo1}}" width="100px" alt="img"></span>
                            </td>
                            <td style="width: 200px">
                                <span><img src="/storage/images/{{$setting->logo2}}" width="100px" alt="img"></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Advance Table Widget 2-->
</div>
@endsection
