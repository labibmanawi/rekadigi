<body onload="xyz()">
@extends('admin.adminHome')
@section('content') 
                <div class="container-fluid pt-4 px-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Inbox Messages</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Servis</th>
                                            <th scope="col">Pesan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=1; ?>
                                        @foreach ($inbox_list as $inboxList => $inbox)
                                            <tr>
                                                <th scope="row">{{$i}}</th>
                                                <td>{{ $inbox->nama }}</td>
                                                <td>{{ $inbox->email }}</td>
                                                <td>{{ $inbox->phone }}</td>
                                                <td>{{ $inbox->services->serviceName }}</td>
                                                <td>{{ $inbox->message }}</td>
                                            </tr>
                                        <?php $i++ ?>    
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- Table End -->

<script>
        function xyz() {
            var x = document.getElementsByClassName("nav-link")[1];
            x.classList.add("active");
            
    
        };
</script>

 @endsection    