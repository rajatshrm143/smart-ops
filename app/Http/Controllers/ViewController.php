<?php

namespace App\Http\Controllers;

use App\supplier;
use DB;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //

    public function __construct(){
        $this->supp = new supplier();
    }

    public function index()
    {
        $countrydata = $this->supp->allcountry();
        $allcategory = $this->supp->allcategory();
        $allsupplier = $this->supp->allsupplier();

        // dd($allsupplier);

        return view('viewpage',compact('countrydata','allcategory','allsupplier'));
    }
   
    public function add(Request $request)
    {
        // dd($request->post());
        // $countrydata = $this->supp->allcountry();
        // $allcategory = $this->supp->allcategory();
        // $allsupplier = $this->supp->allsupplier();
        $addSupplier = $this->supp->addSupplier($request->post());
        if($addSupplier){
            $msg = 1;
        }
        else{
            $msg = 0;
        }
        return $this->index();
        // return view('viewpage',compact('countrydata','allcategory','allsupplier','msg'));
       
    }
    public function update($id=0)
    {
        $id = $request->route('id');  
        $deleteSupplier = $this->supp->updateSupplier($id);
        if($updateSupplier){
            $msg = 2;
        }
        else{
            $msg = 0;
        }
        return $this->index();
       
    }
    public function delete(Request $request)
    {
        // dd($request->post());
        $id = $request->route('id');  
        $deleteSupplier = $this->supp->deleteSupplier($id);
        if($deleteSupplier){
            $msg = 2;
        }
        else{
            $msg = 0;
        }
        return $this->index();
        // return view('viewpage',compact('countrydata','allcategory','allsupplier','msg'));
       
    }
}
