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
 * Class TypeAddress
 * 
 * @property int $id
 * @property string $name
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Address[] $addresses
 * @property Collection|Lawyer[] $lawyers
 *
 * @package App\Models
 */
class TypeAddress extends Model
{
	use SoftDeletes;
	protected $table = 'type_address';

	protected $fillable = [
		'name'
	];

	public function addresses()
	{
		return $this->hasMany(Address::class, 'address_type_id');
	}

	public function lawyers()
	{
		return $this->hasMany(Lawyer::class, 'address_type_id');
	}
}
