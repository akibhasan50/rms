<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\Employe;

class UsersImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
       foreach($collection as $key => $value){
                if($key > 0){
                
                    $employe = new Employe();

                    $employe->name =$value[0];
                    $employe->phone =$value[1];
                    $employe->address =$value[2];

                    $employe->save();
                }

       }
    }
}
