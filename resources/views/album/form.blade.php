

        <div class="form-group">
        {!! Form::label('AlbumName', 'Album Name:') !!}
        {!! Form::text('albumName',$value = null, array('class' =>'form-control', 'placeholder'=>'Album Name')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('ArtistId', 'Artist Id:') !!}
        {!! Form::text('artistId',$value = null, array('class' =>'form-control', 'placeholder'=>'Artist Id')) !!}
        </div>


        <div class="form-group">
        {!! Form::label('CompanyId', 'Company Id:') !!}
        {!! Form::text('companyId',$value = null, array('class' =>'form-control', 'placeholder'=>'companyId')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('AlbumGenre', 'Album Genre:') !!}
        {!! Form::text('albumGenre',$value = null, array('class' =>'form-control', 'placeholder'=>'Genre Name')) !!}
        </div>


        <div class="form-group">
        {!! Form::label('ReleaseDate', 'Released Year:') !!}
        {!! Form::text('releaseDate',$value = null, array('class' =>'form-control', 'placeholder'=>'Date')) !!}
        </div>
