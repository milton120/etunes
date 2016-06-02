

        <div class="form-group">
        {!! Form::label('SongTitle', 'Song Title:') !!}
        {!! Form::text('songTitle',$value = null, array('class' =>'form-control', 'placeholder'=>'Song Title')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('ArtistId', 'Artist Id:') !!}
        {!! Form::text('artistId',$value = null, array('class' =>'form-control', 'placeholder'=>'Artist Id')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('AlbumId', 'Album Id:') !!}
        {!! Form::text('albumId',$value = null, array('class' =>'form-control', 'placeholder'=>'Album Id')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('GenreId', 'Genre Id:') !!}
        {!! Form::text('genreId',$value = null, array('class' =>'form-control', 'placeholder'=>'Genre Id')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('Duration', 'Duration:') !!}
        {!! Form::text('duration',$value = null, array('class' =>'form-control', 'placeholder'=>'Duration')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('Price', 'Price:') !!}
        {!! Form::text('price',$value = null, array('class' =>'form-control', 'placeholder'=>'price')) !!}
        </div>

        <div class="form-group">
        {!! Form::label('Language', 'Language:') !!}
        {!! Form::text('language',$value = null, array('class' =>'form-control', 'placeholder'=>'Language')) !!}
        </div>