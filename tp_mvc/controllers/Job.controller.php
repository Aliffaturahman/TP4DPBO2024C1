<?php
include_once("connection.php");
include_once("models/Job.class.php");
include_once("views/Job.view.php");

class JobController
{
    private $job;

    function __construct()
    {
        $this->job = new Job(Config::$db_host, Config::$db_user, Config::$db_pass, Config::$db_name);
    }

    public function index()
    {
        // Membuka koneksi ke database
        $this->job->open();

        // Mengambil data job
        $this->job->getJob();

        // Membuat array untuk menyimpan data job
        $data = array(
            'job' => array(),
        );

        // Memasukkan setiap baris hasil query ke dalam array
        while ($row = $this->job->getResult()) {
            array_push($data['job'], $row);
        }

        // Menutup koneksi database
        $this->job->close();

        // Memanggil view JobView untuk menampilkan data job
        $view = new JobView();
        $view->render($data);
    }

    public function JobForm()
    {
        // Membuka koneksi ke database
        $this->job->open();

        // Mengambil data job
        $this->job->getJob();

        // Membuat array untuk menyimpan data job
        $data = array(
            'job' => array(),
        );

        // Memasukkan setiap baris hasil query ke dalam array
        while ($row = $this->job->getResult()) {
            array_push($data['job'], $row);
        }

        // Menutup koneksi database
        $this->job->close();

        // Memanggil view JobView untuk menampilkan form tambah job
        $view = new JobView();
        $view->formAdd($data);
    }

    public function JobUpdate($id)
    {
        // Membuka koneksi ke database
        $this->job->open();

        // Mengambil data job
        $this->job->getJob();

        // Mengambil data job dengan ID tertentu
        $this->job->getJobJoin($id);

        // Membuat array untuk menyimpan data job
        $data = array(
            'job' => array(),
        );

        // Memasukkan setiap baris hasil query ke dalam array
        while ($row = $this->job->getResult()) {
            array_push($data['job'], $row);
        }

        // Menutup koneksi database
        $this->job->close();

        // Memanggil view JobView untuk menampilkan form update job
        $view = new JobView();
        $view->formUpdate($data);
    }

    function add($data)
    {
        // Membuka koneksi ke database
        $this->job->open();

        // Menambahkan job baru
        $this->job->add($data);

        // Menutup koneksi database
        $this->job->close();

        // Mengarahkan pengguna ke halaman job.php setelah penambahan berhasil
        header("location:job.php");
    }

    function edit($id, $data)
    {
        // Membuka koneksi ke database
        $this->job->open();

        // Mengedit data job dengan ID tertentu
        $this->job->updateJob($id, $data);

        // Menutup koneksi database
        $this->job->close();

        // Mengarahkan pengguna ke halaman job.php setelah pengeditan berhasil
        header("location:job.php");
    }

    function delete($id)
    {
        // Membuka koneksi ke database
        $this->job->open();

        // Menghapus data job dengan ID tertentu
        $this->job->delete($id);

        // Menutup koneksi database
        $this->job->close();

        // Mengarahkan pengguna ke halaman job.php setelah penghapusan berhasil
        header("location:job.php");
    }
}
