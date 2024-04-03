@extends('layouts.admin')
@section('content')
    <button class="btn btn-primary mb-3">
        <i class="fas fa-plus-circle"></i> 
        Tambah Data
    </button>
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Users</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-auto mt-2">
                                        <button class="btn btn-sm btn-success">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </div>
                                    <div class="col-auto mt-2">
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
@endsection