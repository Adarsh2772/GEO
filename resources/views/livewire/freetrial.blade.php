<div>
    @if($checkout == 1)
        @include( 'checkout-1' )
    @endif

    @if($checkout == 2)
        @include( 'checkout-2' )
    @endif

    @if($checkout == 3)
        @include( 'checkout-3' )
    @endif

</div>


<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        display: none;

    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
        /* Firefox */
    }

    .count {
        width: 73px !important;
        text-align: center;
    }

    .m-7 {
        margin: 7px;
    }

    .input-group {
        flex-wrap: initial;
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var code;

    function createCaptcha() {
        //clear the contents of captcha div first
        document.getElementById('captcha').innerHTML = "";
        var charsArray =
            "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
        var lengthOtp = 6;
        var captcha = [];
        for (var i = 0; i < lengthOtp; i++) {
            //below code will not allow Repetition of Characters
            var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
            if (captcha.indexOf(charsArray[index]) == -1)
                captcha.push(charsArray[index]);
            else i--;
        }
        var canv = document.createElement("canvas");
        canv.id = "captcha";
        canv.width = 100;
        canv.height = 50;
        var ctx = canv.getContext("2d");
        ctx.font = "25px Georgia";
        ctx.strokeText(captcha.join(""), 0, 30);
        //storing captcha so that can validate you can save it somewhere else according to your specific requirements
        code = captcha.join("");
        @this.originalcaptcha = code;
        document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
    }

    function validateCaptcha() {
        event.preventDefault();
        debugger
        if (document.getElementById("cpatchaTextBox").value == code) {
            document.getElementById("invalid").style.display = "none";

        } else {
            // alert("Invalid Captcha. try Again");
            createCaptcha();
            document.getElementById("invalid").style.display = "block";

        }
    }


    window.addEventListener('unselectcheckboxes', function(e) {
        $(".addonsformodules").prop('checked', false);
    })

    function addasaddon(function_id, status, packagemastermodule_id, amount, no_of_count) {
        Livewire.emit('assignaddonmodule', function_id, status, packagemastermodule_id, amount, no_of_count);
    }

    window.addEventListener('iztoast', function(e) {
        if (e.detail.status == 0) {
            iziToast.error({
                displayMode: 1,
                position: "center",
                message: e.detail.title
            });
        }
        if (e.detail.status == 1) {
            iziToast.success({
                displayMode: 1,
                position: "center",
                message: e.detail.title
            });
        }
        if (e.detail.close == 1) {
            $('#closebtn').click();
        }

        if (e.detail.coupon == 0) {
            $('#invalid').html(e.detail.title);
        }

        if (e.detail.coupon == 1) {
            $('#valid').html(e.detail.title);
        }

        if (e.detail.refresh == 1) {
            createCaptcha();
        }

        if (e.detail.reload == 1) {
            Swal.fire({
                position: "center",
                icon: "success",
                html: "<p>Thank you for subscribing to DueDeck!<br> Please check your email to activate your account and start enjoying our services.</p>",
                showConfirmButton: false,
                timer: 3000
            }).then(() => {
                location.reload();
            });
        }
    });

    window.addEventListener('razorpay', function(e) {

        var amount = @this.grandtotal;
        console.log("orderid: " + e.detail.orderid);
        console.log(amount * 100);
        var options = {
            "key": "rzp_live_U88cXlzkto7hqh", // Enter the Key ID generated from the Dashboard
            // "key": "rzp_test_loGomvWSDOcJu0",
            "amount": parseFloat(amount * 100).toFixed(
                2
            ), // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "order_id": e.detail.orderid,
            "name": "Eligo Apptech Pvt. Ltd.",
            "description": "Live Transaction",
            "image": "{{ asset('images/eligo_favicon.png') }}",
            "handler": function(response) {

                var razorpayid = response.razorpay_payment_id;
                var razorpay_order_id = response.razorpay_order_id;
                var razorpay_signature = response.razorpay_signature;

                Livewire.emit('proceedtopayment', razorpayid, razorpay_order_id, razorpay_signature);
            },
            "prefill": {
                "name": @this.branch['branch_name'],
                "email": @this.branch['email'],
                "contact": @this.branch['contact_no']
            },
            "notes": {
                "address": "Pune"
            },
            "theme": {
                "color": "rgb(4,204,244)"
            }
        };

        var rzp1 = new Razorpay(options);
        rzp1.open();
        // e.preventDefault();
    });

    $('.numeric').bind('input', function() {
        var c = this.selectionStart,
            r = /[^0-9]/gi,
            v = $(this).val();
        if (r.test(v)) {
            $(this).val(v.replace(r, ''));
            c--;
        }
        this.setSelectionRange(c, c);
    });
</script>
