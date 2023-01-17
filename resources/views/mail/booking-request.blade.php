


<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Laralink">
    <title>Booking Request</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&amp;display=swap');

    *,
    ::after,
    ::before {
        box-sizing: border-box;
    }

    body {
        color: #666;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.4em;
        margin: 0;
        font-family: 'Inter', sans-serif;
        background-color: #f5f6fa;
    }

    .tm_pos_invoice_wrap {
        max-width: 340px;
        margin: auto;
        margin-top: 30px;
        padding: 30px 20px;
        background-color: #fff;
    }

    .tm_pos_company_logo {
        display: flex;
        justify-content: center;
        margin-bottom: 7px;
    }

    .tm_pos_company_logo img {
        vertical-align: middle;
        border: 0;
        max-width: 100%;
        height: auto;
        max-height: 45px;
    }

    .tm_pos_invoice_top {
        text-align: center;
        margin-bottom: 10px;
    }

    .tm_pos_invoice_heading {
        display: flex;
        justify-content: center;
        position: relative;
        text-transform: uppercase;
        font-size: 12px;
        font-weight: 500;
        margin: 10px 0;
    }

    .tm_pos_invoice_heading:before {
        content: '';
        position: absolute;
        height: 0;
        width: 100%;
        left: 0;
        top: 46%;
        border-top: 1px dashed #b5b5b5;
    }

    .tm_pos_invoice_heading span {
        display: inline-flex;
        padding: 0 5px;
        background-color: #fff;
        z-index: 1;
        font-weight: 500;
    }

    .tm_list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-wrap: wrap;
        padding-top: 7px;
    }

    .tm_list li {
        display: flex;
        width: 50%;
        font-size: 14px;
        line-height: 1.2em;
        margin-bottom: 7px;
    }

    .text-right {
        text-align: right;
        justify-content: flex-end;
    }

    .tm_list_title {
        margin-right: 4px;
    }

    .tm_invoice_seperator {
        width: 100%;
        border-top: 1px dashed #b5b5b5;
        margin: 1px 0;
        margin-left: auto;
    }

    .tm_pos_invoice_table {
        width: 100%;
        line-height: 1.3em;
    }

    .tm_pos_invoice_table thead th {
        font-weight: 500;
        color: #111;
        text-align: left;
        padding: 12px 3px 8px;
        border-bottom: 1px dashed #b5b5b5;
    }

    .tm_pos_invoice_table td {
        padding: 4px;
    }

    .tm_pos_invoice_table tbody tr:first-child td {
        padding-top: 10px;
    }

    .tm_pos_invoice_table tbody tr:last-child td {
        padding-bottom: 10px;
    }

    .tm_pos_invoice_table th:last-child,
    .tm_pos_invoice_table td:last-child {
        text-align: right;
        padding-right: 0;
    }

    .tm_pos_invoice_table th:first-child,
    .tm_pos_invoice_table td:first-child {
        padding-left: 0;
    }

    .tm_pos_invoice_table tr {
        vertical-align: baseline;
    }

    .tm_bill_list {
        list-style: none;
        margin: 0;
        padding: 5px 0;
    }

    .tm_bill_list_in {
        display: flex;
        text-align: right;
        justify-content: space-between;
        padding: 3px 0;
    }

    .tm_bill_title {
        padding-right: 20px;
    }

    .tm_bill_value {
        width: 90px;
    }

    .tm_bill_value.tm_bill_focus,
    .tm_bill_title.tm_bill_focus {
        font-weight: 500;
        color: #111;
    }

    .tm_pos_sample_text {
        padding: 20px 0 5px;
    }

    .tm_pos_sample_text img {
        max-width: 100%;
        vertical-align: middle;
    }
    
    .tm_pos_sample_text p {
      text-align: center;
      margin-top: 0;
      margin-bottom: 10px;
      font-weight: 500;
      color: #111;
      font-size: 16px;
    }

    .tm_pos_company_name {
        font-weight: 500;
        color: #111;
        font-size: 20px;
        line-height: 1.2em;
    }



