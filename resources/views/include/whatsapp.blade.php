
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
        "companyName":"GEO Buisness Solutions PVT. LTD.",
        "companySubTitle":"",
        "companyImg":"https://geobiz.in/public/assets/img/geo-favicon.svg",
        "phoneNumber":"919766562525",
        "welcomeText":"Hi there!\nHow can I help you?",
        "userSentText":"Hey,\nJust saw your website\nCan you send me more details?",
        "showByDefault": null,
        "ctaText":"Start chat",
        "headerBackgroundColor":"#2c59a7",
        "borderRadius":46,
      }
    };
    script.onload = function() {
        createWhatsappChatWidget(chatOptions);
    };
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(script, firstScriptTag);
  </script>