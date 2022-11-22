<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Message
 * 
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $message
 * @property string $is_read
 * @property Carbon|null $date
 * @property string|null $subject
 * @property string|null $phone_number
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Message extends Model
{
	protected $table = 'messages';

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'name',
		'email',
		'message',
		'is_read',
		'date',
		'subject',
		'phone_number'
	];
}
