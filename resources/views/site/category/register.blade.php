@extends('layouts.site')

@section('content')

    <?php

        $id = null;
        if(isset(request()->route()->parameters['id'])){
            $id = request()->route()->parameters['id'];
        }

    ?>
    <section class="m-4">
        <h5>Cadastro de Categorias</h5>

        <form class="form-inline" method="post" action="{{route('category.form')}}">
            @csrf
            <div class="form-group">
                <label name="name" for="inputAddress" class="mr-md-3">Nome Categoria:  </label>
                <input name="name" type="text" class="form-control" id="inputAddress" placeholder="Supermercado">
            </div>

            <button name="salvar" value="{{$id}}" type="submit" class="btn btn-primary my-1">Salvar</button>
        </form>
    </section>

@endsection
