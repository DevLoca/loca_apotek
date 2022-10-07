@foreach($purchase_order->purchase_lines as $purchase_line)
	@if($purchase_line->quantity - $purchase_line->po_quantity_purchased > 0)
		@include('purchase.partials.purchase_entry_row', [
			'variations' => [$purchase_line->variations],
			'product' => $purchase_line->product,
			'row_count' => $row_count,
			'variation_id' => $purchase_line->variation_id,
			'taxes' => $taxes,
			'currency_details' => $currency_details,
			'hide_tax' => $hide_tax,
			'sub_units' => $sub_units_array[$purchase_line->id],
			'purchase_order_line' => $purchase_line,
			'purchase_order' => $purchase_order,
			'discount_percent' =>$purchase_line->discount_percent,
			'discount_percent_2' => $purchase_line->discount_percent_2,
			'discount_percent_3' => $purchase_line->discount_percent_3,
			'discount_percent_4' => $purchase_line->discount_percent_4,
			'discount_percent_5' => $purchase_line->discount_percent_5,
			'discount_rp' => $purchase_line->discount_rp,
			'discount_rp_2' =>$purchase_line->discount_rp_2,
			'discount_rp_3' =>$purchase_line->discount_rp_3,
			'discount_rp_4' =>$purchase_line->discount_rp_4,
			'discount_rp_5' =>$purchase_line->discount_rp_5
		])
		@php
			$row_count++;
		@endphp
	@endif
@endforeach