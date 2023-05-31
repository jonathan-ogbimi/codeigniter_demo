<?php 
namespace App\Controllers;  
use App\Models\User;
  
class SigninController extends BaseController
{
    public function index()
    {
        helper(['form']);
        echo view('users/signin');
    } 

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
  
    public function loginAuth()
    {
        $session = session();
        $User = new User();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        
        $data = $User->where('email', $email)->first();
        
        if($data){
            $pass = $data['passwd'];
            $authenticatePassword = (md5($password) == $pass)? true : false;
            //password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/assets');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/');
        }
    }
}