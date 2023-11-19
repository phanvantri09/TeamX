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
                    <form action="{{ route('transaction.addPost') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
                        <input  type="hidden" name="img" value="{{null}}">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input type="text" name="total" class="form-control" placeholder="Enter ..."
                                        value="{{ old('total') }}">
                                    @error('total')
                                        <div class="alert alert-danger">{{ $errors->first('total') }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Loại giao dịch</label>
                                    <select name="type" class="form-control">
                                        @foreach (\App\Helpers\ConstCommon::ListTypeTransaction as $key => $item)
                                            <option value="{{ $key}}"> {{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('type')
                                    <div class="alert alert-danger">{{ $errors->first('type') }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Dịch vụ</label>
                                    <select name="id_service" class="form-control">
                                        @foreach (\App\Helpers\ConstCommon::AllService() as $key => $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_service')
                                    <div class="alert alert-danger">{{ $errors->first('id_service') }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Trạng thái ban đầu</label>
                                    <select name="status" class="form-control">
                                        @foreach (\App\Helpers\ConstCommon::StatusTransaction as $key => $item)
                                            <option value="{{ $key }}"> {{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('status')
                                    <div class="alert alert-danger">{{ $errors->first('status') }}</div>
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
