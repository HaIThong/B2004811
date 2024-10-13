<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('candidates')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'firstname' => 'Hai Thong',
                'lastname' => 'Chau ',
                'gender' => 0,
                'dob' => '2002-02-18',
                'phone' => '0333333331',
                'email' => 'thongb2004811@student.ctu.edu.vn',
                'address' => 'Ninh Kiều, Cần Thơ',
                'link' => 'https://www.facebook.com/profile.php?id=100009564982330',
                'objective' => 'muc tieu',
                'avatar' => 'avatar.jpg'
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'firstname' => 'My Nhan',
                'lastname' => 'Tran',
                'gender' => 1,
                'dob' => '2002-02-09',
                'phone' => '0333333332',
                'email' => 'thoa@gmail.com',
                'address' => 'Ninh Kieu, Can Tho',
                'link' => 'kkk',
                'objective' => 'muc tieu',
                'avatar' => 'avatar.jpg'
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'firstname' => 'ngoc diep',
                'lastname' => 'nguyen',
                'gender' => 1,
                'dob' => '2005-02-17',
                'phone' => '0333333333',
                'email' => 'diep@gmail.com',
                'address' => 'Ninh Kiêu, Can Tho',
                'link' => 'kkk',
                'objective' => 'muc tieu',
                'avatar' => 'avatar.jpg'
            ],
            [
                'id' => 4,
                'user_id' => 4,
                'firstname' => 'thanh phong',
                'lastname' => 'bui',
                'gender' => 0,
                'dob' => '2001-03-10',
                'phone' => '0333333334',
                'email' => 'phong@gmail.com',
                'address' => 'Ninh Kiều, Cần Thơ',
                'link' => 'kkk',
                'objective' => 'muc tieu',
                'avatar' => 'avatar.jpg'
            ],
            [
                'id' => 17,
                'user_id' => 17,
                'firstname' => 'hong quang',
                'lastname' => 'tran',
                'gender' => 0,
                'dob' => '2000-03-12',
                'phone' => '0333333335',
                'email' => 'quang@gmail.com',
                'address' => 'Ninh Kiều, Cần Thơ',
                'link' => 'kkk',
                'objective' => 'muc tieu',
                'avatar' => 'avatar.jpg'
            ],
        ]);
    }
}
