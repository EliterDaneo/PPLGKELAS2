@extends('belakang.layouts.main')

@section('isi')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa-solid fa-chart-simple"></i> Daftar Tambah Siswa
        </div>
        <div class="card-body">
            <form>
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" placeholder="Masukan Nama Kalian" />
                    <label>Nama</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="number" placeholder="Masukan NISN Kalian" />
                    <label>NISN</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih Kelas</option>
                        <option value="10">Sepuluh</option>
                        <option value="11">Sebelas</option>
                        <option value="12">Dua Belas</option>
                    </select>
                    <label>Kelas</label>
                </div>
                <div class="form-floating mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih jurusan</option>
                        <option value="PPLG">Pengembangan Perangkat Lunak dan Gim</option>
                        <option value="TJKT">Teknik Jaringan Komputer dan Telekomunikasi</option>
                        <option value="TO">Teknik Otomotif</option>
                        <option value="AKL">Akutansi dan Keuangan Lembaga</option>
                        <option value="PMS">Pemasaran</option>
                    </select>
                    <label>Jurusan</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Masukan Alamat disini" id="floatingTextarea"></textarea>
                    <label>Alamat</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Masukan Motto disini" id="floatingTextarea"></textarea>
                    <label>Moto</label>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                    <button class="btn btn-primary" type="submit"><i class="fa-regular fa-paper-plane"></i> Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
