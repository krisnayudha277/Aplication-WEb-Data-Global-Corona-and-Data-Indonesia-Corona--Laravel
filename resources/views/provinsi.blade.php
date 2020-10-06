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


		<h4><strong>Data Provinsi Diperbarui Setiap Hari</strong></h4>

		<table id="datatable" class="table table-bordered table-hover table-striped tblind">
        <thead>
          <tr>
            <th>No</th>
            <th>Provinsi</th>
            <th>Positif</th>
            <th>Dirawat</th>
            <th>Sembuh</th>
            <th>Meninggal</th>
            <th>Laki-laki</th>
            <th>Perempuan</th>
            <th>Positif /hari</th>
            <th>Meninggal /hari</th>
            <th>Sembuh /hari</th>
          </tr>
        </thead>
        <tbody>
          <tr class="odd gradeX">
           @foreach ($data2 as $datas2)   
            <tr>
                        <th scope="row">1</th>
                        <td>{{ $datas2['provinsi'] }}</td>
                        <td>{{ $datas2['kasus'] }}</td>
                        <td>{{ $datas2['dirawat'] }}</td>
                        <td>{{ $datas2['sembuh'] }}</td>
                        <td>{{ $datas2['meninggal'] }}</td>
                        <td>{{ $datas2['jenis_kelamin']['laki-laki'] }}</td>
                        <td>{{ $datas2['jenis_kelamin']['perempuan'] }}</td>
                        <td>{{ $datas2['penambahan']['positif'] }}</td>
                        <td>{{ $datas2['penambahan']['meninggal'] }}</td>
                        <td>{{ $datas2['penambahan']['sembuh'] }}</td>
                      </tr>
                    @endforeach 
          </tr>
        </tbody>
      </table><!--/END SECOND TABLE -->
	
		</div><!--/span12 -->
      </div><!-- /row -->
     </div> <!-- /container -->
    	<br>	

      	
	<!-- FOOTER -->	
@endsection('content')