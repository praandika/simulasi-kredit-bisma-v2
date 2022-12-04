const formatter = new Intl.NumberFormat('id-ID', {
  style: 'currency',
  currency: 'IDR',
  minimumFractionDigits: 0
})

function pmt(rate_per_period, number_of_payments, present_value, future_value, type){
  future_value = typeof future_value !== 'undefined' ? future_value : 0;
  type = typeof type !== 'undefined' ? type : 0;

  if(rate_per_period != 0.0){
    // Interest rate exists
    var q = Math.pow(1 + rate_per_period, number_of_payments);
    return -(rate_per_period * (future_value + (q * present_value))) / ((-1 + q) * (1 + rate_per_period * (type)));

  } else if(number_of_payments != 0.0){
    // No interest rate, but number of payments exists
    return -(future_value + present_value) / number_of_payments;
  }

  return 0;
}

function roundUp(num, precision) {
  precision = Math.pow(10, precision)
  return Math.ceil(num * precision) / precision
}

function hitung_dp_menurun(){
  let dp = document.getElementById("dp_menurun").value;
  let harga = document.getElementById("angka_motor_menurun").value;
  let uangmuka = (dp/harga)*100;

  let persen = uangmuka.toFixed(0);

  if(!isNaN(uangmuka)){
    document.getElementById("angka_dp_menurun").innerHTML = uangmuka;
    document.getElementById("dp_motor_menurun").innerHTML = persen;
  }
}

function hitung_dp(){
  let dp = document.getElementById("dp").value;
  let harga = document.getElementById("angka_motor").value;
  let uangmuka = (dp/harga)*100;

  let persen = uangmuka.toFixed(0);

  if(!isNaN(uangmuka)){
    document.getElementById("angka_dp").innerHTML = uangmuka;
    document.getElementById("dp_motor").innerHTML = persen;
  }
}

function hitung_kredit_menurun(){
  let otr = document.getElementById("angka_motor_menurun").value;

  let dp = document.getElementById("dp_menurun").value;

  let bunga = document.getElementById("bunga_menurun").value;
  let admin = 1400000;
  let tenor = document.getElementById("tenor_menurun").value;
  if (tenor == 12) {
    rateAss = 0.0080;
  } else if(tenor == 24) {
    rateAss = 0.0144;
  } else if(tenor == 36) {
    rateAss = 0.0200;
  } else if(tenor == 48) {
    rateAss = 0.0248;
  } else {
    rateAss = 0;
  }
  let asuransi = parseFloat(otr)*parseFloat(rateAss);
  let sph = parseFloat(otr)-parseFloat(dp)+parseFloat(admin)+parseFloat(asuransi);
  let hasil = (parseFloat(sph)/parseFloat(tenor))+parseFloat(sph)*parseFloat(bunga);
  let angsuran = hasil.toFixed(0);
  let rupiah = formatter.format(angsuran);

  if (!isNaN(angsuran)) {
    document.getElementById("angsuran_menurun").innerHTML = "<p>Angsuran</p><h2>"+rupiah+"</h2>";
  }else{
    document.getElementById("angsuran_menurun").innerHTML = "<h2 style='color: #f490c3;'>Informasi Tidak Lengkap</h2>";
  }
}

function hitung_kredit(){
  let effectiveRate = 34;
  let adminFee = 1000000;
  let otr = document.getElementById("angka_motor").value;

  let dp = document.getElementById("dp").value;

  let tenor = document.getElementById("tenor").value;
  if (tenor == 12) {
    rateAss = 0.0093;
  } else if(tenor == 24) {
    rateAss = 0.0169;
  } else if(tenor == 36) {
    rateAss = 0.0237;
  } else if(tenor == 48) {
    rateAss = 0.0290;
  }else if(tenor == 60) {
    rateAss = 0.0432;
  } else {
    rateAss = 0;
  }
  let rounding = 2;

  let rate = parseFloat(effectiveRate/1200);
  let jumlahPinjaman = -(parseFloat(otr)-(parseFloat(dp)-parseFloat(adminFee)-parseFloat(rateAss)*parseFloat(otr)));
  
  let hasil = roundUp(pmt(rate,tenor,jumlahPinjaman,0,0),rounding);
  let angsuran = hasil.toFixed(0);
  let rupiah = formatter.format(angsuran);

  if (!isNaN(angsuran)) {
    document.getElementById("angsuran").innerHTML = "<p>Angsuran</p><h2>"+rupiah+"</h2>";
  }else{
    document.getElementById("angsuran").innerHTML = "<h2 style='color: #f490c3;'>Informasi Tidak Lengkap</h2>";
  }
}