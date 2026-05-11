<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Daftar Nama Mahasiswa sesuai data yang Anda berikan
        $studentNames = [
            '2311532007' => 'Muhammad Hafiz',
            '2311532006' => 'Muhammad Farrel Giovanni',
            '2311532019' => 'Muhammad Fawwaz Wiyoga',
            '2311532011' => 'Rifki Yuliandra',
            '2311533014' => 'Alfarizhi Fitra',
            '2311531001' => 'Kaela Assyura Syadira',
            '2311531006' => 'Nia Ramadhani Tanjung',
            '2311533005' => 'Surya Andika',
            '2311532009' => 'Muhammad Dawi Syauqi',
            '2311532017' => 'Sherly Ananda Putri',
            '2311537001' => 'Fayi Amatullah Azhara',
            '2311532020' => 'Muhammad Luthfi Kautsar Rizata',
            '2311532016' => 'Indah Syahfitri',
            '2311532005' => 'Kevin Andhika',
            '2311531002' => 'Hanifah Larama Agasi',
            '2311533019' => 'Muhammad Rayhan Anugrah',
            '2311533008' => 'Reza Septian',
            '2311532001' => 'Ezza Addini',
            '2311531009' => 'Wahyu Khairi',
            '2311533012' => 'Fathur Ramadhan Fahmi',
            '2311532002' => 'Imbang Jayo Gampito',
            '2311531004' => 'Aliffia Humairah',
            '2311532018' => 'Muhammad Farhan Saputra',
            '2311533020' => 'Ridho Radya Pratama',
            '2311531003' => 'Ahda Rindang Al-Amin',
            '2311532004' => 'Ahmad Fajri Arrizki',
            '2311532008' => 'Muhammad Galid Avero',
            '2311531008' => 'Muhammad Nugraha Patria',
            '2311532015' => 'Sherly Sukmadira Putri',
            '2311533016' => 'Rafki Ahmad Pagamanda',
            '2311533013' => 'Ahmad Muhaimin Kamil',
            '2311533007' => 'Fikhri Hanif',
            '2311533011' => 'Radjasa Arya Pradifta',
            '2311532021' => 'Stanley Leonard Darmali',
            '2311533010' => 'Irgi Fatihul Ihsan',
            '2311533003' => 'Gary Andreas',
            '2311532003' => 'Siti Fadhilah Rahmi',
            '2311533009' => 'Irfan Trianda',
            '2311532010' => 'Muhammad Alfarizy',
            '2311532013' => 'Muhammad Raudhatul',
            '2311532012' => 'Ghazi Fadhlullah',
            '2311531005' => 'Devia Puji Astuti',
            '2311532014' => 'Reynard Gahzy Tsaqif',
            '2311533002' => 'Oktavia Ramadani',
        ];

        $nimRanges = [
            ['start' => 2311531001, 'end' => 2311531010],
            ['start' => 2311532001, 'end' => 2311532025],
            ['start' => 2311533001, 'end' => 2311533020],
            ['start' => 2311537001, 'end' => 2311537001],
        ];

// Bagian di dalam loop User::create pada DatabaseSeeder.php
foreach ($nimRanges as $range) {
    for ($nim = $range['start']; $nim <= $range['end']; $nim++) {
        $nimString = (string)$nim;
        $name = $studentNames[$nimString] ?? 'Mahasiswa ' . $nimString;

        // Logika ambil nama pertama dan format email
        $firstName = strtolower(explode(' ', $name)[0]);
        $email = $nimString . '_' . $firstName . '@student.unand.ac.id';

        User::create([
            'name' => $name,
            'nim' => $nimString,
            'email' => $email,
            'password' => Hash::make($nimString),
            'is_password_changed' => false,
        ]);
    }
}
    }
}