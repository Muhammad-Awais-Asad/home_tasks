@extends('layouts.app')
@section('content')
<br><br><br><br>
<div class="container">
	<br>
	<div class="row">
		<div class="col-md-10 offset-1">
			<div class="card">
				<div class="card-header h4">Edit your profile:</div>
					<div class="card-body" style="background: lightgrey;">
						<form action="/tasker/{{$users->id}}" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
							{{ csrf_field() }}

							<input type="hidden" name="id" method="PUT" value="{{$users->id}}">

							<p>Change a clear, professional photo of only yourself to increase your likelihood.</p>
							<div class="row">
								<div class="col-md-4 offset-4">
								<br>
									<div class="form-group">
										<img src="/storage/cover_images/{{$users->user_photo}}" alt="avatar" style="vertical-align: middle; width: 100px; height: 100px; border-radius: 50%;">
										<br><br>
										<input required type="file" class="form-control-file" name="image">
		  							</div>
		  							<br>
		  							<br>  							
								</div>
							</div>

							<div class="col-md-6">
                                <h5>Home Address</h5>
                                <br>
                                <div style="margin-left: 10px;">
                                    
                                    <div class="form-group">
                                        <label >Street Address:</label>
                                        <input type="text" name="street" class="form-control" id="street" value="{{$users->user_street}}" >
                                        <p><small id="a" class="text-danger"></small></p>
                                    </div>

                                    <div class="form-group">
                                        <label >Tehseel:</label>
                                        <input type="text" id="tehseel" name="tehseel" class="form-control" value="{{$users->user_tehseel}}" >
                                        <p><small id="b" class="text-danger"></small></p>
                                    </div>

                                    <div class="form-group">
                                        <label >City:</label>
                                        <input type="text" id="city" class="form-control" name="city" value="{{$users->user_city}}" >
                                        <p><small id="c" class="text-danger"></small></p>
                                    </div>

                                    <div class="form-group">
                                        <label >District:</label>
                                        <input type="text" id="district" class="form-control" name="district" value="{{$users->user_district}}" >
                                        <p><small id="d" class="text-danger"></small></p>
                                    </div>

                                    <div class="form-group">
                                        <label >Zip Code:</label>
                                        <input type="number" id="zipcode" class="form-control" name="zipcode" value="{{$users->user_zipcode}}">
                                        <p><small id="e" class="text-danger"></small></p>
                                    </div>

                                    <div class="form-group">
                                        <label >Phone #:</label>
                                        <input type="number" id="pnumber" class="form-control" name="pnumber" value="{{$users->user_phno}}">
                                        <p><small id="f" class="text-danger"></small></p>
                                    </div>
                                </div>

                                <br><br>
                                <h5>Birthdate</h5>

                                <select class="dropdown-item col-md-4" style="background: white;" aria-label="Day" name="birth_day" id="day" title="Day" value="{{$users->user_date}}">{{$users->user_date}} ><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12" selected="1">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                                <br>
                                <select class="dropdown-item col-md-4" style="background: white;" aria-label="Month" name="birth_month" id="month" title="Month" value="{{$users->user_month}}">{{$users->user_month}}> <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5" selected="1">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sept</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
                                <br>
                                <select class="dropdown-item col-md-4" style="background: white;" aria-label="Year" name="birth_year" value="{{$users->user_year}}">{{$users->user_year}} id="year" title="Year" ><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993" selected="1">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option></select>
                                <br><br>
                                <h4>Phone Type</h4>
                                <select class="dropdown-item col-md-4" value="{{$users->user_phonetp}}" style="background: white;" name="phonetype" ><option value="Android">Android</option><option value="Iphone">Iphone</option></select>
                            </div>
                            <br>
                            <p>Do you have access to a vehicle that you can reliably use for tasks?</p>
                            <br>
                            <?php $size = preg_split ("/\,/", $users->user_vehicle);
                                if(sizeof($size) == 1){
                                    $a0 = $size[0];
                                    $a1 = null;
                                    $a2 = null;
                                    $a3 = null;
                                    $a4 = null;
                                    $a5 = null;
                                }else if(sizeof($size) == 2){
                                    $a0 = $size[0];
                                    $a1 = $size[1];
                                    $a2 = null;
                                    $a3 = null;
                                    $a4 = null;
                                    $a5 = null;
                                }else if(sizeof($size) == 3){
                                    $a0 = $size[0];
                                    $a1 = $size[1];
                                    $a2 = $size[2];
                                    $a3 = null;
                                    $a4 = null;
                                    $a5 = null;
                                }else if(sizeof($size) == 4){
                                    $a0 = $size[0];
                                    $a1 = $size[1];
                                    $a2 = $size[2];
                                    $a3 = $size[3];
                                    $a4 = null;
                                    $a5 = null;
                                }else if(sizeof($size) == 5){
                                    $a0 = $size[0];
                                    $a1 = $size[1];
                                    $a2 = $size[2];
                                    $a3 = $size[3];
                                    $a4 = $size[4];
                                    $a5 = null;
                                }
                                else if(sizeof($size) == 6){
                                    $a0 = $size[0];
                                    $a1 = $size[1];
                                    $a2 = $size[2];
                                    $a3 = $size[3];
                                    $a4 = $size[4];
                                    $a5 = $size[5];
                                }else{

                                }
                            ?>
                            <div class="col-md-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" name="vehicle[]" id="cb1" aria-label="Checkbox for following text input" onclick="hide()" value="Bicycle" <?php if ($a0 != null): ?>
                                                checked
                                            <?php endif ?>>
                                        </div>
                                    </div>
                                <span style="margin-left: 10px;">Bicycle</span>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" id="cb2" name="vehicle[]" aria-label="Checkbox for following text input" onclick="hide()" value="Moving Truck" <?php if ($a1 != null): ?>
                                                checked
                                            <?php endif ?>>
                                        </div>
                                    </div>
                                <span style="margin-left: 10px;">Moving Truck</span>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" id="cb3" name="vehicle[]" aria-label="Checkbox for following text input" onclick="hide()" value="Pickup Truck" <?php if ($a2 != null): ?>
                                                checked
                                            <?php endif ?>>
                                        </div>
                                    </div>
                                <span style="margin-left: 10px;">Pickup Truck</span>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" id="cb4" name="vehicle[]" aria-label="Checkbox for following text input" onclick="hide()" value="Car" <?php if ($a3 != null): ?>
                                                checked
                                            <?php endif ?>>
                                        </div>
                                    </div>
                                <span style="margin-left: 10px;">Car</span>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" id="cb5" name="vehicle[]" aria-label="Checkbox for following text input" onclick="hide()" value="Mini Van" <?php if ($a4 != null): ?>
                                                checked
                                            <?php endif ?>>
                                        </div>
                                    </div>
                                <span style="margin-left: 10px;">Mini Van</span>
                                </div>
                                
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" id="cb6" name="vehicle[]" aria-label="Checkbox for following text input" onclick="hide()" value="Full-Size Van" <?php if ($a5 != null): ?>
                                                checked
                                            <?php endif ?>>
                                        </div>
                                    </div>
                                <span style="margin-left: 10px;">Full-Size Van</span>
                                </div>
                                <p><small id="abc" class="text-danger "></small></p>
                            </div>
                            <br>
							<button class="btn btn-success btn-lg float-right" style="color: white;" onclick="return validate()">Continue</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
        function validate(){

            if(document.getElementById('street').value == ""){
                document.getElementById('a').innerHTML = 'Please fill the Street Address field.';
                return false;
            }
            else if(document.getElementById('tehseel').value == ""){
                document.getElementById('b').innerHTML = 'Please fill the Tehseel field.';
                return false;
            }
            else if(document.getElementById('city').value == ""){
                document.getElementById('c').innerHTML = 'Please fill the City field.';
                return false;
            }
            else if(document.getElementById('district').value == ""){
                document.getElementById('d').innerHTML = 'Please fill the district field.';
                return false;
            }
            else if(document.getElementById('zipcode').value == ""){
                document.getElementById('e').innerHTML = 'Please fill the zipcode field.';
                return false;
            }
            else if(document.getElementById('pnumber').value == ""){
                document.getElementById('f').innerHTML = 'Please fill the zipcode field.';
                return false;
            }
            else if(document.getElementById('pnumber').value <= 923000000000 || document.getElementById('pnumber').value >= 923499999999){
                document.getElementById('f').innerHTML = 'Invalid phone number.';
                return false;
            }
            else if(!document.getElementById('cb1').checked && !document.getElementById('cb2').checked && !document.getElementById('cb3').checked && !document.getElementById('cb4').checked && !document.getElementById('cb5').checked && !document.getElementById('cb6').checked ){
                document.getElementById('abc').innerHTML = "Please check any of above checkboxes.";
                return false;
            }
            else{
                return true;
            }
        }
        function hide(){
            document.getElementById('abc').innerHTML = "";
        }
    </script>
</div>
@endsection