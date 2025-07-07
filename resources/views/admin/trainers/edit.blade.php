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
			<form action="{{ route('trainer.update', $trainer->id) }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
				@csrf
				{{ method_field('PATCH') }}
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Trainer Type<span style="color: red">*</span></label>
							<div class="col-sm-9">
							<input type="text" autocomplete="off" class="form-control" name="trainer_type" value="{{ $trainer->trainer_type }}" placeholder="Enter trainer type">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Name <span style="color:red">*</span></label>
							<div class="col-sm-9">
								<input type="text" autocomplete="off" class="form-control" name="name" value="{{$trainer->name}}">
							</div>
						</div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Description<span style="color: red">*</span></label>
							<div class="col-sm-9">
							<textarea name="description" class="form-control" placeholder="Enter description">{{ $trainer->description }}</textarea>
							</div>
						</div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Price<span style="color: red">*</span></label>
							<div class="col-sm-9">
							<input type="text" autocomplete="off" class="form-control" name="price" value="{{ $trainer->price }}" placeholder="Enter price">
							</div>
						</div> 
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Twitter Link</label>
							<div class="col-sm-9">
							<input type="text" autocomplete="off" class="form-control" name="twitter" value="{{ $trainer->twitter }}" placeholder="Enter twitter">
							</div>
						</div>
						<div class="form-group">
                            <label for="" class="col-sm-2 control-label">Instagram Link</label>
							<div class="col-sm-9">
							<input type="text" autocomplete="off" class="form-control" name="instagram" value="{{ $trainer->instagram }}" placeholder="Enter instagram">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Image <span style="color:red">*</span></label>
							<div class="col-sm-6" style="padding-top:5px">
								<input type="file" name="image" accept="image" id="image" class="form-control">
							</div>
							<div class="col-sm-4">
								<img style="width: 80px" id="banner_preview" src="{{ asset('public/admin/assets/images/Trainers') }}/{{ $trainer->image }}" alt="">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Status</label>
							<div class="col-sm-9">
								<select name="status" class="form-control" id="">
									<option value="1" {{ $trainer->status==1?'selected':'' }}>Active</option>
									<option value="0" {{ $trainer->status==0?'selected':'' }}>In-Active</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left">Submit</button>
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
