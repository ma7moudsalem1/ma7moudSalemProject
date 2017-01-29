<div class="row clearfix">
  <div class="col-sm-12">
      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
          <div class="form-line">
             {!! Form::text("name", null , ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Link Title']) !!}
              @if ($errors->has('name'))
                <span class="help-block" style="color:red">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
              @endif
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group{{ $errors->has('link_url') ? ' has-error' : '' }}">
          <div class="form-line">
             {!! Form::text("link_url", null , ['class' => 'form-control', 'id' => 'link_url', 'placeholder' => 'Link Url']) !!}
              @if ($errors->has('link_url'))
                <span class="help-block" style="color:red">
                    <strong>{{ $errors->first('link_url') }}</strong>
                </span>
              @endif
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group{{ $errors->has('fa') ? ' has-error' : '' }}">
          <div class="form-line">
             {!! Form::select("fa", $fa, null, ['class' => 'form-control', 'id' => 'fa', 'placeholder' => 'Icon']) !!}
              @if ($errors->has('fa'))
                <span class="help-block" style="color:red">
                    <strong>{{ $errors->first('fa') }}</strong>
                </span>
              @endif
          </div>
      </div>
  </div>
  <div class="col-sm-3" style="float:right">
      <button type="submit" class="btn btn-primary btn-block btn-lg">
          <i class="material-icons">save</i>
          Save
      </button>
  </div>
</div>
