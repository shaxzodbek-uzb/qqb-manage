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
    const TYPES = [
        'TYPE_ANONYMOUS' => self::TYPE_ANONYMOUS,
    ];
}
