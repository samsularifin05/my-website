@extends('themes.TemplateAdmin')
@section('title', 'Dashboard')
@section('content')
<div class="card">
          <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <button onclick="pesansukses()" class="btn btn-success"> Pesan Sukses </button>
            <button onclick="pesandanger()" class="btn btn-danger"> Pesan error </button>
            <button onclick="pesaninfo()" class="btn btn-info"> Pesan Info </button>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
@endsection