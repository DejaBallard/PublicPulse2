<?php
// ---------------- Get Models ----------------
    require_once "Model/NavModel.php";
class NavController
    {
// -------- Declaring Top Level ------------

    private $_title = "Home - Folded";
    private $_navModel;
    
// -------- Construction --------------    
    function __construct(){
        $this->_navModel = new NavModel();
        $lcView = $this->_navModel->_CurrentView;
        
    // ------- Navigating to correct view based on the request
        if(isset($_REQUEST["cmd"]))
            switch($_REQUEST["cmd"])
            {
                case "home":
                    $lcView = "HomeView.php";
                    break;
                case "newsfeed":
                    $lcView = "NewsFeedView.php";
                    break;
                case "events":
                    $lcView = "EventsView.php";
                    break;
                case "Pulse":
                    $lcView = "PulseView.php";
                    break;
                case "Councillors":
                    $lcView = "CouncillorsView.php";
                    break;
                case "test":
                    $lcView = "test.php";
                    break;     
                default:
                    $lcView = "HomeView.php";
                    break;
            }
        $this->_navModel->SaveCurrentView($lcView);
        require_once("View//".$lcView);
    }
}
$NavController = new NavController();