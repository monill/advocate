<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FailedLogin
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string $email
 * @property string $ip
 * @property string|null $user_agent
 * @property string|null $bot
 * @property string|null $os_family
 * @property string|null $os
 * @property string|null $browser_family
 * @property string|null $browser
 * @property bool $is_desktop
 * @property bool $is_mobile
 * @property bool $is_tablet
 * @property bool $is_bot
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class FailedLogin extends Model
{
	protected $table = 'failed_logins';

	protected $casts = [
		'user_id' => 'int',
		'is_desktop' => 'bool',
		'is_mobile' => 'bool',
		'is_tablet' => 'bool',
		'is_bot' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'email',
		'ip',
		'user_agent',
		'bot',
		'os_family',
		'os',
		'browser_family',
		'browser',
		'is_desktop',
		'is_mobile',
		'is_tablet',
		'is_bot'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
