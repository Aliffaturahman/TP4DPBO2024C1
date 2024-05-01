## JANJI
*Saya Alif Faturahman Firdaus (2107377) mengerjakan Tugas Praktikum 4 dalam mata kuliah DPBO untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.*

## TUGAS
Download Kode PHP pada link berikut ini : https://drive.google.com/file/d/1Ium3hM1U1wMG5toCdg3dghAqormv4hvm/view?usp=sharing
1. Buatlah database berdasarkan kode tersebut
2. Ubah arsitektur project tersebut menggunakan MVC
3. Tambahkan tabel baru (1 - 2) yang berelasi dengan tabel yang sudah ada (Tabel dan Relasinya bebas ya)
4. Buat CRUD dari tabel  baru tersebut

Note:
* Deadline: 1 Mei 2024 (C1), 7 Mei 2024 (C2)
* Program dikumpulkan pada repository publik GitHub dengan nama “TP4DPBO2024…”, dengan … diisi kelas (C1/C2).
* Struktur folder:
    + source_code
     	+ program
    + SQL file
    + video_preview.mp4 / gif
    * README.md
* File README berisi desain program, penjelasan alur, dan dokumentasi saat program dijalankan (screenshot & record).
* Tidak usah membuat UML ya gaes
* Submit link repository pada form berikut: https://forms.gle/7q2sWJidaqkY41sY8

## DESAIN PROGRAM
![image](https://github.com/Aliffaturahman/TP4DPBO2024C1/assets/100842759/1568c5cf-fe3a-48f8-bd00-cd4fbd3eab86)

Program ini terdiri dari 3 tabel, yaitu tabel members, tabel job, dan tabel company.

1. **Tabel Members**

Tabel ini terdiri dari 7 atribut, diantaranya id, name, email, phone, join_date, job_id, dan id_company. Terdapat sebuah primary key pada tabel ini yaitu atribut id, selain itu terdapat juga foreign key yaitu atribut job_id (yang menghubungkan tabel ini dengan tabel job) dan atribut id_company (yang menghubungkan tabel ini dengan tabel company).

2. **Tabel Job** 

Tabel ini terdiri dari 2 atribut, yaitu atribut id_job dan atribut nama_job. Atribut id_job merupakan primary key dari tabel ini dan menjadi foreign key di tabel members.

3. **Tabel Company** 

Tabel ini terdiri dari 2 atribut, yaitu atribut id_company dan atribut name_company. Atribut id_company merupakan primary key dari tabel ini dan menjadi foreign key di tabel members.

## PENJELASAN ALUR
Tampilan awal dari program ini adalah halaman Home yang didalamnya terdapat tabel member yang akan memperlihatkan ID, Name, Email, Phone, Joining Date, Job, Company, dan Actions. Kemudian terdapat juga 3 fitur, yaitu "add new" yangmana dengan fitur ini user dapat menambah data member baru. Kemudian fitur edit, user dapat memilih data pada tabel di halaman Home kemudian menekan tombol "edit" yang nantinya user dapat merubah data tersebut dengan data yang baru. Terakhir fitur delete, user dapat menghapus data dari tabel dengan menekan tombol "delete".

Kemudian terdapat halaman Job dan Company yang isinya hampir sama seperti halaman Home, yaitu menampilkan tabel. Perbedannya hanya pada atribut tabelnya saja yaitu ketika pada halaman Job atribut tabel hanya berisi ID, Daftar Job, dan Actions, kemudian pada halaman Company terdapat atribut ID, Daftar Company, dan Actions. Fitur yang terdapat pada halaman Job dan Company juga ada 3, yaitu add data baru, edit data, dan juga delete data. Setelah user menambahkan data baru pada halaman Job dan Company, user dapat menggunakan data baru tersebut pada saat ingin menambahkan member di halaman Home. 

## DOKUMENTASI
* Halaman Home

![Home - 1 Tampilan Awal](https://github.com/Aliffaturahman/TP4DPBO2024C1/assets/100842759/7274efe7-0d45-4cfd-8385-bd4967090eb3)

* Halaman Job

![Job - 1 Tampilan Awal](https://github.com/Aliffaturahman/TP4DPBO2024C1/assets/100842759/be766a41-7d88-479f-886a-2fc4ea73b5d8)

* Halaman Company

![Company - 1 Tampilan Awal](https://github.com/Aliffaturahman/TP4DPBO2024C1/assets/100842759/51e054c1-cb08-4f92-ae29-d22ce7f537ba)

### Video Demo dan Penjelasan Program

**1. CRUD pada halaman Home**

https://github.com/Aliffaturahman/TP4DPBO2024C1/assets/100842759/93483136-7523-43d6-ad1a-73efd9e74cbf

**2. CRUD pada halaman Job**

https://github.com/Aliffaturahman/TP4DPBO2024C1/assets/100842759/84a92285-cdbb-4a69-824d-be6f9a4a41ec

**3. CRUD pada halaman Company**

https://github.com/Aliffaturahman/TP4DPBO2024C1/assets/100842759/b15d82a8-37ff-4ef3-8501-047af8e5c2dc
