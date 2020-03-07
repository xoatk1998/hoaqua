@extends('backend.master')

@section('content')

    <form action="" method="POST"  enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="{!! URL::route('admin.nhom.list') !!}" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Nhóm thực phẩm</i></a>
                /Thêm mới
              </h3>
            <div class="navbar-right" style="margin-right:10px;margin-top:-50px;">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="{!! URL::route('admin.nhom.list') !!}" ><i class="btn btn-default" >Hủy</i></a>
            </div>
            </div>
            <div class="panel-body">
            <div class="col-lg-7">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Tên</label>
                <input class="form-control" name="txtNName" value="{!! $nhom->nhom_ten !!}" placeholder="Tên..." />
                <div>
                    {!! $errors->first('txtNName') !!}
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" rows="3" name="txtNIntro" placeholder="Mô tả...">{!! $nhom->nhom_mo_ta !!}</textarea>
                <script type="text/javascript">CKEDITOR.replace('txtNIntro'); </script>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>Hình ảnh</label>
                <br>
                <img src="{!! asset('resources/upload/nhom/'.$nhom->nhom_anh) !!}" class="img-responsive img-rounded" alt="Image" style="width: 150px; height: 200px;">
                <input type="hidden" name="fImageCurrent" value="{!! $nhom->nhom_anh !!}">
                <br>
                <input type="file" name="fImage">
                <div>
                    {!! $errors->first('fImage') !!}
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </form>

@stop