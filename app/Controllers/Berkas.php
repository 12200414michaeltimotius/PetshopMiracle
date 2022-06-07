<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BerkasModel;

class Berkas extends BaseController
{
    protected $berkas;

    function __construct()
    {
        $this->berkas = new BerkasModel();
    }
    public function index()
    {
        $berkas = new BerkasModel();
        $data['berkas'] = $berkas->findAll();
        return view('view_berkas', $data);
    }

    public function upload()
    {
        return view('form_upload');
    }

    public function save()
    {
        if (!$this->validate([
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak boleh kosong'
                ]
            ],
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,image/jpg,image/jpeg,image/gif,image/png]|max_size[berkas,2048]',
                'errors' => [
                    'uploaded' => 'Harus Ada File yang diupload',
                    'mime_in' => 'File Extention Harus Berupa jpg,jpeg,gif,png',
                    'max_size' => 'Ukuran File Maksimal 2 MB'
                ]

            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $berkas = new BerkasModel();
        $dataBerkas = $this->request->getFile('berkas');
        $fileName = $dataBerkas->getRandomName();
        $berkas->insert([
            'berkas' => $fileName,
            'keterangan' => $this->request->getPost('keterangan')
        ]);
        $dataBerkas->move('uploads/berkas/', $fileName);
        session()->setFlashdata('success', 'Produk Sukses di Upload');
        return redirect()->to(base_url('berkas'));
    }
    function download($id)
    {
        $berkas = new BerkasModel();
        $data = $berkas->find($id);
        return $this->response->download('uploads/berkas/' . $data->berkas, null);
    }
    function edit($id)
    {
        $dataBerkas = $this->berkas->find($id);
        if (empty($dataBerkas)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tidak ditemukan !');
        }
        $data['berkas'] = $dataBerkas;
        return view('toko/editproduk', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'berkas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ]


        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->berkas->update($id, [
            'berkas' => $this->request->getVar('berkas'),
            'keterangan' => $this->request->getVar('keterangan'),

        ]);
        session()->setFlashdata('message', 'Update Data Produk Berhasil');
        return redirect()->to('/view_berkas');
    }
    function delete($id)
    {
        $dataBerkas = $this->berkas->find($id);
        if (empty($dataBerkas)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Produk Tidak ditemukan !');
        }
        $this->berkas->delete($id);
        session()->setFlashdata('message', 'Delete Data Produk Berhasil');
        return redirect()->to('/berkas');
    }
}