<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\pengunjung;
use Illuminate\Support\Facades\Session;


class pengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if (strlen($katakunci)){
            $data = pengunjung::where('pengunjung','like', "%$katakunci%")
            ->orWhere('bulan','like', "%$katakunci%")
            ->paginate($jumlahbaris);
            
        }else {
            $data = pengunjung::orderBy('pengunjung', 'desc')->paginate($jumlahbaris);
        }
        $data = pengunjung::orderBy('pengunjung', 'desc')->paginate(10);
        return view('admin.data-pengunjung')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('pengunjung',$request->penunjung);
        Session::flash('bulan',$request->bulan);
        $request->validate([
            'pengunjung' => 'required|numeric',
            'bulan' => 'required',
        ],[
            'pengunjung.required' => 'Kolom pengunjung wajib diisi',
            'pengunjung.numeric' => 'Kolom pengunjung wajib diisi dengan angka',
            'bulan.required' => 'Kolom bulan wajib diisi',
        ]);
        $data = [
            'pengunjung'=>$request->pengunjung,
            'bulan'=>$request->bulan,
        ];
        pengunjung::create($data);
        return redirect()->to('pengunjung')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = pengunjung::where('pengunjung',$id)->first();
        return view('admin.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pengunjung' => 'required|numeric',
            'bulan' => 'required',
        ],[
            'pengunjung.required' => 'Kolom pengunjung wajib diisi',
            'pengunjung.numeric' => 'Kolom pengunjung wajib diisi dengan angka',
            'bulan.required' => 'Kolom bulan wajib diisi',
        ]);
        $data = [
            'pengunjung'=>$request->pengunjung,
            'bulan'=>$request->bulan,
        ];
        pengunjung::where('pengunjung',$id)->update($data);
        return redirect()->to('pengunjung')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengunjung::where('pengunjung', $id)->delete();
        return redirect()->to('pengunjung')->with('success','Berhasil melakukan delete data');
    }
}
