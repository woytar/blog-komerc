<h1><?= esc($title) ?></h1>

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
	<a class="w3-text-blue" href="/posts/view/02-styles">Arkusze stylów</a> </br>

	....
</textarea>

</pre>





<i>app\Views\templates\header.php</i></br>

<textarea name="templateHeader" rows="10" cols="100" style="font-family:'Courier New';font-size:15px;color:blue"


<!doctype html>
<html>
<head>
    <title>Blog programistyczny, tutorial PHP CodeIgniter 4 </title>
</head>
<body>
    
</textarea>
</br>
</br>

<i>Plik app\Views\templates\footer.php</i></br>

<textarea name="templateFooter" rows="10" cols="100" style="font-family:'Courier New';font-size:15px;color:blue"
</br>
    <em>&copy; 2021</em>
</body>
</html>
</textarea>
</br>
</br>


<i>Routing</i>
<i>app\Config\Routes.php</i></br>
<pre style="font-family:'Courier New';font-size:15px;color:blue">
	$routes->get('/', 'Posts::view');</br>
</pre>

