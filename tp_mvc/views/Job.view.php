<?php

class JobView
{
    public function render($data)
    {
        $no = 1;
        $dataJob = null;
        $dataJudul = null;

        // Membuat judul kolom tabel
        $dataJudul .= 
        "<tr>
            <th>ID</th>
            <th>DAFTAR JOB</th>
            <th>ACTIONS</th>
        </tr>";

        // Mengisi data job ke dalam tabel
        foreach ($data['job'] as $val) {
            list($id, $name) = $val;

            // Mengisi baris tabel dengan data job
            $dataJob .=       
            "<tr>
                <th>" . $no++ . "</th>
                <td>" . $name . "</td>
                <td>
                    <a href='job.php?id_edit=" . $id .  "' class='btn btn-primary'>Edit</a>
                    <a href='job.php?id_hapus=" . $id .  "' class='btn btn-danger'>Delete</a>
                </td>
            </tr>
          ";
        }

        // Mengganti placeholder pada template dengan data yang telah dibuat
        $index = new Template("templates/index.html");
        $index->replace("DATA_TABEL", $dataJob);
        $index->replace("DATA_PAGE_2", "active");
        $index->replace("DATA_JUDUL", $dataJudul);
        $index->replace("DATA_LINK", "job.php?add_job=1");
        $index->write();
    }

    public function formAdd($data)
    {
        // Mengganti placeholder pada template dengan data yang telah dibuat
        $formAdd = new Template("templates/jncForm.html");
        $formAdd->replace("DATA_PAGE_2", "active");
        $formAdd->replace("COLOR", "primary");
        $formAdd->replace("FORM", "add");
        $formAdd->replace("DATA_TITLE", "Create New");
        $formAdd->replace("DATA_TABLE", "Job");
        $formAdd->write();
    }

    public function formUpdate($data)
    {
        // Mengganti placeholder pada template dengan data yang telah dibuat
        $formUpdate = new Template("templates/jncForm.html");

        foreach ($data['job'] as $val) {
            list($id, $name) = $val;
            $formUpdate->replace("DATA_NAME", $name);
        }

        $formUpdate->replace("DATA_PAGE_2", "active");
        $formUpdate->replace("COLOR", "warning");
        $formUpdate->replace("FORM", "update");
        $formUpdate->replace("DATA_TITLE", "Update");
        $formUpdate->replace("DATA_TABLE", "Job");
        $formUpdate->write();
    }
}
