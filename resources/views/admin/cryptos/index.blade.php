@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Криптовалюти</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right mr-3">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Головна</a></li>
                            <li class="breadcrumb-item active">Криптовалюти</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-2 mb-3">
                        <a href="{{route('admin.crypto.create')}}" class="btn btn-block btn-primary">Додати</a>
                    </div>
                </div>
                <div class="row">

                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Назва криптовалюти</th>
                                        <th>Тег</th>
                                        <th>Ціна</th>
                                        <th colspan="3">Дія</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($cryptos as $crypto)
                                        <tr>
                                            <td>{{$crypto->title}}</td>
                                            <td>{{$crypto->tag}}</td>
                                            <td>{{$crypto->current_price}}</td>
                                            <td><a href="{{route('admin.crypto.show', $crypto->id)}}"><i
                                                        class="fas fa-eye"></i> </a></td>
                                            <td><a href="{{route('admin.crypto.edit', $crypto->id)}}"
                                                   class="text-success"><i class="fas fa-pen"></i> </a></td>
                                            <td>
                                                <form action="{{route('admin.crypto.delete', $crypto->id)}}"
                                                method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="border-0 bg-transparent">
                                                        <i class="fas fa-trash text-danger" role="button"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
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
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
