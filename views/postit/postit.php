<style>
.btn {

padding-right: 40px; 
padding-left: 40px;
margin-left: 10px;
}

</style>

<div class="row">
	<div class="col-lg-6">

		<button type="button" class="btn btn-primary ">Tlačiť</button>
		<button type="button" class="btn btn-primary ">Info</button>

	</div>
	<div class="col-lg-6">

		<button type="button" class="btn btn-primary pull-right">Uložiť</button>
		<button type="button" class="btn btn-primary pull-right">Zrušiť</button>
		<button type="button" class="btn btn-success pull-right">Užívateľ</button>	

	</div>
</div>


<div class="row" style="margin-top:20px;">
	
	<div class="col-md-1">
		<p>N°POSTIT</p>
		<p>N°POSTIT</p>
	</div>
	
	<div class="col-md-1">
		<p>RFS:</p>
		<p>RFS:</p>
	</div>

	<div class="col-md-3">
		<p>Popis RFS:</p>
		<p>Popis RFS:</p>
	</div>

	<div class="col-md-1">
		<p>Nature:</p>
		<p>Nature:</p>
	</div>

	<div class="col-md-4">
		<p>Popis Nature:</p>
		<p>Popis Nature:</p>
	</div>

	<div class="col-md-1">
		<p>VIS:</p>
		<p>VIS:</p>
	</div>
	
	<div class="col-md-1">
		<p>Miesto det:</p>
		<p>Miesto det:</p>
	</div>
</div>




<div class="row" style="padding-top:20px;">

	<div class="col-md-4">
		<img src="pic_mountain.jpg" alt="View" style="width:370px;height:250px;">
	</div>

	<div>

	<!--	<div class="btn-group" style="padding-right:15px; padding-left:40px;">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		    UR<span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
		    <li><a href="#">Action</a></li>
		    <li><a href="#">Another action</a></li>
		    <li><a href="#">Something else here</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Separated link</a></li>
		  </ul>
		</div>

		<div class="btn-group" style="padding-right:15px; padding-left:15px;">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		    UEP<span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
		    <li><a href="#">Action</a></li>
		    <li><a href="#">Another action</a></li>
		    <li><a href="#">Something else here</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Separated link</a></li>
		  </ul>
		</div>

		<div class="btn-group" style="padding-right:15px; padding-left:15px;">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		    Zmena<span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
		    <li><a href="#">Action</a></li>
		    <li><a href="#">Another action</a></li>
		    <li><a href="#">Something else here</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Separated link</a></li>
		  </ul>
		</div>

		<div class="btn-group" style="padding-right:15px; padding-left:15px;">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		   Modul<span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
		    <li><a href="#">Action</a></li>
		    <li><a href="#">Another action</a></li>
		    <li><a href="#">Something else here</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Separated link</a></li>
		  </ul>
		</div>

		<div class="btn-group" style="padding-right:15px; padding-left:15px;">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		   Post<span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
		    <li><a href="#">Action</a></li>
		    <li><a href="#">Another action</a></li>
		    <li><a href="#">Something else here</a></li>
		    <li class="divider"></li>
		    <li><a href="#">Separated link</a></li>
		  </ul>
		</div>  -->
			<div class="col-md-1">
					  	<select class="form-control" id="sel2">
			    			<option>UP:</option>
			    			<option>1</option>
			    			<option>2</option>
			    			<option>3</option>
			    			<option>4</option>
			  			</select>
			</div>	

			<div class="col-md-1">
				 <p> 	<select class="form-control" id="sel2">
			    			<option>UEP:</option>
			    			<option>2</option>
			    			<option>3</option>
			    			<option>4</option>
			  			</select>
			  	 </p>
			</div>	

			<div class="col-md-2">
				 <p> 	<select class="form-control" id="sel2">
			    			<option>Zmena</option>
			    			<option>2</option>
			    			<option>3</option>
			    			<option>4</option>
			  			</select>
			  	 </p>
			</div>	

			<div class="col-md-2">
				 <p> 	<select class="form-control" id="sel2">
			    			<option>Modul</option>
			    			<option>2</option>
			    			<option>3</option>
			    			<option>4</option>
			  			</select>
			  	 </p>
			</div>	

			<div class="col-md-2">
				 <p> 	<select class="form-control" id="sel2">
			    			<option>Post</option>
			    			<option>2</option>
			    			<option>3</option>
			    			<option>4</option>
			  			</select>
			  	 </p>
			</div>	
	</div>

	<div class="col-md-5" style="margin-top:40px;">
		<div>
			<p ><input type="text" style="text-align: left;" placeholder="Zmena A" class="form-control" id="usr"></p>
			<p ><input type="text" style="text-align: left;" placeholder="Zmena B" class="form-control" id="usr"></p>
			<p ><input type="text" style="text-align: left;" placeholder="Zmena C" class="form-control" id="usr"></p>
		</div>
	</div>

	<div class="col-md-3" style="padding-top:10px;">
		<div>
					<p>Garantované vozidlo:</p>
					<p>Garantované vozidlo:</p>
		</div>

		<div>
					<p>Garantované dátum:</p>
					<p>Garantované dátum:</p>
		</div>

					<!--		<div class="btn-group">
							<p> <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							   Analýza<span class="caret"></span>
							  </button></p>
							  <ul class="dropdown-menu" role="menu">
							    <li><a href="#">Action</a></li>
							    <li><a href="#">Another action</a></li>
							    <li><a href="#">Something else here</a></li>
							    <li class="divider"></li>
							    <li><a href="#">Separated link</a></li>
							  </ul>
							</div>   -->
						
			<div class="col-md-3">
				<p style="padding-top:5px">Analýza:</p>
			</div>	

			<div class="col-md-8">
			 <p> 	<select class="form-control" id="sel2">
			    	<option>1</option>
			    	<option>2</option>
			    	<option>3</option>
			    	<option>4</option>
			  </select>	 </p>
			</div>	


						<!--	<div class="btn-group">
							 <p> <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
							   Pričina<span class="caret"></span>
							  </button></p>
							  <ul class="dropdown-menu" role="menu">
							    <li><a href="#">Action</a></li>
							    <li><a href="#">Another action</a></li>
							    <li><a href="#">Something else here</a></li>
							    <li class="divider"></li>
							    <li><a href="#">Separated link</a></li>
							  </ul>
							</div>   -->

			<div class="col-md-3">
				<p style="padding-top:5px">Príčina:</p>
			</div>	

			<div class="col-md-8">
			  <p>	<select class="form-control" id="sel2">
			    	<option>1</option>
			    	<option>2</option>
			    	<option>3</option>
			    	<option>4</option>
			  </select>	</p>
			</div>	


	</div>

</div>

<div class="row">
	<div class="col-md-12" style="margin-top:20px; padding-top:10px;">
		<p><input type="text" style="text-align: left;" placeholder="" class="form-control" id="usr"></p>
		<p><input type="text" style="text-align: left;" placeholder="" class="form-control" id="usr"></p>
		<p><input type="text" style="text-align: left;" placeholder="" class="form-control" id="usr"></p>
		<p><input type="text" style="text-align: left;" placeholder="" class="form-control" id="usr"></p>
		<p><input type="text" style="text-align: left;" placeholder="" class="form-control" id="usr"></p>
	</div>
</div>