<?php

namespace App\Views;

use App\App;
use App\Users\User;

class Navigation extends \Core\View
{
    public function __construct($data = [])
    {
        parent::__construct($data);

        $this->addLink('left', '/', 'Shop');
        $user = App::$session->getUser();

        if ($user) {
            $this->addLink('left', '/cart.php', 'Your Cart');
            $this->addLink('right', '/logout.php', "logout($user->email)");
            $user->role === User::ROLE_ADMIN ? $this->add_admin_links() : null;
        } else {
            $this->addLink('right', '/login.php', 'Login');
            $this->addLink('right', '/register.php', 'Register');
        }
    }

    public function addLink($section, $url, $title)
    {
        $link = ['url' => $url, 'title' => $title];
        if ($_SERVER['REQUEST_URI'] === $link['url']) {
            $link['active'] = true;
        }
        $this->data[$section][] = $link;
    }

    public function add_admin_links()
    {
        $this->addLink('left', '/admin/products/admin.php', 'Admin');
    }

    public function render($path = ROOT . '/app/templates/navigation.php')
    {
        return parent::render($path);
    }

}