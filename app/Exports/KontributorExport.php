<?php

namespace App\Exports;

use App\Kontributor;
use Maatwebsite\Excel\Concerns\FromCollection;

class KontributorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kontributor::all();
    }
}
