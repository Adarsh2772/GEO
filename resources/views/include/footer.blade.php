<style>
  .brcbc{
    border-color: #0789b5;
    color: #0789b5;
    border-radius: 30px;
  }
  .brcbc:hover {
    border-color: #0789b5;
    color: #fff;
    border-radius: 30px;
    background-color: #0789b5;
}

</style>
<div class="container pt-4">
        <div class="row row-cols-lg-5 col-cols-1">
          <div class="col-md-3 text-md-start text-center">
            <a href="/">
            @if(env('WEBSITE') == 'eligo')
              <img src="{{ asset('images/duedeck-logo-white.svg') }}" alt="Footer Logo" class="img-fluid mb-3" width="120" height="50">
            </a>
            <p >
            @else
              <img src="{{ asset('images/duedeck-logo-white.svg') }}" alt="Footer Logo" class="img-fluid mb-3" width="120">
            </a>
             
            @endif
            <p class="font-12 text-white">DueDeck is a cloud-based practice management software designed for compliance professionals, enabling them to manage multiple tasks securely from a single dashboard.</p>
           
          </div>
          <div class="col-md-3 col-6 mb-lg-0 mb-4">
            <p class="font-medium text-white ">Quick Links</p>
            <ul class="footer-nav ps-0">
              <li><a href="https://app.duedeck.com">Login</a></li>
              <li><a href="/#pricing">Signup</a></li>
              <li><a href="/schedule-demo">Book a Demo</a></li>
              <li><a href="/aboutus">About Us</a></li>
              <li><a href="/#pricing">Pricing</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-6">
          <p class="font-medium text-white ">Resources</p>
            <ul class="footer-nav ps-0">
              <li><a href="/video-detail">Video Tutorials</a></li>
              <li><a href="/blog">Blog Posts</a></li>
            </ul>
          </div>
          <div class="col-md-3 col-6">
          <p class="font-medium text-white ">Policies</p>
            <ul class="footer-nav ps-0">
              {{-- <li><a href="/">Security Policy</a></li> --}}
              <li><a href="/privacypolicy">Privacy & Policy</a></li>
              <li><a href="/termsconditions">Terms & Conditions</a></li>
              {{-- <li><a href="/securitypolicy">Security & Policy</a></li> --}}
            </ul>
          </div>
          <div class="col-md-3 col-6">
          <p class="font-medium text-white ">Connect</p>
          <ul class="footer-nav  cotntacts-links ps-0">
              <li><a href="tell:+919011691169"><i class="bi bi-telephone-fill"></i> +91 9011691169</a></li>
              <li><a href="mailto:hello@duedeck.com"><i class="bi bi-envelope-fill"></i> hello@duedeck.com</a></li>
              </ul>
              <a href="https://m.facebook.com/duedeck" target="_blank" class="social-link"><i class="bi bi-facebook"></i></a>
              <a href="https://www.linkedin.com/company/duedeck" target="_blank" class="social-link"><i class="bi bi-linkedin"></i></a>
              <a href="https://twitter.com/DueDeckOfficial" target="_blank" class="social-link"><i class="bi bi-twitter"></i></a>
              <a href="https://www.youtube.com/@DueDeck" target="_blank" class="social-link"><i class="bi bi-youtube"></i></a>
          </div>

        </div>
    </div>
    <div class="footer-copy-right text-center text-white">
      <p class="mb-0" style="text-align: center;">Copyright © <?php echo date('Y'); ?> ELIGO AppTech Private Limited. All Rights Reserved.</p>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="{{ asset('js/wow.min.js') }}"></script> -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11114478365"></script>

    {{-- <script src="//code.tidio.co/msov4jcwmfmxpilkdwg6feuxuyhbq6mx.js" async></script> --}}
    
    <script>
      new WOW().init();
   
      // Google analytics java script 
      // Updated By Adarsh at 11 Apr 2023
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-11114478365');
    </script>

<script>
  var url = 'https://whatsapp-chat-widget.web.app/whatsapp-chat-widget.js';
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.async = true;
  script.src = url;
  var chatOptions = {
    "buttonSetting":{
      "ctaText":"WhatsApp",
      "positionIsBottomRight":false,
      "backgroundColor":"#25d366",
      "borderRadius":95,
    },
    "widgetSetting":{
      "companyName":"DueDeck",
      "companySubTitle":"",
      "companyImg":"https://duedeck.com/public/images/dd.webp",
      "phoneNumber":"919011691169",
      "welcomeText":"Hi there!\nHow can I help you?",
      "userSentText":"Hey,\nJust saw your website\nCan you send me details about DueDeck.",
      "showByDefault": null,
      "ctaText":"Start chat",
      "headerBackgroundColor":"#0789b5",
      "borderRadius":46,
    }
  };
  script.onload = function() {
      createWhatsappChatWidget(chatOptions);
  };
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(script, firstScriptTag);
</script>