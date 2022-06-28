let qs = window.location.search;
let urlp = new URLSearchParams(qs);
let carinidn = urlp.get("nidn");

let urltarget = new URL("http://localhost/widi/server/dtdsnnidn.php");
urltarget.searchParams.set("nidn",carinidn);

const gh = new XMLHttpRequest();
gh.open("GET",urltarget);
gh.send();

gh.onload = function(){
    const dta = JSON.parse(this.responseText);
    for(i=0;i<dta["isi"].length;i++){
        document.getElementById("txnidn").value = dta["isi"][i][0];
        document.getElementById("txnamad").value = dta["isi"][i][1];
        document.getElementById("txjkeld").value = dta["isi"][i][2];
        document.getElementById("txtgld").value = dta["isi"][i][3];
        document.getElementById("txjabatan").value = dta["isi"][i][4];
        document.getElementById("txmengampuh").value = dta["isi"][i][5];
    }
    console.log(dta);
}