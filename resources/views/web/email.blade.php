<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here"/>
    <title></title>
</head>

<body
    style="background-color: #e7eff8; font-family: trebuchet,sans-serif; margin-top: 0; box-sizing: border-box; line-height: 1.5;">
<div class="container-fluid">
    <div class="container" style="background-color: #e7eff8; width: 600px; margin: auto;">
        <div class="col-12 mx-auto" style="width: 580px;  margin: 0 auto;">

            <div class="row">
                <div class="container-fluid">
                    <div class="row" style="background-color: #e7eff8; height: 10px;">

                    </div>
                </div>
            </div>

            <div class="row"
                 style="height: 100px; padding: 10px 20px; line-height: 90px; background-color: white; box-sizing: border-box;">
                {{--<h1 class="pl-3"
                    style="color: orange; line-height: 00px; float: left; padding-left: 20px; padding-top: 5px;">
                    <img src="{{$message->embed(asset('front/img/logo.png'))}}"
                         height="40" alt="logo">
                </h1>--}}
                <h1 class="pl-2"
                    style="color: orange; line-height: 30px; float: left; padding-left: 20px; font-size: 40px; font-weight: 500;">
                    AllSTORE
                </h1>
            </div>

            <div class="row" style="background-color: #00509d; height: 200px; padding: 35px; color: white;">
                <div class="container-fluid">
                    <h3 class="m-0 p-0 mt-4" style="margin-top: 0; font-size: 28px; font-weight: 500;">
                        <strong style="font-size: 32px;">Thông báo đặt hàng thành công</strong>
                        <br>
                        Cảm ơn bạn đã tin tưởng shop!
                    </h3>
                    <div class="row mt-5" style="margin-top: 35px; display: flex;">
                        <div class="col-6"
                             style="margin-bottom: 25px; flex: 0 0 50%; width: 50%; box-sizing: border-box;">
                            <b>{{ $invoice->user->name}}</b>
                            <br>
                            <span>
                                <a style="color: white !important;" href="mailto:{{ $invoice->user->email }}" target="_blank">{{ $invoice->user->email }}</a>
                            </span>
                            <br>
                            <span>{{ $invoice->user->sdt }}</span>
                        </div>
                        <div class="col-6" style="flex: 0 0 50%; width: 50%; box-sizing: border-box;">
                            <b>Ngày đặt:</b> {{ date('d/m/yy H:i', strtotime($invoice->user->created_at)) }}
                            <br>
                            <b>Địa chỉ nhận hàng:</b> {{ $invoice->delivery_address }}
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="row mt-2 p-4" style="background-color: white; margin-top: 15px; padding: 20px;">
                <table>
                    <tr>
                        <td>
                            <img
                                src="https://ci6.googleusercontent.com/proxy/8eUxMUXMkvgUKX8veBCRQM5N7-jXP0Wx8KjQLaGDch2DnV_5HYw9PMgJXsoqgSR_jonTY9jAftWPKNsN5W9cUUneQ9hz7IhxH4rIXNzHMm0ijbsNjHB9m7g6XfJJ=s0-d-e1-ft#https://www.bambooairways.com/reservation/common/hosted-images/tickets.jpg"
                                alt="">
                        </td>

                        @if($order->payment_type == "pay_later")
                            <td class="pl-3" style=" padding-left:15px;">
                                <span class="d-inline"
                                      style="color:#424853; font-family:trebuchet,sans-serif; font-size:16px; font-weight:normal; line-height:22px;">
                                    You will pay on delivery. We have just handed over your order to a shipping partner.
                                </span>
                            </td>
                        @endif

                       

                    </tr>
                </table>
            </div> --}}

            <div class="row mt-2" style="margin-top: 15px;">
                <div class="container-fluid">
                    <div class="row pl-3 py-2" style="background-color: #f4f8fd; padding: 10px 0 10px 20px;">
                        <b>Chi tiết đơn hàng</b>
                    </div>
                    <div class="row pl-3 py-2" style="background-color: #fff; padding: 10px 20px 10px 20px;">
                        <table class="table table-sm table-hover"
                               style="text-align: left;  width: 100%; margin-bottom: 5px; border-collapse: collapse;">
                            <thead>
                            <tr>
                                <th style="padding: 5px 0;">Sản phẩm</th>
                                <th style="padding: 5px 0;">Số lượng</th>
                                <th style="padding: 5px 20px 5px 0; text-align: right;">Thành tiền </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($invoice_product as $item)
                                <tr>
                                    <td style="border-top: 1px solid #dee2e6; padding: 5px 0;">
                                        {{ $item->product->name}}
                                    </td>
                                    <td style="border-top: 1px solid #dee2e6; padding: 5px 0;">
                                        {{ $item->amount}}
                                    </td>
                                    <td style="border-top: 1px solid #dee2e6; padding: 5px 20px 5px 0; text-align: right;">
                                        {{ $item->amount *$item->product->price}} $
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row pl-3 py-2" style="background-color: #fff; padding: 10px 20px 10px 20px;">
                        <table class="table table-sm table-hover"
                               style="text-align: left;  width: 100%; margin-bottom: 5px; border-collapse: collapse;">
                            <thead>
                            <tr>
                                
                                <th style="padding: 5px 20px 5px 0; text-align: right;">Tổng tiền </th>
                            </tr>
                            </thead>
                            <tbody>
                           
                                    
                                    <td style="border-top: 1px solid #dee2e6; padding: 5px 20px 5px 0; text-align: right;">
                                        {{ $invoice->total}} $
                                    </td>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

           
            <div class="row mt-2 mb-4" style="margin-top: 15px; margin-bottom: 25px;">
                <div class="container-fluid">
                    <div class="row pl-3 py-2" style="background-color: #f4f8fd; padding: 10px 0 10px 20px;">
                        <b style="color: #00509d; font-size: 18px;"></b>
                    </div>
                    <div class="row pl-3 py-2" style="background-color: #fff; padding: 10px 20px;">
                        <p>Quý khách được kiểm tra hình thức bên ngoài của sản phẩm (nhãn hiệu, kiểu dáng, màu sắc, số lượng,...) trước khi thanh toán và có thể từ chối nhận hàng nếu không hài lòng.</p>

                        <p>Nếu sản phẩm có dấu hiệu hư hỏng/bể vỡ hoặc không đúng với thông tin trên website, quý khách vui lòng liên hệ với cửa hàng trong vòng 48h kể từ thời điểm nhận hàng để được hỗ trợ.</p>

                        <p>Quý khách vui lòng giữ lại hóa đơn, hộp sản phẩm và phiếu bảo hành (nếu có) để đổi trả hoặc bảo hành khi cần.
                        </p>

                        <p>Bạn có thể tham khảo trang Trung tâm trợ giúp hoặc liên hệ với cửa hàng bằng cách để lại lời nhắn tại trang Liên hệ hoặc gửi thư tại đây. Hotline 1900 9999 (8:00 - 9:00 cả Thứ 7 và Chủ nhật).</p>

                        <b>ALLSTORE thank you.</b>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="container-fluid">
                    <div class="row" style="background-color: #e7eff8; height: 10px;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>
