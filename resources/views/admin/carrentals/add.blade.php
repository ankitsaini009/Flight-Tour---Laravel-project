@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Car Rental</h2><br>
                <form action="{{ route('carrentals.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="carrentals_id" value="{{(isset($Car_rentaldata)?$Car_rentaldata->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="car_type" class="form-label">Car Type</label>
                            <input type="text" class="form-control" name="car_type" placeholder="Enter Hotel Name" value="{{(isset($Car_rentaldata)?$Car_rentaldata->car_type:old('car_type'))}}" autocomplete="off">
                            @if ($errors->has('car_type'))
                            <div class="text-danger">{{ $errors->first('car_type') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="price_per_day" class="form-label">Price Per Day</label>
                            <input type="number" class="form-control" name="price_per_day" placeholder="Enter Price Per Day" value="{{(isset($Car_rentaldata)?$Car_rentaldata->price_per_day:old('price_per_day'))}}" autocomplete="off">
                            @if ($errors->has('price_per_day'))
                            <div class="text-danger">{{ $errors->first('price_per_day') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" name="location" value="{{(isset($Car_rentaldata)?$Car_rentaldata->location:old('location'))}}" autocomplete="off">
                            @if ($errors->has('location'))
                            <div class="text-danger">{{ $errors->first('location') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="rating" class="form-label">Availability</label>
                            <input type="text" class="form-control" name="availability" placeholder="Enter Availability " value="{{(isset($Car_rentaldata)?$Car_rentaldata->availability:old('availability'))}}" autocomplete="off">
                            @if ($errors->has('availability'))
                            <div class="text-danger">{{ $errors->first('availability') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Image</label>
                            @if(isset($Car_rentaldata) && $Car_rentaldata->image_url)
                            <div class="mb-2">
                                <img src="{{ asset('images/' . $Car_rentaldata->image_url) }}" alt="User Image" class="img-thumbnail" width="100">
                            </div>
                            <input type="hidden" value="{{(isset($Car_rentaldata)?$Car_rentaldata->image_url:old('image'))}}" class="form-control" name="image" autocomplete="off">
                            @endif
                            <input type="file" class="form-control" name="image" autocomplete="off">
                            @if ($errors->has('Car_rentaldata'))
                            <div class="text-danger">{{ $errors->first('Car_rentaldata') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ (isset($Car_rentaldata) && $Car_rentaldata->status == 'active') ? 'selected' : (old('status') == 'active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ (isset($Car_rentaldata) && $Car_rentaldata->status == 'inactive') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Car_rentaldata)? "Update" : "Create")}}</button>
                        <a href="{{ route('carrentals.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection