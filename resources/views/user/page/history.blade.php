@extends('user.index')
@section('content')
    <section id="history">
        <div class="bg-red-pastel">
            <div class="container py-md-4 py-2">
                <h1>Lịch sử giao dịch</h1>
            </div>
        </div>
        <div class="container bg-white my-md-4 my-2">
            <div class="py-4">
                <table class="table table-bordered table-hover">
                    <thead class="bg-green-pastel">
                        <tr>
                            <th>Name</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Thời gian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John John John John</td>
                            <td>50-100</td>
                            <td>100.000VNĐ</td>
                            <td>10:00</td>
                        </tr>
                        <tr>
                            <td>Mary</td>
                            <td>100-150</td>
                            <td>150.000VNĐ</td>
                            <td>10:00</td>
                        </tr>
                        <tr>
                            <td>July</td>
                            <td>500</td>
                            <td>200.000VNĐ</td>
                            <td>10:00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
