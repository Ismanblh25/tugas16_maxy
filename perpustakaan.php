<?php
// Definisi kelas Buku
class Buku {
    public $judul;
    public $pengarang;
    public $tahunTerbit;
    public $genre;

    // Constructor untuk menginisialisasi properti Buku
    public function __construct($judul, $pengarang, $tahunTerbit, $genre) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahunTerbit = $tahunTerbit;
        $this->genre = $genre;
    }

    // Metode untuk mendapatkan detail buku dalam format string
    public function getDetailBuku() {
        return "Judul: {$this->judul}, Pengarang: {$this->pengarang}, Tahun Terbit: {$this->tahunTerbit}, Genre: {$this->genre}";
    }
}

// Definisi kelas Perpustakaan
class Perpustakaan {
    public $lokasi;
    public $daftarBuku = [];

    // Constructor untuk menginisialisasi lokasi perpustakaan
    public function __construct($lokasi) {
        $this->lokasi = $lokasi;
    }

    // Metode untuk menambahkan buku ke dalam daftarBuku
    public function tambahBuku($buku) {
        $this->daftarBuku[] = $buku;
    }

    // Metode untuk mendapatkan daftar buku yang tersedia
    public function getDaftarBuku() {
        if (empty($this->daftarBuku)) {
            return "Belum ada buku di perpustakaan.";
        }

        $output = "Daftar Buku di Perpustakaan {$this->lokasi}:\n";
        foreach ($this->daftarBuku as $buku) {
            $output .= $buku->getDetailBuku() . "\n";
        }
        return $output;
    }
}

// Membuat beberapa objek Buku
$buku1 = new Buku("Pemrograman PHP", "John Doe", 2020, "Teknologi");
$buku2 = new Buku("Belajar JavaScript", "Jane Smith", 2018, "Teknologi");
$buku3 = new Buku("Sejarah Dunia", "Mark Twain", 2015, "Sejarah");

// Membuat objek Perpustakaan
$perpustakaan = new Perpustakaan("Jakarta");

// Menambahkan buku-buku ke perpustakaan
$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);
$perpustakaan->tambahBuku($buku3);

// Mencetak daftar buku di perpustakaan
echo $perpustakaan->getDaftarBuku();
?>
