<?php

namespace App\Controllers;

use App\Models\CheckoutUsersModel;

class Slip extends BaseController
{
    public function slippembayaran()
    {
        return view('toko/invoice');
    }

    public function process()
    {
        $checkoutusers = new CheckoutUsersModel();
        $namapanggilan = $this->request->getVar('namapanggilan');
        $namaasli = $this->request->getVar('namaasli');
        $password = $this->request->getVar('password');
        $email = $this->request->getVar('email');
        $banyak_barang = $this->request->getVar('banyak_barang');
        $alamat_pelanggan = $this->request->getVar('alamat_pelanggan');

        $dataCheckoutUsers = $checkoutusers->where([
            'namapanggilan' => $namapanggilan,
            'namaasli' => $namaasli,
            'email' => $email,
            'banyak_barang' => $banyak_barang,
            'alamat_pelanggan' => $alamat_pelanggan,
        ])->first();
        if ($dataCheckoutUsers) {
            if (password_verify($password, $dataCheckoutUsers->password)) {
                session()->set([
                    'namapanggilan' => $dataCheckoutUsers->namapanggilan,
                    'namaasli' => $dataCheckoutUsers->namaasli,
                    'email' => $dataCheckoutUsers->email,
                    'banyak_barang' => $dataCheckoutUsers->banyak_barang,
                    'alamat_pelanggan' => $dataCheckoutUsers->alamat_pelanggan,

                ]);
                return redirect()->to(base_url('toko/invoice'));
            } else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }
}