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
                        <a class="btn btn-danger" href="{{ route('home.index') }}">{{__('words.exit')}}</a>
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
                            <th class="p-0" style="min-width: 100px">{{__('words.title')}}_uz</th>
                            <th class="p-0" style="min-width: 200px">{{__('words.title')}}_en</th>
                            <th class="p-0" style="min-width: 200px">{{__('words.title')}}_ru</th>
                            <th class="p-0" style="min-width: 200px">{{__('words.image')}}</th>
                            <th class="p-0" style="min-width: 200px">{{__('words.description')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >
                                <span>{{ $home->id }}</span>
                            </td>

                            <td style="width: 100px" >
                                <span >{{ $home->title['title_uz'] }}</span>
                            </td>
                            <td style="width: 200px">
                                <span>{{ $home->title['title_en'] }}</span>
                            </td>
                            <td style="width: 200px">
                                <span>{{ $home->title['title_ru'] }}</span>
                            </td>
                            <td style="width: 200px">
                                <span><img src="/storage/images/{{$home->image}}" width="100px" alt="img"></span>
                            </td>
                            <td style="width: 200px">
                                <span>{{ $home->description }}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
    </div>
</div>
@endsection
