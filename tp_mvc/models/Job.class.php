<?php
class Job extends DB
{
    function getJob()
    {
        // Query untuk memilih semua data dari tabel job
        $query = "SELECT * FROM job";
        return $this->execute($query);
    }

    function getJobJoin($id)
    {
        // Query untuk memilih data dari tabel job dimana id_job cocok dengan id yang diberikan
        $query = "SELECT * FROM job WHERE id_job=$id";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];

        // Query untuk menambahkan job baru ke tabel job
        $query = "INSERT INTO `job`(`nama_job`) VALUES ('$name')";

        // Mengeksekusi query untuk menambahkan job baru ke database
        return $this->execute($query);
    }

    function delete($id)
    {
        // Query untuk menghapus job dari tabel job berdasarkan id_job
        $query = "DELETE FROM job WHERE id_job = '$id'";

        // Mengeksekusi query untuk menghapus job berdasarkan ID
        return $this->execute($query);
    }

    function updateJob($id, $data)
    {
        $name = $data['name'];

        // Query untuk memperbarui nama job di tabel job berdasarkan id_job
        $query = "UPDATE `job` SET `nama_job` ='$name' WHERE id_job ='$id'";

        // Mengeksekusi query untuk memperbarui nama job berdasarkan ID
        return $this->execute($query);
    }
}
