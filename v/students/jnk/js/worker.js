/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
//    alert("f")
// $('.my').datetator();

    var param = {};
    $(function () {
//                $('.dateofbirth').datetator();
//       $("#administrative_area_level_1").prop('disabled', true);
//       $("#country").prop('disabled', true);

        $(".error").focus(function () {
            $("#error").empty();
        });
        $(".error2").focus(function () {
            $("#error2").empty();
        });
        $(".error3").focus(function () {
            $("#error3").empty();
        });
        $(".error4").focus(function () {
            $("#error4").empty();
        });

        /* 
         Orginal Page: http://thecodeplayer.com/walkthrough/jquery-multi-step-form-with-progress-bar 
         
         */
//jQuery time

        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches

        var fullname, dob, sor, reli, childrens, genda, marital, nationality;
        var address, state, city, phone, email, country = "", salary = "", post = "", category = "", qualification = "",year_exp="",experience="";
        $(".next").click(function () {
            var sibs = $(this).siblings("input");
            var sibs2 = $(this).siblings("select");
//                    alert(sibs2)
            var level = $(this).attr("rel");
//                    alert(level)
            $.each(sibs, function (id, objx) {
//                        console.log(objx);
//alert(objx)
                var name = objx.name, value = objx.value;
//                        alert(objx.value)



                if (name === "fn") {
                    fullname = value;
                }
                else if (name === "dob") {
                    dob = value;
                }
                else if (name === "sor") {
                    sor = value;
                }
                else if (name === "religion") {
                    reli = value;
                }
                else if (name === "childre") {
                    childrens = value;
                }
                else if (name === "mobile") {
                    phone = value;
                }
                else if (name === "address") {
                    address = value;
                }
                else if (name === "city") {
                    city = value;
                }
                else if (name === "state") {
                    state = value;
                }
                else if (name === "mail") {
                    email = value;
                }
//                        else if (name === "salary") {
//                            salary = value;
//                        }
//                        else if (name === "post") {
//                            post = value;
//                        }

            });

//                                            alert(pa)
//alert(admin_nos)
//                    alert(level)
            if (level === "1") {
                genda = $('.genda').find(":selected").val();
                nationality = $('.nationality').find(":selected").val();
                marital = $('.marital').find(":selected").val();
//                         alert(level)
//                         alert(genda)
//                         alert(nationality)
//                         alert(marital)
                if (fullname === "" || sor === "" || dob === "" || reli === "" || childrens === "" || genda === "" || nationality === "" || marital === "") {
                    $("#error").empty();
                    $("#error").append('<h3 style="color: red" id="error" class="fs-subtitle">Field can not be empty</h3>')
                    return;

                }
                else {
//                        if (pass1 == pass2) {
//                             $("#error").empty();
//                  $("#error").append('<h3 style="color: red" id="error" class="fs-subtitle">password not match</h3>')
//                            return;
//                        }
//                          else if (validateEmail(email)) {
//              $("#error").empty();
//                  $("#error").append('<h3 style="color: red" id="error" class="fs-subtitle">Invalid Email Address</h3>')
//            return ;
//        }
                }
                if (animating)
                    return false;
                animating = true;
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

//                    console.log(sibs);
                //activate next step on progressbar using the index of next_fs
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function (now, mx) {
                        //as the opacity of current_fs reduces to 0 - stored in "now"
                        //1. scale current_fs down to 80%
                        scale = 1 - (1 - now) * 0.2;
                        //2. bring next_fs from the right(50%)
                        left = (now * 50) + "%";
                        //3. increase opacity of next_fs to 1 as it moves in
                        opacity = 1 - now;
                        current_fs.css({'transform': 'scale(' + scale + ')'});
                        next_fs.css({'left': left, 'opacity': opacity});
                    },
                    duration: 800,
                    complete: function () {
                        current_fs.hide();
                        animating = false;
                    },
                    //this comes from the custom easing plugin
//                        easing: 'easeInOutBack'
                });
            }
            else if (level === "2") {
                country = $('.country').find(":selected").val();
                if (address == "" || phone == "" || city === "" || state === "" || email === "" || country === "") {

                    $("#error2").empty();
                    $("#error2").append('<h3 style="color: red" id="error" class="fs-subtitle">Field can not be empty</h3>')
                    return;
                }

                if (animating)
                    return false;
                animating = true;
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

//                    console.log(sibs);
                //activate next step on progressbar using the index of next_fs
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function (now, mx) {
                        //as the opacity of current_fs reduces to 0 - stored in "now"
                        //1. scale current_fs down to 80%
                        scale = 1 - (1 - now) * 0.2;
                        //2. bring next_fs from the right(50%)
                        left = (now * 50) + "%";
                        //3. increase opacity of next_fs to 1 as it moves in
                        opacity = 1 - now;
                        current_fs.css({'transform': 'scale(' + scale + ')'});
                        next_fs.css({'left': left, 'opacity': opacity});
                    },
                    duration: 800,
                    complete: function () {
                        current_fs.hide();
                        animating = false;
                    },
                    //this comes from the custom easing plugin
//                        easing: 'easeInOutBack'
                });
            }



        });

        $(".previous").click(function () {
            if (animating)
                return false;
            animating = true;

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //de-activate current step on progressbar
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
            //show the previous fieldset
            previous_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
                step: function (now, mx) {
                    //as the opacity of current_fs reduces to 0 - stored in "now"
                    //1. scale previous_fs from 80% to 100%
                    scale = 0.8 + (1 - now) * 0.2;
                    //2. take current_fs to the right(50%) - from 0%
                    left = ((1 - now) * 50) + "%";
                    //3. increase opacity of previous_fs to 1 as it moves in
                    opacity = 1 - now;
                    current_fs.css({'left': left});
                    previous_fs.css({'transform': 'scale(' + scale + ')', 'opacity': opacity});
                },
                duration: 800,
                complete: function () {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
//                        easing: 'easeInOutBack'
            });
        });
