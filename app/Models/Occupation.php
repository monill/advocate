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
 * Class Occupation
 * 
 * @property int $id
 * @property string $name
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Vocational[] $vocationals
 *
 * @package App\Models
 */
class Occupation extends Model
{
	use SoftDeletes;
	protected $table = 'occupations';

	protected $fillable = [
		'name'
	];

	public function vocationals()
	{
		return $this->hasMany(Vocational::class);
	}
}
