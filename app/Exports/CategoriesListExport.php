<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class CategoriesListExport implements FromCollection
{
    
       /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       
       return $categories = DB::table('categories')
                            ->select(
                                'categories.id',
                                'categories.name_ar',
                                'categories.name_en',
                                'categories.parent_id'
                            )->get();

    }

    public function headings(): array
    {
        return [
            'ID', 
            'Name Ar',
            'Name En',
            'Parent ID',
            
        ];
    }
}
