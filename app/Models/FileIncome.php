<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FileIncome
 *
 * @property int $id
 * @property int $income_id
 * @property string|null $name
 * @property string|null $real_name
 * @property string $extension
 * @property int $size
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Income $income
 *
 * @package App\Models
 */
class FileIncome extends Model
{
    use SoftDeletes;

    protected $table = 'file_incomes';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $casts = [
        'income_id' => 'int',
        'size' => 'int'
    ];

    protected $fillable = [
        'income_id',
        'name',
        'real_name',
        'extension',
        'size'
    ];

    public function income()
    {
        return $this->belongsTo(Income::class);
    }
}
