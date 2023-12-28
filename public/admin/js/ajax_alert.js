$(document).ready(function(){

  // User Login Submit alert
    $('body').on('submit','#admin_login_alert',function(e){
      e.preventDefault();
  
      $.ajax({
      url: $(this).attr('action'),
      method:"POST",
      data: new FormData(this),
      contentType:false,
      cache:false,
      processData: false,
      success: function(data){
          if (data.status == 200) {
             Swal.fire({
              customClass: 'swalstyle',
              icon: "success",
              title: data.msg,
              text: "Thanks",
              timer: 1500,
              
            });

            window.location.href = '/dashboard';
          }else{
            Swal.fire({
              customClass: 'swalstyle',
              icon: "error",
              title: data.msg,
              text: "Thanks",
              timer: 1500,
            });
          }
       }
  })
  })
  
    // student registation alert custome js
    $('body').on('submit', '#adminregalert', function (e) {
      e.preventDefault();
  
      $.ajax({
        url: $(this).attr('action'),
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          if (data.status == 200) {
            Swal.fire({
              icon: "success",
              title: data.msg,
              timer: 1500,
              customClass: 'swalstyle',
              showConfirmButton: false,
            });
            setTimeout(function () {
              window.location.href = '/admin/login';
            }, 1500);
  
  
          } else {
            Swal.fire({
              icon: "error",
              title: data.msg,
              timer: 2000,
              customClass: 'swalstyle',
              showConfirmButton: false,
            });
          }
        }
      })
    })
    $('body').on('submit', '#common_alert', function (e) {
      e.preventDefault();
  
      $.ajax({
        url: $(this).attr('action'),
        method: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          if (data.status == 200) {
            Swal.fire({
              icon: "success",
              title: data.msg,
              timer: 1500,
              customClass: 'swalstyle',
              showConfirmButton: false,
            });  
  
          } else {
            Swal.fire({
              icon: "error",
              title: data.msg,
              timer: 2000,
              customClass: 'swalstyle',
              showConfirmButton: false,
            });
          }
        }
      })
    })



      })

