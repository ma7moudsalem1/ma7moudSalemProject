

                              <div class="row clearfix">
                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <div class="form-line">
                                                {!! Form::text("name", null , ['class' => 'form-control', 'id' => 'name', 'placeholder' => 'Name']) !!}
                                                @if ($errors->has('name'))
                                                    <span class="help-block" style="color:red">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                          </div>
                                      </div>

                                      <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <div class="form-line">
                                              {!! Form::email("email", null , ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email']) !!}
                                                @if ($errors->has('email'))
                                                    <span class="help-block" style="color:red">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                      </div>
                                      @if(!isset($user))
                                      <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <div class="form-line">
                                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                                @if ($errors->has('password'))
                                                    <span class="help-block" style="color:red">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                      </div>

                                      <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                      </div>
                                    @endif
                                    <div class="col-sm-3" style="float:right">
                                      <button type="submit" class="btn btn-primary btn-block btn-lg">
                                        <i class="material-icons">save</i>
                                          Save
                                      </button>

                                    </div>
                                  </div>
