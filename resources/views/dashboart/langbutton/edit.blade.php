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
                    <a class="btn btn-danger" href="{{route('langButton.index')}}">{{__('words.exit')}}</a>
                </li>
            </ul>
        </div>
	</div>

    <!--begin::Form-->
    <form action="{{route('langButton.update', $langButton->id)}}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                {{-- menu select start--}}
                <label>Menu</label>
                <select  onchange="toggleMenuInput()" name="menu_id" style="margin-bottom: 20px;" class="form-control form-control-solid">
                    <option></option>
                    @foreach ($menuId as $menu)
                        <option value="{{ $menu->name_uz }}">{{  app()->getLocale() == 'uz' ?  $menu->name_uz : $menu->name_en }}</option>
                    @endforeach
                </select>
                @error('menu_id')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                {{-- menu select end--}}
                {{-- blog select start--}}
                <select style="display: none;" id="blogSelect" name="blog_id" class="form-control form-control-solid">
                    <option></option>
                    @foreach ($blogs as $blog)
                        <option value="{{ $blog->id }}">{{ $blog->title['title_uz'] }}</option>
                    @endforeach
                </select>
                {{-- blog select end--}}
                {{-- home select start--}}
                <select style="display: none;" id="homeSelect" name="home_id" class="form-control form-control-solid">
                    <option></option>
                    @foreach ($homes as $home)
                        <option value="{{ $home->id }}">{{ $home->title['title_uz'] }}</option>
                    @endforeach
                </select>
                {{-- home select end--}}
            </div>
            <div class="form-group">
                <label>{{__('words.button name')}}_uz</label>
                <input value="{{ old('button_name' , $langButton->button_name['button_name_uz']) }}" type="text" name="button_name_uz" id="button_name" class="form-control form-control-solid" placeholder="{{__('words.button name')}}_uz"/>
            </div>
            @error('button_name_uz')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.button name')}}_en</label>
                <input value="{{ old('button_name' , $langButton->button_name['button_name_en']) }}" type="text" name="button_name_en" id="button_name" class="form-control form-control-solid" placeholder="{{__('words.button name')}}_en"/>
            </div>
            @error('button_name_en')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.button name')}}_ru</label>
                <input value="{{ old('button_name' , $langButton->button_name['button_name_ru']) }}" type="text" name="button_name_ru" id="button_name" class="form-control form-control-solid" placeholder="{{__('words.button name')}}_ru"/>
            </div>
            @error('button_name_ru')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>{{__('words.button link')}}</label>
                <input type="text" name="url"  placeholder="Url" id="myInput" class="form-control form-control-solid" style="display: none">
                <select onchange="toggleInput()" name="button_link"  id="mySelect" class="form-control form-control-solid"  >
                    <option>Standalone Page</option>
                    <option>Url</option>
                    @foreach ($menus as $menu)
                        <option value="{{$menu->id}}" >{{  app()->getLocale() == 'uz' ?  $menu->name_uz : $menu->name_en }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary mr-2">{{__('words.submit')}}</button>
        </div>
    </form>
    <!--end::Form-->
</div>

<script>
    function toggleInput(){
        const myInput = document.getElementById("myInput")
        const mySelect = document.getElementById("mySelect")
        const myOption = document.getElementById("myOption")
        if(mySelect.value == 'Url'){
            myInput.style.display = "block"
            mySelect.style.display = "none"
        }
        console.log(mySelect.value)
    }
</script>

<script>
    function toggleMenuInput() {
        const menuSelect = document.getElementsByName("menu_id")[0];
        const blogSelect = document.getElementById("blogSelect");
        const homeSelect = document.getElementById("homeSelect");
        const selectedMenu = menuSelect.value;
        if (selectedMenu === "Home") {
            blogSelect.style.display = "none";
            selectedMenu.style.display = "none";
        } else if(selectedMenu === "Asosiy"){
            blogSelect.value = ""
            homeSelect.style.display = "block";
            homeSelect.style.display = "block";
            blogSelect.style.display = "none";
        }else if (selectedMenu === "Blog") {
            homeSelect.value = ""
            homeSelect.style.display = "none";
            blogSelect.style.display = "block"; // "Blog" seçeneği seçildiğinde blogSelect'i göster
        } else {
            homeSelect.style.display = "none";
            blogSelect.style.display = "none";
        }
    }
</script>
@endsection
