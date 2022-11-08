@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редагування криптовалюти</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right mr-3">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Головна</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.crypto.index')}}">Криптовалюти</a> </li>
                            <li class="breadcrumb-item active">Редагування</li>
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
                        <form action="{{route('admin.crypto.update', $crypto->id)}}" method="POST" class="w-50" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group w-50">
                                <input type="text" name="title" class="form-control" placeholder="Введіть назву"
                                       value="{{$crypto->title}}">
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <input type="text" name="tag" class="form-control" placeholder="Введіть тег"
                                       value="{{$crypto->tag}}">
                                </textarea>
                                @error('tag')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <input type="text" name="current_price" class="form-control" placeholder="Введіть ціну"
                                       value="{{$crypto->current_price}}">
                                </textarea>
                                @error('current_price')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>



                            <div class="form-group w-75">
                                <label for="exampleInputFile">Логотип</label>
                                @if(isset($crypto->logo))
                                <div class="w-75 mb-2">
                                    <img src="{{asset('storage/' . $crypto->logo)}}" alt="logo" class="w-50">
                                </div>
                                @endif
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

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Обновити">
                            </div>
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
