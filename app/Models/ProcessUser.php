<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProcessUser
 * 
 * @property int $id
 * @property int $user_id
 * @property int $process_id
 * @property bool $main_involved
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Process $process
 * @property User $user
 *
 * @package App\Models
 */
class ProcessUser extends Model
{
	use SoftDeletes;
	protected $table = 'process_users';

	protected $casts = [
		'user_id' => 'int',
		'process_id' => 'int',
		'main_involved' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'process_id',
		'main_involved'
	];

	public function process()
	{
		return $this->belongsTo(Process::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
