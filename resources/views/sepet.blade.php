<x-app-layout>
    <x-slot name="header">Sepetteki Ürünler</x-slot>
    <a href="#" class="btn btn-secondary">Ürünlere Git</a>
    <br><br>
    <div class="row">
@foreach($sepett->sepettGett as $sepet)
    <br><br><br>
  <div class="col-md-4">
  <div class="card" style="width: 18rem;">
  <div class="card-body">
  <h5 class="card-title">{{$sepet->urun_adi}}</h5>
  <img src="{{asset($sepet->image)}}" style="width:150px; height:150px">
  <p class="card-text">{!! \Illuminate\Support\Str::limit($sepet->description,50) !!}</p>
  <footer><cite title="Source Title">{{$sepet->fiyat}}₺</cite></footer><br>
  <a href="{{route('iptal',$sepet->id)}}" class="btn btn-danger btn-sm">İptal Et</a>
  </div>
  </div>
  <br>
  </div>
  @endforeach
</x-app-layout>
