<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class NewsCategory
 *
 * @property int $id
 * @property string $name
 * @property string $is_enabled
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|News[] $news
 *
 * @package App\Models
 */
class NewsCategory extends Model
{
	protected $table = 'news_categories';

	protected $fillable = [
		'name',
		'is_enabled'
	];

	public function news()
	{
		return $this->hasMany(News::class);
	}
}
