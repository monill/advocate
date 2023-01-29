<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $oab
 * @property string|null $avatar
 * @property Carbon|null $email_verified_at
 * @property string|null $remember_token
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|FailedLogin[] $failed_logins
 * @property Collection|Login[] $logins
 * @property Collection|Printing[] $printings
 * @property Collection|Process[] $processes
 *
 * @package App\Models
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'password',
		'oab',
		'avatar',
		'email_verified_at',
		'remember_token'
	];

	public function failed_logins()
	{
		return $this->hasMany(FailedLogin::class);
	}

	public function logins()
	{
		return $this->hasMany(Login::class);
	}

	public function printings()
	{
		return $this->hasMany(Printing::class);
	}

	public function processes()
	{
		return $this->belongsToMany(Process::class, 'process_users')
					->withPivot('id', 'main_involved', 'deleted_at')
					->withTimestamps();
	}
}
