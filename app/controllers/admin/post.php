<?php

    class post extends Controller
    {
        private PostModel $post_model;

        public function __construct() {
            $this->post_model = $this->model("PostModel");
        }

        public function index() {
            $kq = $this->post_model->getData();
            $data = [
                "page" => "admin/index",
                "array" => $kq
            ];
            $this->view("adminlayout", $data);
        }

        public function getallpost() {
            $kq = $this->post_model->getAllData();
            $data = [
                "page" => "admin/index",
                "array" => $kq
            ];
            $this->view("adminlayout", $data);
        }
    }

?>