<b>Cảm ơn bạn đã mua hàng tại cửa hàng!</b>
<br>
<b>Dưới đây là thông tin hóa đơn quý khách hàng vừa đặt mua</b>
<br>
    <div class="row">
        <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Thông tin khách hàng</h3>
          </div>
          <div class="panel-body">
          <div class="table-responsive">
              <table class="table table-hover">
              <?php
              		$khachhang = DB::table('khachhang')->where('id',$khachhang_id)->first();
              ?>
                  <tbody>
                      <tr>
                          <td><b>Tên khách hàng</b></td>
                          <td>{!! $khachhang->khachhang_ten !!}</td>
                      </tr>
                      <tr>
                          <td><b>Số điện thoại</b></td>
                          <td>{!! $khachhang->khachhang_sdt !!}</td>
                      </tr>
                      <tr>
                          <td><b>Email</b></td>
                          <td>{!! $khachhang->khachhang_email !!}</td>
                      </tr>
                      <tr>
                          <td><b>Địa chỉ</b></td>
                          <td>{!! $khachhang->khachhang_dia_chi !!}</td>
                      </tr>
                  </tbody>
              </table>
          </div>    
        </div>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Thông tin giao hàng</h3>
          </div>
          <div class="panel-body">
            <table class="table table-hover">

                  <tbody>
                      <tr>
                          <td><b>Người nhận hàng</b></td>
                          <td>{!! $donhang_nguoi_nhan !!}</td>
                      </tr>
                      <tr>
                          <td><b>Số điện thoại</b></td>
                          <td>{!! $donhang_nguoi_nhan_sdt !!}</td>
                      </tr>
                      <tr>
                          <td><b>Email</b></td>
                          <td>{!! $donhang_nguoi_nhan_email !!}</td>
                      </tr>
                      <tr>
                          <td><b>Địa chỉ</b></td>
                          <td>{!! $donhang_nguoi_nhan_dia_chi !!}</td>
                      </tr>
                      <tr>
                          <td><b>Ghi chú</b></td>
                          <td>
                          @if (!asset($donhang_ghi_chu))
                            {{ $donhang_ghi_chu }}
                          @else
                            Không có ghi chú
                          @endif
                            
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
        </div> 
        </div>
    </div>
    <div class="row">
        <div class="panel panel-default" >
          <div class="panel-heading">
            <h2 class="panel-title" ><b>Danh sách sản phẩm</b></h2>
          </div>
          <div class="panel-body">
            <div class="col-lg-12" >
                <div class="table-responsive">
                    <table class="table table-hovered" >
                        <thead>
                            <tr>
                                <td style="border:thin solid;" width="50px"><strong>STT</strong></td>
					          	<td style="border:thin solid;" width="150px"><strong>Tên sản phẩm</strong></td>
					          	<td style="border:thin solid;" width="150px"><strong>Đơn giá</strong></td>
					          	<td style="border:thin solid;" width="50px"><strong>Số lượng</strong></td>
					          	<td style="border:thin solid;" width="150px"><strong>Thành tiền</strong></td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                        	$count = 0;
                        	$content = DB::table('chitietdonhang')->where('donhang_id',$id)->get(); 
                        ?>
                            @foreach ($content as $val)
                                <tr>
                                    <td style="border:thin blue solid;border-style:dashed;">{!! $count = $count + 1 !!}</td>
                                    <td style="border:thin blue solid;border-style:dashed;">
                                        <?php  
                                            $sp = DB::table('sanpham')->where('id',$val->sanpham_id)->first();
                                            print_r($sp->sanpham_ten);
                                        ?>
                                    </td>
                                    <td style="border:thin blue solid;border-style:dashed;">
                                    {!! number_format($val->chitietdonhang_thanh_tien/$val->chitietdonhang_so_luong,0,",",".") !!} vnđ 
                                    </td>
                                    <td style="border:thin blue solid;border-style:dashed;">{!! $val->chitietdonhang_so_luong !!}</td>
                                    <td style="border:thin blue solid;border-style:dashed;">{!! number_format("$val->chitietdonhang_thanh_tien",0,",",".") !!} vnđ </td>
                                </tr>
                            @endforeach
                            <tr>
				              <td  width="150px" >
				                    <b>Ghi chú :</b>
				              </td>
				              <td colspan="4">
				                    {{ $donhang_ghi_chu }}
				                </td>
				            </tr>
                            <tr>
	                            <td colspan="5">
	                            	<b>Tổng tiền : {!! number_format("$donhang_tong_tien",0,",",".") !!} vnđ </b>
	                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>

<p style="color:red;">Lưu ý:</p>
<br>
<p>Chúng tôi sẽ liên hệ với quý khách để xác nhận trong vòng 24h nếu có bất kỳ thay đổi về đơn hàng xin quý khách vui lòng liên hệ với cửa hàng</p>
    