@extends('layouts.app')

@section('content')

<div class="container">


	<div class="context-header">
		<div class="grid-container">
			<div class="item-header">
				<div class="item-header__top">
					<div class="item-header__title">
						<h1 class="t-heading">{{ $articulo->nom_art }}</h1>
					</div>
				</div>
			</div>
		</div>
		
	</div>


	<div class="content-main" id="content">
		<div class="grid-container">
			<div class="content-s">
				<div class="box--no-padding">
					<div class="item-preview -preview-live">
						<a href="">
							<img alt="{{ $articulo->nom_art }}" src="{{ asset('images/' . $articulo->img )}}" sizes="(min-width: 1024px) 590px, (min-width: 1px) 100vw, 600px">
						</a>
					</div>
				</div>
				<div data-view="toggleItemDescription">
					<div class="js-item-description item-description has-toggle">
						{{ $articulo->des_art }}
					</div>
				</div>
			</div>

			
		</div>

		
	</div>

	<div class="sidebar sidebar-right">
				<div class="pricebox-container">
					<div class="purchase-panel">
						<div id="purchase-form" class="purchase-form">
							<form data-view="purchaseForm">
								<div>
									<div data-view="itemVariantSelector">
										{{ $articulo->precio }}
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

	

</div>




@endsection