<!-- Pegawai Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pegawai_id', 'Pegawai:') !!}
    {{ Form::select('pegawai_id', App\Models\Pegawai::get()->pluck('nama', 'id')->prepend('--Pilih Pegawai--',''), null, ['class' => 'form-control', 'id' => 'pegawai_id']) }}
</div>

<!-- Jabatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    {!! Form::text('jabatan', null, ['class' => 'form-control']) !!}
</div>