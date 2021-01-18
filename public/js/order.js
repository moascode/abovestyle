$(document).ready(function () {

    var btnFinish = $('<button></button>').text('Submit')
                                           .attr("id", "finish-btn")
                                           .addClass('btn btn-info disabled')
                                           .css("display", "none")
                                           .on('click', function(){ $("form").submit(); });

    $.getScript("/js/jquery.smartWizard.min.js",function(){
        $('#smartwizard').smartWizard({
            theme: 'arrows',
            transitionEffect: 'slide',
            transitionSpeed: '400',
            toolbarSettings: {
                toolbarExtraButtons: [btnFinish]
            }
        });

        // Initialize the leaveStep event
        /* $("#smartwizard").on("leaveStep", function(e, anchorObject, currentStepIndex, nextStepIndex, stepDirection) {

        }); */

         // Step show event
         $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
            $("#prev-btn").removeClass('disabled');
            $("#next-btn").removeClass('disabled');
            if(stepPosition === 'first') {
                $("#prev-btn").addClass('disabled');
            } else if(stepPosition === 'last') {
                $("#next-btn").addClass('disabled');
                $("#finish-btn").removeClass('disabled');
                $("#finish-btn").show();
            } else {
                $("#prev-btn").removeClass('disabled');
                $("#next-btn").removeClass('disabled');
            }
        });
     });


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
    $('#inputWeightCharge').keyup(calculateAmount).change(calculateAmount);
    $('#inputDeliveryCharge').keyup(calculateAmount).change(calculateAmount);

});