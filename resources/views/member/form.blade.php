        <div class="form-group">
        {!! Form::label('memberName', 'Name:') !!}
        {!! Form::text('memberName',$value = null, array('class' =>'form-control', 'placeholder'=>'User Name')) !!}
        </div>
        
        <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', $value = null, array('class' =>'form-control', 'placeholder'=>'Email Address')) !!}
        </div>

         <div class="form-group">
        {!! Form::label('confirm_email', 'Confirm Email:') !!}
        {!! Form::email('email_confirmation', $value = null, array('class' =>'form-control', 'placeholder'=>'Confirm Email')) !!}
        </div>

         <div class="form-group">
        {!! Form::label('password', 'Password:') !!} <br>
        {!! Form::password('password', $value = null, array('class' =>'form-control', 'placeholder'=>'password')) !!}
        </div>


         <div class="form-group">
        {!! Form::label('confirm_password', 'Confirm Password:') !!} <br>
        {!! Form::password('password_confirmation', $value = null, array('class' =>'form-control', 'placeholder'=>'password')) !!}
        </div>

        {!! Form::submit($submitButtonText, array('class' => 'btn btn-primary')) !!}