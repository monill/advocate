<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vocational
 * 
 * @property int $id
 * @property int $customer_id
 * @property int $occupation_id
 * @property string $workplace
 * @property Carbon $admission
 * @property Carbon|null $resignation
 * @property float $salary
 * @property string $pis
 * @property string $ctps
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Customer $customer
 * @property Occupation $occupation
 *
 * @package App\Models
 */
class Vocational extends Model
{
	use SoftDeletes;
	protected $table = 'vocationals';

	protected $casts = [
		'customer_id' => 'int',
		'occupation_id' => 'int',
		'salary' => 'float'
	];

	protected $dates = [
		'admission',
		'resignation'
	];

	protected $fillable = [
		'customer_id',
		'occupation_id',
		'workplace',
		'admission',
		'resignation',
		'salary',
		'pis',
		'ctps'
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function occupation()
	{
		return $this->belongsTo(Occupation::class);
	}
}
