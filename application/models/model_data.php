<?php
class Model_data extends CI_model{

    function tampil_data (){
        return $this->db->get('layanan_pesawat');
    }

    public function get_harga($kode_pesawat, $kelas) {
        $this->db->where('kode_pesawat', $kode_pesawat);
        $this->db->where('kelas_layanan', $kelas);
        $query = $this->db->get('transaksi');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->harga_tiket;
        } else {
            return 0; 
        }
    }

    public function input_data($data, $tabel) {
        $this->db->insert($tabel,$data);
    }
    function hasil (){
        return $this->db->get('pembelian');
    }
    function hapus($whare,$table) {
        $this->db->where($whare);
        $this->db->delete($table);
    }

}
?>