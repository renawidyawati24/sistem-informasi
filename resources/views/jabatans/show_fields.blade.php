<!-- Pegawai Id Field -->
<div class="col-sm-12">
    {!! Form::label('pegawai_id', 'Pegawai Id:') !!}
    <p>{{ $jabatan->pegawai_id }}</p>
</div>

<!-- Jabatan Field -->
<div class="col-sm-12">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    <p>{{ $jabatan->jabatan }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $jabatan->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $jabatan->updated_at }}</p>
</div>

