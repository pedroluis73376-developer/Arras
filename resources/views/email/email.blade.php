<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <!--[if mso]>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body style="margin:0;padding:0;">
    <table role="presentation"
        style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td style="padding:0; align:center">
                <table role="presentation"
                    style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr>
                        <td style="padding:40px 50vh 30px 50vh; align:center">
                            <img src="https://scontent.fmex13-1.fna.fbcdn.net/v/t31.18172-8/13418516_1738736846400830_2990933450947505293_o.png?_nc_cat=108&ccb=1-5&_nc_sid=09cbfe&_nc_eui2=AeGceKqur5lELrzjzKuEbSx1XVOaBt3Th6BdU5oG3dOHoIrRo6KcpmBcHkkBcPz9HTPI3gT8tMKgSdp5VlzVl2qA&_nc_ohc=LMaT-q7TyVUAX8nSjJp&tn=1WFL-Sp6h5fLuJKO&_nc_ht=scontent.fmex13-1.fna&oh=00_AT84Pn1DAufz4yN0Pr2Y2i-we-7Js5WJFsyRfTfRgR2rsA&oe=627248A2"
                                alt="" width="300" style="height:auto;display:block;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                    <td style="padding:0 0 36px 0;color:#153643;">
                                        <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">
                                            Mensaje nuevo de {{$contacto->nombre}}</h1>
                                        <h6
                                            style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            Asunto: {{$contacto->asunto}}
                                        </h6>
                                        <p
                                            style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            {{$contacto->mensaje}}
                                        </p>
                                        <p><small>Email de contacto: {{$contacto->email}}</small></p>
                                        <p
                                            style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            <a href="http://www.example.com"
                                                style="color:#ee4c50;text-decoration:underline;">In tempus felis
                                                blandit</a>
                                        </p>
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>

</html>