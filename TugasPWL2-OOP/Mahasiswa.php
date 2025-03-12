<?php
class Mahasiswa
{
    private $nim;
    private $nama;

    public function setData($nim, $nama)
    {
        $this->nim = htmlspecialchars($nim);
        $this->nama = htmlspecialchars($nama);
    }

    public function getData()
    {
        return [
            "nim" => $this->nim,
            "nama" => $this->nama
        ];
    }
}
?>