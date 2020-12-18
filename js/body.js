//Merge Operation\
var mergeExt = document.getElementById("merge-ext-sec");
mergeExt.style.display = "none";
//view Table Data


    
//on radio(att-type) Select, Update File Accepting Formats
$('#att-type-one').on('click', function() {
    document.getElementById("excel1").value = "";
    document.getElementById("excel1").accept = ".csv,.tsv";
});
$('#att-type-two').on('click', function() {
  // document.getElementById("myFile").accept = "audio/*";
  document.getElementById("excel1").value = "";
  document.getElementById("excel1").accept = ".xlsx";
});

