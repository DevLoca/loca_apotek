<!-- business information here -->

<html>
<head>
<style>
h6 { 
  display: block;
  font-size: .90em;
  margin-top: 0em;
  margin-bottom: 0.33em;
  margin-left: 0;
  margin-right: 0;
}
</style>
</head>
<body>

<div class="row">

	<!-- Logo -->
	@if(!empty($receipt_details->logo))
		<img style="max-height: 120px; width: auto;" src="{{$receipt_details->logo}}" class="img img-responsive center-block">
	@endif

	<!-- Header text -->
	@if(!empty($receipt_details->header_text))
		<div class="col-xs-12">
		    
			{!! $receipt_details->header_text !!}
		</div>
	@endif

	<!-- business information here -->
	<div class="col-xs-12 text-center">
		<h5 class="text-center">
			<!-- Shop & Location Name  -->
			@if(!empty($receipt_details->display_name))
				<h3>{{$receipt_details->display_name}}</h3>
			@endif
		</h5>

		<!-- Address -->
		<!--<p>-->
		@if(!empty($receipt_details->address))
				<small class="text-center">
				<h6>{!! $receipt_details->address !!}</h6>
				</small>
		@endif
		@if(!empty($receipt_details->contact))
		    <small class="text-center">
				<h6>{!! $receipt_details->contact !!}</h6>
				</small>
			<!--<br/><h6>{!! $receipt_details->contact !!}</h6>-->
		@endif	
		@if(!empty($receipt_details->contact) && !empty($receipt_details->website))
			, 
		@endif
		@if(!empty($receipt_details->website))
			<h6>{{ $receipt_details->website }}</h6>
		@endif
		@if(!empty($receipt_details->location_custom_fields))
			<br><h6>{{ $receipt_details->location_custom_fields }}</h6>
		@endif
		</p>
		<p>
		@if(!empty($receipt_details->sub_heading_line1))
			{{ $receipt_details->sub_heading_line1 }}
		@endif
		@if(!empty($receipt_details->sub_heading_line2))
			<br>{{ $receipt_details->sub_heading_line2 }}
		@endif
		@if(!empty($receipt_details->sub_heading_line3))
			<br>{{ $receipt_details->sub_heading_line3 }}
		@endif
		@if(!empty($receipt_details->sub_heading_line4))
			<br>{{ $receipt_details->sub_heading_line4 }}
		@endif		
		@if(!empty($receipt_details->sub_heading_line5))
			<br>{{ $receipt_details->sub_heading_line5 }}
		@endif
		</p>
		<p>
		@if(!empty($receipt_details->tax_info1))
			<b>{{ $receipt_details->tax_label1 }}</b> {{ $receipt_details->tax_info1 }}
		@endif

		@if(!empty($receipt_details->tax_info2))
			<b>{{ $receipt_details->tax_label2 }}</b> {{ $receipt_details->tax_info2 }}
		@endif
		</p>

		<!-- Title of receipt -->
		
		@if(!empty($receipt_details->invoice_heading))
			<h4 class="text-center">
				<!--{!! $receipt_details->invoice_heading !!}-->
			</h4>
		@endif
		<h6 class="text-left">Tanggal : {{$receipt_details->invoice_date}}</h6>
		@if(!empty($receipt_details->due_date_label))
    	    <h6 class="text-left">{{$receipt_details->due_date_label}} :     {{$receipt_details->due_date ?? ''}}</h6>
        @endif
        @if(!empty($receipt_details->invoice_no_prefix))
            <h6 class="text-left">No Struk : {{$receipt_details->invoice_no}}</h6>
        @endif
        @if(!empty($receipt_details->customer_info))
			<h6  class="text-left"><Strong>{{ $receipt_details->customer_label }}</Strong> : {!! $receipt_details->customer_name !!}</h6>  
		@endif
        
				
		<!-- Invoice  number, Date  -->
		<p style="width: 100% !important" class="word-wrap">
			<span class="pull-left text-left word-wrap">
			    
				@if(!empty($receipt_details->types_of_service))
					<span class="pull-left text-left">
						<strong><h6>{!! $receipt_details->types_of_service_label !!}:</h6></strong>
						{{$receipt_details->types_of_service}}
						<!-- Waiter info -->
						@if(!empty($receipt_details->types_of_service_custom_fields))
							@foreach($receipt_details->types_of_service_custom_fields as $key => $value)
								<strong>{{$key}}: </strong> {{$value}}
							@endforeach
						@endif
					</span>
				@endif

				<!-- Table information-->
		        @if(!empty($receipt_details->table_label) || !empty($receipt_details->table))

					<span class="pull-left text-left">
						@if(!empty($receipt_details->table_label))
							<b>{!! $receipt_details->table_label !!}</b>
						@endif
						{{$receipt_details->table}}

						<!-- Waiter info -->
					</span>
		        @endif

				<!-- customer info -->
				<!--@if(!empty($receipt_details->customer_info))-->
				<!--	<br/>-->
				<!--	<b>{{ $receipt_details->customer_label }}</b>  {!! $receipt_details->customer_info !!} <br>-->
				<!--@endif-->
				@if(!empty($receipt_details->client_id_label))

					<b>{{ $receipt_details->client_id_label }}</b> {{ $receipt_details->client_id }}
				@endif
				@if(!empty($receipt_details->customer_tax_label))

					<b>{{ $receipt_details->customer_tax_label }}</b> {{ $receipt_details->customer_tax_number }}
				@endif
				@if(!empty($receipt_details->customer_custom_fields))
					{!! $receipt_details->customer_custom_fields !!}
				@endif
				@if(!empty($receipt_details->sales_person_label))

					<b>{{ $receipt_details->sales_person_label }}</b> {{ $receipt_details->sales_person }}
				@endif
				@if(!empty($receipt_details->commission_agent_label))

					<strong>{{ $receipt_details->commission_agent_label }}</strong> {{ $receipt_details->commission_agent }}
				@endif
				@if(!empty($receipt_details->customer_rp_label))

					<strong>{{ $receipt_details->customer_rp_label }}</strong> {{ $receipt_details->customer_total_rp }}
				@endif
			</span>

			<span class="pull-right text-left">
				

				@if(!empty($receipt_details->brand_label) || !empty($receipt_details->repair_brand))
					<br>
					@if(!empty($receipt_details->brand_label))
						<b>{!! $receipt_details->brand_label !!}</b>
					@endif
					{{$receipt_details->repair_brand}}
		        @endif


		        @if(!empty($receipt_details->device_label) || !empty($receipt_details->repair_device))
					<br>
					@if(!empty($receipt_details->device_label))
						<b>{!! $receipt_details->device_label !!}</b>
					@endif
					{{$receipt_details->repair_device}}
		        @endif

				@if(!empty($receipt_details->model_no_label) || !empty($receipt_details->repair_model_no))
					<br>
					@if(!empty($receipt_details->model_no_label))
						<b>{!! $receipt_details->model_no_label !!}</b>
					@endif
					{{$receipt_details->repair_model_no}}
		        @endif

				@if(!empty($receipt_details->serial_no_label) || !empty($receipt_details->repair_serial_no))
					<br>
					@if(!empty($receipt_details->serial_no_label))
						<b>{!! $receipt_details->serial_no_label !!}</b>
					@endif
					{{$receipt_details->repair_serial_no}}<br>
		        @endif
				@if(!empty($receipt_details->repair_status_label) || !empty($receipt_details->repair_status))
					@if(!empty($receipt_details->repair_status_label))
						<b>{!! $receipt_details->repair_status_label !!}</b>
					@endif
					{{$receipt_details->repair_status}}<br>
		        @endif
		        
		        @if(!empty($receipt_details->repair_warranty_label) || !empty($receipt_details->repair_warranty))
					@if(!empty($receipt_details->repair_warranty_label))
						<b>{!! $receipt_details->repair_warranty_label !!}</b>
					@endif
					{{$receipt_details->repair_warranty}}
					<br>
		        @endif
		        
				<!-- Waiter info -->
				@if(!empty($receipt_details->service_staff_label) || !empty($receipt_details->service_staff))
		        	<br/>
					@if(!empty($receipt_details->service_staff_label))
						<b>{!! $receipt_details->service_staff_label !!}</b>
					@endif
					{{$receipt_details->service_staff}}
		        @endif
		        @if(!empty($receipt_details->shipping_custom_field_1_label))
					<br><strong>Biaya Layanan :</strong> {!!$receipt_details->shipping_custom_field_1_value ?? ''!!}
				@endif

				@if(!empty($receipt_details->shipping_custom_field_2_label))
					<br><strong>{!!$receipt_details->shipping_custom_field_2_label!!}:</strong> {!!$receipt_details->shipping_custom_field_2_value ?? ''!!}
				@endif

				@if(!empty($receipt_details->shipping_custom_field_3_label))
					<br><strong>{!!$receipt_details->shipping_custom_field_3_label!!}:</strong> {!!$receipt_details->shipping_custom_field_3_value ?? ''!!}
				@endif

				@if(!empty($receipt_details->shipping_custom_field_4_label))
					<br><strong>{!!$receipt_details->shipping_custom_field_4_label!!}:</strong> {!!$receipt_details->shipping_custom_field_4_value ?? ''!!}
				@endif

				@if(!empty($receipt_details->shipping_custom_field_5_label))
					<br><strong>{!!$receipt_details->shipping_custom_field_2_label!!}:</strong> {!!$receipt_details->shipping_custom_field_5_value ?? ''!!}
				@endif
				{{-- sale order --}}
				@if(!empty($receipt_details->sale_orders_invoice_no))
					<br>
					<strong>@lang('restaurant.order_no'):</strong> {!!$receipt_details->sale_orders_invoice_no ?? ''!!}
				@endif

				@if(!empty($receipt_details->sale_orders_invoice_date))
					<br>
					<strong>@lang('lang_v1.order_dates'):</strong> {!!$receipt_details->sale_orders_invoice_date ?? ''!!}
				@endif
			</span>
		</p>
	</div>
