<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;
class WatingListExport implements FromCollection, WithHeadings, ShouldAutoSize

{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
  
        return  DB::table('waiting_lists_users')
                    ->join('cities', 'waiting_lists_users.address', '=', 'cities.id')
                    ->select(
                        'waiting_lists_users.id',
                        'waiting_lists_users.name',
                        'waiting_lists_users.email',
                        'cities.nameAr as address_ar',
                        'cities.nameEN as address_en',
                        'waiting_lists_users.phone',
                        'waiting_lists_users.type',
                        'waiting_lists_users.created_at'
                    )->get();
    }

   
    public function headings(): array
    {
        return [
            '#', 
            'Name',
            'E-mail',
            'Arabic City',
            'English City',
            'Phone',
            'Type',
            'Created at'
        ];
    }

    
}
