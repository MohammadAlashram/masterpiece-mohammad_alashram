<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'           => $row['name'],
            'email'          => $row['email'],
            'password'       => Hash::make($row['password']),
            'role'           => $row['role'],
            'address'        => $row['address' ],
            'department'     => $row['department'],
            'education'      => $row['education' ],
            'description'    => $row['description'],
            'gender'         => $row['gender'],
            'phone'          => $row['phone'],
            'position'       => $row['position' ],
        ]);
    }
}
