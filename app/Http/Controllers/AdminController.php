<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
      protected $admin;
      public function __construct(Admin $admin){
          $this->admin = $admin;
      }
      public function index(){
        $clients= $this->admin->getAllClient();
        $products= $this->admin->getAllProduct();
        return view('admin.list',compact('clients','products'));

    }
     
}
