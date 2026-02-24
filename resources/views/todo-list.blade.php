@extends('layouts.main')


@section('content')

<section class="d-flex my-5 flex-column align-items-center justify-content-center">
    <header>
        <h1 class="display-2">Tareas de {{$name}} </h1>
    </header>
    <a class="btn btn-primary" href="/create-todo">Crear tarea</a>
    <div class="row bg-secondary w-50 p-4 rounded-5 my-2">
        @foreach ($todos as $todo)
        <div class="col-3 ">
            <div class="card text-center mb-3 rounded-4" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$todo->title}}</h5>
                    <p class="card-text">{{$todo->description}}</p>
                    <div class="d-flex justify-content-evenly">
                        @if($todo->completed)
                        <button class="btn btn-outline-success" disabled>Completado</button>
                        @else
                        <form action="/complete-todo/{{$todo->id}}" method="POST">
                            @csrf
                            <button class="btn btn-success">Completar</button>
                        </form>
                        <form method="POST" action="/delete-todo/{{$todo->id}}">
                            @csrf
                            <button  class="btn btn-outline-danger">Eliminar</button>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</section>


@endsection