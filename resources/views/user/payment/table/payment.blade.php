<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h1 class="h4 mb-0 font-weight-bold text-primary">Payment Method</h1>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            @if(count($pays) > 0)
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr class="text-center">
                        <th>Id</th>
                        <th>Bank Name</th>
                        <th>Account Number</th>
                        <th>Owner</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pays as $pay)
                        <tr class="text-center">
                            <td>{{$pay->id}}</td>
                            <td>{{$pay->namaBank}}</td>
                            <td>{{$pay->nomorRekening}}</td>
                            <td>{{$pay->atasNama}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h1 class="h4 mb-0 font-weight-bold text-primary">No Records</h1>
            @endif
        </div>
    </div>
</div>