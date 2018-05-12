<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subhasta;
use PDF;
use DB;

class PdfController extends Controller
{
    //
    public function index($id)
    {
      //dd($id);
      $data = DB::table('subhastes')->where('subhastes.id', '=', $id)->join('articles', 'subhastes.id_article', '=', 'articles.id')->get();

      //dd($data);
      $pdf = PDF::loadView('pdf.invoice', compact('data'));
      //return $pdf->download('invoice.pdf');
      //return view("pdf.invoice")->with(['data'=>$data]);
      return $pdf -> download('pdf.invoice.pdf');
    }

    public function users()
    {
        $data = DB::table('users')->orderBy('surname','ASC')->get();
        $pdf = PDF::loadView('pdf.invoice', compact('data'));
        return $pdf -> download('Usuari_cognom_A-Z.pdf');
    }

    public function users2()
    {
        $data = DB::table('users')->orderBy('surname','DESC')->get();
        $pdf = PDF::loadView('pdf.invoice', compact('data'));
        return $pdf -> download('Usuari_cognom_Z-A.pdf');
    }

    public function users3()
    {
        $data = DB::table('users')->orderBy('dni','ASC')->get();
        $pdf = PDF::loadView('pdf.invoice', compact('data'));
        return $pdf -> download('Usuari_dni_A-Z.pdf');
    }

    public function users4()
    {
        $data = DB::table('users')->orderBy('dni','DESC')->get();
        $pdf = PDF::loadView('pdf.invoice', compact('data'));
        return $pdf -> download('Usuari_dni_Z-A.pdf');
    }

    public function users5()
    {
        $data = DB::table('users')->orderBy('city','ASC')->get();
        $pdf = PDF::loadView('pdf.invoice', compact('data'));
        return $pdf -> download('Usuari_city_A-Z.pdf');
    }

    public function users6()
    {
        $data = DB::table('users')->orderBy('city','DESC')->get();
        $pdf = PDF::loadView('pdf.invoice', compact('data'));
        return $pdf -> download('Usuari_city_Z-A.pdf');
    }
}
