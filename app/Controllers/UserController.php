<?php

namespace App\Controllers;

use App\Models\User;
//use CodeIgniter\BaseController;
class UserController extends BaseController
{
    // show users list
    public function index()
    {
        #return 'Users page';
        $user = new User();
        $data['users'] = $user->orderBy('id', 'DESC')->findAll();
        return view('users/user_view', $data);
    }
    // add user form
    public function create()
    {
        return view('users/add_user');
    }

    // insert data
    public function store()
    {
        $user = new User();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            'passwd'  => md5($this->request->getVar('passwd')),
        ];
        $user->insert($data);
        return $this->response->redirect(site_url('/users'));
    }
    // show single user
    public function singleUser($id = null)
    {
        $user = new User();
        $data['user_obj'] = $user->where('id', $id)->first();
        return view('users/edit_user', $data);
    }
    // update user data
    public function update()
    {
        $user = new User();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $user->update($id, $data);
        return $this->response->redirect(site_url('/users'));
    }

    // delete user
    public function delete($id = null)
    {
        $user = new User();
        $data['user'] = $user->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/users'));
    }
}
