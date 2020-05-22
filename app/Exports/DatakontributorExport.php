<?php

namespace App\Exports;

use App\Kontributor;
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class DatakontributorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kontributor::all();
    }
}
