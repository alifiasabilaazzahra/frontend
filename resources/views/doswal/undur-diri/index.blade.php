@include('doswal/template/header')
<div class="row">
  <div class="container">
    <a href="<?= route('doswal.UndurDiri.add') ?>" style="float: right;" type="a" class="btn button-blue">Tambah <i class="fa-solid fa-plus"></i> </a>
  </div>
</div>
<div class="row" style="margin-bottom:100px; background-color:white; padding:30px; border-radius:30px;">
  <div class="container"> 
    <table class=""style="width: 100% !important;" id="table">
        <thead style="border-bottom:2px solid #d9dce0;">
          <tr>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>NAMA MAHASISWA</th>
            <th>NIM</th>
            <th>KELAS</th>
            <th>DOSEN WALI</th>
            <th>ALASAN UNDUR DIRI</th>
            <th>AKSI</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1.</td>
            <td>20/04/2024</td>
            <td>Mitty Zaskia</td>
            <td>2023345678</td>
            <td>SIX-46-01</td>
            <td>Taufik Nur Adi</td>
            <td>Faktor Ekonomi</td>
            <td>
              <div style="display: inline;">
              <button class="fa-solid fa-eye btn-aksi detail" style="">

              </button> 
                <a href="<?= route('doswal.UndurDiri.edit') ?>"><button class="fa-solid fa-edit" style=" padding:4px; border:none; background-color:white; color:#2684FF;"></button></a>
                <button class="fa-solid fa-trash hapus"  style="color:red; padding:4px; border:none; background-color:white;"></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>2.</td>
            <td>20/04/2023</td>
            <td>Abdul Gofar Hilman</td>
            <td>2023345680</td>
            <td>SIX-47-01</td>
            <td>Iqbal Yulizar Mukti</td>
            <td>Menikah</td>
            <td>
              <div style="display: inline;">
                  <button class="fa-solid fa-eye btn-aksi detail" style="">

              </button> 
                <button class="fa-solid fa-edit"  data-bs-toggle="modal" data-bs-target="#editData" style=" padding:4px; border:none; background-color:white; color:#2684FF;"></button>
                <button class="fa-solid fa-trash hapus"  style="color:red; padding:4px; border:none; background-color:white;"></button>
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
        <h1 class="modal-title fs-5" id="detailDataLabel">Detail Undur Diri</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table style="border:none;">
          <tr style="border:none;">
            <td style="border:none;">Tanggal</td>
            <td style="border:none;">20/04/2024</td>
          </tr>
          <tr style="border:none;">
            <td style="border:none;">Nama Mahasiswa</td>
            <td style="border:none;">Mitty Zaskia</td>
          </tr style="border:none;">
          <tr style="border:none;">
            <td style="border:none;">Nim</td>
            <td style="border:none;">2023345678</td>
          </tr>
          <tr style="border:none;">
            <td style="border:none;">Kelas</td>
            <td style="border:none;">SIX-46-01</td>
          </tr>
           <tr style="border:none;">
            <td style="border:none;">Dosen Wali</td>
            <td style="border:none;">Taufik Nur Adi</td>
          </tr>
           <tr style="border:none;">
            <td style="border:none;">Alasan Undur Diri</td>
            <td style="border:none;">Faktor Ekonomi</td>
          </tr>
           
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>
@extends('doswal/template/script/undurdiri')
@extends('doswal/template/footer')