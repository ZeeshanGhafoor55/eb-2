<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    protected $table = "homes";
    protected $fillable = [
        'hero_title',
        'hero_desc',
        'hero_btn_text',
        'hero_btn_link',
        'hero_img',
        'hero_bg_img',
        'greencard_title',
        'greencard_desc',
        'greencard_btntext',
        'greencard_btnlink',
        'apply_title',
        'apply_desc',
        'apply_btntext',
        'apply_btnlink',
        'apply1_number',
        'apply1_subtitle',
        'apply1_subdesc',
        'apply2_number',
        'apply2_subtitle',
        'apply2_subdesc',
        'apply3_number',
        'apply3_subtitle',
        'apply3_subdesc',
        'sponsoring_title',
        'sponsoring_desc',
        'latestnews_title',
        'latestnews_desc',
        'latestnews_btntext',
        'latestnews_btnlink',
        'faq_title',
        'faq_desc'
    ];


    public function photo()
    {
        return $this->belongsTo(Photo::class, 'hero_img', 'id');
    }
}
