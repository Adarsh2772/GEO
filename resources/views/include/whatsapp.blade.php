{{-- <script>
    var url = 'https://whatsapp-chat-widget.web.app/whatsapp-chat-widget.js';
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.async = true;
    script.src = url;
    var chatOptions = {
        "buttonSetting": {
            "ctaText": "WhatsApp",
            "positionIsBottomRight": false,
            "backgroundColor": "#25d366",
            "borderRadius": 95,
        },
        "widgetSetting": {
            "companyName": "GEO Buisness Solutions PVT. LTD.",
            "companySubTitle": "",
            "companyImg": "https://geobiz.in/public/assets/img/geo-favicon.svg",
            "phoneNumber": "919766562525",
            "welcomeText": "Hi there!\nHow can I help you?",
            "userSentText": "Hey,\nJust saw your website\nCan you send me more details?",
            "showByDefault": null,
            "ctaText": "Start chat",
            "headerBackgroundColor": "#2c59a7",
            "borderRadius": 46,
        }
    };
    script.onload = function() {
        createWhatsappChatWidget(chatOptions);
    };
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(script, firstScriptTag);
</script> --}}


<div class="telecrm-chat-widget-main-container">
    
    <div class="telecrm-chat-widget-button-container">
        <button class="telecrm-chat-widget-button" onclick="redirectToWhatsApp()">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 31.5 31.5">
                <path id="Icon_awesome-whatsapp" data-name="Icon awesome-whatsapp"
                    d="M26.782,6.827A15.614,15.614,0,0,0,2.215,25.664L0,33.75l8.276-2.173a15.562,15.562,0,0,0,7.46,1.9h.007A15.76,15.76,0,0,0,31.5,17.866,15.671,15.671,0,0,0,26.782,6.827ZM15.743,30.846a12.951,12.951,0,0,1-6.609-1.807l-.471-.281L3.755,30.045l1.308-4.788-.309-.492a13,13,0,1,1,24.11-6.9,13.119,13.119,0,0,1-13.12,12.98Zm7.116-9.717c-.387-.2-2.306-1.139-2.665-1.266s-.619-.2-.879.2-1.005,1.266-1.237,1.533-.457.3-.844.1a10.617,10.617,0,0,1-5.309-4.641c-.4-.689.4-.64,1.146-2.13a.723.723,0,0,0-.035-.682c-.1-.2-.879-2.116-1.2-2.9-.316-.759-.64-.654-.879-.668s-.485-.014-.745-.014a1.445,1.445,0,0,0-1.041.485A4.383,4.383,0,0,0,7.8,14.4a7.641,7.641,0,0,0,1.589,4.036c.2.26,2.749,4.2,6.666,5.892,2.475,1.069,3.445,1.16,4.683.977a4,4,0,0,0,2.63-1.856,3.262,3.262,0,0,0,.225-1.856C23.505,21.417,23.245,21.319,22.859,21.129Z"
                    transform="translate(0 -2.25)" fill="white"></path>
            </svg>
            <span class="telecrm-chat-widget-button-text">WhatsApp</span>
        </button>
    </div>
</div>

<style>
  .telecrm-chat-widget-main-container {
    padding: 0 !important;
    font-family: 'Rubik', sans-serif !important;
    border-radius: 24px !important;
    transition: 0.5s linear !important;
    position: fixed !important;
    bottom: 10px !important;
    display: flex !important;
    flex-direction: column !important;
    z-index: 10024 !important;
    right: 60px !important;
    align-items: flex-start !important;
}

.telecrm-chat-widget-main-container .telecrm-chat-widget-message-container {
    display: none !important;
    flex-direction: column !important;
    width: 350px !important;
    max-width: 350px !important;
    border-radius: 12px !important;
    box-shadow: #0000003d 0 3px 8px !important;
    transform-origin: bottom left;
    animation: TeleCRMChatWidgetScaleAnime 0.3s linear;
    background-color: white !important;
}

.telecrm-chat-widget-main-container .telecrm-chat-widget-button-container .telecrm-chat-widget-button {
    background-color: #25d366 !important;
    border: none !important;
    padding: 5px 15px !important;
    display: flex !important
;
    align-items: center !important;
    justify-content: center !important;
    border-radius: 95px !important;
    min-height: 50px !important;
    color: white !important;
    cursor: pointer !important;
    margin-top: 15px !important;
    transition: 0.5s !important;
    max-width: 320px !important;
    max-height: 50px !important;
    overflow: hidden !important;
    box-shadow: #0000003d 0 3px 8px !important;
    outline: none !important;
}

.telecrm-chat-widget-main-container .telecrm-chat-widget-button-container .telecrm-chat-widget-button .telecrm-chat-widget-button-text {
    color: white !important;
    font-size: 16px !important;
    font-weight: 600 !important;
    margin-left: 6px !important;
    transition: 0.5s !important;
}
</style>

<script>
  // Define the phone number for WhatsApp Web redirection
  var phoneNumber = '919766562525'; // Add the recipient's phone number with the country code
  var message = "Hi there! I would like to know more about your services."; // Prefilled message (optional)
  
  // Encode the message for URL
  var encodedMessage = encodeURIComponent(message);

  // WhatsApp Web URL with prefilled message
  var whatsappWebUrl = 'https://web.whatsapp.com/send?phone=' + phoneNumber + '&text=' + encodedMessage;

  // Mobile-specific URL
  var whatsappMobileUrl = 'https://wa.me/' + phoneNumber + '?text=' + encodedMessage;

  // Detect device and redirect appropriately
  function redirectToWhatsApp() {
    var whatsappUrl = /Mobi|Android/i.test(navigator.userAgent) ? whatsappMobileUrl : whatsappWebUrl;
    window.open(whatsappUrl, '_blank');
  }
</script>