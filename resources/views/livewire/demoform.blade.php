<div>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card card-body shadow px-4 py-4">
                <form wire:submit.prevent="saveform()" class="needs-validation">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 has-validation">
                                <input type="text" class="form-control alphabet" wire:model="name" autocomplete="off"
                                    maxlength="50" id="yourName" placeholder="full Name" required>
                                <label for="yourName">Your Name *</label>
                            </div>
                            <div class="invalid-feedback">Please enter your name</div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 has-validation">
                                <input type="email" pattern="\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b"
                                    autocomplete="off" class="form-control" wire:model="email" id="BusineesEmail"
                                    placeholder="email id" maxlength="50" required>
                                <label for="BusineesEmail">Business Email id *</label>
                            </div>
                            <div class="invalid-feedback">Please enter email id</div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-3">
                                <span class="input-group-text text-success"><i class="bi bi-whatsapp"></i></span>
                                <div class="form-floating  has-validation">
                                    <input type="tel" pattern="[789][0-9]{9}" class="form-control numeric"
                                        autocomplete="off" maxlength="10" wire:model="contact_no" id="whatsappNo"
                                        placeholder="WahtasApp No." required>
                                    <label for="whatsappNo">WhatsApp No *</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3  has-validation">
                                <input type="text" class="form-control" autocomplete="off" wire:model="city"
                                    id="CityName" maxlength="10" placeholder="City" required>
                                <label for="CityName">City/Town *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3  has-validation">
                                <input type="text" class="form-control" autocomplete="off" wire:model="firm_name"
                                    id="FirmName" placeholder="email id" maxlength="50" required>
                                <label for="FirmName">Firm Name *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3 ">
                                <input type="text" class="form-control numeric" autocomplete="off" maxlength="10"
                                    wire:model="membership_no" id="MembershipNo" placeholder="ICAI Membership name">
                                <label for="MembershipNo">ICAI Membership No.</label>
                            </div>
                        </div>

                        <div class="mb-3 col-md-12">
                            <p class="time">Select a time on 
                                <i class="bi bi-calendar2-week logocolor"></i>
                                <input type="text"  data-date-format="M d, Y" class="datepicker selectdate logocolor" readonly onchange="@this.changedate(this.value)" wire:model="selectdate" style="border: none;">
                                
                            </p>
                            <div class="app-check">
                                <div class="row">
                                    <div class="col-md-4">
                                        <?php
                                        date_default_timezone_set("Asia/Calcutta"); 
                                        $time = '12:00 PM';
                                        
                                        if(strtotime(date('h:i A')) > strtotime($time) && date('Y-m-d') == date('Y-m-d', strtotime($selectdate))){
                                            $disable = "disabled";
                                        }else{
                                            $disable = "";
                                        }
                                        
                                        $time1 = '02:00 PM';
                                        if(strtotime(date('h:i A')) > strtotime($time1) && date('Y-m-d') == date('Y-m-d', strtotime($selectdate))){
                                            $disable1 = "disabled";
                                        }else{
                                            $disable1 = "";
                                        }
                                        $time2 = '06:32 PM';
                                        if(strtotime(date('h:i A')) > strtotime($time2) && date('Y-m-d') == date('Y-m-d', strtotime($selectdate))){
                                            $disable2 = "disabled";
                                        }else{
                                            $disable2 = "";
                                        }
                                        ?>
                                        <input type="radio" {{ $disable}} class="option-input radio time_slot" id="time_slot" value="12:00 PM to 01:00 PM" wire:model="time_slot" />
                                        <div class="app-border">
                                            <label class="app-label">12:00 PM to 01:00 PM
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="radio" {{ $disable1 }} class="option-input radio time_slot" id="time_slot" value="02:00 PM to 03:00 PM" wire:model="time_slot" />
                                        <div class="app-border">
                                            <label class="app-label">02:00 PM to 03:00 PM
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <input type="radio" {{ $disable2 }} class="option-input radio time_slot" id="time_slot" value="04:00 PM to 05:00 PM" wire:model="time_slot" />
                                        <div class="app-border">
                                            <label class="app-label">04:00 PM to 05:00 PM
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 col-md-12">
                            <p class="time">Select your organization Employee count</p>
                            <div class="app-check">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="radio" class="option-input radio employee_count" value="0-5" id="employee_count" wire:model="employee_count" />
                                        <div class="app-border">
                                            <label class="app-label">0-5
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="radio" class="option-input radio employee_count" value="6-10" id="employee_count" wire:model="employee_count" />
                                        <div class="app-border">

                                            <label class="app-label">6-10
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="radio" class="option-input radio employee_count" value="11-20" id="employee_count" wire:model="employee_count" />
                                        <div class="app-border">
                                            <label class="app-label">11-20
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <input type="radio" class="option-input radio employee_count" value="21+" id="employee_count" wire:model="employee_count" />
                                        <div class="app-border">
                                            <label class="app-label">21+
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <span class="input-group-text text-success"><i class="bi bi-link-45deg"></i></span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" autocomplete="off" maxlength="100"
                                        wire:model="company_url" id="CompanyURL" placeholder="WahtasApp No.">
                                    <label for="CompanyURL">Company URL</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="text" autocomplete="off" class="form-control"
                                        placeholder="Enter Captcha" wire:model="enteredcaptcha" id="cpatchaTextBox"
                                        required />
                                    <label for="CompanyURL">Enter Captcha</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="input-group mb-3">
                                <div id="captcha"></div>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-duedeck px-5 py-2">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .swal2-styled.swal2-confirm {
        background-color: #0789b5;
    }

    .col-md-9 {
        width:100%;
    }

    .option-input {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        -o-appearance: none;
        appearance: none;
        position: relative;
        top: 38px;
        right: 0;
        bottom: 0;
        left: 25px;
        height: 20px;
        width: 20px;
        transition: all 0.15s ease-out 0s;
        background: #fff;
        border: 1px solid #999;
        color: #fff;
        cursor: pointer;
        display: inline-block;
        margin-right: 0.5rem;
        outline: none;
        position: relative;
        z-index: 1;
    }

    .logocolor{
        color: #0789b5;
        cursor: pointer;
    }

    .logocolor:hover{
        color: #64cade;
    }

    .option-input:hover {
        background: #e5e7eb;
    }

    .option-input:checked {
        border: 1px solid #fff;
    }

    .option-input:checked::before {
        color: #0789b5;
        height: 40px;
        width: 40px;
        position: absolute;
        content: "✔";
        display: inline-block;
        font-size: 12px;
        left: 4px;
        line-height: 20px;
    }

    .option-input:checked::after {
        -webkit-animation: click-wave 0.65s;
        -moz-animation: click-wave 0.65s;
        animation: click-wave 0.65s;
        background: #40e0d0;
        content: "";
        display: block;
        position: relative;
        z-index: 100;
    }

    .option-input.radio {
        border-radius: 50%;
    }

    .option-input.radio::after {
        border-radius: 50%;
    }

    .app-check {
        margin-top: -20px;
    }

    .app-border {
        border: 1px solid #ced4da;
        border-radius: 7px;
        padding: 2px 5px 11px 55px;
        min-height: 30px;
    }

    .option-input.radio:checked+.app-border {
        background: #0789b5;
        color: white;
    }

    .option-input.radio:disabled,
    .option-input.radio:disabled+.app-border {
        cursor: not-allowed;
        opacity: 0.6;
    }

    .time {
        text-align: left;
        font-weight: 400;
        font-size: 18px;
    }

    .app-label {
        position: relative;
        top: 6px;
        margin-right: 10px;
    }
    .datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-bottom{
        top: 461.667px!important;
        z-index: 1234!important;
    }
