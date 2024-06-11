@include('mahasiswa/template/header')
<div class="row">
  <div class="container">
    <a href="<?= route('mahasiswa.ta-pendataan.add') ?>" style="float: right;" type="a" class="btn button-blue">Tambah <i class="fa-solid fa-plus"></i> </a>
  </div>
</div>
<div class="row" style="margin-bottom:200px; background-color:white; padding:30px; border-radius:30px;">
  <div class="container"> 
    <table class=""style="width: 100% !important;" id="table">
        <thead style="border-bottom:2px solid #d9dce0;">
          <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>TOPIK</th>
            <th>NAMA</th>
            <th>NIM</th>
            <th>NAMA KELOMPOK</th>
            <th>NIM KELOMPOK</th>
            <th>DOSEN PEMBIMBING</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>Perancangan Dan Implementasi Monitoring Perkembangan Studi Mahasiswa</td>
            <td>Sistem Dashboard Untuk Program Studi (Sasaran Mutu. Audit. KM) </td>
            <td>Alifia Sabila</td>
            <td>1332212</td>
            <td>Alifia Salam</td> 
            <td>12312312</td> 
            <td>Taufik Nur Hadi</td>
            <td>
              <div style="display: inline;">
                <button class="fa-solid fa-eye btn-aksi detail" style="">

                </button>
                <a href="<?= route('mahasiswa.ta-pendataan.edit'); ?>"><button class="fa-solid fa-edit edit btn-aksi" style="color:#2684FF; background-color:white;"></button></a>
                <button class="fa-solid fa-trash hapus btn-aksi" style="color:red; background-color:white;"></button>
              </div>
            </td>
          </tr>
        </tbody> 

      </table>
  </div>

</div>


{{-- DETAIL MODAL --}}
<div class="modal fade" id="detailData" tabindex="-1" aria-labelledby="detailDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="detailDataLabel">Detail Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <table style="border:none; width:100%;">
            <tr style="border:none;">
              <td style="width:25%; border:none;">
                <span>Judul</span>
              </td>
              <td style="border:none;">
                Perancangan Dan Implementasi Monitoring Pekembangan Studi Mahasiswa
              </td>
            </tr>
            <tr style="border:none;">
              <td style="width:25%; border:none;">
                <span>Topik</span>
              </td>
              <td style="border:none;">
                Sistem Dashboard Untuk Program Studi (Sasaran Mutu,Audit,KM)
              </td>
            </tr>
            <tr style="border:none;">
              <td style="width:25%; border:none;">
                <span>Peminatan</span>
              </td>
              <td style="border:none;">
                EISD
              </td>
            </tr>
            
            <tr style="border:none;">
              <td style="width:25%; border:none;">
                <span>Nama</span>
              </td>
              <td style="border:none;">
                <div class="form-group">
                  Denny Setiawan
                </div>
              </td>
            </tr>
            <tr style="border:none;">
              <td style="width:25%; border:none;">
                <span>NIM</span>
              </td>
              <td style="border:none;">
                120222376
              </td>
            </tr>
            <tr style="border:none;">
              <td style="width:25%; border:none;">
                <span>Nama Kelompok</span>
              </td>
              <td style="border:none;">
                Shinta Arshinta
              </td>
            </tr>
            <tr style="border:none;">
              <td style="width:25%; border:none;">
                <span>NIM Kelompok</span>
              </td>
              <td style="border:none;">
                <div class="form-group">
                  120222386
    
                </div>
              </td>
            </tr>
            <tr style="border:none;">
              <td style="width:25%; border:none;">
                <span>Dosen Pembimbing</span>
              </td>
              <td style="border:none;">
                Taufik Nur Adi
              </td>
            </tr>
            <tr style="border:none;">
              <td style="width:25%; border:none;">
                <span>Dosen Metlit</span>
              </td>
              <td style="border:none;">
                Jajang Sumpena
              </td>
            </tr>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


@extends('mahasiswa/template/script/ta-pendataan')
@extends('mahasiswa/template/footer')