<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Holiday
 *
 * @property int $id
 * @property string $name
 * @property int $day
 * @property int $month
 * @property int|null $year
 * @property bool $is_repeated
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Holiday extends Model
{
    use SoftDeletes;

    protected $table = 'holidays';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $casts = [
        'day' => 'int',
        'month' => 'int',
        'year' => 'int',
        'is_repeated' => 'bool'
    ];

    protected $fillable = [
        'name',
        'day',
        'month',
        'year',
        'is_repeated'
    ];
}
