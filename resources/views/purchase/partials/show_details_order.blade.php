<div class="modal-header">
    <button type="button" class="close no-print" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    @php
      $title = $purchase->type == 'purchase_order' ? __('lang_v1.purchase_order_details') : __('purchase.purchase_details');
      $custom_labels = json_decode(session('business.custom_labels'), true);
    @endphp
    <address><center>
        <strong>{{ $purchase->business->name }}</strong><br>
        <strong>Apoteker: apt. Rizky Wangiyulandri, S.Farm</strong><br>
        <strong>SIPA:440/0073.VI.2020/APT/DPMPTSP</strong>
        <!--{{ $purchase->location->name }}-->
        @if(!empty($purchase->location->landmark))
          <br>{{$purchase->location->landmark}}
        @endif
        @if(!empty($purchase->location->city) || !empty($purchase->location->state) || !empty($purchase->location->country))
          <br>{{implode(',', array_filter([$purchase->location->city, $purchase->location->state, $purchase->location->country]))}}
        @endif
        
        @if(!empty($purchase->business->tax_number_1))
          <br>{{$purchase->business->tax_label_1}}: {{$purchase->business->tax_number_1}}
        @endif

        @if(!empty($purchase->business->tax_number_2))
          <br>{{$purchase->business->tax_label_2}}: {{$purchase->business->tax_number_2}}
        @endif

        @if(!empty($purchase->location->mobile))
          <br>@lang('contact.mobile'): {{$purchase->location->mobile}}
        @endif
        @if(!empty($purchase->location->email))
          <br>@lang('business.email'): {{$purchase->location->email}}
        @endif
      </address></center>
      <strong><center>SURAT PESANAN</center></strong>
      <center>@lang('messages.date'): {{ @format_date($purchase->transaction_date) }} 
      <strong>@lang('purchase.ref_no'):</strong> #{{ $purchase->ref_no }}
      <br>
      <strong>Kepada : </strong>{!! $purchase->contact->contact_address !!}</center>
</div>
<div class="modal-body">
  <!--<div class="row invoice-info">-->
    <!-- <div class="col-sm-4 invoice-col">-->
    <!--  @lang('messages.date'): {{ @format_date($purchase->transaction_date) }}-->
      <!--<br>-->
      
    <!--  <strong>@lang('purchase.ref_no'):</strong> #{{ $purchase->ref_no }}-->
    <!--</div>-->
  <!--  <div class="col-sm-8 invoice-col">-->
      <!--<strong>Kepada : </strong>{!! $purchase->contact->contact_address !!}-->
      
  <!--  </div>-->

    
  <!--</div>-->

  <br>
  <div class="row">
    <div class="col-sm-12 col-xs-12">
      <div class="table-responsive">
        <table class="table bg-gray">
          <thead>
            <tr class="bg-green">
              <th>#</th>
              <th><center>Banyaknya</center></th>
              <th><center>Nama Obat</center></th>
            </tr>
          </thead>
          @php 
            $total_before_tax = 0.00;
          @endphp
          @foreach($purchase->purchase_lines as $purchase_line)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td><span >{{ $purchase_line->quantity }}</span> @if(!empty($purchase_line->sub_unit)) {{$purchase_line->sub_unit->short_name}} @else {{$purchase_line->product->unit->short_name}} @endif</td>
              <td>
                {{ $purchase_line->product->name }}
              </td>
    
              
              
            </tr>

          @endforeach
        </table>
      </div>
    </div>
  </div>
  <br>
  
  <div class="row">
    <div class="col-sm-12">
      <strong>@lang('purchase.additional_notes'):</strong><br>
      <p class="well well-sm no-shadow bg-gray">
        @if($purchase->additional_notes)
          {{ $purchase->additional_notes }}
        @else
          --
        @endif
      </p>
    </div>
  </div>
  @if(!empty($activities))
  <div class="row">
    <!--<div class="col-md-3">-->
          
    <!--      <br>-->
    <!--      <strong>Paraf</strong><br>-->
          
    <!--      <br><br><br>-->
          
    <!--      (................)-->
    <!--</div>-->
    <div class="col-md-6">
          Bandung,..........................&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Paraf
          <br>
          <strong>Pemesan</strong><br>
          
          <br><br>
          
          <!--(.................)&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-->
          <!-- (................)-->
    </div>
    <!--<div class="col-md-3">-->
    <!--      <strong>Paraf</strong><br>-->
          
    <!--      <br><br><br>-->
          
    <!--      (................)-->
    <!--</div>-->
  </div>
  @endif

  {{-- Barcode --}}
  <div class="row print_section">
    <div class="col-xs-12">
      <img class="center-block" src="data:image/png;base64,{{DNS1D::getBarcodePNG($purchase->ref_no, 'C128', 2,30,array(39, 48, 54), true)}}">
    </div>
  </div>
</div>