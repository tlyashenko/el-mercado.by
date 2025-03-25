<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * 
 * @property int $id
 * @property string $uuid
 * @property string $disk
 * @property string $mime_type
 * @property string $file_extension
 * @property int $width
 * @property int $height
 * @property int $size
 * @property array|null $title
 * @property array|null $alt
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|ImageConversion[] $image_conversions
 *
 * @package App\Models
 */
class Image extends Model
{
	protected $table = 'images';

	protected $casts = [
		'width' => 'int',
		'height' => 'int',
		'size' => 'int',
		'title' => 'json',
		'alt' => 'json'
	];

	protected $fillable = [
		'uuid',
		'disk',
		'mime_type',
		'file_extension',
		'width',
		'height',
		'size',
		'title',
		'alt'
	];

	public function image_conversions()
	{
		return $this->hasMany(ImageConversion::class);
	}
}
