@extends('admin.layout.main')

@section('manage_content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please fix the following errors:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="col-12">
                <h2>Manage About</h2><br>
                <form action="{{ route('manage_about.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="Manage_abouts_id" value="{{(isset($Manage_about)?$Manage_about->id:'')}}">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="mission_statement" class="form-label">Mission Statement</label>
                            <input type="text" class="form-control" name="mission_statement" placeholder="Enter Mission Statement" value="{{(isset($Manage_about)?$Manage_about->mission_statement:old('mission_statement'))}}" autocomplete="off">
                            @if ($errors->has('mission_statement'))
                            <div class="text-danger">{{ $errors->first('mission_statement') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="contact_email" class="form-label">Contact Email</label>
                            <input type="email" class="form-control" name="contact_email" placeholder="Enter Site Email" value="{{(isset($Manage_about)?$Manage_about->contact_email:old('contact_email'))}}" autocomplete="off">
                            @if ($errors->has('contact_email'))
                            <div class="text-danger">{{ $errors->first('contact_email') }}</div>
                            @endif
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="contect_phone" class="form-label">Contac Phone Number</label>
                            <input type="number" class="form-control" name="contect_phone" placeholder="Enter Phone Number" value="{{(isset($Manage_about)?$Manage_about->contect_phone:old('contect_phone'))}}" autocomplete="off">
                            @if ($errors->has('contect_phone'))
                            <div class="text-danger">{{ $errors->first('contect_phone') }}</div>
                            @endif
                        </div>

                        <div class="col-md-12 mb-3">
                            <label for="site_description" class="form-label">Other Details</label>
                            <textarea name="other_details" placeholder="Enter Other Details" id="site_description" class="form-control">{{(isset($Manage_about)?$Manage_about->other_details:old('other_details'))}}</textarea>
                        </div>
                    </div>

            </div>
            <br><br>
            <div class="text-center">
                <button type="submit" class="btn btn-danger"> Update About</button>
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Back Dashboard</a>
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
    CKEDITOR.replace('site_description');
</script>
@endsection