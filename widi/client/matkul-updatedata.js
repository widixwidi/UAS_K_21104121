function matkulupdatedata(){
    document.getElementById("matkulupdate").style.display="none"
    
    let kode = document.getElementById("txkode").value;
    let namamatkul = document.getElementById("txnamamatkul").value;
    let jurusan = document.getElementById("txjurusan").value;
    let semester = document.getElementById("txsemester").value;
    let sks = document.getElementById("txsks").value;
    let jenis = document.getElementById("txjenis").value;
    let dosen = document.getElementById("txdosen").value;
    let dta = "txKODE="+kode+"&txNAMAMATKUL="+namamatkul+"&txJURUSAN="+jurusan+"&txSEMESTER="+semester+"&txSKS="+sks+"&txJENIS="+jenis+"&txDOSEN="+dosen
    console.log(dta)

    xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST","http://localhost/widi/server/dtamatkul-updatedata.php");
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
            window.location.href="index.php?pg=mk";
        },5000)
    }
}