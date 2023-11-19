@extends('admin.index')
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
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
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Người mua</th>
                                <th>Số tiền</th>
                                <th>Hình ảnh</th>
                                <th>Loại giao dịch</th>
                                <th>Trạng thái</th>
                                <th>Số lượng</th>
                                <th>Thời gian tạo</th>
                                <th>Thời gian cập nhật</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($getAllTrans as $item)
                                @php
                                    $i = $i + 1;
                                @endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->user->email ?? ($item->user->numberPhone ?? "do Admin tạo") }}</td>
                                    <td>{{ number_format($item->services->price ?? null) }}VNĐ</td>
                                    <td>
                                        <img style="max-height: 200px; width: auto;"
                                            src="{{ \App\Helpers\ConstCommon::getLinkImageToStorage($item->img) }}"
                                            alt="">
                                    </td>
                                    <td style="
                                    border-radius: 3px;
                                    color: #fff;
                                    background-color: {{ $item->type == 1 ? ' red' : '' }}
                                    {{ $item->type == 2 ? 'green' : '' }}
                                    {{ $item->type == 3 ? 'blue' : '' }}
                                    ;
                                ">{{ \App\Helpers\ConstCommon::ListTypeTransaction[$item->type] }}</td>

                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn border dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                {{ \App\Helpers\ConstCommon::StatusTransaction[$item->status] }}
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item"
                                                    @if ($item->status != 1) href="{{ route('transaction.changeStatus', ['id' => $item->id, 'status' => 1]) }}" @endif>
                                                    {{\App\Helpers\ConstCommon::StatusTransaction[1]}}</a>
                                                <a class="dropdown-item"
                                                    @if ($item->status != 2) href="{{ route('transaction.changeStatus', ['id' => $item->id, 'status' => 2]) }}" @endif>
                                                    {{\App\Helpers\ConstCommon::StatusTransaction[2]}}</a></a>
                                                <a class="dropdown-item"
                                                    @if ($item->status != 3) href="{{ route('transaction.changeStatus', ['id' => $item->id, 'status' => 3]) }}" @endif>
                                                    {{\App\Helpers\ConstCommon::StatusTransaction[3]}}</a></a>
                                                <a class="dropdown-item"
                                                    @if ($item->status != 4) href="{{ route('transaction.changeStatus', ['id' => $item->id, 'status' => 4]) }}" @endif>
                                                    {{\App\Helpers\ConstCommon::StatusTransaction[4]}}</a>
                                                </a>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ number_format($item->total ?? null) }}</td>
                                    <td>{{ date('H:i:s d-m-Y', strtotime($item->created_at)) }}</td>
                                    <td>{{ date('H:i:s d-m-Y', strtotime($item->updated_at)) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{-- <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
                                <th>acttion</th>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
@endsection
@section('scripts')
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
