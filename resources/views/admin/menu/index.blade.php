@extends("theme.$theme.layout")
@section("titulo")
Menú
@endsection

@section("styles")
<link href="{{asset("assets/js/jquery-nestable/jquery.nestable.css")}}" rel="stylesheet" type="text/css" />
@endsection

@section("scripts")
<script src="{{asset("assets/js/jquery-nestable/jquery.nestable.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/pages/scripts/admin/menu/index.js")}}" type="text/javascript"></script>
@include('includes.mensaje')
@endsection

@section('iconTitle')
<i class="pe-7s-plane icon-gradient bg-tempting-azure"></i>
@endsection
@section('buttonTitle')
<a href="{{route('crear_menu')}}"  class="btn-shadow btn btn-info">
    <span class="btn-icon-wrapper pr-2 opacity-7">
        <i class="fas fa-plus-circle fa-w-20"></i>
    </span>
    Crear menú
</a>
@endsection
@section('titlePage')
    Menú
@endsection
@section('subtitlePage')
    Menú principal
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @csrf
                <div class="dd" id="nestable">
                    <ol class="dd-list">
                        @foreach ($menus as $key => $item)
                        @if ($item["menu_anterior"] != 0)
                        @break
                        @endif
                        @include("admin.menu.menu-item",["item" => $item])
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection