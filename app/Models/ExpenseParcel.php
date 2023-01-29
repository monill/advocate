<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ExpenseParcel
 *
 * @property int $id
 * @property int $expense_id
 * @property int $payment_method_id
 * @property string|null $document
 * @property Carbon $due_date
 * @property float $amount
 * @property float|null $amount_paid
 * @property bool $is_paid
 * @property Carbon|null $payment_in
 * @property string|null $deleted_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Expense $expense
 * @property PaymentMethod $payment_method
 *
 * @package App\Models
 */
class ExpenseParcel extends Model
{
    use SoftDeletes;

    protected $table = 'expense_parcels';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $casts = [
        'expense_id' => 'int',
        'payment_method_id' => 'int',
        'amount' => 'float',
        'amount_paid' => 'float',
        'is_paid' => 'bool'
    ];

    protected $dates = [
        'due_date',
        'payment_in'
    ];

    protected $fillable = [
        'expense_id',
        'payment_method_id',
        'document',
        'due_date',
        'amount',
        'amount_paid',
        'is_paid',
        'payment_in'
    ];

    public function expense()
    {
        return $this->belongsTo(Expense::class);
    }

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
