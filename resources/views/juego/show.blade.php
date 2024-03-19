@extends('layouts.app')

@section('template_title')
    {{ $juego->name ?? __('Show') . " " . __('Juego') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Juego</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('juegos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $juego->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Monto:</strong>
                            {{ $juego->monto }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Ini:</strong>
                            {{ $juego->fecha_ini }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Fin:</strong>
                            {{ $juego->fecha_fin }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
