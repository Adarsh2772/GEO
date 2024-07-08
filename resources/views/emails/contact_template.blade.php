<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family:"noto sans", sans-serif;
}
.icon1{
  width: 20px;
  margin-right: 12px;
}
td{
  padding: 3px;
}
p,th,td{
  font-size: 12px;
}
article {
  padding-top:10px!important;
  padding: 15px;
  width: 100%;

}
ol,li{
  font-size: 12px;
}
footer {
  height: 20%;
}

@media (min-device-width: 600px) {
  article {
    width: 100%;
    height: auto;
  }
  section{
    width: 60%!important;
    padding: 12px!important;
    margin: 0 auto!important;
    background: #fff!important;
    border-radius: 3px!important;
  }

}
@media (max-device-width: 600px) {
  section{
    padding: 12px!important;
    margin: 0 auto!important;
    background: #fff!important;
    border-radius: 3px!important;
  }
}
</style>
</head>
<body style="background: #d3e6ed;
    padding: 15px;">
<section class="div-align">
<header style="
    background-size: contain;
    background-image: url('<?php echo config('constants.DEFAULT_URL');?>/public/image/eligo_watermark.png');
    background-repeat: no-repeat;
    background-position: center;
    border: 10px #cccccc solid;">
            <article>
                <p>Dear <b>GEO Business Solutions PVT. LTD.</b>,<br>
                    <br>
                        New customer enquiry.
                </p>

                <table style=''>

                    <tr>
                        <td style="font-weight: 600;">Name  </td>
                        <td>: </td>
                        <td><?php echo $details['name']; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600;">Email</td>
                        <td>: </td>
                        <td><?php echo $details['email']; ?></td>
                    </tr>

                    <tr>
                        <td style="font-weight: 600;">Contact No</td>
                        <td>: </td>
                        <td><?php echo $details['contact_no']; ?></td>
                    </tr>
                    <tr>
                        <td style="font-weight: 600;">Maessage</td>
                        <td>: </td>
                        <td><?php echo $details['message']; ?></td>
                    </tr>

                </table>
            </article>
            </header>


</section>
</body>
</html>

