@extends('layouts.site')

@section('content')

    <?php
        //$category = $category[0];
    ?>

<section class="m-4">
    <h5>Lista de Categorias<h5>

    <table class="table table-sm">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome da Categoria</th>
            <th scope="col">Ação</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($category as $row) { ?>
        <tr>
            <th scope="row">{{$row->id}}</th>
            <td>{{$row->name}}</td>
            <td><a href="{{ route('category.edit', ['id' => $row->id]) }}">Editar</a> | <a href="">Excluir</a></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</section>
@endsection
