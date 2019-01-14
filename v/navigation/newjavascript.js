    
      // alert("eh!");
$(function() {
   alert("jgujg");
    $("a").click(function(e) {
       alert("eh!");
        e.preventDefault();
    });
    
//    code for manage student click event
    $(".manage_stdnt").click(function() {
         alert("ss");
//        to get menu for manage student page
        $.get("http://localhost/school/view/menu/students.php", function(e) {
 
            $(".tool_bar").replaceWith(e);
        });
//        get the default page for manage student
        $.get("http://localhost/school/admin/students", function(r) { 
            $(".app_display").empty();
            $(".app_display").html(r);
        });
    });
    
    
    
    $(".manage_parents").click(function() {
         alert("pp!");
//        to get menu for manage student page
        $.get("http://localhost/school/view/menu/parents.php", function(e) {
 
            $(".tool_bar").replaceWith(e);
        });
//        get the default page for manage student
        $.get("http://localhost/school/admin/parents/", function(r) { 
            $(".app_display").empty();
            $(".app_display").html(r);
        });
    });
    
    
    
    $(".manage_teachers").click(function() {
         alert("tt!");
//        to get menu for manage student page
        $.get("http://localhost/school/view/menu/teachers.php", function(e) {
 
            $(".tool_bar").replaceWith(e);
        });
//        get the default page for manage student
        $.get("http://localhost/school/admin/teachers/", function(r) { 
            $(".app_display").empty();
            $(".app_display").html(r);
        });
    });
//    manage student event stops here

});



    $(".manage_subjects").click(function() {
         alert("gg!");
//        to get menu for manage student page
        $.get("http://localhost/school/view/menu/subjects.php", function(e) {
 
            $(".tool_bar").replaceWith(e);
        });
//        get the default page for manage student
        $.get("http://localhost/school/admin/subjects/", function(r) { 
            $(".app_display").empty();
            $(".app_display").html(r);
        });
    });
//    manage student event stops here

//});

      

    $(".manage_classes").click(function() {
         alert("cc!");
//        to get menu for manage student page
        $.get("http://localhost/school/view/menu/classes.php", function(e) {
 
            $(".tool_bar").replaceWith(e);
        });
//        get the default page for manage student
        $.get("http://localhost/school/admin/classes/", function(r) { 
            $(".app_display").empty();
            $(".app_display").html(r);
        });
    });
//    manage student event stops here

//});

      