<?php
if (isset($this->details)) {
    $details = $this->details;
//    print_r($details);

    $counter = 0;
}
if (isset($this->shrt)) {

// header("Location: ");
    $shet = "http://localhost/school/subjects/$this->shrt";
}
?><div id="wrapper">
    <div class="panel-group" id="accordion">

        <?php
        foreach ($details as $class => $allsubjs) {
            $counter++;
            $index = 1;
            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="<?php echo "#" . $counter; ?>"><?php echo $class; ?></a>
                    </h4>
                </div>
                <div id="<?php echo $counter; ?>" class="panel-collapse collapse <?php if ($counter == 1) echo "in"; ?>">
                    <div class="panel-body">
                        <div class="table table-hover table-responsive ">          
                            <table class="table poll">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Subject</th>
                                    </tr>
                                </thead>
                                <tbody class="table_body">
                                    <?php
                                    foreach ($allsubjs['offering'] as $subj) {
                                        ?>
                                        <!--<div class="list_item" id="list_item1">-->

                                        <tr class="list_it_selector"  std_id='<?php echo $subj['subject']; ?>'>
                                            <td  ><?php echo $index; ?></td> 
                                            <td  ><?php echo $subj['name']; ?></td> 
                                        </tr>
                                        <?php
                                        $index++;
                                    }
                                    ?>
                                </tbody>

                            </table>
                            <!--<hr>-->
                            <tfooter >
                                <div style="background: #d5d5d5; border-top: 1px solid #000; padding: 5px; width: 100%;" class="input-group"><?php echo $allsubjs['option'] ?><button id="<?php echo "subj" . $class; ?>" class="btn btn-success subject_adding_pin">Add</button></div>
                            </tfooter>
                        </div> 
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </div>
</div>
<script>
    $(function () {
        var param;
        $(document).on("click", ".option_selector", function () {
            var map = $(this).attr("map");
            var subjt = $(this).attr("value");
            param = {
                "class": map, "subject": subjt
            };
            param = JSON.stringify(param);
            $(this).parent("select").attr("valueSending", param);

        });

        $(document).on("click", ".subject_adding_pin", function () {
            map = $(this).siblings("select").attr("valueSending");
            param = JSON.parse(map);   
                    $.post("http://localhost/school/subjects/assignSubjectToClass", param, function (r) {
                        alert("Subject Added");
                        alert(r)
                        window.location = "http://localhost/school/subjects";
                    });
        });
    });

</script>

<style>
    select{
        height: 80%;
        background-color: #fff;
        font-size: 15px;
    }
    select option{
        background-color: #fff;
        font-size: 15px;
        padding: 10px;
    }
</style>