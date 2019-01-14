/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
    $(document).on("click", ".class_item", function() {
        var selected_id = $(this).attr("selector_id");
        window.location="http://localhost/school/students/studentsInClass/" + selected_id;
//        $.get("http://localhost/school/students/studentsInClass/" + selected_id, function(r) {
//            $("#info_content_disp").empty().append(r);
//            $(".information_display").slideDown("slow");
//        });
//        var close='  <div class="exit_info_display">  <i class="fa fa-2x fa-angle-left"></i></div>';
    });
    $(document).on("click", ".exit_info_display", function() {
        $("#info_content_disp").empty();
        $(".information_display").slideUp("slow");
    });
});
