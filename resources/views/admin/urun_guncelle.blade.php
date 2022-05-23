<x-app-layout>
  @foreach($urun as $urunler)
    <x-slot name="header">{{$urunler->urun_adi}} Ait Ürünü Güncelleme İşlemi</x-slot>
  <a href="{{route('urun.bilgi',$urunler->id)}}"><div class="btn btn-secondary" style="float:left"><svg xmlns="http://www.w3.org/2000/svg" style="float:left" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>Ürüne Git</div></a>
<br><br>
@endforeach
     @foreach($urun as $urunler)
  <div class="card">
    <div class="card-body">
  <form method="post" action="{{route('urun.guncellePost',$urunler->id)}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Ürün Adı</label>
      <input type="text" name="urun_adi" value="{{$urunler->urun_adi}}" class="form-control">
    </div><br>
    <div class="form-group">
            <label>Ürün Resmi</label>
            <img src="{{asset($urunler->image)}}" style="width:200px">
            <input type="file" name="image" value="{{$urunler->image}}" class="form-control">
        </div><br>
    <div class="form-group">
      <label for="exampleFormControlInput1">Ürün Fiyatı</label>
      <input type="number" name="fiyat" value="{{$urunler->fiyat}}"  class="form-control">
    </div><br>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Ürün Açıklaması</label>
      <textarea class="form-control" name="description"  rows="3">{{$urunler->description}}</textarea>
    </div><br>
    <button type="submit" class="btn btn-success btn-sm w-100">Güncelle</button>
  </form>
</div>
</div>
  @endforeach
</x-app-layout>
