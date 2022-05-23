<x-app-layout>
  @foreach($datas as $data)
    <x-slot name="header">{{$data->urun_adi}} Ürününe Ait Bilgiler</x-slot>
    @endforeach
    <a href="{{route('tum.urunler')}}"><div class="btn btn-secondary" style="float:left"><svg xmlns="http://www.w3.org/2000/svg" style="float:left" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>Ürün Listesine Git</div></a>
<br><br>
@foreach($datas as $data)
    <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$data->urun_adi}}</h5>
          <img src="{{asset($data->image)}}"  style="width:150px; height:150px; float:left; margin-left:430px">
          <footer style="float:left; margin-left:150px; margin-top:50px; font-size: 30px;"><cite title="Source Title">{{$data->fiyat}}₺</cite></footer><br>
          <p style="float:left" class="card-text">{{$data->description}}</p>
          <a href="{{route('urun.guncelle',$data->id)}}" class="btn btn-info btn-sm" style="float:left">Güncelle</a>
          <a href="{{route('urun.sil',$data->id)}}" class="btn btn-danger btn-sm" style="float:right">Sil</a>
        </div>
      </div>
    </div>
  @endforeach
</x-app-layout>
