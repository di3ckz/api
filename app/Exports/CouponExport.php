<?php

namespace App\Exports;

use App\Coupon_model;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class CouponExport implements FromCollection, WithHeadings
{
	use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $coupons = Coupon_model::all();    
        //return collect($addresses);
        return $coupons;
    }
    public function headings(): array
    {
        return [ "CODIGO","MONTO", "TIPO", "VIGENCIA", "ESTATUS"];
    }
}
