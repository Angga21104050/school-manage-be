# School Management Backend API

Project ini merupakan **backend application** untuk sistem manajemen sekolah yang dibangun menggunakan **Laravel**.  
Backend ini menyediakan **API** untuk kebutuhan frontend serta **Admin Dashboard** menggunakan **Filament**.

---

## 🎯 Tujuan Project

- Mengelola data **Kelas, Siswa, dan Guru**
- Menyediakan **API** untuk frontend React
- Menyediakan **CRUD lengkap** melalui Admin Dashboard (Filament)
- Menampilkan laporan relasi **Siswa per Kelas**, **Guru per Kelas**, dan **Siswa–Guru–Kelas**

---

## 🧩 Teknologi yang Digunakan

- Laravel 12
- PHP 8+
- MySQL / MariaDB
- Filament Admin Panel
- Laravel Sanctum (API Authentication)
- Eloquent ORM

---

## 📂 Fitur Utama

### 🔹 Admin Dashboard (Filament)

- CRUD Kelas
- CRUD Siswa
- CRUD Guru
- Relasi antar tabel (Kelas ↔ Siswa, Kelas ↔ Guru)
- Soft Delete
- Manajemen data berbasis UI Admin

---

### 🔹 API Endpoint

Backend ini menyediakan beberapa API utama:

- List Siswa per Kelas
- List Guru per Kelas
- List Siswa, Guru, dan Kelas
- API CRUD (optional untuk frontend)

Semua API menggunakan format **JSON**.

---

## 🔐 Informasi Login Admin

Login Admin digunakan untuk mengakses **Filament Dashboard**.
Usernam     : admin@gmail.com
Password    : 123456789

**URL Admin Panel:**  
