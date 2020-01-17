$(document).ready(function () {
    var calculateAmount = function () {
        var total_price = 0;
        var product_price = 0;
        var additional_charge = 0;
        var quantity = $( "#inputQuantity" ).val();
        var price = $( "#inputPrice" ).val();
        var weightCharge = $( "#inputWeightCharge" ).val();
        var deliveryCharge = $( "#inputDeliveryCharge" ).val();

        product_price = quantity * price;
        additional_charge = parseInt(weightCharge) + parseInt(deliveryCharge);
        total_price = product_price + additional_charge;

        var i = 0;
        console.log(total_price);

        /*display the result*/
        $("#displayPrice").text("BDT " + product_price);
        $("#displayCharge").text("BDT " + additional_charge);
        $("#displayAmount").text("BDT " + total_price).css({ 'font-weight': 'bold' });
    }

    var changePrice = function () {
        var category = $( "#inputCategory" ).val();
        if (category !== "1") {
            $( "#inputPrice" ).val("0");
        }
    }

    $('#inputCategory').change(calculateAmount).change(changePrice);
    $('#inputQuantity').keyup(calculateAmount).change(calculateAmount);
    $('#inputPrice').keyup(calculateAmount).change(calculateAmount);

    

});