<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use Auth;
use File;

use App\User;
use App\Kandidat;
use App\Pemilih;
use App\Voting;

class AdminController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    {
        $pengguna = User::count();
        $pemilih = Pemilih::count();
        $kandidat = Kandidat::count();
        
        $belum = DB::table('pemilih')->whereNotIn('id', function($q){
            $q->select('pemilih_id')->from('voting');
        })->count();

        $sudah = DB::table('pemilih')->whereIn('id', function($q){
            $q->select('pemilih_id')->from('voting');
        })->count();
        
        return view('admin.home', ['jumlah_pengguna' => $pengguna, 'jumlah_pemilih' => $pemilih,
        'jumlah_kandidat' => $kandidat, 'jumlah_sudah' => $sudah, 'jumlah_belum' => $belum]);
    }

    public function password()
    {
        return view('admin.password');
    }

    public function password_aksi(Request $request)
    {
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:5|confirmed',
            'new-password_confirmation' => 'required',
        ]);

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
        // The passwords matches
            return redirect()->back()->with("error","Password lama tidak sesuai. Coba lagi.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
        // Current password and new password are same
            return redirect()->back()->with("error","Password baru tidak boleh sama dengan password lama.");
        }

        // Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password telah diganti!");

    }


    public function kandidat()
    {
        $kandidat = Kandidat::all();
        return view('admin.kandidat', ['kandidat' => $kandidat]);
    }

    public function kandidat_add()
    {
        return view('admin.kandidat_tambah');
    }

    public function kandidat_aksi(Request $request)
    {
        $this->validate($request,[
            'kode' => 'required|unique:kandidat',
            'nama_ketua' => 'required',
            'tentang_ketua' => 'required',
            'foto_ketua' => 'image|mimes:jpeg,png,jpg|max:2048',
            'nama_wakil' => 'required',
            'tentang_wakil' => 'required',
            'foto_wakil' => 'image|mimes:jpeg,png,jpg|max:2048',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $file_ketua = $request->file('foto_ketua');
        $file_wakil = $request->file('foto_wakil');

        if($file_ketua != ""){
            $nama_file_ketua = time()."_".$file_ketua->getClientOriginalName();
            $tujuan = "gambar/kandidat";
            $file_ketua->move($tujuan,$nama_file_ketua);
        }else{
            $nama_file_ketua = "";
        }

        if($file_wakil != ""){
            $nama_file_wakil = time()."_".$file_wakil->getClientOriginalName();
            $tujuan = "gambar/kandidat";
            $file_wakil->move($tujuan,$nama_file_wakil);
        }else{
            $nama_file_wakil = "";
        }

        Kandidat::create([
            'kode' => $request->kode,
            'nama_ketua' => $request->nama_ketua,
            'tentang_ketua' => $request->tentang_ketua,
            'foto_ketua' => $nama_file_ketua,
            'nama_wakil' => $request->nama_wakil,
            'tentang_wakil' => $request->tentang_wakil,
            'foto_wakil' => $nama_file_wakil,
            'visi' => $request->visi,
            'misi' => $request->misi
        ]);

        return redirect(route('kandidat'))->with('success','Kandidat telah tersimpan!');
    }

    public function kandidat_edit($id)
    {
        $kandidat = Kandidat::find($id);
        return view('admin.kandidat_edit', ['kandidat' => $kandidat]);
    }


    public function kandidat_update($id, Request $request)
    {
        $this->validate($request,[
            'kode' => 'required|unique:kandidat,kode,'.$id,
            'nama_ketua' => 'required',
            'tentang_ketua' => 'required',
            'foto_ketua' => 'image|mimes:jpeg,png,jpg|max:2048',
            'nama_wakil' => 'required',
            'tentang_wakil' => 'required',
            'foto_wakil' => 'image|mimes:jpeg,png,jpg|max:2048',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $kode = $request->input('kode');
        $nama_ketua = $request->input('nama_ketua');
        $tentang_ketua = $request->input('tentang_ketua');
        $nama_wakil = $request->input('nama_wakil');
        $tentang_wakil = $request->input('tentang_wakil');
        $visi = $request->input('visi');
        $misi = $request->input('misi');


        $kandidat = Kandidat::find($id);
        $kandidat->kode = $kode;
        $kandidat->nama_ketua = $nama_ketua;
        $kandidat->tentang_ketua = $tentang_ketua;
        $kandidat->nama_wakil = $nama_wakil;
        $kandidat->tentang_wakil = $tentang_wakil;
        $kandidat->visi = $visi;
        $kandidat->misi = $misi;


        $file_ketua = $request->file('foto_ketua');
        $file_wakil = $request->file('foto_wakil');

        if($file_ketua != ""){
            $nama_file_ketua = time()."_".$file_ketua->getClientOriginalName();

            $tujuan_upload = 'gambar/kandidat';
            $file_ketua->move($tujuan_upload,$nama_file_ketua);

            File::delete('gambar/kandidat/'.$kandidat->foto_ketua);

            $kandidat->foto_ketua = $nama_file_ketua;
        }

        if($file_wakil != ""){
            $nama_file_wakil = time()."_".$file_wakil->getClientOriginalName();

            $tujuan_upload = 'gambar/kandidat';
            $file_wakil->move($tujuan_upload,$nama_file_wakil);

            File::delete('gambar/kandidat/'.$kandidat->foto_wakil);

            $kandidat->foto_wakil = $nama_file_wakil;
        }
        $kandidat->save();

        return redirect(route('kandidat'))->with("success","Kandidat telah diupdate!");
    }   


    public function kandidat_delete($id)
    {
        $kandidat = Kandidat::find($id);
        // hapus file gambar lama
        File::delete('gambar/kandidat/'.$kandidat->foto_ketua);
        File::delete('gambar/kandidat/'.$kandidat->foto_wakil);
        $kandidat->delete();

        $voting = voting::where('kandidat_id',$id);
        $voting->delete();

        return redirect(route('kandidat'))->with("success","Kandidat telah dihapus!");
    }








    public function pemilih()
    {
        $pemilih = Pemilih::all();
        return view('admin.pemilih', ['pemilih' => $pemilih]);
    }

    public function pemilih_add()
    {
        return view('admin.pemilih_tambah');
    }

    public function pemilih_aksi(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'nis' => 'required|unique:pemilih',
            'jk' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'password' => 'required|string|min:5|'
        ]);

        Pemilih::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'jk' => $request->jk,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'password' => bcrypt($request->password)
        ]);

        return redirect(route('pemilih'))->with('success','Pemilih telah tersimpan');
    }

    public function pemilih_edit($id)
    {
        $pemilih = Pemilih::find($id);
        return view('admin.pemilih_edit', ['pemilih' => $pemilih]);
    }


    public function pemilih_update($id, Request $request)
    {

        $p = Pemilih::find($id);
        $n = $p->id;

        $this->validate($request,[
            'nama' => 'required',
            'nis' => 'required|unique:pemilih,nis,'.$n,
            'jk' => 'required',
            'umur' => 'required',
            'alamat' => 'required',
            'password' => 'string|min:5|nullable'
        ]);

        $pemilih = Pemilih::find($id);
        $pemilih->nama = $request->nama;
        $pemilih->nis = $request->nis;
        $pemilih->jk = $request->jk;
        $pemilih->umur = $request->umur;
        $pemilih->alamat = $request->alamat;

        if($request->password != ""){
            $pemilih->password = bcrypt($request->password);
        }

        $pemilih->save();

        return redirect(route('pemilih'))->with("success","Pemilih telah diupdate!");
    }   


    public function pemilih_delete($id)
    {
        $pemilih = Pemilih::find($id);
        $pemilih->delete();


        $voting = Voting::where('pemilih_id',$id);
        $voting->delete();

        return redirect(route('pemilih'))->with("success","Pemilih telah dihapus!");
    }


    public function user()
    {
        $user = User::all();
        return view('admin.user',['user' => $user]);
    }

    public function user_add()
    {
        return view('admin.user_tambah');
    }

    public function user_aksi(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'level' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('foto');

        // cek jika gambar kosong
        if($file != ""){
            // menambahkan waktu sebagai pembuat unik nnama file gambar
            $nama_file = time()."_".$file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'gambar/user';
            $file->move($tujuan_upload,$nama_file);
        }else{
            $nama_file = "";
        }


        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => $request->level,
            'foto' => $nama_file
        ]);

        return redirect(route('user'))->with('success','User telah disimpan');
    }

    public function user_edit($id)
    {
        $user = User::find($id);
        return view('admin.user_edit', ['user' => $user]);
    }

    public function user_update($id, Request $req)
    {
        $this->validate($req, [
            'nama' => 'required',
            'email' => 'required|email',
            'level' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $name = $req->input('nama');
        $email = $req->input('email');
        $password = $req->input('password');
        $level = $req->input('level');


        $user = User::find($id);
        $user->name = $name;
        $user->email = $email;
        if($password != ""){
            $user->password = bcrypt($password);
        }

        // menyimpan data file yang diupload ke variabel $file
        $file = $req->file('foto');

        // cek jika gambar tidak kosong
        if($file != ""){
            // menambahkan waktu sebagai pembuat unik nnama file gambar
            $nama_file = time()."_".$file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'gambar/user';
            $file->move($tujuan_upload,$nama_file);

            // hapus file gambar lama
            File::delete('gambar/user/'.$user->foto);

            $user->foto = $nama_file;
        }
        $user->level = $level;
        $user->save();

        return redirect(route('user'))->with("success","User telah diupdate!");
    }   

    public function user_delete($id)
    {
        $user = User::find($id);
        // hapus file gambar lama
        File::delete('gambar/user/'.$user->foto);
        $user->delete();

        return redirect(route('user'))->with("success","User telah dihapus!");
    }


    public function voting()
    {
        // $voting = Pemilih::get();
        // echo $pemilih;
        $voting = DB::table('voting')
        ->join('pemilih', 'voting.pemilih_id', '=', 'pemilih.id')
        ->join('kandidat', 'voting.kandidat_id', '=', 'kandidat.id')
        ->select(
            'voting.created_at', 
            'voting.id as id_voting', 
            'pemilih.id', 
            'pemilih.nama', 
            'pemilih.nis', 
            'kandidat.kode',
            'kandidat.nama_ketua',
            'kandidat.nama_wakil')
        ->get();
        return view('admin.voting', ['voting' => $voting]);
    }

    public function voting_delete($id)
    {
        $voting = Voting::find($id);
        $voting->delete();
        return redirect()->back()->with("success","Voting telah dibatalkan!");
    }

    public function voting_cetak()
    {
        // $voting = Pemilih::get();
        // echo $pemilih;
        $voting = DB::table('voting')
        ->join('pemilih', 'voting.pemilih_id', '=', 'pemilih.id')
        ->join('kandidat', 'voting.kandidat_id', '=', 'kandidat.id')
        ->select(
            'voting.created_at', 
            'voting.id as id_voting', 
            'pemilih.id', 
            'pemilih.nama', 
            'pemilih.nis', 
            'kandidat.kode',
            'kandidat.nama_ketua',
            'kandidat.nama_wakil')
        ->get();
        return view('admin.voting_cetak', ['voting' => $voting]);
    }

    public function rekapitulasi(Request $request)
    {
        $kandidat = Kandidat::get();

        if(isset($request->jk)){
            if($request->jk != "semua"){
                $j = $request->jk;
                $jk = " and pemilih.jk='".$j."'";
            }else{
                $jk = "";
            }
        }else{
            $jk = "";
        }

        if(isset($request->umur)){
            if($request->umur != "0"){
                $u = $request->umur;
                $umur = " and pemilih.umur='".$u."'";
            }else{
                $umur = "";
            }
        }else{
            $umur = "";
        }

        if(isset($request->kandidat)){
            if($request->kandidat != "semua"){
                $k = $request->kandidat;
                $kan = " and kandidat.id='".$k."'";
            }else{
                $kan = "";
            }
        }else{
            $kan = "";
        }

        $voting = DB::select('select voting.created_at, voting.id as id_voting, pemilih.id, pemilih.nama, pemilih.nis, kandidat.kode,kandidat.nama_ketua,kandidat.nama_wakil from voting, pemilih, kandidat where voting.pemilih_id=pemilih.id and voting.kandidat_id=kandidat.id'.$jk.$umur.$kan);
        
        return view('admin.rekapitulasi', ['voting' => $voting, 'kandidat' => $kandidat]);
    }

    public function rekapitulasi_cetak(Request $request)
    {
        $kandidat = Kandidat::get();

        if(isset($request->jk)){
            if($request->jk != "semua"){
                $j = $request->jk;
                $jk = " and pemilih.jk='".$j."'";
            }else{
                $jk = "";
            }
        }else{
            $jk = "";
        }

        if(isset($request->umur)){
            if($request->umur != "0"){
                $u = $request->umur;
                $umur = " and pemilih.umur='".$u."'";
            }else{
                $umur = "";
            }
        }else{
            $umur = "";
        }

        if(isset($request->kandidat)){
            if($request->kandidat != "semua"){
                $k = $request->kandidat;
                $kan = " and kandidat.id='".$k."'";
            }else{
                $kan = "";
            }
        }else{
            $kan = "";
        }

        $voting = DB::select('select voting.created_at, voting.id as id_voting, pemilih.id, pemilih.nama, pemilih.nis, kandidat.kode,kandidat.nama_ketua,kandidat.nama_wakil from voting, pemilih, kandidat where voting.pemilih_id=pemilih.id and voting.kandidat_id=kandidat.id'.$jk.$umur.$kan);
        
        return view('admin.rekapitulasi_cetak', ['voting' => $voting, 'kandidat' => $kandidat]);
    }
}
