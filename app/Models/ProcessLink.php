<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ProcessLink
 * 
 * @property int $id
 * @property int $process_id
 * @property string $name
 * @property string $link
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Process $process
 *
 * @package App\Models
 */
class ProcessLink extends Model
{
	use SoftDeletes;
	protected $table = 'process_links';

	protected $casts = [
		'process_id' => 'int'
	];

	protected $fillable = [
		'process_id',
		'name',
		'link'
	];

	public function process()
	{
		return $this->belongsTo(Process::class);
	}
}
