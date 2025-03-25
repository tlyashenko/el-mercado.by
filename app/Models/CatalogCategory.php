<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CatalogCategory
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $title
 * @property string|null $description
 * @property string|null $image
 * @property bool $is_published
 *
 * @package App\Models
 */
class CatalogCategory extends Model
{
	protected $table = 'catalog_category';

	protected $casts = [
		'is_published' => 'bool'
	];

	protected $fillable = [
		'title',
		'description',
		'image',
		'is_published'
	];
}
