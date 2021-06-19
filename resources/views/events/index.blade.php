 @extends('layout')

 @section('content')
 <div class="container">
 <h1 class="display-4">Event Management</h1>
 <form method="POST" action="{{ route('events.save') }}">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleFormControlInput1">Event Name</label>
                <input type="text" class="form-control" name="event_name" id="exampleFormControlInput1" placeholder="Event Name">
				@error('event_name')
                    <p class="help is-danger">{{ $errors->first('event_name') }}</p>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Event Description</label>
                <textarea class="form-control" name="event_description" id="exampleFormControlTextarea1" placeholder="Event Description" rows="3"></textarea>
                @error('event_description')
                    <p class="help is-danger">{{ $errors->first('event_description') }}</p>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Start Date</label>
                <input type="date" class="form-control" name="start_date" id="exampleFormControlInput1" placeholder="Event Name">
                @error('start_date')
                    <p class="help is-danger">{{ $errors->first('start_date') }}</p>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">End Date</label>
                <input type="date" class="form-control" name="end_date" id="exampleFormControlInput1" placeholder="Event Name">
                @error('end_date')
                    <p class="help is-danger">{{ $errors->first('end_date') }}</p>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleFormControlInput1">Organiser</label>
                <input type="text" class="form-control" name="organiser" id="exampleFormControlInput1" placeholder="Organiser">
                @error('organiser')
                    <p class="help is-danger">{{ $errors->first('organiser') }}</p>
                @enderror
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="exampleFormControlInput1">Tickets</label>
                <button type="button" class="add_tickets btn btn-primary">Add New Ticket</button>
             </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Ticket No</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody class="ticket_body">

 
        </tbody>
</table>
<button type="submit" class="btn btn-success" >Save Event</button>
</form>

 </div>
 @endsection