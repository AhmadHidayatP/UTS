<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriModel;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\IOFactory; 
use PDF;
class KategoriController extends Controller
{

    public function index()
    {
        // $data = [
        //     'kategori_kode' => 'SNK',
        //     'kategori_nama' => 'Snack/Makanan Ringan',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert data baru berhasil';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
        // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
        // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

        // $data = DB::table('m_kategori')->get();
        // return view('Pertemuan3.kategori', ['data' => $data]);
        $breadcrumb = (object) [
            'title' => 'Daftar Kategori',
            'list' => ['Home', 'Kategori']
        ];

        $page = (object) [
            'title' => 'Daftar kategori yang terdaftar dalam sistem'
        ];

        $activeMenu = 'kategori'; // set menu yang sedang aktif

        // $kategori = kategoriModel::all(); // ambil data kategori untuk filter kategori
        return view('kategori.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    // Ambil data kategori dalam bentuk json untuk datatables
    // 

    // Menampilkan halaman form tambah kategori 
    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Kategori',
            'list' => ['Home', 'Kategori', 'Tambah']
        ];
        $page = (object) [
            'title' => 'Tambah kategori baru'
        ];
        $activeMenu = 'kategori'; // set menu yang sedang aktif
        return view('kategori.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }
    // Menyimpan data kategori baru
    public function store(Request $request)
    {
        $request->validate([

            'kategori_kode' => 'required|string|min:3|max:10|unique:m_kategori,kategori_kode', // kategori_kode harus diisi, berupa string, minimal 3 karakter, maks 10 dan bernilai unik
            'kategori_nama' => 'required|string|max:100' //nama harus diisi, berupa string, dan maksimal 100 karakter
        ]);
        KategoriModel::create([
            'kategori_kode'  => $request->kategori_kode,
            'kategori_nama'  => $request->kategori_nama
        ]);
        return redirect('/kategori')->with('success', 'Data kategori berhasil disimpan');
    }
    // Menampilkan detail user
    public function show(string $id)
    {
        $kategori = KategoriModel::find($id);
        $breadcrumb = (object) ['title' => 'Detail Kategori', 'list' => ['Home', 'Kategori', 'Detail']];
        $page = (object) ['title' => 'Detail Kategori'];
        $activeMenu = 'kategori'; // set menu yang sedang aktif
        return view('kategori.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori, 'activeMenu' => $activeMenu]);
    }
    // Menampilkan halaman fore edit kategori 
    public function edit(string $id)
    {
        $kategori = KategoriModel::find($id);
        $breadcrumb = (object) [
            'title' => 'Edit Kategori',
            'list' => ['Home', 'Kategori', 'Edit']
        ];
        $page = (object) [
            "title" => 'Edit Kategori'
        ];
        $activeMenu = 'kategori'; // set menu yang sedang aktif
        return view('kategori.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori, 'activeMenu' => $activeMenu]);
    }
    // Menyimpan perubahan data user
    public function update(Request $request, string $id)
    {
        $request->validate([
            // username harus diisi, berupa string, minimal 3 karakter,
            // dan bernilai unik di tabel_kategori kolom username kecuali untuk kategori dengan id yang sedang diedit
            'kategori_kode' => 'required|string|min:3|max:10|unique:m_kategori,kategori_kode,' . $id . ',kategori_id',
            'kategori_nama' => 'required|string|max:100' // nama harus diisi, berupa string, dan maksimal 100 karakter
        ]);
        kategoriModel::find($id)->update([
            'kategori_kode'  => $request->kategori_kode,
            'kategori_nama'  => $request->kategori_nama
        ]);
        return redirect('/kategori')->with("success", "Data kategori berhasil diubah");
    }
    // Menghapus data kategori
    public function destroy(string $id)
    {
        $check = KategoriModel::find($id);
        if (!$check) {      // untuk mengecek apakah data kategori dengan id yang dimaksud ada atau tidak
            return redirect('/kategori')->with('error', 'Data kategori tidak ditemukan');
        }
        try {
            KategoriModel::destroy($id); // Hapus data kategori
            return redirect('/kategori')->with('success', 'Data kategori berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            // Jika terjadi error ketika menghapus data, redirect kembali ke halaman dengan membawa pesan error
            return redirect('/kategori')->with('error', 'Data kategori gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }

    public function create_ajax()
    {
        return view('kategori.create_ajax');
    }

    public function store_ajax(Request $request)
    {
        // cek apakah request berupa ajax
        if ($request->ajax() || $request->wantsJson()) {
            $rules = [
                'kategori_kode'    => 'required|string|min:3|unique:m_kategori,kategori_kode',
                'kategori_nama'    => 'required|string|max:100',
            ];
            // use Illuminate\Support\Facades\Validator;
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status'    => false, // response status, false: error/gagal, true: berhasil
                    'message'   => 'Validasi Gagal',
                    'msgField'  => $validator->errors(), // pesan error validasi
                ]);
            }
            KategoriModel::create($request->all());
            return response()->json([
                'status'    => true,
                'message'   => 'Data kategori berhasil disimpan'
            ]);
        }
        redirect('/');
    }


    // Ambil data user dalam bentuk json untuk datatables 
    public function list(Request $request)
{
    $kategori = KategoriModel::select('kategori_id', 'kategori_kode', 'kategori_nama');
    
    return DataTables::of($kategori)
        ->addIndexColumn() // Adds index column (DT_RowIndex)
        ->addColumn('aksi', function ($kategori) { // Adds action buttons
            $btn = ''; // Initialize $btn as an empty string
            $btn .= '<button onclick="modalAction(\'' . url('/kategori/' . $kategori->kategori_id . '/show_ajax') . '\')" class="btn btn-info btn-sm">Detail</button> ';
            $btn .= '<button onclick="modalAction(\'' . url('/kategori/' . $kategori->kategori_id . '/edit_ajax') . '\')" class="btn btn-warning btn-sm">Edit</button> ';
            $btn .= '<button onclick="modalAction(\'' . url('/kategori/' . $kategori->kategori_id . '/delete_ajax') . '\')" class="btn btn-danger btn-sm">Hapus</button> ';
            return $btn; // Return the buttons
        })
        ->rawColumns(['aksi']) // Notify DataTables that 'aksi' contains raw HTML
        ->make(true);
}

    // Menampilkan halaman form edit user ajax
    public function edit_ajax(string $id)
    {
        $kategori = KategoriModel::find($id);
        return view('kategori.edit_ajax', ['kategori' => $kategori]);
    }

    public function update_ajax(Request $request, $id)
    {
        // cek apakah request dari ajax
        if ($request->ajax() || $request->wantsJson()) {
            $rules = [
                'kategori_kode' => 'required|max:20|unique:m_kategori,kategori_kode,' . $id . ',kategori_id',
                'kategori_nama' => 'required|max:100'
            ];
            // use Illuminate\Support\Facades\Validator;
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => false, // respon json, true: berhasil, false: gagal
                    'message' => 'Validasi gagal.',
                    'msgField' => $validator->errors() // menunjukkan field mana yang error
                ]);
            }
            $check = KategoriModel::find($id);
            if ($check) {
                $check->update($request->all());
                return response()->json([
                    'status' => true,
                    'message' => 'Data berhasil diupdate'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ]);
            }
        }
        return redirect('/');
    }

    public function confirm_ajax(string $id)
    {
        $kategori = KategoriModel::find($id);
        return view('kategori.confirm_ajax', ['kategori' => $kategori]);
    }

    public function delete_ajax(Request $request, $id)
    {
        // cek apakah request dari ajax
        if ($request->ajax() || $request->wantsJson()) {
            $kategori = KategoriModel::find($id);
            if ($kategori) {
                $kategori->delete();
                return response()->json([
                    'status' => true,
                    'message' => 'Data berhasil dihapus'
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Data tidak ditemukan'
                ]);
            }
        }
        return redirect('/');
    }
    public function export_excel()
    {
        $kategori = KategoriModel::select('kategori_id', 'kategori_kode', 'kategori_nama')  
            ->orderBy('kategori_id')        
            ->get();
            
            $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setCellValue('A1', 'No');
            $sheet->setCellValue('B1', 'Kode Kategori');
            $sheet->setCellValue('C1', 'Nama Kategori');

            $sheet->getStyle('A1:C1')->getFont()->setBold(true);

            $no = 1;
            // nomor data dimulai dari 1
            $baris = 2;
            // baris data dimulai dari baris ke 2
            foreach ($kategori as $key => $value) {
                $sheet->setCellValue('A'.$baris, $no);
                $sheet->setCellValue('B'.$baris, $value->kategori_kode);
                $sheet->setCellValue('C'.$baris, $value->kategori_nama);
                $baris++;
                $no++;
            }
            foreach (range('A', 'C') as $columnID) {
                $sheet->getColumnDimension($columnID)->setAutoSize(true);
            }
            $sheet->setTitle('Data Kategori'); 
            $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
            $filename = 'Data Kategori '.date('Y-m-d H:i:s').'.xlsx';

            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="'.$filename.'"');
            header('Cache-Control: cache, must-revalidate');
            header('Pragma: public');
            $writer->save('php://output');
            exit;
    } 
    public function export_pdf()
    {
        $kategori = KategoriModel::select('kategori_id', 'kategori_kode', 'kategori_nama')
        ->orderBy('kategori_id') ->orderBy('kategori_kode')
        ->get();

        $pdf = Pdf::loadView('kategori.export_pdf', ['kategori' => $kategori]);
        $pdf->setPaper ('a4', 'portrait'); // set ukuran kertas dan orientasi
        $pdf->setOption("isRemoteEnabled", true); // set true jika ada gambar dari url $pdf->render();
        return $pdf->stream ('Data Kategori '.date('Y-m-d H:i:s').'.pdf');
    }
    public function show_ajax(string $id)
    {
        // Cari kategori berdasarkan id
        $kategori = KategoriModel::find($id);

        // Periksa apakah kategori ditemukan
        if ($kategori) {
            // Tampilkan halaman show_ajax dengan data kategori
            return view('kategori.show_ajax', ['kategori' => $kategori]);
        } else {
            // Tampilkan pesan kesalahan jika kategori tidak ditemukan
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan'
            ]);
        }
    }
}