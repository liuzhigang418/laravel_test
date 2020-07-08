@extends('master')
@section('title',$product->name)

@section('content')

    <div class="weui_cell_title">
        <sapn class="bk_title">{{$product->name}}</sapn>
        <span class="bk_price" style="flot:right">{{$product->price}}</span>
    </div>
    <div class="weui_cells">
        <div class="weui_cell">
            <p class="bk_summary">{{$product->summary}}</p>
        </div>

    </div>

    <div class="weui_cells_title">详细介绍</div>
    <div class="weui_cells">
        <div class="weui_cell">
            {!! $pdt_content->content !!}

        </div>
    </div>
@endsection

@section('my-js')

@endsection