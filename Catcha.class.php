<?php
session_start();

class Catcha {
	
	public static $template = "<label>Which is the cat?<br/></label>{catcha}";

	public static $inputID = "catcha";

	public static $imageSize = 100;

	public static $cacheLifetime = 3600000;

	public static function check() {

		// if there is no request
		if (!isset($_REQUEST[self::$inputID])) return false;

		if ($_REQUEST[self::$inputID] != $_SESSION[self::$inputID]) return false;

		return true;
	}

	public static function render($imageSize = 0) {
		if ($imageSize != 0)
			self::$imageSize = $imageSize;

		$values = self::generate_values();

		$_SESSION[self::$inputID] = $values['real'];

		$cats = self::fetch_cats();

		$pigeons = self::fetch_pigeons();

		$realInput = self::generate_input(true,$values['real'], $cats);

		$fakeInput = array(
			self::generate_input(false,$values['fake'][0], $pigeons),
			self::generate_input(false,$values['fake'][1], $pigeons)
		);

		$inputs = array(
			$realInput,
			$fakeInput[0],
			$fakeInput[1],
		);

		shuffle($inputs);

		$catcha = implode("", $inputs);

		$html = self::$template;
		$html = str_replace("{catcha}", $catcha, $html);
		$html .= "<br/><a href=''>None of these cats? Click here to refresh pictures</a>";

		return $html;
	}

	public static function fetch_cats() {
		$data = file_get_contents('cats.txt');
		if ($data) {
			$data = json_decode($data);
		}

		if (!$data || $data->expiry < time()) {
			$url = "https://api.instagram.com/v1/tags/cat/media/recent?client_id=e9f7eb8ef02d47838b642a0c42e9acf0";
			$data = file_get_contents($url);
			$data = json_decode($data);
			$data = $data->data;
			$toFile = array(
				"expiry" => time() + self::$cacheLifetime,
				"data" => $data
			);
			file_put_contents('cats.txt', json_encode($toFile));
		} else {
			$data = $data->data;
		}

		return $data;
	}

	public static function fetch_pigeons() {
		$data = file_get_contents('pigeons.txt');
		if ($data) {
			$data = json_decode($data);
		}

		if (!$data || $data->expiry < time()) {
			$url = "https://api.instagram.com/v1/tags/pigeon/media/recent?client_id=e9f7eb8ef02d47838b642a0c42e9acf0";
			$data = file_get_contents($url);
			$data = json_decode($data);
			$data = $data->data;
			$toFile = array(
				"expiry" => time() + self::$cacheLifetime,
				"data" => $data
			);
			file_put_contents('pigeons.txt', json_encode($toFile));
		} else {
			$data = $data->data;
		}

		return $data;
	}

	public static function generate_input($isReal = false,$value, $imagesToChooseFrom) {

		$rand = rand(0,count($imagesToChooseFrom) - 1);
		$img = $imagesToChooseFrom[$rand];

		$src = $img->images->thumbnail->url;

		return "<label style='width:auto;display:inline;'><input name='".self::$inputID."' value='".$value."' type='radio' /><img src='".$src."' class='catcha_image' width='".self::$imageSize."' height='".self::$imageSize."' /></label>";

	}


	public static function generate_values() {

		// generate random variables for the values
		$randReal = rand();
		$randFake = rand();

		// just make sure they are not the same
		while ($randFake == $randReal) {
			$randFake = rand();
		}

		return array(
			"real" => $randReal,
			"fake" =>  array(
				$randFake,
				$randFake*10
			)
		);
	}


}