<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Forum
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
class Forum extends Model
{
	use SoftDeletes;
	protected $table = 'forums';

	protected $fillable = [
		'name'
	];

	public function processes()
	{
		return $this->hasMany(Process::class);
	}
}
