<?php

class Saving_occurrence
{
    public $planet;
    public $color;
    public $distance;
    public $discoverer;
    public $country;
    public $confirmation_counter;

    public function __construct(array $post_information)
    {
        $this->confirmation_counter = 0;
        if(isset($post_information['planet']))
        {
            $this->planet = $post_information['planet'];
            $this->confirmation_counter += 1;
        }
        if(isset($post_information['color']))
        {
            $this->color = $post_information['color'];
            $this->confirmation_counter += 1;
        }
        if(isset($post_information['distance']))
        {
            $this->distance = $post_information['distance'];
            $this->confirmation_counter += 1;
        } 
        if(isset($post_information['discoverer']))
        {
            $this->discoverer = $post_information['discoverer'];
            $this->confirmation_counter += 1;
        }
        if(isset($post_information['country']))
        {
            $this->country = $post_information['country'];
            $this->confirmation_counter += 1;
        }
    }
}
?>
