<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nnews;
use App\Mero;
use App\Galler;

class MainController extends Controller
{
    public function index()
    {
        
        $nnews = Nnews:: latest()
        ->limit(3)
        ->get();
        $meros = Mero:: latest()
        ->limit(3)
        ->get();
      return view('pages.main', compact('nnews', 'meros'));
    }
    public function news()
    {
      
      $nnews = Nnews:: latest()
        ->get();
        
      return view('pages.news', compact('nnews'));
    }
    public function meropriyatiya(){
      
      $meros = Mero:: latest()
        ->get();
        
        return view('pages.meropriyatiya', compact('meros'));
    }
    public function photo(){
      $gallers = Galler:: latest()
        ->limit(4)
        ->get();
        
        return view('pages.photo', compact('gallers'));
    }
    public function about(){
        
        return view('pages.about');
    }
    public function newssolo(Nnews $solo){
        
        
      isset($solo->seo_title) ? $titl = $solo->seo_title : $titl = "AIR";
      isset($solo->seo_description) ? $meta = $solo->seo_description : $meta = "AIR";
      isset($solo->seo_keywords) ? $keywords = $solo->seo_keywords : $keywords = "AIR";
      isset($solo->image) ? $img = $solo->image: $img = 'storage/{{ $event->image }}';
      
      
        return view('pages.newssolo', compact('solo', 'titl', 'meta', 'img', 'keywords'));
    }
    public function meropriyatiyasolo(Mero $solo){
        
        
      isset($solo->seo_title) ? $titl = $solo->seo_title : $titl = "AIR";
      isset($solo->seo_description) ? $meta = $solo->seo_description : $meta = "AIR";
      isset($solo->seo_keywords) ? $keywords = $solo->seo_keywords : $keywords = "AIR";
      isset($solo->image) ? $img = $solo->image: $img = 'storage/{{ $event->image }}';
      
      
        return view('pages.meropriyatiyasolo', compact('solo', 'titl', 'meta', 'img', 'keywords'));
    }
    public function photosolo(Galler $solo){
        
        
      isset($solo->seo_title) ? $titl = $solo->seo_title : $titl = "AIR";
      isset($solo->seo_description) ? $meta = $solo->seo_description : $meta = "AIR";
      isset($solo->seo_keywords) ? $keywords = $solo->seo_keywords : $keywords = "AIR";
      isset($solo->image) ? $img = $solo->image: $img = 'storage/{{ $event->image }}';
      
      
        return view('pages.photosolo', compact('solo', 'titl', 'meta', 'img', 'keywords'));
    }
    public function contact_f(Request $request)
    {
  $data = array(
      'name_1' => request('name_1'),
      'name_2' => request('name_2'),
      'name_3' => request('name_3'),
      'name_4' => request('name_4'),
      'name_5' => request('name_5'),
      'name_6' => request('name_6'),
      'name_7' => request('name_7'),
      'name_8' => request('name_8'),
  );
  \Mail::send('email.mailcontact', $data, function($message1) use ($data)
  {
      $mail_admin = env('MAIL_ADMIN_EVENTSOLO');
      $message1->from($data['name_1'], $data['name_2'], $data['name_3'], $data['name_4'], $data['name_5'], $data['name_6'], $data['name_7'], $data['name_8']);
      $message1->to($mail_admin, 'For Admin')->subject('Message from site');
   });

   session()->flash('message', 'Ваша заявка отправлена!');
     return redirect('/');
  }
}
