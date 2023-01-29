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
 * Class Process
 * 
 * @property int $id
 * @property int $case_type_id
 * @property int $action_type_id
 * @property int $situation_id
 * @property int $lawyer_id
 * @property int $procedural_condition_id
 * @property int $justice_type_id
 * @property int $state_id
 * @property int $city_id
 * @property int $judge_id
 * @property int $forum_id
 * @property int $court_id
 * @property string $number
 * @property string $subject
 * @property float|null $amount
 * @property string|null $internal_folder
 * @property Carbon|null $registration_date
 * @property Carbon|null $distribution_date
 * @property Carbon|null $closing_date
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property TypeAction $type_action
 * @property TypeCase $type_case
 * @property City $city
 * @property Court $court
 * @property Forum $forum
 * @property Judge $judge
 * @property TypeJustice $type_justice
 * @property Lawyer $lawyer
 * @property ProceduralCondition $procedural_condition
 * @property Situation $situation
 * @property State $state
 * @property Collection|FileProcess[] $file_processes
 * @property Collection|Customer[] $customers
 * @property Collection|ProcessLink[] $process_links
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Process extends Model
{
	use SoftDeletes;
	protected $table = 'processes';

	protected $casts = [
		'case_type_id' => 'int',
		'action_type_id' => 'int',
		'situation_id' => 'int',
		'lawyer_id' => 'int',
		'procedural_condition_id' => 'int',
		'justice_type_id' => 'int',
		'state_id' => 'int',
		'city_id' => 'int',
		'judge_id' => 'int',
		'forum_id' => 'int',
		'court_id' => 'int',
		'amount' => 'float'
	];

	protected $dates = [
		'registration_date',
		'distribution_date',
		'closing_date'
	];

	protected $fillable = [
		'case_type_id',
		'action_type_id',
		'situation_id',
		'lawyer_id',
		'procedural_condition_id',
		'justice_type_id',
		'state_id',
		'city_id',
		'judge_id',
		'forum_id',
		'court_id',
		'number',
		'subject',
		'amount',
		'internal_folder',
		'registration_date',
		'distribution_date',
		'closing_date'
	];

	public function type_action()
	{
		return $this->belongsTo(TypeAction::class, 'action_type_id');
	}

	public function type_case()
	{
		return $this->belongsTo(TypeCase::class, 'case_type_id');
	}

	public function city()
	{
		return $this->belongsTo(City::class);
	}

	public function court()
	{
		return $this->belongsTo(Court::class);
	}

	public function forum()
	{
		return $this->belongsTo(Forum::class);
	}

	public function judge()
	{
		return $this->belongsTo(Judge::class);
	}

	public function type_justice()
	{
		return $this->belongsTo(TypeJustice::class, 'justice_type_id');
	}

	public function lawyer()
	{
		return $this->belongsTo(Lawyer::class);
	}

	public function procedural_condition()
	{
		return $this->belongsTo(ProceduralCondition::class);
	}

	public function situation()
	{
		return $this->belongsTo(Situation::class);
	}

	public function state()
	{
		return $this->belongsTo(State::class);
	}

	public function file_processes()
	{
		return $this->hasMany(FileProcess::class);
	}

	public function customers()
	{
		return $this->belongsToMany(Customer::class, 'process_customers')
					->withPivot('id', 'main_involved', 'deleted_at')
					->withTimestamps();
	}

	public function process_links()
	{
		return $this->hasMany(ProcessLink::class);
	}

	public function users()
	{
		return $this->belongsToMany(User::class, 'process_users')
					->withPivot('id', 'main_involved', 'deleted_at')
					->withTimestamps();
	}
}
