<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FileCustomer
 *
 * @property int $id
 * @property int $customer_id
 * @property string|null $name
 * @property string|null $real_name
 * @property string $extension
 * @property int $size
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Customer $customer
 *
 * @package App\Models
 */
class FileCustomer extends Model
{
    use SoftDeletes;

    protected $table = 'file_customers';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $casts = [
        'customer_id' => 'int',
        'size' => 'int'
    ];

    protected $fillable = [
        'customer_id',
        'name',
        'real_name',
        'extension',
        'size'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
