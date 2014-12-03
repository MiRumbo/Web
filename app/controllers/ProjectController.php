<?php

class ProjectController extends BaseController {

	public function getCreateView()
	{
		$city_halls = CityHall::all();	
	   	$categories = Category::all();
		return View::make('projects.create')->with('city_halls', $city_halls)->with('categories', $categories);
	}

	public function create()
	{
		if (!Auth::check())
		{
			$error = array('hasError' => true, 'errorMessage' => 
				'Debe ingresar con su cuenta de usuario para crear una propuesta');
			return Response::json($error);
		}

		$project = Input::all();
		$project_status = ProjectStatus::where('status', '=', 'Propuesta')->get()->first();
		$project['project_status_id'] = $project_status->id;
		$project['user_id'] = Auth::id();
		$project = Project::create($project);
		
		if (Input::hasFile('photo'))
		{					
			$photo = Input::file('photo');
			$url = asset($photo->getClientOriginalName());
			$timestamp = new DateTime();
			$photoName = $project->id . $timestamp->getTimestamp() . '.' . $photo->getClientOriginalExtension();
			$photo->move('projects_media/photos', $photoName);

			$project_media = ProjectMedia::create(array('project_id' => $project->id,
				'type' => MediaType::Image, 'resource' => $photoName));
		}

		return Response::json($project);
	}

	public function getProjectInfoView($id)
	{
		return View::make('home');
	}

}