<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>E-Controller | Admin Panel</title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
          href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}">
    <!-- input style -->
    <link rel="stylesheet" href="{{ asset('backend/input/style.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/codemirror/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/plugins/codemirror/theme/monokai.css') }}">
    <!-- SimpleMDE -->
    <!-- <link rel="stylesheet" href="{{ asset('backend/plugins/simplemde/simplemde.min.css') }}"> -->
    <!-- Toastr -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>

    <!-- <link rel="icon" href="{{ asset('backend/dist/img/uzb_icon.png') }}"> -->
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('backend/dist/img/logo.png') }}" alt="logo"
             height="100" width="100">
    </div>

    @include('admin.body.header')

    @include('admin.body.sidebar')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @yield('admin')

    </div>
    <!-- /.content-wrapper -->
    <!-- @include('admin.body.footer') -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->


</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('backend/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('backend/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('backend/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('backend/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('backend/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('backend/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('backend/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('backend/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('backend/plugins/moment/moment.min.js') }}></script>
<script src=" {{ asset('backend/plugins/inputmask/jquery.inputmask.min.js') }}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- CodeMirror -->
<script src="{{ asset('backend/plugins/codemirror/codemirror.js') }}"></script>
<script src="{{ asset('backend/plugins/codemirror/mode/css/css.js') }}"></script>
<script src="{{ asset('backend/plugins/codemirror/mode/xml/xml.js') }}"></script>
<script src="{{ asset('backend/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('backend/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('backend/dist/js/pages/dashboard.js') }}"></script>
<!-- input app.js -->
<script src="{{ asset('backend/input/app.js') }}"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

{{-- Toastr --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    @endif
</script>
{{-- Sweetalert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('backend/js/code.js')}}"></script>

<!-- Page specific script -->

<script>
    $(function () {
        //Date range picker
        $('#reservation').daterangepicker({
            // opens: 'left'
            locale: {
                cancelLabel: 'Bekor qilish',
                applyLabel: 'Tanlash',
                format: 'YYYY-MM-DD'
            }
        }, function (start, end, label) {
            var order_status = $('select[id="order_status"]').val();
            var first_type = 'date';
            var startDate = start.format('YYYY-MM-DD');
            var endDate = end.format('YYYY-MM-DD');
            var params = "first_type=" + first_type + "&order_status=" + order_status + "&start_date=" + startDate + "&end_date=" + endDate;
            location.href = "{{ url('/order/view?') }}" + params;
            {{--$.ajax({--}}
            {{--    url: "{{ url('/order/orders/filter?startDate=') }}" + startDate + "&endDate=" + endDate,--}}
            {{--    type: "GET",--}}
            {{--    // dataType: "json",--}}
            {{--    // data: {--}}
            {{--    //     start_date: start.format('YYYY-MM-DD'),--}}
            {{--    //     end_date: end.format('YYYY-MM-DD'),--}}
            {{--    //     order_status: order_status,--}}
            {{--    //     first_type: first_type,--}}
            {{--    // },--}}
            {{--    success: function (data) {--}}
            {{--        var order_div = $('div[name="orders"]').empty();--}}
            {{--        var list = ``;--}}

            {{--        $.each(data, function (key, value) {--}}
            {{--            var url = '{{ route('order.show', ':id') }}';--}}
            {{--            url = url.replace(':id', value.id);--}}
            {{--            list += `<tr>--}}
            {{--                        <td>` + value.id + `</td>--}}
            {{--                        <td>` + value.fullname + `</td>--}}
            {{--                        <td>` + value.address.name + `/` + value.address.address + `</td>--}}
            {{--                        <td>` + value.total_amount + `</td>--}}
            {{--                        <td>` + value.date + `</td>--}}
            {{--                        <td><span class="badge badge-` + value.color + `">` + value.statuses + `</span></td>--}}
            {{--                        <td>--}}
            {{--                            <a href="` + url + `" class="btn btn-info"--}}
            {{--                                title="Ko'rish"><i class="fas fa-eye"></i></a>--}}
            {{--                        </td>--}}
            {{--                    </tr>`;--}}
            {{--        });--}}
            {{--        order_div.append(`<table id="example" class="table table-bordered table-striped">--}}
            {{--                                    <thead>--}}
            {{--                                        <tr>--}}
            {{--                                            <th>ID</th>--}}
            {{--                                            <th>Buyurtmachi</th>--}}
            {{--                                            <th>Address</th>--}}
            {{--                                            <th>Umumiy summa</th>--}}
            {{--                                            <th>Sana</th>--}}
            {{--                                            <th>Holat</th>--}}
            {{--                                            <th>Boshqarish</th>--}}
            {{--                                        </tr>--}}
            {{--                                    </thead>--}}
            {{--                                    <tbody>` + list + `</tbody>--}}
            {{--                                </table>`);--}}
            {{--    }--}}
            {{--});--}}
        });
    });
    function filterStatusOrders(){
        var order_status = $('select[id="order_status"]').val();
        var startDate = $('#reservation').data('daterangepicker').startDate.format('YYYY-MM-DD');
        var endDate = $('#reservation').data('daterangepicker').endDate.format('YYYY-MM-DD');
        var first_type = 'status';
        if(startDate != endDate){
            first_type = 'date';
        }

        var params = "first_type=" + first_type + "&order_status=" + order_status + "&start_date=" + startDate + "&end_date=" + endDate;
        location.href = "{{ url('/order/view?') }}" + params;
        {{--$.ajax({--}}
        {{--    url: "{{ url('/order/orders/filter') }}",--}}
        {{--    type: "POST",--}}
        {{--    dataType: "json",--}}
        {{--    data: {--}}
        {{--        start_date: startDate,--}}
        {{--        end_date: endDate,--}}
        {{--        order_status: order_status,--}}
        {{--        first_type: first_type,--}}
        {{--    },--}}
        {{--    success: function (data) {--}}
        {{--        var order_div = $('div[name="orders"]').empty();--}}
        {{--        var list = ``;--}}

        {{--        $.each(data, function (key, value) {--}}
        {{--            var url = '{{ route('order.show', ':id') }}';--}}
        {{--            url = url.replace(':id', value.id);--}}
        {{--            list += `<tr>--}}
        {{--                            <td>` + value.id + `</td>--}}
        {{--                            <td>` + value.fullname + `</td>--}}
        {{--                            <td>` + value.address.name + `/` + value.address.address + `</td>--}}
        {{--                            <td>` + value.total_amount + `</td>--}}
        {{--                            <td>` + value.date + `</td>--}}
        {{--                            <td><span class="badge badge-` + value.color + `">` + value.statuses + `</span></td>--}}
        {{--                            <td>--}}
        {{--                                <a href="` + url + `" class="btn btn-info"--}}
        {{--                                    title="Ko'rish"><i class="fas fa-eye"></i></a>--}}
        {{--                            </td>--}}
        {{--                        </tr>`;--}}
        {{--        });--}}
        {{--        order_div.append(`<table id="example" class="table table-bordered table-striped">--}}
        {{--                                        <thead>--}}
        {{--                                            <tr>--}}
        {{--                                                <th>ID</th>--}}
        {{--                                                <th>Buyurtmachi</th>--}}
        {{--                                                <th>Address</th>--}}
        {{--                                                <th>Umumiy summa</th>--}}
        {{--                                                <th>Sana</th>--}}
        {{--                                                <th>Holat</th>--}}
        {{--                                                <th>Boshqarish</th>--}}
        {{--                                            </tr>--}}
        {{--                                        </thead>--}}
        {{--                                        <tbody>` + list + `</tbody>--}}
        {{--                                    </table>`);--}}
        {{--    }--}}
        {{--});--}}
    }
</script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": [{extend: 'copy', text: 'Nusxa olish'}, "excel", "pdf"],
            "oLanguage": {
                "sSearch": "Qidirish:"
            },
            "language": {
                "info": "_TOTAL_ ta elementdan _START_ dan _END_ gacha ko'rsatilmoqda",
                "infoEmpty": "0 ta elementdan 0 dan 0 gacha ko'rsatilmoqda",
                emptyTable: "Jadvalda ma'lumotlar mavjud emas",
                "paginate": {
                    "previous": "Oldingi",
                    "next": "Keyingi",
                }
            }
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $("#example3").DataTable({
            "responsive": true,
            "paging":   false,
            "info":   false,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": [{extend: 'copy', text: 'Nusxa olish'}, "excel", "pdf"],
            "oLanguage": {
                "sSearch": "Qidirish:"
            },
            "language": {
                "info": "_TOTAL_ ta elementdan _START_ dan _END_ gacha ko'rsatilmoqda",
                "infoEmpty": "0 ta elementdan 0 dan 0 gacha ko'rsatilmoqda",
                emptyTable: "Jadvalda ma'lumotlar mavjud emas",
                "paginate": {
                    "previous": "Oldingi",
                    "next": "Keyingi",
                }
            }
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example3_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<script>
    $(function () {
        // Summernote
        $('#summernote').summernote()
        $('#summernote1').summernote()
        $('#summernote2').summernote()

        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });

    })
</script>

<script>
    $(function () {
        //Date picker
        $('#reservationdate').datetimepicker({
            format: 'DD-MM-YYYY'
        });
        $('#reservationdate1').datetimepicker({
            format: 'DD-MM-YYYY'
        });
    });

    $(document).ready(function () {
        $('.product-image-thumb').on('click', function () {
            var $image_element = $(this).find('img')
            $('.product-image').prop('src', $image_element.attr('src'))
            $('.product-image-thumb.active').removeClass('active')
            $(this).addClass('active')
        })
    })
</script>
</body>

</html>
