@include('kaprodi/template/header')

<div class="row" style="margin-bottom:100px; background-color:white; padding:30px; border-radius:30px;">
  <div class="container"> 
    <table class=""style="width: 100% !important;" id="table">
        <thead style="border-bottom:2px solid #d9dce0;">
          <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>DOSEN PEMBIMBING 1</th>
            <th>DOSEN PEMBIMBING 2</th>
            <th>NAMA MAHASISWA</th>
            <th>ANGGOTA KELOMPOK</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>Sistem Dashboard Untuk Program Studi</td>
            <td>Taufik Nur Adi</td>
            <td>Tien Fabrianti Kusumasari</td>
            <td>Zaidan Yahya</td>
            <td>Ali Abeedin</td>
            
            <td>
              <div style="display: inline;">
              <button class="fa-solid fa-eye btn-aksi detail" style="">

              </button> 
                 <button class="fa-solid fa-square-check"  style="color:green; border:none; background-color:white;">

              </button> 
             
            <button class="fa-solid fa-circle-xmark tolak"  data-bs-target="#tolakData" data-bs-toggle="modal"  style="color:red; border:none; background-color:white;"></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Sistem Stockopname Pada Gudang</td>
            <td>Tien Fabrianti Kusumasari</td>
            <td>Taufik Nur Adi</td>
            <td>Alfyansyah Hutagalung</td>
            <td>Novia Bachmid</td>
         
             <td>
              <div style="display: inline;">
              <button class="fa-solid fa-eye btn-aksi detail" style="">

              </button>
                <button class="fa-solid fa-square-check"  style="color:green; border:none; background-color:white;">

              </button>  
             
            <button class="fa-solid fa-circle-xmark tolak"  data-bs-target="#tolakData" data-bs-toggle="modal"  style="color:red; border:none; background-color:white;"></button>
              </div>
            </td>
          </tr>
        </tbody> 

      </table>
  </div>

</div>
{{-- Tolak MODAL --}}

<div class="modal fade" id="tolakData" tabindex="-1" aria-labelledby="tolakDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tolakDataLabel">Tolak Pengajuan Tugas Akhir</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
        <div class="form-group">
          <label for="">Alasan Penolakan</label>
          <textarea name="" id="" class="form-control" style="height:80px;"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">Simpan</button>
      </div>
    </div>
  </div>
</div>

@extends('kaprodi/template/script/verifikasi-TA')
@extends('kaprodi/template/footer')