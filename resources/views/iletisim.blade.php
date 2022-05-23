<x-app-layout>
    <x-slot name="header">Bizimle İletişime Geçin</x-slot>
    <div class="card">
        <div class="card-body">
          <form method="post" action="{{route('contact.post')}}">
            @csrf
          <div class="form-group">
            <div class="form-group">
              <label for="exampleInputPassword1">Ad Soyad</label>
              <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="ad soyad..">
            </div><br>
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" required aria-describedby="emailHelp" placeholder="Enter email">
          </div><br>
          <label>Soru Ve Görüşleriniz</label>
          <textarea type="text" name="questions" class="form-control" rows='4'>{{old('description')}}</textarea><br>
          <div class="form-group">
            <label for="exampleInputPassword1">Telefon No</label>
            <input type="number" name="number" class="form-control" id="exampleInputPassword1">
          </div><br>
          <button type="submit" class="btn btn-success btn-sm w-100">Submit</button>
        </form>
        </div>
    </div>
</x-app-layout>
