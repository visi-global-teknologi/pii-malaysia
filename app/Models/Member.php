<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Member
 *
 * @property int $id
 * @property string $job
 * @property string $name
 * @property string $photo
 * @property string|null $quote
 * @property string $is_enabled
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Member extends Model
{
	protected $table = 'members';

	protected $fillable = [
		'job',
		'name',
		'photo',
		'quote',
		'is_enabled'
	];
}
