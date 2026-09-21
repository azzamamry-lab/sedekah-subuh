<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Data halaman disimpan di satu tempat supaya mudah diubah
     * tanpa menyentuh template Blade.
     */
    private function data(): array
    {
        return [
            'yayasan' => 'Yayasan Nur Mirah',
            'tagline' => 'Menebar kebaikan, menguatkan sesama.',

            'hero' => [
                'judul' => 'Sedekah Subuh',
                'subjudul' => 'Awali hari dengan kebaikan, beri harapan untuk sesama.',
                'deskripsi' => 'Sedekah di waktu Subuh adalah langkah kecil dengan dampak besar. '
                    . 'Bersama Yayasan Nur Mirah, sedekah Anda kami salurkan untuk mereka yang membutuhkan.',
                'tombol' => 'Sedekah Subuh Sekarang',
            ],

            'kepercayaan' => [
                ['judul' => 'Mudah & Aman', 'teks' => 'Donasi lewat transfer bank, e-wallet, atau QRIS.'],
                ['judul' => 'Berdampak Nyata', 'teks' => 'Disalurkan lewat program sosial yang berjalan rutin.'],
                ['judul' => 'Transparan', 'teks' => 'Laporan penyaluran dikirim ke donatur secara berkala.'],
            ],

            'keutamaan' => [
                'judul' => 'Keutamaan Sedekah Subuh',
                'subjudul' => 'Di waktu pagi, Allah membukakan pintu rezeki dan keberkahan bagi orang yang bersedekah.',
                'hadis' => 'Tidaklah para hamba berada di waktu pagi melainkan dua malaikat turun. '
                    . 'Salah satunya berdoa, "Ya Allah, berilah ganti bagi orang yang berinfak." '
                    . 'Sedangkan yang lain berdoa, "Ya Allah, hancurkanlah harta orang yang kikir."',
                'sumber' => 'HR. Bukhari dan Muslim',
                'poin' => [
                    'Didoakan malaikat',
                    'Membuka pintu rezeki',
                    'Menjadi sebab pertolongan Allah',
                    'Melatih keikhlasan dan kepedulian',
                ],
            ],

            'program' => [
                'judul' => 'Sedekahmu Menjadi Harapan',
                'subjudul' => 'Donasi Sedekah Subuh disalurkan melalui program-program Yayasan Nur Mirah.',
                'daftar' => [
                    ['nama' => 'Kebutuhan Pangan', 'teks' => 'Membantu penyediaan makanan bagi keluarga yang membutuhkan.'],
                    ['nama' => 'Dukungan Pendidikan', 'teks' => 'Membantu anak-anak agar tetap memiliki kesempatan belajar.'],
                    ['nama' => 'Bantuan Sosial', 'teks' => 'Meringankan beban saudara kita yang sedang kesulitan.'],
                    ['nama' => 'Program Kebaikan Lainnya', 'teks' => 'Menebar manfaat di berbagai bidang sesuai kebutuhan umat.'],
                ],
            ],

            'cara_ikut' => [
                'judul' => 'Cara Ikut Sedekah Subuh',
                'subjudul' => 'Siapa pun bisa ikut. Empat langkah saja.',
                'langkah' => [
                    ['nama' => 'Niatkan', 'teks' => 'Karena Allah, untuk membantu sesama.'],
                    ['nama' => 'Tentukan Nominal', 'teks' => 'Tidak ada nominal khusus. Sesuai kemampuan.'],
                    ['nama' => 'Lakukan Donasi', 'teks' => 'Melalui metode pembayaran yang tersedia.'],
                    ['nama' => 'Jadikan Kebiasaan', 'teks' => 'Lakukan setiap pagi, sekecil apa pun.'],
                ],
            ],

            'dampak' => [
                'judul' => 'Kebaikan Kecil, Dampak yang Besar',
                'teks' => 'Nominal kecil yang Anda berikan setiap pagi, jika dilakukan rutin, '
                    . 'menjadi bagian dari perubahan besar bagi mereka yang membutuhkan.',
                'penutup' => 'Karena setiap pagi, selalu ada kesempatan untuk berbagi.',
                'poin' => [
                    'Penerima manfaat terbantu secara rutin',
                    'Laporan penyaluran dilakukan berkala',
                    'Dana dikelola secara amanah dan transparan',
                ],
            ],

            'faq' => [
                ['t' => 'Apakah ada nominal minimal?', 'j' => 'Tidak ada nominal minimal. Sedekah dapat dilakukan sesuai kemampuan masing-masing.'],
                ['t' => 'Apakah harus tepat setelah shalat Subuh?', 'j' => 'Yang utama adalah menjadikan pagi sebagai momentum bersedekah. Sesuaikan dengan kemampuan dan kondisi masing-masing.'],
                ['t' => 'Apakah saya bisa bersedekah setiap hari?', 'j' => 'Bisa. Justru kami mengajak agar Sedekah Subuh menjadi kebiasaan baik yang dilakukan rutin.'],
                ['t' => 'Ke mana dana Sedekah Subuh disalurkan?', 'j' => 'Disalurkan melalui program-program sosial Yayasan Nur Mirah kepada penerima manfaat sesuai ketentuan program.'],
                ['t' => 'Bagaimana saya mengetahui penyaluran donasi saya?', 'j' => 'Yayasan akan memberikan dokumentasi dan laporan penyaluran secara berkala kepada para donatur.'],
                ['t' => 'Metode pembayaran apa saja yang tersedia?', 'j' => 'Tersedia transfer bank, e-wallet, dan QRIS.'],
            ],

            'cta_akhir' => [
                'judul' => 'Mari mulai hari dengan satu kebaikan.',
                'teks' => 'Sedekah Subuh bersama Yayasan Nur Mirah. Karena kebaikan tidak harus menunggu nanti.',
            ],
        ];
    }

    public function index()
    {
        return view('landing', $this->data());
    }

    public function program()
    {
        return view('program', $this->data());
    }

    public function tentang()
    {
        return view('tentang', $this->data());
    }

    public function laporan()
    {
        return view('laporan', $this->data());
    }

    public function donasi()
    {
        return view('donasi', $this->data());
    }
}
