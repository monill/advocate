<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Dependent
 * 
 * @property int $id
 * @property int $customer_id
 * @property int $kinship_id
 * @property string $name
 * @property Carbon|null $birthday
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Customer $customer
 * @property Kinship $kinship
 *
 * @package App\Models
 */
class Dependent extends Model
{
	use SoftDeletes;
	protected $table = 'dependents';

	protected $casts = [
		'customer_id' => 'int',
		'kinship_id' => 'int'
	];

	protected $dates = [
		'birthday'
	];

	protected $fillable = [
		'customer_id',
		'kinship_id',
		'name',
		'birthday'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function kinship()
	{
		return $this->belongsTo(Kinship::class);
	}
}
