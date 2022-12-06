<?php

namespace App\Exports;

use App\Category_model;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CategoryExport implements FromCollection, WithHeadings
{
	use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $categories = Category_model::all();    
        //return collect($addresses);
        return $categories;
    }
    public function headings(): array
    {
        return [ "ID","NOMBRE", "DESCRIPCIÓN", "URL"];
    }
}
