<link rel="stylesheet" href="<?php echo URL; ?>v/classes/css/styles.css"/>
<div class="classes_cont">
    <?php
    $classes = $this->classes;
    $primary = array();
    $junior = array();
    $senior = array();
    foreach ($classes as $class) {
        $id = $class["id"];
        $code = $class["code"];
//    $pos = ;
        if (strpos($code, "PRI") === false) {
            if (strpos($code, "JSS") === false) {
                if (strpos($code, "SSS") === false) {
                    // string needle NOT found in haystack
                } else {
                    array_push($senior, array("id" => $id, "code" => $code));
                }
            } else {
                array_push($junior, array("id" => $id, "code" => $code));
            }
        } else {
            array_push($primary, array("id" => $id, "code" => $code));
        }
    }
    ?>
    <div class="class_category_section">
        <div class="class_category_header">Primary School</div>
        <?php
        foreach ($primary as $class) {
            $id = $class["id"];
            $code = $class["code"];
//}
            ?>
            <div class="col-md-4 col-sm-6 ">
                <div class="class_item" selector_id="<?php echo $id; ?>">
                    <i class="fa fa-pencil"></i>
                    <?php echo $code; ?>
                </div>
            </div>
        <?php }
        ?> 
    </div>
    <div class="class_category_section">
        <div class="class_category_header">Junior Secondary School</div>
        <?php
        foreach ($junior as $class) {
            $id = $class["id"];
            $code = $class["code"];
//}
            ?>
            <div class="col-md-4 col-sm-6 ">
                <div class="class_item" selector_id="<?php echo $id; ?>">
                    <i class="fa fa-pencil"></i>
                    <?php echo $code; ?>
                </div>
            </div>
        <?php }
        ?> 
    </div>
    <div class="class_category_section">
        <div class="class_category_header">Senior Secondary School</div>
        <?php
        foreach ($senior as $class) {
            $id = $class["id"];
            $code = $class["code"];
//}
            ?>
            <div class="col-md-4 col-sm-6 ">
                <div class="class_item" selector_id="<?php echo $id; ?>">
                    <i class="fa fa-pencil"></i>
                    <?php echo $code; ?>
                </div>
            </div>
        <?php }
        ?> 
    </div>
    <div class="information_display">
        <div class="exit_info_display">  <i class="fa fa-2x fa-angle-left"></i></div>
        <div id="info_content_disp" class="content">
            
        </div>
    </div>        
</div>
<script src="<?php echo URL; ?>v/classes/js/script.js"></script>