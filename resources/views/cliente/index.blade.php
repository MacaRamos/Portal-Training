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
    Nuevo
</a>
@endsection
@section('titlePage')
    Clientes
@endsection
@section('subtitlePage')
    Lista de todos los clientes registrados en el sistema
@endsection

@section('contenido')
@endsection