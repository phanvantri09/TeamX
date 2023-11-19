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
                    <form action="{{ route('service.editPost', ['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tên</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter ..."
                                        value="{{ old('name', $data->name) }}">
                                    @error('name')
                                        <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Nội dung</label>

                                    <textarea class="form-control" name="content" rows="3" placeholder="Enter ...">{{ empty(old('content', $data->content)) ? '' : old('content',$data->content) }}</textarea>
                                    @error('content')
                                        <div class="alert alert-danger">{{ $errors->first('content') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Tiền(với số lượng 100)</label>
                                    <input type="number" name="price" class="form-control" placeholder="Enter ..."
                                        value="{{ old('price', $data->price) }}">
                                    @error('price')
                                        <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Loại dịch vụ</label>
                                    <select name="id_brand" class="form-control">
                                        @foreach (\App\Helpers\ConstCommon::AllBrand() as $key => $item)
                                            <option {{$item->id == $data->id_brand ? "selected" :'' }} value="{{ $item->id }}"> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_brand')
                                    <div class="alert alert-danger">{{ $errors->first('id_brand') }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="row">
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
                        </div> --}}
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
