<x-app-layout>
@foreach($datas as $urunler)
    <x-slot name="header">{{$datas->name}} Kullanıcısına Ait Satış Ürünleri</x-slot>
@endforeach
  <div class="row">
  @foreach($datas->getUrunler as $urunler)
  <div class="col-md-4">
<div class="card" style="width: 18rem;">
<div class="card-body">
<h5 class="card-title">{{$urunler->urun_adi}}</h5>
  <img src="{{asset($urunler->image)}}">
  <p class="card-text">{!! \Illuminate\Support\Str::limit($urunler->description,50) !!}</p>
  <footer ><cite title="Source Title">{{$urunler->fiyat}}₺</cite></footer><br>
</div>
</div>
<br>
</div>
@endforeach
</div>








</x-app-layout>
