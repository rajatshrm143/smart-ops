<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    public function allcountry(){
        return DB::table('country_master')->get();
    }

    public function allcategory(){
        return DB::table('category_master')->get();
    }

    public function allsupplier(){
        return DB::table('supplier')
                ->select('supplier.id as supl_id',
                        'supplier.supl_name',
                        'country_master.coun_name',
                        'category_master.cat_name')
                ->leftjoin('country_master','country_master.id','supplier.coun_id')
                ->join('category_master','category_master.id','supplier.cat_id')
                ->where('supplier.status','1')
                ->groupBy('supplier.id')
                ->get();
    }

    public function addSupplier($request){
        // print_r($request);die;
        $arr = [
                'supl_name'=>$request['supl_name'],
                'coun_id'=>$request['coun_id'],
                'cat_id'=>$request['cat_id']
                ];
       return DB::table('supplier')->insert($arr);
    }
    
    public function updateSupplier($request){
        // print_r($request);die;
        $arr = [
                'supl_name'=>$request['supl_name'],
                'coun_id'=>$request['coun_id'],
                'cat_id'=>$request['cat_id']
                ];
       return DB::table('supplier')->where('id',$id)->update($arr);
    }
    
    public function deleteSupplier($id=0){
        // print_r($request);die;
        $arr = [
                'status'=>'0',
                ];
       return DB::table('supplier')->where('id',$id)->update($arr);
    }
}
