<?php
namespace test_laravel\Http\Controllers;

use Illuminate\http\Request;
use test_laravel\Comments;
class EliaController extends Controller
{

public function comment()
{
return "Commentaire pris en compte!";
}
public function viewForum()
{
return view('blog');
}

public function addComment(Request $request)
{
$parameters=$request->except('_token');
$parameters=$request->all();
Comments::create($parameters);

return redirect()->route('viewForum')->with('success', "Commentaire bien enregistré!");
//return var_dump($parameters);
}

public function allgson()
{
# code...
$collection=[['name'=>"ndjimi", "email"=>"ndjimi@gmail.com"], ["name"=>"konai", "email"=>"ndjimi@gmail.com"]];


return response()->json($collection);
}

public function getComments(Request $request)
{
$parameters=$request->except('_token');
//$parameters=$request->all();
Comments::create($parameters);
$comments=Comments::all();

return view('comments')->with('comments', $comments);

}

public function getCommentsJson()
{
$comments=Comments::all();

return view('comments')->with('comments', $comments);

return response()->json( $comments);

}
}

