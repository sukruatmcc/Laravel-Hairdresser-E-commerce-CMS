<x-app-layout>
    <x-slot name="header">Ürün Oluştur</x-slot>
    <div class="card">
    <div class="card-body">
      <form method="post" action="{{route('urun.olusturPost')}}" enctype="multipart/form-data">
        @csrf
          <div class="form-group">
              <label>Ürün Adı</label>
              <input type="text" name="urun_adi" class="form-control" value="">
          </div>
          <br>
          <div class="form-group">
              <label>Ürün Açıklaması</label>
              <textarea type="text" name="description" class="form-control" rows='4'></textarea>
          </div>
          <br>
          <label>Fotoğraf</label>
          <input type="file" name="image" class="form-control" value="">
          <br>
          <label>Ürün Fiyatı</label>
          <input type="number" name="fiyat" class="form-control" value="">
          <br>
          <button class="btn-sm w-100 btn-success">Satış Listesine Koy</button>
      </form>
    </div>
  </div>
</x-app-layout>
