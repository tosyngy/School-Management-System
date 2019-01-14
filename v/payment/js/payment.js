
$(function () {
    $(".search_btn").click(function () {
        var term = $(".term").val();
        var session = $(".session").val();
        var myclass = $(".myclass").val();
        var reg_no = $(".reg_no").val();
        var all = $(".allchecked:checked").val();
        $.post("http://localhost/school/payment/search",
                {
                    reg_no: reg_no,
                    type: "reg",
                    term: term,
                    session: session,
                    myclass: myclass,
                    all: all
                },
        function (r) {
            var res = JSON.parse(r);
            var my_hist = "";
            $.each(res, function (id, res) {
                var fullname = res.firstname + " " + res.middlename + " " + res.lastname;
                var his_row = "<tr><td>" + "1" + "</td><td>" + fullname + "</td><td>" + res.addmission_number + "</td><td>" + res.session + "</td><td>" + res.term + "</td><td>" + res.amount + "</td><td>" + res.date + "</td><td>" + res.time + "</td></tr>'";
                my_hist += his_row;
            });
            $(".table_body").empty();
            $(".table_body").append(my_hist);
        });
    });
    $(".makepayment").click(function (e) {

        e.preventDefault();
        var student = $("#adnumber").val();
        var amount = $("#amount").val();
        var term = $('#term').find(":selected").val();
        var session = $('#session').find(":selected").val();
        var clas = $('#class').find(":selected").val();
//        alert(student);
//        alert(session);
//        alert(term);
        if (student === "" || amount === "" || term === "" || session === "" || clas == "") {
            alert("feild empty");
        }
        else {
            $.post("http://localhost/school/payment/makePayment",
                    {
                        student: student,
                        amount: amount,
                        term: term,
                        sessions: session,
                        clas: clas
                    },
            function (r) {
                alert(r)
                $("#adnumber").val("");
                $("#amount").val("");
                $('.myside').fadeOut("slow");
            })
        }

    })
    $('.allchecked').click(function () {
         $(".search_btn").trigger("click");
    });
// to restrict input field to only number
    $(".tabledit-input").keydown(function (event) {
        // Allow only backspace and delete
        if (event.keyCode == 46 || event.keyCode == 8) {
            // let it happen, don't do anything
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.keyCode < 48 || event.keyCode > 57) {
                event.preventDefault();
            }
        }
    });
    $(".adnumberss").keyup(function (event) {
        var token = $(".adnumberss").val();
//         alert(token);
        $.post("http://localhost/school/payment/short_info",
                {
                    token: token
                },
        function (r) {
            if (r === "no") {
                $('.myside').fadeOut("slow");
            } else {
                var res = JSON.parse(r);
//            alert(res)
                var f = res.firstname;
                var m = res.middlename;
                var p = res.pix_name;
                var a = res.admission_no;

                $("#rfirstname").val(f);
                $("#rlastname").val(m);
                $("#raddnumber").val(a);
                $('.mydp').attr("src", p);
                $('.myside').fadeIn("slow");
            }
//                alert(r)

        })

    });

    function sumOfColumns(table, columnIndex) {
//        alert("e")
        var tot = 0;
        table.find("tr").children("td:nth-child(" + columnIndex + ")")
                .each(function () {
                    $this = $(this);
                    if (!$this.hasClass("sum") && $this.html() != "") {
                        tot += parseInt($this.html());
                    }
                });
        return tot;
    }
});
