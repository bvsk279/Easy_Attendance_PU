//sidebar btn function
$(document).ready(function() {
    $('#sidebar-btn').on('click', function() {
      $('#sidebar').toggleClass('visible');
    });
  });
  //sidebar btn function END



//Form Validation
function merge(){
  inp1 = document.forms["form1"]["att-type"].value;
  inp2 = document.forms["form1"]["excel1"].value;
  inp3 = document.forms["form1"]["excel2"].value;
  if((inp1=='') || (inp2=='') || (inp3=='')){
    document.getElementById("validate-warning").innerHTML = "fill all required(*) fields";
    return false;
  }
  if((inp1 != '') && (inp2!='') && (inp3!='')){
    document.getElementById("validate-warning").innerHTML = '';

  }
  else{
    return true;
  }
}
//Form Validation END



//View Table on page Operations
  $(document).ready(function() {
    $('#table-view-tgl').on('click', function() {
      $('#stats-tbl').slideDown(500);
      $('#Att-List-tbl').slideDown(100);
    });

    $('#table-hide-tgl').on('click', function() {
      $('#stats-tbl').slideUp(500);
      $('#Att-List-tbl').slideUp(100);
    });


    //button toggles between hide and show

    $('#tbl-hide-btn').on('click', function() {
      $('#tbl-hide-btn').css("display", "none");
      $('#tbl-view-btn').css("display", "block");
    });

    $('#tbl-view-btn').on('click', function() {
      $('#tbl-view-btn').css("display", "none");
      $('#tbl-hide-btn').css("display", "block");
    });
  });
  //View table on page Operations END


  
  //Attendance Sheet Download Button Code
  // $(document).ready(function() {
  //   $('#Att-sht-dld').click(exportToExcel('Attendance-List', 'EasyAttendance'));
  // });
  function getFileName(){
    var today = new Date();
    var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
    var time = today.getHours() + "_" + today.getMinutes() + "_" + today.getSeconds();
    var dateTime = date+'_'+time;
    name = "Easy_Attendance_"+dateTime;
    return name;
  }

  function exportToExcel(tableID, filename = ''){
    var downloadurl;
    var dataFileType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xlsx':'export_excel_data.xlsx';
    
    // Create download link element
    downloadurl = document.createElement("a");
    
    document.body.appendChild(downloadurl);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTMLData], {
            type: dataFileType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;
    
        // Setting the file name
        downloadurl.download = filename;
        
        //triggering the function
        downloadurl.click();
    }
}



//report error form
var reportForm = document.getElementById("report-error-form");
var thanksForm = document.getElementById("thankyou-form");
reportForm.style.display = "none";//change this to none after development
$(document).ready(function(){
    //book-btn action
    $('#report-btn').click(function(){
      $(thanksForm).css("display", "none");
        $(reportForm).css("display", "block");
    });
    //close btn
    $('#close-report-form').click(function(){
        $(reportForm).css("display", "none");
    });

});

//say thankyou form
thanksForm.style.display = "none";//change this to none after development
$(document).ready(function(){
    //book-btn action
    $('#thankyou-btn').click(function(){
      $(reportForm).css("display", "none");
        $(thanksForm).css("display", "block");
    });
    //close btn
    $('#close-thanks-form').click(function(){
        $(thanksForm).css("display", "none");
    });

});

//Privacy Policy
var pPolicyPopup = document.getElementById("p-policy-popup");
pPolicyPopup.style.display = "none";//change this to none after development
$(document).ready(function(){
    //pop on click poicy link
    $('#p-policy-btn').click(function(){
        $(pPolicyPopup).css("display", "block");
    });
    //close btn
    $('#close-p-policy').click(function(){
        $(pPolicyPopup).css("display", "none");
    });
});