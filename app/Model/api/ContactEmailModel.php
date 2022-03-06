<?php

namespace App\Model\api;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Updater;

class ContactEmailModel extends Model {
  use SoftDeletes;
  use Updater;

  protected $table = 'contact_email';

  public $fillable = [
		'name',
		'email',
		'company',
		'phone',
		'subject',
		'content',

		'created_by',
		'updated_by',
		'deleted_by',
	];

	protected $dates = ['deleted_at'];
}
