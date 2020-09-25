<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 * 
 * @property int $id
 * @property string $name
 * 
 * @property Collection|Project[] $projects
 *
 * @package App\Models
 */
class Client extends Model
{
	protected $table = 'client';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function projects()
	{
		return $this->hasMany(Project::class, 'id_client');
	}
}
