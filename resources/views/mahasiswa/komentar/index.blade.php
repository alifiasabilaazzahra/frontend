@include('mahasiswa/template/header')

<div class="row" style="margin-bottom:100%;">
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

{{-- DETAIL MODAL --}}

<div class="modal fade" id="detailData" tabindex="-1" aria-labelledby="detailDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="detailDataLabel">Detail Komentar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table style="border:none;">
          <tr style="border:none;">
            <td style="border:none;">Tanggal</td>
            <td style="border:none;">20/04/2024</td>
          </tr>
          <tr style="border:none;">
            <td style="border:none;">Dari</td>
            <td style="border:none;">Taufik Nur Adi</td>
          </tr style="border:none;">
          <tr style="border:none;">
            <td style="border:none;">Isi Pesan</td>
            <td style="border:none;">Jumlah Bimbingan anda kurang dari standar yang ada,harap menemui saya pada hari seni pukul 09.00</td>
          </tr>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@extends('mahasiswa/template/script/komentar')
@extends('mahasiswa/template/footer')