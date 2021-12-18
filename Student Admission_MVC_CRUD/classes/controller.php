<?php 

    abstract class Controller {
        protected $request;
        protected $action;

        public function __construct($action, $request) {
            $this->action = $action;
            $this->request = $request;
        }

        public function executeAction() {
            return $this->{$this->action}();
        }

        protected function returnView($viewmodel, $fullview) {
            $view = 'views/Home/index.php';
            if($fullview) {
                require('views/main.php');
            } else {
                require($view);
            }
        }
    }

?>