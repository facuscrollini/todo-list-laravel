@extends('layouts.main')


@section('content')
<section class="d-flex justify-content-center py-5 text-center">
    <div class="w-25">
        <h1 class="display-1">Ingreso</h1>
        <form action="/login" method="GET" class="text-start py-4">
            @csrf
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" id="email" name="email" required />
            <label class="form-label" for="password">Contraseña</label>
            <input class="form-control" type="password" id="password" name="password" required />
            <div class="py-4 d-flex flex-column gap-3">
                <button class="btn btn-primary w-100">Ingresar</button>
                <a href="/register" class="btn btn-outline-primary w-100">Crear cuenta</a>
            </div>
        </form>
        @if(isset($message) && isset($error))
        <div class="alert alert-{{$error ? 'danger' : 'success'}}" role="alert">
            {{$message}}
        </div>
            @if(!$error)
            <script>
                setTimeout(()=>{
                    window.location.href = "{{route('todo-list')}}"
                },2000)
            </script>
            @endif

        @endif

        

       
    </div>
</section>

@endsection