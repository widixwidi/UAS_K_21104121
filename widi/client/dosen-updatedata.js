function dosenupdatedata(){
    document.getElementById("dosenUpdate").style.display="none"
    
    let nidn = document.getElementById("txnidn").value;
    let namad = document.getElementById("txnamad").value;
    let jkeld = document.getElementById("txjkeld").value;
    let tgld = document.getElementById("txtgld").value;
    let jabatan = document.getElementById("txjabatan").value;
    let mengampuh = document.getElementById("txmengampuh").value;
    let dta = "txNIDN="+nidn+"&txNAMAD="+namad+"&txJKELD="+jkeld+"&txTGLD="+tgld+"&txJABATAN="+jabatan+"&txMENGAMPUH="+mengampuh
    console.log(dta)

    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","http://localhost/widi/server/dtdosen-updatedata.php");
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send(dta);

    xmlhttp.onload = function(){
        const mydta = JSON.parse(this.responseText);
        console.log(mydta);
        if(mydta["error"]==0){
            document.getElementById("sukses").style.display="block";
        }else{
            document.getElementById("gagal").style.display="none";
        }
        setTimeout(()=>{
            window.location.href="index.php?pg=dsn";
        },5000)
    }
}