@extends('coordenador.detalhesEvento')

@section('menu')

<div id="" style="display: block">
    <div class="row">
        <div class="col-md-12">
            <h1 class="titulo-detalhes">Listar Inscritos</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-body">
                  <div class="row justify-content-between">
                    <div class="col-md-6">
                      <h5 class="card-title">Inscrições</h5>
                      <h6 class="card-subtitle mb-2 text-muted">Inscritos no evento {{$evento->nome}}</h6>
                    </div>
                    <div class="col-md-6 d-flex justify-content-sm-start justify-content-md-end align-items-center">
                        <a href="{{route('evento.downloadInscritos', $evento)}}" class="btn btn-primary float-md-right">Exportar .csv</a>
                    </div>

                  </div>
                  <p class="card-text">
                    <table class="table table-hover table-responsive-lg table-sm" style="position: relative;">
                        <thead>
                            <th>
                                <th>Nome</th>
                                @if ($evento->subeventos->count() > 0)
                                    <th>Evento/Subevento</th>
                                @endif
                                <th>Email</th>
                            </th>
                        </thead>
                        @foreach ($users as $user)
                            <tbody>
                                <th>
                                    <td>{{$user->nome}}</td>
                                    @if ($evento->subeventos->count() > 0)
                                        <td>{{$user->evento}}</td>
                                    @endif
                                    <td>{{$user->email}}</td>
                                </th>
                            </tbody>
                        @endforeach
                    </table>
                  </p>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
