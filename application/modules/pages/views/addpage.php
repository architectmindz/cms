<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-edit"></i> Manage Pages</h1>
			<p>Add, Edit and Delete Pages</p>
		</div>

		<ul class="app-breadcrumb breadcrumb side">
			<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
			<li class="breadcrumb-item">Pages</li>
			<li class="breadcrumb-item active"><a href="#">Add CMS Page</a></li>
		</ul>
  	</div>
	<div class="row">
		<div class="col-md-8 offset-sm-2">
			<h3 class="tile-title">Create Page</h3>
			<?php if($this->session->flashdata('pageerror')){ ?>
				<div class="alert alert-danger alert-dismissible">
					<strong>Error! </strong><?php echo $this->session->flashdata('pageerror'); ?>
				</div>
			<?php } ?>
			<form name="addpage" method="post" action="<?php echo base_url('pages/index/create'); ?>">
				<div class="tile">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label for="exampleInput1">Page Title</label>
								<input class="form-control" id="exampleInput1" type="text" placeholder="Enter Page Title" name="page_title" required="required">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label for="exampleInput1">Meta Tags</label>
								<textarea class="form-control" name="meta_tags" id="exampleInput1"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label for="exampleInput1">Meta Keywords</label>
								<textarea class="form-control" name="meta_keywords" id="exampleInput1"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label for="exampleInput1">Meta Description</label>
								<textarea class="form-control" name="meta_description" id="exampleInput1"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label for="exampleInput1">Page Content</label>
								<textarea name="content" id="content" rows="10" cols="80"></textarea>
							</div>
						</div>
					</div>
					<div class="tile-footer">
						<button class="btn btn-primary" type="submit">Publish</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</main>
