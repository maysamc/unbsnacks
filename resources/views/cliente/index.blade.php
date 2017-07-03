@extends('layouts.app')



@section('content')

<link href="{{ asset('css/cardapio.css') }}" rel="stylesheet">
<script src="{{ asset('js/cardapio.js') }}"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><p>Sistema UnBSnacks - Área do usuário</p>
                <ul>
                <p><a href="admin/{{Auth::user()->id}}/alteracliente" class="btn btn-primary">Alterar usuário</a>
                    <a href="{{ url('admin/')}}" class="btn btn-primary">Remover usuário</a>
                    <a href="{{ url('admin/')}}" class="btn btn-primary">Pag Inicial do usuário</a>
                 
                

                <a href="{{ url('admin/avaliaempresa')}}" class="btn btn-primary">Avaliar serviços das lanchonetes</a>
                <a href="{{ url('admin/listacliente')}}" class="btn btn-primary">Lista de lanchonetes cadastradas</a></p>
                </ul>
                 </div>   

                <div class="panel-body">
					<div class="container">
					  <div class="group-header">
						<span>Média</span>
						<span>Grande</span>
					  </div>
					  
					  <h3>
						<span>Pizza de Mussarela com catupiry</span>
						<span>20</span>
						<span>27</span>
					  </h3>
					  <p>Descrição pizza.</p>
					  <h3>
						<span>Bolo de chocolate com cobertura/span>
						<span>3</span>
						<span>6</span>
					  </h3>
					  <p>Bolo de chocolate com escolhas de cobertura entre: morango, chocolate e doce de leite.</p>
					  <h3>
						<span>tal</span>
						<span>25</span>
						<span>56</span>
					  </h3>
					  <p>taltal</p>
					</div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

