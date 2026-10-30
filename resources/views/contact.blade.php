@extends('layouts.frontend.app')

@section('title', 'A Best Online Learning Platform')

@push('css')

@endpush

@section('content')
<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Contact Us</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- How It's Work -->
	<section class="our-contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-placeholder-1"></span></div>
						<h4>Our Location</h4>
						<p>Collin Street West, Victor 8007, Australia.</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-phone-call"></span></div>
						<h4>Our Location</h4>
						<p class="mb0">Mobile: (+096) 468 235 <br> Fax: (+096) 468 235</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-email"></span></div>
						<h4>Write Some Words</h4>
						<p><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3faddd5dcf3d6d7c6deca9dd0dcde">[email&#160;protected]</a></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.788556429705!2d90.37417781498144!3d23.75491838458724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8ada2664e21%3A0x3c872fd17bc11ddb!2sCSE%20Building%2C%20Daffodil%20International%20University!5e0!3m2!1sen!2sus!4v1595177755028!5m2!1sen!2sus" width="600" height="550" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div class="col-lg-6 form_grid">
					<h4 class="mb5">Send a Message</h4>
					<p>Ex quem dicta delicata usu, zril vocibus maiestatis in qui.</p>
		            <form class="contact_form" id="contact_form" name="contact_form" action="{{ route('contact.send') }}" method="post" novalidate="novalidate">
		            	@csrf
						<div class="row">
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputName">Full Name</label>
									<input id="name" name="name" class="form-control" required="required" type="text">
								</div>
			                </div>
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputEmail">Your Email</label>
			                    	<input id="email" name="email" class="form-control required email" required="required" type="email">
			                    </div>
			                </div>
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputSubject">Subject</label>
				                    <input id="subject" name="subject" class="form-control required" required="required" type="text">
								</div>
			                </div>
			                <div class="col-sm-12">
	                            <div class="form-group">
	                            	<label for="exampleInputEmail1">Your Message</label>
	                                <textarea id="message" name="message" class="form-control required" rows="5" required="required"></textarea>
	                            </div>
			                    <div class="form-group ui_kit_button mb0">
				                    <button type="submit" class="btn dbxshad btn-lg btn-thm circle white">Button</button>
			                    </div>
			                </div>
		                </div>
		            </form>
				</div>
			</div>
		</div>
	</section>
@endsection

@push('script')

@endpush