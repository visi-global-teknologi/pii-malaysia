<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HomepagePictureSlider
 * 
 * @property int $id
 * @property string $image
 * @property string $is_enabled
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class HomepagePictureSlider extends Model
{
	protected $table = 'homepage_picture_sliders';

	protected $fillable = [
		'image',
		'is_enabled'
	];
}
