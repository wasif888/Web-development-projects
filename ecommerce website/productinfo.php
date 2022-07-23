<?php

function Information ($ProductName,$ProductPrice,$ProductImage)
{
    $Info="
    <div class='col-md-3 col-sm-6 my-md-0'>
    <form action='index.php' method='POST'>
     <div class='card shadow'>
        <div>
            <img src='$ProductImage' class='img-fluid card-img-top'>
        </div>
        <div class='card-body'>
            <h5 class='card-title'>$ProductName</h5>
            <h6>
             <i class='fas fa-star'></i>
             <i class='fas fa-star'></i>
             <i class='fas fa-star'></i>
             <i class='fas fa-star'></i>
             <i class='far fa-star'></i>
            </h6>
            <p class='card-text'>
                this is a short description of the product.
            </p>
            <h5>
                <small><s class='text-secondary'>$1500</s></small>
                <span class='price'>$$ProductPrice</span>
            </h5>
            <button type='submit' name='add'>Add to cart <i class='fas fa-shopping-cart'></i></button>
        </div>
     </div>
    </form>
 </div>
    
    ";
    echo $Info;
}


