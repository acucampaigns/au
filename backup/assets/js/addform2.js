jQuery(function() {

jQuery('select[name="pic"]').change(function() {
var Pic = jQuery('#pic').val();
if (Pic== "ブルネイ" ||Pic== "中国"||Pic== "シンガポール"||Pic== "マレーシア"){
  document.getElementById("niddiv").style.display="block";
  jQuery('#nid').addClass('validate[required]');
  return;
 }

else if (Pic == "日本"||Pic== "カナダ"||Pic== "アメリカ合衆国"||Pic== "韓国"||Pic== ""){
document.getElementById("niddiv").style.display="";
document.getElementById("niddiv").style.display="none";
  jQuery('#nid').removeClass('validate[required]');
   }
});

jQuery('select[name="pic"]').change(function() {
var Pic = jQuery('#pic').val();
if (Pic== "ブルネイ"){
  jQuery('#passportnumber').removeClass();
  jQuery('#passportnumber').addClass('form-control fm validate[required,custom[onlyLetterNumber],custom[BruneiPassport]]');
  return;
 }

else if (Pic == "中国"){
  jQuery('#passportnumber').removeClass();
  jQuery('#passportnumber').addClass('form-control fm validate[required,custom[onlyLetterNumber],custom[HongkongPassport]]');
   }

else if (Pic == "シンガポール"){
  jQuery('#passportnumber').removeClass();
  jQuery('#passportnumber').addClass('form-control fm validate[required,custom[onlyLetterNumber]]');
   }

else if (Pic == "マレーシア"){
  jQuery('#passportnumber').removeClass();
  jQuery('#passportnumber').addClass('form-control fm validate[required,custom[onlyLetterNumber],custom[MalaysiaPassport]]');
   }

else if (Pic == "韓国"){
    jQuery('#passportnumber').removeClass();
  jQuery('#passportnumber').addClass('form-control fm validate[required,custom[onlyLetterNumber],custom[SouthKoreaPassport]]');
   }

else if (Pic == "日本"){
  jQuery('#passportnumber').removeClass();
  jQuery('#passportnumber').addClass('form-control fm validate[required,custom[onlyLetterNumber],custom[JapanPassport]]');

   }

else if (Pic == "カナダ"){
  jQuery('#passportnumber').removeClass();
  jQuery('#passportnumber').addClass('form-control fm validate[required,custom[onlyLetterNumber],custom[CanadaPassport]]');

   }

else if (Pic == "アメリカ合衆国"){
  jQuery('#passportnumber').removeClass();
  jQuery('#passportnumber').addClass('form-control fm validate[required,custom[onlyLetterNumber],custom[USAPassport]]');
   }

});






});
