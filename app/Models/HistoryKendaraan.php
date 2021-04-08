<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HistoryKendaraan
 * @package App\Models
 * @version April 7, 2021, 1:37 pm UTC
 *
 * @property string $jenis_kendaraan
 * @property string $laka_kecelakaan
 * @property string $pelanggaran
 * @property string $tanggal_kejadian
 * @property string $tempat_kejadian
 */
class HistoryKendaraan extends Model
{
    use SoftDeletes;
    use HasFactory;
    public $table = 'history_kendaraans';
    protected $primaryKey = 'platnomer';
    protected $dates = ['deleted_at'];

    public $fillable = [
        'platnomer',
        'jenis_kendaraan',
        'laka_kecelakaan',
        'pelanggaran',
        'tanggal_kejadian',
        'tempat_kejadian'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jenis_kendaraan' => 'string',
        'laka_kecelakaan' => 'string',
        'pelanggaran' => 'string',
        'tanggal_kejadian' => 'date',
        'tempat_kejadian' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'jenis_kendaraan' => 'required|max:20',
        'laka_kecelakaan' => 'required|max:255',
        'pelanggaran' => 'required|max:255',
        'tanggal_kejadian' => 'required',
        'tempat_kejadian' => 'required|max:100'
    ];

    
}
