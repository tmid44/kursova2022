@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 mr-4">{{$crypto->title}}</h1>
                        <a href="{{route('admin.crypto.edit', $crypto->id)}}" class="text-success mr-2"><i class="fas fa-pen"></i> </a>
                        <form action="{{route('admin.crypto.delete', $crypto->id)}}"
                              method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="border-0 bg-transparent">
                                <i class="fas fa-trash text-danger" role="button"></i>
                            </button>
                        </form>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right mr-3">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Головна</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.crypto.index')}}">Криптовалюти</a> </li>
                            <li class="breadcrumb-item active">{{$crypto->title}}</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="row">

                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$crypto->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Назва</td>
                                        <td>{{$crypto->title}}</td>
                                    </tr>
                                    <tr>
                                        <td>Тег</td>
                                        <td>{{$crypto->tag}}</td>
                                    </tr>
                                    <tr>
                                        <td>Ціна</td>
                                        <td>{{$crypto->current_price}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        @if(isset($crypto->logo))
            <div class="w-25 mb-2 pl-4">
                <img src="{{asset('storage/' . $crypto->logo)}}" alt="logo" class="w-50">
            </div>
        @endif
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
