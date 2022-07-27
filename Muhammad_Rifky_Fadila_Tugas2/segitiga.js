var luas;
var alas;
var tinggi;
function hitung() {
	alas = parseFloat(document.getElementById("ipt_alas").value);
	tinggi = parseFloat(document.getElementById("ipt_tinggi").value);
	luas = (alas * tinggi) / 2;
	document.getElementById('opt_luas').value = luas;
}

/*var itu sama kaya string, bolean(var adalah tipe data unversal buat dunia js membuat meraka bebas dalam membuat sesuatu) 
contoh di atas var tinggi berarti menandakan bahwa katalok nya adalah tinggi seterus nya dengan alas dan luas*/