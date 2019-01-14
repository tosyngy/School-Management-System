<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Student Report</title>
        <link href="<?php URL ?>v/results/bootstrap/css/bootstrap.min.css" rel="stylesheet"  media="screen"/>
        <link href="<?php URL ?>v/results/css/jquery-ui.min.css" rel="stylesheet" media="screen" />
        <link href="<?php URL ?>v/results/css/css.css" rel="stylesheet" media="screen" />   
        <script src="<?php URL ?>v/results/js/tbl.js" type="text/javascript"></script>
        <script src="<?php URL ?>v/results/js/js.js" type="text/javascript"></script>
    </head>
    <body>

        <div class="container pad-lit">
            <h1>Student Report Sheet</h1>
            <div>
<!--                <h5>Set each student score and export</h5>-->
                <div>
                    <div class="col-xs-12 nopad">
                        <div class=" col-xs-3 nopad">
                            <input type="text" list="listclass"class="input-group-lg form-control classlist" placeholder="Class"/>
                            <datalist id="listclass">
                            </datalist>
                        </div>
                        <div class=" col-xs-3 nopad">
                            <input type="text" list="listterm" class="input-group-lg form-control termlist"  placeholder="term"/>
                            <datalist id="listterm">
                            </datalist>
                        </div>
                        <div class=" col-xs-3 nopad">
                            <input type="text" list="listsections" class="input-group-lg form-control sectionlist" placeholder="Session" />
                            <datalist id="listsections">
                            </datalist>
                        </div> 
                        <div class=" col-xs-3">
                            <button id="search" class=" btn btn-lg btn-primary col-xs-12"> search</button>
                        </div> 

                    </div>


                    <div id="table" class="table-editable">
                        <span class="table-add glyphicon glyphicon-plus"></span>
                        <table class="table score-define">
                            <tr class="subject-head">
                            </tr>
                            <tr class="hide more" id="single">
                            </tr>
                            <tr class="hide other" id="single">
                            </tr>
                        </table>
                    </div>

                    <button id="save-btn" class="btn btn-primary">Save Result</button>
                    <button id="cal-btn" class="btn btn-primary">Check Grade</button>
                    <button id="export-btn" class="btn btn-primary hide">Export Data</button>
                    <p id="export"></p>
                </div>
            </div>
        </div>
    </body> 
    <script>


        var $TABLE = $('#table');
        var $BTN = $('#export-btn');
        var $EXPORT = $('#export');
        var $REPORT = [];
        $(function () {
            $(document).on("click", "#search", function () {
//                     $REPORT =[];
                $REPORT.length = 0;
                fetchinfo($(".classlist").val(), $(".termlist").val(), $(".sectionlist").val());
                $("#cal-btn").trigger("click");
            });
            $('.table-add').click(function () {
                $("[class*='std_id-']").each(function () {
                    if ($(this).siblings("#stud").attr("data").length > 0) {
                        $(this).parent().after(addField($(this).text(), "set"));
                        $("tr:not(:hidden) td.std_name").removeClass("std_name").attr("data", "").text(" ");
                        $("tr:not(:hidden) td.std_id").removeClass("std_id").addClass("std_id-" + $(this).text().replace(/\//g, '')).text("test");
                    }
                });
//                var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
//                $TABLE.find('table').append($clone);
            });
            $(document).on("click", '.table-remove', function () {
                $(this).parents('tr').detach();
            });
            $(document).on("click", '.table-up', function () {
                var $row = $(this).parents('tr');
                if ($row.index() === 1)
                    return; // Don't go above the header
                $row.prev().before($row.get(0));
            });
            $(document).on("click", '.table-down', function () {
                var $row = $(this).parents('tr');
                $row.next().after($row.get(0));
            });
// A few jQuery helpers for exporting only
            jQuery.fn.pop = [].pop;
            jQuery.fn.shift = [].shift;
            $BTN.click(function () {
                var $rows = $TABLE.find('tr:not(:hidden)');
                var headers = [];
                var data = [];
                // Get the headers (add special header logic here)
                $($rows.shift()).find('th:not(:empty)').each(function () {
                    headers.push($(this).text().toLowerCase());
                });
                // Turn all existing rows into a loopable array
                $rows.each(function () {
                    var $td = $(this).find('td');
                    var h = {};
                    // Use the headers from earlier to name our hash keys
                    headers.forEach(function (header, i) {
                        h[header] = $td.eq(i).text();
                    });
                    data.push(h);
                });
                // Output the result

                $REPORT.length = 0;
                $REPORT = data;
//                        $EXPORT.text(JSON.stringify(data));
            });

        });

        function fetchinfo(cls, term, section) {
            $("tr:not(:hidden)").empty();
            $.post("http://localhost/school/results/result", {cls: cls, term: term, section: section}, function (resp) {
                var data = JSON.parse(resp);
                var subj = data[0];
                var stud = data[1];
//                $("tr:not(:hidden)").remove();
                createsubj(subj);
                createstud(stud);
            });
        }

        function createstud(stud) {
            $.each(stud, function (id, data) {
                addField(data, "");
            });
        }

        function createsubj(subj) {
            var tr = "<th id='name'>Name</th><th id='regid'>Reg No</th>";
            var tr_cl = "<td contenteditable='false' id='stud' class='std_name'></td> <td id='id'  contenteditable='false' class='std_id'></td> ";
            $.each(subj, function (id, data) {
                tr += "<th data='" + data.name + "'>" + data.name + "</th>";
                tr_cl += "<td data='" + data.name + "'    contenteditable='true' type='number' class='score'  >-</td>";
            });
            tr += "<th id='arr'></th><th id='arr'></th>";
            reAppend(".hide.other", tr_cl);
            reAppend(".subject-head", tr);
//            tr_cl += '<td><span class="table-up glyphicon glyphicon-arrow-up"></span><span class="table-down glyphicon glyphicon-arrow-down"></span></td>';
            reAppend(".hide.more", tr_cl);

        }
        var adm = "";
        function addField(id, more) {
            var $clone = "";
            if (more !== "set") {

                $clone = $TABLE.find('tr.hide.more').clone(true).removeClass('hide table-line more');
                $TABLE.find('table').append($clone);
                if (id.status === "0") {
                    $("tr:not(:hidden) td.std_name").removeClass("std_name").attr("data", id.firstname + " " + id.lastname).text(id.firstname + " " + id.lastname);
                    $("tr:not(:hidden) td.std_id").removeClass("std_id").addClass("std_id-" + id.admission_no.replace(/\//g, '')).text(id.admission_no);
                    adm = id.admission_no.replace(/\//g, '');
                } else {
                    $("tr:not(:hidden) td.std_name").removeClass("std_name").attr("data", "").text(" ");
                    $("tr:not(:hidden) td.std_id").removeClass("std_id").addClass("std_id-" + id.admission_no.replace(/\//g, '')).text("test");
                }
                $("tr:not(:hidden):last-child td").each(function () {
                    $(this).text(id[$(this).attr("data")]);
                });
                return;
            } else {
                $clone = $TABLE.find('tr.hide.other').clone(true).removeClass('hide table-line other');
            }
            return $clone;
        }
        function reAppend(appendTo, data) {
            $(appendTo).empty();
            $(appendTo).append(data);
        }


    </script>
</html>

