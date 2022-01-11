<!-- Nip Field -->
<div class="col-sm-12">
    {!! Form::label('nip', 'Nip:') !!}
    <p>{{ $pegawai->nip }}</p>
</div>

<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $pegawai->nama }}</p>
</div>

<!-- Telepon Field -->
<div class="col-sm-12">
    {!! Form::label('telepon', 'Telepon:') !!}
    <p>{{ $pegawai->telepon }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $pegawai->alamat }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $pegawai->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $pegawai->updated_at }}</p>
</div>

