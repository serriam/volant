@component('mail::message')

Hi <b>{{$name}}</b>,

{{ $edit_info }}

<style type="text/css">
.card{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}
.card-body{-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem}.card-title{margin-bottom:.75rem}
.badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem}a.badge:focus,a.badge:hover{text-decoration:none}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-primary{color:#fff;background-color:#007bff}a.badge-primary:focus,a.badge-primary:hover{color:#fff;background-color:#0062cc}.badge-secondary{color:#fff;background-color:#6c757d}a.badge-secondary:focus,a.badge-secondary:hover{color:#fff;background-color:#545b62}.badge-success{color:#fff;background-color:#28a745}a.badge-success:focus,a.badge-success:hover{color:#fff;background-color:#1e7e34}.badge-info{color:#fff;background-color:#17a2b8}a.badge-info:focus,a.badge-info:hover{color:#fff;background-color:#117a8b}.badge-warning{color:#212529;background-color:#ffc107}a.badge-warning:focus,a.badge-warning:hover{color:#212529;background-color:#d39e00}.badge-danger{color:#fff;background-color:#dc3545}a.badge-danger:focus,a.badge-danger:hover{color:#fff;background-color:#bd2130}.badge-light{color:#212529;background-color:#f8f9fa}a.badge-light:focus,a.badge-light:hover{color:#212529;background-color:#dae0e5}.badge-dark{color:#fff;background-color:#343a40}a.badge-dark:focus,a.badge-dark:hover{color:#fff;background-color:#1d2124}
#express{
	font-size: 15px;
}
.title{
	font-size: 22px;
	padding: 10px;
}
</style>

<div class="col-lg-12 card fill">
	<div class="title">
		<strong><h5 class="text-default" id="express-name">{{ $title }}</h5></strong>
	</div>
	<div class="card-body" id="express"> 
		<div>
			<strong>Amount:</strong>
			<span id="express-amount" class="badge badge-pill badge-info">{{ $price }}</span>
		</div>
		<div>
			<strong>Delivery Time:</strong>
			<span id="express-time" class="badge badge-pill badge-warning">{{ $time }}</span>
		</div>

	</div>
</div>

pay bill number is 3000

It looks neat, no?<br />

@component('mail::button', ['url' => $link])

Take Me Back <br/>

@endcomponent

Regards,<br />
Volant Couriers.

@endcomponent