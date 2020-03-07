@extends('backend.master')

@section('content')
    <form action="{!! route('admin.loaisanpham.getAdd') !!}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
        <div class="row">
        <div class="col-lg-12 ">
        <div class="panel panel-green">
            <div class="panel-heading" style="height:60px;">
              <h3 >
                <a href="{!! URL::route('admin.loaisanpham.list') !!}" style="color:blue;"><i class="fa fa-product-hunt" style="color:blue;">Loại sản phẩm</i></a>
                /Thêm mới
              </h3>
            <div class="navbar-right" style="margin-right:10px;margin-top:-50px;">
                <button type="submit" class="btn btn-primary">Lưu</button>
                <a href="{!! URL::route('admin.loaisanpham.list') !!}" ><i class="btn btn-default" >Hủy</i></a>
            </div>
            </div>
            <div class="panel-body">
        <div class="col-lg-7">
        <div class="col-lg-12">
            <div class="form-group">
                <label>Tên</label>
                <input class="form-control" name="txtLSPName" value="{!! old('txtLSPName') !!}" placeholder="Tên loại sản phẩm..." />
                <div>
                    {!! $errors->first('txtLSPName') !!}
                </div>  
                
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label for="input" >Nhóm</label>
                <div>
                    <select id="input" name="txtLSPParent"  class="form-control">
                            <option value="">--Chọn nhóm thực phẩm--</option>
                            <?php Select_Function($nhom); ?>
                    </select>
                </div>
                <div>
                    {!! $errors->first('txtLSPParent') !!}
                </div> 
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" rows="3" name="txtLSPIntro" placeholder="Mô tả...">{!! old('txtLSPIntro') !!}</textarea>
                <script type="text/javascript">CKEDITOR.replace('txtLSPIntro'); </script>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <label>Hình ảnh</label>
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