<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>student report</title>
        <link href="http://localhost/medslattools/student/bootstrap/css/bootstrap.min.css" rel="stylesheet"  media="screen"/>
        <link href="http://localhost/medslattools/css/jquery-ui.min.css" rel="stylesheet" media="screen" />
        <link href="css/css.css" rel="stylesheet" media="screen" />
        <script src="http://localhost/medslattools/js/jquery.js" type="text/javascript"></script>
        <script src="http://localhost/medslattools/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="http://localhost/medslattools/js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/tbl.js" type="text/javascript"></script>
        <script src="js/js.js" type="text/javascript"></script>
    </head>
    <body>

        <div class="container">
            <h1>Student Report Sheet</h1>
            <div>
                <h5>Set each student score and export</h5>
                <div>
                    <div class="col-xs-12">
                        <div class=" col-xs-3">
                            <input type="text" list="listclass"class="input-group-lg form-control classlist" placeholder="Class"/>
                            <datalist id="listclass">
                                <option value="pri1">pri 1</option>
                                <option value="pri2">pri 2</option>
                                <option value="pri3">pri 3</option>
                                <option value="pri4">pri 4</option>
                                <option value="pri5">pri 5</option>
                                <option value="pri6">pri 6</option>
                                <option value="jss1">jss 1</option>
                                <option value="jss2">jss 2</option>
                                <option value="jss3">jss 3</option>
                                <option value="sss1">sss 1</option>
                                <option value="sss2">sss 2</option>
                                <option value="sss3">sss 3</option>
                            </datalist>
                        </div>
                        <div class=" col-xs-3">
                            <input type="text" list="listterm" class="input-group-lg form-control termlist"  placeholder="term"/>
                            <datalist id="listterm">
                                <option value="st term">1st term</option>
                                <option value="2nd term">2nd term</option>
                                <option value="3rd term">3rd term</option>
                            </datalist>
                        </div>
                        <div class=" col-xs-3">
                            <input type="text" list="listsections" class="input-group-lg form-control sectionlist" placeholder="Session" />
                            <datalist id="listsections">
                                <option value="2015/2016">2015/2016</option>
                                <option value="2016/2017">2016/2017</option>
                                <option value="2017/2018">2017/2018</option>
                                <option value="2018/2019">2018/2019</option>
                                <option value="2019/2020">2019/2020</option>
                                <option value="2020/2021">2020/2021</option>
                            </datalist>
                        </div> 
                        <!--                        <div class=" col-xs-3">
                                                    <input type="text" list="examtype" class="input-group-lg form-control examtype" placeholder="Exam Type"/>
                                                    <datalist id="examtype">
                                                        <option value="Test">Test</option>
                                                        <option value="Exam">Exam</option>
                                                    </datalist>
                                                </div> -->

                    </div>


                    <div id="table" class="table-editable">
                        <span class="table-add glyphicon glyphicon-plus"></span>
                        <table class="table score-define">
                            <tr class="subject-head">
<!--                                <th>Name</th>
                                <th>Reg Id</th>
                                <th>subj 1</th>
                                <th>subj 2</th>
                                <th>subj 3</th>
                                <th>subj 4</th>
                                <th>subj 5</th>
                                <th>subj 6</th>
                                <th>subj 7</th>
                                <th>subj 8</th>
                                <th>subj 9</th>
                                <th>subj 10</th>-->

<!--                                <th></th>
<th></th>
<th></th>-->
                            </tr>
<!--                            <tr id="single">

                                <td contenteditable="false"  id="name">alade micheal</td>
<td contenteditable="false" class="std-id" id="id1234567890">1234567890</td> 
<td contenteditable="true" type="number"  class="score" id="">-</td>
<td contenteditable="true" type="number" class="score"  id="">-</td>
<td contenteditable="true" type="number"  class="score" id="">-</td>
<td contenteditable="true" type="number" class="score"  id="">-</td>
<td contenteditable="true" type="number" class="score"  id="">-</td>
<td contenteditable="true" type="number" class="score" id="">-</td>
<td contenteditable="true" type="number" class="score"  id="">-</td>
<td contenteditable="true" type="number" class="score"  id="">-</td>
<td contenteditable="true" type="number" class="score" id="">-</td>
<td contenteditable="true" type="number" class="score" id="">-</td>

                                <td>
    <span class="table-remove glyphicon glyphicon-remove"></span>
</td>
<td>
    <span class="table-save glyphicon glyphicon-save"></span>
</td>
<td>
    <span class="table-up glyphicon glyphicon-arrow-up"></span>
    <span class="table-down glyphicon glyphicon-arrow-down"></span>
</td>

                            </tr>-->
                            <!-- This is our clonable table line -->
                            <tr class="hide more" id="single">
<!--                                <td contenteditable="false" id="name">unknown</td>
                                <td contenteditable="false" class="std-id" id="id1234567890">unknown</td>         
                                <td contenteditable="true" type="number"  class="score" id="">-</td>
                                <td contenteditable="true" type="number" class="score"  id="">-</td>
                                <td contenteditable="true" type="number"  class="score" id="">-</td>
                                <td contenteditable="true" type="number" class="score"  id="">-</td>
                                <td contenteditable="true" type="number" class="score"  id="">-</td>
                                <td contenteditable="true" type="number" class="score" id="">-</td>
                                <td contenteditable="true" type="number" class="score"  id="">-</td>
                                <td contenteditable="true" type="number" class="score"  id="">-</td>
                                <td contenteditable="true" type="number" class="score" id="">-</td>
                                <td contenteditable="true" type="number" class="score" id="">-</td>-->



