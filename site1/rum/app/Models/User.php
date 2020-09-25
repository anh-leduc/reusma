<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
/**
 * Class User
 * 
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string|null $remember_token
 * @property string $name
 * @property string $status
 * @property string|null $gender
 * @property int $id_level
 * @property int $privillege
 * @property Carbon $join_date
 * 
 * @property Level $level
 * @property Collection|Project[] $projects
 * @property Collection|WorksOn[] $works_ons
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	use Notifiable;

	protected $table = 'users';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id_level' => 'int',
		'privillege' => 'int'
	];

	protected $dates = [
		'join_date'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'username',
		'password',
		'remember_token',
		'name',
		'status',
		'gender',
		'id_level',
		'privillege',
		'join_date'
	];

	public function level()
	{
		return $this->belongsTo(Level::class, 'id_level');
	}

	public function projects()
	{
		return $this->hasMany(Project::class, 'id_pm');
	}

	public function works_ons()
	{
		return $this->hasMany(WorksOn::class, 'id_dev');
	}
}
