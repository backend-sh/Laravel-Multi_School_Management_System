
      <div class="modal-body">

      @if(auth()->user()->group == "Admin")
                  <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <select class="form-control" name="school_id" id="school_id">
                            <option>Choose School</option>
                            @foreach (auth()->user()->school->all() as $school)
                            <option value="{{ $school->id }}"
                            @if(isset($role)){{$role->school_id == $school->id ? 'selected' : ''}} @endif >
                            {{$school->name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    @else
                      <input type="hidden" name="school_id" id="school_id" value="{{auth()->user()->school->id}}">
                  @endif

        <!-- {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Role']) !!} -->
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Role"  @if(isset($role)) value="{{$role->name}}" @endif>

      </div>
      <div class="modal-footer">
      @if(!isset($role))
        {!! Form::submit('Create Role', ['class' => 'btn btn-dark btn-round']) !!}
      @else
      {!! Form::submit('Update Role', ['class' => 'btn btn-dark btn-round']) !!}
      @endif
      </div>
