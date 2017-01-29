@extends('layouts.master')

@section('content')
<!-- start home -->
  <section id="home">
    <div class="container">
    <div class="banner-info">
    <div class="col-md-7 header-right">
      <h1>I'M {{ getProfile() }}</h1>
      <h6>{{ getProfile('job') }}</h6>
      <ul class="address">
        <li>
          <ul class="address-text">
            <li><b>PHONE </b></li>
            <li>{{ getProfile('mob') }}</li>
          </ul>
        </li>
        <li>
          <ul class="address-text">
            <li><b>ADDRESS </b></li>
            <li>{{ getProfile('address') }}</li>
          </ul>
        </li>
        <li>
          <ul class="address-text">
            <li><b>E-MAIL </b></li>
            <li><a href="mailto:{{ getProfile('email') }}"> {{ getProfile('email') }}</a></li>
          </ul>
        </li>

      </ul>
    </div>
    <div class="col-md-5 header-left">
      <img src="{{ checkImage(getMainImages()) }}" alt="{{ getProfile() }}">
    </div>
    <div class="clearfix"></div>

      </div>
    </div>
  </section>
  <!-- end home -->

  <!-- start about -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>ABOUT</span> ME</h2>
        </div>
                  <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
        <div class="media">
          <div class="media-heading-wrapper">
            <div class="media-object pull-left">
              <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <h3 class="media-heading">Personal Profile</h3>
          </div>
          <div class="media-body">
            <p>{{ getProfile('profile') }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
        <div class="media">
          <div class="media-heading-wrapper">
            <div class="media-object pull-left">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <h3 class="media-heading">My Education</h3>
          </div>
          <div class="media-body">
            <p>{{ getProfile('edu') }}</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
        <div class="media">
          <div class="media-heading-wrapper">
            <div class="media-object pull-left">
              <i class="fa fa-users"></i>
            </div>
            <h3 class="media-heading">Privous Traning</h3>
          </div>
          <div class="media-body">
            <p>{{ getProfile('tran') }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end about -->


    	<!-- start service -->
    	<section id="service">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">MY <span>SKILLS</span></h2>
    				</div>
                </div>
    				<div class="wow fadeInUp progress-sec">
            @foreach($skills as $skill)
  						<h4>{{ $skill->title }}</h4>
  						<div class="progress">
  						  <div class="progress-bar progress-bar-{{ setColor($skill->color) }}" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="{{ $skill->range_skill}}" style="width: {{ $skill->range_skill}}%">
  						    <span class="sr-only">{{ $skill->range_skill}}%</span>
  						  </div>
  						</div>
            @endforeach
    			</div>
    		</div>
    	</section>
    	<!-- end servie -->

      <!-- start portfolio -->
          	<section id="portfolio">
          		<div class="container">
          			<div class="row">
          				<div class="col-md-12">
          					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">MY <span>PORTFOLIO</span></h2>
          				</div>
                  @foreach($projects as $project)
          				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">

                          <img src="{{ checkImage($project->image) }}" class="img-responsive" alt="{{'portfolio - '.$project->title }}" />
                            <div class="portfolio-overlay">
                                <h4>{{ $project->title }}</h4>
                                <p>{{ $project->dis }}</p>
                                <a href="http://{{$project->link_url }}" target="_blank" class="btn btn-default">CLICK TO VISIT</a>
                            </div>
                      </div>
          				</div>
                  @endforeach





          			</div>
          		</div>
          	</section>
          	<!-- end portfolio -->


    	<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>CONTACT</span> ME</h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">

                {!! Form::open([
                    'method' => 'POST',
                    'url' => '/'
                    ]) !!}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    						    <label>NAME</label>
    						    <input name="name" type="text" class="form-control" id="name" required>
                        @if ($errors->has('name'))
                          <span class="help-block" style="color:red">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                        @endif
                </div>
                <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                    <label>Subject</label>
    						    <input name="subject" type="text" class="form-control" id="subject" required>
                        @if ($errors->has('subject'))
                          <span class="help-block" style="color:red">
                              <strong>{{ $errors->first('subject') }}</strong>
                          </span>
                        @endif
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>EMAIL</label>
                    <input name="email" type="email" class="form-control" id="email" required>
                      @if ($errors->has('email'))
                        <span class="help-block" style="color:red">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                      @endif
                </div>
                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                    <label>MESSAGE</label>
    						    <textarea name="message" rows="4" class="form-control" id="message"></textarea>
                    @if ($errors->has('message'))
                      <span class="help-block" style="color:red">
                          <strong>{{ $errors->first('message') }}</strong>
                      </span>
                    @endif
                </div>
                  <input type="submit" class="form-control">
                {!! Form::close() !!}
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<p class="address-title">FEEL FREE TO CONTACT WITH ME AT ANY TIME</p>

    						<p><i class="fa fa-phone"></i> {{ getProfile('mob') }}</p>
    						<p><i class="fa fa-envelope-o"></i> {{ getProfile('email') }}</p>
    					</address>
    					<ul class="social-icon">
    						<li><h4>YOU CAN FIND ME ALSO AT</h4></li>
                @foreach($social as $link)
    						<li><a href="{{'http://'.$link->link_url}}" target="_blank" title="{{ $link->name }}" class="{{ 'fa '.getIcon($link->fa) }}"></a></li>
                @endforeach
    					</ul>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end contact -->

@endsection
