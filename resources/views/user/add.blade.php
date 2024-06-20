@extends('template.index')

@section('title', 'Home')

@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/users/{{ @$data->id}}" method="POST">

                <section class="content">
                  <div class="container-fluid">


                      @if (@$data)
                          @method('PUT')
                      @endif

                      @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="name">Nama</label>
                          <input type="text" class="form-control" name="name" placeholder="Kode" value="{{ @$data->name}}">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" class="form-control" name="email" placeholder="email" value="{{ @$data->email}}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="password" value="{{ @$data->password}}">
                          </div>

                        <div class="form-group">
                          <label for="exampleselectRounded0">Status</label>
                          <select name="status" class="custom-select rounded-0">
                            <option value="1" {{ @$data->status == 1 ? 'selected' : ''}}>Admin</option>
                            <option value="0" {{ @$data->status == 0 ? 'selected' : ''}}>Kasir</option>
                            <option value="1" {{ @$data->status == 1 ? 'selected' : ''}}>Blokir</option>
                          </select>
                        </div>
                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                </section>
              </form>
            </div>
      </div>
    </section>
 </div>


@endsection