/*Alignment issue*/
    .datepicker{
        width: 200px;
    }
    .selectdate:focus-visible{
        outline: none!important; 
    }
</style>

<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    var code;

    document.addEventListener('livewire:load', function() {
        createCaptcha();
    });

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
        document.getElementById("captcha").appendChild(canv); // adds the canvas to the body element
        @this.originalcaptcha = code;
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
    window.addEventListener('iztoast', function(e) {
        if (e.detail.status == 0) {
            iziToast.error({
                title: 'Error',
                displayMode: 1,
                position: "center",
                message: e.detail.title
            });
        }
        if (e.detail.animate == 1) {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        }
        if (e.detail.refresh == 1) {
            createCaptcha();
        }
        if (e.detail.sweetalert == 1) {
            Swal.fire({
                imageUrl: "{{ asset('images/duedeck-R.svg') }}",
                imageWidth: 180,
                imageHeight: 50,
                imageAlt: 'Custom image',
                title: 'Thank you for the details',
                html: 'Our representative will call you to schedule demo as per your convenience.',
            })
        }
    });

    document.addEventListener('livewire:load', function() {
        $.get('https://www.cloudflare.com/cdn-cgi/trace', function(data) {
            // Convert key-value pairs to JSON
            // https://stackoverflow.com/a/39284735/452587
            data = data.trim().split('\n').reduce(function(obj, pair) {
                pair = pair.split('=');
                return obj[pair[0]] = pair[1], obj;
            }, {});
            console.log(data.ip);
            // if(isset(@this.ip)){
            @this.ip = data.ip
            // }
            // $('.group_name').val(data.ip);
        });
    });

    $(document).ready(function() {
        $('.time_slot').on('change', function(e) {
            Livewire.emit('getdata', $(this).val(), $(this).attr('id'));
        });

        $('.employee_count').on('change', function(e) {
            Livewire.emit('getempcount', $(this).val(), $(this).attr('id'));
        });

        $('.datepicker').datepicker({
            autoclose: true,
            todayHighlight: true,
            format: "M dd, yyyy",
            endDate: "+2d",
            orientation: "bottom",
            beforeShowDay: function(date) {
                var currentDate = new Date();
                currentDate.setHours(0, 0, 0, 0);

                // Disable dates in the past and more than 10 days in the future
                if (date < currentDate || date > currentDate.setDate(currentDate.getDate() + 10)) {
                    return {
                        enabled: false
                    };
                }

                return {
                    enabled: true
                };
            }
        });
    })

    $('.alphabet').bind('input', function() {
        var c = this.selectionStart,
            r = /[^a-z ]/gi,
            v = $(this).val();
        if (r.test(v)) {
            $(this).val(v.replace(r, ''));
            c--;
        }
        this.setSelectionRange(c, c);
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
