<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function allStudents(){

   
    	$client = new \GuzzleHttp\Client();

		$res = $client->request('GET', 'https://api-nodejs-api.herokuapp.com/api/students');
		
		$students =  json_decode($res->getBody());

		return view('resources.allStudents', compact('students'));

	}

	public function create(){

		return view('resources.create');
	}

	public function store(Request $request){


        $url = "https://api-nodejs-api.herokuapp.com/api/students";
        
        $client = new \GuzzleHttp\Client();

        $input =  $request->all();


      $client->request('POST', $url, [
            'json' => [
                'lastname' => $request->lastname,
                'othernames' => $request->othernames,
                'matric' => $request->matric,
                'faculty'=> $request->faculty,
                'department'=>  $request->department
            ]
        ]);

      return redirect(route('students'))->with('message', 'The students resource has been created successfully.');


	}

	public function edit($id){


		return view('resources.edit', compact('id'));

	}

	public function update(Request $request, $id){

		$url = "https://api-nodejs-api.herokuapp.com/api/students/$id";
    
        $client = new \GuzzleHttp\Client();

        $input =  $request->all();

        $client->request('PUT', $url, [
            'json' => [
                'lastname' => $request->lastname,
                'othernames' => $request->othernames,
                'matric' => $request->matric,
                'faculty'=> $request->faculty,
                'department'=>  $request->department
            ]
        ]);

      return redirect(route('students'))->with('message_update', 'The students resource has been updated successfully.');

	}

	public function delete($id){

		$url = "https://api-nodejs-api.herokuapp.com/api/students/$id";
    
        $client = new \GuzzleHttp\Client();

        $client->request('DELETE', $url );

      return redirect(route('students'))->with('message_delete', 'The students resource has been deleted successfully.');;

	}


	
}
