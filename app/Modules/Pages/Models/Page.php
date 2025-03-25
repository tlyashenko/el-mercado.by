<?php

/**
 * Created by Reliese Model.
 */

namespace App\Modules\Pages\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Page
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $title
 * @property string $content
 * @property string $slug
 * @property string|null $meta_description
 * @property string|null $meta_title
 * @property string|null $meta_keywords
 * @property bool $is_published
 * @property array $og_tags
 *
 * @package App\Models
 */
class Page extends Model
{
	protected $table = 'page';

	protected $casts = [
		'is_published' => 'bool',
        'og_tags' => 'array',
	];

	protected $fillable = [
		'title',
		'content',
		'slug',
		'meta_description',
		'meta_title',
		'meta_keywords',
		'is_published',
        'og_tags',
	];
}
