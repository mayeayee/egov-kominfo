<?php

namespace Database\Seeders;

use App\Models\Aplikasi;
use App\Models\Data_OPD;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AplikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'SETDA Kab Magetan')->pluck('id')->first(),
            'nama_aplikasi' => 'lpse.magetan.go.id',
            'deskripsi' => 'layanan pengelolaan teknologi informasi untuk memfasilitasi pelaksanaan Pengadaan Barang/Jasa secara elektronik',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'SETDA Kab Magetan')->pluck('id')->first(),
            'nama_aplikasi' => 'jdih.magetan.go.id',
            'deskripsi' => 'Aplikasi jaringan dokumentasi hukum terintegrasi dengan provinsi',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'SETDA Kab Magetan')->pluck('id')->first(),
            'nama_aplikasi' => 'SIMDALEV | RFK ADBANG',
            'deskripsi' => 'Aplikasi Untuk merekap Data RFK ( Adbang )',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'SETDA Kab Magetan')->pluck('id')->first(),
            'nama_aplikasi' => 'simbatan',
            'deskripsi' => 'Aplikasi Sistem Informasi Pengadaan barang dan Jasa',
            'keterangan' => 'Development',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'SETDA Kab Magetan')->pluck('id')->first(),
            'nama_aplikasi' => 'E- SKM',
            'deskripsi' => 'Survey Kepuasan Masyarakat - Ortala',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'SETDA Kab Magetan')->pluck('id')->first(),
            'nama_aplikasi' => 'SIHARKO',
            'deskripsi' => 'Aplikasi ketersedian harga bahan pokok  (bagian perekonomian)',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'magetankab.sipd.kemendagri.go.id & penatausahaan',
            'deskripsi' => 'Aplikasi pemerintah daerah milik kemendagri. Kominfo bertugas untuk mendampingi dan Inisiasi',
            'keterangan' => 'Perbaikan RAK kelurahan dan bagian yang masih error di SIPD pusat dan backup data aspirasi masyarakat',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'damai.magetan.go.id',
            'deskripsi' => 'Aplikasi yang memuat data perencanaan pembangunan daerah, analisis dan profile pembangunan daerah',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'RUMAH INOVASI',
            'deskripsi' => 'Aplikasi untuk mengelola inovasi dari OPD dan masyarakat',
            'keterangan' => 'Menunggu UAT',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'sakip.magetan.go.id',
            'deskripsi' => 'Aplikasi untuk menampilkan hasil SAKIP dari rpjm',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'sippd untuk RKPD dan PPAS (e-planning.magetan.go.id/sippd)',
            'deskripsi' => 'Masih bagian dari e-planning tapi dengan user dan modul aplikasi tersendiri',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Antrian',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'rpjm.magetan.go.id',
            'deskripsi' => 'Aplikasi input data RPJM',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'SAKIP New',
            'deskripsi' => 'Ortala dan Bappeda',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Antrian',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'SIMDALEV | Monev',
            'deskripsi' => 'Aplikasi untuk mencetak data monev',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Kesatuan Bangsa dan Politik')->pluck('id')->first(),
            'nama_aplikasi' => 'e-planning.magetan.go.id',
            'deskripsi' => 'Aplikasi meliputi RENSTRA, RKPD, RENJA, manajemen SSH, integrasi dengan e-budgeting, SIPD, integrasi dengan SIPD kemendagri, Musrembang kecamatan.',
            'keterangan' => 'Sudah tidak di pakai, tapi datanya mungkin masih digunakan untuk monev',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Kepegawaian Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'kesbangpol.magetan.go.id',
            'deskripsi' => 'Aplikasi rekapitulasi perhitungan suara pemilu',
            'keterangan' => 'Dipakai ketika masa pemilu atau pilkada',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Kepegawaian Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'simpeg.magetan.go.id',
            'deskripsi' => 'Aplikasi data kepegawaian, e-file, absensi, kenaikan pangkat, e-personal, ',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Kepegawaian Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'e-personal (Mobile)',
            'deskripsi' => 'Aplikasi untuk melihat data ASN di magetan',
            'keterangan' => 'Data bisa dilihat di simpeg',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Kepegawaian Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'Redok/ E-file',
            'deskripsi' => 'Aplikasi untuk arsip file PNS. Bagian dari SIMPEG',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Kepegawaian Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'SIPEKAT',
            'deskripsi' => 'Aplikasi kenaikan pangkat. Bagian dari simpeg milik BKD',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Kepegawaian Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'e-kinerja.magetan.go.id',
            'deskripsi' => 'Aplikasi untuk penilaian kinerja ASN',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Pemberdayaan Masyarakat dan Desa')->pluck('id')->first(),
            'nama_aplikasi' => 'e-kinerja (Mobile)',
            'deskripsi' => 'e-kin versi mobile',
            'keterangan' => 'Aplikasi pihak ke 3(ITS), Masih testing',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'siskeudes (Desktop)',
            'deskripsi' => 'Pendampingan penerapan aplikasi keuangan desa yang dikelola oleh bapernas',
            'keterangan' => 'Aplikasi dari BPKB, servernya di kominfo',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'mail.magetan.go.id',
            'deskripsi' => 'Domain email magetan',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'registrasi.magetan.go.id',
            'deskripsi' => 'Aplikasi pendaftaran domain dan email',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'sideskel.magetan.go.id',
            'deskripsi' => 'Aplikasi website desa dengan berbagai layanan terintegrasi',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'lppl.magetan.go.id',
            'deskripsi' => 'Aplikasi untuk streaming radio magetan indah',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'lapak.magetan.go.id',
            'deskripsi' => 'Aplikasi jual beli UMKM',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'covid19.magetan.go.id',
            'deskripsi' => 'Aplikasi untuk update covid 19',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'ppid.magetan.go.id',
            'deskripsi' => 'Aplikasi pejabat pengelola informasi dan komunikasi',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'magetan.go.id',
            'deskripsi' => 'Website magetan versi 1',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'GITLAB',
            'deskripsi' => 'Aplikasi manajemen project dan repository code lokal untuk efiensi pengembangan aplikasi di pemkab',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'Admin Data Center',
            'deskripsi' => 'Monitoring proxmox sebagai aplikasi manajemen data center mendampingi tim Jaringan',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'vesta panel WEBOPD',
            'deskripsi' => 'Aplikasi manajemen web OPD yang dikelola oleh tim tata kelola. web masing" dinas, lihat servernya',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'NEXTCLOUD',
            'deskripsi' => 'Aplikasi untuk file sharing, form sharing dan chatting',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'dprd.magetan.go.id',
            'deskripsi' => 'Web dprd untuk informasi dan input pokir juga aspirasi masyaraka',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'e-office',
            'deskripsi' => 'Aplikasi surat menyurat dan pengarsipan',
            'keterangan' => 'Development',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'Dashboard magetan | SIEMA',
            'deskripsi' => 'Aplikasi magetan dalam angka',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'magetan.go.id',
            'deskripsi' => 'Website magetan versi 2',
            'keterangan' => 'Menunggu kepastian IKP untuk Go Live',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'Ruang rapat',
            'deskripsi' => 'Aplikasi untuk pemesanan ruang rapat',
            'keterangan' => 'Development',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'Absensi mobile',
            'deskripsi' => 'Aplikasi absensi PNS di magetan mobile',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'E- Buku Tamu',
            'deskripsi' => 'Aplikasi Untuk mencatat Tamu ',
            'keterangan' => 'Development',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'nama_aplikasi' => 'Visit Magetan',
            'deskripsi' => 'Aplikasi Web untuk mengenalkan Magetan (IKP)',
            'keterangan' => 'Development',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'Bantuan dan hibah',
            'deskripsi' => 'Aplikasi untuk mengelola bantuan dan hibah',
            'keterangan' => 'Permintaan bupati. OPD PJ belum ada, masih menunggu untuk presentasi konsep ke kadin baru',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'SIMDA KEUANGAN (Desktop)',
            'deskripsi' => 'Pendampingan penerapan simda keuangan yang dikelola oleh BPPKAD',
            'keterangan' => 'Aplikasi dari BPKP',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'ASET (Desktop)',
            'deskripsi' => 'Aplikasi untuk pendataan aset daerah',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'sismiop (Desktop)',
            'deskripsi' => 'Aplikasi PBB',
            'keterangan' => 'Server di bappeda',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'e-bphtb.magetan.go.id',
            'deskripsi' => 'Aplikasi untuk pembayaran pajak terintegrasi',
            'keterangan' => 'Nitip server di kominfo',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'SIMDA BOS (Desktop)',
            'deskripsi' => 'Aplikasi keuangan untuk bantuan opersional sekolah',
            'keterangan' => 'Nitip server di kominfo',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'SIMGAJI (Desktop)',
            'deskripsi' => 'Aplikasi untuk penggajian',
            'keterangan' => 'Nitip server di kominfo',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'esptpd',
            'deskripsi' => 'Aplikasi Pajak',
            'keterangan' => 'Nitip server di kominfo',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah')->pluck('id')->first(),
            'nama_aplikasi' => 'Payment Gateway',
            'deskripsi' => 'BPPKAD bagian keuangan kerja sama dengan BNI dan kantor pos untuk pembayaran PBB dan ebhtp',
            'keterangan' => 'Perlu ke bagian keuangan untuk alur kerja sismiop dan ebhtp',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Kependudukan dan Catatan sipil')->pluck('id')->first(),
            'nama_aplikasi' => 'antrian-disduk.magetan.go.id',
            'deskripsi' => 'Aplikasi pendaftaran antrian pelayanan',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Tanaman Pangan, Hortikultura, Perkebunan dan Ketahanan Pangan')->pluck('id')->first(),
            'nama_aplikasi' => 'PAK TANI',
            'deskripsi' => 'Aplikasi rekap data tanaman',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Pekerjaan Umum dan Penataan Ruang')->pluck('id')->first(),
            'nama_aplikasi' => 'PUPR SDA',
            'deskripsi' => 'Aplikasi pencatatan, pengelolaan, pelaporan data hujan dan realisasi pengairan terhadap tanman',
            'keterangan' => 'Minta penambahan fitur limpasan',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Perhubungan')->pluck('id')->first(),
            'nama_aplikasi' => 'SIMPKB  (pihak ke3)',
            'deskripsi' => 'Aplikasi uji KIR lokal, pendaftaran dan cetak hasil uji KIR lokal, aplikasi android untuk pendaftaran online, aplikasi untuk sinkronisasi data pemkab ke aplikasi kementerian',
            'keterangan' => 'Nitip server di kominfo',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Perhubungan')->pluck('id')->first(),
            'nama_aplikasi' => 'e-kir (pihak ke3) mobile',
            'deskripsi' => 'Aplikasi uji KIR lokal, pendaftaran dan cetak hasil uji KIR lokal, aplikasi android untuk pendaftaran online, aplikasi untuk sinkronisasi data pemkab ke aplikasi kementerian versi mobile',
            'keterangan' => 'Nitip server di kominfo',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Perumahan dan Kawasan Permukiman')->pluck('id')->first(),
            'nama_aplikasi' => 'Bantuan perkim',
            'deskripsi' => 'Aplikasi untuk bantuan rumah tidak layak huni',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Antrian',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Perumahan dan Kawasan Permukiman')->pluck('id')->first(),
            'nama_aplikasi' => 'Pengajuan siteplan',
            'deskripsi' => 'Aplikasi untuk vendor mengajukan pendaftaran siteplan',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Antrian',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Sosial')->pluck('id')->first(),
            'nama_aplikasi' => 'siks.magetan.go.id',
            'deskripsi' => 'Aplikasi untuk manajemen data kemiskinan. Prioritas bupati untuk pengentasan kemiskinan dan distribusi bantuan tepat sasaran',
            'keterangan' => 'Data saja yang sudah dipakai, aplikasi belum dipakai',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Kearsipan dan Perpustakaan')->pluck('id')->first(),
            'nama_aplikasi' => 'perpusda.magetan.go.id',
            'deskripsi' => 'Aplikasi perpustakaan online',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Kearsipan dan Perpustakaan')->pluck('id')->first(),
            'nama_aplikasi' => 'sikn.magetan.go.id',
            'deskripsi' => 'Aplikasi arsip',
            'keterangan' => 'Data tidak update',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Kearsipan dan Perpustakaan')->pluck('id')->first(),
            'nama_aplikasi' => 'Aplikasi arsip inaktif',
            'deskripsi' => 'Aplikasi untuk menyimpan arsip ',
            'keterangan' => 'Development',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Tenaga Kerja')->pluck('id')->first(),
            'nama_aplikasi' => 'ketenagakerjaan.magetan.go.id',
            'deskripsi' => 'Aplikasi pendataan tenaga kerja, data transmigrasi, data perusahaan. ',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Pendidikan, Kepemudaan dan Olahraga')->pluck('id')->first(),
            'nama_aplikasi' => 'ppdb.magetan.go.id',
            'deskripsi' => 'Aplikasi PPDB tingkat SMP',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Pendidikan, Kepemudaan dan Olahraga')->pluck('id')->first(),
            'nama_aplikasi' => 'Integrasi dapodik',
            'deskripsi' => 'aplikasi mencari anak tidak sekolah ( perencanaan)',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Antrian',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu')->pluck('id')->first(),
            'nama_aplikasi' => 'mpp.magetan.go.id',
            'deskripsi' => 'aplikasi antrian mall pelayanan publik',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu')->pluck('id')->first(),
            'nama_aplikasi' => 'simpadu.magetan.go.id',
            'deskripsi' => 'Aplikasi perijinan',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Kesehatan')->pluck('id')->first(),
            'nama_aplikasi' => 'simpus.magetan.go.id',
            'deskripsi' => 'Aplikasi Puskesmas',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Kesehatan')->pluck('id')->first(),
            'nama_aplikasi' => 'Aplikasi Stunting',
            'deskripsi' => 'Aplikasi Stunting',
            'keterangan' => null,
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);

        Aplikasi::create([
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Kesehatan')->pluck('id')->first(),
            'nama_aplikasi' => 'Sistem informasi manajemen logistik IFK',
            'deskripsi' => 'Sistem informasi manajemen logistik IFK',
            'keterangan' => 'Analisis',
            'prioritas' => null,
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'Aplikasi',
            'progres' => 0,
        ]);




        // =========================== WEB OPD ===============================
        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'bpbj.magetan.go.id',
            'deskripsi' => 'Web OPD bagian pengadaan barang dan jasa',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'SETDA Kab Magetan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'ekonomi.magetan.go.id',
            'deskripsi' => 'Web OPD bagian perekonomian',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'SETDA Kab Magetan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'kesrasetda.magetan.go.id',
            'deskripsi' => 'Web OPD bagian administrasi dan kesejahteraan rakyat',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'SETDA Kab Magetan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'humasprotokol.magetan.go.id',
            'deskripsi' => 'Web OPD bagian humas',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'SETDA Kab Magetan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'tapem.magetan.go.id',
            'deskripsi' => 'Web OPD tata Pemerintahan',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'SETDA Kab Magetan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'organisasi.magetan.go.id',
            'deskripsi' => 'Web OPD bagian organisasi',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'SETDA Kab Magetan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'inspektorat.magetan.go.id',
            'deskripsi' => 'WEB OPD inspektorat',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Inspektorat')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'bappedalitbang.magetan.go.id',
            'deskripsi' => 'Web OPD bappeda litbang',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'bakesbangpol.magetan.go.id',
            'deskripsi' => 'Web OPD Bakesbangpol',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Kesatuan Bangsa dan Politik')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'bkd.magetan.go.id',
            'deskripsi' => 'Web OPD Badan KepegawaianDaerah',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Kepegawaian Daerah')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'dpmd.magetan.go.id',
            'deskripsi' => 'Web OPD Dinas Pemberdayaan Masyarakat dan desa',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Pemberdayaan Masyarakat dan Desa')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'dppkbpppa.magetan.go.id',
            'deskripsi' => 'Web OPD DPP KB PP PA',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Pengendalian Penduduk, Keluarga Berencana dan Pemberdayaan Perempuan, Perlindungan Anak')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'dlh.magetan.go.id',
            'deskripsi' => 'Web OPD Dinas Lingkungan Hidup',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Lingkungan Hidup')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'kominfo.magetan.go.id',
            'deskripsi' => 'Web OPD DISKOMINFO',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Komunikasi dan Informatika')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'bppkad.magetan.go.id',
            'deskripsi' => 'Web OPD BPPKAD',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah ')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'dispenduk.magetan.go.id',
            'deskripsi' => 'Web OPD DISPENDUK',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Kependudukan dan Catatan Sipil ')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'dinkes.magetan.go.id',
            'deskripsi' => 'Web OPD Dinas Kesehatan',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Kesehatan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'disperindag.magetan.go.id',
            'deskripsi' => 'Web OPD DISPERINDAG',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Perindustrian dan Perdagangan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'tphpkp.magetan.go.id',
            'deskripsi' => 'Web OPD TPHPKP',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Tanaman Pangan, Hortikultura, Perkebunan dan Ketahanan Pangan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'disnaker.magetan.go.id',
            'deskripsi' => 'Web OPD DISNAKER',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Tenaga Kerja')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'pupr.magetan.go.id',
            'deskripsi' => 'Web OPD PUPR',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Pekerjaan Umum dan Penataan Ruang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'dishub.magetan.go.id',
            'deskripsi' => 'Web OPD Dishub',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Perhubungan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'disnakkan.magetan.go.id',
            'deskripsi' => 'Web OPD DISNAKKAN',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Peternakan dan Perikanan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'dinaspkp.magetan.go.id',
            'deskripsi' => 'Web OPD PERKIM',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Perumahan dan Kawasan Permukiman')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'dikpora.magetan.go.id',
            'deskripsi' => 'Web OPD DIKPORA',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Pendidikan, Kepemudaan dan Olahraga')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'dinsos.magetan.go.id',
            'deskripsi' => 'Web OPD Dinas Sosial',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Sosial')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'wisatadanbudaya.magetan.go.id',
            'deskripsi' => 'Web OPD DISPARBUD',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Pariwisata dan Kebudayaan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'dinkopum.magetan.go.id',
            'deskripsi' => 'Web OPD Dinas Koperasi dan Usaha Mikro',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Koperasi dan Usaha Mikro')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'bpbd.magetan.go.id',
            'deskripsi' => 'Web OPD BPBD',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Badan Penanggulangan Bencana Daerah')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'arpus.magetan.go.id',
            'deskripsi' => 'Web OPD Dinas Kearsipan dan Perpustakaan',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Kearsipan dan Perpustakaan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'dpmptsp.magetan.go.id',
            'deskripsi' => 'Web OPD DPMPTSP',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'satpolppdamkar.magetan.go.id',
            'deskripsi' => 'Web OPD SATPOLPPDAMKAR',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Satuan Polisi Pamong Praja dan Pemadam Kebakaran')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'rsud.magetan.go.id',
            'deskripsi' => 'Web OPD RSUD Dr. Sayidiman',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'RSUD Dr. Sayidiman')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'magetankec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Magetan',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Magetan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'panekankec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Panekan',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Panekan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'plaosankec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Plaosan',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Plaosan ')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'poncolkec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Poncol',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Poncol')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'parangkec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Parang',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Parang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'lembeyankec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Lembeyan',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Lembeyan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'kawedanankec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Kawedanan',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Kawedanan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'takerankec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Takeran',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Takeran')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'bendokec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Bendo',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Bendo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'maospatikec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Maospati',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Maospati')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'baratkec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Barat',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Barat')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'karangrejokec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Karangrejo',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Karangrejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'kartoharjokec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Kartoharjo',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Kartoharjo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'karaskec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Karas',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Karas')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'sukomorokec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Sukomoro',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => ' ',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Sukomoro')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'ngariboyokec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Ngariboyo',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Ngariboyo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'nguntoronadikec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Nguntoronadi',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Nguntoronadi')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'sidorejokec.magetan.go.id',
            'deskripsi' => 'Web OPD Kecamatan Sidorejo',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Kecamatan Sidorejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'puskesmas-goranggarengtaji.magetan.go.id',
            'deskripsi' => 'Web Puskesmas Taji Gorang Gareng',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Puskesmas Taji')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'puskesmas-takeran.magetan.go.id',
            'deskripsi' => 'Web Puskesmas Takeran',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Masih Development',
            'id_opd' => Data_OPD::where('nama_opd', 'Puskesmas Takeran')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);

        Aplikasi::create([
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'nama_aplikasi' => 'puskesmas-kawedanan.magetan.go.id',
            'deskripsi' => 'Web Puskesmas Kawedanan',
            'status_aplikasi' => 'Inisiasi',
            'keterangan' => 'Tidak update',
            'id_opd' => Data_OPD::where('nama_opd', 'Puskesmas Kawedanan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
        ]);




        // ============================ web desa =============================
        Aplikasi::create([
            'nama_aplikasi' => 'widorokandang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Widorokandang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Widorokandang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sidokerto.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sidokerto')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sidokerto',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sumbersawit.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sumbersawit')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sumbersawit',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sidomulyo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sidomulyo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sidomulyo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'getasanyar.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Getasanyar')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Getasanyar',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sidorejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sidorejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sidorejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'durenan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Durenan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Durenan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kalang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kalang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kalang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'campursari.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Campursari')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Campursari',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sambirobyong.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sambirobyong')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sambirobyong',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'driyorejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Driyorejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Driyorejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kenongomulyo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kenongomulyo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kenongomulyo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'purworejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Purworejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Purworejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'simbatan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Simbatan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Simbatan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'nguntoronadi.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Nguntoronadi')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Nguntoronadi',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'petungrejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Petungrejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Petungrejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'goranggareng.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Goranggareng')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Goranggareng',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'semen.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Semen')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Semen',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sukowidinguntoronadi.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sukowidi')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sukowidi',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'banjarejongariboyo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Banjarejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Banjarejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'banjarpanjang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Banjarpanjang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Banjarpanjang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'banyudono.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Banyudono')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Banyudono',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'mojopurno.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Mojopurno')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Mojopurno',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ngariboyo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ngariboyo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ngariboyo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'balegondo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Balegondo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Balegondo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'baleasri.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Baleasri')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Baleasri',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sumberdukun.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sumberdukun')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sumberdukun',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'selopanggung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Selopanggung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Selopanggung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bangsri.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bangsri')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bangsri',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'pendem.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Pendem')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Pendem',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'selotinatah.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Selotinatah')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Selotinatah',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'karangmojo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Karangmojo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Karangmojo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bayemtaman.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bayemtaman')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bayemtaman',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bayemwetan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bayemwetan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bayemwetan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'jeruk.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Jeruk')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Jeruk',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'gunungan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Gunungan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Gunungan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'jajar.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Jajar')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Jajar',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ngelang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ngelang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ngelang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sukowidikartoharjo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sukowidi')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sukowidi',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'pencol.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Pencol')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Pencol',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'klurahan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Klurahan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Klurahan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'mrahu.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Mrahu')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Mrahu',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kartoharjo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kartoharjo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kartoharjo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ginuk.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ginuk')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ginuk',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'botok.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Botok')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Botok',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'geplak.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Geplak')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Geplak',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'temenggungan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Temenggungan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Temenggungan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'temboro.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Temboro')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Temboro',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'jungke.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Jungke')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Jungke',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kuwon.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kuwon')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kuwon',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'taji.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Taji')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Taji',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sumursongo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sumursongo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sumursongo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sobontoro.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sobontoro')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sobontoro',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'karas.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Karas')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Karas',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kauman.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kauman')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kauman',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'grabahan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Grabahan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Grabahan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'prampelan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Prampelan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Prampelan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'maron.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Maron')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Maron',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'gebyog.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Gebyog')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Gebyog',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'baluk.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Baluk')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Baluk',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'pelem.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Pelem')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Pelem',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'manisrejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Manisrejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Manisrejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'patihan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Patihan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Patihan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sambirembe.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sambirembe')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sambirembe',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'gondang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Gondang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Gondang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'mantren.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Mantren')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Mantren',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'karangrejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Karangrejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Karangrejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'klagen.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Klagen')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Klagen',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bangunasri.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bangunasri')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bangunasri',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'rejomulyobarat.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Rejomulyo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Rejomulyo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'jonggrang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Jonggrang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Jonggrang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'blaran.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Blaran')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Blaran',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'panggung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Panggung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Panggung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ngumpul.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ngumpul')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ngumpul',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'manjungbarat.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Manjung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Manjung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tebon.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Tebon')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Tebon',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'mangge.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Mangge')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Mangge',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'purwodadi.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Purwodadi')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Purwodadi',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'karangsono.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Karangsono')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Karangsono',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'banjarejobarat.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Banjarejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Banjarejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bogorejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bogorejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bogorejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sempol.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sempol')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sempol',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'mranggen.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Mranggen')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Mranggen',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kraton.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Kraton')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Kraton',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'pesu.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Pesu')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Pesu',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sumberejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sumberejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sumberejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ngujung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ngujung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ngujung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ronowijayan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ronowijayan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ronowijayan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'suratmajan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Suratmajan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Suratmajan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'pandeyan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Pandeyan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Pandeyan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'klagengambiran.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Klagen Gambiran')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Klagen Gambiran',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'maospati.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Maospati')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Maospati',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'malang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Malang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Malang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'gulun.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Gulun')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Gulun',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tanjungsepreh.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tanjungsepreh')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tanjungsepreh',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sugihwaras.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sugihwaras')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sugihwaras',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kleco.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kleco')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kleco',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'setren.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Setren')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Setren',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'duwet.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Duwet')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Duwet',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bulugledeg.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bulugledeg')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bulugledeg',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bendo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Bendo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Bendo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'carikan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Carikan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Carikan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kledokan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kledokan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kledokan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'lemahbang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Lemahbang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Lemahbang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'soco.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Soco')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Soco',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kinandang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kinandang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kinandang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bulak.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bulak')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bulak',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tegalarum.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tegalarum')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tegalarum',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tanjung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tanjung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tanjung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'pingkuk.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Pingkuk')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Pingkuk',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'belotan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Belotan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Belotan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'dukuhbendo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Dukuh')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Dukuh',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'truneng.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Truneng')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Truneng',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bogemsukomoro.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bogem')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bogem',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kentangan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kentangan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kentangan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kembangan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kembangan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kembangan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kedungguwo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kedungguwo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kedungguwo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tinap.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Tinap')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Tinap',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'pojoksari.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Pojoksari')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Pojoksari',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bulu.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bulu')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bulu',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sukomoro.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sukomoro')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sukomoro',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bibis.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bibis')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bibis',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bandar.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bandar')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bandar',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tambakmas.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tambakmas')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tambakmas',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tamanan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tamanan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tamanan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kalangketi.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kalangketi')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kalangketi',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'banjarejopanekan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Banjarejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Banjarejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'turi.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Turi')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Turi',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'rejomulyopanekan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Rejomulyo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Rejomulyo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'jabung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Jabung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Jabung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ngiliran.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ngiliran')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ngiliran',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bedagung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bedagung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bedagung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sukowidipanekan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sukowidi')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sukowidi',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tapak.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tapak')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tapak',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'manjungpanekan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Manjung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Manjung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sumberdodol.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sumberdodol')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sumberdodol',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tanjungsari.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tanjungsari')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tanjungsari',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'panekan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Panekan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Panekan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sidowayah.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sidowayah')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sidowayah',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'wates.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Wates')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Wates',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'milangasri.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Milangasri')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Milangasri',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'cepoko.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Cepoko')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Cepoko',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'terung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Terung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Terung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sendangagung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sendangagung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sendangagung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'pacalan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Pacalan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Pacalan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sarangan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Sarangan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Sarangan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'dadi.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Dadi')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Dadi',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'plaosan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Plaosan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Plaosan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'buluharjo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Buluharjo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Buluharjo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sidomukti.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sidomukti')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sidomukti',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'nitikan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Nitikan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Nitikan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sumberagung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sumberagung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sumberagung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'randugede.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Randugede')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Randugede',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bogoarum.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bogoarum')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bogoarum',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bulugunung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bulugunung (bulugunung)')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bulugunung (bulugunung)',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'puntukdoro.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Puntukdoro')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Puntukdoro',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'plumpung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Plumpung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Plumpung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ngancar.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ngancar')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ngancar',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'purwosari.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Purwosari')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Purwosari',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'baron.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Baron')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Baron',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tambran.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Tambran')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Tambran',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kebonagung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Kebonagung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Kebonagung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sukowinangun.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Sukowinangun')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Sukowinangun',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kepolorejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Kepolorejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Kepolorejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tawanganom.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Tawanganom')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Tawanganom',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'selosari.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Selosari')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Selosari',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'candirejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Candirejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Candirejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ringinagung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ringinagung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ringinagung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'magetankel.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Magetan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Magetan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bulukerto.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Bulukerto')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Bulukerto',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'mangkujayan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Mangkujayan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Mangkujayan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tambakrejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tambakrejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tambakrejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'mojorejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Mojorejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Mojorejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'genengan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Genengan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Genengan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'karangrejokawedanan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Karangrejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Karangrejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ngadirejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ngadirejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ngadirejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sugihrejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sugihrejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sugihrejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'selorejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Selorejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Selorejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'jambangan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Jambangan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Jambangan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bogemkawedanan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bogem')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bogem',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sampung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Sampung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Sampung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'rejosari.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Rejosari')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Rejosari',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kawedanan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Kawedanan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Kawedanan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tulung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tulung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tulung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ngunutkawedanan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ngunut')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ngunut',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'pojok.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Pojok')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Pojok',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tladan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tladan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tladan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'garon.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Garon')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Garon',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'balerejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Balerejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Balerejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ngentep.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ngentep')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ngentep',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'giripurno.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Giripurno')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Giripurno',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'mangunrejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Mangunrejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Mangunrejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'madigondo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Madigondo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Madigondo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kerang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kerang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kerang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'jomblang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Jomblang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Jomblang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'waduk.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Waduk')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Waduk',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kerik.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kerik')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kerik',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kepuhrejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kepuhrejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kepuhrejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kuwonharjo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kuwonharjo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kuwonharjo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'takeran.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Takeran')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Takeran',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sawojajar.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sawojajar')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sawojajar',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tawangrejo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tawangrejo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tawangrejo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'duyung.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Duyung')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Duyung',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kiringan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kiringan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kiringan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'krowe.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Krowe')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Krowe',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tapen.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tapen')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tapen',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'pupus.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Pupus')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Pupus',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'nguri.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Nguri')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Nguri',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kedungpanji.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kedungpanji')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kedungpanji',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'dukuhlembeyan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Dukuh')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Dukuh',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tunggur.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tunggur')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tunggur',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'lembeyanwetan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Lembeyan Wetan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Lembeyan Wetan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'lembeyankulon.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Lembeyan Kulon')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Lembeyan Kulon',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'kediren.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Kediren')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Kediren',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'krajan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Krajan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Krajan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'joketro.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Joketro')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Joketro',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sundul.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sundul')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sundul',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'pragak.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Pragak')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Pragak',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'tamanarum.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Tamanarum')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Tamanarum',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'parang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Parang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Parang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ngaglik.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ngaglik')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ngaglik',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'ngunutparang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Ngunut')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Ngunut',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'trosono.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Trosono')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Trosono',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'bungkuk.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Bungkuk')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Bungkuk',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'mategal.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Mategal')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Mategal',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'nglopang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Nglopang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Nglopang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sayutan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sayutan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sayutan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'sombo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Sombo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Sombo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'cileng.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Cileng')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Cileng',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'plangkrongan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Plangkrongan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Plangkrongan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'alastuwo.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Kelurahan Alastuwo')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Kelurahan Alastuwo',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'genilangit.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Genilangit')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Genilangit',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'janggan.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Janggan')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Janggan',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'gonggang.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Gonggang')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Gonggang',
        ]);

        Aplikasi::create([
            'nama_aplikasi' => 'poncol.magetan.go.id',
            'id_opd' => Data_OPD::where('nama_opd', 'Desa Poncol')->pluck('id')->first(),
            'status_projek' => 'Disposisi Surat',
            'status_aplikasi' => 'Inisiasi',
            'type_aplikasi' => 'WEB',

            'progres' => 0,        'deskripsi' => 'Web OPD Desa Poncol',
        ]);
    }
}
