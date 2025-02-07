@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Attractions</h2><br>
                <form action="{{ route('attraction.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="attraction_id" value="{{(isset($Attractiondata)?$Attractiondata->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{(isset($Attractiondata)?$Attractiondata->name:old('name'))}}" autocomplete="off">
                            @if ($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="entry_fee" class="form-label">Entry Fee</label>
                            <input type="number" class="form-control" name="entry_fee" placeholder="Enter Entry Fee" value="{{(isset($Attractiondata)?$Attractiondata->entry_fee:old('entry_fee'))}}" autocomplete="off">
                            @if ($errors->has('entry_fee'))
                            <div class="text-danger">{{ $errors->first('entry_fee') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="opening_hours" class="form-label">Opening Hours</label>
                            <input type="number" class="form-control" name="opening_hours" placeholder="Enter Opening Hours" value="{{(isset($Attractiondata)?$Attractiondata->opening_hours:old('entry_fee'))}}" autocomplete="off">
                            @if ($errors->has('opening_hours'))
                            <div class="text-danger">{{ $errors->first('opening_hours') }}</div>
                            @endif
                        </div>

                        <!-- <div class="col-md-6 mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" placeholder="Enter Location" class="form-control" name="location" value="{{(isset($Attractiondata)?$Attractiondata->location:old('location'))}}" autocomplete="off">
                            @if ($errors->has('location'))
                            <div class="text-danger">{{ $errors->first('location') }}</div>
                            @endif
                        </div> -->

                        <div class="col-md-6 mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <input type="text" placeholder="Enter Rating" class="form-control" name="rating" value="{{(isset($Attractiondata)?$Attractiondata->rating:old('rating'))}}" autocomplete="off">
                            @if ($errors->has('rating'))
                            <div class="text-danger">{{ $errors->first('rating') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="contact_number" class="form-label">Contact number</label>
                            <input type="number" class="form-control" name="contact_number" placeholder="Enter Contact Number" value="{{(isset($Attractiondata)?$Attractiondata->contact_details:old('contact_number'))}}" autocomplete="off">
                            @if ($errors->has('contact_number'))
                            <div class="text-danger">{{ $errors->first('contact_number') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Image</label>
                            @if(isset($Attractiondata) && $Attractiondata->image_url)
                            <div class="mb-2">
                                <img src="{{ asset('images/' . $Attractiondata->image_url) }}" alt="User Image" class="img-thumbnail" width="100">
                            </div>
                            <input type="hidden" value="{{(isset($Attractiondata)?$Attractiondata->image_url:old('image'))}}" class="form-control" name="image" autocomplete="off">
                            @endif
                            <input type="file" class="form-control" name="image" autocomplete="off">
                            @if ($errors->has('Attractiondata'))
                            <div class="text-danger">{{ $errors->first('Attractiondata') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="active" {{ (isset($Attractiondata) && $Attractiondata->status == 'active') ? 'selected' : (old('status') == 'active' ? 'selected' : '') }}>Active</option>
                                <option value="inactive" {{ (isset($Attractiondata) && $Attractiondata->status == 'inactive') ? 'selected' : (old('status') == 'inactive' ? 'selected' : '') }}>Inactive</option>
                            </select>
                            @if ($errors->has('status'))
                            <div class="text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" placeholder="Enter description" rows="4">{{ isset($Attractiondata) ? $Attractiondata->description : old('description') }}</textarea>
                            @if ($errors->has('description'))
                            <div class="text-danger">{{ $errors->first('description') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger">{{(isset($Attractiondata)? "Update" : "Create")}}</button>
                        <a href="{{ route('attraction.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection