$(function () {

    var _token = $("#_token").attr('content');

    $("#description-ul li h4").click(function () {
        if($(this).siblings('div').css('display')=='block'){
            $(this).children('.plus').show(1);
            $(this).children('.min').hide(1);
            $(this).siblings('div').slideUp(300);
        }else {
            $(this).children('.min').show(1);
            $(this).children('.plus').hide(1);
            $(this).siblings('div').slideDown(300);
        }

    });

    $(".images .card-body").click(function () {
        $(this).next('.input-image').trigger('click');
    });


    $("#add-location").click(function () {
        var file = new FormData();

        // work time
        var work_time  = [];
        var k = 0;
        $("#div-time-work .work-time").each(function (index,value) {
            work_time[k] = $(this).val();
            k++;
        });
        console.log(work_time);

        // pastime
        var pastime =[];
        var j=0;
        $(".pastime").each(function () {
            if($(this).is(':checked')){
                pastime[j] =$(this).val();
                j++;
            }
        });
        var transport =[];
        var s=0;
        $(".transport").each(function () {
            if($(this).is(':checked')){
                transport[s] = $(this).val();
                s++;
            }
        });

        var imageOne = document.getElementById("image-one").files[0];
        var imageTwo = document.getElementById("image-two").files[0];
        var imageThree = document.getElementById("image-three").files[0];
        var imageFour = document.getElementById("image-four").files[0];
        var imageFive = document.getElementById("image-five").files[0];
        var imageSix = document.getElementById("image-six").files[0];

        if($("#image-one").val() != '') {
            file.append('imageOne',imageOne);
        }
        if($("#image-two").val() != '') {
            file.append('imageTwo',imageTwo);
        }
        if($("#image-three").val() != '') {
            file.append('imageThree',imageThree);
        }
        if($("#image-four").val() != '') {
            file.append('imageFour',imageFour);
        }
        if($("#image-five").val() != '') {
            file.append('imageFive',imageFive);
        }
        if($("#image-six").val() != '') {
            file.append('imageSix',imageSix);
        }


        if($("#title-one").val().length!=0 && $("#content-one").val().length!=0 ){
            var titleOne = $("#title-one").val();
            var contentOne = $("#content-one").val();
            file.append('title1',titleOne);
            file.append('content1',contentOne);
        }
        if($("#title-two").val().length!=0 && $("#content-two").val().length!=0 ){
            var titleTwo = $("#title-two").val();
            var contentTwo = $("#content-two").val();
            file.append('content2',contentTwo);
            file.append('title2',titleTwo);
        }
        if($("#title-three").val().length!=0 && $("#content-three").val().length!=0 ){
            var titleThree = $("#title-three").val();
            var contentThree = $("#content-three").val();
            file.append('title3',titleThree);
            file.append('content3',contentThree);
        }
        if($("#title-four").val().length!=0 && $("#content-four").val().length!=0 ){
            var titleFour = $("#title-four").val();
            var contentFour = $("#content-four").val();
            file.append('title4',titleFour);
            file.append('content4',contentFour);
        }
        if($("#title-five").val().length!=0 && $("#content-five").val().length!=0){
            var titleFive = $("#title-five").val();
            var contentFive = $("#content-five").val();
            file.append('content5',contentFive);
            file.append('title5',titleFive);
        }

        var name = $("#name").val();
        var state = $("#state").val();
        var city = $("#city").val();
        var category = $("#category").val();
        var subCategory = $("#sub-category").val();
        var tel = $("#tel").val();

        file.append('_token',_token);
        file.append('name',name);
        file.append('city',city);
        file.append('state',state);
        file.append('category',category);
        file.append('pastime',pastime);
        file.append('transport',transport);
        file.append('subCategory',subCategory);

        if($("#checkbox-private-mood").prop('checked')=='1'){
            file.append('work_time',work_time);
            if(tel.length>10){
                file.append('tel',tel);
            }
        }

        $.ajax({
            url:'/addLocationRequest',
            method:'POST',
            data:file,
            processData:false,
            contentType:false,
            success:function (data) {
                if(data.result =='1'){
                    $(".col-lg-12 input").val('');
                    $(".col-lg-12 textarea").val('');
                    $(".col-lg-12 input:checkbox").prop("checked", false);
                    $.each($(".col-lg-12 option:selected"), function() {
                        $(this).prop('selected', false);
                    });
                    $("#alert-success").click();
                    $("#error-add-location").hide();
                }
            },
            error:function (data) {
                var errors = data.responseJSON;
                console.log(errors);
                var str = ' <ul>';
                $.each(errors.errors , function (key,value) {
                    str += '<li>';
                    str += value;
                    str += '</li>';
                });
                str += '</ul>';
                $("#error-add-location").html(str);
                $("#error-add-location").fadeIn();
                $("#success-create-template").fadeOut();
            }
        });
    });

    $("#state").change(function () {
        var val  = $(this).val();
        $.post('/cityShowRequest',{state_id:val,_token:_token},function (data) {
            var str = "<option  value='0'>انتخاب کنید</option>";
            $.each(data ,function (index,value) {
                str +="<option value='"+value.id+"'>"+value.name+"</option>";
            });
            $("#city").html(str);

        })
    });

    $("#category").change(function () {
        var val  = $(this).val();
        $.post('/subCategoryShowRequest',{category_id:val,_token:_token},function (data) {
            var str = "<option  value='0'>انتخاب کنید</option>";
            $.each(data ,function (index,value) {
                str +="<option value='"+value.id+"'>"+value.title+"</option>";
            });
            $("#sub-category").html(str);

        })
    });

    $("#checkbox-private-mood").change(function () {
        if($(this).prop('checked')=='1'){
            $("#tel-col-lg").show(1);
            $("#div-time-work").show(1);
        }else {
            $("#tel-col-lg").hide(1);
            $("#div-time-work").hide(1);
        }
    })


});