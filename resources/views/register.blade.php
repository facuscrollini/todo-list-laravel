@extends('layouts.main')


@section('content')
<section class="d-flex justify-content-center py-5 text-center">
    <div class="w-25">
        <h1 class="display-1">Registro</h1>
        <form action="/register" method="POST" class="text-start py-4">
            @csrf
            <label class="form-label" for="name">Nombre</label>
            <input class="form-control" type="text" id="name" name="name" required />
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" id="email" name="email" required />
            <label class="form-label" for="password">Contraseña</label>
            <input class="form-control" type="password" id="password" name="password" required />
            <div class="py-4 d-flex flex-column gap-3">
                <button class="btn btn-primary w-100">Registrarse</button>
                <a href="/login" class="btn btn-outline-primary w-100">Ingresar cuenta</a>
            </div>
        </form>
        @if(isset($message))
        <div class="alert alert-{{$error ? 'danger' : 'success'}}" role="alert">
            {{$message}}
        </div>

        @endif
    </div>
</section>
@if(isset($error) && !$error)
<script>
    setTimeout(()=>{
        window.location.href = "{{route('login')}}"
    },2000)
</script>
@endif


@endsection