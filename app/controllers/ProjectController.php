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
		if(Input::get('d') != null)
		{
			$projects = $this->getProjectQuery()->where('projects.district_id', '=', Input::get('d'))->take(18)->get();
		}
		else if(Input::get('ch') != null)
		{
			$projects = $this->getProjectQuery()->where('city_hall_id', '=', Input::get('ch'))->take(18)->get();
		}
		else
		{
			$projects = $this->getProjectQuery()->take(18)->get();
		}

		return View::make('projects.list')->with('projects', $projects);

		// var_dump($projects);
	}

}

// public 'title' => string 'Nombre de la propuesta' (length=22)
//       public 'problem' => string 'Este es el problema' (length=19)
//       public 'solution' => string 'Esta es la soluciÃ³n' (length=20)
//       public 'cost' => null
//       public 'beneficiaries' => string 'Estos son los beneficiarios' (length=27)
//       public 'city_hall' => string 'CuauhtÃ©moc' (length=11)
//       public 'district' => string 'Condesa ' (length=8)
//       public 'category' => string 'Obras y servicios' (length=17)
//       public 'resource' => string '51417587804.jpg' (length=15)
//       public 'status' => string 'Propuesta' (length=9)
//       public 'username' => string 'mau' (length=3)