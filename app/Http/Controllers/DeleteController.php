<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogDelete;
class DeleteController extends Controller
{
  public function delete($id){
    $data = BlogDelete::find($id);
    $data->delete();
    return redirect('/admin');
  }
}
