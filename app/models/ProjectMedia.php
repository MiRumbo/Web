<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class ProjectMedia extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	protected $fillable = array('project_id', 'type', 'resource');

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects_media';

}