<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css1/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('/css/classic.css') }}" rel="stylesheet"> -->
   
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script> -->

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!-- <script src="{{ ('js/app.js') }}"></script> -->
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
    <!-- <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"> -->
<script type="text/javascript">
    $(document).ready(function(){
        
    $('#tblusers tbody').on('click', '.tbledit', function (){
        var id=($(this).attr('userid'));
        $.ajax({
                url:"{{route('edit')}}",
                method:"GET",
                data:{'id':id},
                dataType:"json",
                success:function(result){
                    console.log(result['id']);
                    $('#updateModal').modal('show');
                    
                    $('#id').val(result['id']);
                    $('#uname').val(result['data'].name);
                    $('#uemail').val(result['data'].email);
                }
        });
    });
    // $('.ckeditor').ckeditor();
    $('#tblusers tbody').on('click', '.tbldelete', function (){
        var id=($(this).attr('userid'));
        $('#delid').val(id);
        $('#deleteModal').modal('show');
        
    });
    $('#tblusers tbody').on('click', '.tblshow', function (){
        var id=($(this).attr('userid'));
        $.ajax({
                url:"{{route('edit')}}",
                method:"GET",
                data:{'id':id},
                dataType:"json",
                success:function(result){
                    // alert(result['data'].name);
                    $('#userModal').modal('show');
                    $('#showname').val(result['data'].name);
                    $('#showemail').val(result['data'].email);
                }
        });
        
    });
    $('#tblusers').DataTable({
        
        lengthMenu:[[10,25,50,100,-1],[10,25,50,100,"All"]],
        processing: true,
        serverSide: true,
        responsive: true,
        dom: "<'row'<'col-sm-2 col-md-2'l><'col-sm-6 col-md-6'B><'col-sm-4 col-md-4'f>>" +
                "<'row'<'col-sm-12 col-md-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            
            buttons:
                [
                
                { 
                    extend: 'copy', 
                    className: 'btn btn-info',
                    text:'<i class="fa fa-files-o"></i> Copy' ,
                    exportOptions:{
                    columns:':visible'
                    }
                    },
                { 
                    extend: 'csv', 
                    className: 'btn btn-info ',
                    text:'<i class="fa fa-file-text-o"></i> CSV',
                    exportOptions:{
                    columns:':visible'
                    },
                    title: 'Data CSV ' + GetTodayDate(),
                },
                { 
                    extend: 'excel', 
                    className: 'btn btn-info ',
                    text:'<i class="fa fa-file-excel-o"></i> Excel',
                    title:'Student Account',
                    exportOptions:{
                    columns:':visible'
                    }  
                },
                { 
                    extend: 'pdf', 
                    className: 'btn btn-info ',
                    text:'<i class="fa fa-file-pdf-o"></i> PDF',
                    title:'Student Account',
                    exportOptions:{
                    columns:':visible'
                    },
                    border:[
                    true,true,true,true
                    ]  
                },
                { 
                    extend: 'print', 
                    className: 'btn btn-info ',
                    text:'<i class="fa fa-print fa-x5"></i> Print',
                    title:'Users Account',
                    exportOptions:{
                    columns:':visible'
                    },
                    border:[
                    true,true,true,true
                    ]
                }
                // ,
                //     {
                //     extend:'colvis',
                //     className:'btn btn-outline-info btn-sm',
                //     text:'<i class="fa fa-eye fa-x5"></i> Column'
                //     }
            ],
            ajax: "{{ route('list') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created', orderable: false, searchable: false},
            {data: 'updated_at', name: 'updated', orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
           
    });
    function GetTodayDate() {
               var tdate = new Date();
               var dd = tdate.getDate(); //yields day
               var MM = tdate.getMonth(); //yields month
               var yyyy = tdate.getFullYear(); //yields year
               var currentDate= dd + "-" +( MM+1) + "-" + yyyy;
               
               return currentDate;
    }
    $('#deleteform').on('submit',function(e){
            e.preventDefault();
        $.ajax({
                url:"{{route('delete')}}",
                method:"POST",
                data:$(this).serialize(),
                dataType:"json",
                success:function(result){
                    console.log(result);
                    if(result.success){
                        $('#delmessage').html(result.success).fadeIn('slow').delay(1000).fadeOut('slow');
                        $('#tblusers').DataTable().ajax.reload();
                        $('#deleteModal').modal('hide');
                
                    }
                }
            });    
        });
        $('#updateform').on('submit',function(e){
            
            e.preventDefault();
                
                $.ajax({
                    url:"{{route('update')}}",
                    method:"POST",
                    data:$(this).serialize(),
                    dataType:"json",
                    success:function(result){
                        if(result.error){
                            if(result.name!=''){
                                $('#errupdatename').html(result.name);
                            }else{
                                $('#errupdatename').html('');
                            }
                            if(result.email!=''){
                                $('#errupdateemail').html(result.email);
                            }else{
                                $('#errupdateemail').html('');
                            }
                            if(result.password!=''){
                                $('#errupdatepassword').html(result.password);
                            }else{
                                $('#errupdatepassword').html('');
                            }
                        }else{
                            
                            $('#errupdatepassword').html('');
                            $('#errupdateemail').html('');
                            $('#errupdatename').html('');
                            // $('#insertform')[0].reset();
                            $('#err_updatemessage').html(result.success).fadeIn('slow').delay(1000).fadeOut('slow');
                            $('#updateModal').modal('hide');
                            $('#updateform')[0].reset();
                            $('#tblusers').DataTable().ajax.reload();
                        
                        }
                    },
                    error:function(err){
                        if (err.status == 422) { // when status code is 422, it's a validation issue
                
                            $.each(err.responseJSON.errors, function (i, error) {
                                console.log(error[0])
                            });
                        }
                    }
                });    
            });
        $('#insertform').on('submit',function(e){
            
        e.preventDefault();
            var name=$('#name').val();
            var email=$('#email').val();
            var password=$('#password').val();
            $.ajax({
                url:"{{route('insert')}}",
                method:"POST",
                data:$(this).serialize(),
                dataType:"json",
                success:function(result){
                    // console.log(result.name);
                    if(result.error){
                        if(result.name!=''){
                            $('#errname').html(result.name);
                        }else{
                            $('#errname').html('');
                        }
                        if(result.email!=''){
                            $('#erremail').html(result.email);
                        }else{
                            $('#erremail').html('');
                        }
                        if(result.password!=''){
                            $('#errpassword').html(result.password);
                        }else{
                            $('#errpassword').html('');
                        }
                    }else{
                        $('#tblusers').DataTable().ajax.reload();
                        $('#errpassword').html('');
                        $('#erremail').html('');
                        $('#errname').html('');
                        $('#insertform')[0].reset();
                        $('#exampleModal').modal('hide');
                        $('#err_message').html(result.success).fadeIn('slow').delay(1000).fadeOut('slow');
                    }
                },
                error:function(err){
                    if (err.status == 422) { // when status code is 422, it's a validation issue
            
                        $.each(err.responseJSON.errors, function (i, error) {
                            console.log(error[0])
                        });
                    }
                }
            });    
        });
        
    });
</script>
</body>
</html>
