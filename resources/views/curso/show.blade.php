@extends("theme.$theme.layout")
@section("titulo")
Curso | {{$curso->nombre}}
@endsection

@section("styles")

@endsection

@section("scripts")
@include('includes.mensaje')
<script type="text/javascript">
    $('[data-toggle="collapse"]').click(function(){
        var v = document.getElementsByTagName("video")[0];
        v.pause();
    });    
</script>
@endsection

@section('iconTitle')
<i class="pe-7s-notebook icon-gradient bg-tempting-azure"></i>
@endsection

@section('titlePage')
{{$curso->nombre}}
@endsection
{{-- @section('subtitlePage')
    Menú principal
@endsection --}}

@section('contenido')
<div class="row">
    <div class="col-md-12" id="curso">
        @foreach ($curso->modulos as $key => $modulo)
        @if ($modulo->archivo)
        <div class="main-card mb-3 card collapse modulo{{$key+1}} {{($key == 0) ? 'show' : ''}} " data-parent="#curso"
            aria-labelledby="headingOne">
            <div class="card-body">
                <h5 class="card-title">{{$modulo->nombre}}</h5>

                <video controls width="1080" height="520"
                    poster="{{asset("assets/$theme/dist/videos/portada-videos.gif")}}" style="margin-left: auto;
                    margin-right: auto;
                    display: block">
                    <source src="{{asset("assets/$theme/$modulo->archivo")}}" type="video/mp4">
                </video>


            </div>
        </div>
        @endif
        @endforeach

        <div id="accordion" class="accordion-wrapper mb-3">
            @foreach ($curso->modulos as $key => $modulo)
            <div class="card">
                <div id="headingOne" class="card-header">
                    <button type="button" data-toggle="collapse" data-target=".modulo{{$key+1}}" aria-expanded="true"
                        aria-controls="collapseOne" class="text-left m-0 p-0 btn btn-link btn-block">
                        <h5 class="m-0 p-0">{{($key+1)}}- {{$modulo->descripcion}}</h5>
                    </button>
                </div>
                <div data-parent="#curso" aria-labelledby="headingOne"
                    class="collapse modulo{{$key+1}} {{($key == 0) ? 'show' : ''}}">
                    <div class="card-body">
                        @if ($modulo->cuestionario)
                        <h5 class="card-title text-center mb-5">{{$modulo->cuestionario->titulo}}</h5>
                        <form class="">
                            @foreach ($modulo->cuestionario->preguntas as $pregunta)
                            <p class="my-3" style="font-size: 16px; font-weight: 500;">{{$pregunta->pregunta}}</p>
                            @foreach ($pregunta->alternativas as $alternativa)
                            <fieldset class="position-relative form-group ml-4">
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="radio1" type="radio" class="form-check-input">
                                        {{$alternativa->descripcion}}
                                    </label>
                                </div>
                            </fieldset>
                            @endforeach
                            @endforeach
                            <button class="mt-1 btn btn-primary text-right align-content-end">Enviar respuesta</button>
                        </form>
                        @else
                        {{$modulo->descripcion}}
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </div>
</div>
@endsection