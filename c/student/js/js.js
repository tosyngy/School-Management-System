$(function () {
    $(document).on("click", ".score-define td", function () {
        if ($(this).text() === "unknown" || $(this).text() === "-") {
            $(this).text("");
        }
    });
    $(document).on("click", ".table-save", function () {
        if ($(this).text() === "unknown" || $(this).text() === "-") {
            $(this).text("");
        }
    });
    $(document).on("click", "#save-btn", function () {
        $BTN.trigger("click");
        $.each($REPORT, function (id, data) {

        });
        $.post("student.php", {data: $REPORT}, function (resp) {
            alert(resp);
        });
    });
    $(document).on("click", ".score-define single", function () {

    });
    $(document).on("keydown", "[type=number]", function (event) {
        if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode !== 37 && event.keyCode !== 39 && event.keyCode !== 38 && event.keyCode !== 40) && event.keyCode !== 8 && event.keyCode !== 190) {
            event.preventDefault();
        }

    });
    $(document).on("keyup", "[type=number]", function (event) {
        var text = $(this).text();
        if (parseInt(text) > 100) {
            $(this).css("border", "3px solid red");
            event.preventDefault();
        } else {
            $(this).css("border", "3px solid green");
        }
//        if (parseInt($(this).text()) >= 70) {
//            $(this).after("<span class='grade'>A1<span>");
//        } else if (parseInt($(this).text()) < 70 && parseInt($(this).text()) >= 65) {
//            $(this).after("<span class='grade'>B1<span>");
//        } else if (parseInt($(this).text()) < 65 && parseInt($(this).text()) >= 60) {
//            $(this).after("<span class='grade'>B2<span>");
//        } else if (parseInt($(this).text()) < 60 && parseInt($(this).text()) >= 50) {
//            $(this).after("<span class='grade'>C<span>");
//        } else if (parseInt($(this).text()) < 50 && parseInt($(this).text()) >= 45) {
//            $(this).after("<span class='grade'>D<span>");
//        } else if (parseInt($(this).text()) < 45 && parseInt($(this).text()) >= 40) {
//            $(this).after("<span class='grade'>DE<span>");
//        } else if (parseInt($(this).text()) < 40 && parseInt($(this).text()) >= 30) {
//            $(this).after("<span class='grade'>E<span>");
//        } else if (parseInt($(this).text()) < 30) {
//            $(this).after("<span class='grade'>F<span>");
//        }
    });
    $(document).on("click", "#cal-btn", function () {
        $(".grade").remove();
        $(".score-define #single:not(.hide)").each(function () {
            if (!$(this).hasClass("cal")) {
                if ($(this).find("#stud").attr("data").length > 0) {
                    var tb_row = "<tr class='grade'><td> </td><td>Grade:</td>";
                    $(this).find(".score").each(function () {
                        var att = $(this).siblings("#id").attr("class"), score = 0,i=0;
                         var d = $(this).attr("data");
                        $("." + att).siblings("[data='"+d+"']").each(function () {
                           var lsco=$(this).text();
                            if (lsco !== "-") {
                                score += parseFloat($(this).text());
                                ++i;
                            }
                        });
                        if(i===0){
                            score="-";
                        }else if(score>100){
                            $("." + att).siblings("[data='"+d+"']").css("border","3px solid red") 
                        }
                        if (score !== "-") {
                            tb_row += "<td>" + grade(score) + "</td>";
                        } else {
                            tb_row += "<td> - </td>";
                        }
                    });
                    tb_row += "<td></td><td></td><td></td><td></td></tr>";
                    $(this).addClass("").after(tb_row);
                }
            }
        });

    });

    $(document).on("click", ".classlist", function () {

    });
});

function grade(score) {
    var a = "-";
    if (parseFloat(score) >= 70) {
        a = "A1";
    } else if (parseFloat(score) < 70 && parseFloat(score) >= 65) {
        a = "B1";
    } else if (parseFloat(score) < 65 && parseFloat(score) >= 60) {
        a = "B2";
    } else if (parseFloat(score) < 60 && parseFloat(score) >= 50) {
        a = "C";
    } else if (parseFloat(score) < 50 && parseFloat(score) >= 45) {
        a = "D";
    } else if (parseFloat(score) < 45 && parseFloat(score) >= 40) {
        a = "DE";
    } else if (parseFloat(score) < 40 && parseFloat(score) >= 30) {
        a = "E";
    } else if (parseFloat(score) < 30) {
        a = "F";
    }
    return a;
}


























