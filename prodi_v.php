<div class="container back-ground">
    <!--  -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="#">LPPM</a></li>
            <li class="breadcrumb-item active" aria-current="page">Buku Ajar / Teks Pengabdian</li>
        </ol>
    </nav>
    <!--  -->

    <!--  -->
    <div class="Tahun">
        <label for="Tahun" class="col">Pilih Tahun</label>
        <div class="col-sm-3">
            <select class="form-control col-sm-4 select-2" name="" id="Tahun">
                <?php foreach ($Tahun as $key) : ?>
                    <option value="<?= $key->Tahun ?>"><?= $key->Tahun; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>





    <div class="Prodi">
        <label for="Prodi" class="col">Pilih Prodi</label>
        <div class="col-sm-3">
            <select class="form-control col-sm-4 select-2" name="" id="Prodi">
                <?php foreach ($Ref_Prodi as $value) : ?>
                    <option value="<?= $value->Kd_Fakultas ?>"><?= $value->Nama_Prodi; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <!--  -->

    <style>
        th {background-color: #F1C27D;}
    </style>
    

    <!--  -->
    <div class="tabel pt-4 pb-4">
        <button class="ml-2 btn btn-primary btn-sm mb-2" id="export-excel">Export Excel</button>

        <table class="table table-bordered table-hover tabel-1" id="table-export">
            <thead>
                <tr>
                    <th class="text-center" style="max-width: 250px;" rowspan="2">Program Studi</th>
                    <th class="text-center" colspan="2">Hibah Dikti</th>
                    <th class="text-center" colspan="2">Hibah Internal</th>
                    <th class="text-center" colspan="2">Mandiri</th>
                    <th class="text-center" colspan="8">Karya Ilmiah</th>
                    <th class="text-center" rowspan="2">Kegiatan Institusi</th>
                </tr>
                <tr>
                    <th class="text-center">Penelitian</th>
                    <th class="text-center">Pengabdian</th>
                    <th class="text-center">Penelitian</th>
                    <th class="text-center">Pengabdian</th>
                    <th class="text-center">Penelitian</th>
                    <th class="text-center">Pengabdian</th>
                    <th class="text-center">Buku</th>
                    <th class="text-center">Hki</th>
                    <th class="text-center">Jurnal Internasional</th>
                    <th class="text-center">Jurnal Nasional Terakreditasi</th>
                    <th class="text-center">Jurnal Nasional Tidak Terakreditasi</th>
                    <th class="text-center">Prosiding Internasional</th>
                    <th class="text-center">Prosiding Nasional</th>
                    <th class="text-center">Prosiding Regional</th>
                </tr>
            </thead>
            <tbody id="body-tabel-1">

            </tbody>
        </table>
    </div>
    <!--  -->
</div>





