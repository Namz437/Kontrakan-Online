// Toggle Class Active untuk humberger menu
const navbarNav = document.querySelector('.navbar-nav');

// Ketika Hamburger Menu di Klik
document.querySelector('#hamburger-menu').onclick = () => {
  navbarNav.classList.toggle("active");
};
//Toogle Class Active untuk Search-form
const searchForm = document.querySelector('.search-form');
//untuk mengambil class diawali titik (.) jika id diawali dengan pagar (#)
//dibawah ini kita ambil searchbox untuk inputannya
const searchBox = document.querySelector("#search-box");
//dibawah ini artinya adalah javascript tolong carikan saya elemen yang nama idnya search-button
//ketika diklik jalankan sebuah fungsi () kita pakai arrow fungstion (=>) {} didalam kurung kurawa
//kita tooglle dulu class activenya seperti navbar diatas
document.querySelector('#search-button').onclick = (e) => {
  searchForm.classList.toggle('active');
  //toogle ini untuk menambahkan class active ketika belum ada tapi klo udh ada class activenya diklik lagi maka class active nya hilang
//nah diatas gunanya apa nih searchBox kan yg kita butuh cuma searchForm? tdi kita tambah searchBox
//supaya ketika saya klik ikon search otomatis input search nya langsung aktif tinggal klik aja ketikan katanya
//sehingga kita haurs gini sprti yg dibawah
searchBox.focus();
//bikin agar inputnya focus tinggal diklik aja 
//nah setelah itu saya ingin ketika searchnya diklik di halaman selain home tidak otomatis naik ekatas home melainkan
//tetap diam saja dan tidak ketas otomatis namun ini terjadi kenapa?
//karena inget yg kita klik adalah tag a yg mengarah pada '#' klo kita ngarahin ke tanda pagar
//artinya dia akan pindah ke halaman yang sama bagian paling atas seperti yg dijelaskan diatas
//nah gimana caranya supya tag a nya ga jalan yg jalan cuma kolom search nya aja
//yaitu kita harus matiin aksi defaultnya caranya kita kasih sebuah parameter di #searc-button nya pada onclik()
//didalam kurung itu kasih event atau e aja boleh lalu ketik selanjutnya 
e.preventDefault();
//ini agar aksi defaultnya tdak dilakukan ini biasa kita pke submit form atau pindah ke sbuah link tpi ngga mau kita lakukan

};

// Klik di Luar Sidebar Untuk Menghilangkan Nav
const hamburger = document.querySelector("#hamburger-menu");
// diatas Ketika di KLik Ngasih Event Klik pada saat kita klik mousenya
// jadi nanti akan kita tangkap ketika mousenya di klik diluar sidebar selain hamburger dan navbar maka akan langsung hilang
document.addEventListener('click', function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove('active');
  }
});
