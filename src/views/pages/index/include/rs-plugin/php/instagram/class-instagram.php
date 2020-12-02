<?php

/**
 * Instagram
 *
 * with help of the API this class delivers all kind of Images from instagram
 *
 * @package    socialstreams
 * @subpackage socialstreams/instagram
 * @author     ThemePunch <info@themepunch.com>
 */

class TP_instagram
{

    /**
     * API key
     *
     * @since    1.0.0
     * @access   private
     * @var      string $api_key Instagram API key
     */
    private $api_key;

    /**
     * Initialize the class and set its properties.
     *
     * @param string $api_key Instagram API key.
     * @since    1.0.0
     */
    public function __construct($api_key)
    {
        $this->api_key = $api_key;
    }

    /**
     * Get Instagram Pictures
     *
     * @param string $user_id Instagram User id (not name)
     * @since    1.0.0
     */
    public function get_public_photos($search_user_id)
    {
        //call the API and decode the response
        $url = "https://api.instagram.com/v1/users/" . $search_user_id . "/media/recent?access_token=" . $this->api_key . "&client_id=" . $search_user_id;
        $rsp = json_decode(file_get_contents($url));
        return $rsp->data;
    }

}

?>