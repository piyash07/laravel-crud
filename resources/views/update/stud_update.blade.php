	@extends('main_layout')
	@section('content')

		<!-- ABOUT -->
	<section id="about">
	<div class="container">
	<div class="row">

	<div class="col-md-6 col-sm-12">
	<div class="about-info">
	<h2>Start your journey to a better life with online practical courses</h2>


<div class="col-md-offset-1 col-md-4 col-sm-12">
<div class="entry-form">
<form action="/edit/<?php echo $users[0]->id; ?> " method="post">
	@csrf
	<h2>Signup today</h2>
	<input type="text" name="name" class="form-control" placeholder="name" required=""  value = '<?php echo$users[0]->name; ?>' />

	<input type="email" name="email" class="form-control" placeholder="Your email address" required="" value = '<?php echo$users[0]->email; ?>' />
 
    <tr>
    <td><b>City Name</b></td>
    <td><select name="city_name" value = '<?php echo$users[0]->city_name; ?>' />
	<option value="dhanmondi">Dhanmondi</option>
	<option value="savar">Savar</option>
	<option value="kolabagan">Kolabagan</option>
	</select></td>
    </tr>
  	<input type="password" name="password" class="form-control" placeholder="Your password" required=""  value = '<?php echo$users[0]->password; ?>'>

	<button class="submit-btn form-control" id="form-submit">Update student</button>
	</form>
	</div>
	</div>

	</div>
	</div>
	</section>

	@endsection