@extends('layouts.main')


@section('content')

<section class="d-flex justify-content-center">
    <div class="w-25">

        <h1 class="display-1 text-center">Crear Tarea</h1>

        <form>
            @csrf
            <label for="title" class="form-label mt-2">Título</label>
            <input type="text" class="form-control" name="title" id="title" required/>
            <label for="description" class="form-label mt-3">Descripción</label>
            <textarea placeholder="Escribe la descripción" maxlength="50" type="text" class="form-control" name="description" id="description" required></textarea>
            <p class="mt-1 text-secondary">Máximo 50 caracteres</p>
            <div class="my-4">
                <button class="btn btn-primary w-100">Crear tarea</button>
                <a href="/todo-list" class="btn btn-outline-primary w-100 mt-2">Regresar</a>
            </div>
        </form>
    </div>
</section>



@endsection