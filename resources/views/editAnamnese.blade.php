@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header" style="background-color:#669999; color:white; text-align:center">ALTERAR ANAMNESE</div>
            <div class="card-body">
                <form action="{{ route('updateAnamnese',$anamnese->id) }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Anamnese</label>
                    <input type="text" class="form-control" name="anamnese_name" value="{{$anamnese->anamnese}}" required>
                    </div>
                    <div class="radio">
                        <label><input name="answer" type="radio" value="on" {{$anamnese->answers_id == 1 ? 'checked' : '' }}>Sim</label>
                        <label><input name="answer" type="radio" value="off" {{$anamnese->answers_id == 2 ? 'checked' : '' }}>Não</label>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
