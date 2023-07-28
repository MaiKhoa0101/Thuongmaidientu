function timkiem1(f_thun,f_jo,f_sho,f_je,f_hoa,f_swe,f_po) {
    var ketqua="";
    if(f_thun==true){
        ketqua+="Áo thun";
    }
    if(f_jo==true){
        ketqua+="Quần Jogger";
    }
    if(f_po==true){
        ketqua+="Áo polo";
    }
    if(f_sho==true){
        ketqua+="Quần short";
    }
    if(f_je==true){
        ketqua+="Quần Jean";
    }
    if(f_hoa==true){
        ketqua+="Đồ hoạ tiết";
    }
    if(f_swe==true){
        ketqua+="Áo sweater";
    }
    alert("Bạn đã tìm kiếm những món đồ: "+ketqua);
}

function timkiem() {
    // Gửi yêu cầu AJAX đến tệp PHP    
    //var xhttp = new XMLHttpRequest();
    //xhttp.onreadystatechange = function() {
        
        //if (this.readyState == 4 ) {
            var Timkiem=document.getElementById("Timkiem").value;
            Timkiem=Timkiem.toLowerCase()
            //var response = JSON.parse(this.responseText);
            //document.getElementById("Timkiem").innerHTML = "Thun: " + response.Thun;
            
            // Xử lý kết quả trả về từ tệp PHP
            var f_thun=false,f_po=false,f_jo=false,f_sho=false,f_je=false,f_hoa=false,f_swe=false;
            
            if (Timkiem.includes("th")==true){
                f_thun=true;  
            }
            if (Timkiem.includes("jo")==true){
                f_jo=true;
            }
            if (Timkiem.includes("po")==true){
                f_po=true;
            }
            if (Timkiem.includes("sho")==true){
                f_sho=true;
            }
            if (Timkiem.includes("je")==true){
                f_je=true;
            }
            if (Timkiem.includes("hoa")==true){
                f_hoa=true;
            }
            if (Timkiem.includes("swe")==true){
                f_swe=true;
            }
            if (Timkiem.includes("po")==true){
                f_po=true;
            }
            timkiem1(f_thun,f_jo,f_sho,f_je,f_hoa,f_swe,f_po);


            //var response = JSON.parse(this.responseText);
            // Do something with the response...
            //alert(response);
        //}
    //}
    
    //xhttp.open("GET", "timkiem.php", true);
    //xhttp.send();

    
    }

function luachon(){
    var f_thun=false,f_po=false,f_jo=false,f_sho=false,f_je=false,f_hoa=false,f_swe=false;
    var Timkiem=document.getElementById("Timkiem").value;
    Timkiem=Timkiem.toLowerCase()
    if (Timkiem.includes("th")==true){
        f_thun=true;
    }
    if (Timkiem.includes("jo")==true){
        f_jo=true;
    }
    if (Timkiem.includes("po")==true){
        f_po=true;
    }
    if (Timkiem.includes("sho")==true){
        f_sho=true;
    }
    if (Timkiem.includes("je")==true){
        f_je=true;
    }
    if (Timkiem.includes("hoa")==true){
        f_hoa=true;
    }
    if (Timkiem.includes("swe")==true){
        f_swe=true;
    }

    timkiem(f_thun,f_jo,f_sho,f_je,f_hoa,f_swe);

}