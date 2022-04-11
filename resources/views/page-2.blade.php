<x-layout>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    </head>
    <x-slot:title>Page1</x-slot:title>
    <x-slot:header>{{asset('storage/nflbackground.jpeg')}}</x-slot:header>
    <x-slot:headertype>{{'nfl'}}</x-slot:headertype>
    <div class="w-full px-4">
        <table class="table yajra-dt">
            <thead>
            <tr>
                <th>Abbreviation</th>
                <th>City</th>
                <th>Conference</th>
                <th>Full Name</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(function () {
            var table = $('.yajra-dt').DataTable({
                processing: true,
                serverSide: true,
                lengthMenu: [[5, 10, -1], [5, 10, 'All']],
                ajax: "{{route('page2.get-data')}}",
                skipPaging: true,
                columns: [
                    {
                        data: 'abbreviation',
                        name: 'abbreviation'
                    },
                    {
                        data: 'city',
                        name: 'city'
                    },
                    {
                        data: 'conference',
                        name: 'conference'
                    },
                    {
                        data: 'full_name',
                        name: 'full_name'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                ]
            });

        });
    </script>


</x-layout>

