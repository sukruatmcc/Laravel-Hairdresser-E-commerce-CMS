<x-app-layout>
    <x-slot name="header">Anasayfa</x-slot>
  <div class="row">
   <div class="col-md-4">
     <div class="card" style="width: 25rem; margin-right:5px">
   <img class="card-img-top" src="https://www.kuafordepo.com/UserFiles/Fotograflar/9209-firca-tarak-jpg-firca-tarak.jpg" style="width:400px; height:250px" alt="Card image cap">
   <div class="card-body">
     <h5 class="card-title">Ürünlerimiz</h5>
     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     <a href="{{route('purunler')}}" class="btn btn-success">Ürünlerimiz</a>
   </div>
 </div>
   </div>
   <div class="col-md-4">
     <div class="card" style="width: 25rem;">
   <img class="card-img-top" src="https://jetrezervasyon.com/wp-content/uploads/2020/05/Naps-incorporate-rest-into-your-day-7.png" style="width:400px; height:250px" alt="Card image cap">
   <div class="card-body">
     <h5 class="card-title">Randevu</h5>
     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     <a href="{{route('randevu')}}" class="btn btn-success">Tıklayınız</a>
   </div>
 </div>
   </div>
   <div class="col-md-4">
     <div class="card" style="width: 25rem;">
   <img class="card-img-top" src="https://www.kentparksalon.com/wp-content/uploads/erkekkuaf%C3%B6r.jpg" style="width:400px; height:250px" alt="Card image cap">
   <div class="card-body">
     <h5 class="card-title">Hizmetlerimiz</h5>
     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
     <a href="{{route('hizmetler')}}" class="btn btn-success">Detay...</a>
   </div>
 </div>
   </div>
  </div>
  <div class="row">
    <div class="col-md-4" style="margin-top:10px; margin-left:110px">
      <div class="card" style="width: 25rem;">
    <img class="card-img-top" src="https://www.bgbalans.com/images/about/biz-kimiz.jpg" style="width:400px; height:250px" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Hakkımızda</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{route('about')}}" class="btn btn-success">Daha Fazlası...</a>
    </div>
  </div>
</div>
<div class="col-md-4" style="margin-top:10px; margin-left:150px">
  <div class="card" style="width: 25rem;">
<img class="card-img-top" src="https://idenfit.com/blog/wp-content/uploads/2020/12/Kurum-I%CC%87c%CC%A7i-I%CC%87letis%CC%A7im-Arac%CC%A7lar%C4%B1-Kurum-I%CC%87c%CC%A7i-I%CC%87letis%CC%A7imi-Art%C4%B1rmak-I%CC%87c%CC%A7in-O%CC%88neriler@3x.png" style="width:400px; height:250px" alt="Card image cap">
<div class="card-body">
  <h5 class="card-title">İletişim</h5>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="{{route('contact')}}" class="btn btn-success">Detaylar İçin Tıkla...</a>
</div>
</div>
</div>
</div>
</x-app-layout>
