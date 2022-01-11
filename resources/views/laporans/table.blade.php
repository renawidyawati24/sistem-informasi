<div class="table-responsive">
    <table class="table" id="laporans-table">
        <thead>
            <tr>
                <th>Nomor</th>
        <th>Nama</th>
        <th>Deskripsi</th>
        <th>File</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($laporans as $laporan)
            <tr>
                <td>{{ $laporan->nomor }}</td>
            <td>{{ $laporan->nama }}</td>
            <td>{{ $laporan->deskripsi }}</td>
            <td>{{ $laporan->file }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['laporans.destroy', $laporan->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('laporans.show', [$laporan->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('laporans.edit', [$laporan->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
