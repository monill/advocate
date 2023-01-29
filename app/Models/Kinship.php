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
 * Class Kinship
 * 
 * @property int $id
 * @property string $name
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Dependent[] $dependents
 *
 * @package App\Models
 */
class Kinship extends Model
{
	use SoftDeletes;
	protected $table = 'kinships';

	protected $fillable = [
		'name'
	];

	public function dependents()
	{
		return $this->hasMany(Dependent::class);
	}
}
