<h1><?= esc($title) ?></h1>



Funkcjonalności:</br>
<a class="w3-text-blue" href ="<?= base_url(); ?>/posts/read">Pokaż załadowane JPGi</a></br>



<i>Routing</i>
<i>app\Config\Routes.php</i></br>
<pre style="font-family:'Courier New';font-size:15px;color:blue">
	$routes->get('/posts/view/03-jpg-files/read', 'Posts::viewfiles');
	$routes->get('/posts/view/03-jpg-files/upload', 'Posts::uploadfile');
</pre>

<i>app\Controllers\Posts.php</i></br>
<textarea name="templateHeader" rows="20" cols="100" style="font-family:'Courier New';font-size:15px;color:blue">
	public function viewfiles() {
		helper('filesystem');
		$arr = directory_map('uploads');
		$pagetitle = "Lista załadowanych plików";
		$data = [
			'arr'  => $arr,
			'pagetitle' => $pagetitle,
		];
		echo view('templates/header');
		echo view('posts/031-read', $data);
		echo view('templates/footer');
	}
	
	public function uploadfile() {
		....
	}
	
	
</textarea>
</br>
</br>