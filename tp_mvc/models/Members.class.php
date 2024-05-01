<?php

class Members extends DB
{
    function getMembers()
    {
        // Join member yang nantinya akan ditampilkan di table index.php
        $query = "SELECT m.id, m.name, m.email, m.phone, m.join_date, t.nama_job, c.name_company FROM members AS m INNER JOIN job AS t ON m.job_id = t.id_job JOIN company AS c ON m.id_company = c.id_company";

        // Mengeksekusi query dan mengembalikan hasilnya
        return $this->execute($query);
    }

    function getMembersJoin($id)
    {
        // Mengambil data anggota berdasarkan id
        $query = "SELECT * FROM members WHERE id=$id";

        // Mengeksekusi query dan mengembalikan hasilnya
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $date = $data['date'];
        $job = $data['id_job'];
        $company = $data['id_company'];

        // Query untuk menambahkan data anggota baru ke tabel members
        $query = "INSERT INTO `members`(`name`, `email`, `phone`, `join_date`, `job_id`, `id_company`) VALUES ('$name', '$email', '$phone', '$date', '$job', '$company')";

        // Mengeksekusi query dan mengembalikan hasilnya
        return $this->execute($query);
    }

    function delete($id)
    {
        // Query untuk menghapus data anggota dari tabel members berdasarkan id
        $query = "DELETE FROM members WHERE id = '$id'";

        // Mengeksekusi query dan mengembalikan hasilnya
        return $this->execute($query);
    }

    function updateMembers($id, $data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $date = $data['date'];
        $job = $data['id_job'];
        $company = $data['id_company'];

        // Query untuk mengupdate data anggota di tabel members berdasarkan id
        $query = "UPDATE `members` SET `name`='$name', `email`='$email', `phone`='$phone', `join_date`='$date', `job_id`='$job', `id_company`='$company' WHERE id ='$id'";

        // Mengeksekusi query dan mengembalikan hasilnya
        return $this->execute($query);
    }
}
