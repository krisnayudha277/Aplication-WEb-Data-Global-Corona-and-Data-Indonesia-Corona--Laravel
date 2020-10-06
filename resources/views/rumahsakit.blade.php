@extends('master')
@section('content')

    <div class="container">

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12"><!-- 
			<h4><strong>Basic Table</strong></h4> -->
			 <!--  <table class="display">
	          <thead>
	            <tr>
	              <th>Band or Group</th>
	              <th>Name</th>
	              <th>Instrument</th>
	              <th>Influence</th>
	              <th>Awesome</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr class="odd">
	              <td>Queen</td>
	              <td>Brian May</td>
	              <td>Guitar</td>
	              <td class="center"> 7</td>
	              <td class="center">9</td>
	            </tr>
	            <tr class="even">
	              <td>Queen</td>
	              <td>Roger Taylor</td>
	              <td>Drums</td>
	              <td class="center">5</td>
	              <td class="center">7</td>
	            </tr>
	            <tr class="odd">
	              <td>Beatles</td>
	              <td>Paul McCartney</td>
	              <td>Guitar &amp; Piano</td>
	              <td class="center">8</td>
	              <td class="center">9</td>
	            </tr>
	            <tr class="even">
	              <td>Adele</td>
	              <td>Adele</td>
	              <td>None</td>
	              <td class="center">8</td>
	              <td class="center">8</td>
	            </tr>
	            <tr class="odd">
	              <td>Britney Spears</td>
	              <td>Britney Spears</td>
	              <td>None</td>
	              <td class="center">7</td>
	              <td class="center">-5</td>
	            </tr>
	          </tbody>
	         </table> --><!--/END First Table -->
<!-- 			 <br> -->
			 <!--SECOND Table -->


		<h4><strong>Data Provinsi</strong></h4>

		<table id="datatable" class="table table-bordered table-hover table-striped tblind">
        <thead>
          <tr>
                        <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Region</th>
            <th>Phone</th>
            <th>State</th>
          </tr>
        </thead>
        <tbody>
          <tr class="odd gradeX">
           @foreach ($data4 as $datas4)   
                      <tr>
                        <th scope="row">1</th>
                        <td>{{ $datas4['name'] }}</td>
                        <td>{{ $datas4['address'] }}</td>
                        <td>{{ $datas4['region'] }}</td>
                        <td>{{ $datas4['phone'] }}</td>
                        <td>{{ $datas4['province'] }}</td>
                      </tr>
                    @endforeach 
          </tr>
        </tbody>
      </table><!--/END SECOND TABLE -->
	
		</div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	<br>	

      	
	@endsection('content')