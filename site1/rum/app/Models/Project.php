<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * 
 * @property string $id
 * @property string $name
 * @property Carbon $start_date
 * @property Carbon $end_date
 * @property string $status
 * @property float $total_effort
 * @property float $real_cost
 * @property int $id_client
 * @property string $id_pm
 * 
 * @property Client $client
 * @property User $user
 * @property Collection|WorksOn[] $works_ons
 *
 * @package App\Models
 */
class Project extends Model
{
	protected $table = 'project';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'total_effort' => 'float',
		'real_cost' => 'float',
		'id_client' => 'int'
	];

	protected $dates = [
		'start_date',
		'end_date'
	];

	protected $fillable = [
		'name',
		'start_date',
		'end_date',
		'status',
		'total_effort',
		'real_cost',
		'id_client',
		'id_pm'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'id_client');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_pm');
	}

	public function works_ons()
	{
		return $this->hasMany(WorksOn::class, 'id_project');
	}
}
