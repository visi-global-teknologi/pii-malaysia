<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class EmagazineCategory
 *
 * @property int $id
 * @property string $name
 * @property string $is_enabled
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Emagazine[] $emagazines
 *
 * @package App\Models
 */
class EmagazineCategory extends Model
{
	protected $table = 'emagazine_categories';

	protected $fillable = [
		'name',
        'is_enabled'
	];

	public function emagazines()
	{
		return $this->hasMany(Emagazine::class);
	}
}
