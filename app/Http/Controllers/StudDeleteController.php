<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class StudDeleteController extends Controller {
public function index(){
$users = DB::select('select * from abouts');
return view('delete.stud_delete_view',['users'=>$users]);
}
public function destroy($id) {
DB::delete('delete from abouts where id = ?',[$id]);
echo "Record deleted successfully.";
}
}