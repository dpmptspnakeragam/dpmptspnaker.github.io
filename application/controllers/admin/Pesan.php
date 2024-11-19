<?php
class Pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('username') == "") {
            redirect('login');
        }
        $this->load->model('Model_pesan');
    }

    public function index()
    {
        $messagesByIp = $this->Model_pesan->get_messages_grouped_by_ip();

        $data['messagesByIp'] = $messagesByIp;

        $this->load->view('templates/header_admin');
        $this->load->view('templates/navbar_admin');
        $this->load->view('admin/pesan', $data);
        $this->load->view('templates/footer_admin');
    }

    public function load_messages()
    {
        $ipAddress = $this->input->get('ip');
        $lastMessageId = $this->input->get('last_id', true);

        $messages = $this->Model_pesan->get_messages_by_ip($ipAddress, $lastMessageId);

        echo json_encode($messages);
    }

    public function reply_message()
    {
        $message_id = $this->input->post('message_id');
        $reply_message = $this->input->post('reply_message');

        $isReplied = $this->Model_pesan->reply_message($message_id, $reply_message);

        if ($isReplied) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }

    public function mark_all_as_read()
    {
        $ip = $this->input->post('ip');

        if ($this->Model_pesan->mark_all_as_read_by_ip($ip)) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }

    public function fetch_messages_overview()
    {
        $messagesByIp = $this->ChatModel->getMessageOverview();
        return $this->response->setJSON(['messagesByIp' => $messagesByIp]);
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

    public function load_table_data()
    {
        $timestamp = $this->input->get('timestamp');
        $this->load->model('Model_pesan');

        $newMessages = $this->Model_pesan->get_new_messages($timestamp);

        echo json_encode([
            'newMessages' => !empty($newMessages),
            'messages' => $newMessages,
            'latestTimestamp' => time()
        ]);
    }
}
