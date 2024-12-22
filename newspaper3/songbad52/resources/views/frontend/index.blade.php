@extends('layouts.front')
@section('content')
@php
     $firstsectionbig=DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
	 $firstsectionsmall=DB::table('posts')->where('first_section',1)->orderBy('id','DESC')->limit(4)->get();
	 $firstsectionheding=DB::table('posts')->where('headline',1)->orderBy('id','DESC')->limit(12)->get();
     $setting=DB::table('settings')->first();
	 $seo=DB::table('seos')->first()
@endphp
 <!--============Scroll 03 start==============-->
    @php
	 $headline=DB::table('posts')
                        ->join('categories','posts.cat_id','categories.id')
                        ->join('subcategories','posts.subcat_id','subcategories.id')
                        ->select('posts.*','categories.category_bn','subcategories.subcategory_bn')
                        ->where('posts.headline',1)
                        ->orderBy('id','DESC')
                        ->limit(5)
                        ->get();  						
	 @endphp  
        


<section class="section_one">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
							@php
								$slug=preg_replace('/\s+/u', '-', trim($firstsectionbig->title_bn ??''));
							@endphp
<div class="Name">
<div class="image">
<img width="600" height="337" src="{{ asset($firstsectionbig->image ??'') }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> <h4 class="overly_hadding_1"> <a href="{{ URL::to('view-post/'.$firstsectionbig->id.'/'.$slug ??'') }}">{{ $firstsectionbig->title_bn ??''}}</a> </h4>
</div>
</div>
</div>



<div class="col-md-6 col-sm-6">
<div class="overly_section">
<div class="row">

@foreach($firstsectionsmall as $row)
							                @php
								            $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							                @endphp		
<div class="col-md-6 col-sm-6">
<div class="Name">
<div class="image">
<img width="600" height="337" src="{{ asset($row->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> <h4 class="overly_hadding_2"> <a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }}</a> </h4>
</div>
</div>
</div>
@endforeach	


</div>
</div>
</div>
</div>
</section>

<section class="widget_section">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget"><p> {!! $seo->horizontal1 !!}</p>
</div>
</div> </div>
</div>
<div class="col-md-6 col-sm-6">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget"><p> {!! $seo->horizontal2 !!}</p>
</div>
</div> </div>
</div>
</div>
</div>
</section>



<section class="section_two">
<div class="container">
<div class="row">
<div class="col-md-9 col-sm-9">
<div class="row">


@foreach($firstsectionheding as $row)
							@php
							$slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							 @endphp
<div class="col-md-4 col-sm-4">
<div class="exclisive_news">
<div class="exclisive_news_image">
<img width="600" height="337" src="{{ asset($row->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> </div>
<div class="content-padding">
<h4 class="hadding_02"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }}</a> </h4>
</div>
</div>
</div>
   @endforeach	



</div>
</div>



<div class="col-md-3 col-sm-3">
<div class="tab-header">

<div class="tab-header">
                    @php
					$latest=DB::table('posts')->orderBy('id','DESC')->limit(8)->get();
					$favourite=DB::table('posts')->inRandomOrder()->orderBy('id','DESC')->limit(8)->get();
					$highest=DB::table('posts')->inRandomOrder()->orderBy('id','ASC')->limit(8)->get();
					$slug=preg_replace('/\s+/u', '-', trim($row->title_bn));
					@endphp

<ul class="nav nav-tabs nav-justified" role="tablist">
<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">সর্বশেষ আপডেট</a></li>
<li role="presentation"><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">জনপ্রিয় সংবাদ</a></li>
</ul>

<div class="tab-content ">
<div role="tabpanel" class="tab-pane in active" id="tab21">
<div class="news-titletab">

	                                        @foreach($firstsectionheding   as $row)
							                @php
								            $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							                @endphp	
<div class="small-img tab-border">
<h4 class="hadding_02 padding"> <a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>{{ $row->title_bn ??'' }}</a></h4>
</div>
 @endforeach  


</div>
</div>
<div role="tabpanel" class="tab-pane fade" id="tab22">
<div class="news-titletab">


											@foreach($firstsectionsmall as $row)
							                @php
								            $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							                @endphp	
<div class="small-img tab-border">
<h4 class="hadding_02 padding"> <a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>{{ $row->title_bn ??'' }}</a></h4>
</div>
  @endforeach

</div>
</div>
</div>
</div>



<div class="add">
@php
	 $seo=DB::table('seos')->first()
@endphp
{!! $seo->vertical!!}

<div class="facebook_title">
ফেসবুকে আমরা... </div>
<div id='fb-root'/>
<script type='text/javascript'>
//<![CDATA[
window.fbAsyncInit = function() {
FB.init({
appId : 'FB APP ID',
status : true, // check login status
cookie : true, // enable cookies 
xfbml : true // parse XFBML
});
};
(function() {
var e = document.createElement('script');
e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
e.async = true;
document.getElementById('fb-root').appendChild(e);
}());
//]]>
</script>
<div class="fb-page" data-href="https://www.facebook.com/{{$setting->facebookpage ??''}}" data-width="700" data-height="400" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/msdesign.rtml"><a href="https://www.facebook.com/msdesign.rtml">Elite Design</a></blockquote></div></div>

						
						<div class="facebook_title">
নামাজের সময়সূচী </div>
	@php
					$prayer=DB::table('namaz')->first();
					@endphp
                        
                        <div class="facebook-content">
						<table class="table">
						<tr>
							<th>
							@if(session()->get('lang')== 'english' ??'')
							  Fajr
							@else
							  ফজর 
							  @endif
							</th>
							<th>{{ $prayer->fajr ??''}} ভোর</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('lang')== 'english' ??'')
							  Johr
							@else
							  যোহর 
							  @endif
							</th>
							<th>{{ $prayer->johr ??''}} দুপুর</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('lang')== 'english' ??'')
							  Asor
							@else
							  আছর 
							  @endif
							</th>
							<th>{{ $prayer->asor ??''}} বিকাল</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('lang')== 'english' ??'')
							  Magrib
							@else
							  মাগরিব  
							  @endif
							</th>
							<th>{{ $prayer->magrib ??''}} সন্ধ্যা</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('lang')== 'english' ??'')
							  Esha
							@else
							  এশা 
							  @endif
							</th>
							<th>{{ $prayer->esha ??''}} রাত</th>
						</tr>
						<tr>
							<th>
							@if(session()->get('lang')== 'english' ??'')
							  Jummah
							@else
							  জুম্মা 
							  @endif
							</th>
							<th>{{ $prayer->jummah ??''}} দুপুর</th>
						</tr>
					</table>
						</div>
												<div class="facebook_title">
জাতীয় সঙ্গীত </div>
						<audio controls="" style="width:100%">
				 <source src="{{ URL::to('/bd_national_anthem.mp3') }}" type="audio/mp3">
				</audio>





<div class="add">

<div class="widget_area"> <div class="textwidget"> </div>
</div> </div>
</div>
</div>
</div>
</section>


<section class="widget_section">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget"><p>{!! $seo->horizontal3 !!}</p>
</div>
</div> </div>
</div>
<div class="col-md-6 col-sm-6">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget"><p>{!! $seo->horizontal4 !!}</p>
</div>
</div> </div>
</div>
</div>
</div>
</section>


<section class="section_three">
<div class="container">
<div class="row">
<div class="col-md-8 col-sm-8">
<div class="cat_title_one">
					@php
					$firstcat=DB::table('categories')->first();
					$firstcatpostbig=DB::table('posts')->where('cat_id',$firstcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
					$firstcatpost=DB::table('posts')->where('cat_id',$firstcat->id)->where('categoryhomepage',1)->orderBy('id','DESC')->first();
					$firstcatpostsmall=DB::table('posts')->where('cat_id',$firstcat->id)->where('categoryhomepage',1)->orderBy('id','DESC')->limit(3)->get();
					@endphp
<a href="{{ URL::to('post/'.$firstcat->id.'/'.$firstcat->category_bn ??'')}}"><i class="fa fa-bars"></i>  {{ $firstcat->category_bn ??''}} </a>
</div>
<div class="row">


<div class="col-md-6 col-sm-6">
<div class="middle_image_sec">
<div class="middle_image">
<img width="600" height="337" src="{{ asset($firstcatpostbig->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> </div>
<div class="content-padding">
<h4 class="hadding_02"><a href="{{ URL::to('view-post/'.$firstcatpostbig->id.'/'.$slug ??'') }}">{{ $firstcatpostbig->title_bn ??''}}</a></h4>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6">
<div class="middle_image_sec">
<div class="middle_image">
<img width="600" height="337" src="{{ asset($firstcatpost->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> </div>
<div class="content-padding">
<h4 class="hadding_02"><a href="{{ URL::to('view-post/'.$firstcatpostbig->id.'/'.$slug ??'') }}">{{ $firstcatpost->title_bn ??''}}</a></h4>
</div>
</div>
</div>
</div>


<div class="row">


 @foreach($firstcatpostsmall as $row) 
 								@php
								$slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							    @endphp
<div class="col-md-4 col-sm-4">
<div class="middle_image_sec">
<div class="middle_image">
<img width="600" height="337" src="{{ asset($row->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> </div>
<div class="content-padding">
<h4 class="hadding_03"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }} </a></h4>
</div>
</div>
</div>
	@endforeach	





</div>
</div>

			@php
			$secondcat=DB::table('categories')->skip(1)->first();
			$secondcatpostbig=DB::table('posts')->where('cat_id',$secondcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
			$secondcatpostsmall=DB::table('posts')->where('cat_id',$secondcat->id)->where('categoryhomepage',1)->orderBy('id','DESC')->limit(2)->get();
			@endphp
<div class="col-md-4 col-sm-4">
<div class="cat_title_one">
<a href="{{ URL::to('post/'.$secondcat->id.'/'.$secondcat->category_bn ??'')}}"><i class="fa fa-bars"></i> {{ $secondcat->category_bn ??''}} </a>
</div>
<div class="box-shadow">
<div class="middle_image">
<img width="600" height="337" src="{{ asset($secondcatpostbig->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> </div>
<div class="sec_three_padding border_again">
<h4 class="hadding_01"><a href="{{ URL::to('view-post/'.$secondcatpostbig->id.'/'.$slug ??'') }}">{{ $secondcatpostbig->title_bn ??''}}</a></h4>

                            @foreach($secondcatpostsmall as $row)
                            @php
								$slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							@endphp	
<div class="little_img border">
<img width="600" height="337" src="{{ asset($row->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> <h4 class="hadding_02"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }}</a></h4>
</div>
 @endforeach


</div>
<div class="row">
<div class="col-sm-12 col-md-12">
<h4 class="more_news"><a href="{{ URL::to('post/'.$secondcat->id.'/'.$secondcat->category_bn ??'')}}"> আরো খবর.. <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a></h4>
</div>
</div>
</div>
</div>
</div>
</div>
</section>



<section class="widget_section">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget"><p>{!! $seo->horizontal4 !!}</p>
</div>
</div> </div>
</div>
<div class="col-md-6 col-sm-6">
@php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget"><p>{!! $seo->horizontal5 !!}</p>
</div>
</div> </div>
</div>
</div>
</div>
</section>

<section class="section_five">

<div class="container">
<div class="cat_title_one">
	         @php
			$thirdcat=DB::table('categories')->skip(2)->first();
			$thirdcatpostbig=DB::table('posts')->where('cat_id',$thirdcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
			$thirdcatpostsmall=DB::table('posts')->where('cat_id',$thirdcat->id)->where('categoryhomepage',1)->orderBy('id','DESC')->limit(8)->get();
			@endphp
<a href="{{ URL::to('post/'.$thirdcat->id.'/'.$thirdcat->category_bn ??'')}}"><i class="fa fa-bars"></i> {{ $thirdcat->category_bn ??''}} </a>
</div>
<div class="row">

                            @foreach($thirdcatpostsmall as $row)	
						    @php
						    $slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							@endphp	
<div class="col-md-3 col-sm-3">
<div class="exclisive_news">
<div class="exclisive_news_image">
<img width="600" height="337" src="{{ asset($row->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> </div>
<div class="content-padding">
<h4 class="hadding_02"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }}</a></h4>
</div>
</div>
</div>
 @endforeach	


</div>
</div>
</section>

<section class="widget_section">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
                       @php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget"><p>{!! $seo->horizontal1 !!}</p>
</div>
</div> </div>
</div>
<div class="col-md-6 col-sm-6">
                       @php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget"><p>{!! $seo->horizontal2 !!}</p>
</div>
</div> </div>
</div>
</div>
</div>
</section>

<section class="section_six">
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-4">
<div class="cat_title_one">
             @php
			$fourthcat=DB::table('categories')->skip(3)->first();
			$fourthcatpostbig=DB::table('posts')->where('cat_id',$fourthcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
			$fourthcatpostsmall=DB::table('posts')->where('cat_id',$fourthcat->id)->where('categoryhomepage',1)->orderBy('id','DESC')->limit(3)->get();
			@endphp
<a href="{{ URL::to('post/'.$fourthcat->id.'/'.$fourthcat->category_bn ??'')}}"><i class="fa fa-bars"></i> {{ $fourthcat->category_bn ??''}} </a>
</div>
<div class="box-shadow">
<div class="border_image">
                            @php
							$slug=preg_replace('/\s+/u', '-', trim($fourthcatpostbig->title_bn ??''));
							@endphp
<img width="600" height="337" src="{{ asset($fourthcatpostbig->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> </div>
<div class="sec_six_padding border_again">
<h4 class="hadding_01"><a href="{{ URL::to('view-post/'.$fourthcatpostbig->id.'/'.$slug ??'') }}">{{ $fourthcatpostbig->title_bn ??''}}</a></h4>
<div class="content-dtls">
{{ $fourthcatpostbig->details_en ??''}} </div>

@foreach($fourthcatpostsmall as $row)
<div class="little_img border">
<img width="600" height="337" src="{{ asset($row->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> <h4 class="hadding_02"> <a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }}</a></h4>
</div>
@endforeach



</div>
<div class="row">
<div class="col-sm-12 col-md-12">
<h4 class="more_news"><a href="{{ URL::to('post/'.$fourthcat->id.'/'.$fourthcat->category_bn ??'')}}"> আরো খবর.. <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a></h4>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
		    @php
			$fifthcat=DB::table('categories')->skip(4)->first();
			$fifthcatpostbig=DB::table('posts')->where('cat_id',$fifthcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
			$fifthcatpostsmall=DB::table('posts')->where('cat_id',$fifthcat->id)->where('bigthumbnail',NULL)->orderBy('id','DESC')->limit(3)->get();
			@endphp
			                        	@php
								$slug=preg_replace('/\s+/u', '-', trim($fifthcatpostbig->title_bn ??''));
							@endphp
<div class="cat_title_one">
<a href="{{ URL::to('post/'.$fifthcat->id.'/'.$fifthcat->category_bn ??'')}}"><i class="fa fa-bars"></i> {{ $fifthcat->category_bn ??'' }}  </a>
</div>
<div class="box-shadow">
<div class="border_image">
<img width="600" height="337" src="{{ asset($fifthcatpostbig->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> </div>
<div class="sec_six_padding border_again">
<h4 class="hadding_01"><a href="{{ URL::to('view-post/'.$fifthcatpostbig->id.'/'.$slug ??'') }}">{{ $fifthcatpostbig->title_bn  ??''}} </a></h4>
<div class="content-dtls">
{{ $fifthcatpostbig->details_en  ??''}}  </div>


                                @foreach($fifthcatpostsmall as $row)
                                @php
								$slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							@endphp	
<div class="little_img border">
<img width="600" height="337" src="{{ asset($row->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> <h4 class="hadding_02"> <a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }}</a></h4>
</div>
@endforeach	

</div>
<div class="row">
<div class="col-sm-12 col-md-12">
<h4 class="more_news"><a href="{{ URL::to('post/'.$fifthcat->id.'/'.$fifthcat->category_bn ??'')}}"> আরো খবর.. <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a></h4>
</div>
</div>
</div>
</div>
<div class="col-md-4 col-sm-4">
<div class="cat_title_one">

            @php
			$sixcat=DB::table('categories')->skip(5)->first();
			$sixcatpostbig=DB::table('posts')->where('cat_id',$sixcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
			$sixcatpostsmall=DB::table('posts')->where('cat_id',$sixcat->id)->where('categoryhomepage',1)->orderBy('id','DESC')->limit(3)->get();
			@endphp
							@php
							$slug=preg_replace('/\s+/u', '-', trim($sixcatpostbig->title_bn ??''));
							@endphp
							
<a href="{{ URL::to('post/'.$sixcat->id.'/'.$sixcat->category_bn ??'')}}"><i class="fa fa-bars"></i> {{ $sixcat->category_bn ??'' }}  </a>
</div>
<div class="box-shadow">
<div class="border_image">
<img width="600" height="337" src="{{ asset($sixcatpostbig->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> </div>
<div class="sec_six_padding border_again">
<h4 class="hadding_01"><a href="{{ URL::to('view-post/'.$sixcatpostbig->id.'/'.$slug ??'') }}">{{ $sixcatpostbig->title_bn  ??''}}</a></h4>
<div class="content-dtls">
{!! $sixcatpostbig->details_en  ??'' !!} </div>

                            @foreach($sixcatpostsmall as $row) 
                            @php
								$slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							@endphp	
<div class="little_img border">
<img width="600" height="337" src="{{ asset($row->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> <h4 class="hadding_02"> <a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">{{ $row->title_bn ??'' }}</a></h4>
</div>
     @endforeach	

</div>

<div class="row">
<div class="col-sm-12 col-md-12">
<h4 class="more_news"><a href="{{ URL::to('post/'.$sixcat->id.'/'.$sixcat->category_bn ??'')}}"> আরো খবর.. <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a></h4>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="widget_section">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
                       @php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget"><p>{!! $seo->horizontal5 !!}</p>
</div>
</div> </div>
</div>
<div class="col-md-6 col-sm-6">
                       @php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
<div class="widget_area"> <div class="textwidget"><p>{!! $seo->horizontal4 !!}</p>
</div>
</div> </div>
</div>
</div>
</div>
</section>



<section class="widget_section">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
                       @php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">
</div>
</div> </div>
</div>
<div class="col-md-6 col-sm-6">
                       @php
	 $seo=DB::table('seos')->first()
@endphp
<div class="add">

</div>
</div> </div>
</div>
</div>
</div>
</section>

<section class="section_eight">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="gallery-title">
<a href="#"><i class="fa fa-video-camera"></i> ভিডিও নিউজ </a>
</div>
<div class="video_padding">
<div class="video_sec">
				@php
				$videobig=DB::table('videos')->where('type',1)->orderBy('id','DESC')->first();
				$videosmall=DB::table('videos')->where('type',0)->orderBy('id','DESC')->limit(5)->get();
				$videosmall2=DB::table('videos')->where('type',1)->orderBy('id','DESC')->limit(5)->get();
				@endphp

<div class="mySlides2" style="width:100%">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<iframe title="{{ $videobig->title ??''}}" width="500" height="281" src="https://www.youtube.com/embed/{{  $videobig->embed_code ??''}}?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>


</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="video_slider_sec owl-carousel">
<div class="slide-small-img" onclick="currentDiv2(1)">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<div class="video">
<iframe title="Je Tuku Shomoi Tumi | Cover | Dristy Anam" width="500" height="281" src="https://www.youtube.com/embed/ABCm8GmUGCk?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>
<div class="small-pto-title">
যেটুকু সময় তুমি থাকো কাছে </div>
</div>
<div class="slide-small-img" onclick="currentDiv2(2)">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<div class="video">
<iframe title="Bolona Kothay Tumi | Arfin Rumey | Kheya | বলোনা কোথায় তুমি | Music Video" width="500" height="281" src="https://www.youtube.com/embed/aeut4kEtemg?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>
<div class="small-pto-title">
বলোনা কোথায় তুমি </div>
</div>
<div class="slide-small-img" onclick="currentDiv2(3)">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<div class="video">
<iframe title="Amar E Mon | আমার এ মন । Imran | Tanjin Tisha | Romantic Song of the Year | New Bangla Song" width="500" height="281" src="https://www.youtube.com/embed/GnWehAFliRo?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>
<div class="small-pto-title">
আমার এ মন </div>
</div>
<div class="slide-small-img" onclick="currentDiv2(4)">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<div class="video">
<iframe title="Ami Parbona Tomar Hote l Tahsan &amp; Konal l Srabanti Chatterjee l Rtv Music l Movie - Jodi Akdin" width="500" height="281" src="https://www.youtube.com/embed/uPmV4ONl3kI?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>
<div class="small-pto-title">
আমি পারবনা তোমার হতে </div>
</div>
</div>
</div>
</div>

<script>
                                    var slideIndex = 1;
                                    showDivs2(slideIndex);

                                    function plusDivs(n) {
                                      showDivs2(slideIndex += n);
                                    }

                                    function currentDiv2(n) {
                                      showDivs2(slideIndex = n);
                                    }

                                    function showDivs2(n) {
                                      var i;
                                      var x = document.getElementsByClassName("mySlides2");
                                      var dots = document.getElementsByClassName("demo");
                                      if (n > x.length) {slideIndex = 1}
                                      if (n < 1) {slideIndex = x.length}
                                      for (i = 0; i < x.length; i++) {
                                         x[i].style.display = "none";
                                      }
                                      for (i = 0; i < dots.length; i++) {
                                         dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                                      }
                                      x[slideIndex-1].style.display = "block";
                                      dots[slideIndex-1].className += " w3-opacity-off";
                                    }
                                </script>

</div>
<div class="col-md-6 col-sm-6">
<div class="gallery-title">
<a href="#"><i class="fa fa-video-camera"></i> বিনোদন </a>
</div>
<div class="video_padding">
<div class="video_sec">
				@php
				$videobig=DB::table('videos')->where('type',1)->orderBy('id','DESC')->first();
				$videosmall=DB::table('videos')->where('type',0)->orderBy('id','DESC')->first();
				@endphp
<div class="mySlides3" style="width:100%">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<iframe title="{{ $videosmall->title ??''}}" width="500" height="281" src="https://www.youtube.com/embed/{{  $videosmall->embed_code ??''}}?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>
<div class="mySlides3" style="width:100%">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<iframe title="Majestic nature&#039;s beauty of Allah | Relaxing ambiance" width="500" height="281" src="https://www.youtube.com/embed/9BpoeZzbUyA?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>
<div class="mySlides3" style="width:100%">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<iframe title="ক্ষমা করে দাও,মাফ করে দাও- Bangla Islamic song (Hamd) । Julfikar Hamd Naat" width="500" height="281" src="https://www.youtube.com/embed/eq567HOuXCg?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>
<div class="mySlides3" style="width:100%">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<iframe title="মায়ের সুন্দর একটি গজল ২০১৮" width="500" height="281" src="https://www.youtube.com/embed/OcjUu0RtYTc?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="video_slider_sec owl-carousel">
<div class="slide-small-img" onclick="currentDiv3(1)">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<div class="video">
<iframe title="ও মদিনার বুলবুলি তোমার নামে ফুল তুলি Bangla Islamic Song" width="500" height="281" src="https://www.youtube.com/embed/Kc7TnJHVBIw?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>
<div class="small-pto-title">
ও মদিনার বুলবুলি তোমার নামে ফুল তুলি </div>
</div>
<div class="slide-small-img" onclick="currentDiv3(2)">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<div class="video">
<iframe title="Majestic nature&#039;s beauty of Allah | Relaxing ambiance" width="500" height="281" src="https://www.youtube.com/embed/9BpoeZzbUyA?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>
<div class="small-pto-title">
জানি না কত সুন্দর তুমি আল্লাহ! </div>
</div>
<div class="slide-small-img" onclick="currentDiv3(3)">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<div class="video">
<iframe title="ক্ষমা করে দাও,মাফ করে দাও- Bangla Islamic song (Hamd) । Julfikar Hamd Naat" width="500" height="281" src="https://www.youtube.com/embed/eq567HOuXCg?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>
<div class="small-pto-title">
ক্ষমা করে দাও,মাফ করে দাও </div>
</div>
<div class="slide-small-img" onclick="currentDiv3(4)">
<div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
<div class="video">
<iframe title="মায়ের সুন্দর একটি গজল ২০১৮" width="500" height="281" src="https://www.youtube.com/embed/OcjUu0RtYTc?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> </div>
</div>
<div class="small-pto-title">
মায়ের সুন্দর একটি গজল ২০১৮ </div>
</div>
</div>
</div>
</div>

<script>
                                    var slideIndex = 1;
                                    showDivs3(slideIndex);

                                    function plusDivs(n) {
                                      showDivs3(slideIndex += n);
                                    }

                                    function currentDiv3(n) {
                                      showDivs3(slideIndex = n);
                                    }

                                    function showDivs3(n) {
                                      var i;
                                      var x = document.getElementsByClassName("mySlides3");
                                      var dots = document.getElementsByClassName("demo");
                                      if (n > x.length) {slideIndex = 1}
                                      if (n < 1) {slideIndex = x.length}
                                      for (i = 0; i < x.length; i++) {
                                         x[i].style.display = "none";
                                      }
                                      for (i = 0; i < dots.length; i++) {
                                         dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                                      }
                                      x[slideIndex-1].style.display = "block";
                                      dots[slideIndex-1].className += " w3-opacity-off";
                                    }
                                </script>

</div>
</div>
</div>
</section>

<section class="widget_section">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-6">
<div class="add">
<div class="widget_area"> <div class="textwidget"><p><img class="alignnone size-full wp-image-208" src="uploads/2019/03/biggapon.gif" alt width="100%" height="auto" /></p>
</div>
</div> </div>
</div>
<div class="col-md-6 col-sm-6">
<div class="add">
<div class="widget_area"> <div class="textwidget"><p><img class="alignnone size-full wp-image-208" src="uploads/2019/03/biggapon.gif" alt width="100%" height="auto" /></p>
</div>
</div> </div>
</div>
</div>
</div>
</section>

<section class="section_nine">
<div class="container">
<div class="cat_title_one">
                    @php
					$sevencat=DB::table('categories')->skip(6)->first();
					$sevencatpostbig=DB::table('posts')->where('cat_id',$sevencat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
					$sevencatpostsmall=DB::table('posts')->where('cat_id',$sevencat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->limit(8)->get();
					@endphp
						
<a href="{{ URL::to('post/'.$sevencat->id.'/'.$sevencat->category_bn ??'')}}"><i class="fa fa-bars"></i> {{ $sevencat->category_bn ??'' }} </a>
</div>
<div class="row">


                            @foreach($sevencatpostsmall as $row)	
                             @php
								$slug=preg_replace('/\s+/u', '-', trim($row->title_bn ??''));
							@endphp	
<div class="col-md-3 col-sm-3">
<div class="exclisive_news">
<div class="exclisive_news_image">
<img width="600" height="337" src="{{ asset($row->image ??'')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt /> </div>
<div class="content-padding">
<h4 class="hadding_02"><a href="{{ URL::to('view-post/'.$row->id.'/'.$slug ??'') }}">‘{{ $row->title_bn ??'' }}’</a></h4>
</div>
</div>
</div>
   @endforeach	 


</div>
</div>
</section>




	
	@endsection