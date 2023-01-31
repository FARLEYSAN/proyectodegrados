@extends('layouts.app')

@section('template_title')
    Asignadageneral
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Asignadageneral') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('asignadagenerals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Servicio</th>
										<th>Nombre</th>
										<th>Fecha</th>
										<th>Hora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asignadagenerals as $asignadageneral)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $asignadageneral->Servicio }}</td>
											<td>{{ $asignadageneral->Nombre }}</td>
											<td>{{ $asignadageneral->Fecha }}</td>
											<td>{{ $asignadageneral->Hora }}</td>

                                            <td>
                                                <form action="{{ route('asignadagenerals.destroy',$asignadageneral->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('asignadagenerals.show',$asignadageneral->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('asignadagenerals.edit',$asignadageneral->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $asignadagenerals->links() !!}
            </div>
        </div>
    </div>
@endsection
