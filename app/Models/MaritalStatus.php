<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class MaritalStatus
 * 
 * @property int $id
 * @property string $name
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Customer[] $customers
 *
 * @package App\Models
 */
class MaritalStatus extends Model
{
	use SoftDeletes;
	protected $table = 'marital_status';

	protected $fillable = [
		'name'
	];

	public function customers()
	{
		return $this->hasMany(Customer::class);
	}
}
