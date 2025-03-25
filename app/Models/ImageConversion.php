<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ImageConversion
 * 
 * @property int $id
 * @property int $image_id
 * @property string $conversion_name
 * @property string $conversion_md5
 * @property int $width
 * @property int $height
 * @property int $size
 * @property int|null $x
 * @property int|null $y
 * @property int $rotate
 * @property int $scale_x
 * @property int $scale_y
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Image $image
 *
 * @package App\Models
 */
class ImageConversion extends Model
{
	protected $table = 'image_conversions';

	protected $casts = [
		'image_id' => 'int',
		'width' => 'int',
		'height' => 'int',
		'size' => 'int',
		'x' => 'int',
		'y' => 'int',
		'rotate' => 'int',
		'scale_x' => 'int',
		'scale_y' => 'int'
	];

	protected $fillable = [
		'image_id',
		'conversion_name',
		'conversion_md5',
		'width',
		'height',
		'size',
		'x',
		'y',
		'rotate',
		'scale_x',
		'scale_y'
	];

	public function image()
	{
		return $this->belongsTo(Image::class);
	}
}
