<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Visitor
 * 
 * @property int $id
 * @property string $ip
 * @property string|null $country
 * @property string|null $city
 * @property string|null $estate
 * @property string|null $browser
 * @property string|null $system
 * @property string|null $device
 * @property bool $is_mobile
 * @property bool $is_tablet
 * @property bool $is_desktop
 * @property bool $is_bot
 * @property string|null $referrer
 * @property string|null $load_time
 * @property int $num_access
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Visitor extends Model
{
	protected $table = 'visitors';

	protected $casts = [
		'is_mobile' => 'bool',
		'is_tablet' => 'bool',
		'is_desktop' => 'bool',
		'is_bot' => 'bool',
		'num_access' => 'int'
	];

	protected $fillable = [
		'ip',
		'country',
		'city',
		'estate',
		'browser',
		'system',
		'device',
		'is_mobile',
		'is_tablet',
		'is_desktop',
		'is_bot',
		'referrer',
		'load_time',
		'num_access'
	];
}
