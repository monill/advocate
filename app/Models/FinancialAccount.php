<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FinancialAccount
 *
 * @property int $id
 * @property int $bank_id
 * @property string $name
 * @property string|null $agency
 * @property string|null $account_number
 * @property float $initial_balance
 * @property string|null $observation
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Bank $bank
 * @property Collection|Expense[] $expenses
 * @property Collection|Income[] $incomes
 *
 * @package App\Models
 */
class FinancialAccount extends Model
{
    use SoftDeletes;

    protected $table = 'financial_accounts';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $casts = [
        'bank_id' => 'int',
        'initial_balance' => 'float'
    ];

    protected $fillable = [
        'bank_id',
        'name',
        'agency',
        'account_number',
        'initial_balance',
        'observation'
    ];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function incomes()
    {
        return $this->hasMany(Income::class);
    }
}
