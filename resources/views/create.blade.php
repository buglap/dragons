@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Enviar una nueva petición</div>

                <div class="card-body">
                    <form method="POST">
                        @foreach($errors->all() as $error)
                        <p class ="alert alert-danger">{{ $error}} </p>
                        @endforeach
                       {!! csrf_field() !!}
                        <fieldset>
                        <div class="form-group row">
                            <label for="title" class="col-sm-4 col-form-label text-md-right">Titulo</label>
                            <div class="col-md-8">
                                <input id="title" type="text"  class ="form-control" name="title">
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="contect" class="col-md-4 col-form-label text-md-right"> Contenido</label>
                            <div class="col-md-8">
                                <textarea id="content" type="text"  class ="form-control" name="content"></textarea> 
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button  class="btn btn-default">{{ __('Cancelar') }}</button>
                                <button  type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>

                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
