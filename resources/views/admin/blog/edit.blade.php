@extends('admin.index')
@section('css')
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">
                        {{-- @isset($title)
                            {{ $title }}
                        @else
                            Chưa có tiêu đề cho trang này
                        @endisset --}}
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('blog.editPost',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter ..."
                                        value="{{ old('name', $data->name) }}">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Nội dung </label>

                                    <textarea name="content" rows="3" id="summernote" placeholder="Enter ...">{{ empty(old('content')) ? $data->content : old('content') }}</textarea>
                                    @error('content_main')
                                        <div class="alert alert-danger">{{ $errors->first('content') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <img height="200px" width="230px" src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($data->img ?? null) }}" alt="">

                                <div class="form-group">
                                    <label>ảnh</label>
                                    <input type="file" name="img" class="form-control">
                                </div>
                            </div>
                            @error('img')
                                <div class="alert alert-danger">{{ $errors->first('img') }}</div>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Lưu lại</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script src="../../plugins/codemirror/codemirror.js"></script>
    <script src="../../plugins/codemirror/mode/css/css.js"></script>
    <script src="../../plugins/codemirror/mode/xml/xml.js"></script>
    <script src="../../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote(
                {
                    minHeight: 400,
                }
            )
            $('#summernote2').summernote(
                {
                    minHeight: 400,
                }
            )
            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        });
    </script>
@endsection
