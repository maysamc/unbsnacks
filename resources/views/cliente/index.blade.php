@extends('layouts.app')

@section('content')
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
					<div id="top" class="starter_container bg">
						<div class="follow_container">
							<div class="col-md-6 col-md-offset-3">
								<h2 class="top-title"> UnBSnacks </h2>
								<h4 class="white second-title">Encontre o melhor lanche para seu melhor momento!</h4>
								<hr>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

