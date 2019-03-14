@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header" style="background-color:#669999; color:white; text-align:center">VISUALIZAR ANAMNESE</div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Anamnese</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{$anamneses->anamnese}}" readonly>
                    </div>
                    <div class="radio">
                    <label><input type="radio" disabled {{$anamneses->answers_id == 1 ? 'checked' : '' }}>Sim</label>
                        <label><input type="radio" disabled {{$anamneses->answers_id == 2 ? 'checked' : '' }}>Não</label>
                    </div>
                </form>
                <button onclick="window.location='{{ route("listAnamnese") }}'" type="submit" class="btn btn-success">Voltar</button>
            </div>
        </div>
    </div>
</div>
@endsection
