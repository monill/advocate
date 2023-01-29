<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Printing
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $content
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User $user
 *
 * @package App\Models
 */
class Printing extends Model
{
    use SoftDeletes;

    protected $table = 'printings';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $casts = [
        'user_id' => 'int'
    ];

    protected $fillable = [
        'user_id',
        'name',
        'content'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
