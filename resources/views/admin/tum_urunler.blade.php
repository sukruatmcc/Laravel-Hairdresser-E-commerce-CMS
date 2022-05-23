<x-app-layout>
    <x-slot name="header">Satıştaki Ürünler</x-slot>
      {{$datas->links("pagination::bootstrap-5")}}
    <div class="row">
    <a href="{{route('musteri.list')}}"><div class="btn btn-secondary" style="float:left;"><svg xmlns="http://www.w3.org/2000/svg" style="float:left" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>Müşteri Listesine Git</div></a>
    <br><br>
    <a href="{{route('urun.olustur')}}"><div class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" style="float:left" width="16" height="16" fill="currentColor" class="bi bi-patch-plus-fill" viewBox="0 0 16 16">
  <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z"/>
</svg><span class="ml-1">Ürün Oluştur</span></div></a>
    <br><br>
    @foreach($datas as $urunler)
    <div class="col-md-4">
  <div class="card" style="width: 18rem;">
  <div class="card-body">
  <h5 class="card-title">{{$urunler->urun_adi}}</h5>
  <img src="{{asset($urunler->image)}}" style="width:150px; height:150px">
  <p class="card-text">{!! \Illuminate\Support\Str::limit($urunler->description,50) !!}</p>
  <footer ><cite title="Source Title">{{$urunler->fiyat}}₺</cite></footer><br>
  <a href="{{route('urun.bilgi',$urunler->id)}}" class="btn btn-success btn-sm">Ürün Ayarları</a>
  </div>
  </div>
  <br>
  </div>
  @endforeach

</x-app-layout>
