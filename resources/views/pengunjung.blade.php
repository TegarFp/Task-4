@extends('layout.main')
@section('judul', 'Pengunjung')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-1"></div>
        <div class="col-md-2 " style="margin-top:3.2%">
         <a  data-toggle="modal" data-target="#exampleModal" href="#" class="btn btn-success"><i class="fa fa-plus"></i>  Tambah</a>
        </div>
        <div class="col-md-2 ml-0">
            <label for="">Tanggal</label>
            <input class="form-control" type="date">
        </div>
        <div class="col-md-2 ml-0">
            <label for="">To</label>
            <input class="form-control" type="date">
        </div>
        <div class="col-md-2 ml-0">
            <label for="">Filter</label>
            <select class="form-control" name="" id="">
                <option value="">Today</option>
            </select>
        </div>
        <div class="col-md-2 ml-0">
            <label for="">Export</label>
            <select class="form-control" name="" id="">
                <option value="">Export</option>
            </select>
        </div>
        <div class="col-md-1"></div>
    </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            {{-- <table class="table table-bordered"> --}}
                <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Asal</th>
                        <th>Jumlah</th>
                        <th>PIC</th>
                        <th>Tanggal</th>
                        <th style="width: 100px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengunjung as $data)
                    <tr>
                        <td>{{ $data->asal }}</td>
                        <td>{{ $data->jumlah }}</td>
                        <td>{{ $data->pic }}</td>
                        <td>{{ $data->tanggal }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success">Action</button>
                                <button type="button" class="btn btn-success dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                  <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                  <a class="dropdown-item" href="#">Edit</a>
                                  <a class="dropdown-item" href="#">Delete</a>
                                </div>
                              </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="float-left mt-3">Showing 1 to 10 of 57 entries</div>
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn btn-close" data-dismiss="modal" aria-label="Close">&times;</button>
        </div>
        <div class="modal-body">
           <form action="{{ url("pengunjung") }}" method="POST" >
            @csrf
            <label for="">Asal</label>
            <input class="form-control" type="text" name="asal" required autofocus>
            <label for="">Jumlah</label>
            <input class="form-control" type="text" name="jumlah" required autofocus>
            <label for="">PIC</label>
            <input class="form-control" type="text" name="pic" required autofocus>
            <label for="">Tanggal</label>
            <input class="form-control" type="date" name="tanggal" required autofocus>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </form>
    </div>
  </div>

@endSection()

