@extends('layout.index')

@section('content')
    @include('sub.client.message')
               <div class="main-contact">
                   <div class="info-company">
                       {!!$contact->CT_content!!}
                   </div>
                   <div class="info-customer">
                       <b style="text-align: center">Xin quý khách vui lòng để lại thông tin, để được phục vụ quý khách</b><br>
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