<?php
$scripts = Array();

$menu = array(
    'main' => array(
        'tire-balancing' => 'Tire Balancing',
        'tire-mounting' => 'Tire Mounting',
        'tire-repair' => 'Tire Repair',
        'tire-recycling' => 'Recycling',
        'scrap-tire-hauling' => 'Scrap Tire Hauling'
    ),
    'secondary' => array(
        'left' => array(
            'tire-balancing' => 'Tire Balancing',
            'tire-mounting' => 'Tire Mounting',
            'tire-repair' => 'Tire Repair',
            'tire-recycling' => 'Recycling',
            'scrap-tire-hauling' => 'Scrap Tire Hauling'
        ),
        'right' => array(
            'contact-tread-setters-tires' => 'Contact',
            'about-tread-setters-tires' => 'About Tread Setters',
            'why-tread-setters-tires' => 'Why Us'
        )
    )
);

function isActive ($path, $addAttribute = false) {
    if ($_SERVER['REQUEST_URI'] === '/'.$path) {
        return $addAttribute ? 'class="active"' : 'active';
    }
}