@extends('../layouts.default')

@section('content')

    <h2>Add New Customer</h2>

    <h4>[Form Goes Here]</h4>

    <h2>View All Customers</h2>
    <div class="container">
        <!-- Header Row -->
        <div class="row">
            <div class="col-md-1">ID</div>
            <div class="col-md-1">Name</div>
            <div class="col-md-1">Company</div>
            <div class="col-md-2">Phone</div>
            <div class="col-md-2">E-Mail</div>
            <div class="col-md-1">Headcount</div>
            <div class="col-md-1">Monthly Rate</div>
            <div class="col-md-1">Total Monthly Value</div>
            <div class="col-md-1">Created On</div>
            <div class="col-md-1">Updated On</div>
        </div>

        <!-- [Start] Show All Customers -->
        <?php foreach ($clients as $client) : ?>
            <div class="row" style="word-wrap: break-word;">
                <div class="col-md-1">
                    <a href="{{ url('client/'.$client->id) }}">
                        {{ $client->id }}
                    </a>
                </div>
                <div class="col-md-1">{{ $client->name }}</div>
                <div class="col-md-1">{{ $client->company }}</div>
                <div class="col-md-2">{{ $client->phone }}</div>
                <div class="col-md-2">{{ $client->email }}</div>
                <div class="col-md-1">{{ $client->headcount }}</div>
                <div class="col-md-1">{{ $client->monthly_rate }}</div>
                <div class="col-md-1">{{ $client->monthly_value }}</div>
                <div class="col-md-1">{{ $client->created_at }}</div>
                <div class="col-md-1">{{ $client->updated_at }}</div>
            </div>
        <?php endforeach; ?>
        <!-- [End] Show All Customers -->
    </div>

@endsection