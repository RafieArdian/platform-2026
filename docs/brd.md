# Business Requirement Document (BRD)

**Nama Proyek:** Sistem Pengelolaan Akademik Sekolah (SMA/SMP/SD/TK)  
**Nama Produk:** WebEdu  
**Versi Dokumen:** 1.0  

---

## 1.1. Latar Belakang

Sekolah pada jenjang TK hingga SMA masih banyak yang mengelola data akademik secara manual atau semi-digital (spreadsheet, buku fisik). Hal ini menyebabkan proses belajar-mengajar, pelaporan nilai, dan komunikasi orang tua–guru menjadi tidak efisien.

---

## 1.2. Tujuan Bisnis (Objectives)

| Kode | Tujuan | Indikator Keberhasilan (KPI) |
|------|--------|------------------------------|
| B-O1 | Memudahkan pengelolaan akademik sekolah | 90% pengguna (guru & admin) mengklaim efisiensi meningkat setelah 3 bulan |
| B-O2 | Meningkatkan transparansi nilai dan kehadiran bagi orang tua | Rata-rata akses orang tua ke portal minimal 2x/minggu |
| B-O3 | Menekan waktu rekapitulasi nilai akhir semester dari 2 minggu menjadi 2 hari | — |

---

## 1.3. Ruang Lingkup (Scope)

| Dimensi | Keterangan |
|---------|------------|
| **P** – Platform | Web (responsif untuk desktop & tablet) |
| **I** – Pengguna | Guru, Siswa, Akademik (Admin Sekolah), Orang Tua |
| **C** – Sistem untuk | TK, SD, SMP, SMA |
| **O** – Domain | Pendidikan |
| **S** – Manfaat Utama | Memudahkan pengelolaan akademik sekolah |

---

## 1.4. Stakeholders

| Pihak | Kepentingan |
|-------|-------------|
| Kepala Sekolah | Memantau kinerja akademik keseluruhan |
| Guru | Input nilai, absensi, materi |
| Siswa | Lihat jadwal, nilai, tugas |
| Orang Tua | Pantau perkembangan anak |
| Admin / Tata Usaha | Kelola data master (kelas, mata pelajaran, guru) |

---

## 1.5. Asumsi & Ketergantungan

- Sekolah memiliki akses internet minimal **10 Mbps**.
- Tersedia perangkat (laptop/PC/tablet) untuk guru & admin.
- Orang tua memiliki smartphone dengan browser.

---

## 1.6. Batasan

- Tidak mencakup modul keuangan (SPP) pada rilis awal.
- Tidak mendukung pembelajaran sinkron (video conference) pada versi 1.0.