<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 * 
 * @property int $id
 * @property int $state_id
 * @property string $name
 * 
 * @property State $state
 * @property Collection|Address[] $addresses
 * @property Collection|Lawyer[] $lawyers
 * @property Collection|Process[] $processes
 *
 * @package App\Models
 */
class City extends Model
{
	protected $table = 'cities';
	public $timestamps = false;

	protected $casts = [
		'state_id' => 'int'
	];

	protected $fillable = [
		'state_id',
		'name'
	];

	public function state()
	{
		return $this->belongsTo(State::class);
	}

	public function addresses()
	{
		return $this->hasMany(Address::class);
	}

	public function lawyers()
	{
		return $this->hasMany(Lawyer::class);
	}

	public function processes()
	{
		return $this->hasMany(Process::class);
	}
}
