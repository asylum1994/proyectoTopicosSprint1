@extends('layouts.app')

@section('template_title')
    Juego
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Juego') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('juegos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Monto</th>
										<th>Fecha Ini</th>
										<th>Fecha Fin</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($juegos as $juego)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $juego->nombre }}</td>
											<td>{{ $juego->monto }}</td>
											<td>{{ $juego->fecha_ini }}</td>
											<td>{{ $juego->fecha_fin }}</td>

                                            <td>
                                                <form action="{{ route('juegos.destroy',$juego->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('juegos.show',$juego->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('juegos.edit',$juego->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $juegos->links() !!}
            </div>
        </div>
    </div>
@endsection
