<?php

  namespace App;
  use App\Controller;
  use App\Request;
  use App\Session;

    final class DashboardController extends Controller{
      function __construct(Request $request, Session $session){
        parent::__construct($request,$session);
      }
      public function index(){
        $cataleg=$this->qb->select(*)->from('llibres')->exec();
        return view('dashboard', ['cataleg'=>$cataleg]);
        //render vista home
      }
    }
