@extends('layouts.main')
@section('container')
<h1>Halaman Profile</h1>
<section id="testimonial">
  <div class="container "></div>
    <div class="row justify-content-center">
    <h1 class="title text-center">Penulis</h1>
    
      <img src="img/khuching.jpg"  class="rounded-circle img-fluid" alt="Muhammad Mas'ud">
     <h3 class="text-center">Muhammad Mas'ud</h3>
    </div>
  </div>
</section>
<section id="kontak">
  <div class="container">
    <div class="row text-center mb-3">
      <div class="col">
        <h2>Kontak saya</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Nama Lengkap</label>
          <input type="name" class="form-control" id="name" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="pesan" class="form-label">Pesan</label>
          <textarea class="form-control" id="pesan" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>
    </div>
    </div>
  </div>
  <img src="img/wave1.png" class="bottom-img">
</section>
 <!----sosial media-->

 <section id="social-media">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#5f1782" fill-opacity="1" d="M0,0L6.5,26.7C13,53,26,107,39,112C51.9,117,65,75,78,74.7C90.8,75,104,117,117,154.7C129.7,192,143,224,156,202.7C168.6,181,182,107,195,85.3C207.6,64,221,96,234,138.7C246.5,181,259,235,272,240C285.4,245,298,203,311,192C324.3,181,337,203,350,192C363.2,181,376,139,389,149.3C402.2,160,415,224,428,245.3C441.1,267,454,245,467,213.3C480,181,493,139,506,112C518.9,85,532,75,545,80C557.8,85,571,107,584,133.3C596.8,160,610,192,623,218.7C635.7,245,649,267,662,256C674.6,245,688,203,701,176C713.5,149,726,139,739,133.3C752.4,128,765,128,778,133.3C791.4,139,804,149,817,154.7C830.3,160,843,160,856,133.3C869.2,107,882,53,895,48C908.1,43,921,85,934,122.7C947,160,960,192,973,186.7C985.9,181,999,139,1012,106.7C1024.9,75,1038,53,1051,64C1063.8,75,1077,117,1090,117.3C1102.7,117,1116,75,1129,101.3C1141.6,128,1155,224,1168,240C1180.5,256,1194,192,1206,154.7C1219.5,117,1232,107,1245,106.7C1258.4,107,1271,117,1284,106.7C1297.3,96,1310,64,1323,58.7C1336.2,53,1349,75,1362,101.3C1375.1,128,1388,160,1401,165.3C1414.1,171,1427,149,1434,138.7L1440,128L1440,0L1433.5,0C1427,0,1414,0,1401,0C1388.1,0,1375,0,1362,0C1349.2,0,1336,0,1323,0C1310.3,0,1297,0,1284,0C1271.4,0,1258,0,1245,0C1232.4,0,1219,0,1206,0C1193.5,0,1181,0,1168,0C1154.6,0,1142,0,1129,0C1115.7,0,1103,0,1090,0C1076.8,0,1064,0,1051,0C1037.8,0,1025,0,1012,0C998.9,0,986,0,973,0C960,0,947,0,934,0C921.1,0,908,0,895,0C882.2,0,869,0,856,0C843.2,0,830,0,817,0C804.3,0,791,0,778,0C765.4,0,752,0,739,0C726.5,0,714,0,701,0C687.6,0,675,0,662,0C648.6,0,636,0,623,0C609.7,0,597,0,584,0C570.8,0,558,0,545,0C531.9,0,519,0,506,0C493,0,480,0,467,0C454.1,0,441,0,428,0C415.1,0,402,0,389,0C376.2,0,363,0,350,0C337.3,0,324,0,311,0C298.4,0,285,0,272,0C259.5,0,246,0,234,0C220.5,0,208,0,195,0C181.6,0,169,0,156,0C142.7,0,130,0,117,0C103.8,0,91,0,78,0C64.9,0,52,0,39,0C25.9,0,13,0,6,0L0,0Z"></path>
  </svg>
   <div class="contaner text-center">
      <h2>FIND US ON SOCIAL MEDIA</h2>
      <div class="social-icons">
        <a href="#"><img src="img/facebook-icon.png"></a>
        <a href="#"><img src="img/instagram-icon.png"></a>
        <a href="#"><img src="img/twitter-icon.png"></a>
        <a href="#"><img src="img/whatsapp-icon.png"></a>
        <a href="#"><img src="img/linkedin-icon.png"></a>
        <a href="#"><img src="img/snapchat-icon.png"></a>
        
      </div>
   </div>
 </section>
@endsection
