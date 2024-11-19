<?php
class Pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Ensure the user is logged in
        if ($this->session->userdata('username') == "") {
            redirect('login');
        }
        // Load the Model_pesan to interact with the database
        $this->load->model('Model_pesan');
    }

    // Display the admin chat page
    public function index()
    {
        // Get unread messages grouped by IP address
        $messagesByIp = $this->Model_pesan->get_messages_grouped_by_ip();

        // Pass data to the view for rendering
        $data['messagesByIp'] = $messagesByIp;

        // Load views
        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/pesan', $data);
        $this->load->view('templates/footer_admin');
    }

    public function load_messages()
    {
        $ipAddress = $this->input->get('ip');
        $lastMessageId = $this->input->get('last_id', true);

        // Debug untuk memastikan parameter yang diterima benar
        log_message('debug', 'IP Address: ' . $ipAddress . ' Last Message ID: ' . $lastMessageId);

        $this->load->model('Model_pesan');
        $this->Model_pesan->mark_as_read_by_ip($ipAddress);

        // Pastikan data yang diambil sesuai
        $messages = $this->Model_pesan->get_messages_by_ip($ipAddress, $lastMessageId);
        log_message('debug', 'Messages: ' . print_r($messages, true));

        echo json_encode($messages);
    }

    // Method to reply to a user's message
    public function reply_message()
    {
        $message_id = $this->input->post('message_id'); // The message ID to reply to
        $reply_message = $this->input->post('reply_message'); // The admin's reply message

        // Call the model's reply_message method to send the reply
        $isReplied = $this->Model_pesan->reply_message($message_id, $reply_message);

        // Return a response based on the result of the reply
        if ($isReplied) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }

    // public function mark_all_as_read()
    // {
    //     $ip = $this->input->post('ip'); // Get the IP address from the request

    //     if ($this->Model_pesan->mark_all_as_read_by_ip($ip)) {
    //         echo json_encode(['status' => 'success']);
    //     } else {
    //         echo json_encode(['status' => 'error']);
    //     }
    // }

    public function load_table_data()
    {
        $timestamp = $this->input->get('timestamp'); // Mendapatkan timestamp terakhir
        $this->load->model('Model_pesan');

        // Mengambil pesan baru berdasarkan timestamp
        $newMessages = $this->Model_pesan->get_new_messages($timestamp);

        echo json_encode([
            'newMessages' => !empty($newMessages),
            'messages' => $newMessages,
            'latestTimestamp' => time() // Mengembalikan timestamp terbaru
        ]);
    }

    public function delete_messages_and_images_by_ip()
    {
        $ip = $this->input->post('ip');
        if ($this->Model_pesan->deleteMessagesAndImagesByIp($ip)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }
}
