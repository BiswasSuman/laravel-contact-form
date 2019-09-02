<?php 

namespace sBiswas\LaravelContactForm\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use sBiswas\LaravelContactForm\Mail\ContactFormMailable;
use sBiswas\LaravelContactForm\Model\Contact;

class ContactContoller extends Controller
{

  public function index()
  {
    // return 'Hi, I am from ContactContrller.';
    return view('contact::contact');
  }

  public function send(Request $request)
  {
    Contact::create($request->all());
    Mail::to(config('contact_form.admin_mail_add'))->send(new ContactFormMailable($request->message, $request->name));
    return redirect('/contact');
  }


}