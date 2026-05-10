<?php
class HomeController extends Controller {
    public function index() {
        $rentalModel = $this->model("Rental");
        $data["rental"] = $rentalModel->getRental();
        $this->view("home", $data);
    }
}
