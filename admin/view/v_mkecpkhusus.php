<style>
	#loadarea{
		height:45px;
	}#pagination{
		color:white;list-style:none;
	}.vwimg{
		height:80px;
		opacity:0.8;
	}.vwimg:hover{
		opacity:1;
	}.error-info{
		/*padding: .2em .6em .3em;*/
		padding: .4em;
		font-size: 75%;
		font-weight: bold;
		line-height: 1;
		color: #ffffff;
		border-radius: .25em;
		background-color:re5;
	}.trtable:hover{
		background-color:#3FC;
	}.upperizer{
		text-transform:uppercase;
	}.capitizer{
		text-transform:capitalize;
	}

</style>
<script src="client/s_mkecpkhusus.js"></script>
<h3><div id="loadarea"><i class="icon-th-list"></i>DAFTAR KECAKAPAN KHUSUS</div></h3>
<ol class="breadcrumb">
  <li> <a href="kategori-kecakapan-khusus">Kategori Kecakapan Khusus</a> /</li>
  <li class="active">Kecakapan Khusus</li>
</ol>


<div>
	<button id="addBC" class="btn btn-primary"><i class='icon-plus-sign'></i> Tambah</button>
	<button style="display:none;" id="viewBC" class="btn btn-primary"><i class='icon-th-list'></i> Lihat Semua</button>
	<!-- <a href="unsur"id="jabBC" class="btn btn-secondary">unsur <i class='icon-arrow-right'> </i></a> -->
</div>

<!--panel 1-->
<div class="span8"id="i_kegPN" style="display:none;"><br>
	<div class="span8">
		<form autocomplete="off" method="post" name="form-daftar" class="form-horizontal" >
		<input type="hidden" id="idformTB" name="idformTB"/>
		
		<div class="control-group">
			<label class="control-label">Kategori Kecakapan khusus</label>
			<div class="controls" >
				<select class="span4" id="id_mkatkecpkhususTB" name="id_mkatkecpkhususTB" required></select>
			</div>
			<span id="subunsurInfo2"></span>
		</div>

		<div class="control-group">
			<label class="control-label">Kecakapan khusus</label>
			<div class="controls" >
				<input class="span5"  name="mkecpkhususTB" id="mkecpkhususTB" required placeholder="kecakapan khusus">
			</div>
			<span id="subunsurInfo2"></span>
		</div>


		<button  id="simpanBC"class="btn btn-primary" >Simpan</button>
		<div >.</div>
		<div >.</div>
		</form>
	</div>
</div>
<divX id="loadtabel"></divX>

<div class="span8"id="v_kegPN"><br>
	<table class="table table-hover table-bordered table-striped" width="100%" border="0">
		<tr>
			<td></td>
			<td><input class="span3" placeholder="pencarian kecakapan khusus .." name="mkecpkhususTS" id="mkecpkhususTS"></td>
			<td><input class="span3" placeholder="pencarian kategori kecakapan khusus .." name="mkatkecpkhususTS" id="mkatkecpkhususTS"></td>
			<td></td>
		</tr>
		<tr class="info">
			<td><b>No.</b></td>
			<td><b>Kec. Khusus</b></td>
			<td><b>Kategori Kec. Khusus</b></td>
			<td colspan="2"><b>Aksi</b>
			</td>
		</tr>

		<tbody id="isi">

		</tbody>
	</table>
	<div>.</div>
	<div>.</div>
	<div>.</div>
	<div class="row" id="isi"></div>
</div>
