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
                {{--<form action="{{route('personal.portfolio.search' )}}" method="post">
                    @csrf
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="text" name="cryptoName" class="form-control" />
                            <label class="form-label">Пошук за назвою</label>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>--}}
                <div class="row">
                    <div class="col-11">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
{{--                                        <th>ID</th>--}}
                                        <th>Криптовалюта</th>
                                        <th>Тег</th>
                                        <th>Кількість</th>
                                        <th>Ціна закупу</th>
                                        <th>Куплено за</th>
                                        <th>Поточна ціна</th>
                                        <th>Поточна вартість</th>
                                        <th>Прибуток</th>
                                        <th colspan="2">Дія</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($crypto_infs as $cryptoUser)
                                        {{--@if($cryptoUser->diff_sum > 0)
                                        @elseif($cryptoUser->diff_sum == 0)
                                        @else
                                        @endif--}}
                                        <tr>
{{--                                            <td>{{$cryptoUser->id}}</td>--}}
                                            <td>{{$cryptoUser->crypto->title}}</td>
                                            <td>{{$cryptoUser->crypto->tag}}</td>
                                            <td>{{$cryptoUser->amount}}</td>
                                            <td>{{$cryptoUser->buy_price}} $</td>
                                            <td>{{$cryptoUser->sum}} $</td>
                                            <td>{{$cryptoUser->crypto->current_price}} $</td>
                                            <td>{{$cryptoUser->current_sum}} $</td>
                                            <td class="font-weight-bold text-{{$cryptoUser->diff_sum >= 0 ? "green" : "red"}}">{{$cryptoUser->diff_sum}} $</td>
                                            <td><a href="{{route('personal.portfolio.edit', $cryptoUser->id)}}"
                                                   class="text-success"><i class="fas fa-pen"></i> </a></td>
                                            <td>
                                                <form action="{{route('personal.portfolio.delete', $cryptoUser->id)}}"
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