<!--                                <td>
    <span class="table-remove glyphicon glyphicon-remove"></span>
</td>
<td>
    <span class="table-save glyphicon glyphicon-save"></span>
</td>
<td>
    <span class="table-up glyphicon glyphicon-arrow-up"></span>
    <span class="table-down glyphicon glyphicon-arrow-down"></span>
</td>-->
                            </tr>
                            <tr class="hide other" id="single">


<!--                                <td contenteditable="false" id="name"></td>
<td contenteditable="false" class="std-id" id="id1234567890">Test  </td>         
<td contenteditable="true" type="number"  class="score" id="">-</td>
<td contenteditable="true" type="number" class="score"  id="">-</td>
<td contenteditable="true" type="number"  class="score" id="">-</td>
<td contenteditable="true" type="number" class="score"  id="">-</td>
<td contenteditable="true" type="number" class="score"  id="">-</td>
<td contenteditable="true" type="number" class="score" id="">-</td>
<td contenteditable="true" type="number" class="score"  id="">-</td>
<td contenteditable="true" type="number" class="score"  id="">-</td>
<td contenteditable="true" type="number" class="score" id="">-</td>
<td contenteditable="true" type="number" class="score" id="">-</td>-->



<!--                                <td>
    <span class="table-remove glyphicon glyphicon-remove"></span>
</td>
<td>
    <span class="table-save glyphicon glyphicon-save"></span>
</td>
<td>
    <span class="table-up glyphicon glyphicon-arrow-up"></span>
    <span class="table-down glyphicon glyphicon-arrow-down"></span>
</td>-->
                            </tr>
                        </table>
                    </div>

                    <button id="save-btn" class="btn btn-primary">Save All</button>
                    <button id="cal-btn" class="btn btn-primary">Calculate</button>
                    <button id="export-btn" class="btn btn-primary">Export Data</button>
                    <p id="export"></p>
                </div>
            </div>
        </div>
    </body> 
    <script>
        var $TABLE = $('#table');
        var $BTN = $('#export-btn');
        var $EXPORT = $('#export');
        var $REPORT;
        $(function () {
            $(document).on("change", ".classlist", function () {
                fetchinfo($(".classlist").val(), $(".termlist").val(), $(".sectionlist").val());
            });
            $(document).on("change", ".sectionlist", function () {
                fetchinfo($(".classlist").val(), $(".termlist").val(), $(".sectionlist").val());
            });
            $(document).on("change", ".termlist", function () {
                fetchinfo($(".classlist").val(), $(".termlist").val(), $(".sectionlist").val());
            });
            $('.table-add').click(function () {
                $("[class*='std_id-']").each(function () {
                    if ($(this).siblings("#stud").attr("data").length > 0) {
                        $(this).parent().after(addField("", $(this).text(), "set"));
                        $("tr:not(:hidden) td.std_name").removeClass("std_name").attr("data", "").text("");
                        $("tr:not(:hidden) td.std_id").removeClass("std_id").addClass("std_id-" + $(this).text()).text("test");
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
                $REPORT = data;
//                        $EXPORT.text(JSON.stringify(data));
            });

        });

        function fetchinfo(cls, term, section) {
            $("tr:not(:hidden)").empty();
            $.post("student.php", {cls: cls, term: term, section: section}, function (resp) {
                var data = JSON.parse(resp);
                var subj = data[0];
                var stud = data[1];
                createsubj(subj);
                createstud(stud);
            });
        }

        function createstud(stud) {
            $.each(stud, function (id, data) {
                addField(id, data, "");
            });
        }

        function createsubj(subj) {
            var tr = "<th id='name'>Name</th><th id='regid'>Reg No</th>";
            var tr_cl = "<td contenteditable='false' id='stud' class='std_name'></td> <td id='id'  contenteditable='false' class='std_id'></td> ";
            $.each(subj, function (id, data) {
                tr += "<th data='" + data + "'>" + data + "</th>";
                tr_cl += "<td data='" + data + "'    contenteditable='true' type='number' class='score'  >-</td>";
            });
            tr += "<th id='arr'></th><th id='arr'></th>";
            reAppend(".hide.other", tr_cl);
            reAppend(".subject-head", tr);
//            tr_cl += '<td><span class="table-up glyphicon glyphicon-arrow-up"></span><span class="table-down glyphicon glyphicon-arrow-down"></span></td>';
            reAppend(".hide.more", tr_cl);

        }

        function addField(name, id, more) {
            var $clone = "";
            if (more !== "set") {
                $clone = $TABLE.find('tr.hide.more').clone(true).removeClass('hide table-line more');
                $TABLE.find('table').append($clone);
                $("tr:not(:hidden) td.std_name").removeClass("std_name").attr("data", name).text(name);
                $("tr:not(:hidden) td.std_id").removeClass("std_id").addClass("std_id-" + id).text(id);
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

