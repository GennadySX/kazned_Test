
@section('nav')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
	<ul class="navbar-nav">
		<li class="nav-item active">
			<a class="nav-link" href="#">LaravelX</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Link</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Link</a>
		</li>

	</ul>
</nav>
@endsection



@section('banner')
	@php App\Http\Controllers\kazned::updateBanner($name); @endphp
	
	<div class="jumbotron ">
		<h1>{{ $name }}</h1>
		<p>Bootstrap is the most popular HTML, CSS, and JS framework for developing
		responsive, mobile-first projects on the <a href="/test">web.</a></p>
	</div>




@endsection



	@section('form')
	<div class="container">
		<div class="row">
			<form id="send">
				<div class="col-auto">
					<label for="inputAddress">Email:</label>
					<div class="input-group mb-2">
						<div class="input-group-prepend">
							<div class="input-group-text">@</div>
						</div>
						<input type="text" class="form-control" id="inputAddress" value="root@kazned.ru">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="dateFrom">дата с:</label>
							<input type="date" class="form-control" name="dateFrom" id="dateFrom" value="<?= date_format(date_date_set(date_create(),2019,3,3),'Y-m-d')?>" >
						</div>
						<div class="form-group col-md-6">
							<label for="dateUntil">дата до:</label>
							<input type="date" class="form-control" id="dateUntil" value="<?= date_create()->format('Y-m-d');?>">
						</div>
					</div>
				</div>


				<button type="submit" class="btn btn-primary">Get it</button>
			</form>
		</div>
	</div><br>

	@endsection