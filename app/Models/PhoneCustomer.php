<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PhoneCustomer
 * 
 * @property int $id
 * @property int $customer_id
 * @property int $phone_type_id
 * @property string $number
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Customer $customer
 * @property TypePhone $type_phone
 *
 * @package App\Models
 */
class PhoneCustomer extends Model
{
	use SoftDeletes;
	protected $table = 'phone_customers';

	protected $casts = [
		'customer_id' => 'int',
		'phone_type_id' => 'int'
	];

	protected $fillable = [
		'customer_id',
		'phone_type_id',
		'number'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function type_phone()
	{
		return $this->belongsTo(TypePhone::class, 'phone_type_id');
	}
}
