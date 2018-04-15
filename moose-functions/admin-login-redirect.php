<?php 

$page_id = "";
$product_pages_args = array(
	'meta_key' => '_wp_page_template',
	'meta_value' => 'login.php'
);
$product_pages = get_pages($product_pages_args);

foreach($product_pages as $product_page)
	{
		$page_id.= $product_page->ID;
	}

function goto_login_page()
	{
	global $page_id;

	$login_page = home_url('/');
	// $login_page = home_url('/?page_id=' . $page_id . '/');

	$page = basename($_SERVER['REQUEST_URI']);
		if ($page == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET')
		{
			wp_redirect($login_page);
			exit;
		}
		if ($page == "wp-admin" && $_SERVER['REQUEST_METHOD'] == 'GET')
		{
			wp_redirect($login_page);
			exit;
		}
		if ($page == "wp-signup.php" && $_SERVER['REQUEST_METHOD'] == 'GET')
		{
			wp_redirect($login_page);
			exit;
		}
		if ($page == "wp-admin/index.php" && $_SERVER['REQUEST_METHOD'] == 'GET')
		{
			wp_redirect($login_page);
			// wp_redirect("/wp-admin/index.php");
			exit;
		}
	}

add_action('init', 'goto_login_page');

function login_failed()
	{
		global $page_id;

		// $login_page = home_url('/');
		// $login_page = home_url('/?page_id=' . $page_id . '/');
		// wp_redirect($login_page . '&login=failed');
		wp_redirect("/html-login-failed/");
		exit;
	}

add_action('wp_login_failed', 'login_failed');

function blank_username_password($user, $username, $password)
	{
	global $page_id;
	$login_page = home_url('/?page_id=' . $page_id . '/');
	if ($username == "" || $password == "")
		{
			// wp_redirect($login_page . "&login=blank");
			wp_redirect("/html-login-empty/");

			exit;
		}
	}

add_filter('authenticate', 'blank_username_password', 1, 3);

// echo $login_page = $page_path ;

function logout_page()
	{
		global $page_id;

		$login_page = home_url('/');
		// $login_page = home_url('/?page_id=' . $page_id . '/');
		
		wp_redirect( $login_page );
		// wp_redirect($login_page . "&login=false");

		exit;
	}

add_action('wp_logout', 'logout_page');

$page_showing = basename($_SERVER['REQUEST_URI']);

if (strpos($page_showing, 'failed') !== false)
	{

		// wp_redirect("/html-login/");
		wp_redirect("/html-login-failed/");

		// echo '<p class="error-msg"><strong>ERROR:</strong> Invalid username and/or password.</p>';
	}
elseif (strpos($page_showing, 'blank') !== false)
	{
		// wp_redirect("/html-login/");
		wp_redirect("/html-login-empty/");

		
		// echo '<p class="error-msg"><strong>ERROR:</strong> Username and/or Password is empty.</p>';
	}

// REDIRECT TO ADMIN DASHBOARD AFTER LOGIN 
	
function admin_default_page() {
  return '/wp-admin/index.php';
}

add_filter('login_redirect', 'admin_default_page');




