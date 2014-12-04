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
		$category_id = $project['category_id'];
		$project = Project::create($project);
		$project_category = ProjectCategory::create(array('project_id' => $project->id, 'category_id' => $category_id));
		
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
		$project = Project::find($id);
		$project_category = ProjectCategory::where('project_id', '=', $project->id)->get()->first();
		$category = Category::find($project_category->category_id);
		$project->category = $category;
		$project_photo = ProjectMedia::where('project_id', '=', $project->id)->get()->first();
		if($project_photo != null)
		{
			$project->photo = $project_photo->resource;	
		}		
		return View::make('projects.info')->with('project', $project);
	}

}