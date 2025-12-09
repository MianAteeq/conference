<?php

namespace App\Models;

use id;
use App\Models\ConferenceWorkshop;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ConferenceRegister extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the ConferenceRegister
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(RegisterType::class, 'qualifications', 'id');
    }

    public function cat(): BelongsTo
    {
        return $this->belongsTo(RegisterType::class, 'category', 'id');
    }
    public function pack(): BelongsTo
    {
        return $this->belongsTo(RegisterType::class, 'package', 'id');
    }
    public function award_conference(): BelongsTo
    {
        return $this->belongsTo(RegisterType::class, 'award', 'id');
    }


    /**
     * Get all of the comments for the ConferenceRegister
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(ConferenceImage::class, 'conference_id', 'id');
    }


    /**
     * Get the user associated with the ConferenceRegister
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function image(): HasOne
    {
        return $this->hasOne(ConferenceImage::class, 'conference_id', 'id');
    }

    public function getPrefixAttribute($value)
            {
                if($value=="null"){

                    return  ;
                }else{
                    return  $value;

                }
            }

            /**
             * Get all of the comments for the ConferenceRegister
             *
             * @return \Illuminate\Database\Eloquent\Relations\HasMany
             */
            public function workshops(): HasMany
            {
                return $this->hasMany(ConferenceWorkshop::class, 'conference_id', 'id');
            }
}
