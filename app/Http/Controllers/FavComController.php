<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class FavComController extends Controller
{
    public function welcome(){
        {
            return view('welcome');
        }
    }
        // Formation 
    public function fHottelerieRestauration(){
        return view('Formation.hottelerieRestauration');
    }
    public function fPatisserie(){
        return view('Formation.patisserie');
    }

        // Services
    public function sEvenementiel(){
        return view('Service.evenementiel');
    }
    public function sHottelerie(){
        return view('Service.hottelerie');
    }

        // A propos
    public function about(){
        return view('about');
    }
    
        // Contact
    public function contact(){
        return view('contact');
    }



    public function detailCuisinegénérale(){
        return view('cuisine');
    }



    
    public function send_mail(Request $REQUEST){
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255' ], 
            'email' => ['required', 'string', 'email', 'max:255' ],
            'phone' => ['string', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255']
        ]);

        $contact = [
            'name' => $request['name'], 
            'email' => $request['email'],
            'phone' => $request['phone'],
            'subject' => $request['subject'],
            'message' => $request['message'],
        ];



    
        Mail::to('estimegliti108@gmail.com')->send(new ContactFormMail($contact));
        
        return redirect()->route('contact')->with('status', 'Your Mail has been received');
    }


}
