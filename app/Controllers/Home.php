<?php

namespace App\Controllers;

use App\Models\CardaniaModel;
use CodeIgniter\HTTP\Files\UploadedFile;

class Home extends BaseController
{
    // ketentuan untuk mengkoneksikan dengan database
    protected $Cardania;
    protected $mRequest;
    public function __construct()
    {
        $this->CardaniaAdminData = new CardaniaModel();
        $this->mRequest = service("request");
    }




    public function index()
    {
        return view('index');
    }

    public function admin()
    {
        return view('admin');
    }
    public function home()
    {
        $data = [
            'tb_home' => $this->CardaniaAdminData->getSlideData()
        ];
        return view('admin/content/home', $data);
    }
    public function dashboard()
    {
        return view('admin/content/dashboard');
    }
    public function aboutus()
    {
        return view('admin/content/aboutus');
    }
    public function product()
    {
        return view('admin/content/product');
    }
    public function contact()
    {
        return view('admin/content/contact');
    }
    public function value()
    {
        return view('admin/content/value');
    }

    public function detail($slug)
    {

        $data = [
            'tittle' => 'Detail Slide',
            'tb_home' => $this->CardaniaAdminData->getSlideData($slug)
        ];

        //jika siswa tidak ada dimasukkan nama secara manual
        if (empty($data['tb_home'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Siswa ' . $slug . ' Tidak ada');
        };

        return view('admin/action/detail', $data);
    }
}
