<?php
//application/controllers/Pics.php
class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
//                $this->load->model('news_model');
//                $this->load->helper('url_helper');
        }

        public function index()
        {  
                
            
            $api_key = $this->config->item('flickrKey');

            $tags = 'cats,kittens,bears,polar';

            $perPage = 25;
            $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
            $url.= '&api_key=' . $api_key;
            $url.= '&tags=' . $tags;
            $url.= '&per_page=' . $perPage;
            $url.= '&format=json';
            $url.= '&nojsoncallback=1';

            $response = json_decode(file_get_contents($url));
            $pics = $response->photos->photo;

            /*
            echo "<pre>";
            echo var_dump($pics);

            echo "</pre>";
            die;
            */



            foreach($pics as $pic){

                $size = 'm';
                $photo_url = '
                http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

                echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";

            }

            
            
            
            
            
            
            
            
            /*
            
                $this->config->set_item('title', 'The Tabby Times');
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'Tabby News Archive';

                //$this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                //$this->load->view('templates/footer', $data);
            
           */ 
            
        }

        public function view($slug = NULL)
        {
            
         /*
            //slug without dashes 
                $dashless_slug = str_replace("-", " ", $slug);
            
                //uppercase slug words
                $dashless_slug = ucwords($dashless_slug);
            
                //use dashless slug for title
                $this->config->set_item('title', 'News Flash - ' . $dashless_slug);
                    
            
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item']))
                {
                        show_404();
                }

                $data['title'] = $data['news_item']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
            
            */
        }
    
    
       
   
}