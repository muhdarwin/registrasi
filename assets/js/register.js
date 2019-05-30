var constURL = $('#constURL').attr('value');
var autok = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6IjEiLCJ1c2VybmFtZSI6IkFkbWluIiwiaWF0IjoxNTI0NTM3NTcwLCJleHAiOjE1MjQ1NDExNzB9.1Txl1KUs6k9_ldVTWQqEoWqbOTOuqdZ_DlR-tDEmozA';

$("#btnSubmit").click(function(e) {
    //e.preventDefault();

    //window.location.href = constURL+"/selesai";

    var nama = $("#nama").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var birthday = $("#birthday").val();
    var jkelamin = false;
    var pria = $("#pria").is(':checked');
    if (pria ==true) jkelamin = true;
    var pilihan = $("#layanan").val();

    // alert(birthday);
    // return;

    // var inputform = "";
    // inputform = ["#nama", "#email", "#phone", "#birthday"];

    // if(nama && email && birthday && pria && pilihan){
         tambahUsers(nama,email,phone,birthday,jkelamin,pilihan);
    // } else {
    //     for(var i = 0; i<inputform.length; i++){
    //         if(!$(inputform[i]).val() || $(inputform[i]).val() == 0){
    //             $(inputform[i]).parent().addClass('has-error');
    //             if($(inputform[i]).parent().has('span').length > 0){
    //             }else{
    //                 $(inputform[i]).parent().append("<span class='text-danger alert-text' style='margin-left:10px'>*empty</span>");
    //             }
    //         }else{
    //           if($(inputform[i]).parent().has('span').length > 0){
    //               $(inputform[i]).parent().find('.alert-text').remove();
    //           }else{
    //           }
    //         }
    //     }
    // }
});

function tambahUsers(nama,email,phone,birthday,pria,pilihan){
    var dataSimpan = {
        nama : nama,
        email : email,
        phone : phone,
        birthday : birthday,
        layanan : pilihan,
        jkelamin : pria
    };

    //alert(constURL);return;

    $.ajax({
    type: "POST",
    url: constURL + '/registrasi/simpandata',
    data: dataSimpan,
    headers: {"Authorization": autok},
    dataType: 'json',
    success: function(data) {
        if(data.status == 1){
            //alert('Sukses');

            //console.log(data);
            //$("#btnSubmit").removeAttr("disabled");
            //resetInput();
        }else{
            alert(data.message);
            //resetInput();
        }
    }
  });
}
