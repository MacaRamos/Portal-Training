{{-- {{dd(session()->all())}} --}}
<script>
  var mensaje = @json(session()->get('mensaje') ?? $notificacion['mensaje'] ?? '');
  var tipo = @json(session()->get('tipo') ?? $notificacion['tipo'] ?? '');
  var titulo = @json(session()->get('titulo') ?? $notificacion['titulo'] ?? '');
  Animatres.notificaciones(mensaje, titulo, tipo);
  console.log(mensaje);
</script>