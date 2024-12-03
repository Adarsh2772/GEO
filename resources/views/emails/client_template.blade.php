<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 20px auto;
      background: #ffffff;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .header {
      background-color: #004e89;
      color: #ffffff;
      padding: 20px;
      text-align: center;
    }
    .header h1 {
      margin: 0;
      font-size: 24px;
    }
    .content {
      padding: 20px;
    }
    .content p {
      margin: 10px 0;
    }
    .content .contact-details {
      margin-top: 20px;
    }
    .content .contact-details a {
      text-decoration: none;
      color: #004e89;
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }
    .content .contact-details img {
      width: 20px;
      height: 20px;
      margin-right: 10px;
    }
    .footer {
      text-align: center;
      padding: 10px;
      background: #f1f1f1;
      color: #777;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Thank You for Contacting Us!</h1>
    </div>
    <div class="content">
      <p>Dear <?php echo $details['name']; ?>,</p>
      <p>
        Thank you for reaching out to GEO Business Solutions PVT. LTD. We value your trust in us as your finance partner and are committed to providing tailored financial solutions to meet your needs.
      </p>
      <p>
        Our team will review your query and get back to you shortly. If you have any urgent concerns, feel free to connect with us via the details below:
      </p>
      <div class="contact-details">
        <a href="mailto:finance@geobiz.in">
          {{-- <img src="https://img.icons8.com/ios-filled/50/000000/email.png" alt="Email"> --}}
          finance@geobiz.in
        </a>
        <a href="https://wa.me/9766562525" target="_blank">
          {{-- <img src="https://img.icons8.com/ios-filled/50/000000/whatsapp.png" alt="WhatsApp"> --}}
          +91 9766562525
        </a>
      </div>
      <p>
        We look forward to assisting you with your financial goals and making your experience with us seamless and rewarding.
      </p>
      <p>Warm regards,<br><b>The GEO Business Solutions Team</b></p>
    </div>
    <div class="footer">
      <p>&copy; 2024 GEO Business Solutions PVT. LTD. All rights reserved.</p>
    </div>
  </div>
</body>
</html>
