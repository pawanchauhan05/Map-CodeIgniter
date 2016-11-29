<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Map for CodeIgniter 3
 * 
 * This library helps you to get user geo location who currently
 * visiting your site.
 * eg. ip address, latitude, longitude, city etc.
 * It also requires CodeIgniter session library to be correctly configured.
 * 
 * @package CodeIgniter
 * @category Libraries
 * @author Pawan Singh Chauhan <pawansinghchouhan05@gmail.com>
 * @license MIT
 * @link https://github.com/pawanchauhan05/Map-CodeIgniter
 * @version 3.1.2
 */

class Map {

	const MAP_LINK = 'http://ipinfo.io/';
        /*
         * @var Map
         */
	private $map;
        
        /*
         * @var Coordinates
         */
        private $coordinates;
        
        /*
         * @var Codeigniter instance
         */
        private $CI;

        /**
         * Map constructor
         */
	public function __construct() {
            $this->CI =& get_instance();
            // load required libraries
            $this->CI->load->library('session');
            $this->map = array();
            $check = $this->CI->session->tempdata('map');
            if(isset($check)) {
               $this->map = $this->CI->session->tempdata('map'); 
            } else {
                $this->map = json_decode(file_get_contents(self::MAP_LINK));
                $this->CI->session->set_tempdata('map', $this->map, 60*30);
            }
            $this->coordinates = array();
            $this->coordinates = explode(",", $this->map->loc); 
	}
        
        /**
         * to get ip
         * @return type
         */
	public function get_ip() {
            return $this->map->ip;
	}
        
        /**
         * to get host name
         * @return type
         */
	public function get_host_name() {
            return $this->map->hostname;
	}

        /**
         * to get city
         * @return type
         */
	public function get_city() {
            return $this->map->city;
	}
        
        /**
         * to get region
         * @return type
         */
	public function get_region() {
            return $this->map->region;
	}
        
        /**
         * to get country
         * @return type
         */
	public function get_country() {
            return $this->map->country;
	}
        
        /**
         * to get latitude
         * @return type
         */
	public function get_latitude() {
           return $this->coordinates[0];
	}
        
        /**
         * to get longitude
         * @return type
         */
        public function get_longitude() {
           return $this->coordinates[1]; 
        }
        
        /**
         * to get organization
         * @return type
         */
        public function organization() {
           return $this->map->org; 
        }

}
