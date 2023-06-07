$(document).ready(function(){


$(".addToCartBtn").click(function() {

    var url = "http://localhost/qrsystem/lib/cart_db.php";
    var data = {
        p : "addToCart",
        product_id : $(this).attr("product-id")
    }

$.post(url, data , function (response) {

      $(".bi").text(response);      
})



   })

   $(".removeFromCartBtn").click(function() {

    var url = "http://localhost/qrsystem/lib/cart_db.php";
    var data = {
        p : "removeFromCart",
        product_id : $(this).attr("product-id")
    }

$.post(url, data , function (response) {

    window.location.reload();
})



   })

//    $(".continueshopping").click(function() {

//     var url = "http://localhost/qrsystem/lib/cart_db.php";
//     var data = {
//         p : "continueshopping",
//         product_id : $(this).attr("product-id")
//     }

// $.post(url, data , function (response) {

//       $(".bi").text(response);      
// })



//    })

})