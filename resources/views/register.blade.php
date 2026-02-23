@extends('layouts.main')


@section('content')
<section class="d-flex justify-content-center py-5 text-center">
    <div class="w-25">
        <h1 class="display-1">Registro</h1>
        <form class="text-start py-4">
            <label class="form-label" for="name">Nombre</label>
            <input class="form-control" type="text" id="name" name="name" required/>
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" id="email" name="email" required/>
            <label class="form-label" for="contrasenha">Contraseña</label>
            <input class="form-control" type="password" id="contrasenha" name="contrasenha" required/>
            <div class="py-4 d-flex flex-column gap-3">
                <button class="btn btn-primary w-100">Registrarse</button>
                <a href="/login" class="btn btn-outline-primary w-100">Ingresar cuenta</a>
            </div>
        </form>
    </div>
</section>

@endsection