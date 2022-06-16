<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgaTranslate extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_name_az',
        'page_name_en',
        'page_name_ru',
        'text_az',
        'text_en',
        'text_ru'
    ];

    public function getPageNameAttribute()
    {
        $locale = app()->getLocale();
        $property = "page_name_{$locale}";
        return $this->{$property};
    }
    public function getTextAttribute()
    {
        $locale = app()->getLocale();
        $property = "text_{$locale}";
        return $this->{$property};
    }
}