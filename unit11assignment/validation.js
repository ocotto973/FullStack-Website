//Slide 28
"use strict";
//Oscar Cotto 4-16-2023 IT202-006 Unit 11 Assignment oc4@njit.edu

$(document).ready(()=> {
  $("#form").submit(event =>{
    let isValid = true;
    //check dessert code 
    const code = $("#code").val().trim();
    if ( code == "" ) {
        $("#code").next().text("Code cannot be empty");
        isValid = false;
    }
    else if(code.length<4){
      $("#code").next().text("Code length cannot be less then 4 characters.");
        isValid = false;
    }
    else if(code.length>10){
      $("#code").next().text("Code length cannot be greater then 10 characters.");
        isValid = false;
    }
    else {
        $("#code").next().text("");
    }
    //check name
    const name = $("#name").val().trim();
    if ( name == "" ) {
      $("#name").next().text("Name cannot be empty");
      isValid = false;
    }
    else if(name.length<10){
      $("#name").next().text("Name length cannot be less then 10 characters.");
        isValid = false;
    }
    else if(name.length>100){
      $("#name").next().text("Name length cannot be greater then 100 characters.");
        isValid = false;
    }
    else {
        $("#name").next().text("");
    }
    //check description
    const description = $("#description").val().trim();
    if ( description == "" ) {
      $("#description").next().text("Description cannot be empty");
      isValid = false;
    }
    else if(description.length<4){
      $("#description").next().text("Description length cannot be less then 10 characters.");
        isValid = false;
    }
    else if(description.length>255){
      $("#description").next().text("Description length cannot be greater then 255 characters.");
        isValid = false;
    }
    else {
        $("#description").next().text("");
    }
    //check price
    const price = parseInt($("#price").val().trim());
    if ($("#price").val().trim() == "") {
      $("#price").next().text("Price cannot be empty.");
      isValid = false;
    }
    else if(price<=0){
      $("#price").next().text("Price cannot be less then or equal to $0.");
        isValid = false;
    }
    else if(price>100000){
      $("#price").next().text("Price cannot be greater then $100,000.");
        isValid = false;
    }
    else {
        $("#price").next().text("");
    }
    //prevent the submission
    if(isValid == false){
      event.preventDefault();
    }
  });

});



