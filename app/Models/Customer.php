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
 * Class Customer
 * 
 * @property int $id
 * @property int $client_type_id
 * @property int|null $gender_id
 * @property int|null $marital_status_id
 * @property int|null $issuing_institution_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $rg
 * @property string|null $cpf
 * @property string|null $mother_name
 * @property string|null $father_name
 * @property string|null $nickname
 * @property string|null $photo
 * @property string|null $email
 * @property string|null $fantasy_name
 * @property string|null $cnpj
 * @property string|null $state_registration
 * @property string|null $municipal_registration
 * @property string|null $comments
 * @property bool $birthday_email
 * @property bool $contrary_parts
 * @property Carbon|null $birthday
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property TypeCustomer $type_customer
 * @property Gender|null $gender
 * @property IssuingInstitution|null $issuing_institution
 * @property MaritalStatus|null $marital_status
 * @property Collection|Address[] $addresses
 * @property Collection|Dependent[] $dependents
 * @property Collection|Expense[] $expenses
 * @property Collection|FileCustomer[] $file_customers
 * @property Collection|Income[] $incomes
 * @property Collection|PhoneCustomer[] $phone_customers
 * @property Collection|Process[] $processes
 * @property Collection|Vocational[] $vocationals
 *
 * @package App\Models
 */
class Customer extends Model
{
	use SoftDeletes;
	protected $table = 'customers';

	protected $casts = [
		'client_type_id' => 'int',
		'gender_id' => 'int',
		'marital_status_id' => 'int',
		'issuing_institution_id' => 'int',
		'birthday_email' => 'bool',
		'contrary_parts' => 'bool'
	];

	protected $dates = [
		'birthday'
	];

	protected $fillable = [
		'client_type_id',
		'gender_id',
		'marital_status_id',
		'issuing_institution_id',
		'first_name',
		'last_name',
		'rg',
		'cpf',
		'mother_name',
		'father_name',
		'nickname',
		'photo',
		'email',
		'fantasy_name',
		'cnpj',
		'state_registration',
		'municipal_registration',
		'comments',
		'birthday_email',
		'contrary_parts',
		'birthday'
	];

	public function type_customer()
	{
		return $this->belongsTo(TypeCustomer::class, 'client_type_id');
	}

	public function gender()
	{
		return $this->belongsTo(Gender::class);
	}

	public function issuing_institution()
	{
		return $this->belongsTo(IssuingInstitution::class);
	}

	public function marital_status()
	{
		return $this->belongsTo(MaritalStatus::class);
	}

	public function addresses()
	{
		return $this->hasMany(Address::class);
	}

	public function dependents()
	{
		return $this->hasMany(Dependent::class);
	}

	public function expenses()
	{
		return $this->hasMany(Expense::class);
	}

	public function file_customers()
	{
		return $this->hasMany(FileCustomer::class);
	}

	public function incomes()
	{
		return $this->hasMany(Income::class);
	}

	public function phone_customers()
	{
		return $this->hasMany(PhoneCustomer::class);
	}

	public function processes()
	{
		return $this->belongsToMany(Process::class, 'process_customers')
					->withPivot('id', 'main_involved', 'deleted_at')
					->withTimestamps();
	}

	public function vocationals()
	{
		return $this->hasMany(Vocational::class);
	}
}
