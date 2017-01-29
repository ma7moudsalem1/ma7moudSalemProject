<div class="row clearfix">
  <div class="col-sm-12">
      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
          <div class="form-line">
             {!! Form::text("title", null , ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Project Title']) !!}
              @if ($errors->has('title'))
                <span class="help-block" style="color:red">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
              @endif
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group{{ $errors->has('link_url') ? ' has-error' : '' }}">
          <div class="form-line">
             {!! Form::text("link_url", null , ['class' => 'form-control', 'id' => 'link_url', 'placeholder' => 'Project Link']) !!}
              @if ($errors->has('link_url'))
                <span class="help-block" style="color:red">
                    <strong>{{ $errors->first('link_url') }}</strong>
                </span>
              @endif
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group{{ $errors->has('dis') ? ' has-error' : '' }}">
          <div class="form-line">
             {!! Form::textarea("dis", null , ['class' => 'form-control', 'id' => 'dis', 'placeholder' => 'Project Description']) !!}
              @if ($errors->has('dis'))
                <span class="help-block" style="color:red">
                    <strong>{{ $errors->first('dis') }}</strong>
                </span>
              @endif
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
          <div class="form-line">
             {!! Form::file("image", null , ['class' => 'form-control', 'id' => 'image']) !!}
              @if ($errors->has('image'))
                <span class="help-block" style="color:red">
                    <strong>{{ $errors->first('image') }}</strong>
                </span>
              @endif
          </div>
      </div>
      @if(isset($projectSingle))

          {!! Html::image(checkImage($projectSingle->image), $projectSingle->title, ['width' => '100']) !!}

      @endif
  </div>
  <div class="col-sm-3" style="float:right">
      <button type="submit" class="btn btn-primary btn-block btn-lg">
          <i class="material-icons">save</i>
          Save
      </button>
  </div>
</div>
