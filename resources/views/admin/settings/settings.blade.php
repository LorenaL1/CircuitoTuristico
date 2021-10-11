@extends('admin.master')

@section('title', 'Configuraciones')
@section('breadcrumb')
<li class="breadcrumb-item">
	<a href="{{ url('/admin/settings') }}"><i class="fas fa-cogs"></i>   Configuraciones</a>
</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="panel shadow">
		<div class="header">
			<h2 class="title"><i class="fas fa-cogs"></i>   Configuraciones</h2>
		</div>

		<div class="inside">
			{!! Form::open(['url' => '/admin/settings']) !!}
			<div class="row">
				<div class="col-md-4">
            		<label for="name">Nombre de la tienda:</label>
            		<div class="input-group">
            			
            			<span class="input-group-text" id="basic-addon1"><i class="fas fa-store"></i>
            			</span>

            		 {!! Form::text('name', Config::get('muebleria.name'), ['class' => 'form-control']) !!}
            		 
            	   </div>
            	</div>

            	<div class="col-md-4">
            		<label for="currency">Moneda:</label>
            		<div class="input-group">
            			
            			<span class="input-group-text" id="basic-addon1"><i class="fas fa-coins"></i>
            			</span>

            		 {!! Form::text('currency', Config::get('muebleria.currency'), ['class' => 'form-control']) !!}
            		 
            	   </div>
            	</div>

            	<div class="col-md-4">
            		<label for="company_phone">Teléfono:</label>
            		<div class="input-group">
            			
            			<span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i>
            			</span>

            		 {!! Form::number('company_phone', Config::get('muebleria.company_phone'), ['class' => 'form-control']) !!}
            		 
            	   </div>
            	</div>

			</div>

			<div class="row mtop16">
				<div class="col-md-4">
            		<label for="map">Ubicaciones:</label>
            		<div class="input-group">
            			
            			<span class="input-group-text" id="basic-addon1"><i class="fas fa-coins"></i>
            			</span>

            		 {!! Form::text('map', Config::get('muebleria.map'), ['class' => 'form-control']) !!}
            		 
            	   </div>
            	</div>

            	<div class="col-md-3">
            		<label for="maintenance_mode">Modo mantenimiento</label>
            		<div class="input-group">    			
            			<span class="input-group-text" id="basic-addon1"><i class="fas fa-hammer"></i>
            			</span>
            		 {!! Form::select('maintenance_mode', ['0' => 'Desactivado', '1' => 'Activo'], Config::get('muebleria.maintenance_mode'), ['class' =>'form-select']) !!}
            	   </div>
            	</div>

			</div>


            <hr>
			<div class="row">
				<div class="col-md-4">
            		<label for="products_per_page">Productos para mostrar por pagina:</label>
            		<div class="input-group">
            			
            			<span class="input-group-text" id="basic-addon1"><i class="fas fa-door-open"></i>
            			</span>

            		 {!! Form::number('products_per_page', Config::get('muebleria.products_per_page'), ['class' => 'form-control', 'min' =>1, 'required']) !!}
            		 
            	   </div>
            	</div>

                        <div class="col-md-4">
                              <label for="products_per_page_random">Productos para mostrar por pagina (Random):</label>
                              <div class="input-group">
                                    
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-door-open"></i>
                                    </span>

                               {!! Form::number('products_per_page_random', Config::get('muebleria.products_per_page_random'), ['class' => 'form-control', 'min' =>1, 'required']) !!}
                               
                           </div>
                        </div>
			</div>

                  <hr>

                  <div class="row mtop16">
                        <div class="col-md-4">
                              <label for="products_per_page">Configuración de precio de envió:</label>
                              <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-door-open"></i>
                                    </span>
                                    {!! Form::select('shipping_method', getShippingMethod(), Config::get('muebleria.shipping_method'), ['class' => 'form-control']) !!}
                              </div> 
                        </div>

                        <div class="col-md-4">
                              <label for="products_per_page">Valor del envió:</label>
                              <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-door-open"></i>
                                    </span>
                                    {!! Form::number('shipping_default_value', Config::get('muebleria.shipping_default_value'), ['class' => 'form-control', 'min' =>1, 'required']) !!}
                              </div> 
                        </div>
                  </div>

			<div class="row mtop16">
                  	<div class="col-md-12">
                  		{!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                  	</div>
            </div>

			{!! Form::close() !!}
		</div>

	</div>
</div>
@endsection