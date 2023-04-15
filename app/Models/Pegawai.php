<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $fillable = [
        'nama_pegawai',
        'no_telpon',
        'alamat',
        'tanngal_lahir',
        'status_karyawan',
        'jabatan',
    
    ];
    
    
    protected $dates = [
        'tanngal_lahir',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/pegawais/'.$this->getKey());
    }
}