</style>
</head>

<body>
    <div class="tm_pos_invoice_wrap">
        <div class="tm_pos_invoice_top">
            <div class="tm_pos_company_name">Booking Request</div>
            <div class="tm_pos_company_address">Guest Info</div>
        </div>
        <div class="tm_pos_invoice_body">
            <div class="tm_invoice_seperator"></div>
            <div class="tm_invoice_seperator"></div>
            <ul class="tm_list">
                <li >
                    <div class="tm_list_title">CheckIn:</div>
                    <div class="tm_list_desc">{{ $bookingcheck_in->toFormattedDateString() }}</div>
                </li>
                <li class="text-right">
                    <div class="tm_list_title">CheckOut:</div>
                    <div class="tm_list_desc">{{ $bookingcheck_out->toFormattedDateString() }}</div>
                </li>
                <li>
                    <div class="tm_list_title">Date:</div>
                    <div class="tm_list_desc">{{ $booking->created_at->toFormattedDateString() }}</div>
                </li>
                <li class="text-right">
                    <div class="tm_list_title">Booking ID:</div>
                    <div class="tm_list_desc">{{  $bookingid }}</div>
                </li>
            </ul>
            <div class="tm_invoice_seperator"></div>
            <div class="tm_invoice_seperator"></div>
            <table class="tm_pos_invoice_table">
                {{-- <thead>
                    <tr>
                        <th>Item</th>
                        <th>Total</th>
                    </tr>
                </thead> --}}
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{ $bookingname }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ $bookingemail }}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>{{ $bookingphone }}</td>
                    </tr>
                    <tr>
                        <td>Room</td>
                        <td>{{ $bookingnumber }}</td>
                    </tr>
                    <tr>
                        <td>Room Type</td>
                        <td>{{ $bookingroom_id }}</td>
                    </tr>
                </tbody>
            </table>
           
            <div class="tm_invoice_seperator"></div>
            <div class="tm_invoice_seperator"></div>
            <div class="tm_pos_sample_text">
                <p>Thank You</p>
                <img src="{{ asset('img/qbar.png') }}" alt="">
            </div>
        </div>
    </div>
</body>
<script>
      /* *** *** *** *** *** *** *** *** *** *** *** *** *** *** *** ***
  /////////////////   Down Load Button Function   /////////////////
  *** *** *** *** *** *** *** *** *** *** *** *** *** *** *** *** */
 
(function ($) {
  'use strict';

  $('#tm_download_btn').on('click', function () {
    var downloadSection = $('#tm_pos_invoice_wrap');
    var cWidth = downloadSection.width();
    var cHeight = downloadSection.height();
    var topLeftMargin = 0;
    var pdfWidth = cWidth + topLeftMargin * 2;
    var pdfHeight = pdfWidth * 1.5 + topLeftMargin * 2;
    var canvasImageWidth = cWidth;
    var canvasImageHeight = cHeight;
    var totalPDFPages = Math.ceil(cHeight / pdfHeight) - 1;

    html2canvas(downloadSection[0], { allowTaint: true }).then(function (
      canvas
    ) {
      canvas.getContext('2d');
      var imgData = canvas.toDataURL('image/png', 1.0);
      var pdf = new jsPDF('p', 'pt', [pdfWidth, pdfHeight]);
      pdf.addImage(
        imgData,
        'PNG',
        topLeftMargin,
        topLeftMargin,
        canvasImageWidth,
        canvasImageHeight
      );
      for (var i = 1; i <= totalPDFPages; i++) {
        pdf.addPage(pdfWidth, pdfHeight);
        pdf.addImage(
          imgData,
          'PNG',
          topLeftMargin,
          -(pdfHeight * i) + topLeftMargin * 0,
          canvasImageWidth,
          canvasImageHeight
        );
      }
      pdf.save('download.pdf');
    });
  });

})(jQuery);

</script>
</html>