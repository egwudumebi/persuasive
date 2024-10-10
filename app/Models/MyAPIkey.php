<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyAPIkey extends Model
{
    use HasFactory;
    private function APIKey() 
    {
        $firstMailApiKey = "2553dbedb4c12b476e80e9f28d2d66bf-afce6020-20da8f4f";
        $secondMailKey = "c139055d138d6e751c2e03b3d3d2d35f-afce6020-9158777a";
    }
    
}
