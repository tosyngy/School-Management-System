 
<div style="width: 80%; margin-left: auto;margin-top: 100px; margin-right: auto;" class="wrap  -group">
    <input style="width: 80%;" type="text" name="addSubj" class="subj_input input input-lg" placeholder="Enter Subject Name">
    <button id="" class="btn btn-success subject_adding_">Add Subject</button>
</div>

<script>
    $(function () {
 

        $(document).on("click", ".subject_adding_", function () {
            map = $(".subj_input").val();
//param=JSON.parse(map);
param={
    name:map
}
//    alert(map)"
            $.post("http://localhost/school/subjects/addSubject", param, function (r) {
//                alert("Subject Added");
                window.location = "http://localhost/school/subjects";
            });
        });
    });

</script>

