@extends('layouts.main')

@section('main')
<div class="right_col" role="main">
<div class="clearfix"></div>
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Nuevo Cliente </h2>
					<ul class="nav navbar-right panel_toolbox">
						<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<div class="x_content">
					
					<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{ route('storeCl')}}">

						{{ csrf_field()}}
						
						<div class="row">
							<div class="form-group col-xs-12 col-md-2">
								<label class="control-label">NIT Empresa</label>
								<input type="text"  name="nitClient" required data-parsley-required-message="Este campo es obligatorio" class="form-control">
							</div>
							<div class="form-group col-xs-12 col-md-4">
								<label class="control-label" for="last-name">Nombre</label>
								<input type="text"  name="nameClient" required data-parsley-required-message="Este campo es obligatorio" class="form-control">
							</div>
							<div class="form-group col-xs-12 col-md-6">
								<label class="control-label" for="last-name">Encargad@</label>
								<input type="text"  name="personClient" required data-parsley-required-message="Este campo es obligatorio" class="form-control">
							</div>
							<div class="form-group col-xs-12 col-md-6">
								<label class="control-label" for="last-name">Dirección</label>
								<input type="text"  name="addressClient" required data-parsley-required-message="Este campo es obligatorio" class="form-control">
							</div>
							<div class="form-group col-md-6 col-xs-12">
								<label class="control-label">Tipo Cliente</label>
								<select class="select2_single form-control" tabindex="-1" required data-parsley-required-message="Este campo es obligatorio" name="typeClient">
									<option value="Intervenido">Intervenido</option>
									<option value="Contratante">Contratante</option>
								</select>
							</div>
						</div>
						 
						<div class="row">
							<div class="form-group text-left">
								<small class="col-sm-12 col-lg-12 "><sup>*</sup> Campos obligatorios</small>
							</div>
						</div>	

						<div class="ln_solid"></div>
						<div class="row">
							<div class="form-group col-xs-12 text-center">
							
								<a href="{{route('ListaCl')}}" class="btn btn-primary">Cancelar</a>
								<button type="submit" class="btn btn-success">Guardar</button>
							
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection