    function date_time() {
      var time = new Date();
      var gio = time.getHours();
      var phut = time.getMinutes();
      var giay = time.getSeconds();
      if (gio < 10) {
        gio = "0" + gio ;
      }
      if (phut < 10) {
        phut = "0" + phut ;
      }
      if (giay < 10) {
        giay = "0" + giay ;
      }
           document.getElementById('time').innerHTML = gio +"    |    "+ phut +"    |    "+ giay ;
           document.getElementById("txt-time").innerHTML = "giờ  |    phút   |     giây ";
          setTimeout("date_time()",1);
    }

    date_time();


    //     function date() {
    //   var time = new Date();
    //   var gio = time.getHours();
    //   var phut = time.getMinutes();
    //   var giay = time.getSeconds();
    //   if (gio < 10) {
    //     gio = "0" + gio ;
    //   }
    //   if (phut < 10) {
    //     phut = "0" + phut ;
    //   }
    //   if (giay < 10) {
    //     giay = "0" + giay ;
    //   }
    //        document.getElementById('t').innerHTML = gio +"    |    "+ phut +"    |    "+ giay ;
    //        document.getElementById("txt-t").innerHTML = "giờ  |    phút   |     giây ";
    //       setTimeout("date_time()",1);
    // }

    // date();