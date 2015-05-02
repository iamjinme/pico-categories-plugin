<?php

/**
 * Add categories and keywords to post
 *
 * @author Jinme Mirabal
 * @link http://blog.jinme.org
 * @license http://opensource.org/licenses/MIT
 */
class Categories_On_Fly {

  public $is_category = false;
  public $category = '';
  
	public function __construct()
	{
		$this->config = array(
      'url_key' => 'category' . '/',
      'meta_category_name' => 'Categories',
      'meta_keyword_name' => 'Keywords',
		);
	}

	public function config_loaded(&$settings)
	{
		// Pull config options for site config
		if (isset($settings['category_url_key']))
			$this->config['url_key'] = $settings['category_url_key'] . '/';
		if (isset($settings['category_meta_name']))
			$this->config['meta_category_name'] = $settings['category_meta_name'];
		if (isset($settings['keyword_meta_name']))
			$this->config['meta_keyword_name'] = $settings['keyword_meta_name'];
	}
      
  public function request_url(&$url)
	{
    $pos = strpos($url,$this->config['url_key']);
    if ($pos !== false) {
      $this->is_category = true;
      $this->category = substr($url, $pos + strlen($this->config['url_key']));
      $url = '';
    }
	}

	public function before_read_file_meta(&$headers)
	{
		$headers['categories'] = $this->config['meta_category_name'];
    $headers['keywords'] = $this->config['meta_keyword_name'];
	}
	
	public function get_page_data(&$data, $page_meta)
	{
    if ($data['date']) {
      $data['categories'] = $page_meta['categories'];
    }
	}
  
  public function get_pages(&$pages, &$current_page, &$prev_page, &$next_page)
	{
    if ($this->is_category) {
      $category_pages = array();
			foreach($pages as $key=>$page) {
				if ($page['categories']) {
          if (strstr($page['categories'], $this->category)) {
            $category_pages[$key] = $page;
          }
				}
			}
      $pages = $category_pages;
    }
	}
  
}

?>
