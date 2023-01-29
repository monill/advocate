<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bank
 * 
 * @property int $id
 * @property string|null $code
 * @property string $name
 * @property string $ispb
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|FinancialAccount[] $financial_accounts
 *
 * @package App\Models
 */
class Bank extends Model
{
	use SoftDeletes;
	protected $table = 'banks';

	protected $fillable = [
		'code',
		'name',
		'ispb'
	];

	public function financial_accounts()
	{
		return $this->hasMany(FinancialAccount::class);
	}
}
