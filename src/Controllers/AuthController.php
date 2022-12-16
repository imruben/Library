<?php

namespace App\Controllers;
  use App\Controller;
  use App\Request;
  use App\Sessions;

final class AuthController
{
    public function index(){
        //$titol ="DAW"
          return view('auth');
        }
    function signin(){
        //capturar elements de POST
        $email=$this->request->post('email');
        $passwd=$this->request->post('passwd');
        //crida al mètode privat d'autenticació
        $this->auth($email,$passwd);
    }
    
    private function auth(string $email, string $passwd){
        $password=password_hash($passwd,PASSWORD_BCRYPT,['cost'=>4]);
        $result = $this->qb->select(['email','passwd'])->from('usuaris')->where(['email'=>$email])->limit(1)->exec()->fetch();
        if($result){
        $this->redirect("dashboard");
        }else{
        $this->session->set('error',"Sessión fallida")
        $this->redirect("/auth");
        }
    }
        public function prueba(){
        echo "Prueba - HomeController";
        }
}
