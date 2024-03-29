@extends('layouts.main_admin')

@section('kamar_admin')
   <div>
      <form method="GET">
         <div class="mb-3">
            <label for="cari" class="form-label text-brown">Cari</label>
            <div class="d-flex flex-row">
               <div class="d-flex flex-row">
                  <input type="text" class="form-control rounded-10 form-brown me-1" id="cari"
                     aria-describedby="button-addon2">
                  <button class="btn btn-1 me-1" type="button" id="button-addon2">Cari</button>
               </div>
               <button class="btn btn-1" type="button" id="button-addon2">+ Tambah Data</button>
            </div>
         </div>
      </form>
      <div class="card bg-cream rounded-20 mt-4">
         <div class="card-body">
            <table class="table table-hover table-responsive form-brown text-form-brown">
               <thead>
                  <tr>
                     <th scope="col">No.</th>
                     <th scope="col">Tipe Kamar</th>
                     <th scope="col">Deskripsi</th>
                     <th scope="col">Harga</th>
                     <th scope="col">Jumlah</th>
                     <th scope="col">Gambar</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="align-middle" scope="row">1</td>
                     <td class="align-middle">Deluxe</td>
                     <td class="align-middle">Menampilkan ruang 32 meter persegi yang nyaman, berfungsi sebagai tipe
                        kamar yang sempurna untuk tamu yang ingin menikmati keseimbangan sempurna antara akomodasi
                        berkualitas tinggi dan penawaran bernilai tinggi selama kunjungan mereka di kota ini</td>
                     <td class="align-middle">Rp.500000</td>
                     <td class="align-middle">10</td>
                     <td class="align-middle">
                        <img src="images/deluxeraw.jpg" class="img-fluid" alt="" style="max-width: 150px">
                     </td>
                     <td>
                        <a href="" class="btn btn-1 text-white rounded-10">Edit</a>
                        <a href="" class="btn btn-2 text-brown rounded-10">Delete</a>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
@endsection
