@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Додавання криптовалюти</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right mr-3">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Головна</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.crypto.index')}}">Криптовалюти</a> </li>
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
                        <form action="{{route('admin.crypto.store')}}" method="POST" class="w-50" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-50">
                                <input type="text" name="title" class="form-control" placeholder="Введіть назву"
                                       value="{{old('title')}}">
                                @error('title')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                                <input type="text" name="tag" class="form-control" placeholder="Введіть тег"
                                       value="{{old('tag')}}">
                                @error('tag')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                                <input type="text" name="current_price" class="form-control" placeholder="Введіть поточну ціну"
                                       value="{{old('current_price')}}">
                                @error('current_price')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-75">
                                <label for="exampleInputFile">Зображення логотипу</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="logo">
                                        <label class="custom-file-label" for="exampleInputFile">Виберати
                                            зображення</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Завантажити зображення</span>
                                    </div>
                                </div>

                                @error('logo')
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
