<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PhoneLaywer
 * 
 * @property int $id
 * @property int $lawyer_id
 * @property int $phone_type_id
 * @property string $number
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Lawyer $lawyer
 * @property TypePhone $type_phone
 *
 * @package App\Models
 */
class PhoneLaywer extends Model
{
	use SoftDeletes;
	protected $table = 'phone_laywers';

	protected $casts = [
		'lawyer_id' => 'int',
		'phone_type_id' => 'int'
	];

	protected $fillable = [
		'lawyer_id',
		'phone_type_id',
		'number'
	];

	public function lawyer()
	{
		return $this->belongsTo(Lawyer::class);
	}

	public function type_phone()
	{
		return $this->belongsTo(TypePhone::class, 'phone_type_id');
	}
}
