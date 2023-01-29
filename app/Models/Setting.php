<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Setting extends Model
{
    protected $table = 'settings';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $fillable = [
        'key',
        'value'
    ];
}
