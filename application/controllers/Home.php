<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function index()
	{
		// $this->data['comment_count'] = $this->get_comments();
		// $this->data['percentage'] = $this->get_percentage();
		// echo $percentage;
		$this->data['comments'] = $this->get_comments();
		$this->template->load('template', 'home_page', $this->data);
		//		$this->load->view('home_page');
	}

	public function get_comments()
	{
		$this->load->library('curl');
		$posts = json_decode($this->curl->simple_get("https://graph.facebook.com/me?fields=feed&access_token=EAAJF37XHtRkBALF7nvu5Yi1XlQ3s7WAFooAVIbZCitRDP0wZB3pKqE1d7zwqJIXnhf6fgyVZAviAGuqKFzM0oZAPJKjxbZBZAJbZANvJPEhkZClza3375OYMSfbwdW7qjhPzsIl7Q7Lehow4zpDWeeCLWNG2LgsGVaGu0kOCfCRyeaW2UwMFjOyo"), true);

		$comments_array = array();
		foreach ($posts['feed']['data'] as $key => $value) {
			if (array_key_exists('message', $value) && strpos($value['message'], '#Cadbury') !== false) {
				$post_id = $value['id'];
				$comments = json_decode($this->curl->simple_get("https://graph.facebook.com/$post_id/comments?summary=1&access_token=EAAJF37XHtRkBALF7nvu5Yi1XlQ3s7WAFooAVIbZCitRDP0wZB3pKqE1d7zwqJIXnhf6fgyVZAviAGuqKFzM0oZAPJKjxbZBZAJbZANvJPEhkZClza3375OYMSfbwdW7qjhPzsIl7Q7Lehow4zpDWeeCLWNG2LgsGVaGu0kOCfCRyeaW2UwMFjOyo"), true);

				foreach ($comments['data'] as $comment_key => $comment_value) {

					$comments_array[] = $comment_value['message'];
				}
			}
		}
		return $comments_array;
	}

	public function get_comments_count()
	{
		$this->load->library('curl');
		$posts = json_decode($this->curl->simple_get("https://graph.facebook.com/me?fields=feed&access_token=EAAJF37XHtRkBALF7nvu5Yi1XlQ3s7WAFooAVIbZCitRDP0wZB3pKqE1d7zwqJIXnhf6fgyVZAviAGuqKFzM0oZAPJKjxbZBZAJbZANvJPEhkZClza3375OYMSfbwdW7qjhPzsIl7Q7Lehow4zpDWeeCLWNG2LgsGVaGu0kOCfCRyeaW2UwMFjOyo"), true);

		$comment_count = 1;
		foreach ($posts['feed']['data'] as $key => $value) {
			if (array_key_exists('message', $value) && strpos($value['message'], '#Cadbury') !== false) {
				$post_id = $value['id'];
				$comments = json_decode($this->curl->simple_get("https://graph.facebook.com/$post_id/comments?summary=1&access_token=EAAJF37XHtRkBALF7nvu5Yi1XlQ3s7WAFooAVIbZCitRDP0wZB3pKqE1d7zwqJIXnhf6fgyVZAviAGuqKFzM0oZAPJKjxbZBZAJbZANvJPEhkZClza3375OYMSfbwdW7qjhPzsIl7Q7Lehow4zpDWeeCLWNG2LgsGVaGu0kOCfCRyeaW2UwMFjOyo"), true);

				foreach ($comments['data'] as $comment_key => $comment_value) {

					++$comment_count;
				}
			}
		}
		return $comment_count;
	}

	public function get_percentage()
	{
		$max_comment = 1000;
		$comment_count = $this->get_comments_count();

		$percentage = ($comment_count * 100) / $max_comment;
		die(json_encode($percentage));
		// return $percentage;
	}

	public function stories()
	{
		// $percentage = $this->get_percentage();

		$this->data['comments'] = $this->get_comments();
		$this->template->load('template', 'stories', $this->data);
	}
}
