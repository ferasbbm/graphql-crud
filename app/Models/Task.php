<?php

namespace App\Models;

use App\Enum\TaskStatus;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 *
 * @author  <feras.bbm@gmail.com>
 * @package App\Models
 */
class Task extends Model
{
    use HasFactory;

    protected $casts = [
        'status' => TaskStatus::class
    ];

    const status = [
        'UNSCHEDULED' => 0,
        'COMPLETE' => 1,
        'CLOSED' => 2,
    ];

    /**
     * @return BelongsTo
     * @author <ferasbbm>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
