<?php

namespace CodePress\CodeCategory\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	//seta o nome da table relacionada a este modelo
	protected $table = "codepress_categories";

	protected $fillable = [
		'name',
		'actived',
		'parent_id'
	];
}