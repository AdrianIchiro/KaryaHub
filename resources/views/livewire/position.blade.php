<div>
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h4 class="fw-semibold mb-0">Posisi Pekerjaan</h4>
        <a wire:navigate href="{{ route('posisi-kerja.create') }}" class="btn btn-primary btn-icon">
            <i class="bx bx-plus"></i> Tambah Posisi
        </a>
    </div>

    <div class="card border-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Posisi</th>
                            <th>Gaji</th>
                            <th>Jobdesc</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($positions as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->position_name }}</td>
                                <td>Rp. {{ number_format($p->salary) }}</td>
                                <td>{{ $p->jobdesc }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a wire:navigate href="{{ route('posisi-kerja.edit', $p->id) }}"
                                            class="btn btn-warning text-white btn-icon">
                                            <i class="bx bx-edit"></i>
                                        </a>
                                        <button wire:click="delete({{ $p->id }})"
                                            class="btn btn-danger btn-icon">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
