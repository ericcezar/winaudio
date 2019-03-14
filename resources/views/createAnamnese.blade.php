@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header" style="background-color:#669999; color:white; text-align:center">NOVA ANAMNESE</div>
            <div class="card-body">
                <form action="{{ route('storeAnamnese') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Anamnese</label>
                        <input type="text" class="form-control" id="anamnese_name" name= "anamnese_name" aria-describedby="emailHelp" placeholder="Insira a Anamnese" required>
                    </div>
                    <div class="radio">
                        <label><input name="answer" type="radio" checked>Sim</label>
                        <label><input name="answer" type="radio" value="off">Não</label>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