//        var pixTemp;
        $(".submit").click(function (e) {

            e.preventDefault()
            category = $('.category').find(":selected").val();
            qualification = $('.qualification').find(":selected").val();
            salary = $(".sala").val();
            post = $(".post").val();
            year_exp = $(".year_exp").val();
            experience = $(".exp").val();
//            alert(year_exp)
//            alert(experience)
//            alert(post)
//            alert(salary)
            if (category === "" || qualification === "" || post === "" || salary === "") {
                $("#error3").empty();
                $("#error3").append('<h3 style="color: red" id="error" class="fs-subtitle">Field can not be empty</h3>')
                return;

            }
            else {
                $.post("http://localhost/school/students/worker",
                        {
                            fullname: fullname,
                            dob: dob,
                            sor: sor,
                            reli: reli,
                            childrens: childrens,
                            genda: genda,
                            marital: marital,
                            nationality: nationality,
                            address: address,
                            state: state,
                            city: city,
                            phone: phone,
                            email: email,
                            country: country,
                            salary: salary,
                            post: post,
                            category: category,
                            qualification: qualification,
                            experience: experience,
                            year_exp: year_exp,
                            pix: pixTemp,
                        },
                        function (data) {

//                            alert(data);
                            if (data==="success"){
                                location.reload()
                            }
                            

                        })
            }
        })

    });
    function validateEmail(sEmail) {
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(sEmail)) {
            return true;
        }
        else {
            return false;
        }
    }
    $('.filley').click(function(e) {
    e.preventDefault();
        var allowed = "image/jpeg,image/jpg,image/png,image/gif";
        $('.input_banner').trigger('click').change(function() {
            if (this.files && this.files[0]) {
                fileMan = new FileReader();
                fileMan.readAsDataURL(this.files[0]);
                fileMan.onload = function(e) {
                    pixTemp = e.target.result;
                    fileType = pixTemp.substring(5, pixTemp.indexOf(";"));

                    if (allowed.indexOf(fileType) < 0) {
                        alert(' The File Type You Chose Is Not Supported!\nPlease Select A Valid Image File');
                    }
                    else {
                        $('.filley').empty();
                        $('.filley').append('<img class="bannerPreview img-thumbnail" src="' + pixTemp + '">')
                        alert(pixTemp)
                    }
//                    alert(pixTemp.indexOf(";"));
//                $('.imageTemp').attr('src', pixTemp);
                }
            }
        });
    });
       $(document).on("mouseover", ".filley", function (event) {
//        alert("h")
        $(".prof_dp_edit").css({
            display: "block"
        });
    });
    $(document).on("mouseleave", ".filley", function (event) {
        $(".prof_dp_edit").css({
            display: "none"
        });
    });

})