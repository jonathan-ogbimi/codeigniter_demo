<?php

namespace App\Controllers;

use App\Models\Asset;
//use CodeIgniter\BaseController;
class AssetController extends BaseController
{
    // show Assets list
    public function index()
    {

        $asset = new Asset();
        $data['assets'] = $asset->orderBy('id', 'DESC')->findAll();
        return view('templates/header', $data)
            . view('assets/asset_view', $data)
            . view('templates/footer');
        //return view('assets/asset_view', $data);
    }
    // add Asset form
    public function create()
    {
        return view('templates/header')
            . view('assets/add_asset')
            . view('templates/footer');
        //return view('assets/add_asset');
    }

    // insert data
    public function store()
    {
        $asset = new Asset();
        $data = [
            'name' => $this->request->getVar('name'),
            'description'  => $this->request->getVar('description'),
        ];
        $asset->insert($data);
        return $this->response->redirect(site_url('/assets'));
    }


    public function create_asset()
    {
        $json_request = json_decode(file_get_contents("php://input"), true);
        $asset = new Asset();
       
        $asset->insert($json_request);
        $result = [];
        return $this->response->setJSON($json_request);
    }
    // show single Asset
    public function singleAsset($id = null)
    {
        $asset = new Asset();
        $data['asset_obj'] = $asset->where('id', $id)->first();
        return view('templates/header', $data)
            . view('assets/edit_asset', $data)
            . view('templates/footer');
        //return view('assets/edit_asset', $data);
    }
    // update Asset data
    public function update()
    {
        $asset = new Asset();
        $id = $this->request->getVar('id');
        $post = array();
        foreach ($_POST as $key => $value) {
            $post[$key] = $this->request->getVar($key);
        }
        $asset->update($id, $post);
        return $this->response->redirect(site_url('/assets'));
    }

    public function update_asset()
    {
        $asset = new Asset();
        $json_request = json_decode(file_get_contents("php://input"), true);
        $id = $json_request["id"];
        $asset->update($id, $json_request);
        return $this->response->setJSON($json_request);
        //return $this->response->redirect(site_url('/assets'));
    }

    // delete Asset
    public function delete($id = null)
    {
        $asset = new Asset();
        $data['asset'] = $asset->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/assets'));
    }
}
