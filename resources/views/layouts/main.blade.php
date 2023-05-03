<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title','PWAN Group')</title>
    <link href="{{asset('favicon.png')}}" rel="icon">
    <link href="{{asset('favicon.png')}}" rel="apple-touch-icon">
    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('build/assets/ihs-logo.webp')}}">
    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/daterangepicker.css')}}" rel="stylesheet">
    {{-- <link href="{{asset('css/style-1.css')}}" rel="stylesheet"> --}}

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.nav')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                @yield('content')

              
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; {{ Config::get('app.name', 'PWANGROUP'); }} {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>

    <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
    <script src="{{asset('assets/js/datepickerrange.js')}}"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css'>


    <script type="text/javascript">
        var print_btn = document.querySelector('.booking-print');

        if (print_btn) {
            print_btn.addEventListener('click',()=>{
                var printContent = document.querySelector('.booking-print-area').innerHTML;
                var originalContent = document.body.innerHTML;
                document.body.innerHTML = printContent;
                window.print();
                document.body.innerHTML = originalContent;
                window.print();
            }); 
        }
 

        var searchBtn = document.querySelector('.search-btn');
        var staff_id = document.querySelector('.name-search');
        var search_result = document.querySelector('#search-result');
        var _token          = document.querySelector('input[name="_token"]'); 

        if (searchBtn) {
            searchBtn.addEventListener('click', async()=>{
            search_result.innerHTML = `<span class="text-success" style="font-size:10px">Searching...</span>`;
            const params = {
                        _token:_token.value,
                        staff_id:staff_id.value
                    };
               
                    await fetch("/backoffice/search-user", {
                        method:"POST",
                        mode:"cors",
                        cache:"no-cache",
                        credentials:"same-origin",
                        headers:{
                            "Content-Type":"application/json",
                            'X-CSRF-TOKEN':_token.value,
                        },
                        body: JSON.stringify(params)
                    })
                    .then((response)=>response.json())
                    .then(data=>{                        
                        if(data.status=='failed'){
                          
                            search_result.innerHTML = `<span class="text-danger" style="font-size:10px">${data.message}</span>`;
                        }
                    }).catch((error)=>{
  
                    })
        });
        
        }
      

        $(function() {
        
            var start = moment().subtract(29, 'days');
            var end = moment();
            var start_date = document.getElementById('start-date');
            var end_date = document.getElementById('end-date');
        
            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                start_date.value= start.format('YYYY-MM-DD');
                end_date.value= end.format('YYYY-MM-DD');
                console.log(start.format('MMMM D, YYYY'));
                // searchBooking(start.format('YYYY-MM-DD'),end.format('YYYY-MM-DD'));
            }
        
            $('#reportrange').daterangepicker({
                "timePicker": true,
                startDate: start,
                endDate: end,
                ranges: {
                   'Today': [moment(), moment()],
                   'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                   'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                   'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                   'This Month': [moment().startOf('month'), moment().endOf('month')],
                   'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                   'This Year': [moment().startOf('year'), moment().endOf('year')],
                }
            }, cb);
        
            cb(start, end);
        
        });

        var booking_search = document.querySelector('#view-report');
        var view_used_report = document.querySelector('#view-used-report');
        var view_unused_report = document.querySelector('#view-unused-report');
        var start_date = document.getElementById('start-date');
        var end_date = document.getElementById('end-date');
        
        if (booking_search) {
            booking_search.addEventListener('click',()=>{
                var status = booking_search.dataset.status;
                searchBooking(start_date.value,end_date.value);

            });
        }
       
        if (view_used_report) {
            view_used_report.addEventListener('click',()=>{
                var status = view_used_report.dataset.status;
                searchBooking(start_date.value,end_date.value,status);

            });
        }
       

       if (view_unused_report) {
            view_unused_report.addEventListener('click',()=>{
                var status = view_unused_report.dataset.status;
                searchBooking(start_date.value,end_date.value,status);

            });
       }

        async function searchBooking(start,end,status=""){
            let url = "/backoffice/search-booking?";
            
            let payload = new URLSearchParams([           
                ["start",start],
                ["end",end],
                ["status",status]
            ])

            console.log(url+payload);

            window.location.href= url+payload;
            
        }

        var generate_report = document.getElementById('generate-report');

        if (generate_report) {
            generate_report.addEventListener('click',()=>{
                
                generateReport(start_date.value,end_date.value);

            });
        }
      

        async function generateReport(start,end){
            let url = "/backoffice/generate-report?";
            
            let payload = new URLSearchParams([           
                ["start",start],
                ["end",end]
            ])

            console.log(url+payload);

            window.location.href= url+payload;
        }
    
    
    </script>

</body>

</html>