</div>

<div class="row">
	@includeIf('sale_pos.receipts.partial.common_repair_invoice')
</div>

<div class="row">
	<div class="col-xs-12">
		<hr/>
		@php
			$p_width = 40;
		@endphp
		@if(!empty($receipt_details->item_discount_label))
			@php
				$p_width -= 15;
			@endphp
		@endif
		<table class="table table-responsive table-slim">
			<thead>
				<tr>
					<!--<th class="text-center" width="80%"><h6><strong>Deskripsi</strong></h6></th>-->
					<!--<th class="text-center" width="10%"><h6><strong>Harga</strong></h6></th>-->
					<!--<th class="text-center" width="20%"><h6><strong>Subtotal</strong></h6></th>-->
					<!-- @if(!empty($receipt_details->item_discount_label))
						<th class="text-right" width="15%">{{$receipt_details->item_discount_label}}</th>
					@endif -->
					<!-- <th class="text-right" width="10%">Jumlah</th> -->
				</tr>
			</thead>
			<tbody>
				@forelse($receipt_details->lines as $line)
					<tr>
						<td>
							@if(!empty($line['image']))
								<img src="{{$line['image']}}" alt="Image" width="50" style="float: left; margin-right: 8px;">
							@endif
							<!--<small>-->
							    <h6>
                            {{$line['name']}} {{$line['product_variation']}}
                            {{$line['variation']}}  X {{$line['quantity']}}</h6>
                            <!--</small>-->
                            <!-- @if(!empty($line['sub_sku'])), {{$line['sub_sku']}} @endif @if(!empty($line['brand'])), {{$line['brand']}} @endif @if(!empty($line['cat_code'])), {{$line['cat_code']}}@endif -->
                            @if(!empty($line['product_custom_fields'])), {{$line['product_custom_fields']}} @endif
                            @if(!empty($line['sell_line_note']))
                            <!--<br>-->
                            <small>
                                <h6>
                            	{{$line['sell_line_note']}}</h6>
                            </small>
                            @endif 
                            @if(!empty($line['lot_number']))<br> {{$line['lot_number_label']}}:  {{$line['lot_number']}} @endif 
                            @if(!empty($line['product_expiry'])), {{$line['product_expiry_label']}}:  {{$line['product_expiry']}} @endif

                            @if(!empty($line['warranty_name'])) <br><small>{{$line['warranty_name']}} </small>@endif @if(!empty($line['warranty_exp_date'])) <small>- {{@format_date($line['warranty_exp_date'])}} </small>@endif
                            @if(!empty($line['warranty_description'])) <small> {{$line['warranty_description'] ?? ''}}</small>@endif
                            <!--<h6></h6>-->
                        </td>
						<!--<td class="text-center"><h6>{{$line['quantity']}}</h6> </td>-->
						<!--<td class="text-right"><h6>{{$line['unit_price_before_discount']}}</h6></td>-->
						<!--<tr>-->
						<td class="text-right"><h6><Strong>{{$line['line_total']}}</Strong></h6></td>
							
						@if(!empty($receipt_details->item_discount_label))
							<td></td>
							<td class="text-right">
								<h6>{{$line['line_discount'] ?? '0.00'}}</h6>
							</td>
						@endif
						<!--<td></td>-->
						<!--<td class="text-right"><h6><Strong>{{$line['line_total']}}</Strong></h6></td>-->
						<!--</tr>-->
					</tr>
					@if(!empty($line['modifiers']))
						@foreach($line['modifiers'] as $modifier)
							<tr>
								<td>
		                            {{$modifier['name']}} {{$modifier['variation']}} 
		                            @if(!empty($modifier['sub_sku'])), {{$modifier['sub_sku']}} @endif @if(!empty($modifier['cat_code'])), {{$modifier['cat_code']}}@endif
		                            @if(!empty($modifier['sell_line_note']))({{$modifier['sell_line_note']}}) @endif 
		                        </td>
								<td class="text-right">{{$modifier['quantity']}} {{$modifier['units']}} </td>
								<td class="text-right">{{$modifier['unit_price_inc_tax']}}</td>
								@if(!empty($receipt_details->item_discount_label))
									<td class="text-right">0.00</td>
								@endif
								<td class="text-right">{{$modifier['line_total']}}</td>
							</tr>
						@endforeach
					@endif
				@empty
					<!--<tr>-->
					<!--	<td colspan="4">&nbsp;</td>-->
					<!--</tr>-->
				@endforelse
			</tbody>
		</table>
	</div>
