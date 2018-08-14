
$(document).ready(function () {

    // prüfen Formular
    $(".submitformular").click(function () {
        var error = 0;
   var tinhTp = $( ".selectTinhTp" ).val();
   var selectNhomNganh = $( ".selectNhomNganh" ).val();
   var tieudeForm = $( ".tieudeForm" ).val();
   var gioithieuForm = $( ".gioithieuForm" ).val();
   var noidungForm = $( ".noidungForm" ).val();
console.log('tieudeForm '+tieudeForm)
console.log('gioithieuForm '+gioithieuForm)
console.log('noidungForm '+noidungForm)
       if(tinhTp != ''){
       }else {
           error = 1;
           console.log(1)
       }
        if(selectNhomNganh != ''){
        }else {
            error = 1;  console.log(1)
        }
        if(tieudeForm != ''){
        }else {
            error = 1;  console.log(12)
        }
        if(gioithieuForm != ''){
        }else {
            error = 1;  console.log(13)
        }
        /*
        if(noidungForm != ''){
        }else {
            error = 1;  console.log(14)
        }
        */

        if(error == 1){
            $('.formularerror').show();
            $("html, body").animate({ scrollTop: 0 }, "slow");
        }else{
            $( ".formularSubmit" ).submit();
        }
    });
    //pfrüfen enden





    // select value 
    $(".dangnhapbt").click(function () {
        var tinhthanhcheck = $("#checkselecttinhthanh").val();
        // console.log(tinhthanhcheck)
        if (tinhthanhcheck != '') {
            $(".searchsubmit").submit();
        } else {
            $('#selecttinhthanhpho3').addClass('borderClasstinhthanh');
            $('.thanhphodisplay').show();
        }
    });


    // lua chon don le mau tin
    $('#selectchuyennganh3 select').change(function () {
        var $this = $(this),
                val = $this.val();
        $.ajax({
            url: "admin/?type=6672&thosuachua_luachonchuyennganh[controller]=Nhomtho&thosuachua_luachonchuyennganh[action]=chonchuyennganh2&chuyennganh=" + val,
            success: function (data) {
                $('#chuyennganhsearch').html('');
                $('#chuyennganhsearch').append(data);
            }
        });
    });

    $('#selecttinhthanhpho3 select').change(function () {
        var $this = $(this),
                val = $this.val();
        $.ajax({
            url: "admin/?type=6671&thosuachua_luachonquanhuyen[controller]=Nhomtho&thosuachua_luachonquanhuyen[action]=quanhuyen2&tinhthanh=" + val,
            success: function (data) {
                $('#ajaxformsearch').html('');
                $('#ajaxformsearch').append(data);
            }
        });
    });
    // lua chon don le mau tin 

    // lua chon don le mau tin
    $('#selectchuyennganh1 select').change(function () {
        var $this = $(this),
                val = $this.val();
        $.ajax({
            url: "admin/?type=6669&thosuachua_luachonchuyennganh[controller]=Nhomtho&thosuachua_luachonchuyennganh[action]=chonchuyennganh1&chuyennganh=" + val,
            success: function (data) {
                $('#chuyennganh').html('');
                $('#chuyennganh').append(data);
            }
        });
    });

    $('#selecttinhthanhpho1 select').change(function () {
        var $this = $(this),
                val = $this.val();
        $.ajax({
            url: "admin/?type=6668&thosuachua_luachonquanhuyen[controller]=Nhomtho&thosuachua_luachonquanhuyen[action]=quanhuyenmautin&tinhthanh=" + val,
            success: function (data) {
                $('#ajaxform').html('');
                $('#ajaxform').append(data);
            }
        });
    });
    // lua chon don le mau tin 




    //  http://timthosuachua.com/admin/?type=6666&thosuachua_luachonquanhuyen[controller]=Nhomtho&thosuachua_luachonquanhuyen[action]=quanhuyen&tinhthanh=28
    $('#selecttinhthanhpho select').change(function () {
        var $this = $(this),
                val = $this.val();

        //  console.log(val)
        $.ajax({
            url: "admin/?type=6666&thosuachua_luachonquanhuyen[controller]=Nhomtho&thosuachua_luachonquanhuyen[action]=quanhuyen&tinhthanh=" + val,
//        type: "POST",
            // contentType: "application/x-www-form-urlencoded; charset=UTF-8",
            // data : $("#ajaxform").serialize(),
            //    dataType: 'json',
            success: function (data) {
//         request.setCharacterEncoding("UTF-8");
//     response.setContentType("text/html; charset=UTF-8");
                $('#ajaxform').html('');
                $('#ajaxform').append(data);
            }
// dataType: 'json',
//            success: function(response) {
//
//                if (response['status'] == 'success') {
//                    // Do anything...
//                      console.log('nhungc chiec')
//                } else {
//                    $.each(response.errors, function( index, value ){
//                        $("#ajaxform").find("#"+value).addClass('error');
//                    });
//                }
//            }
        });

//        val1 =  '.bereich' + val;
//        $(val1).click(function () {
//
//        });
//        $(val1).click(function() {
//            //    var href = $(this).attr("href");
//            var href = 'http://'+ location.host + '/' + $(this).attr("href");
//            window.location.href = href;
//        });
//        $(val1).trigger("click");
    });

// $('#selectchuyennganh select').change(function () {
//        var $this = $(this),
//            val   = $this.val();   
//                $.ajax({
//    url: "admin/?type=6667&thosuachua_luachonchuyennganh[controller]=Nhomtho&thosuachua_luachonchuyennganh[action]=chonchuyennganh&chuyennganh="+val,
//    context: document.body
//    }).done(function() {
// $('#chuyennganh').append(context);
//});

    $('#selectchuyennganh select').change(function () {
        var $this = $(this),
                val = $this.val();
        $.ajax({
            url: "admin/?type=6667&thosuachua_luachonchuyennganh[controller]=Nhomtho&thosuachua_luachonchuyennganh[action]=chonchuyennganh&chuyennganh=" + val,
            success: function (data) {
                $('#chuyennganh').html('');
                $('#chuyennganh').append(data);
            }
        });
    });

    /* viec tim tho */

// $('#selectchuyennganhviectimtho select').change(function () {
//        var $this = $(this),
//            val   = $this.val();   
//                $.ajax({
//    url: "admin/?type=66783&thosuachua_luachonchuyennganh4[controller]=Nhomtho&thosuachua_luachonchuyennganh4[action]=chonchuyennganh4&chuyennganh="+val,
//
//         success: function (data) {
//  $('#chuyennganh').html('');
//               $('#chuyennganh').append(data);
//            }
//    });
//    });
    $('#selectchuyennganhviectimtho select').change(function () {
        var $this = $(this),
                val = $this.val();
        $.ajax({
            url: "admin/?type=7777&thosuachua_luachonchuyennganh[controller]=Nhomtho&thosuachua_luachonchuyennganh[action]=chonchuyennganh4&viectimtho=ja&chuyennganh=" + val,
            success: function (data) {
                $('#chuyennganh').html('');
                $('#chuyennganh').append(data);
            }
        });
    });
//    $('#selectchuyennganhviectimtho select').change(function () {
//    var $this = $(this),
//        val = $this.val();
//    $.ajax({
//        url: "admin/?type=7777&thosuachua_luachonchuyennganh[controller]=Nhomtho&thosuachua_luachonchuyennganh[action]=chonchuyennganh4&viectimtho=ja&chuyennganh=" + val,
//        success: function (data) {
//            $('#chuyennganh').html('');
//            $('#chuyennganh').append(data);
//        }
//    });
//});
    $('#selecttinhthanhpho4 select').change(function () {
        var $this = $(this),
                val = $this.val();
        $.ajax({
            url: "admin/?type=6674&thosuachua_luachonquanhuyen4[controller]=Nhomtho&thosuachua_luachonquanhuyen4[action]=quanhuyen4&tinhthanh=" + val,
            success: function (data) {
                $('#quanhuyenviectimtho4').html('');
                $('#quanhuyenviectimtho4').append(data);
            }
        });
    });

    // tuyen dung
    // 
    $('#selecttinhthanhphotuyendung select').change(function () {
        var $this = $(this),
                val = $this.val();
        $.ajax({
            url: "admin/?type=6774&thosuachua_luachonquanhuyentuyendung[controller]=Nhomtho&thosuachua_luachonquanhuyentuyendung[action]=quanhuyentuyendung&tinhthanh=" + val,
            success: function (data) {
                $('#ajaxformtuyendung').html('');
                $('#ajaxformtuyendung').append(data);
            }
        });
    });
    $('#selectchuyennganhtuyendung select').change(function () {
        var $this = $(this),
                val = $this.val();
        $.ajax({
            url: "admin/?type=7778&thosuachua_luachonchuyennganhtuyendung[controller]=Nhomtho&thosuachua_luachonchuyennganhtuyendung[action]=chonchuyennganhtuyendung&viectimtho=ja&chuyennganh=" + val,
            success: function (data) {
                $('#chuyennganhtuyendung').html('');
                $('#chuyennganhtuyendung').append(data);
            }
        });
    });
    // tuyen dungende

    // tintimviec
    // 
    $('#selecttinhthanhphotintimviec select').change(function () {
        var $this = $(this),
             val = $this.val();
        $.ajax({
            url: "admin/?type=33331&tinhthanh=" + val,
            success: function (data) {
                $('#ajaxformtintimviec').html('');
                $('#ajaxformtintimviec').append(data);
            }
        });
    });
    $('#selectchuyennganhtintimviec select').change(function () {
        var $this = $(this),
             val = $this.val();
        $.ajax({
            url: "admin/?type=33332&tintimviec=ja&chuyennganh=" + val,
            success: function (data) {
                $('#chuyennganhtintimviec').html('');
                $('#chuyennganhtintimviec').append(data);
            }
        });
    });

    //endetin tim viec


//http://timthosuachua.com/admin/?type=6666&thosuachua_luachonquanhuyen[controller]=Nhomtho&thosuachua_luachonquanhuyen[action]=quanhuyen
    //   $('.form-control').attr("placeholder", "Type your answer here");
// $(".form-control").attr("placeholder", "variable");

    $(".dangnhapbt").click(function () {
        var donglait = $(".dangnhapbt").text();
        if (donglait == 'Đăng Nhập') {
            $(".dangnhapbt").text('Đóng Lại');
        }
        if (donglait == 'Đóng Lại') {
            $(".dangnhapbt").text('Đăng Nhập');
        }

        var hidenwert = $(".werthiden").text();
        if (hidenwert == 1) {
            $(".anmeldenformular").show("fast");
            $(".werthiden").text(2);
            $(".anmeldenformular1").hide("fast");
        }
        if (hidenwert == 2) {
            $(".anmeldenformular").hide("fast");
            $(".werthiden").text(1);
            $(".anmeldenformular1").hide("fast");
        }
    });
    /*
     console.log($( ".werthiden" ).text())
     $( ".anmeldenformular" ).show("fast");
     $( ".dangnhapbt1" ).show("fast");
     $( ".dangnhapbt" ).hide("fast");
     });
     $( ".dangnhapbt1" ).click(function() {
     $( ".anmeldenformular" ).hide("fast");
     $( ".dangnhapbt" ).show("fast");
     $( ".dangnhapbt1" ).hide("fast");
     });
     */
    $(".registrierer").click(function () {
        $(".anmeldenformular1").show("fast");
        $(".anmeldenformular").hide("fast");
        $(".werthiden").text(2);
    });
    $('#example').DataTable({
        "order": [[0, "desc"]]
    });
    // dăng hồ sơ
    $('#tintuyendung').DataTable({
        "order": [[0, "desc"]]
    });
    $('#tintimtho').DataTable({
        "order": [[0, "desc"]]
    });
    $('#tinnhatuyendung').DataTable({
        "order": [[0, "desc"]]
    });
    $('#kichhoat').DataTable({
        "order": [[0, "desc"]]
    });
    $('#kichhoat1').DataTable({
        "order": [[0, "desc"]]
    });
     $('#kichhoat3').DataTable({
        "order": [[0, "desc"]]
    });
     $('#kichhoat4').DataTable({
        "order": [[0, "desc"]]
    });
  //  jQuery(document).on("click", ".dong", function(e){
  /*
    $('.dong').click(function () {
  $('.mainnavigation').hide();
$('.navbar-toggle').removeClass('dong');
$('.navbar-toggle').addClass('collapsed');

});
*/
      $('.collapsed').click(function () {
$('.mainnavigation').show('slow');
$('.navbar-toggle').addClass('dong');
$('.navbar-toggle').removeClass('collapsed');

        });
       
      
});
 
