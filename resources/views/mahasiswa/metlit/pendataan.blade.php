@include('mahasiswa/template/header')
<div class="row">
  <div class="container">
    <a href="<?= route('mahasiswa.pendataan.add') ?>" style="float: right;" type="a" class="btn button-blue">Tambah <i class="fa-solid fa-plus"></i> </a>
  </div>
</div>
<div class="row" style="margin-bottom:100px; background-color:white; padding:30px; border-radius:30px;">
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
            <td>1232123</td>
            <td>Taufik Nur Hadi</td>
            <td>
              <div style="display: inline;">
                <a href="<?= route('mahasiswa.pendataan.edit') ?>"><button class="fa-solid fa-edit" style=" padding:4px; border:none; background-color:white; color:#2684FF;"></button></a>
                <button class="fa-solid fa-trash hapus"  style="color:red; padding:4px; border:none; background-color:white;"></button>
              </div>
            </td>
          </tr>
          <tr>
            <td>2.</td>
            <td>Perancangan Dan Implementasi Monitoring Perkembangan Studi Mahasiswa</td>
            <td>Sistem Dashboard Untuk Program Studi (Sasaran Mutu. Audit. KM) </td>
            <td>Alifia Sabila</td>
            <td>1332212</td>
            <td>1232123</td>
            <td>Taufik Nur Hadi</td>
            <td>
              <div style="display: inline;">
                <button class="fa-solid fa-edit"  data-bs-toggle="modal" data-bs-target="#editData" style=" padding:4px; border:none; background-color:white; color:#2684FF;"></button>
                <button class="fa-solid fa-trash hapus"  style="color:red; padding:4px; border:none; background-color:white;"></button>
              </div>
            </td>
          </tr>
        </tbody> 

      </table>
  </div>

</div>


{{-- EDIT MODAL --}}
<div class="modal fade" id="editData" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editDataLabel">Edit Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <table style="border:0; width:100%;">
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Judul</span>
              </td>
              <td>
                <div class="form-group">
                  <textarea  id="" class="form-control"></textarea>
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Permintaan</span>
              </td>
              <td>
                <div class="form-group">
                  <select name="" id="" class="form-control">
                    <option value="" >
                      -- SELECT DATA --
                    </option>
                  </select>
    
                </div>
              </td>
            </tr>
    
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Dosen Metlit</span>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nama Dosen">
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Dosen Pembimbing</span>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nama Dosen Pembimbing">
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>NIM</span>
              </td>
              <td>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="NIM">
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Nama Anggota</span>
              </td>
              <td>
                <div class="form-group">
                  <select name="" id="" class="form-control">
                    <option value="" >
                      -- SELECT DATA --
                    </option>
                  </select>
    
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>NIM Anggota</span>
              </td>
              <td>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="NIM">
                </div>
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


{{-- DETAIL MODAL --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <table style="border:0; width:100%;">
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Judul</span>
              </td>
              <td>
                <div class="form-group">
                  <textarea  id="" class="form-control"></textarea>
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Permintaan</span>
              </td>
              <td>
                <div class="form-group">
                  <select name="" id="" class="form-control">
                    <option value="" >
                      -- SELECT DATA --
                    </option>
                  </select>
    
                </div>
              </td>
            </tr>
    
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Dosen Metlit</span>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nama Dosen">
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Dosen Pembimbing</span>
              </td>
              <td>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nama Dosen Pembimbing">
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>NIM</span>
              </td>
              <td>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="NIM">
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>Nama Anggota</span>
              </td>
              <td>
                <div class="form-group">
                  <select name="" id="" class="form-control">
                    <option value="" >
                      -- SELECT DATA --
                    </option>
                  </select>
    
                </div>
              </td>
            </tr>
            <tr style="border-bottom:none;">
              <td style="width:25%;">
                <span>NIM Anggota</span>
              </td>
              <td>
                <div class="form-group">
                  <input type="number" class="form-control" placeholder="NIM">
                </div>
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


@extends('mahasiswa/template/script/pendataan')
@extends('mahasiswa/template/footer')