@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Hotel Booking</h2><br>
                <form action="{{ route('hotel.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="hotel_id" value="{{(isset($Hotel_bookingdata)?$Hotel_bookingdata->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="hotel_name" class="form-label">Hotel Name</label>
                            <input type="text" class="form-control" name="hotel_name" placeholder="Enter Hotel Name" value="{{(isset($Hotel_bookingdata)?$Hotel_bookingdata->hotel_name:old('hotel_name'))}}" autocomplete="off">
                            @if ($errors->has('hotel_name'))
                            <div class="text-danger">{{ $errors->first('hote    l_name') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="price_per_night" class="form-label">Price Per Night</label>
                            <input type="number" class="form-control" name="price_per_night" placeholder="Enter Price Per Night" value="{{(isset($Hotel_bookingdata)?$Hotel_bookingdata->price_per_night:old('departure_time'))}}" autocomplete="off">
                            @if ($errors->has('price_per_night'))
                            <div class="text-danger">{{ $errors->first('price_per_night') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control" name="location" value="{{(isset($Hotel_bookingdata)?$Hotel_bookingdata->location:old('location'))}}" autocomplete="off">
                            @if ($errors->has('location'))
                            <div class="text-danger">{{ $errors->first('location') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea class="form-control" name="address" placeholder="Enter Address" rows="3" autocomplete="off">{{ isset($Hotel_bookingdata) ? $Hotel_bookingdata->address : old('address') }}</textarea>
                            @if ($errors->has('address'))
                            <div class="text-danger">{{ $errors->first('address') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" placeholder="Enter Description" rows="3" autocomplete="off">{{ isset($Hotel_bookingdata) ? $Hotel_bookingdata->description : old('description') }}</textarea>
                            @if ($errors->has('description'))
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <input type="text" class="form-control" name="rating" placeholder="Enter Rating " value="{{(isset($Hotel_bookingdata)?$Hotel_bookingdata->rating:old('rating'))}}" autocomplete="off">
                            @if ($errors->has('rating'))
                            <div class="text-danger">{{ $errors->first('rating') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="rating" class="form-label">Amenities</label>
                            <input type="text" class="form-control" name="amenities" placeholder="Enter Rating " value="{{(isset($Hotel_bookingdata)?$Hotel_bookingdata->amenities:old('amenities'))}}" autocomplete="off">
                            @if ($errors->has('amenities'))
                            <div class="text-danger">{{ $errors->first('amenities') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Image</label>
                            @if(isset($Hotel_bookingdata) && $Hotel_bookingdata->image_url)
                            <div class="mb-2">
                                <img src="{{ asset('images/' . $Hotel_bookingdata->image_url) }}" alt="User Image" class="img-thumbnail" width="100">
                            </div>
                            <input type="hidden" value="{{(isset($Hotel_bookingdata)?$Hotel_bookingdata->image_url:old('image'))}}" class="form-control" name="image" autocomplete="off">
                            @endif
                            <input type="file" class="form-control" name="image" autocomplete="off">
                            @if ($errors->has('Hotel_bookingdata'))
                            <div class="text-danger">{{ $errors->first('Hotel_bookingdata') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ (isset($Hotel_bookingdata) && $Hotel_bookingdata->status == 'active') ? 'selected' : (old('status') == 'active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ (isset($Hotel_bookingdata) && $Hotel_bookingdata->status == 'inactive') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Hotel_bookingdata)? "Update" : "Create")}}</button>
                        <a href="{{ route('hotel.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection