<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PaymentMethod
 * 
 * @property int $id
 * @property string $name
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ExpenseParcel[] $expense_parcels
 * @property Collection|IncomeParcel[] $income_parcels
 *
 * @package App\Models
 */
class PaymentMethod extends Model
{
	use SoftDeletes;
	protected $table = 'payment_methods';

	protected $fillable = [
		'name'
	];

	public function expense_parcels()
	{
		return $this->hasMany(ExpenseParcel::class);
	}

	public function income_parcels()
	{
		return $this->hasMany(IncomeParcel::class);
	}
}
