<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Emagazine
 * 
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $url_file
 * @property int $emagazine_category_id
 * @property string $is_enabled
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property EmagazineCategory $emagazine_category
 *
 * @package App\Models
 */
class Emagazine extends Model
{
	protected $table = 'emagazines';

	protected $casts = [
		'emagazine_category_id' => 'int'
	];

	protected $fillable = [
		'title',
		'description',
		'image',
		'url_file',
		'emagazine_category_id',
		'is_enabled'
	];

	public function emagazine_category()
	{
		return $this->belongsTo(EmagazineCategory::class);
	}
}
