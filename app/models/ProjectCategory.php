<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class ProjectCategory extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = array('project_id', 'category_id');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects_categories';

}