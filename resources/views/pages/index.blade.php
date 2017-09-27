@extends('../layouts.default')

@section('content')

    <h2>Add New Customer</h2>

    <form action="/">
        <div class="container">
            <!-- Row 1 -->
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="client-name">Record ID</label>
                    <input type="text" class="form-control" id="client-id" placeholder="Auto Generate" disabled>
                </div>
                <div class="form-group col-md-4">
                    <label for="client-name">Client Name</label>
                    <input type="text" class="form-control" id="client-name" placeholder="ex. John Smith">
                </div>
                <div class="form-group col-md-4">
                    <label for="client-org">Organization</label>
                    <input type="text" class="form-control" id="client-org" placeholder="ex. ABC Group Cambodia">
                </div>
                
            </div>
            <!-- Row 2 -->
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="client-phone">Phone Number</label>
                    <input type="text" class="form-control" id="client-phone" placeholder="ex. (905) 365-7288">
                </div>
                <div class="form-group col-md-4">
                    <label for="client-email">E-Mail Address</label>
                    <input type="text" class="form-control" id="client-email" placeholder="ex. johnsmith@abcgroup.com">
                </div>
            </div>
            <!-- Row 3 -->
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="client-hc">Employee Headcount</label>
                    <input type="text" class="form-control" id="client-hc" placeholder="ex. 650">
                </div>
                <div class="form-group col-md-4">
                    <label for="client-rate">Monthly Subscription Rate</label>
                    <input type="number" class="form-control" min="0" step="0.25" id="client-rate" placeholder="ex. 5.00">
                </div>
                <div class="form-group col-md-4">
                    <label for="client-value">Total Monthly Value</label>
                    <input type="number" class="form-control" min="0" step="0.25" id="client-value" placeholder="ex. 3250">
                </div>
            </div>
            <!-- Row 4 -->
            <div class="row">
                <div class="form-group col-md-12">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
        
    </form>

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