</div>

<div class="row">
	<!--<div class="col-md-12"><hr/></div>-->

	<div class="col-xs-12">
        <div class="table-responsive">
          	<table class="table table-slim">
				<tbody>
					@if(!empty($receipt_details->total_quantity_label))
						<tr class="color-555">
							<th style="width:50%">
								{!! $receipt_details->total_quantity_label !!}
							</th>
							<td class="text-right">
								{{$receipt_details->total_quantity}}
							</td>
						</tr>
					@endif
					<tr>
						<th style="width:50%">
							<h6>{!! $receipt_details->subtotal_label !!}</h6>
						</th>
						<td class="text-right">
							<h6>{{$receipt_details->subtotal}}</h6>
						</td>
					</tr>

					
					@if(!empty($receipt_details->total_exempt_uf))
					<tr>
						<th style="width:50%">
							@lang('lang_v1.exempt')
						</th>
						<td class="text-right">
							{{$receipt_details->total_exempt}}
						</td>
					</tr>
					@endif
					<!-- Shipping Charges -->
					@if(!empty($receipt_details->shipping_charges))
						<tr>
							<th style="width:50%">
								<h6>Fee Layanan</h6>
							</th>
							<td class="text-right">
								<h6>{{$receipt_details->shipping_charges}}<h6>
							</td>
						</tr>
					@endif

					@if(!empty($receipt_details->packing_charge))
						<tr>
							<th style="width:50%">
								{!! $receipt_details->packing_charge_label !!}
							</th>
							<td class="text-right">
								{{$receipt_details->packing_charge}}
							</td>
						</tr>
					@endif

					<!-- Discount -->
					@if( !empty($receipt_details->discount) )
						<tr>
							<th>
								<h6>{!! $receipt_details->discount_label !!}</h6>
							</th>

							<td class="text-right">
								<h6>(-) {{$receipt_details->discount}}</h6>
							</td>
						</tr>
					@endif

					@if( !empty($receipt_details->total_line_discount) )
						<tr>
							<th>
								<h6>{!! $receipt_details->line_discount_label !!}</h6>
							</th>

							<td class="text-right">
								<h6>(-) {{$receipt_details->total_line_discount}}</h6>
							</td>
						</tr>
					@endif

					@if( !empty($receipt_details->reward_point_label) )
						<tr>
							<th>
								{!! $receipt_details->reward_point_label !!}
							</th>

							<td class="text-right">
								(-) {{$receipt_details->reward_point_amount}}
							</td>
						</tr>
					@endif

					<!-- Tax -->
					@if( !empty($receipt_details->tax) )
						<tr>
							<th>
								<h6>Pajak & Layanan</h6>
							</th>
							<td class="text-right">
								<h6>(+) {{$receipt_details->tax}}</h6>
							</td>
						</tr>
					@endif

					@if( $receipt_details->round_off_amount > 0)
						<tr>
							<th>
								{!! $receipt_details->round_off_label !!}
							</th>
							<td class="text-right">
								{{$receipt_details->round_off}}
							</td>
						</tr>
					@endif

					<!-- Total -->
					<tr>
						<th>
							<h6>{!! $receipt_details->total_label !!}</h6>
						</th>
						<td class="text-right">
							<h6>{{$receipt_details->total}}
							@if(!empty($receipt_details->total_in_words))</h6>
								<br>
								<small><h6>({{$receipt_details->total_in_words}})</h6></small>
							@endif
						</td>
					</tr>

					@if(!empty($receipt_details->payments))
						@foreach($receipt_details->payments as $payment)
							<tr>
								<td><h6>{{$payment['method']}}</h6></td>
								<td class="text-right" ><h6>{{$payment['amount']}}</h6></td>
								<!-- <td class="text-right">{{$payment['date']}}</td> -->
							</tr>
						@endforeach
					@endif

					@if(!empty($receipt_details->total_paid))
						<tr>
							<th>
								<h6>Total Bayar</h6>
							</th>
							<td class="text-right">
								<h6>{{$receipt_details->total_paid}}</h6>
							</td>
						</tr>
					@endif

					<!-- Total Due-->
					@if(!empty($receipt_details->total_due))
					<tr>
						<th>
							<h6>Total Tagihan</h6>
						</th>
						<td class="text-right">
							<h6>{{$receipt_details->total_due}}</h6>
						</td>
					</tr>
					@endif

					@if(!empty($receipt_details->all_due))
					<tr>
						<th>
						  <h6> Sisa Tagihan</h6>
						</th>
						<td class="text-right">
							<h6>{{$receipt_details->all_due}}</h6>
						</td>
					</tr>
					@endif
					
					
				</tbody>
        	</table>
        </div>
    </div>

    <div class="col-xs-12">
        <div class="table-responsive">
          	<table class="table table-slim">
				<tbody>
					<tr>
						<th class="text-center">
						   <h6>Semoga Lekas Sembuh</h6>
						</th>
						
					</tr>

					<tr>
						<th class="text-center">
						-   
						</th>
					</tr>
					<tr>
						<th class="text-center">
						-   
						</th>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

    <div class="col-xs-12">
    	<!--<p>{!! nl2br($receipt_details->additional_notes) !!}</p>-->
    </div>
</div>
<div class="row">
	@if(!empty($receipt_details->footer_text))
	<div class="@if($receipt_details->show_barcode || $receipt_details->show_qr_code) col-xs-8 @else col-xs-12 @endif">
		{!! $receipt_details->footer_text !!}
	</div>
	@endif
	@if($receipt_details->show_barcode || $receipt_details->show_qr_code)
		<div class="@if(!empty($receipt_details->footer_text)) col-xs-4 @else col-xs-12 @endif text-center">
			@if($receipt_details->show_barcode)
				{{-- Barcode --}}
				<img class="center-block" src="data:image/png;base64,{{DNS1D::getBarcodePNG($receipt_details->invoice_no, 'C128', 2,30,array(39, 48, 54), true)}}">
			@endif
			
			@if($receipt_details->show_qr_code && !empty($receipt_details->qr_code_details))
			@php
				$qr_code_text = implode(', ', $receipt_details->qr_code_details);
			@endphp
				<img class="center-block mt-5" src="data:image/png;base64,{{DNS2D::getBarcodePNG($qr_code_text, 'QRCODE', 3, 3, [39, 48, 54])}}">
			@endif
		</div>
	@endif
</div>