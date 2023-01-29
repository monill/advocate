<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Income
 *
 * @property int $id
 * @property int $customer_id
 * @property int $financial_account_id
 * @property int $financial_category_id
 * @property string $name
 * @property float|null $amount
 * @property string|null $observation
 * @property int|null $parcels
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Customer $customer
 * @property FinancialAccount $financial_account
 * @property FinancialCategory $financial_category
 * @property Collection|FileIncome[] $file_incomes
 * @property Collection|IncomeParcel[] $income_parcels
 *
 * @package App\Models
 */
class Income extends Model
{
    use SoftDeletes;

    protected $table = 'incomes';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $casts = [
        'customer_id' => 'int',
        'financial_account_id' => 'int',
        'financial_category_id' => 'int',
        'amount' => 'float',
        'parcels' => 'int'
    ];

    protected $fillable = [
        'customer_id',
        'financial_account_id',
        'financial_category_id',
        'name',
        'amount',
        'observation',
        'parcels'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function financial_account()
    {
        return $this->belongsTo(FinancialAccount::class);
    }

    public function financial_category()
    {
        return $this->belongsTo(FinancialCategory::class);
    }

    public function file_incomes()
    {
        return $this->hasMany(FileIncome::class);
    }

    public function income_parcels()
    {
        return $this->hasMany(IncomeParcel::class);
    }
}
