@extends('personal.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Додавання інофрмації в портфоліо</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right mr-3">
                            <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Головна</a></li>
                            <li class="breadcrumb-item"><a href="{{route('personal.portfolio.index')}}">Криптовалюти</a> </li>
                            <li class="breadcrumb-item active">Додавання</li>
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
                    <div class="col-12">
                        <form action="{{route('personal.portfolio.store')}}" method="POST" class="w-50">
                            @csrf
                            <div class="form-group w-50">
                                <div class="form-group w-75 mr-5">
                                    <label>Оберіть криптовалюту</label>
                                    <select name="crypto_id" class="form-control">
                                        @foreach($cryptos as $crypto)
                                            <option value="{{$crypto->id}}"
                                                {{$crypto->id == old() ? 'selected' : ''}}
                                            >{{$crypto->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('crypto_id')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>

                                <input type="text" name="amount" class="form-control" placeholder="Введіть кількість криптовалюти"
                                       value="{{old('amount')}}">
                                @error('amount')
                                <div class="text-danger">{{$message}}</div>
                                @enderror

                                <input type="text" name="buy_price" class="form-control" placeholder="Введіть ціну покупки"
                                       value="{{old('buy_price')}}">
                                @error('buy_price')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <input type="submit" class="btn btn-primary" value="Додати">
                        </form>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
