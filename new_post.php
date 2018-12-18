<?php

	include "includes/header.php";
	include "includes/checkSession.php";
?>
	<div class="container">
		<div class="row mb-2">
			<div class="col-md-12">
				<form>
					<div class="form-group">
						<label for="exampleFormControlInput1">Title</label>
						<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title of Post">
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Post Content</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Create Post</button>
				</form>
			</div>
		</div>
	</div>
<?php include "includes/footer.php"; ?>