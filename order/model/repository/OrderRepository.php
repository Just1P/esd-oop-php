<?
require_once './order/model/entity/Order.php';

class OrderRepository {


    public function __construct(){
        session_start();
    }

    public function persist(Order $order): Order{
        $_SESSION['order'] = $order;
        return $order;
    }

    public function find(): ?order{
        if (!isset($_SESSION['order'])){
            return null;
        }
        return $_SESSION['order'];
    }
}