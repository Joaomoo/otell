@extends('layout')
@section('content')
<section class="container m-5"
         style="padding: 2rem;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                text-align: center;">
  <h1 style="color: #f5f5f5;">Gerenciar dados dos Quartos</h1>
  <div class="container m-5">
    <form method='get' action ="{{route('gerenciar-quarto')}}">
      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o número do Quarto" aria-label="First name">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Número do Quarto</th>
        <th scope="col">Tipo</th>
        <th scope="col">Diária</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        <td>
          <button type="button" class="btn btn-danger">X</button>
        </td>
      </tr>
      @foreach($registrosQuartos as $registroQuartoArrayLoop )
      <tbody>
      <tr>
        <th scope="row">{{$registroQuartoArrayLoop -> id}}</th>
        <td>{{$registroQuartoArrayLoop -> numeroQuarto}}</td>
        <td>{{$registroQuartoArrayLoop -> tipoQuarto}}</td>
        <td>{{$registroQuartoArrayLoop -> valorDiaria}}</td>

        <td>
          <a href="">
            <button type="button" class="btn btn-primary">✔️</button>
          </a>
        </td>
        <td>
          <form method='post' action="{{route( 'apagar-quarto', $registroQuartoArrayLoop -> id)}}">
            @method('delete')
            @csrf  
            <button type="submit" class="btn btn-danger">❌</button>
            </form>
      </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</section>
@endsection
