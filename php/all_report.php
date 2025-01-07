<?php 
require ("../lib/function.php");
require ("../lib/connection.php");
$sql = gen_sql($_POST);
$ress = $conn->query($sql);
 ?>
<idv class="ibox-body">
                        <div id="example-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered table-hover dataTable" id="example-table" cellspacing="0" width="100%" role="grid" aria-describedby="example-table_info" style="width: 100%;">
                       <?php table_row($ress); ?>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        
                        </div>
                        </ul></div></div></div></div>
                    </div>
                    
                      <script src="../assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="../assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
        <?php 
require ("../lib/function.php");
require ("../lib/connection.php");
$sql = gen_sql($_POST);
$ress = $conn->query($sql);
 ?>
<idv class="ibox-body">
                        <div id="example-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">

                            <div class="col-sm-12">
                                <table class="table table-striped table-bordered table-hover dataTable" id="example-table" cellspacing="0" width="100%" role="grid" aria-describedby="example-table_info" style="width: 100%;">
                       <?php table_row($ress); ?>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        
                        </div>
                        </ul></div></div></div></div>
                    </div>
                    
                      <script src="../assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="../assets/js/app.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
        