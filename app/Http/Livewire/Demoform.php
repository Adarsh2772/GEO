<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Demoform extends Component
{
    public $name,$firm_name,$email,$contact_no,$message,$ip,$originalcaptcha,$enteredcaptcha,$city,$membership_no,$company_url,
    $time_slot,$employee_count,$selectdate;

    protected $listeners = [
        'getdata',
        'getempcount',
        'changedate'
    ];

    public function getdata($value,$id)
    {
        $this->$id = $value;
    }

    public function getempcount($value,$id)
    {
        $this->$id = $value;
    }

    public function render()
    {
        return view('livewire.demoform');
    }

    public function mount()
    {
        $this->selectdate = date('M d, Y');
    }

    public function saveform()
    {
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'contact_no' => $this->contact_no,
            'ip_address' => $this->ip,
            'message' => $this->company_url,
            'captcha' => $this->enteredcaptcha,
            'time_slot' => $this->time_slot ?? '12:00 PM to 01:00 PM',
            'employee_count' => $this->employee_count
        ];

        $rules = [
            'name' => 'required | max:50|',
            'email' => 'required|email|max:50',
            'contact_no' => 'required|digits:10|regex:/^[7-9][0-9]{9}$/|',
            'message' => 'nullable|max:255',    
            'captcha' => 'required|max:255',    
            'time_slot' => 'required',
            'employee_count' => 'required',
        ];

        $attributeNames = array(
            'name' => 'Name',
            'contact_no' => 'Contact No.',
            'email' => 'Email',
            'message' => 'Message',
            'captcha' => 'Captcha',
            'time_slot' => 'Time Slot',
            'employee_count' => 'Employee Count',
         );

        $validation = Validator::make( $data, $rules);
        $validation->setAttributeNames($attributeNames);
        if ($validation->fails()) {
            $error = $validation->errors()->first();
            $this->dispatchBrowserEvent('iztoast', ['title' => $error, "status" => 0]);
            $validation->validate(); // What for this line ? Looks like we really need it ?
        }

        if($this->enteredcaptcha != $this->originalcaptcha){
            $this->dispatchBrowserEvent('iztoast', ['title' => 'Invalid Captcha. Try Again', "status" => 0, "refresh" => 1]);
            return false;
        }

        // $url = config('constants.DEFAULT_URL');
        $url = "https://app.duedeck.com";
        $response = Http::post($url."/website/senddemorequest", [
            'name' => $this->name,
            'email' => $this->email,
            'contact_no' => $this->contact_no,
            'firm_name' => $this->firm_name,
            'membership_no' => $this->membership_no,
            'city' => $this->city,
            'ip_address' => $this->ip,
            'message' => $this->company_url,
            'time_slot' => $this->selectdate.' '.$this->time_slot,
            'employee_count' => $this->employee_count,
        ]);

        $this->dispatchBrowserEvent('iztoast', ["sweetalert" => 1, "refresh" => 1]);
        $this->clearfilters();
    }

    public function clearfilters()
    {
        $this->name = '';
        $this->email = '';
        $this->contact_no = '';
        $this->firm_name = '';
        $this->membership_no = '';
        $this->company_url = '';
        $this->city = '';
        $this->enteredcaptcha = '';
        $this->time_slot = '';
        $this->employee_count = '';
    }

    public function changedate($date){
        $this->selectdate = $date;
        $this->time_slot = '';
    }

    public function getcaptcha()
    {
        dd('ok');
    }
}
