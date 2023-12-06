
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
									<div class="name" >{{ Auth::user()->name }}</div>
									<span><img src="{{asset(Auth::user()->image)}}" width="50px"></span>
								</td>
								
							</tr>
							<tr>
								<td class="details-td">
									<div class="label">Phone</div> : <div class="phone">{{ Auth::user()->name }}</div>
									<br><div class="label">Mobile</div> : <div class="mobile">+91 1234 567 890</div>
									<br><div class="label">Email</div> : <div class="email">user@domain.com</div>
								</td>
								<td class="description-td">
									<img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDI2OC43MjUgMjY4LjcyNSIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMjY4LjcyNSAyNjguNzI1OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjE2cHgiIGhlaWdodD0iMTZweCI+CjxnIGlkPSJFZGl0Ij4KCTxwYXRoIHN0eWxlPSJmaWxsLXJ1bGU6ZXZlbm9kZDtjbGlwLXJ1bGU6ZXZlbm9kZDsiIGQ9Ik0xNjEuMzU5LDU2LjMzN2MtNy4wNDEtNy4wNDktMTguNDU4LTcuMDQ5LTI1LjQ5OCwwbC02LjM3NCw2LjM4MSAgIGwtODkuMjQzLDg5LjMzN2wwLjAyMywwLjAyM2wtMi44MTIsMi44MmMwLDAtOC45NjgsOS4wMzItMjkuMjE2LDc0LjM5OWMtMC4xNDIsMC40NTctMC4yODMsMC45MTEtMC40MjYsMS4zNzQgICBjLTAuMzYxLDEuMTcxLTAuNzI2LDIuMzYxLTEuMDk0LDMuNTY3Yy0wLjMyNiwxLjA2Ni0wLjY1NiwyLjE1NC0wLjk4NywzLjI0OWMtMC4yNzksMC45MjMtMC41NTYsMS44MzYtMC44MzksMi43NzkgICBjLTAuNjQyLDIuMTQtMS4yOTIsNC4zMTgtMS45NTUsNi41NjdjLTEuNDU1LDQuOTM3LTUuMDA5LDE2LjA3LTAuOTksMjAuMWMzLjg3LDMuODgyLDE1LjEyLDAuNDY3LDIwLjA0My0wLjk5MyAgIGMyLjIzMi0wLjY2Miw0LjM5NS0xLjMxMSw2LjUxOS0xLjk1MmMwLjk4MS0wLjI5NiwxLjkzMi0wLjU4NiwyLjg5MS0wLjg3OGMxLjAzMS0wLjMxNCwyLjA1Ny0wLjYyNiwzLjA2Mi0wLjkzNSAgIGMxLjI2OS0wLjM5LDIuNTItMC43NzUsMy43NS0xLjE1N2MwLjM2Ny0wLjExNCwwLjcyNy0wLjIyNywxLjA5MS0wLjM0YzYyLjE5Mi0xOS4zNjUsNzMuMzU3LTI4LjQ1Myw3NC4yODUtMjkuMjg0ICAgYzAuMDA3LTAuMDA1LDAuMDA3LTAuMDA1LDAuMDEyLTAuMDFjMC4wMzktMC4wMzYsMC4wNjYtMC4wNiwwLjA2Ni0wLjA2bDIuODc5LTIuODg2bDAuMTkzLDAuMTkzbDg5LjI0NS04OS4zMzdsLTAuMDAxLTAuMDAxICAgbDYuMzc0LTYuMzgxYzcuMDQxLTcuMDQ4LDcuMDQxLTE4LjQ3NiwwLTI1LjUyNUwxNjEuMzU5LDU2LjMzN3ogTTEwMy4zOTksMjE5Ljc4MmMtMC4wNzgsMC4wNTMtMC4xODQsMC4xMjItMC4yOTYsMC4xOTMgICBjLTAuMDYyLDAuMDQtMC4xMzcsMC4wODctMC4yMTEsMC4xMzNjLTAuMDc1LDAuMDQ3LTAuMTU3LDAuMDk4LTAuMjQ0LDAuMTUxYy0wLjA3NywwLjA0Ny0wLjE1NywwLjA5NS0wLjI0MywwLjE0NyAgIGMtMi45NjksMS43NzctMTEuNjgyLDYuMzYyLTMyLjgyOCwxNC4wMTdjLTIuNDcxLDAuODk0LTUuMTYyLDEuODQyLTcuOTgxLDIuODE5bC0zMC4wNi0zMC4wOTFjMC45OC0yLjg0LDEuOTI5LTUuNTUxLDIuODI2LTguMDQxICAgYzcuNjM4LTIxLjIzNSwxMi4yMTktMjkuOTc0LDEzLjk4Ni0zMi45MzljMC4wNDMtMC4wNzEsMC4wODItMC4xMzYsMC4xMjEtMC4yYzAuMDYyLTAuMTAyLDAuMTItMC4xOTcsMC4xNzQtMC4yODQgICBjMC4wNDMtMC4wNjksMC4wODgtMC4xNDEsMC4xMjYtMC4yYzAuMDcxLTAuMTExLDAuMTQtMC4yMTcsMC4xOTMtMC4yOTZsMi4yLTIuMjA2bDU0LjQ4NSw1NC41NDJMMTAzLjM5OSwyMTkuNzgyeiBNMjYzLjM1MSw1Ni4zMzcgICBsLTUwLjk5Ny01MS4wNWMtNy4wNDEtNy4wNDgtMTguNDU2LTcuMDQ4LTI1LjQ5OCwwbC0xMi43NDgsMTIuNzYzYy03LjA0MSw3LjA0OC03LjA0MSwxOC40NzYsMCwyNS41MjRsNTAuOTk2LDUxLjA1ICAgYzcuMDQsNy4wNDgsMTguNDU3LDcuMDQ4LDI1LjQ5OCwwbDEyLjc0OS0xMi43NjJDMjcwLjM5Miw3NC44MTMsMjcwLjM5Miw2My4zODUsMjYzLjM1MSw1Ni4zMzd6IiBmaWxsPSIjODg4ODg4Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" class="edit">
									<div class="description" spellcheck="false">This is a Short Description of the Client</div>
									
									<input type="button" value="Update" class="update">
								</td>
							</tr>
						</table>
					</div>
				
							
							
					</div>
					
@stop