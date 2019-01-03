@extends('template.master')
    @section('title', 'Order')

    @section('styles')
      <link rel="stylesheet" href="{{ asset('css/sweetalert2.min.css') }}">
    @endsection

    @section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>
                </a></li>
                <li class="active">Pelanggan</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Pelanggan</h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-md-12">
              @if(Session::has('success'))
              <div class="alert bg-success" role="alert">
                <em class="fa fa-lg fa-check">&nbsp;</em>
                {{ Session::get('success') }} <a href="#" class="pull-right"><em class="fa fa-lg fa-close"></em></a>
              </div>
              @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Data Pelanggan
                        <a href="{{ url('/pelanggan/create') }}" class="btn btn-primary pull-right">Tambah Pelangan</a>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama</th>
                                    <th>Nomor Hp</th>
                                    <th>Email</th>
                                   <!--  <th>Type Member</th> -->
                                    <th>Alamat</th>
                                  <!--   <th>Latitude</th>
                                    <th>Longitude</th> -->
                                    <th>JK</th>
                                  <!--   <th>Foto</th> -->
                                    <th>Created By</th>
                                    <th>Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach($pelanggan as $i => $data)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $data->nama}}</td>
                                    <td>{{ $data->no_hp }} </td>
                                    <td>{{ $data->email }} </td>
                             <!--        <td>{{ $data->tipe_member }} </td> -->
                                    <td>{{ $data->alamat }} </td>
                                 <!--    <td>{{ $data->latitude }} </td>
                                    <td>{{ $data->longitude }} </td> -->
                                    <td>{{ $data->jk }} </td>
                                <!--     <td>{{ $data->foto }} </td> -->
                                    <td>{{ $data->created_at }} </td>
                                    <td>{{ $data->updated_at}}</td>
                                    <td>
                                        <a href="{{ url('/editpelanggan/'.$data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                         <a href="{{url('/hapuspelanggan/'.$data->id)}}" class="btn btn-del btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->


        <div class="row">
            <!-- Footer -->
            @include('partials._footer')
            <!-- End Footer -->
        </div>
    </div>
    @endsection

    
