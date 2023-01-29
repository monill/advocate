<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FileExpense
 * 
 * @property int $id
 * @property int $expense_id
 * @property string|null $name
 * @property string|null $real_name
 * @property string $extension
 * @property int $size
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Expense $expense
 *
 * @package App\Models
 */
class FileExpense extends Model
{
	use SoftDeletes;
	protected $table = 'file_expenses';

	protected $casts = [
		'expense_id' => 'int',
		'size' => 'int'
	];

	protected $fillable = [
		'expense_id',
		'name',
		'real_name',
		'extension',
		'size'
	];

	public function expense()
	{
		return $this->belongsTo(Expense::class);
	}
}
