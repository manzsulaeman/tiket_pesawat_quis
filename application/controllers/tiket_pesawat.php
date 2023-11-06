<?php
class tiket_pesawat extends CI_controller{
    function __constuct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_data'); 
    }

    function index(){
        $this->load->model('model_data');
        $data['ketentuan'] = $this->model_data->tampil_data()->result();
        $this->load->view('input',$data);
    }
    public function proses() {
        $this->load->model('model_data'); 

            $nama = $this->input->post('nama');
            $kode = $this->input->post('kode');
            $kelas = $this->input->post('kelas');
            $jumlah = $this->input->post('jumlah_tiket');
            
            $harga = 0;
            $total_bayar = 0;
            
            if ($kode == 'Garuda') {
                $harga = $this->model_data->get_harga('GRD', $kelas);
            
                $total_bayar = $harga * $jumlah;
            
                $data = array(
                    'nama' => $nama,
                    'nama_pesawat' => 'Garuda', 
                    'kelas_layanan' => $kelas,
                    'harga_tiket' => $harga,
                    'jumlah_tiket' => $jumlah,
                    'total_bayar' => $total_bayar
                );
                $this->model_data->input_data($data, 'pembelian');
                redirect('tiket_pesawat/hasil');
            } elseif($kode == 'Merpati') {
                $harga = $this->model_data->get_harga('MPT', $kelas);
            
                $total_bayar = $harga * $jumlah;
            
                $data = array(
                    'nama' => $nama,
                    'nama_pesawat' => 'Merpati', 
                    'kelas_layanan' => $kelas,
                    'harga_tiket' => $harga,
                    'jumlah_tiket' => $jumlah,
                    'total_bayar' => $total_bayar
                );
            
                $this->model_data->input_data($data, 'pembelian');
                redirect('tiket_pesawat/hasil');
            } elseif($kode == 'Batavia') {
                $harga = $this->model_data->get_harga('BTV', $kelas);
            
                $total_bayar = $harga * $jumlah;
            
                $data = array(
                    'nama' => $nama,
                    'nama_pesawat' => 'Batavia', 
                    'kelas_layanan' => $kelas,
                    'harga_tiket' => $harga,
                    'jumlah_tiket' => $jumlah,
                    'total_bayar' => $total_bayar
                );
            
                $this->model_data->input_data($data, 'pembelian');
                $this->load->view('tiket_pesawat/hasil', $data);
            }
        }
        function hasil(){
            $this->load->model('model_data');
            $data['pembelian'] = $this->model_data->hasil()->result();
            $this->load->view('tampil',$data);

}
function hapus($no_pembeli){
    $this->load->model('model_data'); 
    $where = array('no_pembeli' => $no_pembeli);
    $this->model_data->hapus($where,'pembelian');
    redirect('tiket_pesawat/hasil');
}
}
    