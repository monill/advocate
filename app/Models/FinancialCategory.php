<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FinancialCategory
 * 
 * @property int $id
 * @property string $name
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Expense[] $expenses
 * @property Collection|Income[] $incomes
 *
 * @package App\Models
 */
class FinancialCategory extends Model
{
	use SoftDeletes;
	protected $table = 'financial_categories';

	protected $fillable = [
		'name'
	];

	public function expenses()
	{
		return $this->hasMany(Expense::class);
	}

	public function incomes()
	{
		return $this->hasMany(Income::class);
	}
}
