<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    protected $fillable = ['title', 'content', 'type', 'status', 'address', 'files'];
    protected $casts = [
        'files' => 'array',
    ];
    const STATUS_ACTIVE = 'active';
    const STATUS_NEW = 'new';
    const STATUSES = [
        'STATUS_ACTIVE' => self::STATUS_ACTIVE,
        'STATUS_NEW' => self::STATUS_NEW,
    ];
    const TYPE_ANONYMOUS = 'anonymous';
    const TYPE_CREDIT = 'credit';
    const TYPE_CREDIT_LEGAL = 'credit-legal';
    const TYPE_DEPOSIT = 'deposit';
    const TYPES = [
        'TYPE_ANONYMOUS' => self::TYPE_ANONYMOUS,
        'TYPE_CREDIT' => self::TYPE_CREDIT,
        'TYPE_CREDIT_LEGAL' => self::TYPE_CREDIT_LEGAL,
        'TYPE_DEPOSIT' => self::TYPE_DEPOSIT,
    ];
        
    public function resource_details()
	{
		return $this->morphMany(ResourceDetail::class,'resource');
	}
}
