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
 * Class Lawyer
 * 
 * @property int $id
 * @property int $defender_type_id
 * @property int $address_type_id
 * @property int $state_id
 * @property int $city_id
 * @property string $name
 * @property string|null $oab
 * @property string|null $email
 * @property string|null $observations
 * @property string|null $photo
 * @property string $zip_code
 * @property string $street
 * @property string $number
 * @property string|null $complement
 * @property string $neighborhood
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property TypeAddress $type_address
 * @property City $city
 * @property TypeDefender $type_defender
 * @property State $state
 * @property Collection|PhoneLaywer[] $phone_laywers
 * @property Collection|Process[] $processes
 *
 * @package App\Models
 */
class Lawyer extends Model
{
	use SoftDeletes;
	protected $table = 'lawyers';

	protected $casts = [
		'defender_type_id' => 'int',
		'address_type_id' => 'int',
		'state_id' => 'int',
		'city_id' => 'int'
	];

	protected $fillable = [
		'defender_type_id',
		'address_type_id',
		'state_id',
		'city_id',
		'name',
		'oab',
		'email',
		'observations',
		'photo',
		'zip_code',
		'street',
		'number',
		'complement',
		'neighborhood'
	];

	public function type_address()
	{
		return $this->belongsTo(TypeAddress::class, 'address_type_id');
	}

	public function city()
	{
		return $this->belongsTo(City::class);
	}

	public function type_defender()
	{
		return $this->belongsTo(TypeDefender::class, 'defender_type_id');
	}

	public function state()
	{
		return $this->belongsTo(State::class);
	}

	public function phone_laywers()
	{
		return $this->hasMany(PhoneLaywer::class);
	}

	public function processes()
	{
		return $this->hasMany(Process::class);
	}
}
