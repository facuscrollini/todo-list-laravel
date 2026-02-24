@extends('layouts.main')


@section('content')

<section class="d-flex flex-column justify-content-center align-items-center">
    <header class="w-50 text-center">
        <h1 class="display-1">Tareas altruistas</h1>
        <p class="fs-5">Bienvenidos sean, esta pagina de forma cariñosa y cercana da la oportunidad de llevar un registro de las tareas altruistas de cada uno de sus usuarios.<br/> A partir de hoy, usted puede ser parte de esta, nuestra familia.<br/> Adelante.</p>
        <form method="GET" action="/login">
        @csrf
            <button class="btn btn-primary fs-3 px-4">Vamos</button>
        </form>
    </header>
    
</section>
@endsection