<?php

	/**
	*	Shortcodes – shortcodes implementation
	*
	*	Various function to help with classes.
	*/

class Tags {
	
	private static $_html='';
	private static $_page;

	/*
		Tag class
	*/

	private static function i($key, $array){
		return array_key_exists($key, $array);
	}

	private static function applyTag($tag){
		$attributes = array();
		foreach ($tag->attributes as $attr){
			$attr = explode(':', $attr);
			if (count($attr) === 2)
				$attributes[$attr[0]] = $attr[1];
		}
		$function = 'tag'.ucfirst($tag->tag);
		return self::$function($attributes);
	}

	public static function apply($html, $page){
		$found = ''; $tagsFound = array();

		self::$_html = $html;
		self::$_page = $page;
		preg_match_all('/{{\s?([^}]*)\s?}}/', $html, $found, PREG_SET_ORDER);

		foreach ($found as $f){
			$original = $f[0];
			$raw = explode(' ', $f[1]);
			$tag = (object)array(
				'tag'=>array_shift($raw),
				'attributes'=>$raw
			);
			$html = str_replace($original, self::applyTag($tag), $html);
		}

		return $html;
	}

	/*
		tags included [$a = attributes array]
	*/

	private static function tagFigureimage($a){
		try{
			$figindex = self::i('figindex',$a) ? $a['figindex'] : null;
			$image=self::$_page->images->eq($a['index']);
			if (!$image)
				throw new Exception('Figureimage tag with non-existent image index');
			$figcaption=$image->description;

			$html = '<figure'.($figindex ? " id=\"{$figindex}\"" : '').'>';
			$html.= "<img src='{$image->url}' alt='{$figcaption}'>";
			$html.= "<figcaption>".($figindex?"<em>fig. $figindex</em> – ":'').
					$figcaption."</figcaption></figure>";

			return $html;
		} catch(Exception $e){
			echo 'Caught Exception: '.$e->getMessage()." \n";
		}
	}

}