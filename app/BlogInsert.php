<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogInsert extends Model
{
	protected $table = 'blogs';
	public $timestamps = true;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'titel', 'autheur','shortDES', 'longDES', 'datum', 'plaats', 'image'
	];
}
