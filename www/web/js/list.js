$(document).ready(
  function () {
    columnW = {0:"35mm", 1:"32mm", 2:"16mm"};
    $(".row:first > div").each(
      function (divIndex, div) {
        if (divIndex < 2 ) {  
          $(".row > div:nth-child("+(divIndex+1)+")").css("width",columnW[divIndex]);
        }
      });
  });
