@extends('personal.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Моє портфоліо</h1>
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
                        <a href="{{route('personal.portfolio.create')}}" class="btn btn-block btn-primary">Доповнити портфоліо</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Криптовалюта</th>
                                        <th>Тег</th>
                                        <th>Кількість</th>
                                        <th>Ціна закупу</th>
                                        <th>Поточна ціна</th>
                                        <th colspan="2">Дія</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($crypto_infs as $crypto)
                                        <tr>
                                            <td>{{$crypto->id}}</td>
                                            <td>{{$crypto->crypto->title}}</td>
                                            <td>{{$crypto->crypto->tag}}</td>
                                            <td>{{$crypto->amount}}</td>
                                            <td>{{$crypto->buy_price}}</td>
                                            <td>{{$crypto->crypto->current_price}}</td>
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
