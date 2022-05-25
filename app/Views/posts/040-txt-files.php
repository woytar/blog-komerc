<h1><?= esc($title) ?></h1>

<b>Czytanie zmiennych z pliku</b></br>

Funkcjonalności:</br>
<a class="w3-text-blue" href ="<?= base_url(); ?>/posts/readenv">Czytaj wartość z .env</a></br>



<i>Routing</i>
<i>app\Config\Routes.php</i></br>
<pre style="font-family:'Courier New';font-size:15px;color:blue">
	$routes->get('/posts/readenv', 'Posts::readenvvar');
</pre>

<i>app\Controllers\Posts.php</i></br>
<textarea name="templateHeader" rows="15" cols="100" style="font-family:'Courier New';font-size:15px;color:blue">
	public function readenvvar() {
		$title = "Zmienne odczytane z .env";
		$data = [
			'title' => $title,
			'srodowisko' => getenv('CI_ENVIRONMENT'),
			'any_key' => getenv('ANY_SECRET_KEY'),
		];
		echo view('templates/header');
		echo view('posts/041-read-from-env', $data);
		echo view('templates/footer');
	}
	
	
</textarea>

</br>

<a class="w3-text-blue" href ="<?= base_url(); ?>/posts/readtxt">Czytaj wartość z .txt</a></br>

<a class="w3-text-green" href ="https://www.w3schools.com/php/php_file_open.asp">Samouczek: https://www.w3schools.com/php/php_file_open.asp</a></br>




<i>Routing</i>
<i>app\Config\Routes.php</i></br>
<pre style="font-family:'Courier New';font-size:15px;color:blue">
	$routes->get('/posts/readtxt', 'Posts::readtxt');
</pre>

<i>app\Controllers\Posts.php</i></br>
<textarea name="templateHeader" rows="15" cols="100" style="font-family:'Courier New';font-size:15px;color:blue">
	public function readtxt() {
		$title = "Zmienne odczytane z .txt";
		$myfile = fopen("sample.txt", "r") or die("Unable to open file!");
		$txtcontent = fread($myfile,filesize("sample.txt"));
		fclose($myfile);
		$data = [
			'title' => $title,
			'txtcontent' => $txtcontent,
		];
		echo view('templates/header');
		echo view('posts/042-read-from-txt', $data);
		echo view('templates/footer');
	}
	
	
</textarea>

</br>
</br>