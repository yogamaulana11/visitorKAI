<div>
    <div class="col py-3">
        <h2>Edit Data Tamu</h2>
        <form wire:submit.prevent="editTamu" class="container border border-2 shadow-lg rounded-2">
            <div class="mb-3 mt-3">
                <label class="form-label">Nama Lengkap</label>
                <input wire:model="nama" type="text" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label class="form-label">Kontak</label>
                <input wire:model="kontak" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Instansi</label>
                <input wire:model="instansi" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Tujuan</label>
                <input wire:model="tujuan" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Keperluan</label>
                <input wire:model="keperluan" type="text" class="form-control">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-4 mt-4">
                <div wire:click="showEdit('{{ $this->id_tamu }}')" class="btn text-white me-md-2"
                    style="background-color: #2D2A70;" type="button">Batal</div>
                <button class="btn text-white" style="background-color: #ED6B23;" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
