<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employe::latest()->get();

        return view('employe.index',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $phone = $request->phone;
        $name = $request->name;
        $address = $request->address;
        
        
            $request->validate([
                'name'=>'required_without_all:phone,address',
                'phone'=>'required_without_all:name,address',
                'address'=>'required_without_all:phone,name',
                
                
            ]);
        
       

      
        
        $employes = Employe::where([
            ['name','LIKE',"%$name%"],
            ['phone','LIKE',"%$phone%"],
            ['address','LIKE',"%$address%"]
        ])->get();

    
       
        return view('employe.result',compact('employes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'file'=>'required|mimes:xlsx',
           
            
        ]);

        $file = $request->file;

        Excel::import(new UsersImport, $file);
        Alert::toast('employe store Successfull!','success');
        return redirect()->back();
    }


}
