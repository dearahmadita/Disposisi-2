<main>
    <div class="container-fluid">
        <h1 class="mt4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('surat_ajuan') ?>">Surat</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo site_url('surat_ajuan/save') ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label>NO SURAT <code>*</code></label>
                        <input type="text" class="form-control" name="no_surat" placeholder="NO SURAT MASUK PENGAJUAN" required />
                    </div>
                    <div class="mb-3">
                        <label>PERIHAL SURAT <code>*</code></label>
                        <input type="text" class="form-control" name="perihal" placeholder="PERIHAL SURAT" required />
                    </div>
                    <div class="mb-3">
                        <label>TANGGAL SURAT <code>*</code></label>
                        <input type="date" class="form-control" name="tgl_surat" placeholder="TANGGAL SURAT" required />
                    </div>
                    <div class="mb-3">
                        <label>SURAT DARI <code>*</code></label>
                        <input type="text" class="form-control" name="surat_from" placeholder="SURAT DARI" required />
                    </div>
                    <div class="mb-3">
                        <label>TUJUAN SURAT <code>*</code></label>
                        <input type="text" class="form-control" name="surat_to" placeholder="TUJUAN SURAT" required />
                    </div>
                    <div class="mb-3">
                        <label>KETERANGAN <code>*</code></label>
                        <textarea class="form-control" name="keterangan" placeholder="KETERANGAN" id="floatingTextarea2" style="height: 100px"/></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image">BERKAS SURAT (Photo)</label>
                        <input type="file" class="form-control" id="inputGroupFile01" name="image">
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save Data</button>
                </form>
            </div>
        </div>
        <div style="height: 100vh"></div>
    </div>
</main>