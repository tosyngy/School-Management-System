/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function() {
//    alert("f")
// $('.my').datetator();

    var param = {};
    $(function() {
//                $('.dateofbirth').datetator();
//       $("#administrative_area_level_1").prop('disabled', true);
//       $("#country").prop('disabled', true);
$('.datepicker').datepicker({dateFormat: 'dd.mm.yy'});
//  $('input[name=dob]').datepicker({dateFormat: 'dd.mm.yy'});
//  $(".mobile").maxlength();
        $(".error").focus(function() {
            $("#error").empty();
        });
        $(".error2").focus(function() {
            $("#error2").empty();
        });
        $(".error3").focus(function() {
            $("#error3").empty();
        });
        $(".error4").focus(function() {
            $("#error4").empty();
        });
   $(".tabledit-input").keydown(function(event) {
    	// Allow only backspace and delete
    	if ( event.keyCode == 46 || event.keyCode == 8 ) {
    		// let it happen, don't do anything
    	}
    	else {
    		// Ensure that it is a number and stop the keypress
    		if (event.keyCode < 48 || event.keyCode > 57 ) {
    			event.preventDefault();	
    		}	
    	}
    });
        /* 
         Orginal Page: http://thecodeplayer.com/walkthrough/jquery-multi-step-form-with-progress-bar 
         
         */
//jQuery time

        var current_fs, next_fs, previous_fs; //fieldsets
        var left, opacity, scale; //fieldset properties which we will animate
        var animating; //flag to prevent quick multi-click glitches
        var firstname = "", lastname = "", middlename = "", dateof = "", placeof = "", religion = "", cum_name = "", sex = "", nation = "", address = "", mobile = "", city = "", state = "", mail = "";
        var pa_fullname = "", pa_relation = "", pa_occu = "", pa_dateof = "", pa_officeadd = "", pa_address = "", pa_mobile = "", pa_mail = "";

        $(".next").click(function() {
            var sibs = $(this).siblings("input");
            var sibs2 = $(this).siblings("select");
//                    alert(sibs2)
            var level = $(this).attr("rel");
//                    alert(level)
            $.each(sibs, function(id, objx) {
//                        console.log(objx);
//alert(objx)
                var name = objx.name, value = objx.value;
//                        alert(objx.value)



                if (name === "fn") {
                    firstname = value;
                }
                else if (name === "md") {
                    middlename = value;
                }
                else if (name === "ln") {
                    lastname = value;
                }
                else if (name === "dob") {
                    dateof = value;
                }
//                else if (name === "sor") {
//                    placeof = value;
//                }
//                else if (name === "religion") {
//                    religion = value;
//                }
                else if (name === "mobile") {
                    mobile = value;
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
                    mail = value;
                }
                else if (name === "pa_name") {
                    pa_fullname = value;
                }
                else if (name === "pa_rel") {
                    pa_relation = value;
                }
                else if (name === "pa_dob") {
                    pa_dateof = value;
                }
                else if (name === "pa_occu") {
                    pa_occu = value;
                }
                else if (name === "pa_add") {
                    pa_address = value;
                }
                else if (name === "pa_officeadd") {
                    pa_officeadd = value;
                }
                else if (name === "pa_mail") {
                    pa_mail = value;
                }
                else if (name === "pa_mobile") {
                    pa_mobile = value;
                }
//                        else if (name === "admin_no") {
//                            admin_nos = value;
//                        }
            });
////                                            alert(pa_fullname)
//                                            alert(pa_relation)
//                                            alert(pa_dateof)
//                                            alert(pa_occu)
//                                            alert(pa_address)
//                                            alert(pa_officeadd)
//                                            alert(pa_mail)
//                                            alert(pa_mailpa_mail)
//                                            alert(pa)
//alert(admin_nos)
//                    alert(level)
            if (level === "1") {
                sex = $('.genda').find(":selected").val();
                nation = $('.nationality').find(":selected").val();
                religion = $('.religion').find(":selected").val();
                placeof = $('.sor').find(":selected").val();
//                         alert(placeof)
//                         alert(sex)
//                         alert(nation)
                if (firstname === "" ||  lastname === "" || dateof === "" || placeof === "" || religion === "" || sex === "" || nation === "") {
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
                    step: function(now, mx) {
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
                    complete: function() {
                        current_fs.hide();
                        animating = false;
                    },
                    //this comes from the custom easing plugin
//                        easing: 'easeInOutBack'
                });
            }
            else if (level === "2") {
//                         alert("e")
 state = $('.state').find(":selected").val();
                alert(state)
                if (address == "" || mobile == "" || city === "" || state === "") {

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
                    step: function(now, mx) {
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
                    complete: function() {
                        current_fs.hide();
                        animating = false;
                    },
                    //this comes from the custom easing plugin
//                        easing: 'easeInOutBack'
                });
            }

            if (level === "3") {
                sex = $('.genda').find(":selected").val();
                nation = $('.nationality').find(":selected").val();
//                         alert(level)
//                         alert(sex)
//                         alert(nation)
                if (pa_fullname === "" || pa_relation === "" || pa_address === "" ) {
                    $("#error").empty();
                    $("#error4").append('<h3 style="color: red" id="error" class="fs-subtitle">Field can not be empty</h3>')
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
                    step: function(now, mx) {
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
                    complete: function() {
                        current_fs.hide();
                        animating = false;
                    },
                    //this comes from the custom easing plugin
//                        easing: 'easeInOutBack'
                });
            }

        });

        $(".previous").click(function() {
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
                step: function(now, mx) {
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
                complete: function() {
                    current_fs.hide();
                    animating = false;
                },
                //this comes from the custom easing plugin
//                        easing: 'easeInOutBack'
            });
        });
        $(".submit").click(function(e) {
            var admited_class = "", admited_session = "", admited_term = "", admin_no = ""
            e.preventDefault()
            admited_class = $('.admited_class').find(":selected").val();
            admited_session = $('.admited_session').find(":selected").val();
            admited_term = $('.admited_term').find(":selected").val();
            admin_no = $(".admin").val();
//        alert(admin_no)
//        alert(admited_class)
//        alert(admited_session)
//        alert(admited_term)
            if (admin_no === "" || admited_class === "" || admited_session === "" || admited_term === "") {
                $("#error3").empty();
                $("#error3").append('<h3 style="color: red" id="error" class="fs-subtitle">Field can not be empty</h3>')
                return;

            }
            else {
                $.post("http://localhost/school/students/submit",
                        {
                            firstname: firstname,
                            lastname: lastname,
                            middlename: middlename,
                            dateof: dateof,
                            placeof: placeof,
                            religion: religion,
                            sex: sex,
                            nation: nation,
                            address: address,
                            mobile: mobile,
                            city: city,
                            state: state,
                            mail: mail,
                            pa_relation: pa_relation,
                            pa_fullname: pa_fullname,
                            pa_occu: pa_occu,
                            pa_dateof: pa_dateof,
                            pa_officeadd: pa_officeadd,
                            pa_address: pa_address,
                            pa_mobile: pa_mobile,
                            pa_mail: pa_mail,
                            admited_class: admited_class,
                            admited_session: admited_session,
                            admited_term: admited_term,
                            admin_no: admin_no,
                            image: pixTemp
                        },
                        function(data) {

//                            alert(data);
                            if (data === "success") {
                                alert("STUDENT ADDED SUCCESSFULLY");
//                                location.reload();
window.location="http://localhost/school/";
                                $(".admin").val("");
                            }

                        });
            }
        });

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
                        $('.filley').append('<img class="bannerPreview img-thumbnail" src="' + pixTemp + '">');
//                        alert(pixTemp)
                    }
//                    alert(pixTemp.indexOf(";"));
//                $('.imageTemp').attr('src', pixTemp);
                };
            }
        });
    });
    $(document).on("mouseover", ".filley", function(event) {
//        alert("h")
        $(".prof_dp_edit").css({
            display: "block"
        });
    });
    $(document).on("mouseleave", ".filley", function(event) {
        $(".prof_dp_edit").css({
            display: "none"
        });
    });
    $(".admin").prop("readonly", true);
    $('.admited_session').on('change', function() {
//  alert( this.value ); 
        var s = this.value;
//        alert(s)
        $.post("http://localhost/school/students/admin_no",
                {
                    id: s
                },
        function(data) {

//                    alert(data);
            $(".admin").val(data);

        })
    });
})