<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class WaitingList extends Model
{
    protected $table = "waiting_lists_users";
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'type',
        'status',
    ];

   
    public function scopeSearch($query, $search)
    {
        $keyword = $search['keyword']; 
        $is_user = $search['is_user']; 
        $is_company = $search['is_company']; 
        return $query->where(function($query) use ($search,$keyword,$is_user,$is_company)
        {
        if(isset($keyword) && $is_user == 'true' && $is_company == 'true'){
            $query->whereIn('type',['company','user'])
            ->where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%");

        }elseif(isset($keyword) && $is_user == 'false' && $is_company == 'true'){
          
                $query->where('type','company')
                    ->where('name', 'LIKE', "%$keyword%")
                    ->orWhere('email', 'LIKE', "%$keyword%")
                    ->orWhere('phone', 'LIKE', "%$keyword%")
                    ->orWhere('address', 'LIKE', "%$keyword%")
                    ->orWhere('type', 'LIKE', "%$keyword%");
        
        }elseif(isset($keyword) && $is_user == 'true' && $is_company == 'false'){
            
            $query->where('type','user')
                ->where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('address', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%");
        
        }elseif(isset($keyword) && $is_user == 'false' && $is_company == 'false'){
            $query->where('name', 'LIKE', "%$keyword%")
            ->orWhere('email', 'LIKE', "%$keyword%")
            ->orWhere('phone', 'LIKE', "%$keyword%")
            ->orWhere('address', 'LIKE', "%$keyword%")
            ->orWhere('type', 'LIKE', "%$keyword%");
    
        }elseif(!isset($keyword) && $is_user == 'true' && $is_company == 'true'){
            $query->whereIn('type',['user','company']);
          
        }elseif(!isset($keyword) && $is_user == 'true' && $is_company == 'false'){
            $query->where('type','user');
    
        }elseif(!isset($keyword) && $is_user == 'false' && $is_company == 'true'){
            $query->where('type','company');
        }
    // dd($search,$query);
       

        });
    }

    public function routeNotificationFor()
    {
        return $this->email;
    }

    public function address_info()
    {
        return $this->belongsTo('App\City','address','id');
    }

}
