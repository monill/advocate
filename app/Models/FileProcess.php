<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FileProcess
 * 
 * @property int $id
 * @property int $process_id
 * @property string|null $name
 * @property string|null $real_name
 * @property string $extension
 * @property int $size
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Process $process
 *
 * @package App\Models
 */
class FileProcess extends Model
{
	use SoftDeletes;
	protected $table = 'file_process';

	protected $casts = [
		'process_id' => 'int',
		'size' => 'int'
	];

	protected $fillable = [
		'process_id',
		'name',
		'real_name',
		'extension',
		'size'
	];

	public function process()
	{
		return $this->belongsTo(Process::class);
	}
}
