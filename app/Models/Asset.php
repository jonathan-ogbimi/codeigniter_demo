<?php

namespace App\Models;

use CodeIgniter\Model;

class Asset extends Model
{
    protected $table = 'assets';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name', 'description',
        'installation_year', 'expected_useful_life', 'renewal_year',
        'condition','quantity','unit_cost','estimated_cost'
    ];
}
