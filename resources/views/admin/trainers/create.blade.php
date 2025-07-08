@extends('layouts.admin.app')
@section('title', $page_title)
@section('content')
<section class="content-header">
	<div class="content-header-left">
		<h1>{{$page_title}}</h1>
	</div>
	<div class="content-header-right">
		<a href="{{ route('trainer.index') }}" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('trainer.store') }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				<div class="box box-info">
					<div class="box-body">
						
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Trainer Type<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="trainer_type" value="{{ old('trainer_type') }}" placeholder="Enter trainer type">
								<span style="color: red">{{ $errors->first('trainer_type') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Name">
								<span style="color: red">{{ $errors->first('name') }}</span>
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Description<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<textarea name="description" class="form-control" placeholder="Enter description">{{ old('description') }}</textarea>
								<span style="color: red">{{ $errors->first('description') }}</span>
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Price<span style="color: red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="price" value="{{ old('price') }}" placeholder="Enter price">
								<span style="color: red">{{ $errors->first('price') }}</span>
							</div>
						</div>
                       {{--  <div class="form-group">
							<label for="" class="col-sm-2 control-label">Facebook Link</label>
							<div class="col-sm-9">
								<input type="text"  autocomplete="off" class="form-control" name="facebook" value="{{ old('facebook') }}" placeholder="Enter facebook">
								<span style="color: red">{{ $errors->first('facebook') }}</span>
							</div>
						</div> --}}
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Twitter Link</label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="twitter" value="{{ old('twitter') }}" placeholder="Enter twitter">
								<span style="color: red">{{ $errors->first('twitter') }}</span>
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Instagram Link</label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="instagram" value="{{ old('instagram') }}" placeholder="Enter instagram">
								<span style="color: red">{{ $errors->first('instagram') }}</span>
							</div>
						</div>
						{{-- <div class="form-group">
							<label for="" class="col-sm-2 control-label">Linkedin Link</label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="linkedin" value="{{ old('linkedin') }}" placeholder="Enter linkedin">
								<span style="color: red">{{ $errors->first('linkedin') }}</span>
							</div>
						</div>
                        <div class="form-group">
							<label for="" class="col-sm-2 control-label">Youtube Link</label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="youtube" value="{{ old('youtube') }}" placeholder="Enter youtube">
								<span style="color: red">{{ $errors->first('youtube') }}</span>
							</div>
						</div> --}}
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Image <span style="color: red">*</span></label>
                            <div class="col-sm-6" style="padding-top:5px">
                                <input type="file" class="form-control" accept="image*"  name="image" id="image">
                                <span style="color: red">{{ $errors->first('image') }}</span>
                            </div>
                            <div class="col-sm-4" >
                                <img style="width: 80px" id="banner_preview"  src="{{asset('/admin/assets/images/default.jpg') }}"  alt="Image Not Found ">
                            </div>
                        </div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-9">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
@endsection

@push('js')
<script>
	$(document).ready(function() {
		if ($(".texteditor").length > 0) {
			tinymce.init({
				selector: "textarea.texteditor",
				theme: "modern",
				height: 150,
				plugins: [
					"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
					"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
					"save table contextmenu directionality emoticons template paste textcolor"
				],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

			});
		}
        image.onchange = evt => {
			const [file] = image.files
			if (file) {
				banner_preview.src = URL.createObjectURL(file)
			}
		}

	});
</script>
@endpush
