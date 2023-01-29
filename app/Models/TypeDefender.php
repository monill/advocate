<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TypeDefender
 *
 * @property int $id
 * @property string $name
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Lawyer[] $lawyers
 *
 * @package App\Models
 */
class TypeDefender extends Model
{
    use SoftDeletes;

    protected $table = 'type_defenders';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $fillable = [
        'name'
    ];

    public function lawyers()
    {
        return $this->hasMany(Lawyer::class, 'defender_type_id');
    }
}
