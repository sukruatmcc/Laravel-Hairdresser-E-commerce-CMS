<x-app-layout>
    <x-slot name="header">Satıştaki Ürünler</x-slot>
    <a href="{{route('sepett')}}" class="btn btn-secondary">SEPET</a>
    <br><br>
    {{$datas->links("pagination::bootstrap-5")}}
  <form  method="post" action="{{route('sepet')}}" enctype="multipart/form-data">
    @csrf
    <div class="row">
@foreach($datas as $urunler)
    <br><br><br>
  <div class="col-md-4">
  <div class="card" style="width: 18rem;">
  <div class="card-body">
  <h5 class="card-title">{{$urunler->urun_adi}}</h5>
  <img src="{{asset($urunler->image)}}" style="width:150px; height:150px">
  <p class="card-text">{!! \Illuminate\Support\Str::limit($urunler->description,50) !!}</p>
  <footer><cite title="Source Title">{{$urunler->fiyat}}₺</cite></footer><br>
  <button  class="btn btn-success btn-sm">Sepete Ekle</button>
  </div>
  </div>
  <br>
  </div>
  @endforeach
</form>
</x-app-layout>
