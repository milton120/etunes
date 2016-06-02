        <div class="form-group">
        {!! Form::label('CompanyName', 'Company Name:') !!}
        {!! Form::text('companyName',$value = null, array('class' =>'form-control', 'placeholder'=>'Company Name')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('ContactNumber', 'Contact Number:') !!}
        {!! Form::text('contactNumber',$value = null, array('class' =>'form-control', 'placeholder'=>'Contact Number')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('CompanyEmail', 'Email:') !!}
        {!! Form::text('companyEmail',$value = null, array('class' =>'form-control', 'placeholder'=>'email')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('CompanyAddress', 'Address:') !!}
        {!! Form::text('address',$value = null, array('class' =>'form-control', 'placeholder'=>'Address')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('CompanyCountry', 'Country:') !!}
        {!! Form::text('companyCountry',$value = null, array('class' =>'form-control', 'placeholder'=>'Country')) !!}
        </div>