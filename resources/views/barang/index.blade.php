@extends('layouts.app')
@section('main_content')
<div class="row p-3">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    + Tambah Barang
  </button>
</div>
<div class="row p-3">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nomor</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Jual</th>
            <th scope="col">Harga Beli</th>
            <th scope="col">Stok</th>
            <th scope="col">Kategori</th>
            <th scope="col">Menu</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($barang as $barang)            
            <tr>
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $barang->kode_barang }}</td>
                <td>{{ $barang->nama_barang }}</td>s
                <td>{{ $barang->harga_jual }}</td>
                <td>{{ $barang->harga_beli }}</td>
                <td>{{ $barang->stok }}</td>
                <td>{{ $barang->kategori }}</td>
                <td><a href="#" data-toggle="modal" data-target="#editModal" class="edit-btn">@csrf<span class="btn btn-success" data-id={{$barang->kode_barang}}>edit</span></a> 
                    <form method= "post" action='{{ url('/barang', ['id' => $barang->kode_barang]) }}'>
                        @method('delete')
                        @csrf
                        <button type= 'submit' class="btn btn-danger">hapus</button>
                        
                    </form> 
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
{{-- Modal tambah barang  --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Barang </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" class="form-control" id="nama_barang" aria-describedby="nama_barang" placeholder="masukkan nama barang" name="nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Harga Jual</label>
                        <input type="number" class="form-control" id="nama_barang" aria-describedby="harga_jual" placeholder="masukkan harga Jual" name="harga_jual">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Harga Beli</label>
                        <input type="number" class="form-control" id="nama_barang" aria-describedby="harga_beli" placeholder="masukkan harga beli" name="harga_beli">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Stok</label>
                        <input type="number" class="form-control" id="nama_barang" aria-describedby="stok" placeholder="masukkan jumlah stok" name="stok">
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Kategori</label>
                        <input type="text" class="form-control" id="nama_barang" aria-describedby="kategori" placeholder="masukkan kategori barang" name="kategori">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-block">Tambah barang</button>
                </div>
            </form>
          </div>
        </div>
      </div>

{{-- Modal edit barang  --}}
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">edit barang </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_barang_edit" aria-describedby="nama_barang" placeholder="masukkan nama barang" name="nama_barang">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Harga Jual</label>
                    <input type="number" class="form-control" id="harga_jual_edit" aria-describedby="harga_jual" placeholder="masukkan harga Jual" name="harga_jual">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Harga Beli</label>
                    <input type="number" class="form-control" id="harga_beli_edit" aria-describedby="harga_beli" placeholder="masukkan harga beli" name="harga_beli">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Stok</label>
                    <input type="number" class="form-control" id="stok_edit" aria-describedby="stok" placeholder="masukkan jumlah stok" name="stok">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Kategori</label>
                    <input type="text" class="form-control" id="kategori_edit" aria-describedby="kategori" placeholder="masukkan kategori barang" name="kategori">
                </div>
            </div>
            <div class="modal-footer">
            <button type="submit"  id="buttonSubmit" class="btn btn-success btn-block">Tambah barang</button>
            </div>
        </di>
      </div>
    </div>
  </div>
<script> 
window.onload = () => {
    let editElement = document.querySelectorAll('.edit-btn')
    editElement.forEach(el => {
        let token = el.querySelector('input').getAttribute('value')

        let kodeBarang = null
        el.addEventListener('click', e => {
             kodeBarang = e.target.attributes['data-id'].value
             console.log(kodeBarang);
             let nama_barang = document.getElementById('nama_barang_edit').value
        let harga_jual = document.getElementById('harga_jual_edit').value
        let harga_beli = document.getElementById('harga_beli_edit').value
        let stok = document.getElementById('stok_edit').value
        
        let kategori = document.getElementById('kategori_edit')
        document.getElementById('buttonSubmit').addEventListener('click', () => {
            fetch(`/barang/${kodeBarang}`, {
                headers : { 
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token
                },   
                method: 'put',
                credentials: "same-origin",
                body: JSON.stringify({
                    kode_barang : kodeBarang,
                    nama_barang : nama_barang,
                    harga_jual: harga_jual,
                    harga_beli: harga_beli,
                    stok : stok,
                    kategori : kategori
                })
   
            })
   
        })
        
                 
                .then(response => {
                   response
                })
                .catch(
                    error => console.log(error)
                )
        })
      })

    }
</script>