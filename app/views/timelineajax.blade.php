@foreach($messages as $message)

<li id="ajax_data">
  <time class="tmtime" datetime="2013-04-10 18:30"><span>{{date('Y-m-d',strtotime($message->created_at))}}</span> <span>{{date('h-i',strtotime($message->created_at))}}</span></time>
  @if($message->error)
  <div class="tmicon bg-red fa-envelope"></div>                        
  @else
  <div class="tmicon bg-green fa-envelope"></div>                        
  @endif
  <div class="tmlabel">
    <h2>
      {{DB::table('bp_info')->where('mobile',$message->bp_mobile)->pluck('name')}}--
      {{$message->bp_mobile}}
    </h2>

    @if($message->error)
    <p><strong>Error</strong></p>
    <?php $x = json_decode($message->error);?>

    @foreach($x as $y)
    {{"#".$y}}
    @endforeach

    
    
    @else
    <p>Name: {{$message->customer_name}} | Age: {{$message->age}} | Gender: {{$message->gender}} | Mobile: {{$message->customer_mobile}} | Upazilla/Thana: {{$message->thana_code}} | District: {{DB::table('thana')->where('thana_code',$message->thana_code)->pluck('district')}} | Division: {{DB::table('thana')->where('thana_code',$message->thana_code)->pluck('division')}} | Education: {{DB::table('education_info')->where('id',$message->education_id)->pluck('name')}} | Occupation: {{DB::table('occupation')->where('id',$message->id)->pluck('occupation_name')}} | Coupon: {{$message->coupon_code}} | Used Product: {{DB::table('currently_used_product')->where('id',$message->currently_used_product_table_id)->pluck('product')}}</p>
    <p>FAL: {{$message->FAL}} | PDF: {{$message->PDF}}| PWB: {{$message->PWB}}| PNS: {{$message->PNS}}| PPC: {{$message->PPC}}| DBM: {{$message->DBM}}</p>
    @endif
    
    
  </div>
</li>
@endforeach
