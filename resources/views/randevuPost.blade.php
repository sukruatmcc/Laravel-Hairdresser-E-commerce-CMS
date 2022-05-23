<x-app-layout>
    <x-slot name="header">Randevu Oluştur</x-slot>
       <div class="card">
            <div class="card-body">
              <form method="post" action="{{route('randevu.post')}}">
                @csrf
<div class="form-group">
 <label for="exampleFormControlInput1">Ad Soyad</label>
 <input type="text" name="isim" value="{{old('isim')}}" class="form-control" id="exampleFormControlInput1" placeholder="ad soyad...">
</div>
<br>
<div class="form-group">
 <label for="exampleFormControlInput1">Email</label>
 <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleFormControlInput1" required placeholder="name@example.com">
</div>
<br>
<div class="form-group">
 <label for="exampleFormControlInput1">Telefon No</label>
 <input type="number" name="tel_no" value="{{old('tel_no')}}" class="form-control" id="exampleFormControlInput1" placeholder="telefon no...">
</div>
<br>
<div class="form-group">
 <label for="exampleFormControlSelect1">Kategori</label>
 <select class="form-control" name="kategori" id="exampleFormControlSelect1">
   <option @if(old('kategori')=='kaş') selected @endif value="kaş">Kaş</option>
   <option @if(old('kategori')=='biyik') selected @endif value="biyik">Bıyık</option>
   <option @if(old('kategori')=='sac_kesimi') selected @endif value="sac_kesimi">Saç Kesimi</option>
   <option @if(old('kategori')=='makyaj') selected @endif value="makyaj">Makyaj</option>
   <option @if(old('kategori')=='gelin_ozel') selected @endif value="gelin_ozel">Gelin Özel</option>
   <option @if(old('kategori')=='ağda') selected @endif value="ağda">Ağda</option>
   <option @if(old('kategori')=='pedikür') selected @endif value="pedikür">Pedikür</option>
   <option @if(old('kategori')=='manikür') selected @endif value="manikür">Manikür</option>
 </select>
</div>
<br>
<div class="form-group">
    <input id='isFinished' @if(old('created_at')) checked @endif type="checkbox"><!--seçiliyse kalsın..-->
    <label>Randevu Tarihi Belirtiniz</label>
</div>
<br>
<div class="form-group" id='isFinishedInput' @if(!old('created_at'))  style="display:none" @endif><!--seçiliyse kalsın..-->
<label>Randevu Tarihi</label>
    <input type="datetime-local" name="created_at" value="#" class="form-control">
</div>
<br>
<button type="submit" class="btn btn-primary btn-sm w-100">Gönder</button>
</form>
<x-slot name="js">
<script>
$('#isFinished').change(function(){
    if($('#isFinished').is(':checked')){
      $('#isFinishedInput').show()
    }else {
      $('#isFinishedInput').hide()
    }
});
</script>
</x-slot>

            </div>
       </div>
</x-app-layout>
