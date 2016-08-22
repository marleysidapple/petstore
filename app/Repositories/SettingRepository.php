<?php

namespace App\Repositories;

use App\Setting;

class SettingRepository
{
	/**
	 * Injecting dependencies
	 * 
	 * @param Setting $setting
	 */
	function __construct(Setting $setting)
	{
		$this->setting = $setting;
	}

	public function all()
	{
		return $this->setting->get();
	}

	public function update(array $data)
	{
		foreach ($data['key'] as $key => $value) {
			$setting = $this->setting->where('key', $key)->first();
			$setting->update([
				'key' => $key,
				'value' => $value
			]);	
		}

		return $this->all();
	}

	public function getYoutubePlaylist()
	{
		return $this->setting->where('key', 'youtube_playlist')->first()->value;
	}
}
