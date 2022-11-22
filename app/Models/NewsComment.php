<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NewsComment
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property string|null $website
 * @property int $news_id
 * @property string $is_read
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property News $news
 *
 * @package App\Models
 */
class NewsComment extends Model
{
	protected $table = 'news_comments';

	protected $casts = [
		'news_id' => 'int'
	];

	protected $fillable = [
		'name',
		'email',
		'comment',
		'website',
		'news_id',
		'is_read'
	];

	public function news()
	{
		return $this->belongsTo(News::class);
	}
}
