<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Judge
 * 
 * @property int $id
 * @property string $name
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Process[] $processes
 *
 * @package App\Models
 */
class Judge extends Model
{
	use SoftDeletes;
	protected $table = 'judges';

	protected $fillable = [
		'name'
	];

	public function processes()
	{
		return $this->hasMany(Process::class);
	}
}
