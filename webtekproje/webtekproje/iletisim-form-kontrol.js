

window.addEventListener('DOMContentLoaded', function () {
    
    var form = document.getElementById('iletisimform');
  
    //gönder butonuna tıklandığında formu kontrol etme
    form.addEventListener('submit', function (event) {
      event.preventDefault(); // formun otomatik olarak gönderilmesini engelleme
  
      // isim Soyisim kontrolü
      var adSoyadInput = document.getElementById('adSoyad');
      var adSoyad = adSoyadInput.value.trim(); // başında ve sonunda boşlukları kaldırma 
  
      if (adSoyad === '') {
        alert('İsim Soyisim boş olamaz.');
        return;
      }
  
      if (!adSoyad.includes(' ')) {
        alert('Lütfen Adınız Ve Soyadınızı Arasında boşluk olacak şekilde giriniz.');
        return;
      }
  
      // e-posta kontrolü
      var emailInput = document.getElementById('email');
      var email = emailInput.value.trim();
  
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; //  e-posta doğrulama regex kısmi
  
      if (!emailRegex.test(email)) {
        alert('Geçerli bir e-posta adresi giriniz.');
        return;
      }
  
      // telefon kontrolü
      var telefonInput = document.getElementById('telefon');
      var telefon = telefonInput.value.trim();
  
      var telefonRegex = /^[0-9]{10}$/; // 10 haneli bir telefon numarası doğrulama regex kismi
  
      if (!telefonRegex.test(telefon)) {
        alert('Geçerli bir telefon numarası giriniz. Telefon numaranız 0 ile başlamamamalı ve toplam 10 haneli olmalı');
        return;
      }
  
      // cinsiyet kontrolü
      var cinsiyetInputs = document.getElementsByName('cinsiyet');
      var seciliCinsiyet = false;
  
      for (var i = 0; i < cinsiyetInputs.length; i++) {
        if (cinsiyetInputs[i].checked) {
          seciliCinsiyet = true;
          break;
        }
      }
  
      if (!seciliCinsiyet) {
        alert('Cinsiyet seçimi boş olamaz bir cinsiyet seçiniz.');
        return;
      }
  
      // Mesaj kontrolü
      var mesajInput = document.getElementById('mesaj');
      var mesaj = mesajInput.value.trim();
  
      if (mesaj === '') {
        alert('Mesaj alanı boş olamaz, Lütfen bu alanı doldurunuz.');
        return;
      }
  
     
      form.submit();
    });
  });
  