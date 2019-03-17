@extends('layout.index')

@section('content')
    @include('sub.client.message')
               <div class="main-contact">
                   <div class="info-company">
                       <p>Giới tdiệu c&ocirc;ng ty<br />Hệ tdống Ph&acirc;n Phối Phụ T&ugrave;ng Phụ Kiện &ocirc; t&ocirc; VTMECO<br />Hợp t&aacute;c ph&acirc;n phối  : 09-11-268-365 (C&aacute;c đối t&aacute;c nước ngo&agrave;i , Nh&agrave; Sản xuất)<br /><br />Hợp t&aacute;c Truyền td&ocirc;ng Sản phẩm : 0912.268.365<br />B&aacute;n lẻ 1 : 0968.268.365<br />B&aacute;n lẻ 2 : 0921.268.65<br />B&aacute;n Bu&ocirc;n : 0905.268.365<br />Hỗ Trợ Vận chuyển : 0385.910.910<br />H&oacute;a đơn v&agrave; Dự &Aacute;n :0902.132.636<br />VTMECO H&agrave; Nội<br />Văn Ph&ograve;ng: L&ocirc; 40/44 V&otilde; tdị S&aacute;u &ndash; Hai B&agrave; Trưng &ndash; 098.159.2262  (Đồ xị mạ , phụ kiện , phụ t&ugrave;ng nội tdất )<br />CN: 7/214 Nguyễn Xiển &ndash; Q.tdanh Xu&acirc;n  &ndash; 0963.196.518 ( tdảm l&oacute;t s&agrave;n 5D 6D Carbon , nguy&ecirc;n liệu ,vvv)<br />(L&agrave;m việc từ 8h30h -&gt; 17h30hh hằng ng&agrave;y)<br /><br />VTMECO Miền Trung<br />CN : 98 H&ugrave;ng Vương &ndash; Hội An &ndash;  098 161 9905<br />(L&agrave;m việc từ 8h30h -&gt; 17h30h hằng ng&agrave;y)<br /><br />VTMECO Miền Nam<br />CN : 160/12 V&otilde; tdị S&aacute;u &ndash; Q3 &ndash; HCM &ndash;  086.898.1375<br />(L&agrave;m việc từ 8h30h -&gt; 17h30h hằng ng&agrave;y)</p>
                   </div>
                   <div class="info-customer">
                       <b>Xin quý khách vui lòng để lại tdông tin khách hàng để được phục vụ quý khách</b>
                       <form action="{{url('lien-he')}}" method="post">
                           @csrf
                           <table class="form-contact">
                               <tr>
                                   <td>Họ và tên <span>*</span></td>
                                   <td><input type="text" name="CU_name" value="{{old('CU_name')}}" style="width:100%;">
                                       @if ($errors->has('CU_name'))
                                           <span style="color:red">{{$errors->first('CU_name')}}</span>
                                       @endif</td>
                               </tr>
                               <tr>
                                   <td>Địa chỉ</td>
                                   <td><input type="text" name="CU_address" style="width:100%;" value="{{old('CU_address')}}" ></td>
                               </tr>
                               <tr>
                                   <td>Số điện thoại <span>*</span></td>
                                   <td><input type="text" name="CU_phone" style="width:100%;" value="{{old('CU_phone')}}">
                                       @if ($errors->has('CU_phone'))
                                           <span style="color:red">{{$errors->first('CU_phone')}}</span>
                                       @endif</td></td>
                               </tr>
                               <tr>
                                   <td>Email</td>
                                   <td><input type="text" name="CU_email" value="{{old('CU_email')}}"style="width:100%;"></td>
                               </tr>
                               <tr>
                                   <td>Tiêu đề <span>*</span></td>
                                   <td><input type="text" name="CU_title" style="width:100%;" value="{{old('CU_title')}}" >
                                       @if ($errors->has('CU_title'))
                                           <span style="color:red">{{$errors->first('CU_title')}}</span>
                                       @endif</td>
                               </tr>
                               <tr>
                                   <td>Nội dung</td>
                                   <td><p style="width: 100%;"><textarea name="CU_content" id="" style="width: 100%;" rows="10" value="{{old('CU_content')}}"></textarea></p></td>
                               </tr>
                             <tr>
                                   <td></td>
                                   <td><input type="submit" value="Gửi cho chúng tôi" class="button"></td>
                               </tr>

                           </table>

                       </form>
                   </div>



    @endsection