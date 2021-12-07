@extends('layouts.app')

@section('title', 'Conteúdo')

@section('css')
<link rel="stylesheet" href="{!! asset('css/plugins/dataTables/datatables.min.css') !!}" />
@endsection

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Lista de Conteúdo</h2>
    <ol class="breadcrumb">
      <li>
        <a href="{{ url('/admin') }}">Home</a>
      </li>
      <li>
        <a href="{{ url('/admin/content' ) }}">Conteúdo</a>
      </li>
      <li class="active">
        <strong>Listar Conteúdo</strong>
      </li>
    </ol>
  </div>
  <div class="col-lg-2"> </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
  <div class="row">
    <div class="col-lg-11"></div>
    <div class="col-lg-1" style="padding-bottom: 10px;">
      <a href="{{ url('/admin/content/insert') }}">
        <button class="btn btn-primary"><i class="fa fa-plus"></i> Novo</button>
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Conteúdos das páginas expostas no site </h5>
        </div>
        <div class="ibox-content">

          <div class="table-responsive">
            @include('admin._components.dataTables')
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
	<script src="{!! asset('js/plugins/dataTables/datatables.min.js') !!}" type="text/javascript"></script>


	<!-- Page-Level Scripts -->
  <script>
    $(document).ready(function(){
      $('.dataTables-example').DataTable({
        pageLength: 25,
        responsive: true,
        dom: '<"html5buttons"B>lTfgitp',
        buttons: [
          {extend: 'copy'},
          {extend: 'csv'},
          {extend: 'excel', title: 'Bee Happy - Lista de Páginas'},
          {extend: 'pdf', title: 'Bee Happy - Lista de Páginas'},

          {extend: 'print',
            customize: function (win){
              $(win.document.body).addClass('white-bg');
              $(win.document.body).css('font-size', '10px');

              $(win.document.body).find('table')
                .addClass('compact')
                .css('font-size', 'inherit');
            }
          }
        ]
      });
    });

  </script>
@endsection
