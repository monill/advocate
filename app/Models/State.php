<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class State
 *
 * @property int $id
 * @property string $name
 * @property string $uf
 *
 * @property Collection|Address[] $addresses
 * @property Collection|City[] $cities
 * @property Collection|Lawyer[] $lawyers
 * @property Collection|Process[] $processes
 *
 * @package App\Models
 */
class State extends Model
{
    public $timestamps = false;
    protected $table = 'states';
    protected $dateFormat = 'd-m-Y H:i:s';

    protected $fillable = [
        'name',
        'uf'
    ];

    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function lawyers()
    {
        return $this->hasMany(Lawyer::class);
    }

    public function processes()
    {
        return $this->hasMany(Process::class);
    }
}
