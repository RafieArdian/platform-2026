# Product Requirement Document (PRD)

**Nama Produk:** WebEdu  
**Versi Dokumen:** 1.0  

---

## 2.1. Ringkasan Produk

Sistem manajemen akademik berbasis web yang melayani TK–SMA untuk memudahkan pengelolaan nilai, absensi, jadwal, dan komunikasi sekolah–orang tua.

---

## 2.2. User Persona

| Persona | Peran | Pain Point | Need |
|---------|-------|------------|------|
| Bu Sari | Guru Wali Kelas | Input nilai 40+ siswa per kelas secara manual | Ingin input nilai cepat & analisis otomatis |
| Andi | Siswa SMA | Lupa jadwal ujian & tugas deadline | Ingin lihat semua jadwal dalam satu kalender |
| Pak Rudi | Orang Tua | Tidak tahu saat anak tidak masuk sekolah | Ingin notifikasi realtime absensi anak |
| Tina | Akademik Sekolah (Admin) | Sulit mengakumulasi rapor per semester | Ingin generate rapor dengan satu klik |

---

## 2.3. Fitur Prioritas (MoSCoW)

### ✅ Must Have (Wajib)

| Fitur | Deskripsi |
|-------|-----------|
| Manajemen Kelas & Siswa | CRUD kelas, rombel, pindah siswa |
| Input Nilai | Guru input nilai per tugas/UTS/UAS, sistem hitung rata-rata otomatis |
| Cetak Rapor | Rapor digital + PDF (sesuai format TK/SD/SMP/SMA) |
| Absensi Digital | Guru absen online per jam pelajaran, orang tua lihat notifikasi |
| Jadwal Pelajaran | Tampil per guru, per kelas, per siswa |
| Login Multi-role | Bedakan akses guru, siswa, orang tua, admin |

### 🔶 Should Have (Sangat penting, bisa ditunda ke rilis minor)

- Notifikasi WhatsApp/Email untuk absensi & nilai keluar.
- Ekspor nilai ke Excel (cadangan untuk dinas pendidikan).
- Manajemen tugas (siswa upload tugas, guru beri nilai).

### 🔷 Could Have (Nice to have)

- Grafik perkembangan nilai per siswa (line chart).
- Template rapor khusus sekolah (customizable).

### ❌ Won't Have (Rilis ini)

- Modul keuangan SPP.
- Ujian online CBT.

---

## 2.4. User Flow

### Contoh: Guru Input Nilai

```
1. Login → Dashboard Guru
2. Pilih kelas & mata pelajaran
3. Lihat daftar siswa
4. Masukkan nilai (Tugas 1, Tugas 2, UTS, UAS)
5. Sistem otomatis hitung nilai akhir
6. Simpan → orang tua langsung lihat (setelah diverifikasi wali kelas — opsional)
```

---

## 2.5. Spesifikasi Fungsional

| Modul | Hak Akses | Fungsi Kunci |
|-------|-----------|--------------|
| Dashboard | Semua | Ringkasan notifikasi, jadwal hari ini |
| Kelas & Siswa | Admin, Guru | Manajemen rombel, pindah siswa |
| Nilai | Guru, Admin (input/edit); Siswa & Orang Tua (lihat) | Input, edit, approval, cetak rapor |
| Absensi | Guru (input); Orang Tua (lihat) | Rekap hadir/sakit/izin/alpha |
| Laporan | Admin, Kepala Sekolah | Rekap nilai per kelas, ketidakhadiran, progres kelulusan |

---

## 2.6. Spesifikasi Non-Fungsional

| Atribut | Target |
|---------|--------|
| Performa | Waktu muat dashboard < 2 detik (dengan 1.000 siswa aktif) |
| Keamanan | Password hash (bcrypt), session timeout 30 menit, RBAC ketat |
| Kapasitas | Mendukung 500 siswa, 50 guru, 400 orang tua per sekolah |
| Ketersediaan | Uptime 99,9% selama jam sekolah (07.00–17.00) |
| Kompatibilitas | Chrome + Firefox + Safari (3 versi terakhir), tablet 7 inci ke atas |

---

## 2.7. Antarmuka (Wireframe — Deskripsi)

### Login Page
- Form username (NIS / NUPTK / email) + password
- Pilih role (opsional — sistem dapat mendeteksi otomatis)

### Dashboard Guru
- Kartu **"Kelas yang diampu"**
- Kartu **"Absensi hari ini"**
- Kartu **"Tugas belum dinilai"**

### Dashboard Orang Tua
- Grafik kehadiran anak bulan ini
- Nilai terbaru per mata pelajaran
- Tombol **"Kirim pesan ke wali kelas"**

---

## 2.8. Kriteria Acceptance (Definition of Done)

- [ ] Fitur sudah di-test minimal dengan **3 role berbeda**.
- [ ] Tidak ada error blocking pada flow utama.
- [ ] Sudah ada dokumentasi pengguna (PDF panduan singkat).
- [ ] Google Lighthouse Score minimal **80** untuk akses via mobile.

---

## Catatan untuk Tim Pengembang

> Gunakan arsitektur **Role-Based Access Control (RBAC)** yang ketat karena ada perbedaan akses antara guru, siswa, orang tua, dan admin.  
> Mulai bangun dari modul **Must Have** (nilai + absensi + rapor) sebelum menambah fitur notifikasi.