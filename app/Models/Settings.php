<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 *
 * @property int $id
 * @property string $option
 * @property string $title
 * @property string|null $value
 *
 * @package App\Models
 */
class Settings extends Model
{
	protected $table = 'settings';
	public $timestamps = false;

	protected $fillable = [
		'option',
		'title',
		'value'
	];
}
