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
                    <form action="{{ route('blog.addPost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter ..."
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Nội dung xem trước</label>

                                    <textarea class="form-control" name="content_pre" rows="3" placeholder="Enter ...">{{ empty(old('content_pre')) ? '' : old('content_pre') }}</textarea>
                                    @error('content_pre')
                                        <div class="alert alert-danger">{{ $errors->first('content_pre') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Nội dung chính</label>

                                    <textarea id="summernote" class="form-control" name="content_main" rows="3" placeholder="Enter ...">
                                        {{ empty(old('content_main')) ? '' : old('content_main') }}
                                    </textarea>
                                    @error('content_main')
                                        <div class="alert alert-danger">{{ $errors->first('content_main') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Loại</label>
                                    <select name="id_category" class="form-control">
                                        @foreach ($id_category as $key => $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_category')
                                    <div class="alert alert-danger">{{ $errors->first('id_category') }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
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
