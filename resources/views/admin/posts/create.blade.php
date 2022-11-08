@extends('admin.layouts.main')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Додавання постів</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right mr-3">
                            <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Головна</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Пости</a> </li>
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
                        <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group w-25">
                                <input type="text" name="title" class="form-control" placeholder="Введіть назву"
                                       value="{{old('title')}}">
                                @error('title')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content">
                                    {{old('content')}}
                                </textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="row w-75">
                                <div class="form-group w-25 mr-5">
                                    <label>Оберіть категорію</label>
                                    <select name="category_id" class="form-control">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                                {{$category->id == old() ? 'selected' : ''}}
                                            >{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="form-group w-50">
                                    <label>Теги</label>
                                    <select class="select2" name="tag_ids[]" multiple="multiple" data-placeholder="Виберіть теги"
                                            style="width: 100%;">
                                        @foreach($tags as $tag)
                                            <option {{is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? ' selected' : ''}}
                                                    value="{{$tag->id}}">{{$tag->title}}</option>
                                        @endforeach
                                    </select>
                                    @error('tag_ids')
                                    <div class="text-danger">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group w-50">
                                <label for="exampleInputFile">Головне зображення</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label" for="exampleInputFile">Виберати
                                            зображення</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Завантажити зображення</span>
                                    </div>
                                </div>

                                @error('main_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Додаткове зображення</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="additional_image">
                                        <label class="custom-file-label" for="exampleInputFile">Виберати
                                            зображення</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Завантажити зображення</span>
                                    </div>
                                </div>
                                @error('additional_image')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Додати">
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
