<?php

class LocationController extends BaseController {

	public function getDistrictsByCityHall($id)
	{
		$districts = District::where('city_hall_id', '=', $id)->get();
		return Response::json($districts);
	}

}