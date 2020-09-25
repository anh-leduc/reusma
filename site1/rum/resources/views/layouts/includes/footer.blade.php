<footer class="footer">
    <div class="w-100 clearfix">
        <span class="text-center text-sm-left d-md-inline-block">Copyright © 2020 Maps & Navigation Development. All Rights
            Reserved.</span>
        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Resource Usage Management, Version 1.0.0</span>
    </div>
</footer>
@include('components.modal.loading');
@include('components.modal.message');
</div>
</div>
<script src="{{asset('assets/js/modal.js')}}"></script>

@if(Request::is('project'))

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('assets/src/js/vendor/jquery-3.3.1.min.js')}}"><\/script>')</script>
<script src="{{asset('assets/plugins/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/plugins/screenfull/dist/screenfull.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
{{-- <script src="{{asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap.min.js')}}"></script> --}}
<script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
{{-- <script src="{{asset('assets/plugins/d3/dist/d3.min.js')}}"></script>
<script src="{{asset('assets/plugins/c3/c3.min.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/amcharts.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/gauge.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/serial.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/themes/light.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/pie.js')}}"></script> --}}
<script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/tables.js')}}"></script>
<script src="{{asset('assets/js/widgets.js')}}"></script>
<script src="{{asset('assets/dist/js/theme.min.js')}}"></script>
<script src="{{asset('assets/js/project.js')}}"></script>

@elseif(Request::is('employee/*')||Request::is('employee'))
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('assets/src/js/vendor/jquery-3.3.1.min.js')}}"><\/script>')</script>
<script src="{{asset('assets/plugins/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/plugins/screenfull/dist/screenfull.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
{{-- <script src="{{asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap.min.js')}}"></script> --}}
<script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
{{-- <script src="{{asset('assets/plugins/d3/dist/d3.min.js')}}"></script>
<script src="{{asset('assets/plugins/c3/c3.min.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/amcharts.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/gauge.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/serial.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/themes/light.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/pie.js')}}"></script> --}}
{{-- <script src="{{asset('assets/plugins/select2/dist/js/select2.min.js')}}"></script> --}}
<script src="{{asset('assets/js/tables.js')}}"></script>
{{-- <script src="{{asset('assets/js/widgets.js')}}"></script> --}}
<script src="{{asset('assets/dist/js/theme.min.js')}}"></script>
<script src="{{asset('assets/js/employee.js')}}"></script>
<script src="{{asset('assets/js/employeedetail.js')}}"></script>
@elseif(Request::is('project/*'))

<!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>window.jQuery || document.write('<script src="{{asset('assets/src/js/vendor/jquery-3.3.1.min.js')}}"><\/script>')</script>
<script src="{{asset('assets/plugins/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/plugins/screenfull/dist/screenfull.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
{{-- <script src="{{asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap.min.js')}}"></script> --}}
<script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
{{-- <script src="{{asset('assets/plugins/d3/dist/d3.min.js')}}"></script>
<script src="{{asset('assets/plugins/c3/c3.min.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/amcharts.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/gauge.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/serial.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/themes/light.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/pie.js')}}"></script> --}}
<script src="{{asset('assets/dist/js/theme.min.js')}}"></script>
<script src="{{asset('assets/js/projectdetail.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

@else
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{asset('assets/src/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script>window.jQuery || document.write('<script src="{{asset('assets/src/js/vendor/jquery-3.3.1.min.js')}}"><\/script>')</script>
<script src="{{asset('assets/plugins/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('assets/plugins/screenfull/dist/screenfull.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{asset('assets/plugins/moment/moment.js')}}"></script>
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('assets/plugins/d3/dist/d3.min.js')}}"></script>
<script src="{{asset('assets/plugins/c3/c3.min.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/amcharts.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/gauge.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/serial.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/themes/light.js')}}"></script>
<script src="{{asset('assets/plugins/amcharts/pie.js')}}"></script>
<script src="{{asset('assets/js/charts.js')}}"></script>
<script src="{{asset('assets/dist/js/theme.min.js')}}"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/af-2.3.5/datatables.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function () {
    var table = $('#data_table').DataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        "searching": false,
        // scrollY:       "400px",
        // scrollX:        true,
        // scrollCollapse: true,
      
        columnDefs: [
            // { "width": 70, "targets": 0 },
            // { "width": 100, "targets": 1 },
            @for($i = 2; $i<count($mondays)+2;$i++)
                // { "width": 10, "targets": {{$i}} },
                {
                    "targets": {{$i}},
                    "createdCell": function (td, cellData, rowData, row, col) {
                        if (cellData>=100) {
                            $(td).css('background-color', '#FF0000');  //red
                        }
                        else if (cellData>85 && cellData<100) {
                            $(td).css('background-color', '#F9A941');  //ogange
                        }
                        else if (cellData>65 && cellData<=85) {
                            $(td).css('background-color', '#31B404'); //green
                        }
                        else if (cellData>25 && cellData<=65) {
                            $(td).css('background-color', '#00BFFF');  //blue
                        }
                        else if (cellData>0 && cellData<=25) {
                            $(td).css('background-color', '#9F9E9D');  //gray
                        }
                    }
                },
            @endfor
        ],
        fixedColumns: false,
        ajax: '{!!route('users-list') !!}',
        columns: [
            {data: 'EmpCode', name: 'EmpCode', class: 'text-center'},
            {data: 'EmpName', name: 'EmpName', class: 'text-center'},
            @foreach($mondays as $monday)
            {
                data: '{{$monday}}', 
                name:'{{$monday}}', 
                class: 'text-center font-weight-bold',
                render:  $.fn.dataTable.render.number( '', '', 0, '' ,'%')
            },
            @endforeach
        ],
        destroy: true
    }); 
  });
</script> 

@endif
</body>
</html>