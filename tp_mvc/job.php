<?php
include_once("models/Template.class.php");      // Memasukkan file kelas Template
include_once("models/DB.class.php");            // Memasukkan file kelas DB
include_once("controllers/Job.controller.php"); // Memasukkan file kelas JobController

$job = new JobController(); // Membuat objek JobController

if (isset($_POST['add'])) {             // Jika tombol 'add' pada form diklik
  $job->add($_POST);                    // Panggil metode 'add' pada objek JobController
} 
else if (!empty($_GET['add_job'])) {    // Jika parameter 'add_job' tidak kosong
  $job->jobForm();                      // Panggil metode 'jobForm' pada objek JobController
} 
else if (!empty($_GET['id_hapus'])) {   // Jika parameter 'id_hapus' tidak kosong
  $id = $_GET['id_hapus'];              // Mendapatkan nilai 'id' dari parameter GET
  $job->delete($id);                    // Panggil metode 'delete' pada objek JobController dengan 'id' sebagai argumen
} 
else if (!empty($_GET['id_edit'])) {    // Jika parameter 'id_edit' tidak kosong
  $id = $_GET['id_edit'];               // Mendapatkan nilai 'id' dari parameter GET
  $job->jobUpdate($id);                 // Panggil metode 'jobUpdate' pada objek JobController dengan 'id' sebagai argumen
} 
else {                                  // Jika tidak ada kondisi yang terpenuhi
  $job->index();                        // Panggil metode 'index' pada objek JobController
}

if (isset($_POST['update'])) {  // Jika tombol 'update' pada form diklik
  $id = $_GET['id_edit'];       // Mendapatkan nilai 'id' dari parameter GET
  $job->edit($id, $_POST);      // Panggil metode 'edit' pada objek JobController dengan 'id' dan data form sebagai argumen
}
