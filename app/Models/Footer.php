<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table = 'footers';

    protected $fillable = [
        'footer_col1_title',
        'footer_col1_desc',
        'footer_col2_title',
        'footer_col2_link',
        'footer_col3_title',
        'footer_col3_link',
        'footer_col4_title',
        'footer_col4_socialtitle',
        'footer_col4_sociallink',
        'copyright'
    ];

}
