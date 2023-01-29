<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Address
 * 
 * @property int $id
 * @property int $customer_id
 * @property int $state_id
 * @property int $city_id
 * @property int $address_type_id
 * @property string $zip_code
 * @property string $street
 * @property string $number
 * @property string|null $complement
 * @property string $neighborhood
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property TypeAddress $type_address
 * @property City $city
 * @property Customer $customer
 * @property State $state
 *
 * @package App\Models
 */
class Address extends Model
{
	use SoftDeletes;
	protected $table = 'addresses';

	protected $casts = [
		'customer_id' => 'int',
		'state_id' => 'int',
		'city_id' => 'int',
		'address_type_id' => 'int'
	];

	protected $fillable = [
		'customer_id',
		'state_id',
		'city_id',
		'address_type_id',
		'zip_code',
		'street',
		'number',
		'complement',
		'neighborhood'
	];

	public function type_address()
	{
		return $this->belongsTo(TypeAddress::class, 'address_type_id');
	}

	public function city()
	{
		return $this->belongsTo(City::class);
	}

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function state()
	{
		return $this->belongsTo(State::class);
	}
}
