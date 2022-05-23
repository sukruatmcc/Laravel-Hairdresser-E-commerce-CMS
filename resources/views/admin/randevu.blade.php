<x-app-layout>
    <x-slot name="header">Randevu Kontrol</x-slot>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">İsim</th>
      <th scope="col">Soyisim</th>
      <th scope="col">Telefon</th>
      <th scope="col">Kategori</th>
      <th scope="col">Randevu Tarihi</th>
    </tr>
  </thead>
  <tbody>
      @foreach($datas->getRandevu as $data)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$data->isim}}</td>
      <td>{{$data->soyisim}}</td>
      <td>{{$data->tel_no}}</td>
      <td>{{$data->kategori}}</td>
      <td>{{$data->created_at}}</td>
      @endforeach
    </tr>
  </tbody>
</table>
</x-app-layout>
