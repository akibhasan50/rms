<?php

namespace App\Imports;

use App\Models\Employe;
use Maatwebsite\Excel\Concerns\ToCollection;

class EmployeImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $collection)
    {
     
            dd($collection);
        
    }
}
