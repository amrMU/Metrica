<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use DB;
class UsersListExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
       
       return $lists = DB::table('users')
                                ->join('cities', 'users.city_id', '=', 'cities.id')
                                ->select(
                                    'users.id',
                                    'users.fname',
                                    'users.lname',
                                    'users.email',
                                    'cities.nameAr',
                                    'cities.nameEn',
                                    'users.gander',
                                    'users.phone'
                                )->get();

    }

    public function headings(): array
    {
        return [
            '#', 
            'First Name',
            'Last Name',
            'E-mail',
            'Arabic City',
            'English City',
            'Gander',
            'Phone',
        ];
    }

}
