<div class="row clearfix">
  <div class="col-sm-12">
      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
          <div class="form-line">
             {!! Form::text("title", null , ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Skill Title']) !!}
              @if ($errors->has('title'))
                <span class="help-block" style="color:red">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
              @endif
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group{{ $errors->has('range_skill') ? ' has-error' : '' }}">
          <div class="form-line">
             {!! Form::number("range_skill", null , ['class' => 'form-control', 'id' => 'range_skill', 'placeholder' => 'Skill Rang', 'min' => '0', 'max' => '100']) !!}
              @if ($errors->has('range_skill'))
                <span class="help-block" style="color:red">
                    <strong>{{ $errors->first('range_skill') }}</strong>
                </span>
              @endif
          </div>
      </div>
  </div>
  <div class="col-sm-12">
      <div class="form-group{{ $errors->has('color') ? ' has-error' : '' }}">
          <div class="form-line">
             {!! Form::select("color", getColor(), null, ['class' => 'form-control', 'id' => 'color', 'placeholder' => 'Skill Color Show']) !!}
              @if ($errors->has('color'))
                <span class="help-block" style="color:red">
                    <strong>{{ $errors->first('color') }}</strong>
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
