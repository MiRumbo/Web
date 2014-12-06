<?php

class ProjectController extends BaseController {

	public function getCreateView()
	{
		$city_halls = CityHall::all();	
	   	$categories = Category::all();
	   	$districts = Input::get('ch') != null ?
	   		District::where('city_hall_id', '=', Input::get('ch'))->get() : null;

		return View::make('projects.create')
					->with('city_halls', $city_halls)
					->with('categories', $categories)
					->with('districts', $districts);
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

	public function getProjectQuery()
	{
		$query = DB::table('projects')
				->select('title', 'problem', 'solution', 'cost', 'beneficiaries', 'city_hall',
					'district', 'category', 'resource', 'status', 'username', 'name')
				->join('districts', 'districts.id', '=', 'district_id')
				->join('city_halls', 'city_halls.id', '=', 'city_hall_id')
	            ->join('projects_categories', 'projects.id', '=', 'projects_categories.project_id')
	            ->join('categories', 'categories.id', '=', 'category_id')
	            ->leftJoin('projects_media', 'projects.id', '=', 'projects_media.project_id')
	            ->join('projects_statuses', 'projects_statuses.id', '=', 'project_status_id')
	            ->join('users', 'users.id', '=', 'user_id');
	    return $query;
	}

	public function getProjectInfoView($id)
	{
		$project = $this->getProjectQuery()->where('projects.id', '=', $id)->first();
		$project->resource = $project->resource != null ? $project->resource : 'default.png';
		return View::make('projects.info')->with('project', $project);
	}

	public function getProjectsView()
	{
		$city_hall = null;
		$district = null;
		if(Input::get('d') != null)
		{
			$district_result = District::find(Input::get('d'));
			$district = $district_result != null ? $district_result->district : null;
			$city_hall = $district != null ? CityHall::find($district_result->city_hall_id)->city_hall : null;
			$projects = $this->getProjectQuery()->where('projects.district_id', '=', Input::get('d'))->take(18)->get();
		}
		else if(Input::get('ch') != null)
		{
			$city_hall_result = CityHall::find(Input::get('ch'));
			$city_hall = $city_hall_result != null ? $city_hall_result->city_hall : null;
			$projects = $this->getProjectQuery()->where('city_hall_id', '=', Input::get('ch'))->take(18)->get();
		}
		else
		{
			$projects = $this->getProjectQuery()->take(18)->get();
		}

		return View::make('projects.list')
					->with('projects', $projects)
					->with('city_hall', $city_hall)
					->with('district', $district);
	}

}