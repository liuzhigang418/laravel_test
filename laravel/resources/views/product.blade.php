@extends('master')
@section('title','书籍列表')

@section('content')
        <div class="weui_cells_title"></div>
        <div class="weui_cells weui_cells_access">
            @foreach($products as $product)
            <a class="weui_cell" href="/product/{{$product->id}};">
                <div class="weui_cell_hd">
                    <img class="bk_preview" src="{{$product->preview}}" />
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <div>
                        <span class="bk_title">{{$product->name}}</span>
                        <span class="bk_price" style="float:right;color: #F92672" >￥{{$product->price}}</span>
                    </div>

                    <p class="bk_summary"> {{$product->summary}}</p>
                </div>
                <div class="weui_cell_ft"></div>
            </a>
           @endforeach
        </div>
@endsection

@section('my-js')

    @endsection