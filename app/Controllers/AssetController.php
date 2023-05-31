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
        return view('assets/asset_view', $data);
    }
    // add Asset form
    public function create()
    {
        return view('assets/add_asset');
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
    // show single Asset
    public function singleAsset($id = null)
    {
        $Asset = new Asset();
        $data['asset_obj'] = $Asset->where('id', $id)->first();
        return view('assets/edit_asset', $data);
    }
    // update Asset data
    public function update()
    {
        $asset = new Asset();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'description'  => $this->request->getVar('description'),
        ];
        $asset->update($id, $data);
        return $this->response->redirect(site_url('/assets'));
    }

    // delete Asset
    public function delete($id = null)
    {
        $asset = new Asset();
        $data['asset'] = $asset->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/assets'));
    }
}
