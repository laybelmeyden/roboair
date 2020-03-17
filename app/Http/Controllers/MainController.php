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
  $to_name = "AIR";
  $to_email = "info@rusinnovations.com";
  $data = array(
      'email_footer' => request('email_footer'),
      'name_footer' => request('name_footer'),
      'textarea_footer' => request('textarea_footer'),
  );
    Mail::send('email.mailcontact', $data, function($message) use ($data, $to_email, $to_name)
    {
      $message->from($to_email, $data['email_footer'],$data['name_footer'], $data['textarea_footer']);
      $message->to($to_email)->subject('Сообщение с сайта');
   });

   return redirect('/');
  }
}
