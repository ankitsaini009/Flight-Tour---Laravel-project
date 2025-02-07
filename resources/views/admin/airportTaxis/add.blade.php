@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Airport Taxis</h2><br>
                <form action="{{ route('airportTaxis.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="airportTaxis_id" value="{{(isset($Airport_taxidata)?$Airport_taxidata->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="taxi_company_name" class="form-label">Taxi Company Name</label>
                            <input type="text" class="form-control" name="taxi_company_name" placeholder="Enter Taxi Company Name" value="{{(isset($Airport_taxidata)?$Airport_taxidata->taxi_company_name:old('taxi_company_name'))}}" autocomplete="off">
                            @if ($errors->has('taxi_company_name'))
                            <div class="text-danger">{{ $errors->first('taxi_company_name') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="contact_number" class="form-label">Contact number</label>
                            <input type="number" class="form-control" name="contact_number" placeholder="Enter Contact Number" value="{{(isset($Airport_taxidata)?$Airport_taxidata->contact_number:old('contact_number'))}}" autocomplete="off">
                            @if ($errors->has('contact_number'))
                            <div class="text-danger">{{ $errors->first('contact_number') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="vehicle_type" class="form-label">Vehicle Type</label>
                            <input type="text" class="form-control" name="vehicle_type" placeholder="Enter Vehicle Type" value="{{(isset($Airport_taxidata)?$Airport_taxidata->vehicle_type:old('vehicle_type'))}}" autocomplete="off">
                            @if ($errors->has('vehicle_type'))
                            <div class="text-danger">{{ $errors->first('vehicle_type') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="price_per_km" class="form-label">Price Per KM</label>
                            <input type="number" class="form-control" name="price_per_km" placeholder="Enter Price Per KM" value="{{(isset($Airport_taxidata)?$Airport_taxidata->price_per_km:old('price_per_km'))}}" autocomplete="off">
                            @if ($errors->has('price_per_km'))
                            <div class="text-danger">{{ $errors->first('price_per_km') }}</div>
                            @endif
                        </div>

                        <!-- <div class="col-md-6 mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" placeholder="Enter Location" name="location" value="{{(isset($Car_rentaldata)?$Car_rentaldata->location:old('location'))}}" autocomplete="off">
                            @if ($errors->has('location'))
                            <div class="text-danger">{{ $errors->first('location') }}</div>
                            @endif
                        </div> -->

                        <div class="col-md-6 mb-3">
                            <label for="availability" class="form-label">Availability</label>
                            <select class="form-control" name="availability">
                                <option value="" disabled selected>Select Availability</option>
                                <option value="available" {{ (isset($Airport_taxidata) && $Airport_taxidata->availability == 'available') ? 'selected' : '' }}>Available</option>
                                <option value="booked" {{ (isset($Airport_taxidata) && $Airport_taxidata->availability == 'booked') ? 'selected' : '' }}>Booked</option>
                                <option value="unavailable" {{ (isset($Airport_taxidata) && $Airport_taxidata->availability == 'unavailable') ? 'selected' : '' }}>Unavailable</option>
                            </select>
                            @if ($errors->has('availability'))
                            <div class="text-danger">{{ $errors->first('availability') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ (isset($Airport_taxidata) && $Airport_taxidata->status == 'active') ? 'selected' : (old('status') == 'active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ (isset($Airport_taxidata) && $Airport_taxidata->status == 'inactive') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" placeholder="Enter description" rows="4">{{ isset($Airport_taxidata) ? $Airport_taxidata->description : old('description') }}</textarea>
                            @if ($errors->has('description'))
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Airport_taxidata)? "Update" : "Create")}}</button>
                        <a href="{{ route('airportTaxis.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection