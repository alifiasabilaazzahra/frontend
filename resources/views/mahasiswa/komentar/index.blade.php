@include('mahasiswa/template/header')

<div class="row" style="margin-bottom:100%;">
  <div class="container">
    <button type="button" class="btn button-blue" data-bs-toggle="modal" data-bs-target="#addData" style="float: right;">
      Tambah <i class="fa-solid fa-plus"></i>
    </button>
  </div>
  <div class="container"> 
      <table class="table table-responsive" id="table">
        <thead style="border-bottom:2px solid #d9dce0;">
          <tr>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>DARI</th>
            <th>ISI PESAN</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>20/04/2024</td>
            <td>TAUFIK NUR ADI</td>
            <td>Jumlah Bimbingan anda kurang dari standar yang ada, harap menemui saya pada hari senin pukul 09.00</td>
            <td>
              <button class="fa-solid fa-eye btn-aksi detail" style="">

              </button> 
            </td>
          </tr>
        </tbody> 

      </table>
  </div>
  
</div>

{{-- ADD MODAL --}}

<div class="modal fade" id="addData" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="addDataLabel">Add Data Bimbingan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Tanggal</label>
          <input type="date" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Catatan</label>
          <textarea name="" id="" class="form-control" style="height:50px;"></textarea>
        </div>
        <div class="form-group">
          <label for="">Dosen Pembimbing</label>
          <select name="" id="" class="form-control">
            <option value=""> -- Dosen Pembimbing Ke --</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Nama Dosen</label>
          <input type="text" class="form-control" placeholder="Masukan Nama Dosen">
        </div>
        <div class="form-group">
          <label for="">Upload Bukti Bimbingan</label>
          <input type="file" class="form-control" placeholder="Upload Bukti Bimbingan">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">Tambah</button>
      </div>
    </div>
  </div>
</div>


{{-- EDIT MODAL --}}

<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editDataLabel">Edit Data Bimbingan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="">Tanggal</label>
          <input type="date" class="form-control">
        </div>
        <div class="form-group">
          <label for="">Catatan</label>
          <textarea name="" id="" class="form-control" style="height:50px;"></textarea>
        </div>
        <div class="form-group">
          <label for="">Dosen Pembimbing</label>
          <select name="" id="" class="form-control">
            <option value=""> -- Dosen Pembimbing Ke --</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Nama Dosen</label>
          <input type="text" class="form-control" placeholder="Masukan Nama Dosen">
        </div>
        <div class="form-group">
          <label for="">Upload Bukti Bimbingan</label>
          <input type="file" class="form-control" placeholder="Upload Bukti Bimbingan">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">Simpan</button>
      </div>
    </div>
  </div>
</div>


{{-- DETAIL MODAL --}}

<div class="modal fade" id="detailData" tabindex="-1" aria-labelledby="detailDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="detailDataLabel">Add Data Bimbingan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table style="border:none;">
          <tr style="border:none;">
            <td style="border:none;">Tanggal</td>
            <td style="border:none;">20/04/2024</td>
          </tr>
          <tr style="border:none;">
            <td style="border:none;">Catatan</td>
            <td style="border:none;">Membahas Mengenai BAB 1 (Latar Belakang, rumusan masalah, dan tujuan penelitian)</td>
          </tr style="border:none;">
          <tr style="border:none;">
            <td style="border:none;">Bukti Bimbingan</td>
            <td style="border:none;"></td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-info">Simpan</button>
      </div>
    </div>
  </div>
</div>
@extends('mahasiswa/template/script/komentar')
@extends('mahasiswa/template/footer')