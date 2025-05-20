<?php

namespace App\Controllers;
use App\Models\ParkModel;

class Home extends BaseController
{
    public function index(): string
    {
        // connect to the database
        $db = db_connect();

        // new park model created
        $model = new ParkModel;

        // return all parks
        $data = $model->findAll();

        // pass the data to the view
        return view('home', ['parks' => $data, 'active' => 'Home']);
    }
    public function show($id): string
    {
        //show single park
        $model = new ParkModel;
        $park = $model->find($id);
        // dd($park);
        return view('show', ['park' => $park, 'active' => '']);
    }
    public function new()
    {
        // show the form to create a new park
        return view('new', ['active' => 'New']);
    }
    public function add()
    {
        $park = $this->request->getPost(['item', 'description', 'image']);
        // dd($park);

        //establish model
        $model = new ParkModel;

        // insert the park into the database
        $model->insert($park);

        // get new park id and pull data
        $parkId = $model->insertID();
        $newPark = $model->find($parkId);

        return view('show', ['park' => $newPark, 'active' => 'New Park']);
    }
}