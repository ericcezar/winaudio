@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <button onclick="window.location='{{ route("newAnamnese") }}'" style="color:white" type="button" class="btn btn-md btn-info"><i class="fa fa-plus"></i>Nova Anamnese</button>
    </div><br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header" style="background-color:#669999; color:white; text-align:center">Lista de Anamneses</div>
            <table class="table table-bordered">
                <thead>
                    <tr class="d-flex">
                        <th class="col-1">Código</th>
                        <th class="col-6">Anamnese</th>
                        <th class="col-2">Resposta</th>
                        <th class="col-3">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anamneses as $anamneses)
                    <tr class="d-flex">
                    <td class="col-1">{{$anamneses->id}}</td>
                        <td class="col-6">{{$anamneses->anamnese}}</td>
                        <td class="col-2">{{$anamneses->answer->description}}</td>
                        <td class="col-3">
                            <button onclick="window.location='{{ route("viewAnamnese",['id'=>$anamneses->id])}}'" type="button" class="btn btn-sm btn-success">Visualizar</button>
                            <button onclick="window.location='{{ route("editAnamnese", ['id'=>$anamneses->id]) }}'" type="button" class="btn btn-sm btn-primary">Editar</button>
                        <a href="{{ route("deleteAnamnese", ['id'=>$anamneses->id]) }}"><button type="submit" class="btn btn-sm btn-danger">Excluir <i class="fa fa-trash"></i></button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
