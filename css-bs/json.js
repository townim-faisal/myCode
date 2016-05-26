(function($) {

$(document).ready(function() { 

var kitaabTitle = {
	"kitab1": "Book1,Book2",
	"kitab2": "Bok1,Bok2",
	"kitab3": "Bk1,Bk2"
};

var bookTitle = {
	"Book1" : "C1,C2",
	"Book2" : "Ch1,Ch2",
	"Bok1"	: "Cha1,Cha2",
	"Bok2"	: "Chap1,Chap2",
	"Bk1"	: "Chapt1,Chapt2",
	"Bk2"	: "Chapte1,Chapte2"
};
 
//populate the options in the select tag on page load
for(var key in kitaabTitle) {
  $('#kitaabtitle').append(
  	$("<option>").attr("value", key).text(key)
  );
}
  
//changes the options of the select tag for types when a new option is selected in the category select tag.
$('#kitaabtitle').change(function(){
    populateTypes1(this);   
    $('#chaptertitle').find('option').remove(); 
});

$('#booktitle').change(function(){
    populateTypes2(this);     
});
 
function populateTypes1(x) {
  var cate = $(x).find("option:selected").attr('value');
  var types = kitaabTitle[cate].split(",");
  $('#booktitle').find('option').remove();
  for(var i=0; i< types.length; i++) {
	$('#booktitle').append(
	    $("<option>").attr("value", types[i]).text(types[i])
	);
  }
}

function populateTypes2(x) {
  var cate = $(x).find("option:selected").attr('value');
  var types = bookTitle[cate].split(",");
  $('#chaptertitle').find('option').remove();
  for(var i=0; i< types.length; i++) {
	$('#chaptertitle').append(
	    $("<option>").attr("value", types[i]).text(types[i])
	);
  }
}


});
}(jQuery));