<?php


namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Login
 *
 * @property int $id
 * @property int $user_id
 * @property string $ip
 * @property string|null $browser
 * @property string|null $system
 * @property string|null $device
 * @property bool $is_mobile
 * @property bool $is_tablet
 * @property bool $is_desktop
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property User $user
 *
 * @package App\Models
 */
class Login extends Model
{
    protected $table = 'logins';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $casts = [
        'user_id' => 'int',
        'is_mobile' => 'bool',
        'is_tablet' => 'bool',
        'is_desktop' => 'bool'
    ];

    protected $fillable = [
        'user_id',
        'ip',
        'browser',
        'system',
        'device',
        'is_mobile',
        'is_tablet',
        'is_desktop'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
