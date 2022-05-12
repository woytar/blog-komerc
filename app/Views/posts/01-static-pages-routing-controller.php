Przykłady kodu </br>
___________________________________</br>
<b>Wyświetlenie strony home</b></br>



<i>Plik app\Controller\Posts.php</i></br>
<pre style="font-family:'Courier New';font-size:15px;color:blue">
	public function view($page = 'home')
		{
		if (! is_file(APPPATH . 'Views/posts/' . $page . '.php'))
			{
			// Whoops, we don't have a page for that!
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
			}
		$data['title'] = ucfirst($page); // Capitalize the first letter
		echo view('templates/header', $data);
		echo view('posts/' . $page, $data);
		echo view('templates/footer', $data);
		}
</pre>



<pre>
<i>Strone domowa ze spisem treści app/Views/posts/home.php</i>

<textarea name="templateHeader" rows="10" cols="100" style="font-family:'Courier New';font-size:15px;color:blue">
	Blog programistyczny, technologia PHP, framework CodeIgnieter </br>

	/posts/view/home.php</br>

	<a class="w3-text-blue" href="/posts/view/01-static-pages-routing-controller">Strony statyczne, routing i kontroler</a> </br>
	<a class="w3-text-blue" href="/posts/view/...">...</a> </br>

	....
</textarea>

</pre>





<i>Plik app\Views\templates\header.php</i></br>

<textarea name="templateHeader" rows="10" cols="50" style="font-family:'Courier New';font-size:15px;color:blue"


<!doctype html>
<html>
<head>
    <title>CodeIgniter Tutorial</title>
</head>
<body>
    <h1><?= esc($title) ?></h1>
</textarea>
</br>
</br>

<i>Plik app\Views\templates\footer.php</i></br>

<textarea name="templateFooter" rows="10" cols="50" style="font-family:'Courier New';font-size:15px;color:blue"
</br>
    <em>&copy; 2021</em>
</body>
</html>
</textarea>
</br>
</br>


<i>wprowadzamy routing, wyświetlanie zawartości home w domenie głównej</i>
<i>Plik app\Config\Routes.php</i></br>
<pre style="font-family:'Courier New';font-size:15px;color:blue">
	$routes->get('/', 'Posts::view');</br>
</pre>


$routes->get('/', 'Posts::home', ['as' => 'home']);</br>
$routes->match(['get', 'post'], 'posts/item/uploaditemimage/(:num)', 'Posts::uploaditemimage/$1'); </br>
$routes->match(['get', 'post'], 'posts/item/deleteitemimage/(:num)', 'Posts::deleteitemimage/$1'); </br>
$routes->match(['get', 'post'], 'posts/item/update/(:num)', 'Posts::update/$1'); </br>
//$routes->get('posts/item/edittags/(:num)/delete/(:num)', 'Posts::deleteTag/$1/$2'); </br>
$routes->match(['get', 'post'], 'posts/item/edittags/(:num)/(:alpha)/(:num)', 'Posts::editTag/$1/$2/$3'); </br>

$routes->match(['get', 'post'], 'posts/create', 'Posts::create', ['as' => 'postscreate']); </br>
$routes->get('posts/tags', 'Posts::tagcloud', ['as' => 'tagcloud']);</br>

$routes->get('posts', 'Posts::overview', ['as' => 'overview']);</br>
//$routes->get('posts/page/(:num)', 'Posts::overview/$1');</br>
//$routes->get('posts/page/(:num)/(:alpha)', 'Posts::overview/$1/$2');</br>
$routes->get('posts/(:num)', 'Posts::overview/$1');</br>
$routes->get('posts/(:num)/(asc)', 'Posts::overview/$1/$2', ['as' => 'ascsort']);</br>
$routes->get('posts/(:num)/(desc)', 'Posts::overview/$1/$2', ['as' => 'descsort']);</br>
$routes->get('posts/(:num)/(ASC)', 'Posts::overview/$1/$2');</br>
$routes->get('posts/(:num)/(DESC)', 'Posts::overview/$1/$2');</br>



$routes->get('posts/tag/(:num)', 'Posts::overviewtag/$1');</br>
$routes->get('posts/tag/(:num)/(:num)', 'Posts::overviewtag/$1/$2');</br>
$routes->get('posts/tag/(:num)/(:num)/(asc)', 'Posts::overviewtag/$1/$2/$3', ['as' => 'asctagsort']);</br>
$routes->get('posts/tag/(:num)/(:num)/(desc)', 'Posts::overviewtag/$1/$2/$3', ['as' => 'desctagsort']);</br>
$routes->get('posts/tag/(:num)/(:num)/(ASC)', 'Posts::overviewtag/$1/$2/$3');</br>
$routes->get('posts/tag/(:num)/(:num)/(DESC)', 'Posts::overviewtag/$1/$2/$3');</br>




//$routes->get('posts/item/uploaditemimage/(:num)', 'Posts::uploaditemimage/$1');</br>
$routes->get('posts/item/(:num)', 'Posts::view/$1');</br>
$routes->get('posts/item/delete/(:num)', 'Posts::delete/$1');</br>

$routes->get('posts/uploadimage', 'Posts::uploadimage', ['as' => 'uploadimage']);</br>
$routes->get('posts/viewImages', 'Posts::viewImages');</br>
$routes->get('posts/showimage', 'Posts::showimage');</br>