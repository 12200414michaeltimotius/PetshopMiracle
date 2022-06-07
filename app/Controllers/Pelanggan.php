<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class Pelanggan extends BaseController
{
    protected $pelanggan;

    function __construct()
    {
        $this->pelanggan = new PelangganModel();
    }

    public function daftarpelanggan()
    {
        $data['pelanggan'] = $this->pelanggan->findAll();
        return view('pelanggan/daftarpelanggan', $data);
    }
    public function create()
    {
        return view('pelanggan/create');
    }
    public function store()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->pelanggan->insert([
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('message', 'Tambah Data Pelanggan Berhasil');
        return redirect()->to('/daftarpelanggan');
    }
    function edit($id)
    {
        $datapelanggan = $this->pelanggan->find($id);
        if (empty($datapelanggan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pelanggan Tidak ditemukan !');
        }
        $data['pelanggan'] = $datapelanggan;
        return view('pelanggan/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'no_telp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Email Harus Valid'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->pelanggan->update($id, [
            'nama' => $this->request->getVar('nama'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'no_telp' => $this->request->getVar('no_telp'),
            'email' => $this->request->getVar('email'),
            'alamat' => $this->request->getVar('alamat')
        ]);
        session()->setFlashdata('message', 'Update Data Pelanggan Berhasil!');
        return redirect()->to('/daftarpelanggan');
    }
    function delete($id)
    {
        $datapelanggan = $this->pelanggan->find($id);
        if (empty($datapelanggan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Pelanggan Tidak ditemukan !');
        }
        $this->pelanggan->delete($id);
        session()->setFlashdata('message', 'Delete Data Pelanggan Berhasil');
        return redirect()->to('/daftarpelanggan');
    }
}