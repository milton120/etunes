       

        <div class="form-group">
        {!! Form::label('ArtistName', 'Artist Name:') !!}
        {!! Form::text('artistName',$value = null, array('class' =>'form-control', 'placeholder'=>'Artist Name')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('Country', 'Artist Country:') !!}
        {!! Form::text('country',$value = null, array('class' =>'form-control', 'placeholder'=>'Country')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('Region', 'Artist Region:') !!}
        {!! Form::text('region',$value = null, array('class' =>'form-control', 'placeholder'=>'Region')) !!}
        </div>