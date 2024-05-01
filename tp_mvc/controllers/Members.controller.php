<?php

// Jika terjadi error pada saat mengedit data member, aktifkan kode dibawah ini
ob_start();

include_once("connection.php");
include_once("models/Members.class.php");
include_once("models/Job.class.php");
include_once("models/Company.class.php");
include_once("views/Members.view.php");

class MembersController
{
    private $members;
    private $company;
    private $job;

    function __construct()
    {
        // Membuat objek dari kelas Members, Company, dan Job
        $this->members = new Members(Config::$db_host, Config::$db_user, Config::$db_pass, Config::$db_name);
        $this->company = new Company(Config::$db_host, Config::$db_user, Config::$db_pass, Config::$db_name);
        $this->job = new Job(Config::$db_host, Config::$db_user, Config::$db_pass, Config::$db_name);
    }

    public function index()
    {
        $this->members->open();
        $this->members->getMembers();
        $data = array(
            'members' => array(),
        );
        while ($row = $this->members->getResult()) {
            array_push($data['members'], $row);
        }

        $this->members->close();
        $view = new MembersView();
        $view->render($data);
    }
    public function membersForm()
    {
        $this->job->open();
        $this->job->getJob();

        $this->company->open();
        $this->company->getCompany();
        $data = array(
            'job' => array(),
            'company' => array(),
        );
        while ($row = $this->job->getResult()) {
            array_push($data['job'], $row);
        }
        while ($row = $this->company->getResult()) {
            array_push($data['company'], $row);
        }

        $this->job->close();
        $this->company->close();

        // Membuat objek dari kelas MembersView
        $view = new MembersView();
        // Memanggil metode formAdd() dengan melewatkan data yang diperoleh sebelumnya sebagai argumen
        $view->formAdd($data);
    }
    public function membersUpdate($id)
    {
        $this->members->open();
        $this->members->getMembers();
        $this->members->getMembersJoin($id);

        $this->job->open();
        $this->job->getJob();

        $this->company->open();
        $this->company->getCompany();
        $data = array(
            'members' => array(),
            'job' => array(),
            'company' => array(),
        );
        while ($row = $this->members->getResult()) {
            array_push($data['members'], $row);
        }
        while ($row = $this->job->getResult()) {
            array_push($data['job'], $row);
        }
        while ($row = $this->company->getResult()) {
            array_push($data['company'], $row);
        }

        $this->members->close();
        $this->job->close();
        $this->company->close();

        // Membuat objek dari kelas MembersView
        $view = new MembersView();
        // Memanggil metode formUpdate() dengan melewatkan data yang diperoleh sebelumnya sebagai argumen
        $view->formUpdate($data);
    }

    function add($data)
    {
        $this->members->open();
        $this->members->add($data);
        $this->members->close();

        header("location:index.php");
    }

    function edit($id, $data)
    {
        $this->members->open();
        $this->members->updateMembers($id, $data);
        $this->members->close();

        header("location:index.php");
    }

    function delete($id)
    {
        $this->members->open();
        $this->members->delete($id);
        $this->members->close();
        header("location:index.php");
    }
}
