<?php

namespace App\Controllers;

use App\Models\Minuman;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class MinumanController extends ResourceController
{
    protected $modelName = 'App/Models/Minuman';
    protected $format    = 'json';
    
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use ResponseTrait;

    public function menu()
    {
       
        return $this->respond([
            'message' => 'Silahkan Ambil Data'
            
            
        ]);
    }

    public function index()
    {
        $minuman = new Minuman();

        $data = new $minuman();
        $data=$minuman->orderBy('id')->findAll();
        return $this->respond([
            'status' => 1,
            'data' => $data
            
            
        ]);
    }
    
    public function make() 
    {
        $minuman = new Minuman();
        $data=[
            'id'=>$this->request->getVar('id'),
            'nama'=>$this->request->getVar('nama'),
            'deskripsi'=>$this->request->getVar('deskripsi'),
            'gambar'=>$this->request->getVar('gambar'),
            'harga'=>$this->request->getVar('harga'),
            'kategori'=>$this->request->getVar('kategori'),
            'ukuran'=>$this->request->getVar('ukuran'),
            'merek'=>$this->request->getVar('merek'),
            'abv'=>$this->request->getVar('abv')
        ];
        $result = $minuman->save($data);
        if ($result) {
            return $this->respond([
                'status' => 1,
                'message' => 'berhasil menambahkan'
            ]);
        } else {
            return$this->respond([
                'status' => 0,
                'message' =>'gagal menambahkan'
            ]);
        }
    }
    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function share($id)
    {
        $minuman=new minuman();

        $data=$minuman->find($id);
        if ($data) {
            return $this->respond([
                'status' => 1,
                'message' => $data
            ]);
        } else {
            return$this->respond([
                'status' => 0,
                'message' => 'gagal (ID tidak ditemukan)'
            ]);
        }
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $minuman = new Minuman();
        $data=[
            'id'=>$this->request->getVar('id'),
            'nama'=>$this->request->getVar('nama'),
            'deskripsi'=>$this->request->getVar('deskripsi'),
            'gambar'=>$this->request->getVar('gambar'),
            'harga'=>$this->request->getVar('harga'),
            'kategori'=>$this->request->getVar('kategori'),
            'ukuran'=>$this->request->getVar('ukuran'),
            'merek'=>$this->request->getVar('merek'),
            'abv'=>$this->request->getVar('abv')
        ];

        $result=$minuman->update($id,$data);
        if ($data) {
            return $this->respond([
                'status' => 1,
                'message' => 'minuman berhasil di-Update'
            ]);
        } else {
            return$this->respond([
                'status' => 0,
                'message' => 'minuman gagal di-Update '
            ]);
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $minuman = new minuman ();
        $data=$minuman->delete($id);
        if ($data) {
            return $this->respond([
                'status' => 1,
                'message' => 'minuman berhasil di-Hapus'
            ]);
        } else {
            return$this->respond([
                'status' => 0,
                'message' => 'minuman gagal di-Hapus '
            ]);
        }
    }
}
