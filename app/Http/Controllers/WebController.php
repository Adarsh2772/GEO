<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;
class WebController extends Controller
{
    public function index()
    {
        $response = Http::acceptJson()->get(config('constants.DEFAULT_URL').'/website/getPackages');
        $array = $response->collect();
        $packagearray = $array['package'];
        
        $packages = $packagearray;
        // $packages = array_filter($packagearray, function ($item) {
        //     return $item['amount'] > 0;
        // });

        $test = Http::acceptJson()->get(config('constants.DEFAULT_URL').'/website/gettestimonial');
        $arraytest = $test->collect();
        $testimonial = $arraytest['testimonial'];
        //dd($testimonial);
        return view('index', compact('packages','testimonial'));
        // return view('index');
    }

    public function getcheckout($id)
    {
        $response = Http::acceptJson()->get(config('constants.DEFAULT_URL').'/website/checkoutPackage/'.$id);
        $object = $response->collect();
        $package = $object['package'];
        $addons = $object['addon'];
        $addonmodules = $object['addonmodules'];
        return view('checkout', compact('package', 'addons', 'addonmodules', 'id'));
    }

    public function getfreetrial()
    {
        $id = 5;
        $response = Http::acceptJson()->get(config('constants.DEFAULT_URL').'/website/checkoutPackage/'.$id);
        $object = $response->collect();
        $package = $object['package'];
        $addons = $object['addon'];
        $addonmodules = $object['addonmodules'];
        return view('free', compact('package', 'addons', 'addonmodules', 'id'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function trialrequest()
    {
        return view('trial-request');
    }

    public function login()
    {
        return redirect()->to(config('constants.DEFAULT_URL'));
    }
    public function getblog(){
        $response = Http::acceptJson()->get(config('constants.DEFAULT_URL').'/website/getblog');
        $object = $response->collect();
        $blog = ($object['blog']);
        return view('blog.post-list', compact('blog'));
    }

    public function showblog($id){
        $response = Http::acceptJson()->get(config('constants.DEFAULT_URL').'/website/getblog');
        $object = $response->collect();
        $blog = ($object['blog']);
        $k ='';
        $filteredArray = Arr::where($blog, function ($value, $key) use($id){
            $k=$key;
            return $value['id'] == $id;
        
        });
        $blog = $filteredArray[array_keys(($filteredArray))[0]];
        return view('blog.post-detail', compact('blog'));

    }
}
