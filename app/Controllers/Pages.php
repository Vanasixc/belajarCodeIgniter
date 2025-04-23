<?php

namespace App\Controllers;

class Pages extends BaseController
{
    // public function form($id)
    // {
    //     $data = [
    //         "id"=> $id,
    //     ];
    //     return view('form', $data);
    // }

    //method untuk memanggil pages

    public function getHome()
    {
        $pages = [
            "title" => "Home",
        ];

        return view('pages/home', $pages);
    }

    public function getWelcome()
    {
        return view('welcome_message');
    }

    public function getForm()
    {
        $pages = [
            "title" => "Form",
            "pageinfo" => "Form",
            "description" => "Ini adalah halaman form",
        ];

        return view('pages/form', $pages);
    }

    public function getLogin()
    {
        $pages = [
            "title" => "Login",
            "pageinfo" => "Login",
            "description" => "Ini adalah halaman login",
        ];

        return view('pages/login', $pages);
    }

    //method kirim data
    public function postKirim()
    {
        $kata = $this->request->getPost('input');

        $pages = [
            "title" => "Form",
            "pageinfo" => "Form",
            "description" => "Ini adalah halaman form",
        ];
        $data = [
            "getData" => $kata,
        ];

        $result = array_merge($pages, $data);

        return view("pages/form", $result);
    }

    public function getCoba()
    {
        echo "<h1>Hello World</h1>";
    }

    public function postLogin()
    {

        $rules = [
            'user' => ['label' => 'user', 'rules' => 'required'],
            'pass' => ['label' => 'pass', 'rules' => 'required']
        ];
        $validation = service('validation');
        $validation->setRules($rules);
        if (!$validation->withRequest($this->request)->run()) {
            // masuk ke if arti validasi gagal
            echo "validasi gagal";
            return;
        }
        echo "validasi sukses";
    }
}

