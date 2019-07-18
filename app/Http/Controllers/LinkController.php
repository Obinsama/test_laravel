<?php 
namespace test_laravel\Http\Controllers;
use Illuminate\Http\Request;

class LinkController extends Controller {
    public function layout(){
        return view('layouts.addlink');
    }
    public function addLink(){
        return view('layouts.addlink ');
    }
    public function validLink(Request $request){
     $parameters =$request->all();
     $name=$request->input('name');
     $link=$request->input('link');
     //var_dump($parameters);die;
     //dd($parameters['name'].' ' .$parameters['link']);

    }
    public function getJson()

    {

        return view('layouts.addlink');

    }
    public function getJsonPost(Request $request){
        $parameters =$request->all();
        $collection=[
          'name'=>$parameters['name'],
          'link'=>$parameters['link']
        ];

        return response()->json($collection);
    }
}
?>
