<?php

class Bicycle {

    public $brand;
    public $model;
    public $year;
    public $category;
    public $color;
    public $description;
    public $gender;
    public $price;
    protected $weight_kg;
    protected $condition_id;

    public const CATEGORIES = ['Road','Mountain','Hybrid','Cruiser','City','BMX'];

    public const GENDERS = ['mens','womens','unisex'];

    protected const CONDITION_OPTIONS = [
        1 => 'Beat up',
        2 => 'Decent',
        3 => 'Good',
        4 => 'Great',
        5 => 'Like new',
    ];

    public function __construct($args=[]){
        $this->brand = $args['brand'] ?? NULL;
        $this->model = $args['model'] ?? NULL;
        $this->year = $args['year'] ?? NULL;
        $this->category = $args['category'] ?? NULL;
        $this->color = $args['color'] ?? NULL;
        $this->description = $args['description'] ?? NULL;
        $this->gender = $args['gender'] ?? NULL;
        $this->price = $args['price'] ?? 0;
        $this->weight_kg = $args['weight_kg'] ?? 0.0;
        $this->condition_id = $args['condition_id'] ?? 3;
    }

    public function weight_kg(){
        return number_format($this->weight_kg,2).' kg';;
    }

    function set_weight_kg($value){
        $this->weight_kg = floatval($value);
    }

    function weight_lbs(){
        $weight_lbs = floatval($this->weight_kg)*2.2046226218;
        return number_format($weight_lbs,2).' lbs';
    }

    function set_weight_lbs($value){
        $this->weight_kg = floatval($value)/2.2046226218;
    }

    public function condition(){
        if($this->condition_id>0){
            return self::CONDITION_OPTIONS($this->condition_id);
        } else {
            return "Unknown";
        }
    }
}