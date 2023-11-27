@extends('user.index')
@section('content')
    <section id="service">
        <div class="bg-red-pastel">
            <div class="container py-md-4 py-2">
                <h1>Dịch vụ</h1>
            </div>
        </div>
        <div class="container">
            @for ($i = 0; $i < count($brands); $i++)
                <div class="service-wrap bg-white rounded my-3">
                    <h5 class="bg-green-pastel p-2 rounded">{{ $brands[$i]->name }} </h5>
                    @foreach ($brands[$i]->services as $item)
                        <div class="service-item">
                            <div class="row p-2">
                                <div class="service-item-name col-md-8 col-sm-12 col-12">{{$item->content}}</div>
                                <div class="service-item-name col-md-2 col-sm-5 col-5">50-100</div>
                                <div class="service-item-price col-md-2 col-sm-7 col-7">{{$item->price}} VNĐ</div>
                            </div>
                            <hr class="m-0">
                        </div>
                    @endforeach

                </div>
            @endfor


        </div>
    </section>
@endsection
