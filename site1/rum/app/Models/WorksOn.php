<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WorksOn
 * 
 * @property int $id
 * @property string $id_dev
 * @property string $type
 * @property string $id_project
 * 
 * @property Project $project
 * @property User $user
 * @property Collection|WorksHour[] $works_hours
 *
 * @package App\Models
 */
class WorksOn extends Model
{
	protected $table = 'works_on';
	public $timestamps = false;

	protected $fillable = [
		'id_dev',
		'type',
		'id_project'
	];

	public function project()
	{
		return $this->belongsTo(Project::class, 'id_project');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_dev');
	}

	public function works_hours()
	{
		return $this->hasMany(WorksHour::class, 'id_works_on');
	}
}
