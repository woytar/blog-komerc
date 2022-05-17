<h1><?= esc($title) ?></h1>

<b>Czytanie zmiennych z pliku</b></br>

Funkcjonalności:</br>
<a class="w3-text-blue" href ="<?= base_url(); ?>/posts/readenv">Czytaj wartość z .env</a></br>



<i>Routing</i>
<i>app\Config\Routes.php</i></br>
<pre style="font-family:'Courier New';font-size:15px;color:blue">
	$routes->get('/posts/readenv', 'Posts::readEnvVar');
</pre>

<i>app\Controllers\Posts.php</i></br>
<textarea name="templateHeader" rows="20" cols="100" style="font-family:'Courier New';font-size:15px;color:blue">
	public function readenvvar() {
		
		echo view('templates/header');
		echo view('posts/041-read-from-env', $data);
		echo view('templates/footer');
	}
	
	
</textarea>
</br>
</br>