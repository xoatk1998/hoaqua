@extends('backend.master')
@section('title')
    <h1 class="page-header">Edit nguyên liệu có sẵn tại cửa hàng</h1>
@stop
@section('content')
    <form action="" method="POST"  enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="col-lg-7" style="padding-bottom:120px">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
                <thead>
                    <tr>
                        <th></th>
                        <th class="col-lg-12">Sản phẩm</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sanpham1 as $item)
                    <tr>
                        <td>
                            <input type="checkbox" name="products[{!! $item->id !!}]" id="{!! $item->id !!}" value="{!! $item->id !!}" checked="true">
                        </td>
                        <td>
                            {!! $item->sanpham_ten !!}
                        </td>
                    </tr>
                    @endforeach
                    @foreach ($sanpham2 as $item)
                    <tr>
                        <td>
                            <input type="checkbox" name="products[{!! $item->id !!}]" id="{!! $item->id !!}" value="{!! $item->id !!}">
                        </td>
                        <td>
                            {!! $item->sanpham_ten !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
            <button type="submit" class="btn btn-default">Thêm</button>
            <button type="reset" class="btn btn-default">Hủy</button>
        </div>
    </form>   
@stop