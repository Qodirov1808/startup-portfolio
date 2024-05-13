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
                        <a class="btn btn-danger" href="{{ route('portfolio.index') }}">{{__('words.exit')}}</a>
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
                            <th class="p-0" style="min-width: 100px">{{__('words.text')}}_uz</th>
                            <th class="p-0" style="min-width: 200px">{{__('words.text')}}_en</th>
                            <th class="p-0" style="min-width: 200px">{{__('words.text')}}_ru</th>
                            <th class="p-0" style="min-width: 200px">{{__('words.data title')}}</th>
                            <th class="p-0" style="min-width: 200px">{{__('words.image')}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >
                                <span>{{ $portfolio->id }}</span>
                            </td>
                            <td style="width: 100px" >
                                <span >{{ $portfolio->title['title_uz'] }}</span>
                            </td>
                            <td style="width: 200px">
                                <span>{{ $portfolio->title['title_en'] }}</span>
                            </td>
                            <td style="width: 200px">
                                <span>{{ $portfolio->title['title_ru'] }}</span>
                            </td>
                            <td style="width: 100px" >
                                <span >{{ $portfolio->text['text_uz'] }}</span>
                            </td>
                            <td style="width: 200px">
                                <span>{{ $portfolio->text['text_en'] }}</span>
                            </td>
                            <td style="width: 200px">
                                <span>{{ $portfolio->text['text_ru'] }}</span>
                            </td>
                            <td style="width: 200px">
                                <span>{{ $portfolio->data_title }}</span>
                            </td>
                            <td style="width: 200px">
                                <span><img src="/storage/images/{{$portfolio->image}}" width="100px" alt="img"></span>
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
