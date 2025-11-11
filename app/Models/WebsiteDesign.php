<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WebsiteDesign extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_design_category_id',
        'name',
        'url',
        'banner_image',
    ];

    public function websiteDesignCategory(): BelongsTo
    {
        return $this->belongsTo(WebsiteDesignCategory::class);
    }
}