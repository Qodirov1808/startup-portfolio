@extends('dashboart.app')
@section('config')
    <div class="col-xxl-12 order-2 order-xxl-1">
        <!--begin::Advance Table Widget 2-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label font-weight-bolder text-dark">{{__('words.new messages')}}</span>
                </h3>
                <div class="card-toolbar">
                    <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                        <li class="nav-item">

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
                            <th class="p-0" style="min-width: 125px">{{__('words.name')}}</th>
                            <th class="p-0" style="min-width: 125px">{{__('words.city')}}</th>
                            <th class="p-0" style="min-width: 125px">Status</th>
                            <th class="p-0" style="min-width: 125px">{{__('words.public message')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($messages as $index =>  $message)
                         @if($message->status == 'active')
                             <tr>
                                 <td>
                                     <span > {{$index + 1}}</span>
                                 </td>
                                 <td >
                                     <span>{{$message->name}}</span>
                                 </td>
                                 <td >
                                     <span>{{$message->city}}</span>
                                 </td>
                                 <td>
                                <span>
                                   @if($message->status == 'active')
                                        <a href="{{route('status',$message->id)}}" class="btn btn-success">
                                        {{$message->status}}
                                    </a>
                                    @else
                                        <a href="{{route('status',$message->id)}}" class="btn btn-danger">
                                        {{$message->status}}
                                    </a>
                                    @endif
                                </span>
                                 </td>
                                 <td>
                                <span>
                                     @if($message->public_message == 'none')
                                        <a href="{{route('public.message',$message->id)}}" style="background-color: yellow" class="btn btn">
                                            {{$message->public_message}}
                                        </a>
                                    @else
                                        <a href="{{route('public.message',$message->id)}}" class="btn btn-primary">
                                            {{$message->public_message}}
                                        </a>
                                    @endif
                            </span>
                                 </td>
                                 <td class="text-right pr-0">
                                     <a href="{{ route('message.show', $message->id) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                         <i style="color:#3699FF" class=" flaticon-visible"></i>
                                     </a>
                                     <form style="display: inline"  action="{{ route('message.destroy', $message->id) }}" method="post">
                                         @method('DELETE')
                                         @csrf
                                         <button style="border: none; padding:0px"
                                                 onclick="return confirm(`Rostdan O'chirishni Xoxlaysizmi`)" type="submit">
                                             <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24" />
                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                    </g>
                                                </svg>
                                                <!--end::Svg Icon-->
                                            </span>
                                             </a>
                                         </button>
                                     </form>
                                 </td>
                             </tr>
                         @else

                         @endif
                        @endforeach
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
