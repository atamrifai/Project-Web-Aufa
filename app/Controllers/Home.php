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
            'home1' => $this->CardaniaAdminData->getSlideData(1),
            'home2' => $this->CardaniaAdminData->getSlideData(2),
            'home3' => $this->CardaniaAdminData->getSlideData(3)
        ];
        return view('admin/content/home', $data);
    }

    public function homeupdate($id)
    {
        // $homelama = $this->CardaniaAdminData->getSlideData($this->mRequest->getVar(1));
        // //cek kondisi apakah kosong atau tidak
        // // if ($homelama['title_slide'] == $this->mRequest->getVar('title_slide')) {
        // //     $rule_title = 'required';
        // // }

        // // if (!$this->validate([
        // //     'nama' => [
        // //         'rules' => $rule_title,
        // //         'errors' => [
        // //             'required' => '{field} nama siswa harus diisi'
        // //         ]
        // //     ],
        // //     'foto' => [
        // //         'rules' => 'max_size[foto,5024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
        // //         'errors' => [
        // //             'max_size' => 'ukuran foto terlalu besar',
        // //             'is_image' => 'file ini bukan gambar',
        // //             'mime_in' => 'yang anda pilih bukan gambar'
        // //         ]

        // //     ]
        // // ]))
        $filepictureslide = $this->mRequest->getFile('picture_slide');
        //cek gambar, apakah tetap gambar yang lama
        if ($filepictureslide->getError() == 4) {
            $picturename = $this->mRequest->getVar('old_picture_slide');
        } else {
            //genenrate nama random
            $picturename = $filepictureslide->renamed;
            //pindah ke img
            $filepictureslide->move('public/images', $picturename);
            //menghapus yang lama
            unlink('public/images/' . $this->mRequest->getVar('old_picture_slide'));
        }

        $this->CardaniaAdminData->save([
            'id' => $id,
            'title_slide' => $this->mRequest->getVar('title_slide'),
            'sub_title_slide' => $this->mRequest->getVar('sub_title_slide'),
            'picture_slide' => $picturename
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah.');
        return redirect()->to('/4543523');
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
