<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProcessCustomer
 *
 * @property int $id
 * @property int $customer_id
 * @property int $process_id
 * @property bool $main_involved
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Customer $customer
 * @property Process $process
 *
 * @package App\Models
 */
class ProcessCustomer extends Model
{
    use SoftDeletes;

    protected $table = 'process_customers';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $casts = [
        'customer_id' => 'int',
        'process_id' => 'int',
        'main_involved' => 'bool'
    ];

    protected $fillable = [
        'customer_id',
        'process_id',
        'main_involved'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function process()
    {
        return $this->belongsTo(Process::class);
    }
}
