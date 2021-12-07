@extends('layouts.app')

@section('title', 'Fazer a inscrição do aluno')

@section('css')
@parent
<link rel="stylesheet" href="{!! asset('css/plugins/dataTables/datatables.min.css') !!}" />
@endsection

@section('scripts')
@parent
<script src="{!! asset('js/plugins/dataTables/datatables.min.js') !!}" type="text/javascript"></script>
<script>
  // função padrão do filto, executado quando a turma é selecionada
  function onChangeFilterDefaultClass(classId) {
    $('#dataTablesClass').DataTable().ajax.reload()
  }

  $(document).ready(function() {
    $('#dataTablesClass').DataTable({
			pageLength: 100,
      lengthMenu: [ 100, 250, 500, 750, 1000 ],
      processing: true,
			responsive: true,
      searching: true,
      ajax: {
        url: '/admin/class_release/getList',
        dataSrc: '',
        method: 'post',
        data: function (d) {
          d.class = document.forms.filterDefaultClass.class.value
        },
      },
      columns: [
        { title: "ID", data: 'id' },
        { title: "Nome", data: 'student.name' },
        { title: "CPF", data: 'student.cpf' },
        { title: "E-mail", data: 'student.email' },
        { title: "Turma", data: 'class.name' },
        { title: "Data Início", data: 'register_date' },
        { title: "Repetição", data: 'repetition' },
        { title: "Permanência", data: 'permanence' },
        { title: "Próxima Aula", data: 'nextClass' },
        { title: "Status Matricula", data: 'statusLabel' },
        {
          title: "Editar",
          className: 'text-center',
          width: '100px',
          render: function ( data, type, row, meta ) {
            if (row.status == 'AP') {
              return '<a href="/admin/class_release/update/'+ row.id +'"><i class="fas fa-pencil-alt" title="Editar"></i></a>'
            } else {
              return '<i class="fas fa-ban text-warning" title="Somente inscrições Aprovadas podem ser editadas">'
            }
					}
        },
        // {
        //   title: "Liberar todos os módulos",
        //   className: 'text-center',
        // },
      ],
      language: {
        processing: "Buscando outras incrições dessa turma ...",
        search: "Pesquisar",
        lengthMenu: "Mostrar _MENU_ elementos",
        info: "Mostrando item _START_ à _END_ de _TOTAL_ elementos",
        infoEmpty: "Mostrando item 0 à 0 de 0 elementos",
        infoFiltered: "(filtro de _MAX_ elementos ao total)",
        infoPostFix: "",
        loadingRecords: "Carregando ...",
        zeroRecords: "Não há nenhum elemento a ser exibido",
        emptyTable: "Nenhuma incrição feita para essa turma",
        paginate: {
          first: "Primeiro",
          previous: "Anterior",
          next: "Próximo",
          last: "Último"
        },
        aria: {
          sortAscending:  ": ativar para classificar a coluna em ordem crescente",
          sortDescending: ": ativar para classificar a coluna em ordem decrescente"
        }
      },
    })
  })
</script>
@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-9">
    <h2>Liberação Aulas para Alunos</h2>
    <ol class="breadcrumb">
      <li>
        <a href="{{ url('/admin') }}">Home</a>
      </li>
			<li class="active">
        Gestão Alunos
			</li>
			<li class="active">
        <strong>Liberação de Aulas</strong>
      </li>
    </ol>
  </div>
	<div class="col-sm-3" style="padding-top: 30px; text-align: right">
  </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          Lista de alunos por turma
        </div>
        <div class="ibox-content">
          <form name="filterDefaultClass" action="" method="post">
            @include('admin.components.old.filterDefaultClass')

            <div class="row m-t-sm">
              <div class="col-sm-12 text-right">
                <button class="btn btn-white" type="reset" onclick="onClickFilterDefaultClassReset(event)">Limpar Filtro</button>
                {{-- <button class="btn btn-primary" type="button">Filtrar</button> --}}
              </div>
            </div>
          </form>
          {{-- Listar alunos que tenha inscrições ativas --}}
          <div class="table-responsive">
						<table id="dataTablesClass" class="table table-striped table-bordered table-hover" style="font-size: 12px;"></table>
          </div>
          {{-- <table border="1">
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Turma</th>
              <th>Data Início</th>
              <th>Repetição</th>
              <th>Permanência</th>
              <th>Próxima Aula</th>
              <th>Status Matricula</th>
              <th>Editar</th>
              <th>Liberar todos os módulos</th>
            </tr>
            <tr>
              <td>01</td>
              <td>Joel Zanata</td>
              <td>EOTCC</td>
              <td>14/07/2020</td>
              <td>7</td>
              <td>60</td>
              <td>ativo</td>
              <td>Editar</td>
              <td>Todos Liberados</td>
            </tr>
          </table> --}}
				</div>
      </div>
    </div>
  </div>
</div>
@endsection
