<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Product; 

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all products
        $products = Product::latest()->paginate(10);

        //render view with products
        return view('products.index', compact('products'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'          => 'required|min:1',
            'alamat'        => 'required|min:10',
            'tempatlahir'   => 'required|min:1',
            'tanggallahir'  => 'required|date|date_format:Y-m-d',
            'jeniskelamin'  => 'required|in:Laki-laki,Perempuan',
            'jabatan'       => 'required|min:1',
            'job'           => 'required|min:1',
            'masukkerja'    => 'required|date|date_format:Y-m-d'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        //create product
        Product::create([
            'image'         => $image->hashName(),
            'nama'          => $request->nama,
            'alamat'        => $request->alamat,
            'tempatlahir'   => $request->tempatlahir,
            'tanggallahir'  => $request->tanggallahir,
            'jeniskelamin'  => $request->jeniskelamin,
            'jabatan'       => $request->jabatan,
            'job'           => $request->job,
            'masukkerja'    => $request->masukkerja
        ]);

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get product by ID
        $product = Product::findOrFail($id);

        //render view with product
        return view('products.show', compact('product'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get product by ID
        $product = Product::findOrFail($id);

        //render view with product
        return view('products.edit', compact('product'));
    }
        
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'nama'          => 'required|min:1',
            'alamat'        => 'required|min:10',
            'tempatlahir'   => 'required|min:1',
            'tanggallahir'  => 'required|date|date_format:Y-m-d',
            'jeniskelamin'  => 'required|in:Laki-laki,Perempuan',
            'jabatan'       => 'required|min:1',
            'job'           => 'required|min:1',
            'masukkerja'    => 'required|date|date_format:Y-m-d'
        ]);

        //get product by ID
        $product = Product::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/products', $image->hashName());

            //update product with new image
            $product->update([
            'image'         => $image->hashName(),
            'nama'          => $request->nama,
            'alamat'        => $request->alamat,
            'tempatlahir'   => $request->tempatlahir,
            'tanggallahir'  => $request->tanggallahir,
            'jeniskelamin'  => $request->jeniskelamin,
            'jabatan'       => $request->jabatan,
            'job'           => $request->job,
            'masukkerja'    => $request->masukkerja
            ]);

        } else {

            //update product without image
            $product->update([
            'nama'          => $request->nama,
            'alamat'        => $request->alamat,
            'tempatlahir'   => $request->tempatlahir,
            'tanggallahir'  => $request->tanggallahir,
            'jeniskelamin'  => $request->jeniskelamin,
            'jabatan'       => $request->jabatan,
            'job'           => $request->job,
            'masukkerja'    => $request->masukkerja
            ]);
        }

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        //get product by ID
        $product = Product::findOrFail($id);

        //delete image

        //delete product
        $product->delete();

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}