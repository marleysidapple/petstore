<?php

namespace App\Services\Utilities;

use Intervention\Image\ImageManager;

class Image
{
	/**
	 * Instance of Intervention\Image\ImageManager
	 * @var Object
	 */
	protected $image;

	/**
	 * New Image name
	 * @var String
	 */
	protected $imgName;

	/**
	 * Root path for image file
	 * @var string
	 */
	protected $rootPath = 'users/images/';
	public static $imagePath = 'users/images/';

	/**
	 * Injecting dependencies
	 * 
	 * @param ImageManager $image
	 */
	function __construct(ImageManager $image)
	{
		$this->image = $image;
	}

	/**
	 * Create a new name for the image
	 * 
	 * @return String
	 */
	public function newImageName($file, $size, $timestamp)
	{
		$imgName = explode('.',($timestamp.rtrim(implode('-', explode(' ', strtolower($file))), '.')));
		$this->imgName = $imgName[0].'_'.$size['width'].'_'.$size['height'].'.'.$imgName[1];
		return $this->imgName;
	}

	/**
	 * Save the image to the filesystem
	 * 
	 * @param  object $file
	 * @return string
	 */
	public function save($file, $folderName = null)
	{
		$this->resize($file, $folderName);
		return $this->imgName;
	}

	/**
	 * Resize the image
	 * 
	 * @return object
	 */
	private function resize($file, $folderName = null)
	{
		if(null !== $folderName) {
			$this->rootPath = $this->rootPath.basename($folderName).'/';
		}

		$img = $this->image->make($file);

		$size['width'] = $img->width();
		$size['height'] = $img->height();

		$image = $img->fit($size['width'], $size['height'], function ($constraint) {
	        $constraint->upsize();
	    });

    	$this->newImageName($file->getClientOriginalName(), $size, time());
	    $img->save($this->rootPath.$this->imgName);
	}

	public function withFilePath($file)
	{
		if('' == $file) return '';	
		return $this->rootPath.$file;
	}

	public static function getImageFullPath()
	{
		return 'http://'.$_SERVER['HTTP_HOST'].'/'.static::$imagePath;
	}

}