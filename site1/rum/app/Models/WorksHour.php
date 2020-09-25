<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WorksHour
 * 
 * @property int $id_works_on
 * @property Carbon $week
 * @property float $hour
 * 
 * @property WorksOn $works_on
 *
 * @package App\Models
 */
class WorksHour extends Model
{
	protected $table = 'works_hour';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_works_on' => 'int',
		'hour' => 'float'
	];

	protected $dates = [
		'week'
	];

	protected $fillable = [
		'hour'
	];

	public function works_on()
	{
		return $this->belongsTo(WorksOn::class, 'id_works_on');
	}
}
