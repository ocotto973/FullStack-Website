"use strict";
//Oscar Cotto 4-16-2023 IT202-006 Unit 11 Assignment oc4@njit.edu
$(document).ready(( )=> {
  $("#dessertPic2 img").each( (index, img) => {
    $(img).mouseover( function() {
      const src = $(this).attr("src");
      const new_src = src.replace("-modified.jpg",".jpg"); //edit original pic
      $(this).attr("src", new_src);
    });

    $(img).mouseout( function() {
      const src = $(this).attr("src");
      const new_src = src.replace(".jpg","-modified.jpg"); //change back to original
      $(this).attr("src", new_src);
    });

  });

});