@extends("theme.$theme.layout")
@section("titulo")
Mis cursos
@endsection

@section("styles")

@endsection

@section("scripts")
@include('includes.mensaje')
@endsection

@section('iconTitle')
<i class="pe-7s-notebook icon-gradient bg-tempting-azure"></i>
@endsection

@section('titlePage')
Mis cursos
@endsection
@section('subtitlePage')
    Aquí encontrará todos sus cursos, y podrá continuar donde quedó
@endsection

@section('contenido')
<div class="row">
    @foreach ($cursos as $curso)
    <div class="col-md-12 col-lg-6 col-xl-4">
        <div class="card-shadow-primary card-border mb-3 card">
            <div class="dropdown-menu-header">
                <div class="dropdown-menu-header-inner bg-dark">
                    <div class="menu-header-image"
                        style="background-image: url('{{asset("assets/$theme/$curso->portada")}}');">
                    </div>
                    <div class="menu-header-content">
                        <div class="avatar-icon-wrapper avatar-icon-lg">
                            <div class="avatar-icon circle border-0"><img src="{{asset("assets/$theme/$curso->icono")}}"
                                    alt="Avatar 5"></div>
                        </div>
                        <div>
                            <h5 class="menu-header-title">{{$curso->nombre}}</h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="scroll-area-sm">
                <div class="scrollbar-container ps ps--active-y">
                    <ul class="list-group list-group-flush">
                        @foreach ($curso->modulos as $modulo)
                        <li class="list-group-item">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left center-elem mr-2"><i
                                            class="pe-7s-file text-muted fsize-2"></i></div>
                                    <div class="widget-content-left">
                                        <div class="widget-heading">{{trim($modulo->descripcion)}}</div>
                                    </div>
                                    <div class="widget-content-right widget-content-actions">
                                        <button class="btn-icon btn-icon-only btn btn-success btn-sm"><i
                                                class="pe-7s-play"> </i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="text-center d-block card-footer">
                <a href="{{route('misCursos.show', ['misCurso' => rtrim($curso->id)])}}" class="border-0 btn-transition btn btn-outline-success">Continuar curso</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection