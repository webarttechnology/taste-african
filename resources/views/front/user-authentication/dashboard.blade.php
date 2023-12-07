
<style>
	@import url(https://fonts.googleapis.com/css?family=Roboto+Condensed:300);

body {
	background: #c2e59c; /* fallback for old browsers */
	background: -webkit-linear-gradient(to left, #c2e59c , #64b3f4); /* Chrome 10-25, Safari 5.1-6 */
	background: linear-gradient(to left, #c2e59c , #64b3f4); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ 
	
	color: #666;
	font-family: 'Roboto Condensed', sans-serif;
}

table {
	 /* position: absolute;
	top: 50%;
	left: 50%; */
	/*transition: all 0.2s ease;	
	transform: translateX(-50%) translateY(-50%);	 */
	padding: 20px;
}

.name {
	font-size: 30px;
	border-bottom: 2px solid #888;
	margin-bottom: 20px;
}
.name:first-letter {
	font-size: 300%;
}

.label {
	width: 70px;
	font-weight: bold;
}

.label, .phone, .mobile, .email {
	display: inline-block;
}

.details-td {
	border-right: 1px solid #eee;
	white-space: nowrap;
	
	padding: 20px;
	padding-right: 30px;
}

.description-td {
	position: relative;
	width: 100%;
	padding: 20px;
	padding-left: 30px;
	padding-right: 30px;
	text-align: justify;
	margin-top: 15px;
}
	.description {
		outline: 0px solid transparent;
		border: 0px solid transparent;
	}
	.edit {
		position: absolute;
		top: 0px;
		right: 0;
		
		width: 13px;
		height: 13px;
		
		cursor: pointer;
	}
	.update {
		display: none;
		position: absolute;
		right: 20px;
		bottom: 0;
		background: #c2e59c;
		border: 0;
		padding: 5px;
		width: 80px;
		color: #333;
		outline: 0px solid transparent;
		border: 0px solid transparent;
	}
</style>
@extends('front.layout.app')
@section('content')
			
			<!-- =============================== Dashboard Header ========================== -->
			<section class="bg-cover position-relative" style="background:url({{asset('front/img/cover.jpg')}}) no-repeat #C90000;">
				<div class="abs-list-sec"><a href="{{route ('business_listing')}}" class="add-list-btn"><i class="fas fa-plus me-2"></i>Add Listing</a></div>
				<div class="container">
					<div class="row">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								
							<div class="dashboard-head-author-clicl">
								<div class="dashboard-head-author-thumb">
									@if(Auth::user()->image === null)
									<img src="{{asset('front/img/user.png')}}" class="img-fluid" alt="" />
									@else
									<img src="{{ asset(Auth::user()->image) }}" class="img-fluid" alt="" />
									@endif
								</div>
								<div class="dashboard-head-author-caption">
									<div class="dashploio"><h4>{{ Auth::user()->name }}</h4></div>									
								</div>
							</div>
						
						</div>
					</div>
				</div>
			</section>
			<!-- =============================== Dashboard Header ========================== -->
			
			<!-- ======================= dashboard Detail ======================== -->
			<div class="goodup-dashboard-wrap gray px-4 py-5">
							

				@include('front.layout.sidebar')
				
				<div class="goodup-dashboard-content">			
					
					<div class="dashboard-widg-bar d-block">
						<div class="row">	
						<table>
							<tr>
								<td colspan="3">
									<div class="name" >{{ $userWithInfo->name }}</div>
									<span><img src="{{asset($userWithInfo->image)}}" width="50px"></span>
								</td>
								
							</tr>
							<tr>
								<td class="details-td">
									<div class="label">Phone</div> : <div class="phone">{{ $userWithInfo->phone }}</div>
									<br><div class="label">Mobile</div> : <div class="mobile">{{ $userWithInfo->name }}</div>
									<br><div class="label">City</div> : <div class="email">{{ $userWithInfo->city }}</div>
								</td>
								<td class="description-td">
									<img src="{{asset('front\img\edit.png')}}" class="edit" width="55px;">
									<div class="description" spellcheck="false">This is a Short Description of the Client</div>
									
									<input type="button" value="Update" class="update">
								</td>
							</tr>
						</table>
					</div>
				
							
							
					</div>
					
@stop