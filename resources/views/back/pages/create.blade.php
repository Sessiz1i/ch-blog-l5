@extends('back.layouts.master')
@section('content')
@section('title','Sayfa Oluştur')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alet alert-danger text-center">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
            @endif
            <form method="post" action="{{route('admin.page.create.post')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Sayfa Başlığı</label>
                    <input type="text" name="title" class="form-control" value="{{old('title')}}" required>
                </div>
                <div class="form-group">
                    <label>Sayfa Fotoğrafı</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Sayfa İçerik</label>
                    <textarea id="editor" name="content" class="form-control" rows="7" required>{{old('content')}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="gonder" class="btn btn-primary btn-block">Sayfa Oluştur</button>
                </div>
            </form>
        </div>

    </div>
@endsection
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function() { $('#editor').summernote({'height': 300}); });
    </script>
@endsection
