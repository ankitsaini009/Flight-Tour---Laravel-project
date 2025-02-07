@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Flight Booking</h2><br>
                <form action="{{ route('flight.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="flight_id" value="{{(isset($Flights_bookindata)?$Flights_bookindata->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="airline_name" class="form-label">Airline Name</label>
                            <input type="text" class="form-control" name="airline_name" placeholder="Enter Airline Name" value="{{(isset($Flights_bookindata)?$Flights_bookindata->airline_name:old('airline_name'))}}" autocomplete="off">
                            @if ($errors->has('airline_name'))
                            <div class="text-danger">{{ $errors->first('airline_name') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="departure_time" class="form-label">Departure Time</label>
                            <input type="time" class="form-control" name="departure_time" placeholder="Enter Discount" value="{{(isset($Flights_bookindata)?$Flights_bookindata->departure_time:old('departure_time'))}}" autocomplete="off">
                            @if ($errors->has('departure_time'))
                            <div class="text-danger">{{ $errors->first('departure_time') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="arrival_time" class="form-label">Arrival Time</label>
                            <input type="time" class="form-control" name="arrival_time" value="{{(isset($Flights_bookindata)?$Flights_bookindata->expire_date:old('arrival_time'))}}" autocomplete="off">
                            @if ($errors->has('arrival_time'))
                            <div class="text-danger">{{ $errors->first('arrival_time') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="origin" class="form-label">Origin</label>
                            <input type="text" class="form-control" name="origin" placeholder="Enter Origin " value="{{(isset($Flights_bookindata)?$Flights_bookindata->origin:old('origin'))}}" autocomplete="off">

                            @if ($errors->has('origin'))
                            <div class="text-danger">{{ $errors->first('origin') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="destination" class="form-label">Destination</label>
                            <input type="text" class="form-control" name="destination" placeholder="Enter Destination " value="{{(isset($Flights_bookindata)?$Flights_bookindata->destination:old('destination'))}}" autocomplete="off">
                            @if ($errors->has('discount'))
                            <div class="text-danger">{{ $errors->first('discount') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" placeholder="Enter Price " value="{{(isset($Flights_bookindata)?$Flights_bookindata->price:old('price'))}}" autocomplete="off">
                            @if ($errors->has('price'))
                            <div class="text-danger">{{ $errors->first('price') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="duration" class="form-label">Duration</label>
                            <input type="text" class="form-control" name="duration" placeholder="Enter Duration " value="{{(isset($Flights_bookindata)?$Flights_bookindata->duration:old('duration'))}}" autocomplete="off">
                            @if ($errors->has('duration'))
                            <div class="text-danger">{{ $errors->first('duration') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ (isset($Blog) && $Blog->status == 'active') ? 'selected' : (old('status') == 'active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ (isset($Blog) && $Blog->status == 'inactive') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Flights_bookindata)? "Update" : "Create")}}</button>
                        <a href="{{ route('flight.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('Description');
</script>
@endsection