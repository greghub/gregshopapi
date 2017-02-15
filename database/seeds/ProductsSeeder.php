<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $products = [       
        [
          "title"       => "Canon EF 50mm f/1.8 II Standard AutoFocus Fixed Lens",
          "price"       => "104.95",
          "list_price"  => "250.95",
          "rating"      => "4",
          "description" => "50mm standard lens with f/1.8 maximum aperture Traditional Gauss-type optical design is extremely sharp Focuses as close as 18 inches for extreme close-ups Ideal for natural-looking shots; excellent color balance Measures 2.7 inches in diameter; 1-year warranty",
          "is_featured" => "false"
        ],
        [
          "title"       => "Focusrite Scarlett Solo Compact USB Audio Interface",
          "price"       => "99.00",
          "list_price"  => "160",
          "rating"      => "3.5",
          "description" => "Scarlett Solo is a compact USB audio interface featuring one award-winning Focusrite mic preamp, one instrument input and precision digital converters. Scarlett Solo joins the top selling range of USB audio interfaces in the world and offers both a legendary Focusrite preamp for your microphone and a crystal clear DI / line input for your instruments such as guitar, bass guitar and analogue synths. Precision digital converters capture your performance with studio-quality 24-bit resolution at sample rates of up to 96kHz.",
          "is_featured" => "false"
        ], 
        [
          "title"       => "MXL 2006 Large Gold Diaphragm Condenser Microphone",
          "price"       => "89.77",
          "list_price"  => "153.90",
          "rating"      => "4.5",
          "description" => "Designed with a large, highly sensitive 32mm condenser capsule, MXL 2006 recording microphone captures the details and nuances of vocals, acoustic guitar, electric guitar cabinets, and even steps up for recording percussion. Its excellent sound quality is backed by impressive engineering like Class A circuitry and a balanced transformerless output for outstanding results in recording studios or live applications.",
          "is_featured" => "false"
        ], 
        [
          "title"       => "SAS Spirit 62 Take Down Recurve Bow",
          "price"       => "99.00",
          "list_price"  => "153",
          "rating"      => "3",
          "description" => "This bow will make you perfectly prepared for family fun of backyard shooting or trips into the woods hunting! They are made of maple laminations and strong fiberglass. This will ensure that you will have the flexibility and durability that your child needs. This bow will bend, but it will be difficult to get this thing to break. The riser is made of various different three types of woods. They are chuglam, gmelina arborea, and beech. These woods give the bow riser its pale yellow to cream colored look and are made from some of the most durable trees in Asia. ",
          "is_featured" => "false"
        ], 
        [
          "title"       => "Stainless Steel Straight Razor 6/8 GD 800",
          "price"       => "44.99",
          "list_price"  => "99",
          "rating"      => "2.5",
          "description" => "Inside the sturdy coffin is your ticket to manliness on a budget. It is hands down the best budget carbon stainless steel straight razor. This one may not win any beauty awards, but at less than 1/3 the price for the same quality shave as a Dovo Stainless (which costs $190), it cannot be beat. And, if you really don't like it, we'll take it back.",
          "is_featured" => "false"
        ],
        [
          "title"       => "Gorilla Automotive (71631X) 12mm x 1.50 Thread Size Acorn Chrome X2 Wheel Lock, (Pack of 4)",
          "price"       => "22.86",
          "list_price"  => "50.99",
          "rating"      => "4.5",
          "description" => "Gorilla Automotive is proud to announce our newest wheel lock, the Gorilla X2. Building on the 40 year history of our Original Gorilla lock, the X2 wheel lock was designed with ultimate wheel security in mind. Gorilla X2 Wheel Locks feature a hardened steel construction for security and durability. Patented Dual-Stage technology uses a free-spinning upper lock stage prevents the use of removal tools by protecting the lower stage for the ultimate in wheel security.",
          "is_featured" => "false"
        ],
        [
          "title"       => "Pilot Parallel Calligraphy Pen -1.5 2.4 3.8 6.0mm",
          "price"       => "45.99",
          "list_price"  => "78",
          "rating"      => "4",
          "description" => "Pilot Parallel Calligraphy Pen -1.5 2.4 3.8 6.0mm",
          "is_featured" => "false"
        ],
        [
          "title"       => "Wacom Intuos Creative Stylus 2 CS600PK For iPad",
          "price"       => "45.00",
          "list_price"  => "120",
          "rating"      => "4.5",
          "description" => "Unleash your creativity with the new Intuos. It includes Wacom's leading pen & touch tablet technology, free downloadable creative software and online training.",
          "is_featured" => "false"
        ],
        [
          "title"       => "Victorinox Swiss Army Original Chronograph Men's Quartz Watch 241531",
          "price"       => "89.90",
          "list_price"  => "450",
          "rating"      => "5",
          "description" => "Quartz chronograph movement; Case diameter: 40mm; Chronograph watch; Mineral ... Victorinox Swiss Army Men's 241532 Original Chronograph ",
          "is_featured" => "false"
        ],
        [
          "title"       => "Leatherman Super Tool 300 With 19 Functions & Leather Carrying Sheath",
          "price"       => "54.00",
          "list_price"  => "100",
          "rating"      => "5",
          "description" => "The Leatherman Super Tool 300 EOD is the perfect everyday-carry tool for military and law ... 19 TOOLS ... with beefy features and added EOD-specific tools like a military-performance-spec cap .... You need to add a leather pouch as a carrier.",
          "is_featured" => "false"
        ],
        [
          "title"       => "Walnut Wood Laptop Table Desk Holder Display Stand for iMac",
          "price"       => "23.48",
          "list_price"  => "99.00",
          "rating"      => "3.5",
          "description" => "This wooden stand holder works with many kinds of computer, especially for iMac. With its beautifully-designed shape, it is really steady to hold your compute",
          "is_featured" => "false"
        ],
        [
          "title"       => "LEGO Beatles Yellow Submarine",
          "price"       => "59.99",
          "list_price"  => "59.99",
          "rating"      => "5",
          "description" => "Build The Beatles LEGO Yellow Submarine with rotating propellers and periscopes, an adjustable rudder and a cockpit for the included John, Paul, George",
          "is_featured" => "false"
        ],
        [
          "title"       => "Contigo 24 oz Grace Autoseal Water Bottle",
          "price"       => "10.99",
          "list_price"  => "12.99",
          "rating"      => "4.5",
          "description" => "The AUTOSEAL Grace is a spill-proof, BPA-free reusable water bottle, and its carry loop and one-handed operation makes it ideal for hydrating on the go.",
          "is_featured" => "false"
        ],
        [
          "title"       => "Wüsthof - Tri-Stone Sharpener- 3 Fine, Medium, and Coarse Stones",
          "price"       => "49.95",
          "list_price"  => "69.95",
          "rating"      => "3.5",
          "description" => "Keep all of your Wusthof knives nice and sharp with this Gourmet sharpener from Wusthof. Three fine, medium, and coarse stones sharpen and hone knives with standard double edged blades and single bevel edges. These stones allow for optimal sharpening and honing. A small plastic water bottle is included to keep the sharpening stone well saturated during use.",
          "is_featured" => "false"
        ],
      ];

      foreach($products as $product) {
        Product::create($product);
      } 
    }
}
