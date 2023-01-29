<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TypePhone
 *
 * @property int $id
 * @property string $name
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|PhoneCustomer[] $phone_customers
 * @property Collection|PhoneLaywer[] $phone_laywers
 *
 * @package App\Models
 */
class TypePhone extends Model
{
    use SoftDeletes;

    protected $table = 'type_phones';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $fillable = [
        'name'
    ];

    public function phone_customers()
    {
        return $this->hasMany(PhoneCustomer::class, 'phone_type_id');
    }

    public function phone_laywers()
    {
        return $this->hasMany(PhoneLaywer::class, 'phone_type_id');
    }
}
