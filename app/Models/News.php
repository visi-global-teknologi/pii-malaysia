<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 * 
 * @property int $id
 * @property Carbon $date
 * @property string $title
 * @property string $image
 * @property string $information
 * @property int $news_category_id
 * @property string $is_enabled
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property NewsCategory $news_category
 * @property Collection|NewsComment[] $news_comments
 *
 * @package App\Models
 */
class News extends Model
{
	protected $table = 'news';

	protected $casts = [
		'news_category_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'date',
		'title',
		'image',
		'information',
		'news_category_id',
		'is_enabled'
	];

	public function news_category()
	{
		return $this->belongsTo(NewsCategory::class);
	}

	public function news_comments()
	{
		return $this->hasMany(NewsComment::class);
	}
}
